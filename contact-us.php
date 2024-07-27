<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" type="image/x-icon" href="/images/v.png">

</head>

<body>



<?php
include("header.php");
?>

    <!-- End of navbar -->



    <button class="enquiry-button" onclick="openSidebar()">Enquiry</button>

    <div id="mySidebar" class="sidebar">
        <span class="close-btn" onclick="closeSidebar()">&times;</span>
        <div class="sidebar-content">
            <h2>Enquiry Form</h2>
            <form>
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <input type="tel" placeholder="Your Phone Number" required>
                <textarea placeholder="Your Message" rows="5" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <!-- -----------------About section end---------------- -->
    <div class="banner">
        <h1>Contact Us</h1>
    </div>
    
    


    <section class="Contact-us">
        <div class="container">
            <!-- <h2>Contact Us</h2> -->
            <div class="form-section">
                <div class="left">
                    <img src="https://content.kaspersky-labs.com/fm/press-releases/47/471986a33673655f3e539410022f8368/processed/mobile-img-05-q75.jpg" alt="Contact Us Image">
                </div>
                <div class="right">

                    <h2 style="text-align: left;">Enquiry Form</h2>
                    <form>
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="tel" name="phone" placeholder="Phone Number" required>
                        <textarea name="message" placeholder="Message" required></textarea>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <div class="map">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.864704920578!2d77.31172427553611!3d28.453494575763003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4c5f2fef19d1cd77%3A0x3147cf6cbb69103c!2sVinayak%20Ayurveda%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1720854335349!5m2!1sen!2sin" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>

         
        </div>
    </section>





    <!-- ------------------------Footer area start--------------------- -->
    <section class="footer">
        <div class="footer-row">
          <div class="footer-col">
            <h4>Quick Links</h4>
            <ul class="links">
              <li><a href="index.html">Home</a></li>
              <li><a href="company-profile.html">Company Profile</a></li>
              <li><a href="pcd-franchise.html">PCD Franchise</a></li>
              <li><a href="third-party-services.html">3rd Party Manufacturing</a></li>
              <li><a href="contact-us.html">Contact Us</a></li>
    
            </ul>
          </div>
    
          <div class="footer-col">
            <h4>Our Policies</h4>
            <ul class="links">
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Return Policy</a></li>
              <li><a href="#">Terms & Conditions</a></li>
    
            </ul>
          </div>
    
          <div class="footer-col">
            <h4>Contacts</h4>
            <ul class="links">
              <li><a href="#">Plot No. 12 New DLF Industrial Area
                </a></li>
              <li><a href="#">Phase 1, Faridabad (Haryana)
                </a></li>
              <li><a href="#">Pin-121003
                </a></li>
              <li><a href="#">Mobile: +91 8882102422
                </a></li>
              <li><a href="#">Monday – Saturday 10:00 AM – 06:00</a></li>
              <li><a href="#">Email: info@vinayakayurveda.in</a></li>
            </ul>
          </div>
    
          <div class="footer-col">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.86470492057!2d77.31172427535164!3d28.453494575762974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4c5f2fef19d1cd77%3A0x3147cf6cbb69103c!2sVinayak%20Ayurveda%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1719211692897!5m2!1sen!2sin"
              width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="icons">
              <i class="fa-brands fa-facebook-f"></i>
            
              <i class="fa-brands fa-instagram"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-linkedin"></i>
            </div>
          </div>
        </div>
      </section>

    <!-- ------------------------Footer Area End--------------------- -->


    <script src="script.js"></script>

    <script>
        function openSidebar() {
            document.getElementById("mySidebar").style.width = "300px";
        }

        function closeSidebar() {
            document.getElementById("mySidebar").style.width = "0";
        }
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>