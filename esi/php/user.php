<?php //user.php
	session_start();
?>
<br />
<div class="private p-2">
	<?php if(isset($_SESSION['logged'])) : ?>
		Dernière connexion il y a <?= time() - ($_SESSION['last_login']) ?>s
	<?php else: ?>
		Pas de dernière connexion
	<?php endif; ?>
</div>
<br />