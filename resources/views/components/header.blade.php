{{-- Harin nepal header portion --}}

{{-- importing all bootstrap css and js bundle --}}
<meta name="viewport" content="width=device-width, user-scalable=false;">


<x-bootstrap />
<header style='margin:15px;display:flex;align-items:center; justify-content:space-between;flex-wrap:wrap; background-color:rgb(172, 255, 211); border-radius:5px; margin-top:15px; padding:10px;'>
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
  <nav  class="navbar navbar-expand-lg navbar-light bg-white" style="position:sticky;top:0;z-index:100;width:100%;">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Logo.</a>
      <button onclick="hidenav()"  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"  id="navbarDropdown" >
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
              <li><a class="dropdown-item" href="/intro">Intro</a></li>
              <li><a class="dropdown-item" href="/#">Media</a></li>
              <li><a class="dropdown-item" href="#">Journey</a></li>
              <li><a class="dropdown-item" href="#">Team</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/initiatives" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
              Initiatives
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="border:2px solid rgba(0, 0, 0, 0)">
              <li><a class="dropdown-item" href="/initiatives/save-nijgadh">Save Nijgadh</a></li>
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
        <button type="button" class="donateBtn" >Contact</button>
      </div>
    </div>
  </nav>

  <script>
    
elements=document.getElementsByClassName("nav-link")
console.log(elements[2])
if (elements[2]){
  elements[2].addEventListener("click", (()=>{
console.log(elements[2])
if(window.innerWidth>500){
    window.location.href="/initiatives"
}
  }))
}


    //   navbar collapsing
    curr_click_status=document.getElementsByClassName("navbar-toggler")[0].getAttribute("aria-expanded")
    function hidenav(){
        styling_target=document.getElementById("navbarSupportedContent")
    console.log(typeof(curr_click_status))
    if (curr_click_status=='true'){
        styling_target.style.display='none'
        console.log("removed")
        curr_click_status='false'
    }else{
        styling_target.style.display='block'
        console.log("removed")
        curr_click_status='true'
    }
    }
     
  </script>

