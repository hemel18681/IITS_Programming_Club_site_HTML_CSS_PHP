<!DOCTYPE.html>

<head>
   <link rel="stylesheet" href="p.css">
   <head>
  <title>IITS Programming Club</title>
  <link rel="icon" type="image/gif/png" href="Club logo1.png">
</head>


<style>
  /*-- Image align --*/
  img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
/*-- background color --*/
body {
  background-color: white;
}
/*-- Navigation bar --*/
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  margin-right: auto;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
/*-- Navigation bar hover color --*/
li a:hover {
  background-color:#111;
}

* {
  box-sizing: border-box;
}

.column2 {
  float: left;
  width: 50%;
  padding: 10px;
}

/* Clearfix (clear floats) */
.row2::after {
  content: "";
  clear: both;
  display: table;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

.footer {
   left: 0;
   bottom: 0;
   width: 100%;
   height: 190px;
   background-color: #353232;
   color: white;
   text-align: center;
}

.padding {
  width: 100%;
  height: 50px;
  padding: 2px;
  box-sizing: border-box;
  background-color: #1D0247;
  margin-top: 40px;
  margin-bottom: 30px;
}


</style>


<ul>
  <li><a class="active" href="RAR.html">Home</a></li>
  <li><a href="activities.html">Activities</a></li>
  <li><a href="member.html">Members</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a href="about.html">About</a></li>
  <li><a href="developer.html">Developer</a></li>
  <li style="text-align: right; color: red; padding: 8px 12px; font-size: 23px; margin-right: 5px; position: relative; float: right;"> IITS Programming Club<img src="Club logo1.png" style="width: 45px;height:35px;5px; position: relative; float: right;"></li>
</ul>


<body>
<br><br><br>>
  <form action="process_userlog.php" method="post">
    <div class="imgcontainer">
      <img src="proggif.gif" alt="Avatar" class="avatar" style="width:240px; height:200px;">
    </div>
    <div>
      <p style="text-align: center; color: gold; font-size: 35; font-family: serif"><b>
        <u>IITS Programming Club</u>
      </b>
      </p>
      <br>
      <p style="text-align: center; color: white; font-size: 30; font-family: serif"><b>
        Please contact with the club manager as soon as possible.<br> 
        <br>
        Thank you.
      </b>
      </p>
    </div>
    
    <br><br><br><br><br><br>

  <!-- Footer -->
  <section>
  <div class="footer">

    <div class="row2">
    <div class="column2">
      <p style="text-align: left;">
      IUBAT- International University of Business Agriculture and Technology<br>
      4 Embankment Drive Road,Sector-10, Uttara Model Town, Dhaka-1230.<br>
      Phone: (88 02) 55091801-5.<br>
      Mobile : +88 01714014933, 01751790157, 01756174477<br>
      Fax: (880-2) 5895 2625, Email : info@iubat.edu<br>
      <a href="https://iubat.edu"><mark><b>Visit our website</b></mark></a>
    </p>
    </div>
    <div class="column2">
      <div class="row2">
        <div class="column2">
          <img src="Club logo1.png" class="center" style="margin-right:-450px; position: relative; float: right; width:90px;height:90px">
        </div>
        <div class="column2">
          <img src="IUBAT logo.gif" class="center" style="margin-left:200px;width:120px; height: 75px;">
        </div>
      </div>
     <p style="text-align: right;">Developed and maintained by the Programming Club<br>&#169 2019-2021 IITS Programming Club. All rights reserved. </p>
    </div>
    </div>
  </div>
  </section>


</body>