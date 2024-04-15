<script>
    const getIcon = document.getElementById("icon");
    const navMenu = document.getElementById("change-class-name");

    console.log(getIcon);

    navMenu.addEventListener("click", () => {
        console.log('pavithra gangatharan');

        if (navMenu.className === "right") {
            navMenu.className += " responsive";
            getIcon.innerHTML = '<i class="fa fa-close"></i>';
        }     
        else {
            navMenu.className = "right";
            getIcon.innerHTML = '<i class="fa fa-bars"></i>';
        }
    });

    const getSearchDiv = document.getElementById('search-icon');

    
</script>