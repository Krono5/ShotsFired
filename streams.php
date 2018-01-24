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
			var params = {};
			location.search.slice(1).split("&").forEach(function (kv) {
			  var a = kv.split("=");
			  params[decodeURIComponent(a[0])] = decodeURIComponent(a[1]) || "";
			});

			var channels = params["channels"] ? params["channels"].split(",") : ["riotgames", "dota2ti", "machinima", "lirik", "twitch", "manvsgame", "wyld"];

			for(var i=0; i < channels.length; i++) {
			  var channel = channels[i];
			  var p = document.createElement("p");
			  p.innerHTML = channel + ' = <img data-twitch-channel="' + channel + '">';
			  document.body.appendChild(p);
			}
		</script>

		<?php include("footer.php");?>
	</body>
</html>
