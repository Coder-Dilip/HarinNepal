<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>
<body>
    <x-header />
    <br>
    <div style="height:100vh;width:100vw;display:flex;align-items:center;justify-content:center;margin-top:50px">
        <div style="width:90%;display:flex;flex-direction:column;align-items:center;justify-content:center;padding:10px">
            <img src="/images/donate.jpg" height="auto" width="100%" alt="">
            <div style="font-size: 1.8rem;margin-top:50px; padding:10px">
                <input type="text" placeholder="Your name (op)" style="margin-bottom: 20px;padding:10px;outline:none;border:2px solid green;border-radius:5px;max-width:250px">
                <p style="max-width:1000px;width:90%">You can contribute to protect the environment by donating through <span style="font-weight: bold;color:green">Esewa</span>, <span style="font-weight: bold;color:orangered">Bank Transfer</span></p>
                <p><span style="color:blueviolet;cursor:pointer;font-weight:bold; text-decoration:underline">Contact</span> us for further process ;)</p>
            </div>
        </div>

</div>
    </div>
</body>
</html>