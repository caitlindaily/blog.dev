@extends('layouts.master')
<html>
<head>
 @section('top-script') 
<title>C.Daily Resume</title>

<meta name="viewport" content="width=device-width"/>
<meta charset="UTF-8"> 

<link type="text/css" rel="stylesheet" href="/webpage_ext/CV-Template/style.css">
 <link type="text/css" rel="stylesheet" href="/webpage_ext/css/resumeicons.css">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
@stop
@section('content')
<body id="top">
<div id="cv" class="instaFade">
  <div class="mainDetails">
    <div id="headshot" class="quickFade">
      <img src="/webpage_ext/CV-Template/Caitlin2.jpg" alt="Caitlin Daily" />
    </div>
    
    <div id="name">
      <h1 class="quickFade delayTwo">Caitlin Daily</h1>
      <h2 class="quickFade delayThree">Web Developer</h2>
    </div>
    
    <div id="contactDetails" class="quickFade delayFour">
      <ul>
        <li>e: <a href="mailto:cdaily87@gmail.com.com" target="_blank">cdaily87@gmail.com</a></li>
        <li>p: 8066783525</li>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
  
  <div id="mainArea" class="quickFade delayFive">
    <section>
      <article>
        <div class="sectionTitle">
          <h1>Personal Profile</h1>
        </div>
        
        <div class="sectionContent">
          <p>So I've recently discovered a whole new world called "web development" and decided to change my career path. Up until now, I always
            thought I wanted a career in the medical field but realized I didn't have a passion for it. This magical language of coding
            has become my new true passion. I am available to hire for full time. I'm looking for a person/company that will 
            mentor and invest in me to transcend my skills and make me a truly valuable member.  
          </p>
        </div>
      </article>
      <div class="clear"></div>
    </section>

    <section>
    <div class="sectionTitle">
      <h1>Key Skills</h1>
    </div>
    
    <div class="sectionContent">
      <ul class="keySkills">
        <li>Linux</li>
        <li>Apache</li>
        <li>MySQL</li>
        <li>PHP</li>
        <li>Git + GitHub</li>
        <li>Javascript + JQuery</li>
        <li>Laravel framework</li>
        <li>HTML/CSS</li>
        <li>Vagrant virtual machine</li>
      </ul>
    </div>
    <div class="clear"></div>
  </section>  
    
  <section>
    <div class="sectionTitle">
      <h1>Education</h1>
    </div>
    
    <div class="sectionContent">
      <article>
        <h6><img src="/webpage_ext/img/codeup-logo.png"></img></h6>
        <p>Codeup is an intensive 12 week boot camp for people wanting to become web programmers based in San Antonio, Tx.
          I learned programming and web development with the LAMP stack: 
          Linux/Apache/MySQL/PHP and client-side JavaScript using the Laravel framework and jQuery.
        </p>
      </article>
      
      <article>
        <h2>University of the Incarnate Word</h2>
        <p class="subDetails">Bachelor's of Nuclear Medicine</p>
        <br>
      </article>
    </div>
    <div class="clear"></div>
  </section>  
    
    <section>
      <div class="sectionTitle">
        <h1>Work Experience</h1>
      </div>
      
      <div class="sectionContent">
        <article>
          <h2>Laser Technician</h2>
          <p class="subDetails">Clarify</p>
          <p class="subDetails"> February 2013 - May 2014 </p>
          <p class="subDetails"> June 2009 - January 2011</p>
          <p> I was able to deliver exceptional laser service to clients while also assessing cosmetic needs. 
            Communication was a huge asset when having to relay scheduling/client concerns between management and clients 
            and keeping the schedule up to date and flowing as situations arose. I cleaned rooms and stocked when
            needed, worked with an all female staff with no complications, was always on schedule
            with completing my procedures and had consistant positive feedback from clients and management. 
          </p>
        </article>
        
        <article>
          <h2>Nuclear Medicine Intern</h2>
          <p class="subDetails">January 2012 - December 2012</p>
          <p>I prepared and administered radioactive chemical compounds, performed patient imaging procedures using sophisticated 
            radiation-detecting instrumentation and ran quality assurance protocols on camera daily/weekly.I was fortunate to have 
            training in PET/CT. I accomplished computer processing and image enhancement and provided images, data analysis, and 
            patient information to the physician for diagnostic interpretation.
          </p>
        </article>
        
        <article>
          <h2>Teller</h2>
          <p class="subDetails">November 2007 - July 2008</p>
          <p>I managed individual and commercial accounts of up to $100K, ensured the confidentiality of client account
           information, and dispensed cashier checks and money orders through proper procedure.</p>
        </article>
      </div>
      <div class="clear"></div>
    </section>
    </div>
</div>
@stop
</body>
</html>






 