<script>
    const getIcon = document.getElementById("icon");
    const navMenu = document.getElementById("change-class-name");


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



    const header = document.getElementById("change-class-name");
    const btns = header.getElementsByClassName("nav-item");

    for (let i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            const current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>