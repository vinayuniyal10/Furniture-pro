<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
* {box-sizing: border-box;}



.header {
  overflow: hidden;
  background-color: #fff;
  padding: 20px 10px;
  font-family: sans-serif;
  font-weight: 600;
  font-style: normal;
  color: #777;
    z-index: 100;

}
.container {
    width: 100%;
    padding-right: 20px;
    padding-left: 20px;
    margin-right: auto;
    margin-left: auto;
}

.header a {
  float: left;
  color: #777;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: #fe7865;;
  color: white;
}

.header-right {
  float: right;

}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
 
  .header-right {
    float:none ;
  }
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}

.carousel-inner img {
    width: 100%;
    height: 70%;
      z-index: -1;
  }

  .btn-group a {
  /*isplay: block;*/
  display: block!important;
  background-color: #e5e5e5;
  border: 1px solid #ddd;
  color: gray;
  padding: 10px 24px;
  cursor: pointer;
  width: 50%;
 
 
}
.btn-group a:hover {
  background-color: #fff;
}
.btn-group a.active {
  background-color: dodgerblue;
  color: white;
}

</style>
</head>
<body>

<div class="header" id="myHeader">
  <div class="container">
  <a href="#default" class="logo">Furnish</a>
  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="#contact">Product</a>
    <a href="#Service">Service</a>
     <a href="#Portfoli">Portfoli</a>
      <a href="#Team">Team</a>
       <a href="#blog">blog</a>
  </div>
</div>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
</div>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

 
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="slide1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="slide.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="slide1.jpg" alt="New York" width="1100" height="500">
    </div>
  </div></div>
  <div class="container" style="padding-top: 100px;">
    <div class="row">
       <div class="col-lg-6"><img src="slide1.jpg" alt="" style="opacity: 1; width: 523px; height:229px; transform: translate3d(-11px, 0px, 0px);">
</div>
<div class="col-lg-6"><img src="slide1.jpg" alt=""  style="opacity: 1; width: 523px; height:229px;transform: translate3d(-11px, 0px, 0px);">
</div>
</div>

<section>
  <div class="container" style="padding-top: 50px;">
    <div class="row">
      <div class="col-md-3">
       <div class="btn-group" style="">
        <h5>OUR COLLECTION</h5>
         <a class="active">Furniture</a>
         <a>Decorative</a>
         <a>Lightning</a>
          <a>Outdoor</a>
         <a>Storage</a>
       </div>

      </div>
     
    </div>
  </div>
</section>


</body>
</html>