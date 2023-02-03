 <?php

session_start();

include('config.php');
if (isset($_POST['login'])) {
  $username = $_POST['username']; 
  $password = $_POST['password'];
  $query = $connection->prepare("SELECT * FROM users WHERE username=:username");
  $query->bindParam("username", $username, PDO::PARAM_STR);
  $query->execute();
  $result = $query->fetch(PDO::FETCH_ASSOC);
  if (!$result) {
    echo '<p class="error">Username password combination is wrong!</p>';
  }
  else {
    if (password_verify($password, $result['password'])) {
      $_SESSION['user_id'] = $result['id'];
      echo '<p class="success">Congratulations, you are logged in!</p>';
    }
    else {
      echo '<p class="error">Username password combination is wrong!</p>';
    }
  }
}
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="./css/student_login_page.css">
  </head>
  <body>
    <p>
      <img src="fcritlogo.png">
      <h3> Agnel Charities</h3>
      <h1>Fr. C. Rodrigues Institute of Technology</h1>
      </p>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>STUDENT LOGIN</span></div>
        <form  method = "POST" action="student_page_home.php">
          <div class="row">
        
            <input type="text" name="username" placeholder="Username"  pattern="[a-zA-Z0-9]+" required>
          </div>
          <div class="row">
            
            <input type="password" name="password" placeholder="Password"  required>
          </div>
          
          <div class="row button">
            <input type="submit" name="login" value="Login">
          </div>
          <a href="index.php">Home</a>
          <p>Don't have an account?<a href="student_register.php">Register Now!</a></p>
        </form>
      </div>
    </div>
    </body>
</html>