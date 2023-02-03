<?php 
  include "./includes/navbar.php"
  ?>
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

<body>
    
<div class="container">
  <form>
    <div class="row">
        <h2>Apply for Certificates</h2>
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
        <h4>Select Club</h4></h4>
        <select>
            <option>Club 1</option>
            <option>CLub 2</option>
            <option>Club 3</option>
            <option>Club 4</option>
            <option>Event5</option>
          </select>
          <div class="submit">
    <input type="submit" value="Submit" >
    </div>
        </div>
        <!-- <div class="col-half">
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
        </div> -->
      </div>
      </div>
    </div>
  </form>
</div>