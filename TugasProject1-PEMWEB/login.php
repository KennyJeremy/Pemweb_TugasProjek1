<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>
  <body>
    <h1>Login</h1>

    <form action="login.php" method="post">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" />
      <br>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" />
      <br>

      <input type="submit" value="Login" />
      

      <div class="group">
        <a href="#">Forget Password</a>
        <a href="#">Register</a>
      </div>
    </form>
  </body>
</html>