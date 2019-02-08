<?php
include "class/ClassCrud.php";

#edicao de dados
	if(isset($_GET['id'])){
		$acao = "Editar";
			$crud = new ClassCrud();
			$bFetch = $crud->selectDB(
				"*",
				"usuarios",
				"where id=?",
				array($_GET['id'])
			);
			$fetch = $bFetch->fetch(PDO::FETCH_ASSOC);
			$id = $fetch['id'];
			$nome = $fetch['nome'];
			$email = $fetch['email'];
			$telefone = $fetch['telefone'];

#cadastro novo
	}else{
		$acao = "Cadastrar";
		$id = "";
		$nome = "";
		$email = "";
		$telefone = "";

	}
?>
<div>
	<form method="post" action="controllers/ControllersCadastro.php">
		<input type="hidden" id="acao" name="acao" value="<?php echo $acao; ?>">
		<input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
		<div class="form-group">
			<label>Nome:  <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>" placeholder="Digite o Nome" autofocus></label>
		</div>
		<div class="form-group">
			<label>E-mail:  <input type="text" name="email" id="email" value="<?php echo $email; ?>" placeholder="Digite o E-mail"></label>
		</div>
		<div class="form-group">
			<label>Telefone:  <input type="text" name="telefone" id="telefone" value="<?php echo $telefone; ?>" placeholder="Digite o Telefone"></label>
		</div>
		<button type="submit" class="btn btn-success"><?php echo $acao; ?></button>
		<input type="button" class="btn btn-primary" value="Cancelar" onclick="javascript: location.href='index.php';" />
	</form>
</div>
