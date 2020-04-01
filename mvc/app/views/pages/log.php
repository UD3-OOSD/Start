<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="/test_repo/mvc/public/css/log.css">
  </head>
  <body>
    <form class="box" action="login.html" method="post">
      <h1>login</h1>
      <img class="icon" src="https://cdn4.iconfinder.com/data/icons/gray-user-management/512/login-512.png">
      <input type="text" name="" placeholder="Username">
      <input type="password" name="" placeholder="Password">
      <a href="#" id="button" class="button">Submit</a>
    </form>
    <div class="bg-modal">
      <div class="modal-content">
        <div class="close">+</div>
        <h1 id="verify">Verification Code</h1>
        <form action="">
          <input class="inp" type="password" name="" placeholder="Enter code here">
          <a href="" class="button">Submit</a>
        </form>
      </div>
    </div>
    <script>
      document.getElementById('button').addEventListener("click", function() {
	       document.querySelector('.bg-modal').style.display = 'flex';
      });
    </script>
    <script>
      document.querySelector('.close').addEventListener("click", function() {
	       document.querySelector('.bg-modal').style.display = "none";
       });
    </script>
  </body>
</html>
