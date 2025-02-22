<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/images/v.png">

    <title>Company Profile </title>
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
        <h1>Company Profile</h1>
    </div>
    
    


    <section class="Company-profile">
        <div class="container">
            <div class="left">
                <img src="images/logo/logo-image.jpeg" alt="Company Image">
            </div>
            <div class="right">
                <p>
                    At Vinayak Ayurveda, we ensure every product upholds the highest standards of quality and authenticity. Our dedicated team meticulously crafts each item, harnessing the power of traditional Ayurvedic wisdom and modern science to provide exceptional solutions that promote holistic well-being.
                </p>
                <p>
                    Vinayak Ayurveda leads the way in Ayurvedic innovation, blending time-honored practices with cutting-edge research. Our commitment to continuous improvement drives us to create products that are not only effective but also cater to the evolving needs of our customers, ensuring optimal health and wellness.
                </p>
                <p>
                    We are committed to sustainable practices, striving to positively impact the environment. At Vinayak Ayurveda, we believe in creating products that support a healthier, more sustainable world, reflecting our vision for a future where natural wellness and environmental responsibility are seamlessly integrated.
                </p>
                
            </div>
        </div>
    </section>

    <section class="Quality-policy">
        <div class="container">
            <!-- <h2>Quality Policy</h2> -->
            <p>
                Our commitment to quality is the cornerstone of our business. We believe that delivering superior quality products is essential to maintaining the trust and satisfaction of our customers. Our quality policy is built on the principles of continuous improvement and customer focus.
            </p>
            <p>
                We adhere to stringent quality control measures at every stage of the production process. From the selection of raw materials to the final inspection of finished products, every step is carefully monitored to ensure that it meets our high standards.
            </p>
            <p>
                Our team is trained to uphold the highest standards of quality and to identify and address any potential issues proactively. We invest in the latest technology and equipment to support our quality assurance processes and to ensure that our products consistently meet or exceed customer expectations.
            </p>
            <p>
                We are committed to sustainability and ethical practices in our operations. Our quality policy includes a focus on minimizing environmental impact and ensuring the health and safety of our employees and customers. We continuously seek ways to improve our processes and to innovate in ways that enhance quality and sustainability.
            </p>
            <p>
                Our ultimate goal is to provide products that deliver exceptional value and performance. We believe that by maintaining our focus on quality, we can achieve long-term success and build lasting relationships with our customers.
            </p>
        </div>
    </section>



    <section class="Infrastructure-profile">
        <h2>Our Infrastructure</h2>
        <div class="container">
            <div class="left">
                <p>
                    Vinayak Ayurveda's state-of-the-art infrastructure meets the highest quality and efficiency standards. Our investment in modern equipment and technology ensures seamless processes, enabling us to deliver top-quality products consistently.                </p>
                <p>
                    Our facilities boast the latest machinery, and our team is expertly trained to maximize their potential. We believe that superior infrastructure is essential to maintaining our leadership in the industry.                </p>
                <p>
                    We emphasize sustainability by designing infrastructure that minimizes environmental impact. Vinayak Ayurveda continuously seeks ways to enhance eco-friendly processes, reflecting our commitment to a greener future.

                </p>
                <p>
                    Vinayak Ayurveda's advanced infrastructure ensures seamless operations and exceptional product quality. Our modern technology investments support our mission to provide the best Ayurvedic solutions.
                </p>

            </div>
            <div class="right">
                <img src="https://sifoodsoftware.com/wp-content/uploads/2018/11/RG4.jpg" alt="Infrastructure Image">
            </div>
        </div>
    </section>





    <!-- ------------------------Footer area start--------------------- -->

    <section class="footer">
        <div class="footer-row">
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul class="links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact Us</a></li>

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