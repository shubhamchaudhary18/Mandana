$(document).ready(function () {

    $(".fa-bars").click(function () {
      $(this).toggleClass("fa-times");
      $(".nav-links").toggleClass("nav-toggle");
    });
  
    $(window).on("load scroll", function () {
      $(".fa-bars").removeClass("fa-times");
      $(".nav-links").removeClass("nav-toggle");
    });
  
    $(window).scroll(function () {
      if ($(window).scrollTop() > 217) {
        $(".header").css({
          background: "#6C5CE7",
          "box-shadow": "0 .2rem .5rem rgba(0,0,0,.4)",
        });
      } else {
        $(".header").css({ background: "none", "box-shadow": "none" });
      }
  
      $(".fa-ellipsis-h").click(function () {
        $(this).toggleClass("fa-times");
        $(".fnavbar").toggleClass("fnav-toggle");
      });
  
      const inputs = document.querySelectorAll(".input");
  
  function focusFunc() {
    let parent = this.parentNode;
    parent.classList.add("focus");
  }
  
  function blurFunc() {
    let parent = this.parentNode;
    if (this.value == "") {
      parent.classList.remove("focus");
    }
  }
  
  inputs.forEach((input) => {
    input.addEventListener("focus", focusFunc);
    input.addEventListener("blur", blurFunc);
  });
  
  
      
  
      
    });
  
   
  
   
  
  });
  