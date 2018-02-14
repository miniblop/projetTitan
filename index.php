	<!DOCTYPE html>
	<html>
		<head>
			<title>Crabe TV</title>
			<meta charset = "utf-8">
			<link rel = "stylesheet" href = "style_screen.css">
		</head>
		
		
		<body>		
			<?php include('inclusions/debut.inc.php'); ?>
			<article id="index">
			
				
				<object type="application/x-shockwave-flash" height="540" width="895" id="live_embed_player_flash" data="http://www.twitch.tv/widgets/live_embed_player.swf?channel=zeebeat" bgcolor="#000000"><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><param name="allowNetworking" value="all" /><param name="movie" value="http://www.twitch.tv/widgets/live_embed_player.swf" /><param name="flashvars" value="hostname=www.twitch.tv&channel=crabetv&auto_play=true&start_volume=50" /></object>
				<iframe frameborder="0" scrolling="no" id="chat_embed" src="http://twitch.tv/chat/embed?channel=crabetv&amp;popout_chat=true" height="540" width="300"></iframe>
			</article>
			
			<?php include('inclusions/fin.inc.php'); ?>
			
		</body>
		
	</html>
