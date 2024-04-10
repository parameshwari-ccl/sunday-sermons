//menu
alert(5555);

console.log("ccl");

function myFunction(){

console.log("ccl11");

    const getIcon = document.getElementById('icon');
    const navMenu = document.getElementById("myTopnav");

    if (navMenu.className === "right") {
        navMenu.className += " responsive";
        getIcon.innerHTML = ' <i class="fa fa-close"></i>';
    } 
    else {
        navMenu.className = "right";
        getIcon.innerHTML = ' <i class="fa fa-bars"></i>';
    }
}