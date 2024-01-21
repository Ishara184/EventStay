

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/style_card_type1.css">
    <link rel="stylesheet" href="style/style_card_type2.css">
    <link rel="stylesheet" href="style/style_location.css">
    <link rel="stylesheet" href="style/style_review.css">
    <link rel="stylesheet" href="style/style_footer.css">
    <link rel="icon" type="image/X-icon" href="images/logo/Secondary Logo.png">
    <title>EvenyStay.com</title>
</head>
<body>

    <!--Navigation Bar-->
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="images/logo/Primary Logo.png" alt="Logo" width="250px" height="100px">  
            </div>
            <ul class="links">
                <li class="nav"><a class="nav_a" href="index.php"><b>Home</b></a></li>
                <li class="nav"><a class="nav_a" href="card.html"><b>Hotels</b></a></li>
                <li class="nav"><a class="nav_a" href="aboutUs.html"><b>About Us</b></a></li>
                <li class="nav"><a class="nav_a" href="contactUs.php"><b>Contact</b></a></li>
            </ul>
            <div class="shortcut">
                <a href="login.php" class="btn_type1">Login</a>

                <div class="profile-img">
                    <a href="profile.php" ><img src="images/refund/profile.png" width="30px" height="30px" ></a>
                </div>
            </div>

        </div>
    </header>
    <!--end-->
      
    <!--Home Image Changer-->
    <div class="Home_top">
        <div class="image-content">
            <h1>Event<span>Stay</span></h1>
            <a href="aboutUs.html">Welcome</a>
        </div>
    </div>
    <br>

    <!--Availability Checker-->
    <selection class="availability">
        <form action="card.html">
            <div class="avail_check_box">
                <p>Location</p>
                <select name="loaction" id="" class="availability_input">
                    <option value="1">Colombo</option>
                    <option value="2">Ella</option>
                    <option value="3">Galle</option>
                    <option value="4">Kandy</option>
                    <option value="5">Nuwara Eliya</option>
                    <option value="6">Sigiriya</option>
                </select>
            </div>
            <div class="avail_check_box">
                <p>Check Date</p>
                <input type="date" name="" id="" class="availability_input">
            </div>
            <div class="avail_check_box">
                <p>People</p>
                <input type="text" name="" id="" class="availability_input">
            </div>
            <input type="submit" class="btn_type1" value="Check Availability">
        </form>
    </selection>

    <br>

    <h1 class="h1_type1">Treding Hotels</h1>

    <br>

    <!--Hotel card Horisontal-->
    <div class="section" onclick="displayDetails(2)">
        <img src="images/hotel/88th ella/88-2.jpg" alt="88th ella">
        <div class="text-box">
            <h2>88th Ella Hotel</h2>
            <p>Set amongst the golden dunes and the lush greenery in Yala Sri Lanka, Uga Chena Huts blends Sri Lanka's most celebrated features - its tropical beaches and its exotic wildlife.
                Our Yala hotel has been designed with its surrounding tropical jungles and saline lake in mind. Enveloped in a world of scenic splendour and exotic fauna, our 'huts' are luxurious private cabins that offer awe-inspiring views 
                of the surrounding wilderness and seascape.</p>
        </div>
    </div>

    <!--Hotel Cards-->
    <div class="card_container">

        <figure class="card" onclick="displayDetails(11)">
            <div class="image">
                <img src="images/hotel/Uga Bay/ugab-1.jpg" alt="Uga Bay">
            </div>
            <figcaption>
                <h3>Uga Bay</h3>
                <p>
                    Uga Bay is a luxury Pasikuda beach hotel situated on one of Sri Lanka's most celebrated beach stretches Pasikuda.
                </p>
            </figcaption>
            <a href="https://www.ugaescapes.com/ugabay/">Read More</a>
        </figure>
        
        <figure class="card" onclick="displayDetails(12)">
            <div class="image">
                <img src="images/hotel/Uga Chena Huts/chen-1.jpg" alt="Uga Chena Huts">
            </div>
            <figcaption>
                <h3>Uga Chena Huts</h3>
                <p>
                    Set the lush greenery in Yala Sri Lanka, Uga Chena Huts blends Sri Lanka's most celebrated features.
                </p>
            </figcaption>
            <a href="https://www.mrandmrssmith.com/luxury-hotels/uga-chena-huts">Read More</a>
        </figure>

        <figure class="card" onclick="displayDetails(10)">
            <div class="image">
                <img src="images/hotel/Kingsbury hotel/kings-1.jpg" alt="kingsbury hotel">
            </div>
            <figcaption>
                <h3>Kingsbury Hotel</h3>
                <p>
                    Lakeside Buddhist temple of Gangarama, Uga Residence is one of the most lavish boutique hotels in Colombo.
                </p>
            </figcaption>
            <a href="https://en.wikipedia.org/wiki/The_Kingsbury">Read More</a>
        </figure>
        
    </div>

    <!--Hotel card Horisontal-->
    <div class="section" onclick="displayDetails(9)">
        <img src="images/hotel/Marino beach hotel/mari-1.jpg" alt="marino beach hotel">
        <div class="text-box">
            <h2>Marino Beach Hotel</h2>
            <p>Set amongst the golden dunes and the lush greenery in Yala Sri Lanka, Uga Chena Huts blends Sri Lanka's most celebrated features - its tropical beaches and its exotic wildlife.
                Our Yala hotel has been designed with its surrounding tropical jungles and saline lake in mind. Enveloped in a world of scenic splendour and exotic fauna, our 'huts' are luxurious private cabins that offer awe-inspiring views 
                of the surrounding wilderness and seascape.</p>
        </div>
    </div>

    <br>

    <h1 class="h1_type1">Explore Sri-lanka</h1>

    <!--Locations-->
    <div class="location_container"> 
        <div class="box"> 
    
            <div class="location">
                <div class="image">
                <img src="images/locations/Colombo.jpg">
                <a href="card.html">
                <h2>COLOMBO</h2>
                </a>
                </div> 
                <div class="image">
                <img src="images/locations/nuwara eliya.jpg">
                <a href="card.html">
                <h2>NUWARA ELIYA</h2>
                </a>
                </div>
            </div>
    
            <div class="location"> 
                <div class="image">
                <img src="images/locations/Kandy--3.jpg">
                <a href="card.html">
                <h2>KANDY</h2>
                </a>
                </div>
                <div class="image">
                <img src="images/locations/ella.jpg">
                <a href="card.html">
                <h2>ELLA</h2>
                </a>
                </div>
            </div>
    
            <div class="location">
                <div class="image">
                <img src="images/locations/Sigiriya.jpg">
                <a href="card.html">
                <h2>SIGIRIYA</h2>
                </a>
                </div>  
                <div class="image">
                <img src="images/locations/Fort-Galle.jpg">
                <a href="card.html">
                <h2>GALLE</h2>
                </a>
                </div>
            </div>
    
        </div>
    </div>

    <br>

    <!--Hotel Brands-->
    <section class="Hotel_Brands">
        <div class="brand_container">
            <div class="brand_box">
                <img src="images/logo/cinnamon-logo.png" alt="">
            </div>

            <div class="brand_box">
                <img src="images/logo/Kingsbury-Indulgence-logo-mobile.png" alt="">
            </div>

            <div class="brand_box">
                <img src="images/logo/centara.png" alt="">
            </div>

            <div class="brand_box">
                <img src="images/logo/ITCs Hotel Group.png" alt="">
            </div>

            <div class="brand_box">
                <img src="images/logo/tree-symbol-four-seasons-hotels-and-resorts-logo-png-23.png" alt="">
            </div>

            <div class="brand_box">
                <img src="images/logo/Taj.png" alt="">
            </div>

            <div class="brand_box">
                <img src="images/logo/galleface.svg" alt="">
            </div>
        </div>
    </section>

    <br>
    <br>

    <!--Customer Review-->

    <div class="review">
        
        <div class="title">
            <h1>Customer Reviews</h1>
        </div>

        <div class="rev-container">

            <div class="indicator">
                <span class="btn active"></span>
                <span class="btn"></span>
                <span class="btn"></span>
                <span class="btn"></span>
            </div>
            <div class="slider">
                <div class="slide-row" id="slide">

                    <div class="slide-col">
                        <div class="user-text">
                            <p>Our 1st experience with group of friends.I would like to say that we had an unforgettable stay.Service provided by the caretaker Supramanium was also satisfactory. Food was delicious.</p>
                            <h3>Avishka Rajasinghe</h3>
                        </div>
                        <div class="user-img">
                            <img src="images/review/men1.jpg" alt="">
                        </div>
                    </div>

                    <div class="slide-col">
                        <div class="user-text">
                            <p>The Story Behind The History Of The Property. The Ambiance and The Peaceful Surrounding of Nature</p>
                            <h3>Vihagi Akashi</h3>
                        </div>
                        <div class="user-img">
                            <img src="images/review/women1.jpg" alt="">
                        </div>
                    </div>

                    <div class="slide-col">
                        <div class="user-text">
                            <p>Great service.The room was very spacious, clean, and had the amenities we needed. The location is great- very near Central Train Station. I would recommend to friends, and will definitely stay again</p>
                            <h3>Uditha Thennakoon</h3>
                        </div>
                        <div class="user-img">
                            <img src="images/review/men2.jpg" alt="">
                        </div>
                    </div>

                    <div class="slide-col">
                        <div class="user-text">
                            <p>Hospitality, kindness, cleanliness ans service were there as expected. Be sure if I had to come back in the future, I’ll come back there ! And I’d recommand certainly your Hôtel.</p>
                            <h3>Ashen Kahawatta</h3>
                        </div>
                        <div class="user-img">
                            <img src="images/review/men3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
    

    <br>

    <!--Footer-->
        <footer>
            <div class="footer_info">
                <div class="footer_width about">
                    <h2>About</h2>
                    <p>
                        At EventStay.com, we are a team of passionate technology expert. We are understand the importance of a comfortable and enjoyable place to arrange your special events with your favourities. That's why we have designed our platform to connect you with a vast selection of hotels, making it effortless for you to discover and book your ideal accommodations
                    </p>
                    <div class="social_media">
                        <ul>
                            <li><a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAAXNSR0IArs4c6QAAAbZJREFUSEu9lu01xUAQht9bAR3QASpABagAFdABKqADdEAF7q0AFaADOnCenKwz2czubOKcO3+SbDb7zPdkoTXLYs08TQXuStqXtGkU/ZS0ksQ1lBYgh19IOpO0XTnxTdKdpMcaNQICuc0siqzA0hNJKDCSGvBB0ml0euX9uSTOGEgJ+F9YgoygHhA33jdY9i7puk8W3HcgiaQiBFb2rHtzIAny0RCzZ0nHjlJAX7L1paTDtJYD0fgqsO6nz9bvRiDbSKInbnIgGbYVAKk5LEmCV3AjJcM9bs3lzyMWyMbXhtjd9LFLW1sTrGNZ4KUTcI+fA4kR3ScS4ri0wJb4cehagMQNSxCu6Z5n2/KIbcnariZbLcytKrmPXkrf9WTk0loMW4G1eHYNwFpIWlP0npCJqS9+ZaOI7N7oP2KPN1Go3W6kzanDOUnj1mFKgKiPzgF28fMsZC3qNlOBg87kTQuvAdu4TgGO+m5pHtZGVCsQGMoPJn9t4pegLUAXVoqhdR8pT6rvmMUISEairDe+mn8TGbYcclTopSjGvEM52/ZGNR39tXlNgMK2/6D5c3VqzAFGY6j6/hd272YddLyd9AAAAABJRU5ErkJggg=="/></a></li>
                            <li><a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAAXNSR0IArs4c6QAAAfdJREFUSEvNlj1PFUEUhh9KKyViKPEHkKgkNCQGaG2Ujo4PfwDQY9RIr4RYSYL+AqGhhcYaJSEhsRALY6mGhpI8ZO7NsMzM3b1cbjzJzezdnT3vec/HOztAn22gz3j8l4APgduA651CRk4Afz/DmtxaYvgMeAvc7yLtX4EFwPWS5QA/AnNdAFVfWQHexTdTgDL73AMwXfwFHsUpTgFah5EuAdeD81eh7rrZASRxYVVAG+OgBti/4PhBtFc2g+F/XJL4/hXAKWCvAGi0Rh83g9FbJ7PitV1qSeJmaxOrMizVz64zcm0cuAV8B36HcfHZ00yw08B+KqVG/zLxUqsOj4HnwBPgHnAKvAes3VlIszNbtcaAdppp3ALmEw5fAGvAcpjdawOa+jFgFxhOAB4Bo0CuBxoxlJkMJ4AvhYYyKKXvTy9SqrMh4Bi4e9MM9T8DbANvgNUK4C/gNfAhjMdSLxi20irLRWA2pPkQ2AA2w2mSE41sDUtz6JwpxipH1VQoO9g1ZVnATkqjzqoqMv4GKG0G6TiULKs0ytGPDi83fazutg/u1GmhBE029VrY/ykWixRg3ROjTkyyM2vtuudOfOXLWqV0sQ6QewSzvhei3bLSN42RCWojNQEWyJm1ka50dN3PRIuea/mYwCU2qVTUBaybxo77+g54DrUqZh2oRXr5AAAAAElFTkSuQmCC"/></a></li>
                            <li><a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAAXNSR0IArs4c6QAAASBJREFUSEvtltttwkAQRY8rSNIBqYBQQUIH6SB0QqiAEoAKonQAFUAHCRUAFRBdNItGli2t4rHlD+/f+jFn796Z2S3oeBQd8+gF8B0YByr/Bg4pXlmhYF+BsBTqGfjVpAz8BOYtAKfANgd4tO14Ax4aLCQLKNjIII/AqW3gBpg5iIz/bzJlKZTJE+BsSn/aVpjiy2x52GRkKbz4+gFejbhzZD2T12t7Js9VWuUEywIqsFd2taC+lATyPusTQeW3h4YB67ZZi1i5l2FAlcvSAi9SN6lIsjCgtvTDgOqZ8i+NZIHmYUBlsE+mKs8H4P20yCmLYUtTxmZlaZPeWf63P8AXYB8pzWI92TFXeU1U800nfQRbjVxn6m304l4aoao2xh+pg2wdpiHn9wAAAABJRU5ErkJggg=="/></a></li>
                        </ul>
                    </div>
                </div>

                <div class="footer_width link">
                    <h2>Quick Links</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="card.html">Hotels</a></li>
                        <li><a href="contactUs.php">Contact Us</a></li>
                        <li><a href="aboutUs.html">About Us</a></li>
                    </ul>
                </div>

                <div class="footer_width contact">
                    <h2>Contact</h2>
                    <ul>
                        <li>
                            <span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAAXNSR0IArs4c6QAAAZ1JREFUSEvNluExBEEQRt9FQAaIABEgAkSACBABIkAEyOBkQASIABEgAuq7mlVzvT0zfYsr/Werdnrmdfd0f7sj5myjOfOYFbgMbAOLWaAvwC3wHgk+CtwETgA9S3YNnAEKoGgR4AVwGIk+ZXkMCO5aC6iNe0FY7nZQgtaAR8D5AFi3ZQu4s/tLQDXFs2mObu8NME7lk58C23ACewTWo0Dv3j5S0+gga/vAlfN+NwX3vVTKUJ22ZA7obTbrp6mT89eqhoJpAj/NYa+AZrBmKu+bceiV1ctwDXgwGzXYO4EGEmDV+E0xPKAyUcPkNhSoe89VqShttqS605UBJb236vRvmsYbC4mzhvlPxsK7x66ikrtu8OWntvdE3e3smrRJljwFCTTrxEVfDs3mlNWAtSxb0OLctr4Wnnq0YFp3hVsLLaB8Zi2tW8ouyghQg6vOtNrqZdoUiAhQB0vulOlCpZ5PqVur/zZRYAsagkXvME9KnasZzAVaZdQs/upfWw7VnQqqGb1MX/xI5058ZimpPVTq0vtnaZF/Amyd7a5/ASnlTh38EtbaAAAAAElFTkSuQmCC"/></span>
                            <p>
                                26985 Brighton Lane, Lake Forest, CA 92630
                            </p>
                        </li>

                        <li>
                            <span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAAXNSR0IArs4c6QAAASxJREFUSEvtltFRwkAURQ8VYAdoB5SAFWAJ2oFUgHSAFUgHlqCWYAdYgXQAc2byZnZkE5Yk5gf2L5Pde/fc9zbZEQOP0cB+XKbhLTDpMepvYBd6aaQ3wAcw7dEspDbAkw+p4SPw9g9mIXkHbFPDF2AJ/ADSjnswVyvKswDWOcMv4AEwhnkH01dAiN9KY+VzneGsmhTG59BKZXk+K439KcMtcG/e1UTjLaUNquhKN24jOmoJfekC41AgRhPtXyo3aT88J+sbDWOesdjOTbQ5Krvd85yOIsMmWhOQIGqVo2plWEebilmrHFUnwxztKarOhint2oOcqVXd0S2uYYez365proalCQxew6O/hZ+u99Lttph39D9UwzbXuO8rhh9/tS/01taiPOVLBr8IHwBD9VMdEMKXRQAAAABJRU5ErkJggg=="/></span>
                            <a href="#">John@sajadhesami.com</a>
                        </li>

                        <li>
                            <span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAAXNSR0IArs4c6QAAAV9JREFUSEvNlv8xBEEQhb+LgAwQASJABGTgRIAICIEIEAEZIAInAmRABupV7ai51tOzt7O29J93e+/b/vX6Zkwcs4l5/DvgDrAYswqlDNeBR0DAc+BqLKgHFEQwQVOcALdjQC1wE3gxsFGhFngJXASZ7Lb21ALnwE0A/AQOWqAWuN/1L2rXO7A1tJ9eD98qYs+AXmxQeFOqsq0V1F47mJ4ZFB5Q43/sqDXDpOkBj4B7A/zoTGBwZkmv5DQajI0M2jQo+cuXgN4+1txGpqEKhFWIvFSmnWcZ7WDa3+qeRufJ66UnKO+VHaYIobV7qCtxagZIgvr8GlAZrdGH3lsD6scPwGFh6QTPr4p97Fff+wAlqIy83eyz/EvQPsAk6pW3D/Arr8IqQInLQ+VE+fTWoEv/GFYFJnGtwRmwXaHdAXr2J4YCk4BWQuujzPcM3L0qrUAvwXS6nrwv/wIYVnly4DcJIz4d9R+fCAAAAABJRU5ErkJggg=="/></span>
                            <a href="#">+30-2106019311</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="copy-right">
                <p>
                    Copyright &copyEventStay 2023 All Rights Reserved.
                </p>
            </div>
        </footer> 
    <!--end-->

    <!--Script for Customer Review-->
    <script>
        var btn = document.getElementsByClassName("btn");
        var slide = document.getElementById("slide");

        btn[0].onclick = function(){
            slide.style.transform = "translateX(0px)";

            for(i=0; i<4; i++){
                btn[i].classList.remove("active");
            }
            this.classList.add("active");
        }
        btn[1].onclick = function(){
            slide.style.transform = "translateX(-800px)";

            for(i=0; i<4; i++){
                btn[i].classList.remove("active");
            }
            this.classList.add("active");
        }
        btn[2].onclick = function(){
            slide.style.transform = "translateX(-1600px)";

            for(i=0; i<4; i++){
                btn[i].classList.remove("active");
            }
            this.classList.add("active");
        }
        btn[3].onclick = function(){
            slide.style.transform = "translateX(-2400px)";

            for(i=0; i<4; i++){
                btn[i].classList.remove("active");
            }
            this.classList.add("active");
        }
    </script>

<script src="java/script_detail_2.js"></script>

</body>
</html>

