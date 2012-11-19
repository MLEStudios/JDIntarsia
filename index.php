<?php
	//echo 'This is a test php line';
	include 'handlers/connect.php';
?>
	
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>JD Intarsia</title>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<?php include 'logo.php' ?>
			<?php include 'menu.php' ?>
		</div>
		<div id="inner">
			<div id="page">
					
						<div id="content">
							<div>
								<?php 
									$sql = "SELECT * FROM content"; //id, title , content
									$result = mysql_query($sql);
										
									if(!$result)
									{
										echo 'The server could not be reached, please try again later.' . mysql_error();
									}
									else
									{
										echo '<table style="width: 650px;">';
										while($row = mysql_fetch_assoc($result))
										{
												echo '<tr>';
													echo '<td id="title" style="padding-top: 30px; width: 100px;">';
													echo $row['title'];
													echo '</td>';
												echo '</tr>';
												echo '<tr>';
	
													echo '<td style="padding-top: 30px;">';
													echo $row['content'];
													echo '</td>';
												echo '</tr>';
										}
										echo '</table>';
									}
								?>
	
							</div>
								</table>
								<br />	
								
									</div style="padding: 1em;">
					
				</div>
		
	</div>
</body>
</html>
