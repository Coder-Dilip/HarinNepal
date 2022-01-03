{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/initiatives.css')}}">
    <x-header />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/keen-slider@6.5.0/keen-slider.min.css"
    />
    <style>
     body {
  margin: 0;
  font-family: "Inter", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.zoom-out {
  perspective: 1000px;
  height: 50vw;
}

@media (min-width: 768px) {
  .zoom-out {
    height: 300px;
  }
}

.zoom-out__slide div {
  overflow: hidden;
  position: absolute;
  width: 100%;
  height: 100%;
}

.zoom-out__slide img {
  background-color: transparent;
  width: 100%;
  height: auto;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateY(-50%) translateX(-50%);
  -webkit-transform: translateY(-50%) translateX(-50%);
}


    </style>
</head>
<body style="overflow-x:hidden">
    
    <div style="max-width: 1500px; margin:auto; display:flex;margin-top:40px;position:relative;justify-content:center; flex-wrap:wrap">
        <div style="margin-left:5%;margin-right:5%;width:90%;display:flex;justify-content:center;position:relative;flex-wrap:wrap;align-items:center;flex-direction:column">
            <img class="initiatives_img" src="/images/jalwayu.jpg" alt="" style="width:90%;height:auto;border-radius:5px;margin:auto;min-height:200px">
            <div class="animate_initiatives" style="position: absolute;width:70%;margin-top:2%">
                <h2 style="text-align:left;display:block;font-weight:bold;color:white">Jalwayu Pariwartan Bare Chalfal</h2>
                <p style="text-align:left;display:block;margin-top:20px;max-width:500px;color:white;font-size:1.3rem">Discussion about the climate crisis and its effects on environment.</p>
            </div>
        </div>
        <div style="width:100%;margin-top:2%;margin-left:10%;">
            <p style="max-width:90%;text-align: justify;margin-top:30px;font-size:1.3rem">Jalwayu Pariwartan Bare Chalfal is an environmental and climate literacy campaign where people from different walks of life discuss the climate crisis and various environmental issues, how it's affecting us and what we can do to protect our common future. This campaign was initiated in 2020 and has successfully Conducted 15 sessions compromising 10,000 Participants in total.
            </p>
        </div>
        <br>
<br>
<div style="width:100%;margin-top:2%;margin-left:10%;">
        <p style="max-width:90%;text-align: justify;margin-top:30px;font-size:1.5rem;font-weight:bold">Objective of Jalwayu Pariwartan Bare Chalfal</p>
        <br>
        
    <img src="/images/harin-jalwayu.png" style="width: 90%;height:auto;margin-top:70px;margin-bottom:100px">
    <span style="font-weight: bold; font-size:1.3rem; display:block">Watch some of our webinars-</span>
        <br>
        <br>
        <iframe width="900" height="500" style="max-width: 90%"
        src="https://www.youtube.com/embed/lJnaZq5nlH8&t=3981s">
        </iframe>
        <br>
        <br>
        <br>
        <iframe width="900" height="500" style="max-width: 90%"
        src="https://www.youtube.com/embed/E7NyJmGttE&t=5075s">
        </iframe>
        </p>
<br>
        </p>
    </div>
    </div>
</div>
<x-footer />
<script src="https://cdn.jsdelivr.net/npm/keen-slider@6.5.0/keen-slider.min.js"></script>
    <script>
      var slider = new KeenSlider("#my-keen-slider", {
        loop: true,
        detailsChanged: (s) => {
          const slides = s.track.details.slides
          s.slides.forEach((element, idx) => {
            scaleElement(element.querySelector("div"), slides[idx].portion)
          })
        },
        initial: 2,
      })

      function scaleElement(element, portion) {
        var scale_size = 0.7
        var scale = 1 - (scale_size - scale_size * portion)
        var style = `scale(${scale})`
        element.style.transform = style
        element.style["-webkit-transform"] = style
      }
    </script>
</body>
</html> --}}





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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/index.css')}}">
  <link rel="stylesheet" href="{{asset('css/initiatives.css')}}">
