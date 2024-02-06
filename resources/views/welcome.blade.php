<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Staatliches&update=swap" rel="stylesheet">

        <!-- Styles -->
        <style>



body {background-color: #000;
	cursor: pointer;
  overflow: hidden;
	font-family: 'tekomedium';
  margin: 0; padding: 0;}

.container {
	background-color: rgba(0,0,0,.1);
	width: 640px;
	height: 360px;
	position: absolute;
	top: 50%;
	left: 50%;
	margin-left: -320px;
	margin-top: -180px;
	-o-animation: bringup 2s linear reverse forwards;
	-moz-animation: bringup 2s linear reverse forwards;
	-webkit-animation: bringup 2s linear reverse forwards;
	animation: bringup 2s linear reverse forwards;
	overflow: hidden;
	letter-spacing: 2px;
}
	
@keyframes bringup {
0% {background-color: rgba(0,88,0,.2);}
100% {background-color: rgba(0,0,0,.1);}
}

.shrink {
	position: absolute;
	top: 35px;
	left: 216px;
	text-align: center;
	font-size: 48px;
	color: transparent;
	-o-animation: shrink 1.5s linear forwards 2s;
	-moz-animation: shrink 1.5s linear forwards 2s;
	-webkit-animation: shrink 1.5s linear forwards 2s;
	animation: shrink 1.5s linear forwards 2s;
	}
@keyframes shrink {
0% {text-shadow: 0px 0px 80px #0f0;}


100% {text-shadow: 1px 1px 1px #0f0;}
}
.eat, .sleep, .rave, .repeat {
	position: absolute;
	top: 105px;
	left: 267px;
	font-size: 30px;
	color: transparent;
	-o-animation: shrink 1.5s linear forwards 3s;
	-moz-animation: shrink 1.5s linear forwards 3s;
	-webkit-animation: shrink 1.5s linear forwards 3s;
	animation: shrink 1.5s linear forwards 3s;
	}
.sleep {
	top: 145px;
	-o-animation: shrink 1.5s linear forwards 3.2s;
	-moz-animation: shrink 1.5s linear forwards 3.2s;
	-webkit-animation: shrink 1.5s linear forwards 3.2s;
	animation: shrink 1.5s linear forwards 3.2s;
	}
.rave {
	top: 185px;
	-o-animation: shrink 1.5s linear forwards 3.4s;
	-moz-animation: shrink 1.5s linear forwards 3.4s;
	-webkit-animation: shrink 1.5s linear forwards 3.4s;
	animation: shrink 1.5s linear forwards 3.4s;
	}
.repeat {
	top: 225px;
	-o-animation: shrink 1.5s linear forwards 3.6s;
	-moz-animation: shrink 1.5s linear forwards 3.6s;
	-webkit-animation: shrink 1.5s linear forwards 3.6s;
	animation: shrink 1.5s linear forwards 3.6s;
	}
.eat, .rave {text-decoration: line-through;}

.rainbow {
  background: url("https://imgup.nl/images/2021/06/16/146x263.png");
  position: absolute;
  top: 286px;
  left: 200px;
  width: 306px;
  height: 263px;
  color: transparent;
  -webkit-background-clip: text;
  -o-background-clip: text;
  -moz-background-clip: text;
  background-clip: text;
  -o-animation: appear 1.5s linear forwards 7s, roll 5s linear infinite;
  -moz-animation: appear 1.5s linear forwards 7s, roll 5s linear infinite;
  -webkit-animation: appear 1.5s linear forwards 7s, roll 5s linear infinite;
  animation: appear 1.5s linear forwards 7s, roll 5s linear infinite;
  z-index: 5;
  font-size: 48px;
  color: #0f0;
  opacity: 0;
}

@keyframes appear {
0% {opacity: 0;}
100% {opacity: 1;}
}

@keyframes roll {
  0% {
    background-position: right 0 top 0;
  }
  100% {
    background-position: right 0 top -263px;
  }
}

        </style>
    </head>
    <body class="antialiased">
        <div class="container">
        
        
        
            <div class="shrink">COVID VIRUS</div>
            <div class="eat">EAT</div>
            <div class="sleep">&#10004; SLEEP</div>
            <div class="rave">RAVE</div>
            <div class="repeat">&#10004; REPEAT</div>
            <div class="rainbow">&#9829; STAY SAFE &#9829;</div>
        
        
        </div>

        <script type="text/javascript">
        // Code adaption based on Daniel Shiffman's P5.js* book on learning to code in P5 - see the JitterBug() construct and others

var Cells = [];	
var tileSize = 1.2;
var tiles = 5450;

function setup() {

  noStroke();
  colorMode(HSB, 360, 100, 50, .1);
  createCanvas(window.innerWidth, window.innerHeight);
  for (var i = 0; i < tiles; i++) {
    var x = round((random(width / tileSize)) * tileSize);
    var y = round(random(height / tileSize) * tileSize);	
    var r = tileSize;
    var h = random(100, 190);
	var t = random(.8, 8);
	var u = random(.3, .8);
    Cells[i] = new Covid(x, y, r, h, t, u);
  }
}



function draw() {

   background(200, 100, 0, .009);

  for (var i =0; i < tiles; i++) {
    Cells[i].spread();
    Cells[i].update();
  }
}

function Covid(isX, isY, myD, myHue, newX, newY) {
  this.x = isX;
  this.y = isY;
  this.tS = newX;
  this.tU = newY;
  this.diameter = myD;
  this.h = myHue;
  this.spread = function() {
    var tx = round(random(-2, 2));
    var ty = round(random(-2, 2));
    this.x += (tx * tileSize);
    if ((this.x > width+(tileSize * 8)) || (this.x < -tileSize * 8)) {this.x = random(width / tileSize) * tileSize;}
    this.y += (ty * tileSize);
    if ((this.y > height+(tileSize * 8)) || (this.y < -tileSize * 8)) {this.y = random(height / tileSize) * tileSize;}
	if ((this.x < ((window.innerWidth - 640) / 2) -3)) this.x+= this.tS * 2;
	if ((this.x > ((window.innerWidth - 640) / 2) +642)) this.x-= this.tS * 2;
	if ((this.y < ((window.innerHeight - 360) / 2))) this.y+= this.tU;
	if ((this.y > ((window.innerHeight - 360) / 2) +360)) this.y-= this.tU;		
}
  
  this.update = function() {
  fill(myHue, 100, 50, .7);
    rect(this.x, this.y, this.diameter, this.diameter);
  }
}

function mousePressed() {
  tileSize = random(0.3, 2);
  tiles = random(3000, 5500);

  for (var i = 0; i < tiles; i++) {
    var x = random(width / tileSize) * tileSize;
    var y = random(height / tileSize) * tileSize;
    var r = tileSize;
    var h = random(0, 360);
	var t = random(.5, 2);
	var u = random(.3, 3.8);
    Cells[i] = new Covid(x, y, r, h, t, u);
  }
  
}

        </script>

    </body>
</html>
