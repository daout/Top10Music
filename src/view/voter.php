<?php
include_once('rating.php')
?>

<div id="voter">  
 
		
		<img src="img/rolling stones sympathy for devil.jpg"
				width="50" height="50"> 1 - Rolling Stones : Sympathy for the devil
				<input value="<?= getRatingByProductId(connect(), 1); ?>" type="number" class="rating" min=0 max=5 step=0.1 data-size="md" data-stars="5" productId=1>
				 
		<p></p>
		<a href="https://www.youtube.com/watch?v=54W8kktFE_o"><img src="img/Pink Floyd Shine On You Crazy Diamond.jpg"
						width="50" height="50" alt=""> 2 - Pink Floyd : Shine on you crazy diamond  </a>
						 
		<p></p>
		<a href="https://www.youtube.com/watch?v=bkTLIO2zanM"><img src="img/Louis Amstrong What a wonderfull world.jpg"
		width="50" height="50" alt=""> 3 - Louis Amstrong : What a wonderfull word  </a>
								 
		<p></p>
		<a href="https://www.youtube.com/watch?v=rfX0q1aNCos"><img src="img/The Beatles Let it be.jpg"
		width="50" height="50" alt=""> 4 - Beatles : Let it be </a>
										 
		<p></p>
		<a href="https://www.youtube.com/watch?v=DVg2EJvvlF8"><img src="img/John LENNON Imagine.jpg"
		width="50" height="50" alt=""> 5 - John Lennon : Imagine </a>
												 
		<p></p>
		<a href="https://www.youtube.com/watch?v=d4_B3H5izxM"><img src="img/Elvis Presley Jail house rock.jpg"
		width="50" height="50" alt=""> 6 - Elvis Presley : Jailhouse rock </a>

		<p></p>
		<a href="https://www.youtube.com/watch?v=hwZNL7QVJjE"><img src="img/Ben E King Stand by me.jpg"
		width="50" height="50" alt=""> 7 - Ben E. King : Stand by me </a>

		<p></p>
		<a href="https://www.youtube.com/watch?v=D0W1v0kOELA"><img src="img/Lynyrd Skynyrd Free Bird.jpg"
		width="50" height="50" alt=""> 8 - Lynyrd Skynyrd : Free bird </a>

		<p></p>
		<a href="https://www.youtube.com/watch?v=6FOUqQt3Kg0"><img src="img/Aretha Franklin RESPECT.jpg"
		width="50" height="50" alt=""> 9 - Aretha Franklin : Respect </a>

		<p></p>
		<a href="https://www.youtube.com/watch?v=3l4nVByCL44"><img src="img/Bob Dylan Blowing the wind.jpg"
		width="50" height="50" alt=""> 10 - Bob Dylan : Blowing in the wind </a>
		
		
		<p></p>
		<a href="https://www.youtube.com/watch?v=O4irXQhgMqg"><img src="img/The Rolling stones Paint it black.jpg"
		width="50" height="50" alt=""> 11 - Rolling Stones : paint in black </a>
										 
		<p></p>
		<a href="https://www.youtube.com/watch?v=Th3ycKQV_4k"><img src="img/DEREK AND THE DOMINOS Layla.jpg"
		width="50" height="50" alt=""> 12 - Derek and the dominos : Layla </a>
												 
		<p></p>
		<a href="https://www.youtube.com/watch?v=ZFo8-JqzSCM"><img src="img/johnny be good chuck berry.jpg"
		width="50" height="50" alt=""> 13 - Chuck Berry : Johnny B.Goode </a>

		<p></p>
		<a href="https://www.youtube.com/watch?v=A_MjCqQoLLA"><img src="img/hey jude the beatles.jpg"
		width="50" height="50" alt=""> 14 - Beatles : Hey Jude </a>

		<p></p>
		<a href="https://www.youtube.com/watch?v=nrIPxlFzDi0"><img src="img/rolling stones i can't get no satisfaction.jpg"
		width="50" height="50" alt=""> 15 - Rolling Stones : (I can't get no) Satisfaction </a>

		<p></p>
		<a href="https://www.youtube.com/watch?v=EPLZL4s_jtI"><img src="img/ray charles what'd i say.jpg"
		width="50" height="50" alt=""> 16 - Ray Charles : What'd I say </a>

		<p></p>
		<a href="https://www.youtube.com/watch?v=TLV4_xaYynY"><img src="img/jimmy hendrix all along the watchtower.jpg"
		width="50" height="50" alt=""> 17 - Jimi Hendrix : All along the watchower </a>
		
		<p></p>
		<a href="https://www.youtube.com/watch?v=KqeKikpLQ5o"><img src="img/Led Zeppelin When the levee breaks.jpg"
		width="50" height="50" alt=""> 18 - Led Zeppelin : When the levee breaks  </a>
		
		<p></p>
		<a href="https://www.youtube.com/watch?v=rTVjnBo96Ug"><img src="img/Otis Redding Sittin on the dock of the bay.jpg"
		width="50" height="50" alt=""> 19 - Otis Redding : (Sittin' on) the dock of the bay </a>
		
		<p></p>
		<a href="https://www.youtube.com/watch?v=fJ9rUzIMcZQ"><img src="img/QUEEN Bohemian Rhapsody.jpg"
		width="50" height="50" alt=""> 20 - Queen : Bohemian rhapsody </a>

<script type="text/javascript">
        $(function(){
               $('.rating').on('rating.change', function(event, value, caption) {
                productId = $(this).attr('productId');
                $.ajax({
                  url: "rating.php",
                  dataType: "json",
                  data: {vote:value, productId:productId, type:'save'},
                  success: function( data ) {
                     alert("rating saved");
                  },
              error: function(e) {
                // Handle error here
                console.log(e);
              },
              timeout: 30000  
            });
              });
       });
    </script>
		
</div>	


																					 
																						 
																						 