<style>
    .keen-slider__slide>img{
        width: 100%;
        height:auto
    }
</style>
</head>
<body style="overflow-x: hidden">

  {{-- nav and header component --}}
  <x-header />

{{-- landing section --}}


  

  {{-- Welcome section --}}

  


 {{-- initiatives --}}
 





</div>
</div>

  
<div style="max-width: 1500px; margin:auto; display:flex;margin-top:40px;position:relative;justify-content:center; flex-wrap:wrap">
    <div style="margin-left:5%;margin-right:5%;width:90%;display:flex;justify-content:center;position:relative;flex-wrap:wrap;align-items:center;flex-direction:column">
        <img class="initiatives_img" src="/images/jalwayu.jpg" alt="" style="width:90%;height:auto;border-radius:5px;margin:auto;min-height:200px">
        <div class="animate_initiatives" style="position: absolute;width:70%;margin-top:2%">
            <h2 style="text-align:left;display:block;font-weight:bold;color:white">Jalwayu Pariwartan Bare Chalfal</h2>
            <p style="text-align:left;display:block;margin-top:20px;max-width:500px;color:white;font-size:1.3rem">Discussion about the climate crisis and its effects on environment.</p>
        </div>
    </div>
    <div style="width:100%;margin-top:2%;margin-left:10%;">
        <p style="max-width:90%;text-align: justify;margin-top:30px;font-size:1.3rem">Jalwayu Pariwartan Bare Chalfal is an environmental and climate literacy campaign where people from different walks of life discuss the climate crisis and various environmental issues, how it's affecting us and what we can do to protect our common future. This campaign was initiated in 2020 and has successfully Conducted 15 sessions compromising 10,000 Participants in total.
        </p>
    </div>
    <br>
<br>
</div>
<div id="my-keen-slider" class="keen-slider" style="margin-top: 20px; max-width:1700px; margin:auto;width:90%;">
    
    <div class="keen-slider__slide">
      <div style="position: absolute">
      </div>
      <img src="/images/hero1.png" alt="">
    </div>
    <div class="keen-slider__slide">
      <div style="position: absolute">


            </div>
      <img src="/images/hero2.jpg" alt="">
    </div>
    <div class="keen-slider__slide">
      <div style="position: absolute">
      </div>
      <img src="/images/hero3.jpg" alt="">

    </div>
  </div>

<div style="max-width: 1500px; margin:auto; display:flex;margin-top:40px;position:relative;justify-content:center; flex-wrap:wrap">

<div style="width:100%;margin-top:2%;margin-left:10%;">
    <p style="max-width:90%;text-align: justify;margin-top:30px;font-size:1.5rem;font-weight:bold">Objective of Jalwayu Pariwartan Bare Chalfal</p>
    <br>
    
<img src="/images/harin-jalwayu.png" style="width: 90%;height:auto;margin-top:70px;margin-bottom:100px">
<span style="font-weight: bold; font-size:1.3rem; display:block">Watch some of our webinars-</span>
    <br>
    <br>
    <iframe width="900" height="500" style="max-width: 90%"
    src="https://www.youtube.com/embed/lJnaZq5nlH8&t=3981s">
    </iframe>
    <br>
    <br>
    <br>
    <iframe width="900" height="500" style="max-width: 90%"
    src="https://www.youtube.com/embed/E7NyJmGttE&t=5075s">
    </iframe>
    </p>
<br>
    </p>
</div>
</div>






{{-- footer component --}}
<x-footer />

  <script src="https://cdn.jsdelivr.net/npm/keen-slider@5.5.0/keen-slider.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="./script.js"></script>
  <script src="https://kit.fontawesome.com/1255cf201d.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script type='text/javascript' src="{{asset('js/index.js')}}"></script>
  
<script>
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
</body>
</html>
