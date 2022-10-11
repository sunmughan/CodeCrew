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
          
          let array = response.items;
        
          console.log(response.itemss);
          console.log(response.items);
          

           array.forEach(item => {


               $('.actionSelect').append($('<option>').val(item).text(item));
            
           });


            $.unblockUI({ 
                
            }); 


        }, 'json');
       

    });



    $(document).on('click', '.menuInsert', function() { 
      let mid = this.attributes['m_id'].value;

      const elems = document.querySelectorAll('.menuForm');
      // let formData = $('#menuForm').serializeArray();
      // var ad = $("#menuForm #m_title").val();

      // $.post(inserMenu, {_token: token, mid: mid,formData: formData}, function(response){
          
      //    console.log(response.items);
          
      //   }, 'json');
       

      console.log(elems);


    });
    // $('.menuInsert').on('click', function(){

    //   let mid = this.attributes['m_id'].value;

    //   alert(mid);
        
        // $.post(load_Actions, {_token: token}, function(response){
          
        //   let array = response.items;
        
        //   console.log(response.itemss);
        //   console.log(response.items);
          

        //    array.forEach(item => {


        //        $('.actionSelect').append($('<option>').val(item).text(item));
            
        //    });


        //     $.unblockUI({ 
                
        //     }); 


        // }, 'json');
       

    // });

    
});

