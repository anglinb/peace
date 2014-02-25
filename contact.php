<?php
$page = "contact.php";
require('includes/header.php');
?>
<!-- <div id="content" class="clearfix shadow">
	<h3>Contact Page</h3>
	<p>you cant contact us anytime at (email)</p>
</div> -->
<style type="text/css">
form {
	margin-top: 30px;
	margin-left: 48px;
}
input {
	display: inline-block;
}
input[type=text] {
   width: 250px;
    border: 1px solid #B2C3FF;
  /* background-color: #E5A7A9;*/
  padding-left: 5px;
  color: #676767;

}
label {
	color: #B2C3FF;
	font-size: .9em;
}
textarea {
	color: #676767;
	width: 100%;
	resize:vertical;
	min-height: 150px;
	font-family: 'Droid Sans', sans-serif;

  border: 1px solid #B2C3FF;
  padding: 5px;

}
table {
	width: 100%;
}
td {
	padding-top: 10px;
	vertical-align: middle;
}
::-webkit-input-placeholder {
   font-style: italic;
}

:-moz-placeholder {  
   font-style: italic;  
}
input[type=submit], input[type=reset]{
	border: 1px solid black;
	padding: 5px 5px 5px 5px;
	border-radius: 5px; 
-moz-border-radius: 5px; 
-webkit-border-radius: 5px;
}
/*455*/
</style>
<?php 
	$num_1 = rand(0,10);
	$num_2 = rand(0,10);
	$answer = $num_1 + $num_2;
	if(isset($_GET['for'])) {
		$for = "&for=" . $_GET['for'];
	}else { 
		$for = "";
	}
?>
<div id="content" class="clearfix shadow" style="margin: 0px 100px 50px 100px; width: 55%" >
	<h3>Contact</h3>
	<?php if(isset($_GET['sucess'])) { if($_GET['sucess'] == 1) {$message = "Your message was sent!";}else { $message="Something went wrong; try again"; } include 'includes/banner_yes.php';} ?>
<form name="contact" action="process.php?answer=<?php echo $answer . $for; ?>" method="post">
	<table>
		<tr>
	<td><label for="first_name">First Name:</label></td>
	<td><input placeholder="first name" type="text" name="first_name" /></td>
		</tr>
		<tr>
	<td><label for="last_name">Last Name:</label></td>
	<td><input placeholder="last name" type="text" name="last_name" /></td>
		</tr>
		<tr>
	<td><label for="email">Email:</label></td>
	<td><input placeholder="you@domain.com" type="text" name="email" /></td>
		</tr>
		<tr>
	<td><label for="subject">Subject:</label></td>
	<td><input placeholder="subject" type="text" name="subject" /></td>
		</tr>
		<tr>
	<td><label for="message">Message:</label></td>
	<td><textarea placeholder="message" name="message"></textarea></td>
		</tr>
		<tr>
	<td><label for="math">Are you a human? <?php echo $num_1 . " + " . $num_2 . " = "; ?></label></td>
	<td><input name="math" placeholder="math here" type="text" /></td>
		</tr>
		<tr>
		<td></td>
	<td><input style="float: right; margin-right: 10px;" type="submit" name="submit" value="Submit" />
		<input type="reset" style="float: right; margin-right: 10px;" value="Clear" /> </td>
		</tr>
	</table>
</form>
</div>
<?php
include('includes/footer.php');
?>