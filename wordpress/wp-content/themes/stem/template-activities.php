<?php

/*
Template Name: Activities
*/

?>
<?php
session_start();
if($_SESSION['prioritet']!=1)
{
   echo '<script type="text/javascript">
                window.location.replace("https://multistem.000webhostapp.com/login");
             </script>';
 
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

<?php get_header('teacher'); ?>

<section class="page-wrap-activities">
<div class="container-fluid text-center page2-wrap">

<div class="act-header">
<h2>Lista vežbi i aktivnosti</h2>
</div>

<div class="row">
<?php foreach($vezbe as $vezba){ ?> 
<div class="col">
<div class="card card2 shadow">

<img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $vezba['id'] ?>.jpg" class="rounded-circle img-fluid" alt="...img" style="width:40%;height:25%;margin:auto;margin-top:10%;">
<div class="card-body"><strong class="actitle" style="text-align:center;"><?php echo $vezba['id'] ?>. Vežba - <?php echo $vezba['naziv'] ?> </strong><p class="scenario"><?php echo $vezba['scenario'] ?></p></div>
<a href="<?php echo site_url(); ?>/detalji-vezbe?id=<?php echo $vezba['id']; ?>" class="btn btn-light shadow-lg p-3 mb-5" style="margin:auto;width:50%;border-radius:50px;color:black;">Detaljnije</a>
</div>
</div>
<?php } ?>

</div>

<?php get_template_part('includes/section', 'content'); ?>

</div>
</section>

<?php get_footer(); ?>