<?php

/*
Template Name: Play
*/

?>

<?php
  session_start();
  $id = $_GET['id'];
  $serverime = "localhost";
  $Username = "root";
  $passw = "";
  $imeBaze = "wpress1";
  $konekcija = mysqli_connect($serverime,$Username,$passw,$imeBaze);

  if($konekcija) {
    $sql = "SELECT * FROM verb WHERE id='$id'";
    $result = mysqli_query($konekcija, $sql);
    $row  = mysqli_fetch_array($result);

    $dete = $_SESSION['korisnik'];

    $upis = "INSERT INTO igranje (dete, rezultat, idIgrice) VALUES ('$dete', 'Igra odigrana', '$id')";
    $result2 = mysqli_query($konekcija, $upis);
  }

?>



<?php get_header('kids'); ?>
<div class="container-fluid text-center page5-wrap">
<h2  style="margin-top: 20px;color:#000000;text-shadow: 2px 2px 8px #DB71FF;"><?php echo $id ?>. <?php echo $row[1]; ?></h2>
<div class="row">
	<div style="width: 100%; height: 400px;">
<iframe src=<?php echo $row[8]; ?> allowtransparency="true" width="100%" height="100%" frameborder="0" scrolling="no" allowfullscreen></iframe>
</div>
	</div>
<div class="row row-det">

<div class="col">
<div class="card shadow">
<img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $id ?>.jpg" class="img-det" alt = "greska" style="border-radius:25px 25px 0px 0px" />
<div class="card-body" ><strong style="color:RoyalBlue">Scenario:</strong> <?php echo $row[4]; ?></div>
</div>

</div>

<div class="col">
<div class="card shadow"> 
<div class="card-header"><strong style="color:RoyalBlue">Zadaci za decu: </strong></div>
<div class="card-body"><?php echo $row[5]; ?></div>
</div>
	<div class="card shadow"> 
<div class="card-header"><strong style="color:RoyalBlue">Materijal: </strong></div>
<div class="card-body"><?php echo $row[2]; ?></div>
</div>

</div>

</div>

</div>
<?php get_footer(); ?>

