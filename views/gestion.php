<?php session_start();
    if($_SESSION['perfil']!=0)
        header("Location: index.php");
?>
<p>Gestion</p>
<p>Tu perfil es: <?php echo $_SESSION['perfil']?></p>
<a href="index.php?action=mostrarinicio&controller=iniciosesion">iniciosesion</a>