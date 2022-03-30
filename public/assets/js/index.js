	// script popup s'inscrire
			   $('.popup-sign-link').click(function(){
				   $('.popup-signin').css({
					   display:'block'
				   });
			   })
			   
			   $('.popup-sign-vendor-link').click(function(){
				   $('.popup-signinVendor').css({
					   display:'block'
				   });
			   })

			   // script afficher popup se connecter
			   $('.popup-login-link').click(function(){
				   $('.popup-login').css({
					   display:'block'
				   });
			   })

			   $('.btn-contact-vendeur').click(function(){
				   $('.popup-login').css({
					   display:'block'
				   });
			   })

			   // SIGNIN popup
			   $('.popup-sign-link').magnificPopup({
				 items: {
					 src: '#popupSignIn',
					 type: 'inline'
				 },
				 preloader:true
			   });

			   // LOGIN popup
			   $('.popup-login-link').magnificPopup({
				 items: {
					 src: '#popupLogIn',
					 type: 'inline'
				 },
				 preloader:true
			   });
			  
			   // SIGNIN popup Vnedor
			   $('.popup-sign-vendor-link').magnificPopup({
				 items: {
					 src: '#popupSignInVendor',
					 type: 'inline'
				 },
				 preloader:true
			   });

			   $('.btn-contact-vendeur').magnificPopup({
				 items: {
					 src: '#popupLogIn',
					 type: 'inline'
				 },
				 preloader:true
			   });





