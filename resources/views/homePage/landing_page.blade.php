<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/static/css/landing.css">
</head>
<body class="hudai">
    <nav class="navbar">
        <!-- <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a> -->
        <div class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <div class="brand-name">
            <a href="/" 
            style="text-decoration: none; color: aliceblue;">LOGO</a>
        </div>
       
        <div class="navbar-links">
            <ul>
                <li><a href="#First">Home</a></li>
                <li><a href="#sec">Services</a></li>
                <li><a href="#Third">Gate Pass</a></li>
                <li><a href="#Forth">Lost & Found</a></li>
                <li><a href="#Fifth">Complain Box</a></li>
                
                @auth
                    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                @else
                    <!-- <li><a href="{{ route('register') }}">Sign Up</a></li> -->
                    <li><a href="{{ route('login') }}">Sign In</a></li>
                @endif
            </ul>
        </div>
    </nav>
    <div class="main-area">
        
        <Section id="First">
            <span>BUP CAMPUS SECURITY SERVICE</span>
            <p>We protect. We secure. We keep watch,
                so you don't have to.</p>
            <p>We make campus individuals feel
                safe.
            </p>
        </Section>
        <section id="Second">
            <div id='sec' class="heading-bar">
                <p>Our Services</p>
                <span></span>
            </div>
            
    <!-- .............................. card ................................ -->
            <div class="service-banner">
                <div class="service-box s1">
                    <div class="service-image img1">
                        <img src="/static/img/Frame 3.png" alt="alt: Frame 3.png">
                    </div>
                    <div class="content-box">
                        <h3>01.Gate Pass</h3>
                        <p>
                            As our campus is situated inside the catonment,
                            it takes security very seriously.
                            individuals that have any business in the campus must 
                            go through some security measures to be allowed 
                            inside the premisis. 
                            The guard pass is a document that indicates your 
                            premitted access to the university for allocated 
                            time frame.
                        </p>
                    </div>
                </div>
                <div class="service-box s2">
                    <div class="service-image img2">
                        <img src="/static/img/lost.jpg" alt="alt: lost.jpg">
                    </div>
                    <div class="content-box">
                        <h3>02.Lost & Found</h3>
                        <p>Did you lose something in the university?
                            fear not. Our security team is on patrol keeps a 
                            vigilant eye for any such incidents. Here we provide 
                            a simple form which you can fill to notify us of you 
                            predicament.Photos and digital signature feature 
                            allow for even more accurate item retrieval.
                            If the item is found we will reach out to you to let
                            you reunite with your belongings.
                        </p>
                    </div>
                </div>
                <div class="service-box s3">
                    <div class="service-image img3">
                        <img src="/static/img/help.jpg" alt="alt: help">
                    </div>
                    <div class="content-box">
                        <h3>03.Online Help</h3>
                        <p>This website was made into being for the sole purpose
                            of providing the services of the campus security cell
                            to the general populas and make it convinent for them 
                            when dealing with things like issuing a report or 
                            complain. It aims to digitalize the interaction between
                            the campus population and the security team.
                            To let the population come forward and express their 
                            concerns and needs with us.
                        </p>
                    </div>
                </div>
            </div>
    <!-- .............................. card ................................ -->
        </section>
        <Section id="Third">
            <div id='tri' class="heading-bar">  
                <p>Gate Pass</p>
                <span></span>
            </div>
            <div class="form-banner">
                <div class="form-image">
                    <img src="/static/img/gate.png" alt="">
                </div>
                <div class="form-content">
                    <p>What to get pre granted permission
                        to visit the campus?</p>
                    <a href="{{route('guard_pass.create')}}">
                        <input type="button" 
                        style="cursor: pointer;"
                        value="REQUEST">
                    </a>
                </div>
            </div>
        </Section>
        <Section id="Forth">
            <div id='for' class="heading-bar">  
                <p>Lost & Found</p>
                <span></span>
            </div>
            <div class="form-banner reverse-col">
                
                <div class="form-content">
                    <p>Lost something in the 
                        Campus?</p>
                    <div>
                        We look for all lost belonging in the campus premisis.
                        Any lost items can be reported to the authority with our 
                        service and on discovery you will be notified.
                    </div>
                        <a href="{{route('lost_found.create')}}">
                            <input type="button" value="INFORM" 
                            style="cursor: pointer;">
                        </a>

                </div>
                <div class="form-image">
                    <img src="/static/img/lost_found_post.png" alt="alt: lost_found_post">
                </div>
            </div>
            
        </Section>
        <section id="Fifth">
            <div id='fif' class="heading-bar">  
                <p>Complain Box</p>
                <span></span>
            </div>
            <div class="form-banner">
                <div class="form-image">
                    <img src="/static/img/complain.png" alt="">
                </div>
                <div class="form-content">
                    <table>
                        <tr><td><label for="complainer-name">Name:</label></td></tr>
                        <tr><td>
                            <input type="text" id="complainer-name" placeholder="Md Raihan Ahmed"
                            required>
                        </td></tr>
                        <tr><td><label for="complain-name">E mail:</label></td></tr>
                        <tr><td>
                            <input type="text" id="complain-name" placeholder="info@gmail.com"
                            required>
                        </td></tr>
                        <tr><td><label for="complain-ki">Description:</label></td></tr>
                        <tr><td>
                            <textarea name="" id="complain-ki" 
                            cols="30" placeholder="lost item: money bag, color: white, date: 29 aug 2022, near annex"
                            required></textarea>
                        </td></tr>
                        <tr><td 
                            id="submit-button-box">
                            <input 
                            id="submit" type="submit" value="SUBMIT" required>
                        </td></tr>
                    </table>
                </div>
            </div>
        </section>
        
        <Section id="Sixth">
            <div id='six' class="heading-bar">  
                <p>CAMPUS LOCATION</p>
                <span></span>
            </div>
            <div class="form-banner reverse-col">
                <div class="form-content">
                    <p>Bangladesh University of Professionals</p>
                </div>
                <div class="form-image">
                    <img src="/static/img/map2.png" alt="">
                </div>
            </div>
        </Section>
        <footer>
            <div class="footer-flex">    
                <div class="footer-box">
                    <div class="footer-lists">
                        <ul>
                            <li><a href="#">Bangladesh University of Professionals</a></li>
                            <li>Mirpur DOHS, Dhaka-1216</li>
                            <li>01946-332412</li>
                            <li>+8801946-332412</li>
                            <li><a href="info@bup.edu.bd">info@bup.edu.bd</a></li>
                        </ul>
                    </div>
                    <div class="footer-lists">
                        <ul>
                            <li><a href="#">About the University</a></li>
                            <li><a href="#">Mission</a></li>
                            <li><a href="#">Core Values</a></li>
                            <li><a href="#">Objectives</a></li>
                            <li><a href="#">Vision</a></li>
                        </ul>
                    </div>
                    <div class="footer-lists">
                        <ul>
                            <li><a href="#">Research at BUP</a></li>
                            <li><a href="#">MPhil & PhD Programs</a></li>
                            <li><a href="#">Computer Research</a></li>
                            <li><a href="#">Ongoing Research</a></li>
                            <li><a href="#">BUP Journal</a></li>
                        </ul>
                    </div>
                    <div class="footer-lists">
                        <ul>
                            
                            <li><a href="#">ASHC</a></li>
                            <li><a href="#">Web Mail</a></li>
                            <li><a href="#">Downlaods</a></li>
                            <li><a href="#">Library</a></li>
                            <li><a href="#">APA</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright" style="color: white;">
                &copy; 
                2022 Bangladesh University of Professionals.
                All Rights Reservered.  
            </div>
        </footer>
    </div>
    <script src="/static/js/simple.js"></script>

</body>
</html>