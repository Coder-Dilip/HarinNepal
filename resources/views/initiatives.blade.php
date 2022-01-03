<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <x-header />
</head>
<style>
    .box{
    font-family: 'Source Sans Pro', sans-serif;
    background: repeating-linear-gradient(to right, #FF416C,#FF416C 15px,#FF4B2B 15px,#FF4B2B 30px);
    text-align: center;
    overflow: hidden;
    position: relative;
} 
.box:before{
    content: "";
    height: 150px;
    width: 150px;
    border: 2px solid #fff;
    border-radius: 50%;
    opacity: 1;
    transform: translateX(-50%) translateY(-50%) rotateY(-810deg);
    position: absolute;
    left: 50%;
    top: 50%;
    transition: transform 0.3s ease 0s,opacity 0.3s ease 0.1s;
    z-index: 1;
}
.box:hover:before{
    opacity: 0;
    transform: translateX(-50%) translateY(-50%) rotateY(0);
}
.box img{
    width: 100%;
    height: auto;
    transition: all .5s ease 0.2s;
}
.box:hover img{ opacity: 0.7; }
.box .box-content{
    color: #fff;
    text-align: left;
    opacity: 0;
    transform: skew(20deg);
    position: absolute;
    bottom: 0;
    left: -50%;
    z-index: 1;
    transition: all .4s ease-in-out;
}
.box:hover .box-content{
    opacity: 1;
    transform: skew(0);
    left: 0;
}
.box .title{
    color: #fff;
    background-color: #FF4B2B;
    font-size: 25px;
    font-weight: 700;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    padding: 3px 15px 4px;
    margin: 0 0 5px;
    border-radius: 0 5px 5px 0;
    position: relative;
    top:-90%
}
.box .post{
    color: #fff;
    background-color: #FF416C;
    font-size: 15px;
    font-weight: 500;
    letter-spacing: 0.5px;
    text-transform: capitalize;
    padding: 2px 10px 3px;
    margin: 0 0 5px;
    border-radius: 0 5px 5px 0;
    display: inline-block;
}
.box .icon{
    padding: 0;
    margin: 0;
    list-style: none;
    opacity: 0;
    transform: translateX(-50%) translateY(-50%);
    position: absolute;
    left: 50%;
    top: 50%;
    z-index: 1;
    transition: all 0.3s ease 0.1s;
}
.box:hover .icon{ opacity: 1; }
.box .icon li{
    margin: 0 3px;
    display: inline-block;
}
.box .icon li a{
    color: #FF416C;
    background-color: #fff;
    font-size: 15px;
    line-height: 40px;
    height: 40px;
    width: 40px;
    border-radius: 50%;
    display: block;
    transition: all 0.3s ease 0s;
}
.box .icon li a:hover{
    color: #fff;
    background-color: #FF4B2B;
}
@media only screen and (max-width:990px){
    .box{ margin: 0 0 30px; }
}
@media only screen and (min-width:990px){
    .box{
        margin: 30px
     }
}
</style>
<body>
   
<h2 style="font-weight:bold; text-align:center; margin-top:100px; margin-bottom:100px">Our Initiatives</h2>
    <div class="container" style="display: flex; flex-wrap:wrap; margin:auto">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="box">
                    <img src="images/nijgadh.png">
                    <div class="box-content">
                        <h3 class="title">Save Nijgadh</h3>
                        <span class="post">Web designer</span>
                    </div>
                    <ul class="icon">
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
            </div>
           
            <div class="col-md-4 col-sm-6">
                <div class="box">
                    <img src="images/oxygen.png">
                    <div class="box-content">
                        <h3 class="title">Oxygen is my Birthright</h3>
                        <span class="post">Web designer</span>
                    </div>
                    <ul class="icon">
                        <li><a href="/initiatives/oxygen-is-my-birthright"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box">
                    <img src="images/climate.png">
                    <div class="box-content">
                        <h3 class="title">Climate Change Discussion</h3>
                        <span class="post">Web designer</span>
                    </div>
                    <ul class="icon">
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box">
                    <img src="images/strike.png">
                    <div class="box-content">
                        <h3 class="title">Climate Strike</h3>
                        <span class="post">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci deserunt, rem optio vel dicta fugit nam dolore cumque tenetur a est at dolorem!</span>
                    </div>
                    <ul class="icon">
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
            </div> 
        </div>
    </div>
    <x-footer />
</body>
</html>