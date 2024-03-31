<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style1.css">
    <title>About Us</title>
</head>
<body>
    <nav>
        <ul class="menu">
            <li class="logo"><a href="#">Vaccine On</a></li>
            <li class="item"><a href="#">Home</a></li>
            <li class="item"><a href="#">About</a></li>
            <li class="item"><a href="#">Services</a></li>
            <li class="item button"><a href="login1.php">Login</a></li>
            <li class="item button secondary"><a href="registration.php">Sign Up</a></li>
            <li class="toggle"><a href="#"><span class="bars"></span></a></li>
        </ul>
    </nav>
    <div class="heading">
        <h1>About Us</h1>
        <p>We are dedicated to promoting children's health through timely and comprehensive immunization. We provide essential information and resources to empower parents and caregivers in safeguarding their children against preventable diseases, ensuring a healthier future for the next generation.</p>
    </div>
    <div class="container">
        <section class="about">
            <div class="about-image">
                <!-- Slideshow container -->
                <div class="slideshow-container">
                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <img src="childvaccination.jpg" style="width:100%">
                    </div>

                    <div class="mySlides fade">
                        <img src="image2.jpg" style="width:100%">
                    </div>

                    <div class="mySlides fade">
                        <img src="image3.jpg" style="width:100%">
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
            </div>
            <div class="about-content">
                <h2>Child Vaccination modern Era's Need</h2>
                <p>Child Vaccination stands as a critical pillar of healthcare in the contemporary world, addressing the ever-evolving landscape of infectious diseases. It serves as a vital shield, not only protecting individual children but also fostering community immunity and contributing to global public health initiatives, ensuring a safer and healthier future for all.</p>
                <a href="" class="read-more">Read More</a>
            </div>
        </section>
    </div>
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            slides[slideIndex-1].style.display = "block";  
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
   <div class="diffSection" id="team_section">
		<center><p style="font-size: 50px; padding-top: 100px; padding-bottom: 60px;">We're the Creators</p></center>
		<div class="totalcard">
			<div class="card">
				<center><img src="assests\SAVE_20221001_221955.jpg"></center>
				<center><div class="card-title">Dhruv Shah</div>
				<div id="detail">
					<p>“ You can teach a student a lesson for a day; but if you can teach him to learn by creating curiosity, he will continue the learning process as long as he lives “</p>
				</div>
				</center>
			</div>
			<div class="card">
				<center><img src="assests\suchi.jpg"></center>
				<center><div class="card-title">Suchi Vadgama</div>
				<div id="detail">
					<p>“ Real education should consist of drawing the goodness and the best out of our own students. What better books can there be than the book of humanity “</p>
					
				</div>
				</center>
			</div>
			<div class="card">
				<center><img src="assests\manjit.jpg"></center>
				<center><div class="card-title">Manjit Mansata</div>
				<div id="detail">
					<p>“ Real education should consist of drawing the goodness and the best out of our own students. What better books can there be than the book of humanity “</p>
				</div>
				</center>
			</div>
		</div>
	</div>
    <div id="makeitfull">
        <a href="#review_section"><img src="assests/makeitfull.png"></a>
    </div>
    <div class="review">
        <div class="diffSection" id="review_section">
            <center><p style="font-size: 40px; padding: 100px; padding-bottom: 40px; color: #2E3D49;">What the Parents Say About Us?</p></center>
        </div>
        <div class="rev-container">
            <div class="rev-card">
                <div class="identity">
                    <img src="assests\creator1.avif"><p>Sroff Manav</p>
                    <h6>POLIO VACCINE</h6>
                    <div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
                </div>
                <div class="rev-cont">
                    <p id="title">Review:</p>
                    <p id="content">
                        I did Java Fundamenetal course with Rishab Sir. It was a great experience. The brain teasers and assignments, actually the whole lot of content was really good. Some problems were challenging yet interesting. Was explained very well where ever I stuck...
                    </p>
                </div>
            </div>
            <div class="rev-card">
                <div class="identity">
                    <img src="assests\creator2.jpeg"><p>Clayton Clair</p>
                    <h6>SWINE FLU</h6>
                    <div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
                </div>
                <div class="rev-cont">
                    <p id="title">Review:</p>
                    <p id="content">
                        When I was watching "Dear Zindagi", I could relate Sharukh Khan to Arnav Bhaiya. The way Sharukh Khan was giving life lessons to Alia Bhatt, in the same way Arnav Bhaiya will give coding life lessons which will guide you throughout your code life...
                    </p>
                </div>
            </div>
            <div class="rev-card">
                <div class="identity">
                    <img src="assests\creator3.jpg"><p>Devyn Sethi</p>
                    <h6>TYPHOID</h6>
                    <div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
                </div>
                <div class="rev-cont">
                    <p id="title">Review:</p>
                    <p id="content">
                        LearnEd was an amazing experience for me. I belong to electronics department and had a little experience in coding but I think it has helped me think things through in a much more analytical manner. Coding is important no matter which branch you are in. It gives you a better understanding about how to approach a problem...
                    </p>
                </div>
            </div>
            <div class="rev-card">
                <div class="identity">
                    <img src="assests\creator4.webp"><p>Rylee Phillips</p>
                    <h6>Pnemonia</h6>
                    <div class="rating"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"><img src="images/icon/star.png"></div>
                </div>
                <div class="rev-cont">
                    <p id="title">Review:</p>
                    <p id="content">
                        This was my first complete course at coding blocks. I attended the Python course in Winter 2020 and loved it which made me join the full course. Shubham bhaiya and Ayush Bhaiya(TA) have good knowledge about the field and were very helpful in making us understand the concepts. I would certainly recommend this to anyone...
                    </p>
                </div>
            </div>
        </div>
    </div>
    <marquee style="background: linear-gradient(to right, grey, black); margin-top: 50px;" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="20"><div class="marqu">"Education is for improving the lives of others and for leaving your community and world better than you found it."</div></marquee>

    <!-- FOOTER -->
        <footer>
            <div class="footer-container">
                <div class="left-col">
                    <img src="images/icon/logo - Copy.png" style="width: 200px;">
                    <div class="logo"></div>
                    <div class="social-media">
                        <a href="#"><img src="assests\fb.png"></a>
                        <a href="#"><img src="assests\insta.png"></a>
                        <a href="#"><img src="assests\tt.png"></a>
                        <a href="#"><img src="assests\ytube.png"></a>
                        <a href="#"><img src="assests\linkedin.png"></a>
                    </div><br><br>
                    <p class="rights-text">Copyright © 2023 Created By Dhruv shah,Suchi Vadgama,Manjit All Rights Reserved.</p>
                    <br><p><img src="assests/location.png">DEPSTAR-CHARUSAT<br>Changa</p><br>
                    <p><img src="assests/phone.png"> +91 7874951647<br><img src="assests/mail.png">&nbsp; shahdhruv318@gmail.com</p>
                </div>
                
            </div>
        </footer>
    
</body>
</html>