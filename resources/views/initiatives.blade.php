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
</style>
<body>
    This is freaking initiatives
    {{-- <div style="display: flex;flex-wrap:wrap;justify-content:space-evenly; margin:auto; max-width:1500px">

    </div> --}}

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="box">
                    <img src="https://www.creativefabrica.com/wp-content/uploads/2020/05/01/Background-with-forest-illustration-Graphics-4005399-1.jpg">
                    <div class="box-content">
                        <h3 class="title">Williamson</h3>
                        <span class="post">Web designer</span>
                    </div>
                    <ul class="icon">
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="box">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/51L--KMbvsL._SL1000_.jpg">
                    <div class="box-content">
                        <h3 class="title">Miranda Roy</h3>
                        <span class="post">Web designer</span>
                    </div>
                    <ul class="icon">
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</body>
</html>