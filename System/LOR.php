

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/LOR.css" class="css">

    <title>Student Dashboard</title>
</head>
<body>
<div class="navbar">
  <img alt="logo" class="img_logo"  src="fcritlogo.png">
  <!-- <h3> Agnel Charities</h3> -->
  <h1>Fr. C. Rodrigues Institute of Technology</h1>
</div>
<div class="head_text">
    Student Service Portal
</div>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="forms.php">Forms</a>
  <a href="#letters">Letters</a>
  <a href="#feepayment">Fee Payment</a>
</div>
<body>
  <br><br>
<div class="container">
  <form>
    <div class="row">
        <h2>Apply for LOR</h2>
      <h4>Account</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Full Name"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="email" placeholder="Email Adress"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Roll Number"/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
    </div>
    <div class="row">
      
      <div class="col-half">
        <div class="input-group">
        <h4> Department</h4>
        <select>
              
            <option>Computer</option>
            <option>IT</option>
            <option>Mechanical</option>
            <option>EXTC</option>
            <option>Electrical</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-half">
        <h4>Date of Joining</h4>
        <div class="input-group">
          <div class="col-third">
            <input type="text" placeholder="DD"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="MM"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="YYYY"/>
          </div>
        </div>
        <!-- <div class="col-half"> -->
        <h4>Date of Graduation</h4>
        <div class="input-group">
          <div class="col-third">
            <input type="text" placeholder="DD"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="MM"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="YYYY"/>
          </div>
        </div>
        
      </div>
     
      </div>
      <div class="submit">
    <input type="submit" value="Submit" >
    </div>
    </div>
  
   
  </form>
</div>