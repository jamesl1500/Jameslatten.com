<?php
$stylesheet = "index";
?>
@extends('layouts.index')

@section('content')
<div class="banner">
    <div class="cover">
        <!-- Header -->
        @include('templates.header')
    </div>
</div>

<!-- Initial -->
<div class="stage stageOne" id="welcome">
    <div class="innerStage">
        <div class="profileImage">
            <img src="https://scontent-ort2-2.cdninstagram.com/v/t51.2885-15/sh0.08/e35/p640x640/71715869_445344759453901_7446227129402506810_n.jpg?_nc_ht=scontent-ort2-2.cdninstagram.com&_nc_cat=101&_nc_ohc=0k1lR6aDbZkAX9cFzis&oh=c2ae650eaad8492fa4fd790568c5e3cc&oe=5EB230EF" />
        </div>
        <div class="mobile">
            <h3>JL</h3>
        </div>
        <div class="desktop">
            <h3>Welcome</h3>
        </div>
        <h3>I'm James - Web developer, designer, writer, and a future nurse from Ohio.</h3>
        <h4><a data-toggle="tooltip" title="Twitter" href="https://twitter.com/jaye_aesthetic"><i class="fab fa-twitter"></i></a> <a data-toggle="tooltip" title="Tumblr" href="https://jayeglizzy.tumblr.com/"><i class="fab fa-tumblr"></i></a> <a data-toggle="tooltip" title="Instagram" href="https://www.instagram.com/jaye.aesthetic/"><i class="fab fa-instagram"></i></a> <a data-toggle="tooltip" title="Medium" href="https://medium.com/@jaye.aesthetic"><i class="fab fa-medium"></i></A> <style>.bmc-button img{height: 24px !important;width: 25px !important;margin-bottom: 1px !important;box-shadow: none !important;border: none !important;vertical-align: middle !important;}.bmc-button{padding: 7px 10px 7px 10px !important;line-height: 25px !important;height:41px !important;min-width:217px !important;text-decoration: none !important;display:inline-flex !important;color:#ffffff !important;background-color:#000000 !important;border-radius: 5px !important;border: 1px solid transparent !important;padding: 7px 10px 7px 10px !important;font-size: 22px !important;letter-spacing: 0.6px !important;box-shadow: 0px 1px 2px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 1px 2px 2px rgba(190, 190, 190, 0.5) !important;margin: 0 auto !important;font-family:'Cookie', cursive !important;-webkit-box-sizing: border-box !important;box-sizing: border-box !important;-o-transition: 0.3s all linear !important;-webkit-transition: 0.3s all linear !important;-moz-transition: 0.3s all linear !important;-ms-transition: 0.3s all linear !important;transition: 0.3s all linear !important;}.bmc-button:hover, .bmc-button:active, .bmc-button:focus {-webkit-box-shadow: 0px 1px 2px 2px rgba(190, 190, 190, 0.5) !important;text-decoration: none !important;box-shadow: 0px 1px 2px 2px rgba(190, 190, 190, 0.5) !important;opacity: 0.85 !important;color:#ffffff !important;}</style><link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet"><a class="bmc-button" target="_blank" href="https://www.buymeacoffee.com/jameslatten"><img src="https://cdn.buymeacoffee.com/buttons/bmc-new-btn-logo.svg" alt="Buy me a coffee"><span style="margin-left:5px;font-size:18px !important;">Buy me a coffee</span></a></h4>
    </div>
</div>

<!-- Stage one -->
<div class="stage stageTwo" id="about">
    <div class="stageHead">
        <h1>About</h1>    
    </div>    
    <div class="innerStage">
        <h3>Theres not much to say about me, I'm just some guy that likes to create things. I've always had a passion for programming, and now I have an even bigger passion for patient care. I was born <b>February 13th, 1999</b>. Since then I've been riding this rollarcoaster of a life all the way to where I am now.</h3><br />
        <h3 class="">I'm one of Jehovahs Witnesses and I spend a lot of my time going door to door talking to neighbours about god and his son. Oh, I love to read books, I love listening to indie music and I love to just explore different areas and different things. Manga and Poetry are my favorite book genres by the way! I love photography as well and taking beautiful looking pictures.</h3><br />
        <h3>I also run a small web development studio called <a href="https://sitelyftstudios.com"">Sitelyft Studios, LLC</a>. I also go by <a href="blog.jameslatten.com">Jaye Aesthetic</a>. Well yeah, thats just a few things. Scroll down more and get to know me a little bit better...</h3>
    </div>
</div>

<!-- Stage three -->
<div class="stage stageThree" id="skills">
    <div class="stageHead">
        <h1>Skills</h1>    
    </div>    
    <div class="innerStage">
        <h3>I'm talented in some ways:</h3>
        <div class="row">
            <div class="leftTable table col-lg-4">
                <h4>Web Development</h4>
                <ul>
                    <li>PHP</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>jQuery</li>
                    <li>SASS</li>
                    <li>Laravel Framework</li>
                    <li>Codeigniter Framework</li>
                    <li>WebSockets</li>
                    <li>LAMP Stacks</li>
                    <li>LEMP Stacks</li>

                </ul>
            </div>
            <div class="rightTable table col-lg-4">
                <h4>Patient Care</h4>
                <ul>
                    <li>Nurse Assisting</li>
                    <li>BLS Certified</li>
                    <li>Compassion</li>
                    <li>Critical Care</li>
                    <li>EKG Trained</li>
                    <li>Foley Discontinuation</li>
                    <li>Medical Records</li>
                    <li>Charting</li>
                    <li>Organizing</li>
                    <li>Team Player</li>
                    <li>Medical Terminology</li>
                </ul>
            </div>
            <div class="rightTable table col-lg-4">
                <h4>Creativity & Hobbies</h4>
                <ul>
                    <li>Photography</li>
                    <li>Writing</li>
                    <li>Web Designing</li>
                    <li>Social Media</li>
                    <li>Sketching</li>
                    <li>Reading</li>
                    <li>Music</li>
                    <li>Adventuring</li>
                    <li>Traveling</li>
                    <li>Studying</li>
                    <li>Ministry Work</li>
                </ul>
            </div>
        </div>
        <h3>I cant wait to learn more things</h3>
    </div>
</div>

<!-- Stage four -->
<div class="stage stageFour" id="projects">
        <div class="stageHead">
        <h1>Projects</h1>    
    </div>    
    <div class="innerStage">
        <h3>These are the latest Web Development projects im working on:</h3>
        <div class="row">
            <div class="leftTable table col-lg-4">
                <h4><a href="https://kronicals.com/">Kronicals</a></h4>
                <span>A community where aspiring poets can find their voice<br /><span>PHP, JS, HTML, Laravel</span></span>
            </div>
            <div class="rightTable table col-lg-4">
                <h4><a href="https://mutterly.com/">Mutterly</a></h4>
                <span>Share your thoughts and fears anonymously<br /><span>PHP, JS, HTML, Laravel</span></span>
            </div>
            <div class="rightTable table col-lg-4">
                <h4><a href="https://blog.jameslatten.com/">Jaye Aesthetic</a></h4>
                <span>A place where my voice can be heard<br /><span>PHP, JS, HTML, WordPress</span></span>
            </div>
            <div class="leftTable table col-lg-4">
                <h4><a href="https://larryalesley.com/">Larry A Lesley</a></h4>
                <span>A portfolio website created for a special client<br /><span>PHP, JS, HTML, Laravel</span></span>
            </div>
            <div class="rightTable table col-lg-4">
                <h4><a href="https://sitelyftstudios.com/">Sitelyft Studios, LLC</a></h4>
                <span>My web development agency based in Ohio<br /><span>PHP, JS, HTML, Laravel</span></span>
            </div>
            <div class="rightTable table col-lg-4">
                <h4>Jarvis Invoicing (Coming Soon)</h4>
                <span>A unique invoicing platform for small businesses!<br /><span>PHP, JS, HTML, Laravel</span></span>
            </div>
        </div>
    </div>
</div>

<!-- Stage five -->
<div class="stage stageFifth" id="education">
        <div class="stageHead">
        <h1>Education</h1>    
    </div>    
    <div class="innerStage">
        <h3>This is the reason why I'm so smart now:</h3>
        <div class="row">
            <div class="leftTable table col-lg-6">
                <h4>ECOT</h4>
                <span>I've been homeschooled all of my life. Here I spent all of my high school years and was provided the oppurtunity to go to college during my 12th year.<br /><span>Graduated: 2017</span></span>
            </div>
            <div class="rightTable table col-lg-6">
                <h4>Lorain County Community College</h4>
                <span>Currently I'm pursuing my associates degree in nursing. I plan on entering the nursing program here once all of my prerequisites are completed.<br /><span>Graduaiton: 2022</span></span>
            </div>
            <div class="rightTable table col-lg-6">
                <h4>Cleveland State University</h4>
                <span>Currently pursuing my second degree in Psychology. I chose this major because I'm very fond of the brain and how it operates!<br /><span>Graduaiton: 2022</span></span>
            </div>
        </div>
    </div>
</div>

<!-- Stage six -->
<div class="stage stageSix" id="contact">
        <div class="stageHead">
        <h1>Contact Me</h1>    
    </div>    
    <div class="innerStage">
        <h3>Wanna work together on something?</h3>
        <div class="contacts">
            <a data-toggle="tooltip" title="Email"  href="mailto:hello@sitelyftstudios.com?subject=Lets work together"><i class="fas fa-envelope"></i> hello@sitelyftstudios.com</a><br />
            <a data-toggle="tooltip" title="Phone Number" href="tel:1-440-328-8227"><i class="fas fa-phone"></i> 1-440-328-8227</a>
        </div>
    </div>
</div>

<!-- Stage seven -->
<div class="stage stageSeven" id="copyright">
    <div class="innerStage">
        <h3>Copyright &copy; Jameslatten.com</h3>
    </div>
</div>
@endsection