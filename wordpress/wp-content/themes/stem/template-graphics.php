<?php

/*
Template Name: Graphics
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
    $sql2 = "SELECT verb.naziv, verb.oblasti, count(*) as broj FROM verb INNER JOIN igranje WHERE verb.id = igranje.idIgrice GROUP BY verb.naziv, verb.oblasti";
    $rez = mysqli_query($konekcija, $sql2);
  }


?>


<?php get_header('teacher'); ?>

<div class="container-fluid">

<div class="row text-center">


<div class="col">
	
<div id="grafik2"></div>
<div id="grafik4"></div>
</div>
	
	<div class="col" style="margin:auto;">
<div  style="" id="grafik"></div>
</div>
</div>



</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Igrica', 'Broj igara'],
  <?php  
     while($row = mysqli_fetch_array($rez))  
        {  
         echo "['".$row["naziv"]."', ".$row["broj"]."],";  
        }  
    ?> 
]);

var data1 = google.visualization.arrayToDataTable([
  ['Igrica', 'Oblasti'],
  <?php  
     while($row = mysqli_fetch_array($rez))  
        {  
         echo "['".$row["naziv"]."', ".$row["oblasti"]."],"; 
        }  
    ?> 
]);

// var data2 = google.visualization.arrayToDataTable([
//             ['Inženjering Priroda'],
//             ['Inženjering Priroda Matematika'],
//             ['Priroda'],
//             ['Priroda'],
//             ['Priroda'],
//             ['Prirodna'],
//             ['Inženjering Matematika'],
//             ['Inženjering Priroda'],
//             ['Inženjering Priroda Matematika'],
//             ['Priroda'],
//             ['Priroda Ekologija'],
//             ['Priroda'],
//             ['Priroda Inženjering'],
//             ['Inženjering'],
//             ['Matematika']
// ]);



  var options = {'title':'STEM igrice', 'width':550, 'height':400, is3D: true};
  var options2 = {'width':550, 'height':400, is3D: true};
  var options3 = {
          wordtree: {
            format: 'implicit',
            word: 'cats'
          },
          width: 650,
        };
var options4 = {
    title: 'Interesovanje dece',
    pieHole: 0.4,
    height: 400,
    width:550,
    };
  var chart = new google.visualization.PieChart(document.getElementById('grafik'));
  var chart2 = new google.visualization.ColumnChart(document.getElementById('grafik2'));
  //var chart3 = new google.visualization.WordTree(document.getElementById('grafik3'));
  var chart4 = new google.visualization.ComboChart(document.getElementById('grafik4'));
  chart.draw(data, options);
  chart2.draw(data, options2);
 // chart3.draw(data2, options3);
  chart4.draw(data, options4);
}
</script>


<?php get_footer(); ?>