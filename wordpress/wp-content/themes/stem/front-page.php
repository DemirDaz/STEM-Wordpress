<?php
session_start();
if(empty($_SESSION['korisnik']))
{
  header("Location:http://localhost:80/wordpress/login");
  exit();
}
else {
    if($_SESSION['prioritet'] == 0) {
        header("Location:http://localhost:80/wordpress/igrice");
  exit();
    }
}

?>



<?php get_header('teacher'); ?>

<section class="page-wrap">
<div class="container-fluid text-center">
	<div class="row">
<div class="col-3" style="margin-right:-100px;margin-left:4%;">
<img src="<?php echo get_template_directory_uri(); ?>/images/teacher.png" alt="error-teacher-logo" class="teacher-avatar" />
<div class="welcome-t mt-2">
 <h5><?php echo $_SESSION['imeprezime']; ?></h5>
</div>
	</div>
	<div class="col-9">
		
	
<div class="uvod">
<p class="uvod-p1">
<i>
Pre nego se upoznamo sa osnovama STEM pristupa obrazovanju, moramo precizno definisati ovaj pojam kao i istoriju implementacije istog. Ovo će u stvari biti uvod u metodologiju rada neophodnu za razvoj budućih generacija koje će biti u stanju da se uhvate u  koštac sa novim tehnologijama, njihovim korišćenjem kao i stvaranjem osnove za buduće inovatore koji će nove tehnologije dalje usavršavati, a čovečanstvo voditi ka novim otkrićima.
U kratkom uvodu probaćemo da STEM metodologiju primenimo na sam ovaj pojam. Metodologija treba da nam da odgovore na sledeća pitanja u vezi STEM-a. Šta? Zašto? Kako?
</i></p>
	</div>
	</div>
<div class="row">

<div class="col"> 
<div class="card shadow">
<div class="card-header"> <strong>Šta je to STEM? </strong></div>
 <div class="card-body">Metodologija naučnog istraživanja nam sugeriše da je prvi korak da razjasnimo samo značenje ovog pojma. STEM je skraćenica od pojmova Science, Technology, Engineering, and Mathematics. Odnosno Nauka (bitno je naglasiti da se u Engleskom jezikom pod ovim terminom objedinjuju sve prirodne nauke fizika, hemija, biologija…), Inžinjering (sve forme inžinjerskih disciplina graževinarstvo, elektrtehnika, arhitektura,…), Tehnologija i Matematika. Pošto je ovaj priručnik namenjem vaspitačima u predškolskim ustanovama, koji su većinu svog obrazivanja posvetili društvenim i humanističkim naukama moramo nekako termine koji su karakteristični za prirodne nauke približiti, da bi razumeli i olašali ulazak deci i njihovim vaspitačima u čudesni svet prirodnih nauka kojim vladaju brojevi. </div> 
<a href="https://www.youtube.com/watch?v=5wjc-I9BnXg" class="btn btn-success shadow-lg p-3 mb-5" style="margin:auto;width:50%;border-radius:50px;color:black;">Pogledaj video</a>
</div>

<div class="card shadow">
 <div class="card-body">Precizni svet STEM metodologije uvek od nas zahteva da definišemo izvor nekog podatka koji mora biti poizdan, istinit i verifikovan kao takav konsenzusom naučne zajednice. Definiciju značenja skraćenice STEM smo mogli da uzmemo sa velikog broja sajtova uključujući i Wikipediju. Međutim sa obzirom da je ova enciklopedija otvorena i da svako može dodati svoj komentar ne možemo je uzeti kao validnu već smo pojam uzeli sa zvaničnog sajta enciklopedije Britanike i ovo će bit naš prvi citat pod brojem [1]. Na kraju priručnika postavićemo pregled literature kao i link ka sajtu sa kojeg smo uzeli definiciju u obliku [1] https://www.britannica.com/topic/STEM-education/STEM-education.</div> 
</div>

