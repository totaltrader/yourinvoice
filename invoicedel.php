<?php
	require_once('config.php');
	session_start();
	$link = mysqli_connect($sql, $sqluser, $sqlpass, $sqldb);
	mysqli_set_charset($link,'utf8');
	if ($_SESSION['login']!='' && $_GET['id']!='')
		mysqli_query($link,'DELETE FROM `invoices` WHERE id=' . $_GET['id'] . ';');
	mysqli_free_result($result);
	mysqli_close($link);
?>
<meta http-equiv="refresh" content="0;url=<?php echo $url; ?>/invoices.php"> 