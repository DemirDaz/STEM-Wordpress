<?php

/*
Template Name: Games
*/

?>

<?php
session_start();
if(empty($_SESSION['korisnik']))
{
  header("Location:http://localhost:8080/wordpress/login");
  exit();
}
?>

<?php 

  $serverime = "localhost";
  $Username = "root";
  $passw = "";
  $imeBaze = "wpress1";
  $konekcija = mysqli_connect($serverime,$Username,$passw,$imeBaze);

  if($konekcija) {
    $sql = "SELECT id, naziv, scenario FROM verb";
    $result = mysqli_query($konekcija, $sql);
    $vezbe = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);
    mysqli_close($konekcija);
  }


?>


<?php get_header('kids'); ?>


<section class="page-wrap-activities">
<div class="container-fluid text-center page4-wrap">

<div class="act-header">
<h2>Lista igrica</h2>
</div>

<div class="row">
<?php foreach($vezbe as $vezba){ ?> 
<div class="col">
<div class="card card2 shadow">

<img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $vezba['id'] ?>.jpg" class="rounded-circle img-fluid" alt="...img" style="width:40%;height:40%;margin:auto;margin-top:10%;">
	
<div class="card-body"><strong class="actitle" style="text-align:center;color:#F5FFFA"><?php echo $vezba['id'] ?>. Igrica <br> <?php echo $vezba['naziv'] ?> </strong></div>
<a href="<?php echo site_url(); ?>/igranje?id=<?php echo $vezba['id']; ?>" class="btn btn-primary shadow-lg p-3 mb-5" style="margin:auto;width:50%;border-radius:50px;color:white;">Igraj</a>
</div>
</div>
<?php } ?>

</div>

<?php get_template_part('includes/section', 'content'); ?>

</div>
</section>

<?php get_footer(); ?>

<!-- <section class="page-wrap-activities">

<div class="container-fluid text-center">
<div class="act-header" style="color:black;">
<h2>Lista igrica</h2>
</div>



<div class="row row2"
<?php foreach($vezbe as $vezba){ ?> 
<div class="col">
<div class="card shadow">



<img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $vezba['id'] ?>.jpg" class="rounded-circle img-fluid" alt="...img" style="width:40%;height:25%;margin:auto;margin-top:10%;">
<div class="card-body" >
<strong class="actitle" style="text-align:center;"><?php echo $vezba['id'] ?>. Igrica - <?php echo $vezba['naziv'] ?> </strong>
</div>
<a href="<?php echo site_url(); ?>/igranje?id=<?php echo $vezba['id']; ?>" class="btn btn-primary shadow-lg p-3 mb-5" style="margin:auto;width:50%;border-radius:50px;color:black;">Igraj</a>
</div>
</div>
<?php } ?>

</div>

<?php get_template_part('includes/section', 'content'); ?>

</div>
</section>  -->