$(document).ready(function(){
  
	var win = $(window);
	
	win.on('scroll', function () {
	  
	  var scroll = win.scrollTop();
	  
	  if (scroll >= 80) {
		
		$(".categorie-second").addClass("fixed");
		$('.list-card').css({ top:'45px'});
		
	  } else {
		$('.list-card').css({ top:'75px'});
		$(".categorie-second").removeClass("fixed");
		
	  }
	  
	});
	
	/* afficher le dropdown*/
	var timeout;
	$('.dropdown-vue').on({
	  mouseenter: function() {
		$('.dropdown-content').show(1000);
	  },
	  mouseleave: function() {
		timeout = setTimeout(function() {
		  $('.dropdown-content').hide(500);
		}, 500);
	  }
	});
	
	/* changement de couleur sur le menu*/
	
	$('nav ul li a').click(function(){
	  $('nav ul li a').removeClass('active');
	  $(this).closest('nav ul li a').addClass('active');
	  
	});
	
	/* afficher les fils du dropdown */
	
	$('.li1').hover(function(){
	  $('.dropdown-content-li1').show(1000);
	  $('.dropdown-content-li2').hide();
	  $('.dropdown-content-li3').hide();
	  
	}, function() {
	  $('.dropdown-content-li1').hide();
	});
	$('.li2').hover(function(){
	  $('.dropdown-content-li2').show(1000);
	  $('.dropdown-content-li1').hide();
	  $('.dropdown-content-li3').hide();
	}, function() {
	  $('.dropdown-content-li2').hide();
	});
	$('.li3').hover(function(){
	  $('.dropdown-content-li3').show(1000);
	  $('.dropdown-content-li2').hide();
	  $('.dropdown-content-li1').hide();
	}, function() {
	  $('.dropdown-content-li3').hide();
	});
	
	/* afficher les elements des images en faisant un hover*/
	
	$('.image-hover1').hover(function() {
	  $(".image-hover1 img").addClass('zoom-effect-img');
	  $(".image-hover1").css("border","1px solid #f3f3f3")
	  $(".right-1").css("opacity","9");
	  $(".section-container-images-shop2-box1a-fils-prix1").addClass('effect-show-prix');
	  $(".section-container-images-shop2-box1a-fils-prix-btn1").css("opacity","9");
	  
	}, function() {
	  $(".image-hover1 img").removeClass('zoom-effect-img');
	  $(".image-hover1").css("border","none")
	  $(".right-1").css("opacity","0");
	  $(".section-container-images-shop2-box1a-fils-prix1").removeClass('effect-show-prix');
	  $(".section-container-images-shop2-box1a-fils-prix-btn1").css("opacity","0");
	});
	
	$('.image-hover2').hover(function() {
	  $(".image-hover2 img").addClass('zoom-effect-img');
	  $(".image-hover2").css("border","1px solid #f3f3f3")
	  $(".right-2").css("opacity","9");
	  $(".section-container-images-shop2-box1a-fils-prix2").addClass('effect-show-prix');
	  $(".section-container-images-shop2-box1a-fils-prix-btn2").css("opacity","9");
	  
	}, function() {
	  $(".image-hover2 img").removeClass('zoom-effect-img');
	  $(".image-hover2").css("border","none")
	  $(".section-container-images-shop2-box1a-fils-img-right").css("opacity","0");
	  $(".section-container-images-shop2-box1a-fils-prix2").removeClass('effect-show-prix');
	  $(".section-container-images-shop2-box1a-fils-prix-btn2").css("opacity","0");
	});
	$('.image-hover3').hover(function() {
	  $(".image-hover3 img").addClass('zoom-effect-img');
	  $(".image-hover3").css("border","1px solid #f3f3f3")
	  $(".right-3").css("opacity","9");
	  $(".section-container-images-shop2-box1a-fils-prix3").addClass('effect-show-prix');
	  $(".section-container-images-shop2-box1a-fils-prix-btn3").css("opacity","9");
	  
	}, function() {
	  $(".image-hover3 img").removeClass('zoom-effect-img');
	  $(".image-hover3").css("border","none")
	  $(".section-container-images-shop2-box1a-fils-img-right").css("opacity","0");
	  $(".section-container-images-shop2-box1a-fils-prix3").removeClass('effect-show-prix');
	  $(".section-container-images-shop2-box1a-fils-prix-btn3").css("opacity","0");
	});
	$('.image-hover4').hover(function() {
	  $(".image-hover4 img").addClass('zoom-effect-img');
	  $(".image-hover4").css("border","1px solid #f3f3f3")
	  $(".right-4").css("opacity","9");
	  $(".section-container-images-shop2-box1a-fils-prix4").addClass('effect-show-prix');
	  $(".section-container-images-shop2-box1a-fils-prix-btn4").css("opacity","9");
	  
	}, function() {
	  $(".image-hover4 img").removeClass('zoom-effect-img');
	  $(".image-hover4").css("border","none")
	  $(".section-container-images-shop2-box1a-fils-img-right").css("opacity","0");
	  $(".section-container-images-shop2-box1a-fils-prix4").removeClass('effect-show-prix');
	  $(".section-container-images-shop2-box1a-fils-prix-btn4").css("opacity","0");
	});
	$('.image-hover5').hover(function() {
	  $(".image-hover5 img").addClass('zoom-effect-img');
	  $(".image-hover5").css("border","1px solid #f3f3f3")
	  $(".right-5").css("opacity","9");
	  $(".section-container-images-shop2-box1a-fils-prix5").addClass('effect-show-prix');
	  $(".section-container-images-shop2-box1a-fils-prix-btn5").css("opacity","9");
	  
	}, function() {
	  $(".image-hover5 img").removeClass('zoom-effect-img');
	  $(".image-hover5").css("border","none")
	  $(".section-container-images-shop2-box1a-fils-img-right").css("opacity","0");
	  $(".section-container-images-shop2-box1a-fils-prix5").removeClass('effect-show-prix');
	  $(".section-container-images-shop2-box1a-fils-prix-btn5").css("opacity","0");
	});
	
	$('.image-hover6').hover(function() {
	  $(".image-hover6 img").addClass('zoom-effect-img');
	  $(".image-hover6").css("border","1px solid #f3f3f3")
	  $(".right-6").css("opacity","9");
	  $(".section-container-images-shop2-box1a-fils-prix6").addClass('effect-show-prix');
	  $(".section-container-images-shop2-box1a-fils-prix-btn6").css("opacity","9");
	  
	}, function() {
	  $(".image-hover6 img").removeClass('zoom-effect-img');
	  $(".image-hover6").css("border","none")
	  $(".section-container-images-shop2-box1a-fils-img-right").css("opacity","0");
	  $(".section-container-images-shop2-box1a-fils-prix6").removeClass('effect-show-prix');
	  $(".section-container-images-shop2-box1a-fils-prix-btn6").css("opacity","0");
	});
	
	/* caroussel des images*/
	
	$('.owl-carousel').owlCarousel({
	  items:1,
	  loop:true,
	  nav:true,
	  autoplay:true,
	  autoplaySpeed:1000,
	  smartSpeed:1500,
	  autoplayHoverPause:true
	});
	
	// show and hide cart panier
	$('.categorie-first-box2').click(function(){
	  $('#list-card').slideDown();
	});
	
	$('.add-to-cart').click(function(e) {
	  e.preventDefault();
	  	$(this).each(function () {
			var name = $(this).attr("data-name");
			var id = $(this).attr("data-id");
			var price = "<span class='eachPrice'>" +$(this).attr("data-price")+ "</span>";
			var image= "<img src="+$(this).attr("data-image")+">";
			var box_content=$(".list-item"+id);
			var box_content_id=box_content.attr("data-id");
			if(box_content){
			if(box_content_id==id){
				alert('Vous avez deja ajoute ce produit à vos favoris');
			}else{
				var body = $('html, body');
				body.animate({scrollTop: 0}, 400, 'swing', function() {
				
				});
				var content_cart=`<div id="show-list-card" class="list-item list-item${id}" data-id="${id}">
							<div class="cart-image">
							${image}
							</div>
							<div class="cart-box">
								<span class="cart-box-title">
								${name}
								</span>
								<span class="cart-box-price">
								${price}
								</span>
								<span class="cart-box-qty">
									<input type="number" value="1" min="1" class="cart-box-qty-input" onclick="quantityChange();">
								</span>
							</div>
								<i class="fas fa-trash-alt remove cart-remove"></i>
							
				</div>`;
				
				$("#list-card").append(content_cart);
				//number of items in basket
				$("#show-card-length").text($("#list-card").children().length);
			}
			}
			//calculate total price
			var totalPrice = 0;
			$(".eachPrice").each(function (){
			var cenaEach = parseFloat($(this).text());
			totalPrice+=cenaEach;
			});
			$("#total-price").html("XAF &nbsp;" +totalPrice);
		});
		
		$(".remove").on("click", function () {
			$(this).parent().remove();
			var totalPrice = 0;
			$(".eachPrice").each(function (){
			var cenaEach = parseFloat($(this).text());
			totalPrice+=cenaEach;
			});
			$("#total-price").html("XAF &nbsp;" +totalPrice);
			$("#show-card-length").text($("#list-card").children().length);
		});
	});
  
  
  // open box chat
  $('.chat-box').click(function(){
	$('.chat_content').slideToggle();
  });
  // open cart message page
  $('.click-open-cart').click(function(){
	$('.message_content_shop_contant').slideToggle();
  });
  //close index block product
  $('#message_cart_icone_close').click(function(){
	$('.message_affichage_index_msg').fadeOut(500);
	//$('.message_affichage_index_msg').empty();
  });
  
  // fetch box index
  $('#message_content_shop_contant_box1').click(function(){
	var name = $(this).attr("data-name");
	var prix = $(this).attr("data-prix");
	var price = "<span class='eachPrice'>" +$(this).attr("data-price")+ "</span>";
	var image= "<img src="+$(this).attr("data-image")+">";
	var content=`<div class="message_content_shop_contant_box_img">
			  ${image}
			</div>
			<div class="message_content_shop_contant_box_desc">
			  <span>${name}</span>
			  <span>${prix}</span>
	</div>`;
	$(".message_affichage_index_msg").fadeIn();
	$("#message_cart_index").append(content);
	$(".message_affichage_index_msg").fadeIn();
	
	//alert(content)
  });
  //send message page message
  $('#send-message').click(function(){
	SendMessage();
  });
  $('#send-message-index').click(function(){
	//e.preventDefault();
	SendMessageAccueil();
  });
});
 
  function SendMessage() {
	message = $("#message").val();
	if($.trim(message) == '') {
	  alert('champ vide');
	}
	$(".message_affichage_content_user_content").animate({ scrollTop: $(document).height() }, "fast");
	$(".message_affichage_content_user_content").append(`<div class="chat-message-item message-chat-message-item-operator chat-message-item-operator">
			  ${message}
	</div>`);
  $("#message").val('');
  }
  function SendMessageAccueil() {
  message_index = $("#message-accueil").val();
  if($.trim(message_index) == '') {
	alert('champ vide');
  }
  $(".chat-content-message").animate({ scrollTop: $(document).height() }, "fast");
  $('.chat-content-message').append(`<div class="chat-message-item chat-message-item-operator">
			  ${message_index}
  </div>`);
  $("#message-accueil").val('');
  }
  function quantityChange()
  {
  var qty= $(".cart-box-qty-input").val();
  var price = $(".add-to-cart").attr("data-price").split(",").join(".");
  var total= parseFloat(qty * price);
  ///alert(total)
  
  var totalPrice = 0;
  $(".eachPrice").each(function (){
  totalPrice+=total;
  });
  $("#total-price").html("XAF &nbsp;" +totalPrice);
  }
  let cart = document.querySelector('.list-card');
  let cartshow = document.querySelector('.shop-card-length');
  let cartclose = document.querySelector('#cart-icone-close');
  cartshow.onclick= () => {
  cart.classList.add("actives");
  };
  cartclose.onclick= () => {
  cart.classList.remove("actives");
  }



//   PAGE DE CHAT 

