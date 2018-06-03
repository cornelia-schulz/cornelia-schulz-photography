
$(document).ready(function() {
	/*$('.galleryposition').mouseenter(
		function() {
			$(this).children('.galleryparagraph').removeClass('hidden');
		}
	);

	$('.galleryposition').mouseleave(
		function() {
			$(this).children('.galleryparagraph').addClass('hidden');
		}
	);
	
		$('.vgalleryposition').mouseenter(
		function() {
			$(this).children('.galleryparagraph').removeClass('hidden');
			
		}
	);

	$('.vgalleryposition').mouseleave(
		function() {
			$(this).children('.galleryparagraph').addClass('hidden');
		}
	);*/
    
    $('#closeLightbox').click(
		function() {
			$('#lightboxcontainer').addClass('hidden');
			$('#lightbox').addClass('hidden');
		}
	);
	
	
    $('#nav-menu').click(function() {
		$('#example').toggleClass('nav-open');//.slideToggle('300');
		$('.menu').toggleClass('nav-menu-open');
		}
	);
	
	$('#nav-menu').on({ 'tap' : function(){ 
		$('#example').toggleClass('nav-open');//.slideToggle('300');
		$('.menu').toggleClass('nav-menu-open');
		} 
	});
   
   
   $("ul.sf-menu > li").on("tap",function(){
		$(this).attr('href');
		});
		
		
		
		
   
    //LIGHTBOX
    var images = $(".lightbox-switch").map(function() {

        return $(this).attr("src");
        });
        
        var index;
        
        $('.lightbox-switch').click(
		function() {
            index = 1;
            console.log(index);
			$('#lightboxcontainer').removeClass('hidden');
			$('#lightbox').removeClass('hidden');
            var image_href = $(this).attr('src');
            for (i=0; i < images.length; i++) { 
                if (image_href == images[i])
                { 
                    index = i;
                    console.log(index);
                }
            } 
            if(index == 0) {
                $('#galleryPreviousImage').addClass('hidden');
            }
            else if(index == images.length-1) {
                $('#galleryNextImage').addClass('hidden');
            }
            else {
                $('#galleryNextImage').removeClass('hidden');
                $('#galleryPreviousImage').removeClass('hidden');
            }
            $('#lightboxImage').html('<img id="boxImage" src="' + image_href + '" />');
		}
	);
           
        $('#galleryNextImage').click(
        function() {
            index ++;
            console.log(index);
            if(index >= images.length-1) {
                $('#galleryNextImage').addClass('hidden');
            }
            else {
                $('#galleryNextImage').removeClass('hidden');
                $('#galleryPreviousImage').removeClass('hidden');
                }
            
            $('#lightboxImage').html('<img id="boxImage" src="' + images[index] + '" />');
            
            return false;
        }
        );
        
        $('#galleryPreviousImage').click(
        function() {
            index --;
            console.log(index);
            if(index <= 0) {
                $('#galleryPreviousImage').addClass('hidden');
            }
            else {
                $('#galleryNextImage').removeClass('hidden');
                $('#galleryPreviousImage').removeClass('hidden');
                }
            $('#lightboxImage').html('<img id="boxImage" src="' + images[index] + '" />');
            
            return false;
        }
        );
        
        
        $('#lightboxcontainer').click(
		function() {
			$('#lightboxcontainer').addClass('hidden');
			$('#lightbox').addClass('hidden');
		}
	);
    
   //     $('#lightboxImage').click(function(e){
  //          e.preventDefault();
    //        return false;
    //    });
    
});