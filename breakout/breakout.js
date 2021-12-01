window.onload = function () {

    /* CANVAS PARAMETERS */

    let canvas = document.getElementById("myCanvas");

    // put fullscreen
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    // remove scrollbars
    document.body.style.overflow = 'hidden';

    // set to 2d context to use geometric form
    let ctx = canvas.getContext("2d");



    /*  PARAMETERS  */

    // ball inner position and speed
    let ball = {
        x : canvas.width / 2,
        y : canvas.height / 2,
        r : 20,

        vx : 0,
        vy : 5
    }

    // pad position and properties
    let pad = {
        wh : 200,
        ht : 20,
        x : function() { this.x = canvas.width/2 - this.wh/2; return this;},
        y : function() {this.y = canvas.height - this.ht*2; return this;}
    }.x().y();

/*     let pad.wh = 200;
    let pad.ht = 20; */
    //let pad.init = canvas.width / 2 - pad.wh / 2;
    //let pad.y = canvas.height - pad.ht * 2;

    // bricks position
    let bricks = [];

    // mouse
    document.addEventListener("mousemove", mouseMovePad, false);
    document.addEventListener("mousedown", function() {start = true}, false);

    // flag to allow the ball to be thrown
    let start = false;




    /*  DRAW FONCTIONS  */

    /**
     * Draw the ball
     */
    function drawBall() {
        // draw the ball
        ctx.beginPath();
        ctx.arc(ball.x, ball.y, ball.r, 0, 2 * Math.PI);
        ctx.fillStyle = "lightblue";
        ctx.fill();
        ctx.closePath();
    }

    /**
     * Draw rect
     */
    function drawBricks() {
        class Brick {
            constructor(x, y) {
                this.x = x;
                this.y = y;
                this.width = 100;
                this.height = 50;
            }
        }

        let yBrick = 10;

        //let brick1 = new Brick(500, yBrick);
        //let brick2 = new Brick(1000, yBrick);

        ctx.beginPath();
        ctx.fillStyle = "#ae8964";

        for(let i=0; i<2; i++) {
            
            let brick = new Brick(500 + 500*i, yBrick);
            bricks.push(brick);
            ctx.rect(brick.x, brick.y, brick.width, brick.height);
            ctx.fill();
        }

        ctx.closePath();
    }

    /**
     * Draw pad
     */
    function drawPad() {
        ctx.beginPath();
        ctx.rect(pad.init, pad.y, pad.wh, pad.ht);
        ctx.fillStyle = "#ae8964";
        ctx.fill();
        ctx.closePath();
    }




   /*  CONTROL FONCTIONS  */

    /**
     * Control paddle with a mouse
     * @param {*} event 
     */
    function mouseMovePad(event) {
        //let xPad = event.clientX;
        if (event.clientX > pad.wh / 2 && event.clientX < canvas.width - pad.wh / 2) {
            pad.init = event.clientX - pad.wh / 2
        }
    }

    /**
     * Move the ball with its speed
     */
    function moveBall() {
        ball.x += ball.vx;
        ball.y -= ball.vy;
    }



    /**
     * Throw ball with a click button
     */
    function throwBall() {
        if (start) {
            moveBall();
        }
        else {
            ball.x = pad.init + pad.wh/2;
            ball.y = pad.y - ball.r;
        }
    }



    /**
     * make a collision between bricks and ball
     */
    function collide() {
        for(let i=0; i<bricks.length; i++) {
            findCollisionSide(i);
        }



        function findCollisionSide(i) {
            let edge = {
                x : ball.x,
                y : ball.y
            }

            
            if (ball.x < bricks[i].x) {
                edge.x = bricks[i].x;
            }
            else if (ball.x > (bricks[i].x + bricks[i].width)) {
                edge.x = bricks[i].x + bricks[i].width;
            }

            if (ball.y < bricks[i].y) {
                edge.y = bricks[i].y;
            }
            else if (ball.y > (bricks[i].y + bricks[i].height)) {
                edge.y = bricks[i].y + bricks[i].height;               
            }

            let distanceX = ball.x-edge.x;
            let distanceY = ball.y-edge.y;

            let distance = Math.sqrt(Math.pow((distanceX), 2) + Math.pow((distanceY), 2));

            if (distance <= ball.r) {
                console.log("touch");
            }
            else {
   
            }



        }
    }



   /*  RENDER FONCTION  */

    /**
     * Render all the drawing
     */
    function draw() {

        // refresh by clearing the window
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        throwBall();
        drawBall();
        drawBricks();
        drawPad();
        collide();
    }

    setInterval(draw, 10);

/*
ATTENTION A UTILISER  

Window.requestAnimationFrame()
*/

}











