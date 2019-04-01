<?php
$stylesheet = "index";
?>
@extends('layouts.index')

@section('content')
<div class="banner">
    <div class="cover">

    </div>
</div>

<!-- Initial -->
<div class="stage stageOne" id="welcome">
    <div class="innerStage">
        <div class="mobile">
            <h3>JL</h3>
        </div>
        <h3>I'm James - Web developer, designer, writer, and a future nurse from Ohio.</h3>
    </div>
</div>

<!-- Stage one -->
<div class="stage stageTwo" id="about">
    <div class="stageHead">
        <h1>About</h1>    
    </div>    
    <div class="innerStage">
        <h3>Theres not much to say about me, I'm just some guy that likes to create things. I've always had a passion for programming, and now I have an even bigger passion for patient care. I was born <b>February 13th, 1999</b>. Since then I've been riding this rollarcoaster of a life all the way to where I am now.</h3>
        <h3 class="right">Oh, I love to read books, I love listening to indie music and I love to just explore different areas and different things. Manga and Poetry are my favorite book genres by the way!</h3><br />
        <h3>I also run a small web development studio called <a href="https://sitelyftstudios.com"">Sitelyft Studios, LLC</a>. Well yeah, thats just a few things. Scroll down more and get to know me a little bit better...</h3>
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
            <div class="leftTable table col-lg-6">
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
            <div class="rightTable table col-lg-6">
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
                <h4>Jarvis Invoicing</h4>
                <span>A unique invoicing platform for small businesses!<br /><span>PHP, JS, HTML, Laravel</span></span>
            </div>
            <div class="rightTable table col-lg-4">
                <h4>Personal Blog</h4>
                <span>A place where my voice can be heard<br /><span>PHP, JS, HTML, WordPress</span></span>
            </div>
        </div>
    </div>
</div>

<!-- Stage five -->
<div class="stage stageFifth" id="projects">
        <div class="stageHead">
        <h1>Education</h1>    
    </div>    
    <div class="innerStage">
        <h3>This is the reason why I'm so smart now:</h3>
        <div class="row">
            <div class="leftTable table col-lg-6">
                <h4>ECOT</h4>
                <span>I've been homeschooled all of my life. Here I spent all of my high school years and was provided the oppurtunity to go to college during my 12th year.<br /><span>Graduation: 2017</span></span>
            </div>
            <div class="rightTable table col-lg-6">
                <h4>Lorain County Community College</h4>
                <span>Currently I'm pursuing my associates degree in nursing. I plan on entering the nursing program here once all of my prerequisites are completed.<br /><span>Graduaiton: 2021</span></span>
            </div>
        </div>
    </div>
</div>

<!-- Stage six -->
<div class="stage stageSix" id="projects">
        <div class="stageHead">
        <h1>Contact Me</h1>    
    </div>    
    <div class="innerStage">
        <h3>Wanna work together on something?</h3>
        <div class="contacts">
            <a href="mailto:james@sitelyftstudios.com?subject=Lets work together">James@sitelyftstudios.com</a>
            <a href="tel:216-889-7822">216-889-7822</a>
        </div>
    </div>
</div>

<!-- Stage seven -->
<div class="stage stageSeven" id="projects">
    <div class="innerStage">
        <h3>Copyright &copy; Jameslatten.com</h3>
    </div>
</div>
@endsection