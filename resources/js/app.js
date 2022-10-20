import './bootstrap';
import '../css/app.css'; 


$(function(){



  $('#mailSubscribeStatusUpdate').on('click', function(){

    let mailSubscribeStatus = 1;
    
    if(document.getElementById('mailSubscribeStatus').checked)
    {

      mailSubscribeStatus = 1;

    }else {
      mailSubscribeStatus = 0; 
    }

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

    
    $.post(mailSubscribeStatusPost, {_token: token, mailSubscribeStatus: mailSubscribeStatus}, function(response){
      
      if(response.status)
      {
        $.unblockUI({}); 

        toastr.success("Mail aboneliği ayarlarınız güncellendi", "Mail Aboneliği Ayarları!", {
          closeButton: !0,
          tapToDismiss: !1,
          showMethod: "slideDown",
          hideMethod: "slideUp"
      });
    }else {
        $.unblockUI({}); 

        toastr.error("Mail aboneliği ayarları güncellenirken bir hata ile karşılaşıldı", "Mail Aboneliği Ayarları!", {
          closeButton: !0,
          tapToDismiss: !1,
          showMethod: "slideDown",
          hideMethod: "slideUp"
      });
      
      }

    }, 'json');
   

});

  $('.mailSubscribeUpdatePost').on('click', function(){
    let formData = $('#mailSubscribeUpdateForm').serializeArray();

       
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

  
  $.post(mailSubscribeUpdatePost, {_token: token, formData: formData}, function(response){
    
      if(response.status)
      {
        $.unblockUI({}); 

        toastr.success("Mail aboneliği ayarlarınız güncellendi", "Mail Aboneliği Ayarları!", {
          closeButton: !0,
          tapToDismiss: !1,
          showMethod: "slideDown",
          hideMethod: "slideUp"
      });
    }else {
        $.unblockUI({}); 

        toastr.error("Mail aboneliği ayarları güncellenirken bir hata ile karşılaşıldı", "Mail Aboneliği Ayarları!", {
          closeButton: !0,
          tapToDismiss: !1,
          showMethod: "slideDown",
          hideMethod: "slideUp"
      });
      
      }


  }, 'json');


  });
  
  
  $('.carouselUpdatePost').on('click', function(){
    
    let formData = $('#carouselUpdateForm').serializeArray();
    
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

    
    $.post(carouselUpdatePost, {_token: token, formData: formData}, function(response){
      
        if(response.status)
        {
          $.unblockUI({}); 

          toastr.success("Carousel ayarlarınız güncellendi", "Carousel Ayarları!", {
            closeButton: !0,
            tapToDismiss: !1,
            showMethod: "slideDown",
            hideMethod: "slideUp"
        });
      }else {
          $.unblockUI({}); 

          toastr.error("Carousel ayarları güncellenirken bir hata ile karşılaşıldı", "Carousel Ayarları!", {
            closeButton: !0,
            tapToDismiss: !1,
            showMethod: "slideDown",
            hideMethod: "slideUp"
        });
        
        }


    }, 'json');
   

});


  $('#carouselSearchStatusUpdate').on('click', function(){

    let searchStatus = 1;
    
    if(document.getElementById('searchStatus').checked)
    {

      searchStatus = 1;

    }else {
      searchStatus = 0; 
    }

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

    
    $.post(carouselSearchStatusPost, {_token: token, searchStatus: searchStatus}, function(response){
      
      if(response.status)
      {
        $.unblockUI({}); 

        toastr.success("Carousel ayarlarınız güncellendi", "Carousel Ayarları!", {
          closeButton: !0,
          tapToDismiss: !1,
          showMethod: "slideDown",
          hideMethod: "slideUp"
      });
    }else {
        $.unblockUI({}); 

        toastr.error("Carousel ayarları güncellenirken bir hata ile karşılaşıldı", "Carousel Ayarları!", {
          closeButton: !0,
          tapToDismiss: !1,
          showMethod: "slideDown",
          hideMethod: "slideUp"
      });
      
      }

    }, 'json');
   

});

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

