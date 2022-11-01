
const toggleButton = document
.querySelector('.toggle-button');

const navbarLinks = document
.querySelector('.navbar-links');


const body = document.querySelector('.main-area')

body.addEventListener('click', function(){
    if(navbarLinks.classList.contains('active')){
        navbarLinks.classList.remove('active');
    }   
});

toggleButton.addEventListener('click',
    () => {
        navbarLinks.classList.toggle('active');   
    }
);
navbarLinks.addEventListener('click',()=>{
    if(navbarLinks.classList.contains('active')){
        navbarLinks.classList.remove('active');
    }
})