<div class="card shadow">
 <div class="card-body">Sam pojam STEM je 2001. godine predložio američki biolog Judith Ramal, pomoćnik direktora za obrazovanje i ljudske resurse Nacionalne Naučne Fondacije Sjedinjenih Država (NFS). Naime on je preuredio slova akronima koji je ova fondacija predložila par godina ranije i koja je glasila SMET.
STEM se definiše kao sistem učenja u oblastima nauke, tehnologije, inženjeringa i matematike koji je sastavljen od obrazovnih aktivnosti objedinjenih na svim nivoima obrazovanja od predškolskog do posle doktorskog, implementiran kroz formalne i neformalne oblike nastave [2].</div> 
</div>




</div>

<div class="col"> 

	<div class="card shadow">

 <div class="card-body">
		<img src="<?php echo get_template_directory_uri(); ?>/images/stem.gif" alt="error-gif" class="img-fluid" style="border-radius:25px;margin:0"/>
		</div> 

</div>

<div class="card shadow">
<div class="card-header"> <strong>Kako STEM? </strong></div>
 <div class="card-body">Da bi se STEM približio maldima, vaspitači, nastavnici I profesori primenjuju različite pristupe istom. Neki nastavu zasnivaju na integrisanim projektnim aktivnostima, koje zahtevaju posebna znanja iz određenih STEM disciplina. Drugi pak, STEM iskustva organizuju kao vannastavne aktivnosti u obliku raznih naučnih takmičenja ili izazova. Treći pozivaju stručnjake I dokazane autoritete u odreženim STEM oblastima da deci približe svet STEM nauka.
Države i obrazovni siste,mi koji su se uhvatili u koštac sa STEM izazovom, pokučavaju da raziju posebne obrazovne puteve koje će elemente STEM nauka ubaciti i one oblassti u kojima se one ne nalaze tradicionalno. Pokazalo se da rigirozni pristup proveri činjenica I metode donošenja zakljulaka na osnovu njih, onosi bolje rezultate i u oblastima društvenih nauka I zanimanja koja nisu usko vezana za STEM nauke.
Kroz niz STEM vežbi probaćemo da svet STEM približimo kao deci tako i njihovim vaspitačima. Na tom putu probaćemo da se držimo nekih osnovnih koncepata.</div> 
<a href="https://www.youtube.com/watch?v=M3Ys_Vwij1g" class="btn btn-success shadow-lg p-3 mb-5" style="margin:auto;width:50%;border-radius:50px;color:black;">Pogledaj video</a>
</div>

<div class="card shadow">
 <div class="card-body">Prvi je da ćemo prilikom rada sa decom koristiti što viče egztaktnih matematičkih pojmova. Prilikom vežbi isticaćemo eci matematičke oblike u svetu koji nas oružuje, prebrojavaćemo prebrojive pojmove svaki dan, raspoređivaćemo oblike po veličini.
Drugi aspekt je da ćemo zajedno sa decom obratiti posebnu pažnju na pojave u svetu oko nas. Isticaćemo deci da obrate pažn ju u svakoj aktiovnosti na ono što vide, osete, okuse ili čuju.
treće aspekt je da ćemo deci postavljati otvorena pitanja, na koja nećemo očekivati konačne i jdnoznačne odgovore.
Vaspitač će pratiti dete u aktivnosti, a ne obratno. STEM je istraživanje, kao rezultat istraživanja deca trebaju da donose samostalne zaključke, postavljaju hipoteze, donose pogređne zaključke i uče da ih kritičkim razmatranjem ili novim saznanjem menjaju. Time se postiže fleksibilnost u budućem razvoju i veći stepšen samopouzdanja, gubi se strah od pogrešnih odgovora.
Idući bitni spekt je da mi moramo da učimo zajedno sa decom, STEM proizvodi nova pitanja na koja mi možda trenutno nemamo odgovore, tako da smo  mi deo sveta STEM razvojha.
I najposle korisite knjige, internet i ogromne baze STEM aktivnosti koje su razvili vaspitači širom sveta.</div> 
</div>
	




</div>
<div class="col">
	<div class="card shadow">
