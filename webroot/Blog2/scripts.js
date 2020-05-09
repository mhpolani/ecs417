$(document).ready(function()
 {
    $('.menu-toggle').on('click', function() 
    {
        $('.nav').toggleClass('showing');
        $('.nav ul').toggleClass('showing');
    });
     $('.post-wrapper').slick({    //   This is meant enact autoplay for the carousel
        slidesToShow: 3,      
        slidesToScroll:1,           
        autoplay: true,
        autoplaySpeed:2000,
        nextArrow:$('.next'),
        prevArrow:$('.prev'),
        responsive: [   //makes the carousel responsive
            {
              breakpoint: 1024,  //screen sizes
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
        });
        function checkFunction() 
        {
          if(confirm("Are you sure you want to clear all of the text? All unsaved changes will be lost."))
          {
            document.getElementById("toChange").innerHTML = '1';
          }
          else
          {
            
          }
        }
});
