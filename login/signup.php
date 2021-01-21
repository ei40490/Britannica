<?php
    require '../controllers/UserController.php';

    $user = new UserController;

    if(isset($_POST['submitted'])) {

        $password = $_POST['password'];

        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
            echo "<h1 id='erroriBackend'> 
            Passwordi duhet te jete me i gjate se 8 karaktere gjithashtu duhet te filloje me shkronje te madhe
            dhe duhet te permbaj nje numer minimum</h1>";

        }else{
            $user->store($_POST);
            header('Location: login.php');
        }

    }





?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create User</title>
    <link rel="stylesheet" href="../css/styleLogin.css">
    <link rel="icon" href="favicon.ico" type="image/ico">
</head>
<body>
    <div id="login-form-wrap">
        <h2>Sign up</h2>
        <form id="login-form" name="signup" action="" method="POST" onsubmit="validimiPasswordit()">
            <input id="username" type="text" name="fullName" placeholder="Sheno Emrin">
            <input id="username" type="text" name="email" placeholder="Sheno Email">
            <input id="password" type="password" name="password">
            <button id="signup" type="submit" name="submitted">Krijo</button>
         </form>
   
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="../js/valid.js"></script>


    
</body>
</html>


<style>
        #signup{
            border: none;
	    background-color: #3ca9e2;
	    color: #fff;
	    font-weight: bold;
	    text-transform:uppercase;
	    cursor: pointer;
        transition: all 0.2s ease;
        font-size: 18px;
        position: relative;
        display: inline-block;
        cursor: pointer;
        text-align: center;
        margin-bottom:20px;
        width:40%;

        }

        ::placeholder {
            text-align: center;
}


#erroriBackend{
    color:black;
    background-color: #8B0000;
    font-size:22px;
    text-align:center;
    padding:10px;
}
      
</style>



