<?php

/*
Template Name: Details
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
    // print_r($row[3]);
  }

?>



<?php get_header('teacher'); ?>

<div class="container-fluid text-center page3-wrap">
<h2 class="h-det" style="color:white;"><?php echo $id ?>. <?php echo $row[1]; ?></h2>
<div class="row row-det">



<div class="col-4" >



<div class="card card3 shadow"> 
<div class="card-header"><strong>Zadaci za odrasle: </strong></div>
<div class="card-body" style="text-align:center;"><?php echo $row[6]; ?></div>
</div>

<div class="card card3 shadow"> 
<div class="card-header"><strong>Zadaci za decu: </strong></div>
<div class="card-body" style="text-align:center;"><?php echo $row[5]; ?></div>
	
</div>
	

</div>
<div class="col-4">
<div class="card card3 shadow" style="">
<img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $id ?>.jpg" class="img-det" alt = "greska" style="border-radius:25px 25px 0px 0px" />
<div class="card-body" style="text-align:center;"><strong>Scenario:</strong> <?php echo $row[4]; ?></div>
<a href="http://localhost:8080/wordpress/statistika-igre?id=<?php echo $id; ?>" class="btn btn-success shadow-lg p-3 mb-5" style="margin:auto;width:50%;border-radius:50px;color:black;">Pregled aktivnosti</a>
</div>

</div>
	<div class="col-4">
		<div class="card card3 shadow" style="margin-right:0px"> 
<div class="card-header"><strong>Materijal: </strong></div>
<div class="card-body" style="text-align:center;"><?php echo $row[2]; ?></div>
</div>
		<div class="card card3 shadow"> 
<div class="card-header"><strong>Oblasti: </strong></div>
<div class="card-body" style="text-align:center;"><?php echo $row[3]; ?></div>
</div>
		<div class="card card3 shadow"> 
<div class="card-header"><strong>Razvojni ciljevi: </strong></div>
<div class="card-body" style="text-align:center;"><?php echo $row[7]; ?></div>
	</div>
	</div>
</div>



</div>

<?php get_footer(); ?>