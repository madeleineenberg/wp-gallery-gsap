export default function(){
    let $images;

    $('.navigation-link').on('click', function(e){
    //    e.preventDefault();
        const $id = $(e.target).data('id');
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
               let $response = response.images; 
                setImages($response)
              }
          }

      });
    });
   
    function setImages(images){
    console.log(images)
    $images = images;
    
    }
};
