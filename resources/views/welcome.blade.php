<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Count Down 2021</title>
    <style>
      body {
        font: normal 13px/20px Arial, Helvetica, sans-serif;
        word-wrap: break-word;
        color: #eee;
        background: #da251c;
        margin: 0;
        oveverflow: hidden;
      }
      #countdown {
        width: 465px;
        height: 122px;
        text-align: center;
        background: #222;
        background-image: -webkit-linear-gradient(top, #222, #333, #333, #222);
        background-image: -moz-linear-gradient(top, #222, #333, #333, #222);
        background-image: -ms-linear-gradient(top, #222, #333, #333, #222);
        background-image: -o-linear-gradient(top, #222, #333, #333, #222);
        border: 1px solid #111;
        border-radius: 5px;
        box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.6);
        margin: auto;
        padding: 24px 0;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
      }

      #countdown:before {
        content: "";
        width: 8px;
        height: 70px;
        background: #444;
        background-image: -webkit-linear-gradient(top, #555, #444, #444, #555);
        background-image: -moz-linear-gradient(top, #555, #444, #444, #555);
        background-image: -ms-linear-gradient(top, #555, #444, #444, #555);
        background-image: -o-linear-gradient(top, #555, #444, #444, #555);
        border: 1px solid #111;
        border-top-left-radius: 6px;
        border-bottom-left-radius: 6px;
        display: block;
        position: absolute;
        top: 48px;
        left: -10px;
      }

      #countdown:after {
        content: "";
        width: 8px;
        height: 70px;
        background: #444;
        background-image: -webkit-linear-gradient(top, #555, #444, #444, #555);
        background-image: -moz-linear-gradient(top, #555, #444, #444, #555);
        background-image: -ms-linear-gradient(top, #555, #444, #444, #555);
        background-image: -o-linear-gradient(top, #555, #444, #444, #555);
        border: 1px solid #111;
        border-top-right-radius: 6px;
        border-bottom-right-radius: 6px;
        display: block;
        position: absolute;
        top: 48px;
        right: -10px;
      }

      #countdown #tiles {
        position: relative;
        z-index: 1;
      }

      #countdown #tiles > span {
        width: 92px;
        max-width: 92px;
        font: bold 48px "Droid Sans", Arial, sans-serif;
        text-align: center;
        color: #111;
        background-color: #ddd;
        background-image: -webkit-linear-gradient(top, #bbb, #eee);
        background-image: -moz-linear-gradient(top, #bbb, #eee);
        background-image: -ms-linear-gradient(top, #bbb, #eee);
        background-image: -o-linear-gradient(top, #bbb, #eee);
        border-top: 1px solid #fff;
        border-radius: 3px;
        box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.7);
        margin: 0 7px;
        padding: 18px 0;
        display: inline-block;
        position: relative;
      }

      #countdown #tiles > span:before {
        content: "";
        width: 100%;
        height: 13px;
        background: #111;
        display: block;
        padding: 0 3px;
        position: absolute;
        top: 41%;
        left: -3px;
        z-index: -1;
      }

      #countdown #tiles > span:after {
        content: "";
        width: 100%;
        height: 1px;
        background: #eee;
        border-top: 1px solid #333;
        display: block;
        position: absolute;
        top: 48%;
        left: 0;
      }

      #countdown .labels {
        width: 100%;
        height: 25px;
        text-align: center;
        position: absolute;
        bottom: 8px;
      }

      #countdown .labels li {
        width: 102px;
        font: bold 15px "Droid Sans", Arial, sans-serif;
        color: #f47321;
        text-shadow: 1px 1px 0px #000;
        text-align: center;
        text-transform: uppercase;
        display: inline-block;
      }
      canvas {
        cursor: crosshair;
        display: block;
      }
      /*  */
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Abril Fatface", serif;
      }

      section {
        position: absolute;
        top: 0;
        right: 50%;
        display: none;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: rgb(15, 9, 9);
      }

      /*section::before
      {
        content: '';
        position: absolute;
        width: 70vw;
        height: 70vh;
        border: 5vw solid rgb(234, 17, 11);
        border-radius: 50%;
        box-shadow: 0 0 0 1vw rgb(15, 9, 9),
                    0 0 0 1.3vw rgb(222, 221, 221);
      }*/

      h1 {
        position: absolute;
        font-size: 3vw;
        color: rgb(24, 71, 133);
        text-align: center;
        line-height: 2em;
        z-index: 10;
        transform: skewY(-7deg);
        text-shadow: 2px 2px 0 #222, 3px 3px 0 #333, 4px 4px 0 #444,
          5px 5px 0 #555, 6px 6px 0 #555;
        animation: floating 5s ease-in infinite;
      }

      h1 span {
        font-size: 11vw;
      }

      @keyframes floating {
        0%,
        100% {
          transform: skewY(-7deg) translate(0, -20px);
        }

        50% {
          transform: skewY(-7deg) translate(0, 20px);
        }
      }
      /*  */
    </style>
  </head>
  <body>
    <div id="countdown">
      <div id="tiles"></div>
      <div class="labels">
        <li>Days</li>
        <li>Hours</li>
        <li>Mins</li>
        <li>Secs</li>
      </div>
    </div>
    <canvas id="canvas">Canvas is not supported in your browser.</canvas>
    <section class="text-content" id="text-content">
      <h1>
        Happy New Year
        <br />
        <span>2021</span>
      </h1>
    </section>
  </body>
  <script>
    var target_date = new Date().getTime() + 1000 * 3600 * 7; // set the countdown date
    var today = new Date();
    var tomorrow = new Date(today);
    tomorrow.setDate(tomorrow.getDate() + 1);
    tomorrow.setHours(0, 0, 0);
    var tomorrow_date = tomorrow.getTime();
    // var tomorrow_date = new Date().getDate + 1;
    var days, hours, minutes, seconds; // variables for time units

    var countdown = document.getElementById("tiles"); // get tag element

    getCountdown();

    setInterval(function () {
      getCountdown();
    }, 1000);

    function getCountdown() {
      // find the amount of "seconds" between now and target
      console.log("tomorrow: ", tomorrow_date);
      var current_date = new Date().getTime();
      // var current_date = tomorrow_date;
      var seconds_left = (tomorrow_date - current_date) / 1000;
      days = pad(parseInt(seconds_left / 86400));
      seconds_left = seconds_left % 86400;

      hours = pad(parseInt(seconds_left / 3600));
      seconds_left = seconds_left % 3600;

      minutes = pad(parseInt(seconds_left / 60));
      seconds = pad(parseInt(seconds_left % 60));
      var countdown_c = document.getElementById("countdown");
      var countdown_t = document.getElementById("text-content");
      var tet_dong_day = new Audio('tet_dong_day.mp3');
      tet_dong_day.setAttribute('crossorigin', 'anonymous');

      if (hours ==0 && minutes ==0 && seconds == 0) {
        countdown_c.style.display = "none";
        countdown_t.style.display = "flex";
        tet_dong_day.play();
      }

      // format countdown string + set tag value
      countdown.innerHTML =
        "<span>" +
        days +
        "</span><span>" +
        hours +
        "</span><span>" +
        minutes +
        "</span><span>" +
        seconds +
        "</span>";
    }

    function pad(n) {
      return (n < 10 ? "0" : "") + n;
    }

    // when animating on canvas, it is best to use requestAnimationFrame instead of setTimeout or setInterval
    // not supported in all browsers though and sometimes needs a prefix, so we need a shim
    window.requestAnimFrame = (function () {
      return (
        window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        function (callback) {
          window.setTimeout(callback, 1000 / 60);
        }
      );
    })();

    // now we will setup our basic variables for the demo
    var canvas = document.getElementById("canvas"),
      ctx = canvas.getContext("2d"),
      // full screen dimensions
      cw = window.innerWidth,
      ch = window.innerHeight,
      // firework collection
      fireworks = [],
      // particle collection
      particles = [],
      // starting hue
      hue = 120,
      // when launching fireworks with a click, too many get launched at once without a limiter, one launch per 5 loop ticks
      limiterTotal = 5,
      limiterTick = 0,
      // this will time the auto launches of fireworks, one launch per 80 loop ticks
      timerTotal = 80,
      timerTick = 0,
      mousedown = false,
      // mouse x coordinate,
      mx,
      // mouse y coordinate
      my;

    // set canvas dimensions
    canvas.width = cw;
    canvas.height = ch;

    // now we are going to setup our function placeholders for the entire demo

    // get a random number within a range
    function random(min, max) {
      return Math.random() * (max - min) + min;
    }

    // calculate the distance between two points
    function calculateDistance(p1x, p1y, p2x, p2y) {
      var xDistance = p1x - p2x,
        yDistance = p1y - p2y;
      return Math.sqrt(Math.pow(xDistance, 2) + Math.pow(yDistance, 2));
    }

    // create firework
    function Firework(sx, sy, tx, ty) {
      // actual coordinates
      this.x = sx;
      this.y = sy;
      // starting coordinates
      this.sx = sx;
      this.sy = sy;
      // target coordinates
      this.tx = tx;
      this.ty = ty;
      // distance from starting point to target
      this.distanceToTarget = calculateDistance(sx, sy, tx, ty);
      this.distanceTraveled = 0;
      // track the past coordinates of each firework to create a trail effect, increase the coordinate count to create more prominent trails
      this.coordinates = [];
      this.coordinateCount = 3;
      // populate initial coordinate collection with the current coordinates
      while (this.coordinateCount--) {
        this.coordinates.push([this.x, this.y]);
      }
      this.angle = Math.atan2(ty - sy, tx - sx);
      this.speed = 2;
      this.acceleration = 1.05;
      this.brightness = random(50, 70);
      // circle target indicator radius
      this.targetRadius = 1;
    }

    // update firework
    Firework.prototype.update = function (index) {
      // remove last item in coordinates array
      this.coordinates.pop();
      // add current coordinates to the start of the array
      this.coordinates.unshift([this.x, this.y]);

      // cycle the circle target indicator radius
      if (this.targetRadius < 8) {
        this.targetRadius += 0.3;
      } else {
        this.targetRadius = 1;
      }

      // speed up the firework
      this.speed *= this.acceleration;

      // get the current velocities based on angle and speed
      var vx = Math.cos(this.angle) * this.speed,
        vy = Math.sin(this.angle) * this.speed;
      // how far will the firework have traveled with velocities applied?
      this.distanceTraveled = calculateDistance(
        this.sx,
        this.sy,
        this.x + vx,
        this.y + vy
      );

      // if the distance traveled, including velocities, is greater than the initial distance to the target, then the target has been reached
      if (this.distanceTraveled >= this.distanceToTarget) {
        createParticles(this.tx, this.ty);
        // remove the firework, use the index passed into the update function to determine which to remove
        fireworks.splice(index, 1);
      } else {
        // target not reached, keep traveling
        this.x += vx;
        this.y += vy;
      }
    };

    // draw firework
    Firework.prototype.draw = function () {
      ctx.beginPath();
      // move to the last tracked coordinate in the set, then draw a line to the current x and y
      ctx.moveTo(
        this.coordinates[this.coordinates.length - 1][0],
        this.coordinates[this.coordinates.length - 1][1]
      );
      ctx.lineTo(this.x, this.y);
      ctx.strokeStyle = "hsl(" + hue + ", 100%, " + this.brightness + "%)";
      ctx.stroke();

      ctx.beginPath();
      // draw the target for this firework with a pulsing circle
      ctx.arc(this.tx, this.ty, this.targetRadius, 0, Math.PI * 2);
      ctx.stroke();
    };

    // create particle
    function Particle(x, y) {
      this.x = x;
      this.y = y;
      // track the past coordinates of each particle to create a trail effect, increase the coordinate count to create more prominent trails
      this.coordinates = [];
      this.coordinateCount = 5;
      while (this.coordinateCount--) {
        this.coordinates.push([this.x, this.y]);
      }
      // set a random angle in all possible directions, in radians
      this.angle = random(0, Math.PI * 2);
      this.speed = random(1, 10);
      // friction will slow the particle down
      this.friction = 0.95;
      // gravity will be applied and pull the particle down
      this.gravity = 1;
      // set the hue to a random number +-50 of the overall hue variable
      this.hue = random(hue - 50, hue + 50);
      this.brightness = random(50, 80);
      this.alpha = 1;
      // set how fast the particle fades out
      this.decay = random(0.015, 0.03);
    }

    // update particle
    Particle.prototype.update = function (index) {
      // remove last item in coordinates array
      this.coordinates.pop();
      // add current coordinates to the start of the array
      this.coordinates.unshift([this.x, this.y]);
      // slow down the particle
      this.speed *= this.friction;
      // apply velocity
      this.x += Math.cos(this.angle) * this.speed;
      this.y += Math.sin(this.angle) * this.speed + this.gravity;
      // fade out the particle
      this.alpha -= this.decay;

      // remove the particle once the alpha is low enough, based on the passed in index
      if (this.alpha <= this.decay) {
        particles.splice(index, 1);
      }
    };

    // draw particle
    Particle.prototype.draw = function () {
      ctx.beginPath();
      // move to the last tracked coordinates in the set, then draw a line to the current x and y
      ctx.moveTo(
        this.coordinates[this.coordinates.length - 1][0],
        this.coordinates[this.coordinates.length - 1][1]
      );
      ctx.lineTo(this.x, this.y);
      ctx.strokeStyle =
        "hsla(" +
        this.hue +
        ", 100%, " +
        this.brightness +
        "%, " +
        this.alpha +
        ")";
      ctx.stroke();
    };

    // create particle group/explosion
    function createParticles(x, y) {
      // increase the particle count for a bigger explosion, beware of the canvas performance hit with the increased particles though
      var particleCount = 30;
      while (particleCount--) {
        particles.push(new Particle(x, y));
      }
    }

    // main demo loop
    function loop() {
      // this function will run endlessly with requestAnimationFrame
      requestAnimFrame(loop);

      // increase the hue to get different colored fireworks over time
      //hue += 0.5;

      // create random color
      hue = random(0, 360);

      // normally, clearRect() would be used to clear the canvas
      // we want to create a trailing effect though
      // setting the composite operation to destination-out will allow us to clear the canvas at a specific opacity, rather than wiping it entirely
      ctx.globalCompositeOperation = "destination-out";
      // decrease the alpha property to create more prominent trails
      ctx.fillStyle = "rgba(0, 0, 0, 0.5)";
      ctx.fillRect(0, 0, cw, ch);
      // change the composite operation back to our main mode
      // lighter creates bright highlight points as the fireworks and particles overlap each other
      ctx.globalCompositeOperation = "lighter";

      // loop over each firework, draw it, update it
      var i = fireworks.length;
      while (i--) {
        fireworks[i].draw();
        fireworks[i].update(i);
      }

      // loop over each particle, draw it, update it
      var i = particles.length;
      while (i--) {
        particles[i].draw();
        particles[i].update(i);
      }

      // launch fireworks automatically to random coordinates, when the mouse isn't down
      if (timerTick >= timerTotal) {
        if (!mousedown) {
          // start the firework at the bottom middle of the screen, then set the random target coordinates, the random y coordinates will be set within the range of the top half of the screen
          fireworks.push(
            new Firework(cw / 2, ch, random(0, cw), random(0, ch / 2))
          );
          timerTick = 0;
        }
      } else {
        timerTick++;
      }

      // limit the rate at which fireworks get launched when mouse is down
      if (limiterTick >= limiterTotal) {
        if (mousedown) {
          // start the firework at the bottom middle of the screen, then set the current mouse coordinates as the target
          fireworks.push(new Firework(cw / 2, ch, mx, my));
          limiterTick = 0;
        }
      } else {
        limiterTick++;
      }
    }

    // mouse event bindings
    // update the mouse coordinates on mousemove
    canvas.addEventListener("mousemove", function (e) {
      mx = e.pageX - canvas.offsetLeft;
      my = e.pageY - canvas.offsetTop;
    });

    // toggle mousedown state and prevent canvas from being selected
    canvas.addEventListener("mousedown", function (e) {
      e.preventDefault();
      mousedown = true;
    });

    canvas.addEventListener("mouseup", function (e) {
      e.preventDefault();
      mousedown = false;
    });

    // once the window loads, we are ready for some fireworks!
    window.onload = loop;
  </script>
</html>
