<?php

/*
Template Name: Signup
*/

?>


<?php
if(isset($_POST['registracijaV']) || isset($_POST['registracijaD'])) {

    $site = site_url();

    $serverime = "localhost";
    $Username = "root";
    $passw = "";
    $imeBaze = "wpress1";

  $konekcija = mysqli_connect($serverime,$Username,$passw,$imeBaze);

  if(!$konekcija)
  { 
         die("Konekcija nije uspela: ".mysqli_connect_error());
         // todo more
  }

  else {

     if(isset($_POST['registracijaV'])) {

       $imeprezime = $_POST["imeprezime"];
       $email = $_POST["email"];
       $lozinka = $_POST["lozinkaV"];
       $prioritet = 1;

       if (!preg_match("/^([a-zA-Z' ćčČĆ]{6,30}+)$/",$imeprezime) && !filter_var($email, FILTER_VALIDATE_EMAIL))
       {
             header("Location:" . $site . "/registracija?error=INVALID_INFOR");
             exit();
       }
       else {

       $protekcijaLozinke =  password_hash($lozinka, PASSWORD_DEFAULT);

       $upitV = "INSERT into korisnici (imeprezime, username, lozinka, prioritet) VALUES
        ('$imeprezime', '$email', '$protekcijaLozinke', '$prioritet')";

        $qv = mysqli_query($konekcija, $upitV);

        if($qv) {
          session_start();
          $_SESSION['korisnik'] = $email;
          $_SESSION['imeprezime'] = $imeprezime;
          $_SESSION['prioritet'] = $prioritet;

          header("Location:" . $site);
          exit();
        }
        else {
          header("Location:" . $site . "/registracija?error=ERROR");
          exit();
        }
     } 
  }

     else if(isset($_POST['registracijaD'])) {

        $imeprezime = $_POST["kidname"];
        $email = $_POST["kidname"];
        $lozinka = $_POST["lozinkaD"];
        $prioritet = 0;

        $protekcijaLozinke =  password_hash($lozinka, PASSWORD_DEFAULT);

        $upitD = "INSERT into korisnici (imeprezime, username, lozinka, prioritet) VALUES
        ('$imeprezime', '$email', '$protekcijaLozinke', '$prioritet')";

        $qd = mysqli_query($konekcija, $upitD);
         
        if($qd) {
          session_start();
          $_SESSION['korisnik'] = $email;
          $_SESSION['imeprezime'] = $imeprezime;
          $_SESSION['prioritet'] = $prioritet;

          header("Location:" . $site . "/igrice");
          exit();
        }
        else {
          header("Location:" . $site . "/registracija?error=ERROR");
          exit();
        }

     }

  }

}

?>

<?php get_header(); ?>

<div class="container-fluid text-center" id="main_login" style="padding:0;padding-bottom:2%;width:100%;">
<img src="<?php echo get_template_directory_uri(); ?>/images/STEM-Logo.png" alt="error-stem-logo" class="stem-header-img" />

<div class="row text-center" style="margin:0;margin-bottom:2%;width:100%;">

<div class="col" style="width:100%;padding:0;align-self:center" >
<img src="<?php echo get_template_directory_uri(); ?>/images/teacher.png" alt="error-stem-teacher" class="stem-teacher-img" />
<h2 class="m-3" id="teacher-h">Vaspitačice</h2>
<form class="text-center mx-auto shadow-lg p-4 mt-3" style="width: 100%;margin: 0 auto" action="" method="POST">
<div class="form-group">
    <label for="exampleInputEmail11">Ime i prezime</label>
    <input type="text" name="imeprezime" class="form-control" id="exampleInputName" aria-describedby="nameHelp" style="width:40%;margin:auto;" placeholder="Unesite ime i prezime" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail11">Email adresa</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail11" aria-describedby="emailHelp" style="width:40%;margin:auto;" placeholder="Unesite email adresu" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword11">Lozinka</label>
    <input type="password" name="lozinkaV" class="form-control" id="exampleInputPassword11" style="width:40%;margin:auto;" placeholder="Unesite lozinku" required>
  </div>
  <button type="submit" class="btn btn-warning" name="registracijaV">Registrujte se</button>
  <div style="margin-top: 5px;">
    <a href="<?php echo site_url('/login'); ?>" class="go-signup">Imate nalog? <span class="yellow-sup">Prijavite se!</span> </a>
</div>
</form>
</div>
<div class="row text-center" style="margin:0;margin-bottom:2%;width:100%;">

<div class="col" style="width:100%;padding:0;align-self:center" >
<img src="<?php echo get_template_directory_uri(); ?>/images/kids.png" alt="error-stem-kids" class="stem-kids-img" />
<h2 class="m-3" id="kids-h">Učenici</h2>
<form class="text-center mx-auto   p-4 mt-3" style="width: 100%;margin: 0 auto" action="" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail22">Korisničko ime</label>
    <input type="text" name="kidname" class="form-control" id="exampleInputEmail22" aria-describedby="emailHelp" style="width:40%;margin:auto;" placeholder="Unesite korisničko ime" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword22">Lozinka</label>
    <input type="password" name="lozinkaD" class="form-control" id="exampleInputPassword22" placeholder="Unesite lozinku" style="width:40%;margin:auto;" required>
  </div>
  <button type="submit" class="btn btn-warning" name="registracijaD">Registrujte se</button>
  <div style="margin-top: 5px;">
    <a href="<?php echo site_url('/login'); ?>" class="go-signup">Imate nalog? <span class="yellow-sup">Prijavite se!</span> </a>
</div>
</form>
</div>


</div>
</div>
<?php get_template_part('includes/section', 'content'); ?>

</div>


<?php get_footer(); ?>