<?php

/*
Template Name: Signin 
*/

?>


<?php


if(isset($_POST['LoginV']) || isset($_POST['LoginD'])) {

  $site = site_url();

  $serverime = "localhost";
  $Username = "root";
  $passw = "";
  $imeBaze = "wpress1";

  $konekcija = mysqli_connect($serverime,$Username,$passw,$imeBaze);

  if(isset($_POST['LoginV'])) {

    $email = $_POST['email'];
    $lozinka = $_POST['lozinkaV'];
	$pass=mysqli_real_escape_string($konekcija, $_POST['lozinkaV']);



    $upitV = "SELECT * FROM korisnici WHERE username = '$email'";
    $qv = mysqli_query($konekcija, $upitV);
    if($qv) {
    if(mysqli_num_rows($qv) > 0)  
           {  
                while($row = mysqli_fetch_array($qv))  
                {  
                     if(password_verify($pass, $row['lozinka']))  
                     {  
                      session_start();
                      $_SESSION['korisnik'] = $email;
                      $_SESSION['imeprezime'] = $row['imeprezime'];
                      $_SESSION['prioritet'] = $row['prioritet'];
            
                      header("Location:" . $site);
                      exit();
                     }  
                     else  
                     {  
                      header("Location:" . $site. "/login?error=WRONG_PASSWORD");
                      exit(); 
                     }  
                }  
              } else {
                header("Location:" . $site. "/login?error=USER_DOES_NOT_EXIST");
                exit();
               }

        } 
        else {
          header("Location:" . $site . "/login?error=ERROR");
          exit();
         }
  }

  else if(isset($_POST['LoginD'])) {

    $username = $_POST['kidname'];
    $lozinka = $_POST['lozinkaD'];


    $upitD = "SELECT * FROM korisnici WHERE username = '$username'";
    $qd = mysqli_query($konekcija, $upitD);

    if(mysqli_num_rows($qd) > 0)  
           {  
                while($row = mysqli_fetch_array($qd))  
                {  
                     if(password_verify($lozinka, $row['lozinka']))  
                     {  
                      session_start();
                      $_SESSION['korisnik'] = $username;
                      $_SESSION['imeprezime'] = $username;
                      $_SESSION['prioritet'] = $row['prioritet'];
            
                      header("Location:" . $site . "/igrice");
                      exit();
                     }  
                     else  
                     {  
                      header("Location:" .$site . "/login?error=WRONG_PASSWORD");
                      exit(); 
                     }  
                }  
              } else {
                header("Location:" .$site . "/login?error=USER_DOES_NOT_EXIST");
                exit();
               }

        } 
        else {
          header("Location:" .$site . "/login?error=ERROR");
          exit();
         }
}


?>


<?php get_header(); ?>

<div class="container-fluid text-center" id="main_login" style="padding:0;padding-bottom:2%;width:100%;">
<img src="<?php echo get_template_directory_uri(); ?>/images/STEM-Logo.png" alt="error-stem-logo" class="stem-header-img" />

<div class="row text-center" style="margin:0;margin-bottom:2%;width:100%;">

<div class="col" style="width:100%;padding:0;align-self:center" >
<img src="<?php echo get_template_directory_uri(); ?>/images/kids.png" alt="error-stem-kids" class="stem-kids-img" />
<h2 class="m-3" id="kids-h">Učenici</h2>
<form class="text-center mx-auto shadow-lg p-4 mt-3" style="width: 100%;margin: 0 auto" action="" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail2">Korisničko ime</label>
    <input type="text" name="kidname" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" style="width:40%;margin:auto;" placeholder="Unesite korisničko ime">
    <small id="emailHelp" class="form-text text-muted"> </small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2">Lozinka</label>
    <input type="password" name="lozinkaD" class="form-control" id="exampleInputPassword2" style="width:40%;margin:auto;" placeholder="Unesite lozinku">
  </div>
  <button type="submit" class="btn btn-info" name="LoginD">Prijavi se</button>
  <div style="margin-top: 5px;">
    <a href="<?php echo site_url('/registracija'); ?>" class="go-signup">Nemate nalog? <span class="yellow-sup">Registrujte se!</span> </a>
</div>
</form>
</div>

</div>
<div class="row text-center" style="margin:0;margin-bottom:2%;width:100%;">

<div class="col" style="width:100%;padding:0;align-self:center" >
<img src="<?php echo get_template_directory_uri(); ?>/images/teacher.png" alt="error-stem-teacher" class="stem-teacher-img" />
<h2 class="m-3" id="teacher-h">Vaspitačice</h2>
<form class="text-center mx-auto shadow-lg p-4 mt-3" style="width: 100%;margin: 0 auto" action="" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email adresa</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:40%;margin:auto;" placeholder="Unesite email adresu">
    
	<small id="emailHelp" class="form-text text-muted"> </small>
	
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Lozinka</label>
    <input type="password" name="lozinkaV" class="form-control" id="exampleInputPassword1" placeholder="Unesite lozinku" style="width:40%;margin:auto;">
  </div>
  <button type="submit" class="btn btn-info" name="LoginV">Prijavi se</button>
  <div style="margin-top: 5px;">
    <a href="<?php echo site_url('/registracija'); ?>" class="go-signup">Nemate nalog? <span class="yellow-sup">Registrujte se!</span> </a>
</div>
</form>
</div>
</div>
<?php get_template_part('includes/section', 'content'); ?>

</div>


<?php get_footer(); ?>