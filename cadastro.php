<?php
	include "includes/header.php";
	//include "../class/ClassCrud.php";
	session_start();
?>
<div class="content">
<h1>Adicionar/Editar Contato</h1>
	<?php
		if (isset($_SESSION['msg']) && $_SESSION['msg']!= null){
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
		}
	?>
	<hr>
</div>
<?php include "includes/formCadastro.php";?>

<?php include "includes/footer.php";?>