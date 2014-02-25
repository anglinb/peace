<style>
#wrong {
margin:auto;
width: 940px;
border-radius: 8px; 
-moz-border-radius: 8px; 
-webkit-border-radius: 8px; 
<?php if($_GET['sucess'] == 1) {
	echo "
border: 1px solid 61C419;
background: #8ae246; /* Old browsers */
background: -moz-linear-gradient(top,  #8ae246 0%, #61c419 50%, #8ae246 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#8ae246), color-stop(50%,#61c419), color-stop(100%,#8ae246)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #8ae246 0%,#61c419 50%,#8ae246 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #8ae246 0%,#61c419 50%,#8ae246 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #8ae246 0%,#61c419 50%,#8ae246 100%); /* IE10+ */
background: linear-gradient(to bottom,  #8ae246 0%,#61c419 50%,#8ae246 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#8ae246', endColorstr='#8ae246',GradientType=0 ); /* IE6-9 */
";
}else {
	echo "	border: 1px solid #E63942;
	background: #e36268; /* Old browsers */
	background: -moz-linear-gradient(top,  #e36268 0%, #e05e62 50%, #e36268 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#e36268), color-stop(50%,#e05e62), color-stop(100%,#e36268)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #e36268 0%,#e05e62 50%,#e36268 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #e36268 0%,#e05e62 50%,#e36268 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #e36268 0%,#e05e62 50%,#e36268 100%); /* IE10+ */
	background: linear-gradient(top,  #e36268 0%,#e05e62 50%,#e36268 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e36268', endColorstr='#e36268',GradientType=0 ); /* IE6-9 */
	";
} ?>
}
</style>
<br>
<div id="wrong" style="background-color:#8AE246; width: 100%; padding: 5px 0px 5px 0px; text-align:center;"  >
<h2 style="color:white;"><?php echo $message; ?></h2>
</div>