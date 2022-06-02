<html>

	<head>
		<title>Meu primeiro site em PHP! Woohoo!</title>
		
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		
		<style type="text/css">
			linha {
				font-weight: bolt;
				color: green;
				padding-left: 10px
				line-height: 50px
			}
		</style>
	</head>
	
	<body>
	
		<?php
			for ($i = 0 ; $i < 10 ; $i++) {
				print("Linha numero " . $i . "<br />" );
			}
		?>
	
		<script type="text/javascript">
		$(document).ready(function() {
			alert ("Woohoo!");
		}};
		</script>
	</body>

</html>	