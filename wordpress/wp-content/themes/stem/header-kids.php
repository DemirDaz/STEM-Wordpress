<?php

if(isset($_GET['Odjava'])) {
    session_start();
    session_unset();
    session_destroy();
    header("Location:http://localhost:8080/wordpress/login");
    exit();
}

?>

<!DOCTYPE HTML>
<html>

<head>
<meta charset="UTF-8">
<title>STEM</title>

<?php wp_head(); ?>


</head>

<body>

<header>

<nav class="navbar navbar-expand-sm bg-primary navbar-light">
<img src="<?php echo get_template_directory_uri(); ?>/images/slogo.png" " alt="klogo-error" class="klogo" />
  <ul class="navbar-nav" style="float:right;">
    <li class="nav-item active">
      <a class="nav-link kids-link" href="http://localhost/wordpress/igrice/"><span class="akt-igrice">Igrice</span></a>
    </li>
  </ul>
<form id="logout-t" action="" method="GET" class="mr-0">
<input type="submit" name="Odjava" value="Odjavi se" class="btn btn-danger" style="border-radius:30px;margin-right:50px">
</form>
</nav>


</header>