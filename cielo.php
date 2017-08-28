<?php 

	include("funcoes.php");

?>

<!DOCTYPE html>
<html>
<head>
	<?php MontaCss();?>
	<title><?php echo $titulo?></title>
</head>
<body >
	<?php MontaMenu();?>
	<?php Horarios();?>


</body>

<?php MontaJS();?>
</html>