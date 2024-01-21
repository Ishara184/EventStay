<?php
session_start();

if(isset($_SESSION['user_name'])){

    $index = $_SESSION['NIC'];

    require "config.php";

    $sql = "SELECT * FROM Registered_User WHERE NIC = '$index'";
    $result = $conn->query($sql);

    $result1 = $result -> fetch_assoc();
    
?>

<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href="style/style_payment&reservation.css">
        <link rel="stylesheet" href="style/style_footer.css">

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

        <div class="container">
            <form action="reservationprocess.php" method="post">
                <div class="row">
                    <div class="col">
                        <h3 class="title">Reservation</h3>

                        <div class="inputBox">
                            <span>full name :</span>
                            <input type="text" name="name" value="<?php echo $result1["F_Name"] ?>" readonly>
                        </div>
                        <div class="inputBox">
                            <span>email :</span>
                            <input type="email" name="email" value="<?php echo $result1["User_Email"] ?>" readonly>
                        </div>
                        <div class="inputBox">
                            <span>address :</span>
                            <input type="text" name="address" placeholder="Enter adress" required>
                        </div>
                        <div class="inputBox">
                            <span>Phone Number :</span>
                            <input type="text" name="phone" pattern="[o-9]{10}" value="<?php echo $result1["P_No"] ?>" >
                        </div>

                        <div class="flexbox">
                            <div class="inputBox">
                                <span>NIC :</span>
                                <input type="text" name="NIC" value="<?php echo $result1["NIC"] ?>" readonly>
                            </div>
                            <div class="inputBox">
                                <span>Check-in-Date :</span>
                                <input type="date" name="date" placeholder="" required>
                            </div>


                        </div>

                        <div class="flex">
                            <div class="inputBox">
                                <span>Hotels:</span>
                                <select name="hotel" id="hotels">
                                    <option value="">Select a Hotel</option>
                                    <option value="Wild Coast Tented Lodge">Wild Coast Tented Lodge</option>
                                    <option value="88th Ella">88th Ella</option>
                                    <option value="Bilin Tree House">Bilin Tree House</option>
                                    <option value="Cassandra Culture Resort">Cassandra Culture Resort</option>
                                    <option value="Earl's Regent Hotel">Earl's Regent Hotel</option>
                                    <option value="Fresco Water Villa">Fresco Water Villa</option>
                                    <option value="Queen's Hotel">Queen's Hotel</option>
                                    <option value="Hide Ella Hotel & Resort">Hide Ella Hotel & Resort</option>
                                    <option value="Marino Beach Colombo">Marino Beach Colombo</option>
                                    <option value="The Kingsbury Colombo">The Kingsbury Colombo</option>
                                    <option value="Uga Bay">Uga Bay</option>
                                    <option value="Uga Chena Huts">Uga Chena Huts</option>
                                </select>
                            </div>
        
                            <div class="inputBox">
                                <span>Events:</span>
                                <select name="event" id="hotels">
                                    <option value="">Select an Event</option>
                                    <option value="Birthday Party">Birthday Party</option>
                                    <option value="Costume party">Costume party</option>
                                    <option value="Talent show">Talent show</option>
                                    <option value="Game Night">Game Night</option>
                                    <option value="Camping trip">Camping trip</option>
                                </select>
                            </div>
                        </div>

                        <div class="inputBox">
                            <span>Special Requests :</span>
                            <textarea id="sprequest" name="request" rows="4" placeholder="Enter Your Special Request" ></textarea>
                        </div>

                    </div>
                </div>

                
                 <input type="submit" name="submit" value="Submit Now" class="submit-btn" >
                 <a href="payment.php" class="submit-btn" >Payment</a>
                 <button type="submit" onclick="window.location='Reservation-Details.php'" class="btn_type1">Activities
                
                
            </form>
            
        </div>

        <!--Footer-->
        <footer>
            <div class="footer_info">
                <div class="footer_width about">
                    <h2>About</h2>
                    <p>
                        LAt EventStay.com, we are a team of passionate technology expert. We are understand the importance of a comfortable and enjoyable place to arrange your special events with your favourities. That's why we have designed our platform to connect you with a vast selection of hotels, making it effortless for you to discover and book your ideal accommodations
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

    </body>
</html>

<?php
}else{
    header("Location:login.php?not logged");
    exit();
}
?>



