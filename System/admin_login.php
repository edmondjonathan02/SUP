
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="./css/admin_login.css">
  </head>
  <body>
    <p>
      <img src="fcritlogo.png">
      <h3> Agnel Charities</h3>
      <h1>Fr. C. Rodrigues Institute of Technology</h1>
      </p>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>ADMIN LOGIN</span></div>
        <form  method = "post" action="admin_page_home.php">
          <div class="row">
        
            <input type="text" placeholder="Username" required>
          </div>
          <div class="row">
            
            <input type="password" placeholder="Password" required>
          </div>
          
          <div class="row button">
            <input type="submit" value="Login">
          </div>
          <a href="index.php">Home</a>
        </form>
      </div>
    </div>

  </body>
</html>