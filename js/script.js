// Add custom JavaScript here
// window.addEventListener("scroll", function () {
//     let navbar = document.querySelector(".navbar");
//     if (window.scrollY > 50) {
//         navbar.classList.add("scrolled");
//     } else {
//         navbar.classList.remove("scrolled");
//     }
// });

function userScroll(){
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll',()=>{
        if(window.scrollY > 50){
            navbar.classList.add('bg-dark');
            navbar.classList.add('navbar-sticky');
        }else{
            navbar.classList.remove('bg-dark');
            navbar.classList.remove('navbar-sticky');

        }
    });
}
document.addEventListener('DOMContentLoaded',userScroll);