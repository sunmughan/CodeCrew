import './bootstrap';
import '../css/app.css'; 


$(function(){

    $('.actionSelect').on('click', function(){

        $.blockUI({
            message: '<div class="spinner-border text-white" role="status"></div>',
            css: {
              backgroundColor: 'transparent',
              border: '0'
            },
            overlayCSS: {
              opacity: 0.5
            }
          });

        
        $.post(load_Actions, {_token: token}, function(response){
           console.log(response.items);

           let array = response.items;


           array.forEach(item => {


               $('.actionSelect').append($('<option>').val(item).text(item));
            
           });


            $.unblockUI({ 
                
            }); 


        }, 'json');
       

    });

});

