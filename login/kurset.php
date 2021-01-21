<?php


    require '../controllers/KursetController.php';

    $kurs = new KursetController;
    $kurset = $kurs->all();
    

   if(isset($_SESSION['user_id'])){

    //  header('Location: kurset.php');
   }else{
      header('Location: login.php');
  }


?>


<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../css/styleKurset.css" />
    <link rel="icon" href="favicon.ico" type="image/ico">
    <meta charset="utf-8" />
    <script
      src="https://kit.fontawesome.com/a5d75c613c.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>

    <!-- include HEADER-IN -->
    <?php include 'includes/header.php'; ?>

    <div class="container">
      <div class="content">
        <h1>Kurset</h1>
        <br />
        <p>
          Qëllimi i programeve të ofruara është që studentët të pajisen me
          njohuri relevante që u mundësojnë atyre një kuptueshmëri brezgjerë të
          teorisë dhe të praktikës . Kjo gjë kompletohet me shumë aktivitete
          përmes të lexuarit, të shkruarit , të dëgjuarit dhe të folurit. Puna
          modulare është e bashkangjitur edhe me mundësinë e zgjerimit të
          fushave të interesit me anë të prezantimeve dhe me anë të shqyrtimit
          dhe zhvillimit të një teme speciale sipas përzgjedhjes së studentit
          për provimin përfundimtar (vlerësimi sumativ) ku vlerësohet
          rrjedhshmëria e të folurit të gjuhës së huaj.
        </p>

        <br />
        <div id="gjuhet">
          <?php foreach($kurset as $kurs): ?>
            <div class="gjuha">
              <img src="../images/<?php echo $kurs['foto'];?>" />
              <div class="info">
                 <h3><?php echo $kurs['titulli']; ?> </h3>
                  <hr style="margin: 10px 0;" />
                   <p>
                    <?php echo $kurs['pershkrimi'];?>
                  </p>
                  <a href="kursDetails.php">View Details</a>
                  <a href="#">Ndjek Kursin</a>
              </div>
             </div>
           <?php endforeach ?>
       </div>
      </div>
    </div>

    <!-- include FOOTERIN -->
    <?php include 'includes/footer.php'; ?>

  </body>
</html>