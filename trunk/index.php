<!DOCTYPE html>
<html>
	<head>
		<script src="js/jquery-2.0.3.js" type="text/javascript"></script>
		<script type="text/javascript">
			$('document').ready(function(){
				$('#nackDIV').click(function(){
					$('#nackDIV').fadeOut(500,function(){
							$('#benzDIV').fadeIn(10);
						});
				});
			});
	
		</script>
	</head>
	<body>
		<div id="nackDIV">Nack</div>
		<div id="benzDIV" style="display:none">Benz</div>
	</body>
</html>