$('.inner_pg li').click(function(){
    var aid = $(this).attr('id');
    $(".inner_pg #"+aid).siblings().removeClass("active");
    $(".inner_pg #"+aid).addClass("active");
    $(".tabs_content #"+aid).show();
    $(".tabs_content #"+aid).siblings().hide();
});
 
$('.nav_menu  li a').click(function(){ 
    var a = $(this).attr('href');
    var data = a.split('#');
    var id = data[1];
    $(".inner_pg #"+id).click();
    $(".inner_pg #"+id).siblings().removeClass("active");
    $(".inner_pg #"+id).addClass("active");
    $(".tabs_content #"+id).show();
    $(".tabs_content #"+id).siblings().hide();
});
$(window).scroll(function(){ 
    if($(this).scrollTop()>600){
        $('.to-top').show(); 
    }
    else{
        $('.to-top').hide();
    }
});
$(window).scroll(function(){ 
    if($(this).scrollTop()>200){
        $('.to-home img').show(); 
    }
    else{
        $('.to-home img').hide();
    }
});
$(document).ready(function() { 
    var toTop = $('.to-top'); 
    toTop.on('click', function() { 
      $('html, body').animate({
        scrollTop: $('html, body').offset().top,
      });
    });

    $('.mb_navHead .menubar').click(function(){
        $('.nav_menu').toggle();
        $('.closer').show();
        $('.menubar').hide();
        $('body').addClass('body_fixed');
    }); 

    $('.closer').click(function(){ 
        $('.nav_menu').toggle();
        $('.menubar').show();
        $('.closer').hide();
        $('body').removeClass('body_fixed');
    }); 

    $('.drop_down_list select').on('change', function(e) { 
        var b = $(this).val();
        //alert(b);
        //$( '#'+b).show();
        $(".tabs_content #"+b).show();
        $(".inner_pg #"+b).siblings().removeClass("active");
        $(".tabs_content #"+b).siblings().hide();
        // $('#' + $(e.currentTarget).val()).addClass("active in");
    }); 
  });
            function penq_submit(){ 
				$('.penq-return').empty();
				name = $('.penq-name').val();  
				address = $('.penq-address').val();
				phone = $('.penq-phone_number').val();
				email = $('.penq-email').val(); 

				dataString = '&name=' + name + '&email=' + email + '&occupation=' +occupation+  '&address=' +address +  '&phone=' +phone+ '&action=quotes';
				if(name=='' || email=='' || transaction=='' || occupation=='' || address=='' || phone=='' ){
					$('.penq-return').html('<div class="alert alert-danger">All Fields are required!</div>');
				}else{
					$.ajax({
						url: 'form_subscribe.php',
						method: 'post',
						data: dataString,
						cache: false,
						success:function(data){
							if(data === '1'){
								$('.penq-return').html('<div class="alert alert-success">Thanks for subscribe.</div>');
							}else{
								$('.penq-return').html(data).show();
							}
						}
					})
				}
			}  

        var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        specialKeys.push(46); //Dot
    
        $(".numeric").bind("keypress", function (e) {
    		var keyCode = e.which ? e.which : e.keyCode
    		var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
    		$(".error").css("display", ret ? "none" : "inline");
    		return ret;
    	});
 
  	