/*global $ */
$(document).ready(function() {



$(document).on("scroll", function() {
    if ($(document).scrollTop() > 20) {
        $(".menu-main").removeClass("large").addClass("small");
    } else {
        $(".menu-main").removeClass("small").addClass("large");
    }
});




          $(".open").click(function(){
        
       document.getElementById("mySidenav").style.width = "80%";
          
          
        });
        
          $(".closebtn").click(function(){
        
        document.getElementById("mySidenav").style.width = "0";
          
          
        });
        

        var dropdown = document.getElementsByClassName("dropdown-btn");
      var i;

      for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
        } else {
        dropdownContent.style.display = "block";
        }
        });
      }




$('.carousel').carousel();





$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});





$('ul li > div').click(function() {
    $('ul li.current').removeClass('current');
    $(this).closest('li').addClass('current');
});




 


    new WOW().init();

});












