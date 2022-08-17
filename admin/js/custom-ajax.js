 //Submit login_form start  
 
$(document).ready(function(){
    $("#login_form").validate({
        rules: {
            password: "required",
            email: {
                required: true,
                email: true,
            },
        }, 
        messages: {
              //firstname: "Please enter your firstname",
        }
    })
    $('#login_form').submit(function(e) {
        e.preventDefault();
        if ($('#login_form').valid()) {
            $('.submit-disable').attr("disabled", true);
            $.post("submit/login-submit.php?" + $("#login_form").serialize(), {}, function(response) {
                //console.log(response);
                $('.login_form_responce').html(response);
                $('.submit-disable').attr("disabled", false);
            });
            return false 
        } 
    });
}); 
//Submit login_form end

//delete data
$(document).on("click", ".service_delete", function() { 
    var service_id = $(this).data("service_id");
    $.ajax({
        url: "delete.php",
        type: "POST",
        cache: false,
        data:{
            id: service_id
        },
        success: function(response){
            $('.delete_service_responce').html(response);
        }
    });
});
	
	
