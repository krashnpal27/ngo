$("#donation_form").validate({
    rules: {
        "fname": {
             required: true,
            //  minlength: 5,
            //  digits: true
         },
        "lname": {
             required: true,
            //  minlength: 5,
            //  digits: true
         },
        "email": {
             required: true,
            //  minlength: 5,
            //  digits: true
         },
        "address_line1": {
             required: true,
            //  minlength: 5,
            //  digits: true
         },
        "address_line2": {
             required: true,
            //  minlength: 5,
            //  digits: true
         },
        "phone": {
             required: true,
            //  minlength: 5,
            //  digits: true
         },
        "category": {
             required: true,
            //  minlength: 5,
            //  digits: true
         },
        "cause": {
             required: true,
            //  minlength: 5,
            //  digits: true
         },
        "pan": {
             required: true,
            //  minlength: 5,
            //  digits: true
         },
        "amount": {
             required: true,
            //  minlength: 5,
            //  digits: true
         }
      },
      messages: {
        "fname": {
             required: "first name field is required",
             //minlength: "this field must contain at least {0} characters",
            //  digits: "this field can only contain numbers"
         },
         "lname": {
            required: "last name field is required",
           //  minlength: 5,
           //  digits: true
        },
       "email": {
            required: "email field is required",
           //  minlength: 5,
           //  digits: true
        },
       "address_line1": {
            required: "address name field is required",
           //  minlength: 5,
           //  digits: true
        },
       "address_line2": {
            required: "address name field is required",
           //  minlength: 5,
           //  digits: true
        },
       "phone": {
            required: "phone field is required",
           //  minlength: 5,
           //  digits: true
        },
       "category": {
            required: "Please Select category or Create category",
           //  minlength: 5,
           //  digits: true
        },
       "cause": {
            required: "Please Select cause or Create Cause",
           //  minlength: 5,
           //  digits: true
        },
       "pan": {
            required: "pan field is required",
           //  minlength: 5,
           //  digits: true
        },
       "amount": {
            required: "amount field is required",
           //  minlength: 5,
           //  digits: true
        }
      }
});
$("#expense_form").validate({
    rules: {
        "category": {
             required: true,
            //  minlength: 5,
            //  digits: true
         },
        "amount": {
             required: true,
            //  minlength: 5,
            //  digits: true
         },
        "detail": {
             required: true,
            //  minlength: 5,
            //  digits: true
         },
        "date": {
             required: true,
            //  minlength: 5,
            //  digits: true
         }
      },
      messages: {
       "category": {
            required: "Please Select category or Create category",
           //  minlength: 5,
           //  digits: true
        },
       "detail": {
            required:"detail field is required",
           //  minlength: 5,
           //  digits: true
        },
       "amount": {
            required: "amount field is required",
           //  minlength: 5,
           //  digits: true
        },
       "date": {
            required: "date field is required",
           //  minlength: 5,
           //  digits: true
        }
      }
});
$("#donation_edit_form").validate({
    rules: {
        "fname": {
             required: true,
            //  minlength: 5,
            //  digits: true
         },
        "lname": {
             required: true,
            //  minlength: 5,
            //  digits: true
         },
        "email": {
             required: true,
            //  minlength: 5,
            //  digits: true
         },
        "address_line1": {
             required: true,
            //  minlength: 5,
            //  digits: true
         },
        "address_line2": {
             required: true,
            //  minlength: 5,
            //  digits: true
         },
        "phone": {
             required: true,
            //  minlength: 5,
            //  digits: true
         },
        "category": {
             required: true,
            //  minlength: 5,
            //  digits: true
         },
        "cause": {
             required: true,
            //  minlength: 5,
            //  digits: true
         },
        "pan": {
             required: true,
            //  minlength: 5,
            //  digits: true
         },
        "amount": {
             required: true,
            //  minlength: 5,
            //  digits: true
         }
      },
      messages: {
        "fname": {
             required: "first name field is required",
             //minlength: "this field must contain at least {0} characters",
            //  digits: "this field can only contain numbers"
         },
         "lname": {
            required: "last name field is required",
           //  minlength: 5,
           //  digits: true
        },
       "email": {
            required: "email field is required",
           //  minlength: 5,
           //  digits: true
        },
       "address_line1": {
            required: "address name field is required",
           //  minlength: 5,
           //  digits: true
        },
       "address_line2": {
            required: "address name field is required",
           //  minlength: 5,
           //  digits: true
        },
       "phone": {
            required: "phone field is required",
           //  minlength: 5,
           //  digits: true
        },
       "category": {
            required: "Please Select category or Create category",
           //  minlength: 5,
           //  digits: true
        },
       "cause": {
            required: "Please Select cause or Create Cause",
           //  minlength: 5,
           //  digits: true
        },
       "pan": {
            required: "pan field is required",
           //  minlength: 5,
           //  digits: true
        },
       "amount": {
            required: "amount field is required",
           //  minlength: 5,
           //  digits: true
        }
      }
});
$(document).ready( function () {
    // $('#table').DataTable();
    var url= $(location).attr("origin");
    $('#close').click(function(){

        history.back();
    });

    $(document).on('keyup','.amount_pay', function(){
        //pay_options
       var inpt = $(this).val();
       console.log(inpt.length);
       if(inpt.length >0){
            if($('#pay_options').hasClass('d-none')){
                $('#pay_options').addClass('d-flex'); 
                $('#pay_options').removeClass('d-none');
            }
       }else{
            if($('#pay_options').hasClass('d-none')){

            }else{
                $('#pay_options').addClass('d-none'); 
                $('#pay_options').removeClass('d-flex'); 
            }
            /* if($('#cheque_det').hasClass('d-none')){
                
            }else{
                $('#cheque_det').addClass('d-none'); 
                $('#cheque_det').removeClass('d-flex');
            }
            if($('#ofline_div').hasClass('d-none')){
                
            }else{
                $('#ofline_div').addClass('d-none'); 
                $('#ofline_div').removeClass('d-flex');
            } */
       }
       
    });
    $(document).on('click','#online', function(){
        console.log('online');
       if($('#ofline_div').hasClass('d-none')){
        }else{
            $('#ofline_div').addClass('d-none');
       };
       if($('#cheque_det').hasClass('d-none')){
                
       }else{
           $('#cheque_det').addClass('d-none'); 
           $('#cheque_det').removeClass('d-flex');
       }
    });
    $(document).on('click','#online', function(e){
        e.preventDefault();
        var amount = $(this).parent().parent().siblings().find('.amount_pay').val();
        var url= $(this).attr('data-url');

            var totalAmount = amount;
            var product_id = 3;
            // var data = $('#donation_form').serialize();
            // var data = $('#donation_form').serializeArray();
            
            var data = new FormData($('#donation_form')[0]);
            console.log(data);
            var options = {
                        "key": "rzp_test_4Ky6GvnLTgpBe8",
                        "amount": (totalAmount*100), // 2000 paise = INR 20
                        "name": "Natureal",
                        "description": "Payment",
                        "image": "http://127.0.0.1:8000/custom/img/logo.png",
                        "handler": function (response){
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });   
                            $.ajax({
                                url: url,
                                type: 'post',
                                dataType: 'json',
                                data: {
                                    data:data,
                                    razorpay_payment_id: response.razorpay_payment_id 
                                    /*amount : totalAmount,
                                    data:data */
                                }, 
                                success: function (msg) {
                                   
                                //window.location.href = '';
                                }
                                });
                        },
                        "prefill": {
                        "contact": '9988665544',
                        "email":   'tutsmake@gmail.com',
                        },
                        "theme": {
                        "color": "#166435"
                        }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
            e.preventDefault();
            
    });
    $(document).on('click','#offline', function(){
       if($('#online_div').hasClass('d-none')){
        }else{
            $('#online_div').addClass('d-none');
       };
       if($('#ofline_div').hasClass('d-none')){
            $('#ofline_div').removeClass('d-none');
        };
    });

    $(document).on('click','#cash,#cheque',function(){
        
        $('#payment_by').val($(this).attr('id'));
       var  id = $(this).attr('id');
       if(id == 'cheque'){
            if($('#cheque_det').hasClass('d-none')){
                $('#cheque_det').addClass('d-flex'); 
                $('#cheque_det').removeClass('d-none');
            }
       }else{
            if($('#cheque_det').hasClass('d-none')){
                
            }else{
                $('#cheque_det').addClass('d-none'); 
                $('#cheque_det').removeClass('d-flex');
            }
       }
    })
    $(document).on('click','#inactive,#active',function(){
        $('#status').val($(this).attr('id'));
    })

    $("#donation_form").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
        if( !$("#donation_form").valid() ){
            return false;
        }
        var form = $(this);
        var actionUrl = form.attr('action');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });        
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
                alertify.success(data.message);// show response from the php script.
                if(data.response == true){
                    var url = window.location.origin;
                    $('#receipt').val(data.receipt_no);
                    $('#receipt').attr("href", ""+url+"/pdf_view/"+data.receipt_no);
                    $('#receipt').removeClass('d-none');
                    // window.location = url+"/donation";
                }
            }
        });
        
    });
    $("#cause_form").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
        
        var form = $(this);
        var actionUrl = form.attr('action');
        // Get the selected file
      var files = $('#image')[0].files;
      console.log(files);

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });        
        var fd = new FormData($("#cause_form")[0]);

         // Append data 
         fd.append('file',files[0]);
        //  fd.append('_token',CSRF_TOKEN);
        // var formData = new FormData($("#cause_form")[0]);
        console.log(fd);
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: fd, // serializes the form's elements.
            processData: false,
            contentType: false,
            success: function(data)
            {
                alertify.success(data.message);// show response from the php script.
                if(data.response == true){
                    window.location = url+"/causes";
                }
            }
        });
        
    });
    $("#expense_form").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
        
        var form = $(this);
        var actionUrl = form.attr('action');
        // Get the selected file
        var files = $('#image')[0].files;
        console.log(files);

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });        
        var fd = new FormData($("#expense_form")[0]);

         // Append data 
         fd.append('file',files[0]);
        //  fd.append('_token',CSRF_TOKEN);
        // var formData = new FormData($("#cause_form")[0]);
        console.log(fd);
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: fd, // serializes the form's elements.
            processData: false,
            contentType: false,
            success: function(data)
            {
                alertify.success(data.message);// show response from the php script.
                if(data.response == true){
                    window.location = url+"/expense";
                }
            }
        });
        
    });
    $("#donation_cat_form").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
        
        var form = $(this);
        var actionUrl = form.attr('action');
        // Get the selected file
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });        
        var fd = new FormData($("#donation_cat_form")[0]);
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: fd, // serializes the form's elements.
            processData: false,
            contentType: false,
            success: function(data)
            {
                alertify.success(data.message);// show response from the php script.
                if(data.response == true){
                    window.location = url+"/donation_cat";
                }
            }
        });
        
    });
    $("#expense_cat_form").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
        
        var form = $(this);
        var actionUrl = form.attr('action');
        // Get the selected file
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });        
        var fd = new FormData($("#expense_cat_form")[0]);
        console.log(fd);
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: fd, // serializes the form's elements.
            processData: false,
            contentType: false,
            success: function(data)
            {
                alertify.success(data.message);// show response from the php script.
                if(data.response == true){
                    window.location = url+"/expense_cat";
                }
            }
        });
        
    });
    $("#expense_edit_form").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
        
        var form = $(this);
        var actionUrl = form.attr('action');
        // Get the selected file
      var files = $('#image')[0].files;
      console.log(files);

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });        
        var fd = new FormData($("#expense_edit_form")[0]);

         // Append data 
         fd.append('file',files[0]);
        console.log(fd);
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: fd, // serializes the form's elements.
            processData: false,
            contentType: false,
            success: function(data)
            {
                alertify.success(data.message);// show response from the php script.
                if(data.response == true){
                    window.location = url+"/expense";
                }
            }
        });
        
    });
    $("#expense_cat_edit_form").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
        
        var form = $(this);
        var actionUrl = form.attr('action');
        

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });        
        var fd = new FormData($("#expense_cat_edit_form")[0]);

         // Append data 
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: fd, // serializes the form's elements.
            processData: false,
            contentType: false,
            success: function(data)
            {
                alertify.success(data.message);// show response from the php script.
                if(data.response == true){
                    window.location = url+"/expense_cat";
                }
            }
        });
        
    });
    $("#donation_cat_edit_form").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
        
        var form = $(this);
        var actionUrl = form.attr('action');
        

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });        
        var fd = new FormData($("#donation_cat_edit_form")[0]);

         // Append data 
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: fd, // serializes the form's elements.
            processData: false,
            contentType: false,
            success: function(data)
            {
                alertify.success(data.message);// show response from the php script.
                if(data.response == true){
                    window.location = url+"/donation_cat";
                }
            }
        });
        
    });
    $("#cause_edit_form").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
        
        var form = $(this);
        var actionUrl = form.attr('action');
        // Get the selected file
      var files = $('#image')[0].files;
      console.log(files);

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });        
        var fd = new FormData($("#cause_edit_form")[0]);

         // Append data 
         fd.append('file',files[0]);
        console.log(fd);
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: fd, // serializes the form's elements.
            processData: false,
            contentType: false,
            success: function(data)
            {
                alertify.success(data.message);// show response from the php script.
                if(data.response == true){
                    window.location = url+"/causes";
                }
            }
        });
        
    });
    $("#profile_edit_form").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
        
        var form = $(this);
        var actionUrl = form.attr('action');
        // Get the selected file
      var files = $('#image')[0].files;
      console.log(files);

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });        
        var fd = new FormData($("#profile_edit_form")[0]);

         // Append data 
         fd.append('file',files[0]);
        console.log(fd);
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: fd, // serializes the form's elements.
            processData: false,
            contentType: false,
            success: function(data)
            {
                alertify.success(data.message);// show response from the php script.
                if(data.response == true){
                    window.location = url+"/";
                }
            }
        });
        
    });
    $("#donation_edit_form").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
        if( !$("#donation_edit_form").valid() ){
            return false;
        }
        var form = $(this);
        var actionUrl = form.attr('action');
        
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
                alertify.success(data.message);// show response from the php script.
                if(data.response == true){
                    window.location = url+"/donation";
                }
            }
        });
        
    });
    $(".delete_donation").click(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
        
        // var form = $(this);
        var id = $(this).attr('data-id');
        var actionUrl = $(this).attr('data-url'); 
        console.log(actionUrl);  
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: {
                'id':id
            }, // serializes the form's elements.
            success: function(data)
            {
                alertify.success(data.message);
                location.reload();
            }
        });
        
    });
    $(".delete_cause").click(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
        
        // var form = $(this);
        var id = $(this).attr('data-id');
        var actionUrl = $(this).attr('data-url'); 
        var img = $(this).attr('data-img'); 
        console.log(actionUrl);  
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: {
                'id':id,
                'img':img
            }, // serializes the form's elements.
            success: function(data)
            {
                alertify.success(data.message);
                location.reload();
            }
        });
        
    });
    $(".delete_expense").click(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
        
        // var form = $(this);
        var id = $(this).attr('data-id');
        var actionUrl = $(this).attr('data-url'); 
        var img = $(this).attr('data-img'); 
        console.log(actionUrl,id,img);  
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: {
                'id':id,
                'img':img
            }, // serializes the form's elements.
            success: function(data)
            {
                alertify.success(data.message);
                location.reload();
            }
        });
        
    });
    $(".delete_ex_cat").click(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
        
        // var form = $(this);
        var id = $(this).attr('data-id');
        var actionUrl = $(this).attr('data-url'); 
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }); 
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: {
                'id':id
            }, // serializes the form's elements.
            success: function(data)
            {
                alertify.success(data.message);
                location.reload();
            }
        });
        
    });
    $(".delete_don_cat").click(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
        
        // var form = $(this);
        var id = $(this).attr('data-id');
        var actionUrl = $(this).attr('data-url'); 
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }); 
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: {
                'id':id
            }, // serializes the form's elements.
            success: function(data)
            {
                alertify.success(data.message);
                location.reload();
            }
        });
        
    });
    // preview image
    $("#image").change(function(e){
        console.log($(this).attr('id'));
        var output = document.getElementById('pre_img');
        output.src = URL.createObjectURL(e.target.files[0]);
    });

} );
