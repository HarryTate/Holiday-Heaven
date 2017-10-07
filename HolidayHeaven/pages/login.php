<?php include "../includes/header.php"; ?>



 <?php

 $uname = "";
 $pword = "";
 $errorMessage = "";

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
       require '../../../configure.php';


   $uname = $_POST['username'];
   $pword = $_POST['password'];

   $database = "login";

   $db_found = new mysqli(DB_SERVER,DB_USER,DB_PASS, $database);

   if($db_found){

 $SQL = $db_found->prepare('SELECT * FROM login WHERE L1 = ?');
 $SQL->bind_param('s',$uname);
 $SQL->execute();
 $result = $SQL-> get_result();

         if($result->num_rows == 1){

           $db_field = $result->fetch_assoc();

           if(password_verify($pword, $db_field['L2'])){

             session_start();
             $_SESSION['login']= "1";
             header("Location:page1.php");
           }
         }
       else {

         $errorMessage = "username Failed";
       }
     }
   }
 ?>


 <section class = "container">
   <div class = "row">
     <div class = "login-area">
     <figure class = "col-sm-12">
       <h3>Log in </h3>
       <FORM NAME ="form1" METHOD ="POST" ACTION ="login.php">

       Username: <INPUT TYPE = 'TEXT' Name ='username'  value="<?PHP print $uname;?>" maxlength="20"><br>
       Password: <INPUT TYPE = 'TEXT' Name ='password'  value="<?PHP print $pword;?>" maxlength="20"><br>


       <INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Login">
           <p> <br> Not Registered?<a href="signup.php"> Click here to create a new user  here </a> </p>
       </div>

     </figure>

   </div>
 </section>








 </FORM>

 <?PHP print $errorMessage;?>






<?php include "../includes/footer.php"; ?>
