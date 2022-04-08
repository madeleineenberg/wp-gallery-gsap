import { TweenMax}  from "gsap";
import  {TimelineLite}  from "gsap";
import { Expo } from "gsap";

export default function (){
    
        TweenMax.set(".project-preview", { width: 0 });

        var tl = new TimelineLite();

        $(document)
          .on("mouseover", ".navigation-item", function(evt) {
            tl = new TimelineLite();
            tl.to($(".project-preview"), 1, {
              width: "600px",
              ease: Expo.easeInOut
            });
          })
          .on("mouseout", ".navigation-item", function(evt) {
            tl = new TimelineLite();
            tl.to($(".project-preview"), 0.5, {
              width: 0,
              ease: Expo.easeInOut
            });
          });

        $('.navigation-link').each(function(i, obj) {
            if (i % 3 !== 1) {
                $(this).on('mouseenter', function() {
                    let image = $(this).data('image');
                    $(".project-preview").css({ "background-image": 'url(' + image + ')', "transform": 'rotate(0)' });
                });
            }
            else {
                $(this).on('mouseenter', function() {
                    let image = $(this).data('image');
                    $(".project-preview").css({ "background-image": 'url(' + image + ')', "transform": 'rotate(-12deg)' });
              });
            }     
      });
         
}