<div class="card-header"><strong>Zašto STEM?</strong></div>
 <div class="card-body">Tokom druge polovine dvadestog veka, zemlje u razvoju su pokušavale da poboljšaju obrazovanje iz oblasti nauke, matematike i tehničkih nauka uopšte. Glavni razlog je bila želja da se razviju obrazovni programi koji će dovesti ne samo do boljeg razumevanja ovih oblasti, već i do stvraanja radne snage koja će se baviti inžrnjerijom i naukom. Razvoj veština u ovim oblastima ovu radnu snagu postavlja u centar modernih trendova svetske ekonomije. Uzor svima su SAD kao centar modernog naučnog i tehničkog razvoja. Samo od 2000. do 2010. broj radnih mesta koje su zahtevale STEM znanja se u SAD utrostručio u odnosu na druge ekonomske oblasti. Ovo je bio signal ostatku sveta u kom smeru treba tražiti šansu i stvoriti osnovu budućih neophodnih znanja. Ono što je sigurno da poslodavci žele što više mladih i perspektivnih kadrova koji vladaju STEM veštinama. Međutim dugogdoišnji imidž STEM aktivnosti kao klasično muških zanimanja su doveli do toga da mali broj devojaka okuča sređu u STEM poslovima, drugi bitan aspekt je dostupnost i cena tehnologije. Siromašnim društvima neke tehnologije su skupe i nedostupne, samim tim čitave društvene zajednice ostaju uskraćene za učešće u uzbudljivoj tehnološkoj revoluciji.</div> 
 <a href="https://www.youtube.com/watch?v=vDe3mRAFI5k" class="btn btn-success shadow-lg p-3 mb-5" style="margin:auto;width:50%;border-radius:50px;color:black;">Pogledaj video</a>
</div>

<div class="card shadow">
 <div class="card-body">Prethodno navedeno može da nas navede na pogrešan zaključak da je STEM jedini odgovor na izazove budućnosti. kao i u svemu ovo nije u potpunosti istinito. Prvi problem je da je STEM relativno nov pojam i postavlja se pitanje šta su to STEM poslovi. Ako pitamo ljude koji su uključeni u bilo koji od oblasti navedenih u definiciji STEM, oni će Vam reći da je odgovor na ovo pitanje veoma jednostavan. STEM poslovi su bilo koje aktivnosti i poslovi za čije uspešno sprovođenje je nephodno znanje i/ili poznavanje oblasti prirodnih nauka, matematike, tehnologije ili inženjeringa. Ovakva definicija, ako je prihvatimo bi ograničila STEM na usko stručno obrazovanje, i time bi bilo irelevantno za decu u osnovnim šlkolama, kao i za najmlađe uzraste u vrtićima i predškolskim ustanovama.
Suočeni, sa ovim istovremeno uzimajući u obzir da su znanja i zanimanja koja koriste znanja iz ovih oblasti šira od uske definicije istih Privredna Komora SAD je definisala STEM poslove kao one koji zahtevaju specijalizovana znanja, ali ne zahtevaju formalnu iplomu iz istih oblasti. Dalje STEM poslovi su podeljeni na četiri posebne kategorije: računarstvo i matematika, inženjerija i nadzor, fizičke i humanističke nauke i STEM upravljanje. U ovakvoj podeli nisu obuhvaćene društveno humanističke nauke kao ni obrazovne aktivnosti.</div> 
</div>
	<div class="card shadow">
<div class="card-header"><strong>Literatura</strong></div>
 <div class="card-body">[1] <a href="https://www.britannica.com/topic/STEM-education/STEM-education">https://www.britannica.com/topic/STEM-education/STEM-education</a><br />
[2] Gonzalez, Heather B., and Jeffrey J. Kuenzi. "Science, technology, engineering, and mathematics (STEM) education: A primer." Washington, DC: Congressional Research Service, Library of Congress, 2012.</div> 
</div>
	</div>
	

</div>
</div>

<?php get_template_part('includes/section', 'content'); ?>

</div>
</section>

<?php get_footer(); ?>