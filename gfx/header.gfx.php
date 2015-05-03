<section class="tp-gfx-viewer">

</section>


<script src="res/js/jquery.easing.1.3.js"></script>
<script>
	$(document).ready(function() {
		var dly = 800;

		var imgList = [
			{"src":"res/img/album/1.jpg"},
			{"src":"res/img/album/2.jpg"},
			{"src":"res/img/album/3.jpg"},
			{"src":"res/img/album/4.jpg"},
			{"src":"res/img/album/5.jpg"},
			{"src":"res/img/album/6.jpg"},
			{"src":"res/img/album/7.jpg"},
			{"src":"res/img/album/8.jpg"},
			{"src":"res/img/album/9.jpg"},
			{"src":"res/img/album/10.jpg"},
			{"src":"res/img/album/11.jpg"},
			{"src":"res/img/album/12.jpg"}
		];

		function shuffleArray(array) {
		    for (var i = array.length - 1; i > 0; i--) {
		        var j = Math.floor(Math.random() * (i + 1));
		        var temp = array[i];
		        array[i] = array[j];
		        array[j] = temp;
		    }
		    return array;
		}

		$.each(shuffleArray(imgList).slice(0,10), function(key, val) {
			var generateImg = $('<img />');			
			var rotator = Math.random() * 10 - 9;
			var grays = Math.random() * 100 - 10;

			generateImg.attr('src', val.src);
        	generateImg.css('transform', 'rotate(' + rotator + 'deg) scale(1.25)');
        	generateImg.css('width', '10vw');
        	generateImg.css('height', 'auto');
        	generateImg.css('display', 'inline-block');
        	generateImg.css('box-shadow', '-3px 2px 1px 1px rgba(0,0,0,.3)');
			generateImg.html(dly);
			generateImg.hide();

			$('.tp-gfx-viewer').append(generateImg);
			dly += 300;
			generateImg.delay(dly).fadeIn('slow');
		});



		/*//fading out the thumbnails with style
		$(".tp-gfx-viewer img").each(function(){
			d = Math.random()*1000; //1ms to 1000ms delay
			$(this).delay(d).animate({opacity: 0}, {
				//while the thumbnails are fading out, we will use the step function to apply some transforms. variable n will give the current opacity in the animation.
				step: function(n){
					s = 1-n; //scale - will animate from 0 to 1
					$(this).css("transform", "scale("+s+")");
				}, 
				duration: 1000, 
			})
		}).promise().done(function(){
			//after *promising* and *doing* the fadeout animation we will bring the images back
			storm();
		});

		//bringing back the images with style
		function storm()
		{
			$(".tp-gfx-viewer img").each(function(){
				d = Math.random()*1000;
				$(this).delay(d).animate({opacity: 1}, {
					step: function(n){
						//rotating the images on the Y axis from 360deg to 0deg
						ry = (1-n)*360;
						//translating the images from 1000px to 0px
						tz = (1-n)*1000;

						var rotator = Math.random() * 10 - 9;
						//applying the transformation
						$(this).css("transform", "rotateY(" + ry + "deg) translateZ("+tz+"px) ");
        				
					}, 
					duration: 3000, 
					//some easing fun. Comes from the jquery easing plugin.
					easing: 'easeOutQuint', 
				})
			})
		}*/
	});	
</script>