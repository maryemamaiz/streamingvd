<!DOCTYPE html> 
<html> 
<title>Stream video </title>
<style>
 body  {
  background-image: url("https://i.postimg.cc/YqFd6KWs/1.jpg");
  background-color: #cccccc;
  background-repeat: no-repeat, repeat;
  background-size: cover;
}


 *{
    margin: 0;
    padding: 0;
}

.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(1.jpg);
    background-position: center;
    background-size: cover;
   
}

.navbar{
    width: 1200px;
    height: 75px;
    margin: auto;
}

.icon{
    width: 200px;
    float: left;
    height: 70px;
}

.logo{
    color: #ff7200;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 10px;
    margin-top: 5px
}

.menu{
    width: 400px;
    float: left;
    height: 70px;
}
ul{
    float: left    display: flex;;

    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
}

ul li a{
    text-decoration: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

ul li a:hover{
    color: #ff7200;
}


</style>


<link rel="icon" href=
    "https://cdn-icons-png.flaticon.com/512/633/633832.png" type="image/x-icon">



<body style=" text-align: center; "> 

 <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">FLOWTEC </h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="streamingvideo.php">HOME</a></li>
                   <!-- <li><a href="#">ABOUT</a></li>
                    
                    <li><a href="#">CONTACT</a></li> -->
                </ul>
            </div>
          </div>
        </div>

<div style="text-align:center"> 
 
  <br><br>
  <video style="border-style: double   ;border-color: orangered; " src = "http://192.168.91.1:8000 " type = "video / ogg; codecs = theora" id="video1" width="420">
    
    Your browser does not support HTML video.
  </video>
  <br><br>
  <button onclick="playPause()">Play/Pause</button> 
  <button onclick="makeBig()">Big</button>
  <button onclick="makeSmall()">Small</button>
  <button onclick="makeNormal()">Normal</button>
</div> 



<script> 

var myVideo = document.getElementById("video1"); 

function playPause() { 
  if (myVideo.paused) 
    myVideo.play(); 
  else 
    myVideo.pause(); 
} 

function makeBig() { 
    myVideo.width = 560; 
} 

function makeSmall() { 
    myVideo.width = 320; 
} 

function makeNormal() { 
    myVideo.width = 420; 
} 
</script> 

<p> </p>

</body> 
</html>

