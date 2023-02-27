var swiper = new Swiper(".mySwiper", {
  // slidesPerView: 4,
  // spaceBetween: 5,
  // freeMode: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 4000,
  },
  loop: true,
});
var swiper2 = new Swiper(".mySwiper2", {
  slidesPerView: 4,
  spaceBetween: 5,
  freeMode: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 4000,
  },
  loop: true,
});
var swiper = new Swiper(".mySwiper3", {
   slidesPerView: 2,
  // spaceBetween: 5,
   //freeMode: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 4000,
  },
  loop: true,
});
var swiper = new Swiper(".mySwiper4", {
  slidesPerView: 5,
  spaceBetween: 5,
  //freeMode: true,
 navigation: {
   nextEl: ".swiper-button-next",
   prevEl: ".swiper-button-prev",
 },
 autoplay: {
   delay: 4000,
 },
 loop: true,
});

// window.onscroll = function() {myFunction()};

// function myFunction() {
//   if (document.documentElement.scrollTop > 957) {
//   document.getElementById("body__newProduct--content").classList.add("appear");
//   }
// }
// window.addEventListener('scroll',()=>{
//     const scrolled = window.scrollY;
//     console.log(scrolled);
//   });
  // 957
  // 1037
  function signIn(){
    
    if($(".body__signin--main").css("display") == "none"){
      
      $(".body__signin--main").css({"display":"flex","position":"fixed"
    ,"top":"0px","left":"-30px","opacity":"1"}); 
    
    
    }
    else if( $(".body__signin--main").css("display") == "flex"){
      $(".body__signin--main").css({"display":"none"});
      
      
    }
  }
  function signUp(){
    if($(".body__signup--main").css("display") == "none"){
      
      $(".body__signup--main").css({"display":"flex","position":"fixed"
    ,"top":"0px","left":"-30px","opacity":"1"}); 
    
    
    }
    else if( $(".body__signup--main").css("display") == "flex"){
      $(".body__signup--main").css({"display":"none"});
      
      
    }
    console.log(1)
  }
