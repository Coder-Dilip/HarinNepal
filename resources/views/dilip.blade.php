<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  <link rel="stylesheet" href="{{asset('css/index.css')}}">
  <link rel="stylesheet" href="{{asset('css/initiatives.css')}}">

</head>
<body style="height: 100vh;width:100vw;display:flex;align-items:center;justify-content:center">
    <div  class="animate_initiatives">
        <h1 style="color:rgb(0, 160, 0)">{{$message}}</h1>
        <h3 id="redirect_home" style="font-size: blue;text-align:center" ></h3>
    </div>


    <script>
redirect_element=document.getElementById("redirect_home");
let x=4
const interval=setInterval(() => {
redirect_element.innerHTML=`Redirecting to home in <span style="color:red; fontweight:bold">${x}</span> seconds`
x-=1
if (x==-1){
    clearInterval(interval)
    location.href="/"
}
}, 1000);

    </script>
</body>

</html>