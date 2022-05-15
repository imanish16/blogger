//Initialize nice select
$(function () {
      var owlslider = jQuery("div.owl-carousel");
        owlslider.each(function () {
        var $this = $(this),
              $items = ($this.data('items')) ? $this.data('items') : 1,
              $loop = ($this.attr('data-loop')) ? $this.data('loop') : true,
              $navdots = ($this.data('nav-dots')) ? $this.data('nav-dots') : false,
              $navarrow = ($this.data('nav-arrow')) ? $this.data('nav-arrow') : false,
              $autoplay = ($this.attr('data-autoplay')) ? $this.data('autoplay') : true,
              $autohgt = ($this.data('autoheight')) ? $this.data('autoheight') : false,
              $autowdt = ($this.data('autoWidth')) ? $this.data('autoWidth') : true,
              $space = ($this.attr('data-space')) ? $this.data('space') : 30;
         
              $(this).owlCarousel({
                  loop: $loop,
                  items: $items,
                  responsive: {
                    0:{items: $this.data('xx-items') ? $this.data('xx-items') : 1},
                    480:{items: $this.data('xs-items') ? $this.data('xs-items') : 1},
                    768:{items: $this.data('sm-items') ? $this.data('sm-items') : 2},
                    980:{items: $this.data('md-items') ? $this.data('md-items') : 3},
                    1200:{items: $items}
                  },
                  dots: $navdots,
                  autoHeight:$autohgt,
                  margin:$space,
                  nav: $navarrow,
                  navText:["<i class='fa fa-angle-left fa-2x'></i>","<i class='fa fa-angle-right fa-2x'></i>"],
                  autoplay: $autoplay,
                  autoplayHoverPause: true,
              });

       }); 
 });

// Counter
(function($) {
  'use strict' ;
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
})(jQuery);// End of use strict


$(document).delegate('#contactMails', 'click', function() {
  
  var name = $('#name').val();
  var email = $('#email').val();
  var phone = $('#phone_number').val();
  var message = $('#InputMessage').val();
  if(name == '' || email == '' || phone == '' || message == ''){
    $('.err-name').html("Please enter name.")
    $('.err-email').html("Please enter email.")
    $('.err-phone').html("Please enter phone number.")
    $('#msg_validate').html("Please type message.")

  } else{
    $('.sendcontactus').html('Please Wait...');
  }
  var csrf_token = $('meta[name="csrf-token"]').attr('content');
  var url = window.location.origin;
  $.ajax({
    "url": url + '/sendEmailToContact',
    "type": "POST",
    "data": {
      name: name,
      _token: csrf_token,
      email: email,
      phone: phone,
      message: message,
    },
    success: function(result) {
      swal({
        title: "Mail Send",
        text: "Request Email Successfully Sent!!",
        icon: "success",
        buttons: true,
        dangerMode: true,
      }).then((value) => {
        if(value) {
            $('#name').val('');
            $('#email').val('');
            $('#phone_number').val('');
            $('#InputMessage').val('');
            $('.sendcontactus').html('Send your message');
        } else {}
      });
    },
    error: function(xhr) {
      $.each(xhr.responseJSON.errors, function(key, value) {
        $("#sendingLoader").hide();
        $("#sendCustomMsg").show();
        $('#validation-errors').append('<div class="alert alert-danger">' + value + '</div');
      });
    },
  });
});

$('#email').keyup(function() {
    var email = $("#email").val();
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    if(pattern.test(email) == true){
         document.getElementById("email_validate").innerHTML = " ";
         $('.err-email').html('');
    } else {
        document.getElementById("email_validate").innerHTML = "Please enter valid email address.";                       
    }    
});
$('#name').keyup(function() {
    var firstname = $("#name").val();
    var pattern = /^[a-zA-Z ]*$/;
    if(pattern.test(firstname) == true){
        document.getElementById("firstname_validate").innerHTML = " ";
        $('.err-name').html('');
    } else {
         document.getElementById("firstname_validate").innerHTML = "Please enter only alphabetical letters.";
    }   
});
$('#phone_number').keyup(function() {
    var phone_number = $("#phone_number").val();
    var pattern = /^[0-9]*$/;
    if(pattern.test(phone_number) == true){
        document.getElementById("num_validate").innerHTML = " ";
        $('.err-phone').html('');
    } else {
         document.getElementById("num_validate").innerHTML = "Please enter only numeric value.";
    }    
});
$('#InputMessage').blur(function() {
    var inputMessage = $("#InputMessage").val();
    if(inputMessage != ''){
        document.getElementById("msg_validate").innerHTML = " ";
         $('.err-msg').html('');
    } else {
         document.getElementById("msg_validate").innerHTML = "Please enter only numeric value.";
        
    }
        
});