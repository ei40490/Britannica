

<?php
    require '../controllers/AuthController.php';
    // error_reporting(0);

    $user = new AuthController;

    if(isset($_POST['submit'])) {

      $password = $_POST['password'];

      $uppercase = preg_match('@[A-Z]@', $password);
      $lowercase = preg_match('@[a-z]@', $password);
      $number    = preg_match('@[0-9]@', $password);
      $specialChars = preg_match('@[^\w]@', $password);

      if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
          echo "<h1 style='color:black;
          background-color: #8B0000;
          font-size:22px;
          text-align:center;
          padding:10px;'> 
          Keni shenuar Fjalkalimin Gabim</h1>";

          // elseif($_SESSION['is_admin'] == 1) {
          //   header('Location: ../admin/index.php');
       
          }else{
        $u = $user->login($_POST);
        $isAdmin = $_POST['is_admin'];
        header('Location: index.php');
      }

  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleLogin.css">
    <link rel="icon" href="favicon.ico" type="image/ico">
</head>
<body>

<div id="login-form-wrap">
    <h2>Login</h2>
        <form id="" name="login-form" action="" method="POST">
           <input id="username" type="email" name="email" placeholder="Sheno Email"> <br>
            <input id="password" type="password" name="password" placeholder="Passwordi"> <br>
            <input id="login" type="submit" name="submit" value="Login">
         </form>
           <div id="create-account-wrap">
         <h1>Nuk keni Logari? <a href="signup.php"> Krijo nje te re.</a><h1>
    </div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
 
      <script> 

$(function() {
    $("form[name='login-form']").validate({
      rules: {
        email: {
          required: true,
          email: true
        },
        password: {
            required: true,
            minlength: 8
        },
      },
      messages: {
        email: "Te lutem sheno email valide",
        password: "Duhet te kete minimumi 8 Karaktere"
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  });
</script>
</body>
</html>





