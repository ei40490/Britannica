<?php
    require './controllers/ContactController.php';

    $con = new ContactController;

    if(isset($_POST['submit'])) {
        $con->store($_POST);
        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/ico">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/styleContact.css" />
</head>
<body>

    <!-- include HEADER-IN -->
    <?php include 'includes/header.php'; ?>

   
    <div class="container">
		  <div class="contact-box">
			  <div class="left">

                <div class="icon-bar">
                <ul>
                  <li><a href="https://www.facebook.com/edonnismaili/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="https://www.youtube.com/channel/UCBOuDfI2VfTVO8k6sXPV8XA?view_as=subscriber" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                  <li><a href="https://twitter.com/SAbetare" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="https://www.instagram.com/liza.berisha/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>

                </div>
            </div>
		  	<div class="right">
            <h2>Na Kontaktoni</h2>
            <form name="registration" action="" method="POST" >
            <input name="emri" id="firstname" class="inputet"  placeholder="Emri">
            <input type="email" name="email" id="email" class="inputet" placeholder="Email" >
            <input name="phone" id="phone" type="text" class="inputet" placeholder="Telefoni" >
            <textarea name="message" id="mesazhi" placeholder="Mesazhi" class="inputet" ></textarea>
            <button class="btn" name="submit" type="submit" >Dergo</button>
            </form>
			</div>
		</div>
  </div>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

      <!-- sedi pse so ka e pranon qeto po duhet patjeter me shkru javascriptin mrena klases !!!!!!! -->

      <!-- <script src="/js/valid.js"></script> -->
      <!-- <script src="C:\xampp\htdocs\Britannica\js\valid.js"></script> -->

 
  

      <script> 

          $(function() {
              $("form[name='registration']").validate({
                rules: {
                  firstname: "required",
                  email: {
                    required: true,
                    email: true
                  },
                  phone:{
                    required: true,
                    minlength:7
                  },
                },
                messages: {
                  firstname: "Te lutem sheno emrin",
                  email: "Te lutem sheno email valide",
                  phone: "Numri duhet te jet me i gjate se 7 karaktere"
                },
                submitHandler: function(form) {
                  form.submit();
                }
              });
            });
  </script>

   
</body>
</html>
