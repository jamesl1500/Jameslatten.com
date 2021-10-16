<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index.index');

Route::get('/categories/{id}', function($id)
{
    if($id != "")
    {
        // Connect
        $url = "https://api.bigcommerce.com/stores/j2fozjob/v3/";

        $client_id = "7inkiy19zw2afn0fsglaq0ew6r073w6";
        $client_secret = "1c7e604c8f7494457b450e42e79c67b1c4c8030e5f35f7e5fe80b9e0bcbbd9a6";
        $access_token = "29rrdtxf3z0swjd7aa9sq1krkgfx0fd";

        // Curl
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.bigcommerce.com/stores/j2fozjob/v3/catalog/products?categories:in=$id",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
              "x-auth-token: " . $access_token,
            ),
        ));

        // Test
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
           // Passed 
           $data = json_decode($response, true);

           // Payload
           $payload = array();

           foreach($data['data'] as $product)
           {
                $pid = $product['id'];
                
                // Get info
                if($product["is_visible"] == true && $product['availability'] == "available")
                {
                    $payload[] = $product;
                }
            }

            //print_r($payload);
            header("Access-Control-Allow-Origin: *");
            //header("Content-Type: text/JSON");

            //$return = str_replace('[', '', json_encode($payload));
            //echo str_replace(']', '', $return);

            echo json_encode($payload);
        }
    }
});

Route::get('/categories/{id}/image', function($id)
{
    if ($id != "")
    {
        if($id != "")
        {
            // Connect
            $url = "https://api.bigcommerce.com/stores/j2fozjob/v3/";
    
            $client_id = "7inkiy19zw2afn0fsglaq0ew6r073w6";
            $client_secret = "1c7e604c8f7494457b450e42e79c67b1c4c8030e5f35f7e5fe80b9e0bcbbd9a6";
            $access_token = "29rrdtxf3z0swjd7aa9sq1krkgfx0fd";
    
            // Curl
            $curl = curl_init();
    
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.bigcommerce.com/stores/j2fozjob/v3/catalog/products/$id/images",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                  "accept: application/json",
                  "content-type: application/json",
                  "x-auth-token: " . $access_token
                ),
            ));
    
            // Test
            $response = curl_exec($curl);
            $err = curl_error($curl);
    
            curl_close($curl);
    
            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                header("Access-Control-Allow-Origin: *");
                header("Content-Type: text/JSON");
                echo $response;
            }
        }
    }
});

