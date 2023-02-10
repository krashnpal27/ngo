
$(document).ready( function () {
    // $('#table').DataTable();
    var url= $(location).attr("origin");
    $('#close').click(function(){

        history.back();
    });

    $(document).on('click','#cash,#cheque',function(){
        $('#payment_by').val($(this).attr('id'));
    })
    $(document).on('click','#inactive,#active',function(){
        $('#status').val($(this).attr('id'));
    })

    $("#donation_form").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
        
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
                    window.location = url+"/donation";
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
