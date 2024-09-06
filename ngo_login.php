<?php
   session_start();
   include("db.php");
   if($_SERVER['REQUEST_METHOD']=="POST")
   {
    
    $login = $_POST['loginid'];
    $pass = $_POST['password'];
    if(!empty($login) && !empty($pass) && !is_numeric($login))
    {
      $query="select * from ngosignup where loginid='$login' limit 1";
      $result=mysqli_query($con,$query);
      if($result)
      {
        if($result && mysqli_num_rows($result)>0)
        {
          $user_data=mysqli_fetch_assoc($result);
          if($user_data['password']==$pass)
          {
            // echo "sign in successful";
            echo "<script>
               
                window.location.href = 'ngo page.html';
              </script>";
            die;
          }
        }
      }
      echo "wrong email id or password";
      // $error="wrong email id or password";

    }
  }
   else{
    
//echo "wrong email id or password";
}
   
    
   
   ?>

