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
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<title>STEM</title>

<?php wp_head(); ?>


</head>

<body>

<header class="header-teacher">
<div class="my-container" style="margin-left:8%;">
<?php

wp_nav_menu(
    array(
        'theme_location' => 'top-menu',
        'menu_class' => 'top-bar'
    )
);
?>
<form id="logout-t" action="" method="GET">
<input type="submit" name="Odjava" value="Odjavi se" class="btn btn-info" style="border-radius:30px;margin-right:120px">
</form>

</div>

</header>