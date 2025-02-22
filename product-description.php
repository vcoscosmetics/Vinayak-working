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
        .product-wrapper {
            display: flex;
            flex-wrap: wrap;
            width: 90%;
            margin: auto;
            gap: 20px;
            padding: 20px;
			margin-top: 5rem;
			margin-bottom: 5rem;
            box-sizing: border-box;
        }

        .product-wrapper .product-box,
        .product-wrapper .text {
            flex: 1 1 300px;
            box-sizing: border-box;
        }

        .product-wrapper .product-box .all-images {
            display: flex;
            gap: 1rem;
        }

        .product-wrapper .product-box .all-images .small-images {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .product-wrapper .product-box .all-images .small-images img {
            width: 80px;
            height: 80px;
            cursor: pointer;
            /* border: 1px solid #ccc; */
        }

        .product-wrapper .product-box .all-images .main-images {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
        }

        .product-wrapper .product-box .all-images .main-images img {
			height: 400px;
			width: 400px;
            /* border: 1px solid #ccc; */

        }

        .product-wrapper .text .content {
            margin-bottom: 20px;
            padding: 0;
        }

        .product-wrapper .text .content .brand,
        .product-wrapper .text .content .Product-name {
            font-size: 18px;
            margin: 5px 0;
        }

        .product-wrapper .text .pricebox {
            margin-top: 20px;
        }

        .product-wrapper .text .pricebox .price {
            font-size: 20px;
            color: #000;
            margin-bottom: 10px;
        }

        .product-wrapper .text .pricebox .product-details table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        .product-wrapper .text .pricebox .product-details table th,
        .product-wrapper .text .pricebox .product-details table td {
            text-align: left;
            padding: 8px;
            border: 1px solid white;
			border-bottom: 1px solid #ddd;
        }

        .product-wrapper .text .pricebox p {
            font-size: 14px;
            line-height: 1.5;
        }

        @media (max-width: 768px) {
            .product-wrapper {
                flex-direction: column;
                width: 100%;
            }

            .product-wrapper .product-box .all-images .small-images img,
            .product-wrapper .product-box .all-images .main-images img {
                width: 100%;
                height: auto;
            }

            .product-wrapper .product-box .all-images .main-images img {
                width: auto;
                height: 300px;
            }
			.product-wrapper .product-box .all-images .small-images {
            display: none;
        }
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


    <div class="product-wrapper">


		<div class="product-box">
			<div class="all-images">
				<div class="small-images">

				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbGLolcgtvOOrS84UpuwajDvTWOsvp05r0iw&s" onclick="clickimg(this)" />
				<img src="https://img.etimg.com/thumb/width-640,height-480,imgsize-15576,resizemode-75,msid-96449654/top-trending-products/lifestyle/13-aloe-vera-gel-for-flawless-skin-and-shiny-hair-under-rs-300/aloe-vera-gel-for-skin-and-hair.jpg" onclick="clickimg(this)" />
				<img src="https://img.etimg.com/thumb/width-640,height-480,imgsize-15576,resizemode-75,msid-96449654/top-trending-products/lifestyle/13-aloe-vera-gel-for-flawless-skin-and-shiny-hair-under-rs-300/aloe-vera-gel-for-skin-and-hair.jpg" onclick="clickimg(this)" />

				</div>
				<div class="main-images">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbGLolcgtvOOrS84UpuwajDvTWOsvp05r0iw&s" id="imagebox" />
				</div>
			</div>
		</div>

		<div class="text">
        <div class="content">
          <!-- <p class="brand">Brand: Vinayak Ayurveda</p> -->
          <p class="Product-name" style= " font-weight: 600; font-size: 1.2rem; text-transform:capitalize;">Aloevera gel
		  </p>
        </div>
        <div class="pricebox">
    
        <div style="display:flex;gap:1rem;">
             <p style="font-size:29px;font-family:monospace;font-weight:700;"><i class="fa-solid fa-indian-rupee-sign" style="font-size:21px;"></i><?php echo $row['price'] ?>/Piece</p>
             <button style=" padding: 0.5rem 1.5rem; border:none; background-color:#258169; color: #fff; margin-bottom:2rem; border-radius:5px;" class="btn-open-popup" onclick="togglePopup()">Get Latest Price</button>
        </div>

        <p style= " font-weight: 500; font-size: 1rem; margin-top: 1rem;">
            <b>Description: </b> Hello hello hello
          </p>
          <div class="product-details">
              
              
              
            <table>

              <tr>
                <th>Brand</th>
                <td>Your Brand</td>
              </tr>
              <tr>
                <th>Packaging Size	
				</th>
                <td>detail</td>
              </tr>
              <tr>
                <th>Usage/Application	
				</th>
                <td>detail</td>
              </tr>
			  <tr>
                <th>Type Of Packaging	

				</th>
                <td>detail</td>
              </tr>
			  <tr>
                <th>MOQ	

				</th>
                <td>1000</td>
              </tr>
            </table>
          </div>
        
        </div>


	</div>
	</div>


    <div class="description-section" style="width: 90%; margin: auto; text-align: justify; margin-bottom: 5rem; margin-top: 0;">

        <h3>Description :</h3>
        <p style= " font-weight: 400; font-size: 1rem; ">
             There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
          </p>
    

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
              <li><a href="#">Monday - Saturday 10:00 AM - 06:00</a></li>
              <li><a href="#">Email: info@vinayakayurveda.in</a></li>
            </ul>
          </div>
    
          <div class="footer-col">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.86470492057!2d77.31172427535164!3d28.453494575762974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4c5f2fef19d1cd77%3A0x3147cf6cbb69103c!2sVinayak%20Ayurveda%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1719211692897!5m2!1sen!2sin"
              width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="icons">
              <a href=""><i class="fa-brands fa-facebook-f"></i> </a>
              <a href=""><i class="fa-brands fa-instagram"></i></a>
              <a href=""><i class="fa-brands fa-twitter"></i></a>
              <a href=""><i class="fa-brands fa-linkedin"></i></a>
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

        <script> 
            function togglePopup() { 
                const overlay = document.getElementById('popupOverlay'); 
                overlay.classList.toggle('show'); 
            } 
        </script> 
    
        <script>
        function clickimg(smallimage) {
          var fullimg = document.getElementById("imagebox");
    
          fullimg.src = smallimage.src;
        }
      </script>



</body>

</html>