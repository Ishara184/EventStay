// Replace secondary images instead of main image section
var HotelImg = document.getElementById("hotel-img");
var SmallImg = document.getElementsByClassName("small-img");

SmallImg[0].onclick = function()
{
    HotelImg.src = SmallImg[0].src;
}

SmallImg[1].onclick = function()
{
    HotelImg.src = SmallImg[1].src;
}

SmallImg[2].onclick = function()
{
    HotelImg.src = SmallImg[2].src;
}

SmallImg[3].onclick = function()
{
    HotelImg.src = SmallImg[3].src;
}

