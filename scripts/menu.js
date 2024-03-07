/* ouverture et fermeture du menu burger*/

function openNav() {
    console.log("Opening Nav");
    var myNav = document.getElementById("myNav");
    myNav.style.height = "100%";
    myNav.style.opacity = "1";  
    $(".burger-link").addClass("burger-link-animation");
}

function closeNav() {
    console.log("Closing Nav");
    var myNav = document.getElementById("myNav");
    myNav.style.height = "0%";
    myNav.style.opacity = "0"; 
    $(".burger-link").removeClass("burger-link-animation");
}