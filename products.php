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

        <style>
            button{
                border-radius: 5px;
                padding: 0.5rem;
                transition: 0.3s;
                border: #fff;
                background-color: #ccc;
                color: #000;
                font-weight: 500;
            }

            button:hover{
                color: white;
                background-color: #363B3F;
            }


        
        </style>
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
        <h1 style="font-size: 4rem;">Products</h1>
    </div>
    
    
    <div class="product-section">

        <div class="product-container" style="    display: grid; 
    grid-template-columns: repeat(auto-fill, minmax(275px, 1fr)); 
    gap: 2rem;     
    margin-top:2rem;
    margin-bottom: 5rem; 
    padding: 2rem; border-radius: 10px;">

        
                <div class="card" style=" height: auto">
                    <img src="images/banner/1.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 style="text-transform: capitalize;" class="card-title">Karela Jamun</h5>
                        <p class="card-text price">Price: <i class="fa-solid fa-indian-rupee-sign"
                                style="font-size: 1rem"></i>99 / Piece</p>

                        <p class="card-text">4444</p>
                        <a href="product-description"><button class="btn-open-popup" onclick="">View More</button></a>
                    </div>
                </div>

                <div class="card" style=" height: auto">
                    <img src="images/banner/1.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 style="text-transform: capitalize;" class="card-title">Karela Jamun</h5>
                        <p class="card-text price">Price: <i class="fa-solid fa-indian-rupee-sign"
                                style="font-size: 1rem"></i>99 / Piece</p>

                        <p class="card-text">4444</p>
                        <a href="product-description"><button class="btn-open-popup" onclick="">View More</button></a>
                    </div>
                </div>

                <div class="card" style=" height: auto">
                    <img src="images/banner/1.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 style="text-transform: capitalize;" class="card-title">Karela Jamun</h5>
                        <p class="card-text price">Price: <i class="fa-solid fa-indian-rupee-sign"
                                style="font-size: 1rem"></i>99 / Piece</p>

                        <p class="card-text">4444</p>
                        <a href="product-description"><button class="btn-open-popup" onclick="">View More</button></a>
                    </div>
                </div>

                <div class="card" style=" height: auto">
                    <img src="images/banner/1.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 style="text-transform: capitalize;" class="card-title">Karela Jamun</h5>
                        <p  class="card-text price">Price: <i class="fa-solid fa-indian-rupee-sign"
                                style="font-size: 1rem"></i>99 / Piece</p>

                        <p class="card-text">4444</p>
                        <a href="product-description"><button class="btn-open-popup" onclick="">View More</button></a>
                    </div>
                </div>
       

        </div>
    </div>

 



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