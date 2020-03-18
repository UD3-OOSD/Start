<?php

  //Mysql connection
  include('db_config.php');

  //query for all account details
  $sql = 'SELECT username,password FROM account_details';

  //make query & get mysqli_results
  $result = mysqli_query($conn,$sql);

  //fetch data from mysql_list_tables
  $accounts = mysqli_fetch_all($result,MYSQLI_ASSOC);

  //free result from memmory
	mysqli_free_result($result);

	//close connectoin
	mysqli_close($conn);

  $errors = ['username'=>'','password'=>''];
  $username = $password = '';
  $oripass='_';

  if(isset($_POST['submit'])){

    //check Username
    if(empty($_POST['username'])){
      $errors['username'] = "username must be non-empty.";
    }else {
      if(preg_match('/^[a-zA-Z\s]+$/',$_POST['username'])){
        $username = $_POST['username'];
        //echo "hello";
        foreach ($accounts as $account) {
          //echo $account['username'].','.$username.'</br>';
          if($account['username'] == $username){
            //echo 'hey !there';
            $oripass = $account['password'];
            }
        }
        if($oripass == '_'){
          $errors['username'] = "Invalide Username.";
        }
      }else {
        $errors['username'] = "usename can contains only letters.";
      }
    }

    if(empty($_POST['password'])){
      $errors['password'] = "password can't be an empty.";
    }else {
      $password = $_POST['password'];
      //echo $oripass;
      if($oripass!='_'){
        //echo $oripass.','.$password.'</br>';
        if($oripass != $password){
          //echo "123";
          $errors['password'] = "Incorrect password.";
        }
      }
    }



  }


?>

<html>
<head>
<title>LogIn</title>

</head>

<body>
   <section>
   <h3>log in</h3>
   <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" >
    <input type="text" name ="username" value= "<?php echo htmlspecialchars($username)?>">
    <div ><?php echo $errors['username']?></div>
    <input type="password" name="password" value="<?php echo htmlspecialchars($password)?>">
    <div><?php echo $errors['password']?></div>
    <input type="submit" name="submit" value="Submit">
   </form>
   </section>
</body>

</html>
