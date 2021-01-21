<?php
    require './controllers/LajmetController.php';

    $lajm = new LajmetController;
    $lajmet = $lajm->all();

    
    
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
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="./js/app.js"></script>
  </head>
  <body onload="showSlides()">

  <!-- include HEADER-IN -->
  <?php include 'includes/header.php'; ?>

  <main>
    <div class="slideshow-container" >
        <div class="slides fade">
            <img src="./images/slider1.jpg" alt="green">
            <div class="text">Let us teach u</div>
        </div>
        <div class="slides fade">
            <img src="./images/slider2.jpg" alt="red">
            <div class="text">Britannica</div>
        </div>
        <div class="slides fade">
            <img src="./images/slider3.jpg" alt="yellow">
            <div class="text"></div>
        </div>
    </div>
</main>



  <div class="content">

    <div class="content2">



  
      <div class="description">
      <img id="foto" src="images/foto.png" style="float: left;" />

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

         
          Britannica-ELT ofron programe të avancuara të gjuhëve të huaja në
          ambient shumë të përshtatshëm mësimor. Pasi që tashmë kemi krijuar
          emër marke të fuqishme, Britannica-ELT bashkëpunon ngushtë me ekspertë
          nga e gjithë bota në fushën mësimore në funksion të avancimit të
          vazhdueshëm të metodologjisë së punës dhe të përzgjedhjes së
          materialit më të mirë mësimor, duke u përpjekur kështu që ta ruajmë
          udhëheqjen në programet inovative dhe sfiduese të gjuhëve të huaja.<br /><br />

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


          <?php foreach($lajmet as $lajm): ?>
            <div class="artikulli">
              <img src="./images/<?php echo $lajm['foto'];?>" />
              <div class="info">
                 <h3><?php echo $lajm['pershkrimi']; ?> </h3>
                  <hr style="margin: 15px 0;" />
                  <a href="#">View Details</a>
                  <h6>Botuar ne: 
                   <?php
                    $date= new DateTime($lajm['created_date']) ;  
                    echo $date->format('m-d-y');
                   ?>
                  </h6>
              </div>
             </div>
           <?php endforeach ?>
       
       
      </div>
    </div>
  </div>

  <!-- include FOOTER-IN -->
  <?php include 'includes/footer.php'; ?>


  </body>


</html>
