<?php

/*
Template Name: Stats
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
    $sql = "SELECT * from igranje INNER JOIN verb on igranje.idIgrice = verb.id";
    $result = mysqli_query($konekcija, $sql);
    $stats  = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $sql2 = "SELECT verb.naziv, count(*) as broj FROM verb INNER JOIN igranje WHERE verb.id = igranje.idIgrice GROUP BY verb.naziv";
    $rez = mysqli_query($konekcija, $sql2);
  }


?>


<?php get_header('teacher'); ?>

<div class="container-fluid page6-wrap">

<div class="act-header text-center">
<h2 class="mb-3" style="text-align:center;color:black;">Statistika dece</h2>


<a href="<?php echo site_url(); ?>/grafika ?>" class="btn btn-light shadow-lg p-3 mb-5" style="margin:auto;width:20%;border-radius:50px;color:black;">Grafički podaci</a>

</div>

<table class="table text-center mx-auto" style="width: 80%;background-color:MediumPurple">
<thead>
      <tr>
        <th>Dete</th>
        <th>Rezultat</th>
        <th>Datum</th>
        <th>Igra</th>
      </tr>
    </thead>
    <tbody style="background-color:#E6E6FA">
    <?php foreach($stats as $stat) { ?>
    <tr class="table-success" style="background-color:#E6E6FA">
    <td><?php echo $stat['dete'] ?></td>
    <td><?php echo $stat['rezultat'] ?></td>
    <td><?php echo $stat['datum_vreme'] ?></td>
    <td><?php echo $stat['naziv'] ?></td>
    </tr>
    <?php } ?>
    </tbody>
</table>
	
</div>





<?php get_footer(); ?>