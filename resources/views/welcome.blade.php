<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/keen-slider@5.5.0/keen-slider.min.css"
    />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>
<body>
  <header style='margin:5px;display:flex;align-items:center; justify-content:space-between;flex-wrap:wrap'>
    <div>
      <div style='display:flex;align-items:center'>
        <i class="fas fa-phone-alt" style="padding-left:10px;padding-top:10px;padding-right:10px"></i>
<p style="position: relative;top:13px">0134525</p>
      </div>
      <div style='display:flex;align-items:center'>
        <i class="far fa-envelope-open" style="padding-left:10px;padding-top:10px;padding-right:10px"></i>
<p style="position: relative;top:13px;">info@harinnepal.com</p>
      </div>
    </div>
    <div class='hearderBtn' style="display: flex;align-items:center;margin-right:10px">
<a href=""><i class="fab fa-facebook-f"></i></a>
<a href=""><i class="fab fa-twitter"></i></a>
<a href=""><i class="fab fa-instagram"></i></a>
<a href=""><i class="fab fa-youtube"></i></a>
    </div>
  </header>
  <nav  class="navbar navbar-expand-lg navbar-light bg-white" style="position:sticky;top:0;z-index:100">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Logo.</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="# id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
              About
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="border:2px solid rgba(0, 0, 0, 0)">
              <li><a class="dropdown-item" href="#">Intro</a></li>
              <li><a class="dropdown-item" href="#">Media</a></li>
              <li><a class="dropdown-item" href="#">Journey</a></li>
              <li><a class="dropdown-item" href="#">Team</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
              Initiatives
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="border:2px solid rgba(0, 0, 0, 0)">
              <li><a class="dropdown-item" href="#">Save Nijgadh</a></li>
              <li><a class="dropdown-item" href="#">Oxygen is my Birthright</a></li>
              <li><a class="dropdown-item" href="#">Climate Change Discussion</a></li>
              <li><a class="dropdown-item" href="#">Climate Strike</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
              Get Involved
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="border:2px solid rgba(0, 0, 0, 0)">
              <li><a class="dropdown-item" href="#">Volunteer</a></li>
              <li><a class="dropdown-item" href="#">Internship</a></li> 
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blogs</a>
          </li>
        </ul>
        <button type="button" class="donateBtn" >Donate</button>
      </div>
    </div>
  </nav>
  


{{-- landing section --}}

  <div id="my-keen-slider" class="keen-slider" style="margin-top: 20px">
    
    <div class="keen-slider__slide">
      <div style="position: absolute">
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptate facilis odio!</p>
  <button class="donateBtn">Donate</button>
      </div>
      <img src="images/hero1.png" alt="">
    </div>
    <div class="keen-slider__slide">
      <div style="position: absolute">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptate facilis odio!</p>
        <button class="donateBtn">Donate</button>
            </div>
      <img src="images/hero2.jpg" alt="">
    </div>
    <div class="keen-slider__slide">
      <div style="position: absolute">
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptate facilis odio!</p>
  <button class="donateBtn">Donate</button>
      </div>
      <img src="images/hero3.jpg" alt="">

    </div>
  </div>



  <div style="margin:auto;width:100%; margin-top:50px">
    <p class='subTitle'>About HarinNepal</p>
 <div class='blurServices' style="display:flex; flex-wrap:wrap; justify-content:center">

     <div class='services_container'>
      <i class="fas fa-phone-alt" id='services_icon' style="background:#d9f3ff;color:#008bfc"></i>
     
<p class='services_title'>Mission</p>
<p class='services_subTitle'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam facere quas consectetur.</p>
<button class='services_button'>Intro</button>
     </div>

     <div class='services_container'>
      <i class="fas fa-phone-alt" id='services_icon' style="background:#ffeadb;color:#ff954a"></i>
      
<p class='services_title'>Vision</p>
<p class='services_subTitle'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero sunt adipisci repellat..</p>
<button class='services_button1'>Get support</button>
     </div>

     <div class='services_container'>
      <i class="fas fa-phone-alt" id='services_icon' style="background:#f2e1ff;color:#b14aff"></i>
<p class='services_title'>Objective</p>
<p class='services_subTitle'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, molestiae obcaecati.</p>
<button class='services_button2'>Explore</button>
     </div>
 </div>
 </div>


<div style="background-color:rgb(0, 36, 24);margin-top:50px;padding:20px">
  <footer style='margin:5px;display:flex;align-items:center; justify-content:start;flex-wrap:wrap'>

      <div style='display:flex;align-items:center;margin-right:50px'>
        <i class="fas fa-phone-alt" style="padding-left:10px;padding-top:10px;padding-right:10px; color:white"></i>
<p style="position: relative;top:13px;color:white">0134525</p>
      </div>

      <div style='display:flex;align-items:center;position:relative; top:-2px;margin-right:50px'>
        <i class="far fa-envelope-open" style="padding-left:10px;padding-top:10px;padding-right:10px; color:white"></i>
<p style="position: relative;top:13px;color:white">info@harinnepal.com</p>
      </div>
    
    <div class='hearderBtn' id='footer_icons' style="display: flex;align-items:center;margin-right:10px;flex-wrap:wrap;float:right;">
<a href=""><i style="color:white" class="fab fa-facebook-f"></i></a>
<a href=""><i style="color:white" class="fab fa-twitter"></i></a>
<a href=""><i style="color:white" class="fab fa-instagram"></i></a>
<a href=""><i style="color:white" class="fab fa-youtube"></i></a>
</div>

</footer>
<div style="min-width:30px;margin-left:15px; color:white" id='copyright'>Copyright 2021 Harin Nepal. All Rights Reserved</div>
</div>



  <script src="https://cdn.jsdelivr.net/npm/keen-slider@5.5.0/keen-slider.min.js"></script>
  <script src="./script.js"></script>
  <script src="https://kit.fontawesome.com/1255cf201d.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script type='text/javascript' src="{{asset('js/index.js')}}"></script>
  

</body>
</html>