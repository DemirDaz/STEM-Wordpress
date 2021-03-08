<?php

/*
Template Name: Kids Stats
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
  session_start();
  $id = $_GET['id'];
  $serverime = "localhost";
  $Username = "root";
  $passw = "";
  $imeBaze = "wpress1";
  $konekcija = mysqli_connect($serverime,$Username,$passw,$imeBaze);

  if($konekcija) {
    $sql = "SELECT * from igranje INNER JOIN verb on igranje.idIgrice = verb.id WHERE  igranje.idIgrice = '$id'";
    $result = mysqli_query($konekcija, $sql);
    $stats  = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	$sql2 = "SELECT verb.naziv FROM verb WHERE verb.id = '$id'";
    $rezs = mysqli_query($konekcija, $sql2);
	$row = mysqli_fetch_array($rezs);
  }

?>


<?php get_header('teacher'); ?>

<div class="container-fluid text-center page7-wrap">

<div class="act-header">
<h2 class="mb-5" style="text-align:center;">Statistika igre : <?php echo $row[0] ?></h2>
</div>

<table class="table text-center mx-auto" style="width: 80%;background-color:white">
<thead>
      <tr>
        <th>Broj igre</th>
        <th>Dete</th>
        <th>Rezultat</th>
        <th>Datum</th>
        
      </tr>
    </thead>
    <tbody>
    <?php foreach($stats as $stat) { ?>
    <tr class="table-success">
    <td><?php echo $stat['id'] ?></td>
    <td><?php echo $stat['dete'] ?></td>
    <td><?php echo $stat['rezultat'] ?></td>
    <td><?php echo $stat['datum_vreme'] ?></td>
    <!--<td><?php echo $stat['naziv'] ?></td> -->
    </tr>
    <?php } ?>
    </tbody>
</table>

<?php get_template_part('includes/section', 'content'); ?>

</div>

<?php get_footer(); ?>