<script>
    const getIcon = document.getElementById('logo');
    const navMenu = document.getElementById('change-class-name');

    console.log(getIcon);

    getIcon.addEventListener('click', () => {
        console.log('pavithra gangatharan');

        if (navMenu.className === 'right') {
            navMenu.className += ' responsive';
            getIcon.innerHTML = '<i class="fa fa-close"></i>';
        }     
        else {
            navMenu.className = 'right';
            getIcon.innerHTML = '<i class="fa fa-bars"></i>';
        }
    });
</script>