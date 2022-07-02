<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bellefair&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
<!-- reset css -->
<link rel="stylesheet" href="./assets/css/reset.css">
<!-- styles -->
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="./assets/css/responsive.css">
<title>CONTACT</title>
</head>
<body>
<!-- header section starts here-->
  <div class="header">
    <h1 class="header__logoH1">
      <a class="header__logo" title="REENA ESSENTIALS" href="index.html">
      </a>
    </h1>
          <div id="menuToggle">
              <input type="checkbox" />
                  <span></span>
                  <span></span>
                  <span></span>
             </div>
      <div class="header__navbar" >
          <ul class="header__navbarli"  id="header_navbarli">
            <li> <a class="header__navbarlist" href="about.html" title="about us"> About Us</a></li>
            <li> <a class="header__navbarlist" href="Consult.html" title="Consult">Consult</a></li>
            <li> <a class="header__navbarlist" href="ourprograms.html" title="our Programs">Our Programs</a></li>
            <li> <a class="header__navbarlist"  href="testimonial.html" title="Testimonials"> Testimonials</a></li>
            <li> <a class="header__navbarlist" href="shop.html" title="shop ">Shop</a></li>
            <li class="current"> <a class="header__navbarlist"  href="contact.html" title="contact ">Contact Us</a></li>
          </ul>
      </div>
  </div>
  <!-- header section ends here-->
   <!-- banner starts from here -->
  <div class="contactbanner">
  <img src="./assets/images/contactbanner.jpg" class="contactbanner__img" alt="contactbanner"/>
</div>
<!-- banner ends from here -->
   <!-- contactus section starts here-->
   <div class="clear"></div>
   <div class="contact">
      <div class="contact__main">
          <h1 class="contact__heading">Contact Us </h1>
          <input type="text" name="name" placeholder="Your Name" class="contact__input" id="name">
          <input type="text" name="email" placeholder="Your Email" class="contact__input" id="email">
          <input type="number" min="0" max="100" name="Phoneno" placeholder="Your Phone " class="contact__input" id="phoneno">
          <input type="text" name="message" placeholder="message" class="contact__input" id="message"><br>
            <p class='contact__errMsg' id="errname" style="display:none;">Please enter the name</p> 
            <p class='contact__errMsg' id="erremail" style="display:none;">Please enter the email</p> 
            <p class='contact__errMsg' id="errphoneno" style="display:none;">Please enter the phone no</p> 
            <p class='contact__errMsg' id="errmsg" style="display:none;">Please enter the message</p>
            <p class='contact__sucessmsg' id="success" style="display:none;">Request sent successfully<!-- Thank you for showing interset -->.</p>
          <button class="contact__button" onclick="Submit()">Send</button>
      </div>
     </div>
    <div class="map">
      <iframe width="100%" height="400px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15544.852225828514!2d80.2452474!3d13.0856795!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe16de8f8f3673ca6!2sRena%20Essentials!5e0!3m2!1sen!2sin!4v1655748570997!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="border:0" allowfullscreen></iframe>
    </div>
   <!-- contactus section enda here-->
<!-- footer section starts here-->
  <div class="footer">
    <div class="footer__content"> 
      <div class="footer__leftDiv">
        <a href="#"><img src="./assets/images/logo.jpeg" class=" footer__logo" alt="logo">  </a>
      </div> 
        <div class="footer__rightDiv">
          <div class="footer__quicklinks myClass">
            <h6 class="footer__quicklinksheader">Quick Links </h6>
              <ul>
              <li><a href="about.html" class="footer__menu">About Us</a></li>
              <li><a href="services.html" class="footer__menu">Consult</a></li>
              <li><a href="process.html" class="footer__menu">Our Programs</a></li>
              <li><a href="whyus.html" class="footer__menu">Testimonials</a></li>
              <li><a href="careers.html" class="footer__menu">Shop</a></li>
              <li><a href="contact.html" class="footer__menu">Contact Us</a></li>
              </ul>
          </div>
            <div class="footer__register myClass">
              <h5 class="footer__registerheader">Registered Office </h5>
                <p class="footer__regaddress">
                  Flat:4131 TVH Lumbini Square,   <br>
                    No.127 bricklyn road <br>
                  Purasaiwakkam<br>
                  Chennai - 600007<br>
                  Tamil Nadu, India </p>
            </div>
          <div class="footer__share myClass">
                <div class="footer__business">
                    <h5 class="footer__contactheader"> For business enquiries,</h5>
                      <p class="footer__contdetails"><img src="./assets/images/envelope.png" class="envelope" alt="envelope"> <a href="mailto:admin@theuxgurus.com" class="footer__mail" title="careers">reenajaindoc@gmail.com </a></p>
                      <p class="footer__contdetails"><img src="./assets/images/call.png" class="call" alt="call"> <a class="footer__mail" href="tel:01234567890">+91 98413 43513</a></p>
                </div>
          </div>
            <div class="footer__contact myClass">
              <h5 class="footer__followheader"> Follow On</h5>
                <div class="footer__social-networks">
                  <a href="https://www.facebook.com/UxgurusConsultancy" target="_blank" class="facebook footer-icon"><img src="./assets/images/facebook-logo.png" class="facebook" alt="fb"></a>
                  <a href="https://twitter.com/UXG_Consultancy" target="_blank" class="twitter footer-icon"><img src="./assets/images/twitter-logo.png" class="twitter-logo" alt="twitter-logo"></a>
                  <a href="https://www.linkedin.com/in/uxgurus/" target="_blank" class="google footer-icon"><img src="./assets/images/linkedin-logo.png" class="linkedin" alt="linkedin-logo"></a>
                  <a href="https://www.instagram.com/your_uxgurus/" target="_blank" class="google footer-icon"><img src="./assets/images/instagram.png" class="instagram" alt="instagram-logo"></a>     
            </div>  
        </div>
      </div>
    </div>
      <hr >
        <p class="footer__copyright">© Copyright 2022 REENA JAIN </p>
  </div>
<!-- footer section ends here-->

<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="./js/main.js"></script> 
<script src="./js/resCarousel.js"></script>
  </body>
  </html>