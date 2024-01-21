function displayDetails(hotelId) {
    // Load the hotel details page
    window.location.href = 'details.html#' + hotelId;
    }
  
    // Retrieve the hotelId from the URL hash
    var hotelId = window.location.hash.substring(1);
  
    // Update the hotel description based on the hotelId
    if (hotelId === '1') {
        document.title = 'Wild Coast Tented Lodge';
        const col2Element = document.querySelector(".col-2");
        col2Element.querySelector("img").src = "images/Hotel Card/Hotel Details/img/image 01.jpg";

        const smallImgCols = document.querySelectorAll(".small-img-col img");
        smallImgCols[0].src = "images/Hotel Card/Hotel Details/img/image 01.jpg";
        smallImgCols[1].src = "images/Hotel Card/Hotel Details/img/image 02.jpg";
        smallImgCols[2].src = "images/Hotel Card/Hotel Details/img/image 03.jpg";
        smallImgCols[3].src = "images/Hotel Card/Hotel Details/img/image 04.jpg";

        const descriptionElement = document.querySelector(".description");
        descriptionElement.querySelector("h1").textContent = "Wild Coast Tented Lodge";
        descriptionElement.querySelector("h5").innerHTML = '<i class="fa-solid fa-location-dot fa-fw"></i> Palatupana, 82600 Yala, Sri Lanka';

        const hotelInfoElement = document.querySelector(".hotel-info");
        hotelInfoElement.querySelector("p:first-child").textContent = "Wild Coast Tented Lodge All Inclusive is adjacent to the famous Yala National Park, renowned for its dense leopard population. This luxury tented camp is located where the jungle meets a pristine beach, overlooking the blue waters of the Indian Ocean.";

        document.querySelector(".price span").textContent = "$250 For a Day";

        // Scroll to the hotel details section
        document.getElementById("description").scrollIntoView({ behavior: "smooth" });
        }
    
    else if (hotelId === '2') {
        document.title = '88th Ella Hotel';
        const col2Element = document.querySelector(".col-2");
        col2Element.querySelector("img").src = "images/hotel/88th ella/88-1.jpg";

        const smallImgCols = document.querySelectorAll(".small-img-col img");
        smallImgCols[0].src = "images/hotel/88th ella/88-2.jpg";
        smallImgCols[1].src = "images/hotel/88th ella/88-3.jpg";
        smallImgCols[2].src = "images/hotel/88th ella/88-4.jpg";
        smallImgCols[3].src = "images/hotel/88th ella/88-5.jpg";

        const descriptionElement = document.querySelector(".description");
        descriptionElement.querySelector("h1").textContent = "88th Ella Hotel";
        descriptionElement.querySelector("h5").innerHTML = '<i class="fa-solid fa-location-dot fa-fw"></i> Palatupana, 82600 Yala, Sri Lanka';

        const hotelInfoElement = document.querySelector(".hotel-info");
        const paragraphs = hotelInfoElement.getElementsByTagName("p");
        paragraphs[0].textContent = "Located in Ella, 5 km from Demodara Nine Arch Bridge, 88th - ELLA has accommodations with a garden, free private parking, a terrace and a restaurant. Among the facilities at this property are room service and luggage storage space, along with free WiFi throughout the property. The hotel has family rooms.";
        paragraphs[1].textContent = "At the hotel, the rooms come with a desk, a balcony with a city view, a private bathroom, a flat-screen TV, bed linen and towels. 88th - ELLA provides some rooms with mountain views, and rooms include an electric tea pot. All rooms feature a closet. À la carte and continental breakfast options are available every morning at the accommodation. The area is popular for hiking, and bike rental and car rental are available at 88th - ELLA.";

        const priceElement = document.querySelector(".price span");
        priceElement.textContent = "$350 For a Day";

        // Scroll to the hotel details section
        document.getElementById("description").scrollIntoView({ behavior: "smooth" });
        }

    else if (hotelId === '3') {
        document.title = 'Bilin Tree House';
        const col2Element = document.querySelector(".col-2");
        col2Element.querySelector("img").src = "images/hotel/Bilin tree hotel/tree-1.jpg";
    
        const smallImgCols = document.querySelectorAll(".small-img-col img");
        smallImgCols[0].src = "images/hotel/Bilin tree hotel/tree-2.jpg";
        smallImgCols[1].src = "images/hotel/Bilin tree hotel/tree-3.jpg";
        smallImgCols[2].src = "images/hotel/Bilin tree hotel/tree-4.jpg";
        smallImgCols[3].src = "images/hotel/Bilin tree hotel/tree-5.jpg";
    
        const descriptionElement = document.querySelector(".description");
        descriptionElement.querySelector("h1").textContent = "Bilin Tree House";
        descriptionElement.querySelector("h5").innerHTML = '<i class="fa-solid fa-location-dot fa-fw"></i> No 4, Subadrarama Road, Makuluwa, Galle, Sri Lanka';
    
        const hotelInfoElement = document.querySelector(".hotel-info");
        const paragraphs = hotelInfoElement.getElementsByTagName("p");
        paragraphs[0].textContent = "Located in Galle, a 11-minute walk from Bonavista Beach, Bilin Tree House provides accommodations with an outdoor swimming pool, free private parking, a garden and a shared lounge. Featuring room service, this property also provides guests with a restaurant. The property has a 24-hour front desk, airport transportation, a shared kitchen and free WiFi throughout the property.";
        paragraphs[1].textContent = "The hotel will provide guests with air-conditioned rooms with a desk, an electric tea pot, a minibar, a safety deposit box, a flat-screen TV, a terrace and a private bathroom with a shower. Selected rooms include a kitchen with a fridge, a microwave and a stovetop. Guest rooms include a closet. À la carte and continental breakfast options are available daily at Bilin Tree House.";
    
        const priceElement = document.querySelector(".price span");
        priceElement.textContent = "$270 For a Day";
    
        // Scroll to the hotel details section
        document.getElementById("description").scrollIntoView({ behavior: "smooth" });
    }

    else if (hotelId === '4') {
        document.title = 'Cassandra Culture Resort';
        const col2Element = document.querySelector(".col-2");
        col2Element.querySelector("img").src = "images/hotel/Cassandra Culture resort/cas-8.jpg";
    
        const smallImgCols = document.querySelectorAll(".small-img-col img");
        smallImgCols[0].src = "images/hotel/Cassandra Culture resort/cas-7.jpg";
        smallImgCols[1].src = "images/hotel/Cassandra Culture resort/cas-4.jpg";
        smallImgCols[2].src = "images/hotel/Cassandra Culture resort/cas-3.jpg";
        smallImgCols[3].src = "images/hotel/Cassandra Culture resort/cas-1.jpg";
    
        const descriptionElement = document.querySelector(".description");
        descriptionElement.querySelector("h1").textContent = "Cassandra Culture Resort";
        descriptionElement.querySelector("h5").innerHTML = '<i class="fa-solid fa-location-dot fa-fw"></i> Avudangawa, Habarana Sigiriya, 21120 Sigiriya, Sri Lanka';
    
        const hotelInfoElement = document.querySelector(".hotel-info");
        const paragraphs = hotelInfoElement.getElementsByTagName("p");
        paragraphs[0].textContent = "The serenity of a remote village, with perfect comforts of a star class hotel, Cassandra Culture Resort is a perfect getaway that rejuvenates your body, soul and spirit in the environment of a luxury resort set in the natural raw beauty of Sigiriya.";
        paragraphs[1].textContent = "Our resort is located within an easy reach to four more UNESCO’s World Heritage sites, Dambulla Cave Temple, Sacred City of Anuradhapura, Ancient City of Polonnaruwa and the Kingdom of Kandy, where the Sacred Temple of Tooth (Dalada Maligawa) is located. If you are a Wildlife lover, you can go on a safari to two of most popular National Parks in Sri Lanka, Kaudulla and Minneriya, where the largest known 'Gathering' of Asian Elephants in the world occurs.";
    
        const priceElement = document.querySelector(".price span");
        priceElement.textContent = "$370 For a Day";
    
        // Scroll to the hotel details section
        document.getElementById("description").scrollIntoView({ behavior: "smooth" });
    }

    else if (hotelId === '5') {
        document.title = "Earl's Regent Hotel";
        const col2Element = document.querySelector(".col-2");
        col2Element.querySelector("img").src = "images/hotel/Earls regency hotel/ear-2.jpg";
    
        const smallImgCols = document.querySelectorAll(".small-img-col img");
        smallImgCols[0].src = "images/hotel/Earls regency hotel/ear-3.jpg";
        smallImgCols[1].src = "images/hotel/Earls regency hotel/ear-6.jpg";
        smallImgCols[2].src = "images/hotel/Earls regency hotel/ear-7.jpg";
        smallImgCols[3].src = "images/hotel/Earls regency hotel/ear-5.jpg";
    
        const descriptionElement = document.querySelector(".description");
        descriptionElement.querySelector("h1").textContent = "Earl's Regent Hotel";
        descriptionElement.querySelector("h5").innerHTML = '<i class="fa-solid fa-location-dot fa-fw"></i>40/1, Deveni Rajasinghe Mawatha, Peradeniya, Kandy, Sri Lanka';
    
        const hotelInfoElement = document.querySelector(".hotel-info");
        const paragraphs = hotelInfoElement.getElementsByTagName("p");
        paragraphs[0].textContent = "Featuring an outdoor pool, in-house restaurant and relaxing spa treatments, Earl’s Regent Hotel is conveniently placed just 2.8 mi from Kandy Railway Station. Free WiFi is available in the rooms of the property.";
        paragraphs[1].textContent = "Only 1.3 mi from Kandy Royal Botanical Gardens, the hotel is also 3.4 mi from Kandy Lake and 3.7 mi from the ancient Temple of Tooth Relics. The Bandaranaike International Airport is 63 mi away. Stylish rooms at Earl’s Regent Hotel feature a flat-screen TV and private balcony. A mini-bar and seating area are included as well. The private bathrooms come with fluffy bathrobes and a hairdryer. Refreshing workouts can be enjoyed at the fitness center. Guests can also utilize the barbecue facilities";
    
        const priceElement = document.querySelector(".price span");
        priceElement.textContent = "$310 For a Day";
    
        // Scroll to the hotel details section
        document.getElementById("description").scrollIntoView({ behavior: "smooth" });
    }

    else if (hotelId === '6') {
        document.title = "Fresco Water Villa";
        const col2Element = document.querySelector(".col-2");
        col2Element.querySelector("img").src = "images/hotel/Fresco water villa/fres-1.jpg";
    
        const smallImgCols = document.querySelectorAll(".small-img-col img");
        smallImgCols[0].src = "images/hotel/Fresco water villa/fres-2.jpg";
        smallImgCols[1].src = "images/hotel/Fresco water villa/fres-3.jpg";
        smallImgCols[2].src = "images/hotel/Fresco water villa/fres-4.jpg";
        smallImgCols[3].src = "images/hotel/Fresco water villa/fres-6.jpg";
    
        const descriptionElement = document.querySelector(".description");
        descriptionElement.querySelector("h1").textContent = "Fresco Water Villa";
        descriptionElement.querySelector("h5").innerHTML = '<i class="fa-solid fa-location-dot fa-fw"></i> Sigiriya Road, Kimbissa, Sigiriya, Sri Lanka';
    
        const hotelInfoElement = document.querySelector(".hotel-info");
        const paragraphs = hotelInfoElement.getElementsByTagName("p");
        paragraphs[0].textContent = "Featuring an outdoor swimming pool and a restaurant, Fresco Water Villa offers accommodations in Sigiriya, 0.6 mi from Sigiriya Rock. Guests can enjoy the on-site bar. Free private parking and WiFi is available.";
        paragraphs[1].textContent = "Every room is equipped with a satellite TV. Certain units include a seating area to relax in after a busy day. A balcony or patio are featured in certain rooms. Each room is equipped with a private bathroom fitted with a shower. You will find a gift shop and a garden at the property. Services like laundry and dry cleaning are provided.This is our guests' favorite part of Sigiriya, according to independent reviews.";
    
        const priceElement = document.querySelector(".price span");
        priceElement.textContent = "$400 For a Day";
    
        // Scroll to the hotel details section
        document.getElementById("description").scrollIntoView({ behavior: "smooth" });
    }

    else if (hotelId === '7') {
        document.title = "Queen's Hotel";
        const col2Element = document.querySelector(".col-2");
        col2Element.querySelector("img").src = "images/hotel/Queens hotel/quee-1.jpg";
    
        const smallImgCols = document.querySelectorAll(".small-img-col img");
        smallImgCols[0].src = "images/hotel/Queens hotel/quee-2.jpg";
        smallImgCols[1].src = "images/hotel/Queens hotel/quee-3.jpg";
        smallImgCols[2].src = "images/hotel/Queens hotel/quee-4.jpg";
        smallImgCols[3].src = "images/hotel/Queens hotel/quee-5.jpg";
    
        const descriptionElement = document.querySelector(".description");
        descriptionElement.querySelector("h1").textContent = "Queen's Hotel";
        descriptionElement.querySelector("h5").innerHTML = '<i class="fa-solid fa-location-dot fa-fw"></i> No 4, Dalada Veediya, Kandy, Sri Lanka';
    
        const hotelInfoElement = document.querySelector(".hotel-info");
        const paragraphs = hotelInfoElement.getElementsByTagName("p");
        paragraphs[0].textContent = "Queen's Hotel is housed in a historical building located 50 m from Kandy Lake. It offers colonial-style accommodations with an outdoor pool, 3 dining options and free parking on site. Spacious rooms have large windows and hardwood furnishings. Each guestroom is equipped with a mini-bar, tea/coffee making facilities and a television set. Hot shower facilities are provided in the private bathroom.";
        paragraphs[1].textContent = "Queen of Hearts Restaurant serves a wide variety of traditional local dishes, and is available for all-day dining. Other dining options include light snacks and refreshing beverages at the Pub Royal and Lounge Bar.";
    
        const priceElement = document.querySelector(".price span");
        priceElement.textContent = "$450 For a Day";
    
        // Scroll to the hotel details section
        document.getElementById("description").scrollIntoView({ behavior: "smooth" });
    }

    else if (hotelId === '8') {
        document.title = "Hide Ella Hotel & Resort";
        const col2Element = document.querySelector(".col-2");
        col2Element.querySelector("img").src = "images/hotel/Hide ella hotel/hide-2.jpg";
    
        const smallImgCols = document.querySelectorAll(".small-img-col img");
        smallImgCols[0].src = "images/hotel/Hide ella hotel/hide-3.jpg";
        smallImgCols[1].src = "images/hotel/Hide ella hotel/hide-4.jpg";
        smallImgCols[2].src = "images/hotel/Hide ella hotel/hide-5.jpg";
        smallImgCols[3].src = "images/hotel/Hide ella hotel/hide-1.jpg";
    
        const descriptionElement = document.querySelector(".description");
        descriptionElement.querySelector("h1").textContent = "Hide Ella Hotel & Resort";
        descriptionElement.querySelector("h5").innerHTML = '<i class="fa-solid fa-location-dot fa-fw"></i> Hide-Ella Resort & Spa, Wemullahena, Sri Lanka ';
    
        const hotelInfoElement = document.querySelector(".hotel-info");
        const paragraphs = hotelInfoElement.getElementsByTagName("p");
        paragraphs[0].textContent = "Located in Ella, 5 km from Demodara Nine Arch Bridge, Hide Ella Hotel & Resort provides accommodations with an outdoor swimming pool, free private parking, a terrace and a restaurant. The property is around 48.3 km from Hakgala Botanical Garden, 49.9 km from Horton Plains National Park and a 9-minute walk from Ella Spice Garden Cooking Class. The property has room service, a concierge service and organizing tours for guests.";
        paragraphs[1].textContent = "All units are equipped with air conditioning, a flat-screen TV with satellite channels, a minibar, a electric tea pot, a bidet, free toiletries and a desk. With a private bathroom equipped with a shower and bathrobes.";
    
        const priceElement = document.querySelector(".price span");
        priceElement.textContent = "$150 For a Day";
    
        // Scroll to the hotel details section
        document.getElementById("description").scrollIntoView({ behavior: "smooth" });
    }

    else if (hotelId === '9') {
        document.title = "Marino Beach Colombo";
        const col2Element = document.querySelector(".col-2");
        col2Element.querySelector("img").src = "images/hotel/Marino beach hotel/mari-1.jpg";
    
        const smallImgCols = document.querySelectorAll(".small-img-col img");
        smallImgCols[0].src = "images/hotel/Marino beach hotel/mari-2.jpg";
        smallImgCols[1].src = "images/hotel/Marino beach hotel/mari-4.jpg";
        smallImgCols[2].src = "images/hotel/Marino beach hotel/mari-5.jpg";
        smallImgCols[3].src = "images/hotel/Marino beach hotel/mari-7.jpg";
    
        const descriptionElement = document.querySelector(".description");
        descriptionElement.querySelector("h1").textContent = "Marino Beach Colombo";
        descriptionElement.querySelector("h5").innerHTML = '<i class="fa-solid fa-location-dot fa-fw"></i> 590 Marine Drive, Colombo, Sri Lanka';
    
        const hotelInfoElement = document.querySelector(".hotel-info");
        const paragraphs = hotelInfoElement.getElementsByTagName("p");
        paragraphs[0].textContent = "Marino Beach Colombo has an outdoor swimming pool, fitness center, a garden and terrace in Colombo. Among the facilities of this property are a restaurant, room service and a 24-hour front desk, along with free WiFi throughout the property. The property has an ATM, a concierge service and currency exchange for guests. The hotel will provide guests with air-conditioned rooms with a desk, an electric tea pot, a minibar, a safety deposit box, a flat-screen TV, a balcony and a private bathroom with a bidet. At Marino Beach Colombo rooms come with bed linen and towels.";
        paragraphs[1].textContent = "Popular points of interest near Marino Beach Colombo include Bambalapitiya Beach, Kollupitiya Beach and Milagiriya Beach.";
    
        const priceElement = document.querySelector(".price span");
        priceElement.textContent = "$450 For a Day";
    
        // Scroll to the hotel details section
        document.getElementById("description").scrollIntoView({ behavior: "smooth" });
    }

    else if (hotelId === '10') {
        document.title = "The Kingsbury Colombo";
        const col2Element = document.querySelector(".col-2");
        col2Element.querySelector("img").src = "images/hotel/Kingsbury hotel/kings-1.jpg";
    
        const smallImgCols = document.querySelectorAll(".small-img-col img");
        smallImgCols[0].src = "images/hotel/Kingsbury hotel/kings-2.jpg";
        smallImgCols[1].src = "images/hotel/Kingsbury hotel/kings-3.jpg";
        smallImgCols[2].src = "images/hotel/Kingsbury hotel/kings-9.jpg";
        smallImgCols[3].src = "images/hotel/Kingsbury hotel/kings-10.jpg";
    
        const descriptionElement = document.querySelector(".description");
        descriptionElement.querySelector("h1").textContent = "The Kingsbury Colombo";
        descriptionElement.querySelector("h5").innerHTML = '<i class="fa-solid fa-location-dot fa-fw"></i> No 48 Janadhipathi Mawatha, Fort, Colombo, Sri Lanka';
    
        const hotelInfoElement = document.querySelector(".hotel-info");
        const paragraphs = hotelInfoElement.getElementsByTagName("p");
        paragraphs[0].textContent = "Boasting spectacular views of the Colombo Harbor and the Galle Face Green, The Kingsbury is a 5-star hotel in Colombo, which offers regal accommodations and a wide variety of sumptuous dining options.";
        paragraphs[1].textContent = "Located in the heart of the country's commercial capital, The Kingsbury Colombo is a short distance from landmarks like the World Trade Center and the Colombo Harbor, as well as popular attractions such as the Dutch Hospital Shopping Complex and Galle Face Green. The Bandaranaike International Airport is about 21 mi away. Elegantly-designed yet tasteful and spacious, the rooms have oversize windows offering breathtaking views of the Colombo Harbor and the Galle Face Green. Bright and airy, they are fitted with cable TV.";
    
        const priceElement = document.querySelector(".price span");
        priceElement.textContent = "$450 For a Day";
    
        // Scroll to the hotel details section
        document.getElementById("description").scrollIntoView({ behavior: "smooth" });
    }

    else if (hotelId === '11') {
        document.title = "Uga Bay";
        const col2Element = document.querySelector(".col-2");
        col2Element.querySelector("img").src = "images/hotel/Uga Bay/ugab-1.jpg";
    
        const smallImgCols = document.querySelectorAll(".small-img-col img");
        smallImgCols[0].src = "images/hotel/Uga Bay/ugab-4.jpg";
        smallImgCols[1].src = "images/hotel/Uga Bay/ugab-5.jpg";
        smallImgCols[2].src = "images/hotel/Uga Bay/ugab-6.jpg";
        smallImgCols[3].src = "images/hotel/Uga Bay/ugab-8.jpg";
    
        const descriptionElement = document.querySelector(".description");
        descriptionElement.querySelector("h1").textContent = "Uga Bay";
        descriptionElement.querySelector("h5").innerHTML = '<i class="fa-solid fa-location-dot fa-fw"></i> Coconut Board Road, 30410 Pasikuda, Sri Lanka';
    
        const hotelInfoElement = document.querySelector(".hotel-info");
        const paragraphs = hotelInfoElement.getElementsByTagName("p");
        paragraphs[0].textContent = "Set along the beachfront just yards away from the pristine beaches of Pasikudha Bay, Uga Bay features well appointed rooms, a spacious outdoor swimming pool and free Wi-Fi access. Featuring the beautiful sea views of Passekudah Beach, the hotel is 22 mi away from the city and 174 mi away from Bandaranaike International Airport. For convenience, Airport shuttle services are available at a surcharge.";
        paragraphs[1].textContent = "Air-conditioned rooms are elegantly furnished with a 42-inch flat-screen TV, a sofa seating area, an iPod docking station, a mini-bar and tea/coffee making facilities. Private bathrooms include hot/cold shower facilities and a spacious bath.";
    
        const priceElement = document.querySelector(".price span");
        priceElement.textContent = "$550 For a Day";
    
        // Scroll to the hotel details section
        document.getElementById("description").scrollIntoView({ behavior: "smooth" });
    }

    else if (hotelId === '12') {
        document.title = "Uga Chena Huts";
        const col2Element = document.querySelector(".col-2");
        col2Element.querySelector("img").src = "images/hotel/Uga Chena Huts/chen-1.jpg";
    
        const smallImgCols = document.querySelectorAll(".small-img-col img");
        smallImgCols[0].src = "images/hotel/Uga Chena Huts/chen-2.jpg";
        smallImgCols[1].src = "images/hotel/Uga Chena Huts/chen-8.jpg";
        smallImgCols[2].src = "images/hotel/Uga Chena Huts/chen-7.jpg";
        smallImgCols[3].src = "images/hotel/Uga Chena Huts/chen-6.jpg";
    
        const descriptionElement = document.querySelector(".description");
        descriptionElement.querySelector("h1").textContent = "Uga Chena Huts";
        descriptionElement.querySelector("h5").innerHTML = '<i class="fa-solid fa-location-dot fa-fw"></i> Diyabunwala Kele, Yala, Tissamaharama, Yala, Sri Lanka';
    
        const hotelInfoElement = document.querySelector(".hotel-info");
        const paragraphs = hotelInfoElement.getElementsByTagName("p");
        paragraphs[0].textContent = "Located in the deep south of Sri Lanka, Chena Huts is just 5-minute away from Yala National Park. Featuring free WiFi, a spa center and an outdoor pool, Chena Huts offers fine views of the wilderness and seascape. It is designed to echo the local architecture harmonizing with the jungle environment. All cabins are fully air-conditioned and consist of of living room, bedroom, private bathroom and shaded private built-in plunge pool. The luxurious bathroom boast of free standing bathtubs and twin vanity consoles.";
        paragraphs[1].textContent = "Guests can enjoy breakfast, lunch & dinner (included in the rate) at the Basses restaurant, where urban dining is featured along with water, fruit juices and other soft drinks, teas and coffees, selected wines.";
    
        const priceElement = document.querySelector(".price span");
        priceElement.textContent = "$475 For a Day";
    
        // Scroll to the hotel details section
        document.getElementById("description").scrollIntoView({ behavior: "smooth" });
    }