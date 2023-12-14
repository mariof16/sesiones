<?php session_start();?>
<p>Gestion</p>
<p>Tu perfil es: <?php echo $_SESSION['perfil']?></p>
<a href="index.php?action=mostrarinicio&controller=iniciosesion">iniciosesion</a>