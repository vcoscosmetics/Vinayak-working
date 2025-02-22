<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vinayak Ayurveda</title>
  <link rel="icon" type="image/x-icon" href="/images/v.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>




<?php
include("header.php");
?>


  <!-- End of navbar -->

  <!-- start of slider -->

  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/banner/1.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/banner/2.jpg" class="d-block w-100" alt="...">
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- end of slider -->


  <!-- -----------------About section---------------- -->

  <section class="index-second">

    <div class="container about-section">
      <div class="row">
        <div class="col-12">
          <h2 class="about-title">Welcome to Vinayak Ayurveda</h2>
          <h4 style="text-align: center; font-size: 1.4rem; margin-bottom: 2rem;">India's Top ISO-GMP Manufacturer of
            Ayurvedic Pharma
            Franchise In India
          </h4>
          <p class="about-text">

            At Vinayak Ayurveda, we are dedicated to providing high-quality Ayurvedic products that adhere to the
            strictest standards of purity and efficacy. As a leading ISO-GMP certified manufacturer, we take pride in
            our commitment to excellence in every aspect of our production process.  Our state-of-the-art facilities and experienced team ensure that each product is crafted with the utmost
            care, using the finest natural ingredients. We believe in the power of Ayurveda to enhance health and
            well-being, and our extensive range of products is designed to support a holistic lifestyle.


          </p>

          <p class="about-text">

            Explore our diverse product offerings and discover the benefits of ancient Ayurvedic wisdom combined with
            modern manufacturing practices. Whether you're looking for herbal supplements, skincare solutions, or
            wellness
            products, Vinayak Ayurveda has something for everyone.
          </p>


          <h4 style="text-align: center; font-size: 1.4rem; margin-top: 3rem;">Leading Ayurvedic Products Manufacturer
            from India
          </h4>
        </div>
      </div>
    </div>
  </section>

  <div style="padding:2rem 1rem ; background-color: #BA8565;" class="card-section">
    <div style="border: 1px solid #BA8565;" class="card ">
      <h2>Mission</h2>
      <p>Our mission is to provide the best services to our customers.</p>
    </div>
    <div style="border: 1px solid #BA8565;" class="card ">
      <h2>Vision</h2>
      <p>Our vision is to be a global leader in our industry.</p>
    </div>
    <div style="border: 1px solid #BA8565;" class="card ">
      <h2>Value</h2>
      <p>We value integrity, excellence, and respect for individuals.</p>
    </div>
    <div style="border: 1px solid #BA8565;" class="card ">
      <h2>Goals</h2>
      <p>Our goal is to continuously improve and innovate in our field.</p>
    </div>
  </div>


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



  <div class="product-range">

    <div class="container">
      <h2 class="mt-5 mb-5">Product Range</h2>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://5.imimg.com/data5/OS/AA/UZ/SELLER-2445732/ayurvedic-capsules.jpg"
              alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Ayurvedic Capsule</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top"
              src="https://cdn.shopaccino.com/refresh/articles/shutterstock1598650192-1-904285_l.jpg?v=421"
              alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Ayurvedic Tablet</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top"
              src="https://images.theconversation.com/files/511675/original/file-20230222-20-qw2pr6.jpg?ixlib=rb-4.1.0&q=20&auto=format&w=320&fit=clip&dpr=2&usm=12&cs=strip"
              alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Ayurvedic Syrup</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://nilindherbals.com/wp-content/uploads/2023/01/16-banner-700.webp"
              alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Ayurvedic Juice</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top"
              src="https://ayurvedcentral.com/wp-content/uploads/2016/09/churnas-main-1024x683.jpg"
              alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Ayurvedic Churan</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top"
              src="https://www.forestessentialsindia.com/blog/wp-content/uploads/2022/02/2-8.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Ayurvedic Oils</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- --------------Why choose us----------------- -->


  <div class="index-third">

    <section class="why-choose-us py-5">
      <div class="container">
        <div class="section-heading">
          <h1>Why Choose Us</h1>
          <h3>Discover the Benefits</h3>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-3 mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Expert Team</h5>
                <p class="card-text">"Nature's Essence, Wellness Defined: Vinayak Ayurveda for Holistic Healing!"
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-3 mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Quality Service</h5>
                <p class="card-text">"Timeless Remedies, Trusted Results: Vinayak Ayurveda, Your Health Companion!"
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-3 mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Affordable Prices</h5>
                <p class="card-text">"Revitalize Naturally with Vinayak Ayurveda's Authentic Herbal Solutions!"
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-3 mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Customer Support</h5>
                <p class="card-text">"Discover Harmony, Embrace Health: Vinayak Ayurveda, Where Tradition Thrives!"
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


  <!-- --------------Why choose us end----------------- -->




  <!-- -----------------------product range section-------------------------- -->


  <!-- -------------end of product range section--------------------- -->


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