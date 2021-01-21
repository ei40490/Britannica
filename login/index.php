<?php
    session_start();

   if(isset($_SESSION['user_id'])){
    //  header('Location: index.php');
   }else{
      header('Location: login.php');
  }


?>



<!DOCTYPE html>
<html>
  <head>
    
    <meta charset="utf-8" />
    <link rel="icon" href="favicon.ico" type="image/ico">

    <script
      src="https://kit.fontawesome.com/a5d75c613c.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <script src="../js/app.js"></script>
  </head>
  <body onload="showSlides()">

  <!-- include HEADER-IN -->
  <?php include 'includes/header.php'; ?>

  <main>
    <div class="slideshow-container" >
        <div class="slides fade">
            <img src="../images/slider1.jpg" alt="green">
            <div class="text">|Foto1</div>
        </div>
        <div class="slides fade">
            <img src="../images/slider2.jpg" alt="red">
            <div class="text">Foto2</div>
        </div>
        <div class="slides fade">
            <img src="../images/slider3.jpg" alt="yellow">
            <div class="text">Foto3</div>
        </div>
    </div>
</main>



  <div class="content">

    <div class="content2">



  
      <div class="description">
      <img id="foto" src="../images/foto.png" style="float: left;" />

      <p id="teksti" style="font-family: Georgia, Times, serif;">
        Shkolla “Britannica-ELT” është institucion i akredituar me dy qendra që
        ofron kurse të gjuhës angleze, gjermane, italiane, kroate, frenge dhe
        turke.<br /><br />

        Misioni ynë është t’i zhvillojmë shkathtësitë akademike të studentëve në
        të lexuar, të shkruar dhe në të folur dhe t’i inkurajojmë ata të bëhen
        sa më të suksesshëm duke i përdorur këto shkathtësi në jetën e tyre
        profesionale, në karrierat e tyre të ardhshme, për t’i bërë konkurentë
        potencial dhe shumë serioz të një tregu shumë konkurrues të botës
        bashkëkohore të punës.<br /><br />

        Aspirata jonë është që të jemi ofrues udhëheqës dhe të besuar të
        shërbimeve të mësuarit të anglishtes dhe gjuhëve tjera te huaja si dhe
        aftësive të komunikimit dhe për t’u angazhuar në hulumtime të cilat
        lehtësojnë Vlerat Bazë të nxënies së dijes.<span id="dots">...</span>
        <span id="more">
          Britannica-ELT është shkollë private e gjuhëve të huaja me fokus të
          veçantë në gjuhën angleze. Shkolla është themeluar në vitin 2006 në
          Prishtinë si institucion i cili angazhohet në mësimdhënie të gjuhës
          angleze dhe gjuhëve tjera evropiane. Në vitin e parë të themelimit
          kemi filluar me një kapacitet shumë të vogël si në staf ashtu edhe në
          hapësire. I tërë stafi përbëhej nga tre mësimdhënës dhe një zyrtare në
          administratë gjersa aktive ishin vetëm tri klasa me një numër të
          konsiderueshëm të studentëve .<br /><br />

          Gjatë Vitit Akademik 2014/2015 kemi hapur një qendër të re mësimore në
          Tophane e cila është pjesë e Britannica ELT dhe e cila funksionon
          njëjtë. Kjo është hapur sipas kërkesës së vazhdueshme të prindërve dhe
          interesimit të studentëve që ta kenë më afër këtë qendër.
          Britannica-ELT ofron programe të avancuara të gjuhëve të huaja në
          ambient shumë të përshtatshëm mësimor. .<br /><br />

          Qëllimi ynë është t’i ndihmojmë studentët tanë për t’i zhvilluar
          shkathtësitë e nevojshme për t’u marrë me rastet e shumta që i ofrohen
          dhe të jenë të përgatitur që të ballafaqohen me të ardhmen me
          vetëbesim.<br /><br />

          
        </span>
      </p>

    </div>

      <button type="button" id="read" onclick="read()">Read more</button>
      <p id="artikuj"><strong>ARTIKUJ NGA SHKOLLA</strong></p>

      <div id="artikujt">
        
        <div class="artikulli">
          <img src="../images/Flamuri.jpg" alt="" />
          <div class="info">
            <h3>Britannica uron te gjithe shqipetaret per festen e flamurit!</h3>
            <hr style="margin: 15px 0;" />

        
          </div>
        </div>
      
        <div class="artikulli">
          <img src="../images/talent.png" alt="" />
          <div class="info">
            <h3>Britannica organizoi naten e famshme nga studentet Britannica's Talent</h3>
            <hr style="margin: 15px 0;" />

            
          </div>
        </div>
        <div class="artikulli">
          <img src="../images/football.jpg" alt="" />
          <div class="info">
            <h3>Kids Football Tournament</h3>
            <hr style="margin: 15px 0;" />

           
          </div>
        </div>
        <div class="artikulli">
          <img src="../images/gift.jpg" alt="" />
          <div class="info">
            <h3>Handikos ndihmohet nga Britannica me "Gift Cards"</h3>
            <hr style="margin: 15px 0;" />

            
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- include FOOTER-IN -->
  <?php include 'includes/footer.php'; ?>


  </body>


</html>
