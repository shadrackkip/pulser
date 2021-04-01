<?php
require 'db.php';
    if(isset($_POST)){
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $email = $_POST['email'];

        $query = 'INSERT INTO  users (f_name,l_name,email) VALUES ("'.$f_name.'","'.$l_name.'","'.$email.'")';

       $insert = mysqli_query($conn,$query) ;
       if($insert){
           echo "data inserted";
       }else{
          echo mysqli_error($conn);
       }



    }

?>