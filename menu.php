<?php //Connection settings and Disclaimer
///////////////////////////////
// Designed by MLESTUDIOS.NET
// DO NOT COPY OR DISTRIBUTE
?>

<div id="menu">
	<div>
		<img alt="Scrollsaw" height="143" src="images/scrollsaw.png" width="188" />
		<img alt="mail" height="143" src="images/envelope.png" width="188" />
	</div>
	
	<div style="line-height: 0.5em; margin-top: -6;">
		<ul>
				<?php
					if($_SESSION['signed_in'])
					{
						echo '<li style="line-height: 0.1em; color:FFFDFD;">Hello <b>' . htmlentities($_SESSION['user_name']) . '</b>. Not you? <a href="/handler/signout.php"> Sign out</a></li>';
					}
					else
					{
						echo '<li style="line-height: 0.1em"><p><b><a href="login.php" style="color:FFFDFD">Edit Website</a></b></p></li>';
					}
				?>
		</ul>
	</div>
	
</div>