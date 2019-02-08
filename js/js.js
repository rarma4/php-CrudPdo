
function confirmE() {
   if (confirm("Tem certeza que deseja excluir?")) {
		location.href="<?php controllers/ControllersDel.php?id={$fetch['id']}?>";
   }else{
		window.event.preventDefault()
   }
}
