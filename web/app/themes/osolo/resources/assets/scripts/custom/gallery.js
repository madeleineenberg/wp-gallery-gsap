
export default function(){
    let $images;
    let $container = $('.gallery-container');
    let count = 0;

    setTimeout(function(){
        
        const $id = $('.gallery-title').data('id');
        console.log($id);
        let data = {
              id : $id,
          }
        
         $.ajax({
          url: '/wp-json/portfolio/gallery',
          data,
      
          beforeSend: () => {
             
              console.log('before send:' + data.id);
          },
          success: (response)=> {
              
              if(response){
                setImages(response.images)
                
              }
          }

      });
    }, 1000);
   
    function setImages(images){
    // console.log(images)
    $images = images;
   
    detectScroll();
    }


    function detectScroll(e){
        $(window).on('mousewheel DOMMouseScroll', function(e) {

            if(e.originalEvent.wheelDelta > 0){

                insertImage($images, $container);
                count ++;
                if(count === $images.length){
                    count = 0;
                  
                }
                // $(window).off('mousewheel DOMMouseScroll', detectScroll);
                // setTimeout(function(){
                //     $(window).on('mousewheel DOMMouseScroll', detectScroll);
                // }, 100)
            }
            // else{
            //     console.log('down')
            // }
        })
    }

    function insertImage(array, container){

        let image = $('<img/>');
        image.attr('class', 'image');
        image.attr('src', array[count]);
        let randomNumberWidth = Math.floor(Math.random()* 30) + 60;
        let randomNumberHeight = Math.floor(Math.random()* 30) + 60;
        let randomNumberTop = Math.floor(Math.random()* 50) + -5;
        let randomNumberLeft = Math.floor(Math.random()* 70) + -5;

        image.css({
            top: randomNumberTop + '%', 
            left: randomNumberLeft + '%',
            maxWidth: randomNumberWidth + '%',
            maxHeight: randomNumberHeight + '%'
        });

        // container.append(image);
        image.appendTo(container);
    }


    // $(window).on('mousewheel DOMMouseScroll', detectScroll)

};


