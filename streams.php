<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
	    <?php include('assets/resources.php'); ?>
	</head>

	<body>
		<?php include('header.php'); ?>

		<script>
			$.getJSON('https://api.twitch.tv/kraken/streams/odega?client_id=xfiiyo0w03logp3tv54xydqp9yo94o', function(channel) {

			    if (channel["stream"] == null) { 
			        $(".online").hide();
			        $(".offline").show();

			    } else {
			        $(".offline").hide();
			        $(".online").show();
			    }
			});
		</script>

		<?php include("footer.php");?>
	</body>
</html>
