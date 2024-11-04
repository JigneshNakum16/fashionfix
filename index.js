const navSlide = () => {
  const navbar = document.querySelector(".nav");

  window.addEventListener("scroll", () => {
    if (window.scrollY > navbar.offsetHeight + 1) {
      navbar.classList.add("sticky");
    } else {
      navbar.classList.remove("sticky");
    }
  });


  const mobilenav = document.querySelector(".mobile-navbar-btn");
  const nav_icon = document.querySelector(".navbar");

  mobilenav.addEventListener("click",() => {
    nav_icon.classList.toggle('active');
  });



  const topup = document.querySelector(".top-up");
  window.addEventListener("scroll", () => {
    if (window.pageYOffset > 120) {
      topup.classList.add("top");
    } else {
      topup.classList.remove("top");
    }
  });

  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      },
    },
  });

  var swiper = new Swiper(".mySwiperr", {
    slidesPerView: 1,
    spaceBetween: 10,
    slidesPerGroup: 1,
    loopFillGroupWithBlank: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
    spaceBetween: 20,

      },
      992: {
        slidesPerView: 3,
    spaceBetween: 10,

      },
      1200: {
        slidesPerView: 4,
    spaceBetween: 10,

      },
    },
  });

  
  var swiper = new Swiper(".journal-mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 20,

      },
      992: {
        slidesPerView: 3,
    spaceBetween: 10,

      },
      1200: {
        slidesPerView: 4,
    spaceBetween: 10,

      },
    },
  });
  

  
  
};

const showPassword = () =>{
  const pass = document.getElementById("pass");
  const cpass = document.getElementById("cpass");
  if(pass.type === "password"){
    pass.type = "type";
    cpass.type = "type";
  }
  else{
    pass.type = "password";
    cpass.type = "password";
  }
}

