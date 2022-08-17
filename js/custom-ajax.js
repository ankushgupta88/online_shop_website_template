$(document).ready(function(){ 

//Code for contact
	$("#contactForm").validate({
		rules: {
		name:{required:true
		},
		email:{required:true , 
		       email: true
			   },
		subject:{required:true
		},
		message:{required:true
		}	
		},
		
     
			  
	});
	
	
});




// //code for remove from add to cart
// $('.delete-product').click(function() {
// //alert('ff');
//     var product_id = $(this).data('id');//PRODUCT ID
// //alert (product_id);
//     $.ajax({
//          url: 'cart_library.php',
//          type: 'POST',
//          data: {
//             product_id: product_id,
//             action: "delete-product"},
//          success:function(data){
//          $('#show-cart').html(data); 

//         }

//          });

//            });
$('.delete-product').click(function(){
   //alert('h');
    var product_id = $(this).attr("data-id");
    console.log(product_id);
    jQuery.ajax({
        type: 'POST',
        dataType: 'json',
        url: "cart_library.php",
        data: { action: "delete-product", 
                product_id: product_id
        },success: function(data){
            $('#show-cart').html(data); 
        }
    });
    return false;
});


// //get qunatity value
// $(function(){
//     //alert('hhhhhhh');
//     $('.product_quantity').on('keyup', function() {
//         var city = $(this).val();
//         // alert(city); 
//        // if input value is changed, run the ajax call here
//        $.ajax({
//         type: 'POST',
//         dataType: 'json',
//         url: "cart_library.php",
//         data: {city:city
//         },
//           success: function (data) {
//             alert(data);
//             // then on ajax success, display the results from your backend
//             $('#available-quantity').html(data)
//           }
//        })
//     })
// })


var QtyInput = (function () {
	var $qtyInputs = $(".qty-input");

	if (!$qtyInputs.length) {
		return;
	}

	var $inputs = $qtyInputs.find(".product-qty");
	var $countBtn = $qtyInputs.find(".qty-count");
	var qtyMin = parseInt($inputs.attr("min"));
	var qtyMax = parseInt($inputs.attr("max"));

	$inputs.change(function () {
		var $this = $(this);
		var $minusBtn = $this.siblings(".qty-count--minus");
		var $addBtn = $this.siblings(".qty-count--add");
		var qty = parseInt($this.val());
		if (isNaN(qty) || qty <= qtyMin) {
			$this.val(qtyMin);
			$minusBtn.attr("disabled", true);
		} else {
			$minusBtn.attr("disabled", false);
			
			if(qty >= qtyMax){
				$this.val(qtyMax);
				$addBtn.attr('disabled', true);
			} else {
				$this.val(qty);
				$addBtn.attr('disabled', false);
			}
		}
	});

	$countBtn.click(function () {
		var operator = this.dataset.action;
		var $this = $(this);
		var $input = $this.siblings(".product-qty");
		var qty = parseInt($input.val());
		
		if (operator == "add") {
			qty += 1;
			if (qty >= qtyMin + 1) {
				$this.siblings(".qty-count--minus").attr("disabled", false);
			}

			if (qty >= qtyMax) {
				$this.attr("disabled", true);
			}
			$("#product_quantitys").val(qty);

		} else {
			qty = qty <= qtyMin ? qtyMin : (qty -= 1);
			
			if (qty == qtyMin) {
				$this.attr("disabled", true);
			}

			if (qty < qtyMax) {
				$this.siblings(".qty-count--add").attr("disabled", false);
			}
			$("#product_quantitys").val(qty);

		}

		$input.val(qty);
           
    	});
    })();


    $(document).ready(function() {
    
        //Code for add to cart
        $(document).on("click",".add_to_cart",function(e) {
            e.preventDefault();
            var product_id = $(this).attr("data-product_id");
            var product_qty = $("#product_quantitys").val();
            
            console.log(product_qty);
             
            $.ajax({
                url : "cart_library.php",
                type : 'POST',
                data: {
                    product_id: product_id, 
                    product_qty:product_qty,
                    action: "add_to_cart"  
                },
                beforeSend: function() {
                   $(this).attr("disabled", true); 
                },
                success : function (response) {
                   
                    $('.add_to_cart_responce').html(response);
                    $(this).attr("disabled", false);
                    setTimeout(function() {
                        $('.msg-success').fadeOut("slow");
                        $('.msg-unsuccess').fadeOut("slow");
                    }, 3000); 
                } 
           });
        });
    });


//order
$("#checkout_form_new").validate({
	rules: {
		first_name:{
			required:true
		},
		email:{
			required:true , 
			email: true
		},
		last_name:{
			required:true
		},
		mobile:{
			required:true
		},
		Address:{
			required:true
		},
		Country:{
			required:true
		},
		City:{
			required:true
		},
		State:{
			required:true
		},
		Code:{
			required:true
		},
		payment:{
			required:true
		}		
	},		  
});
$('#checkout_form_new').submit(function (e) {
	//alert('hlo');
	e.preventDefault();

	if ($('#checkout_form_new').valid()) {

		 $('.submit-payment-button').attr('disabled', true);

		 $.post("submit/checkout-submit.php?"+ $("#checkout_form_new").serialize(), {}, function (response) {
	 	console.log(response);
		 	$('.submit-payment-button').attr('disabled', false);
		 	$('.payment_responce').html(response);
		 });
		 return false;
	}
});

//login-first


