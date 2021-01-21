<?php
error_reporting(0);
require '../controllers/UserController.php';


if(isset($_SESSION['is_admin']) == '0'){


$user = new UserController;
$users = $user->all();


} 

if(isset($_SESSION['user_id'])){
  
  $user = new UserController;
  $users = $user->all();


}else{
  header('Location: ../error.php');
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="Js/app.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>User</title>
</head>
<body>

              
             
    
    <?php include './includes/side.php' ?>
         
     
         <div class="main-cards">


            <table id="myTable">
            <tr>

               <th onclick="sortTable(0)">Id</th>
               <th onclick="sortTable(1)">Name</th>
               <th onclick="sortTable(2)">Email</th>
               <th onclick="sortTable(3)">Created Date</th>

               <?php foreach($users as $user): ?>

              <?php echo "<tr>";
                    echo "<td>".$user['id']."</td>";
                    echo "<td>".$user['name']."</td>";
                    echo "<td>".$user['email']."</td>";
                    echo "<td>".$user['created_date']."</td>";
                    echo "</tr>";


              ?>


                <?php endforeach; ?>

            </tr>

            </table>

           
         </div>
       </main>
     
       
     </div>


    
</body>
</html>





