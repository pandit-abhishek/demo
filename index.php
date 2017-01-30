<?php
// echo 'here';die;
?>
<html>
	<head>
		<!-- <script src="jquery-3.1.1.js"></script> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){

				/*$( ".hello" ).on("click",function() {
				  	$(".hi").trigger("click");
				});*/

			    $(".hello").click(function(){
			    	// alert('hello');
			    	// $(".hi")[0].click();

			    	$.ajax({
					  type: "POST",
					  url: "function.php",
					  // datatype: "html",
					  data: {action:'test'},
					  async: false,
					  success: function(result) {
					   		alert(result);
					   		$(".hi")[0].click();
					    }
					});
			        // $(".hi").trigger('click');
			        
			    });



			});
			

		</script>
	</head>
	<style type="text/css">
		.hi{
			display:none;
		}
	</style>

	<body>
		<a class= "hello" href="">Hello</a>	
		<!-- <input id="thickboxButton" type="button" value="Click me"> -->
		<a class= "hi"  href="mail.php" target="_blank">Hi</a>		
	</body>
	
</html>
