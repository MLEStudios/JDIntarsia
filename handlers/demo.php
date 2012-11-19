<?php

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

<style type="text/css">

.fadein {
	position: relative;
	height: 332px;
	width: 500px;
	left: 80px;
}
.fadein img { position:absolute; left:0; top:0; }
.page {
	left: 150px;
	width: 75em;
	position: absolute;
}
	
</style>

<script src="./js/jquery.min.js"></script>
<script>
$(function(){
	$('.fadein img:gt(0)').hide();
	setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 4500);
});
</script>
</head>

<div class="fadein" style="left: -133px; top: -50px; width: 241px">
	<img alt="" height="311" src="./art/small/duckanddog_small.png" width="235">
	<img alt="" height="311" src="./art/small/elk_small.png" width="233" style="left: 0; top: 0">
	<img alt="" height="311" src="./art/small/cat_small.png" width="233" />
	</div>
<script type="text/javascript">
        $(document).ready(function(){
                $("#simpleshow").simpleshow().start();
        });
</script>


</body>

</html>
