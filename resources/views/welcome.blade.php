<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* full page background */
        html {
            background: #3E5E5D;
        }

        /* batman animation - trembling in air */
        .batman {
            -webkit-animation-duration: 2s;
            -moz-animation-duration: 2s;
            -ms-animation-duration: 2s;
            -o-animation-duration: 2s;
            animation-duration: 2s;
            -webkit-animation-name: tremble;
            -moz-animation-name: tremble;
            -ms-animation-name: tremble;
            -o-animation-name: tremble;
            animation-name: tremble;
            -webkit-animation-iteration-count: infinite;
            -moz-animation-iteration-count: infinite;
            -ms-animation-iteration-count: infinite;
            -o-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-direction: alternate;
            -moz-animation-direction: alternate;
            -ms-animation-direction: alternate;
            -o-animation-direction: alternate;
            animation-direction: alternate;
            margin: 0 auto;
            margin-top: 30px;
            width: 960px;
        }

        @keyframes tremble {
            from {
                margin-top: 30px;
                transform: rotate(-3deg);
                -webkit-transform: rotate(-3deg);
            }

            to {
                transform: rotate(3deg);
                -webkit-transform: rotate(3deg);
                margin-top: 40px;
            }
        }

        @-webkit-keyframes tremble {
            from {
                margin-top: 30px;
                transform: rotate(-3deg);
                -webkit-transform: rotate(-3deg);
            }

            to {
                transform: rotate(3deg);
                -webkit-transform: rotate(3deg);
                margin-top: 40px;
            }
        }

        .head {
            margin: 0 auto;
            width: 125px;
        }

        .left-ear {
            border-bottom: 70px solid #000;
            border-left: 5px solid transparent;
            border-right: 30px solid transparent;
            display: inline;
            float: left;
            height: 0;
            width: 0;
        }

        .right-ear {
            border-bottom: 70px solid #000;
            border-left: 30px solid transparent;
            border-right: 5px solid transparent;
            float: right;
            height: 0;
            width: 0;
        }

        .mask {
            background: #000;
            -webkit-border-radius: 0 0 10px 10px;
            -moz-border-radius: 0 0 10px 10px;
            border-radius: 0 0 10px 10px;
            clear: both;
            height: 130px;
            width: 125px;
        }

        .neck {
            background: #000;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            height: 8px;
            margin: 0 auto;
            width: 80px;
        }

        .mouth {
            position: relative;
            height: auto;
            border-top: 35px solid #2B2B2B;
            border-left: 5px solid transparent;
            -webkit-border-radius: 3px 3px;
            -moz-border-radius: 3px 3px;
            border-radius: 3px 3px;
            border-right: 5px solid transparent;
            margin: 0 auto;
            top: 80px;
            width: 70px;
        }

        .nose {
            border-left: 15px solid transparent;
            border-top: 12px solid #000;
            border-right: 15px solid transparent;
            height: 0;
            margin-left: 30%;
            margin-top: -40px;
            position: absolute;
            width: 0;
        }

        .left-eye {
            border-left: 22px solid transparent;
            border-right: 22px solid transparent;
            border-top: 15px solid #fefefe;
            height: 0;
            margin-top: 45px;
            margin-left: 12px;
            position: absolute;
            width: 0;
        }

        .right-eye {
            border-left: 22px solid transparent;
            border-right: 22px solid transparent;
            border-top: 15px solid #fefefe;
            width: 0;
            height: 0;
            margin-left: 70px;
            margin-top: 45px;
            position: absolute;
        }

        .upper-lip {
            -webkit-box-shadow: 0px 2px 0px #000;
            -moz-box-shadow: 0px 2px 0px #000;
            box-shadow: 0px 2px 0px #000;
            height: 5px;
            margin-top: -25px;
            margin-left: 15px;
            width: 40px;
        }

        .lower-lip {
            -webkit-box-shadow: 0px 2px 0px #000;
            -moz-box-shadow: 0px 2px 0px #000;
            box-shadow: 0px 2px 0px #000;
            height: 5px;
            margin-top: 0px;
            margin-left: 25px;
            width: 20px;
        }

        .torso {
            border-bottom: 125px solid #000;
            border-left: 12px solid transparent;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            border-right: 12px solid transparent;
            height: 0;
            width: 130px;
            margin: 0 auto;
        }

        .chin {
            background: #000;
            height: 7px;
            margin-left: 20px;
            margin-top: 12px;
            width: 30px;
        }

        .waist {
            background: #0F0F0F;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            height: 27px;
            margin: 0 auto;
            position: relative;
            width: 150px;
        }

        .legs {
            margin: 0 auto;
            width: 155px;
        }

        .left-leg {
            background: #000;
            height: 80px;
            float: left;
            margin-left: 2px;
            width: 68px;
        }

        .croch {
            background: #000;
            float: left;
            height: 30px;
            width: 15px;
        }

        .right-leg {
            background: #000;
            float: right;
            height: 80px;
            margin-right: 2px;
            width: 68px;
        }

        .feet {
            margin: 0 auto;
            width: 160px;
        }

        .left-foot {
            background: #000;
            float: left;
            height: 37px;
            width: 73px;
        }

        .right-foot {
            background: #000;
            float: right;
            height: 37px;
            width: 72px;
        }

        .left-arm {
            background: #000;
            height: 45px;
            margin-left: 320px;
            margin-top: -150px;
            position: absolute;
            width: 105px;
            z-index: -2;
        }

        .right-arm {
            background: #000;
            height: 45px;
            margin-left: 540px;
            margin-top: -150px;
            position: absolute;
            width: 105px;
            z-index: -2;
        }

        /* batman wings - making them flap when flyind due to air resistance */
        .wings {
            -webkit-animation-direction: alternate;
            -moz-animation-direction: alternate;
            -ms-animation-direction: alternate;
            -o-animation-direction: alternate;
            animation-direction: alternate;
            -webkit-animation-duration: .4s;
            -moz-animation-duration: .4s;
            -ms-animation-duration: .4s;
            -o-animation-duration: .4s;
            animation-duration: .4s;
            -webkit-animation-iteration-count: infinite;
            -moz-animation-iteration-count: infinite;
            -ms-animation-iteration-count: infinite;
            -o-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-name: flapping;
            -moz-animation-name: flapping;
            -ms-animation-name: flapping;
            -o-animation-name: flapping;
            animation-name: flapping;
            border-top: 140px solid #EB1E1E;
            border-left: 225px solid transparent;
            border-right: 225px solid transparent;
            margin-left: 260px;
            margin-top: -115px;
            width: 0;
            height: 0;
            position: absolute;
            z-index: -3;
        }

        @keyframes flapping {
            from {
                border-top: 140px solid #EB1E1E;
            }

            to {
                border-top: 130px solid #EB1E1E;
            }
        }

        @-webkit-keyframes flapping {
            from {
                border-top: 140px solid #EB1E1E;
            }

            to {
                border-top: 130px solid #EB1E1E;
            }
        }

        .left-hand {
            background: #000;
            -webkit-border-radius: 70px;
            -moz-border-radius: 70px;
            border-radius: 70px;
            margin-top: -152px;
            margin-left: 280px;
            height: 50px;
            position: absolute;
            width: 50px;
        }

        .right-hand {
            background: #000;
            -webkit-border-radius: 70px;
            -moz-border-radius: 70px;
            border-radius: 70px;
            margin-top: -152px;
            margin-left: 635px;
            height: 50px;
            position: absolute;
            width: 50px;
        }

        /* batman chest logo */
        .bat-body {
            border-left: 30px solid transparent;
            border-right: 30px solid transparent;
            border-top: 30px solid #EB1E1E;
            height: 0;
            position: absolute;
            width: 0;
        }

        .left-bat-ear {
            border-bottom: 15px solid #EB1E1E;
            border-right: 15px solid transparent;
            height: 0;
            margin-left: 22px;
            margin-top: -10px;
            position: absolute;
            width: 0;
        }

        .left-bat-wing-1 {
            border-bottom: 15px solid #EB1E1E;
            border-right: 15px solid transparent;
            height: 0;
            margin-left: 0px;
            margin-top: -15px;
            position: absolute;
            width: 0;
        }

        .right-bat-ear {
            border-bottom: 15px solid #EB1E1E;
            border-left: 15px solid transparent;
            height: 0;
            margin-left: 22px;
            margin-top: -10px;
            position: absolute;
            width: 0;
        }

        .right-bat-wing-1 {
            border-bottom: 15px solid #EB1E1E;
            border-left: 15px solid transparent;
            height: 0;
            margin-left: 45px;
            margin-top: -15px;
            position: absolute;
            width: 0;
        }

        .left-bat-wing-2 {
            border-top: 6px solid #EB1E1E;
            border-left: 6px solid transparent;
            height: 0;
            margin-left: -6px;
            margin-top: -15px;
            position: absolute;
            width: 0;
        }

        .right-bat-wing-2 {
            border-top: 6px solid #EB1E1E;
            border-right: 6px solid transparent;
            height: 0;
            margin-left: 60px;
            margin-top: -15px;
            position: absolute;
            width: 0;
        }

        /* batman belt */
        .emblem {
            position: absolute;
            margin-top: -100px;
            margin-left: 450px;
        }

        .belt {
            margin: 0 auto;
            position: absolute;
        }

        .buckle {
            background: #404040;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            border-radius: 50px;
            height: 32px;
            margin-top: -30px;
            margin-left: 465px;
            width: 32px;
        }

        .orb {
            background: #EB1E1E;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            border-radius: 50px;
            height: 23px;
            margin-top: -27px;
            margin-left: 470px;
            width: 23px;
        }

        .cartridge-1 {
            background: #404040;
            height: 27px;
            margin-top: -25px;
            margin-left: 420px;
            position: absolute;
            width: 10px;
        }

        .cartridge-2 {
            background: #404040;
            height: 27px;
            margin-top: -25px;
            margin-left: 440px;
            position: absolute;
            width: 10px;
        }

        .cartridge-3 {
            background: #404040;
            height: 27px;
            margin-top: -25px;
            margin-left: 510px;
            position: absolute;
            width: 10px;
        }

        .cartridge-4 {
            background: #404040;
            margin-top: -25px;
            margin-left: 530px;
            position: absolute;
            height: 27px;
            width: 10px;
        }

        /* batman arm spikes */
        .left-spike-1 {
            border-top: 15px solid #000;
            border-left: 15px solid transparent;
            height: 0;
            margin-left: 325px;
            margin-top: -105px;
            position: absolute;
            width: 0;
        }

        .left-spike-2 {
            border-top: 15px solid #000;
            border-left: 15px solid transparent;
            height: 0;
            margin-left: 340px;
            margin-top: -105px;
            position: absolute;
            width: 0;
        }

        .left-spike-3 {
            border-top: 15px solid #000;
            border-left: 15px solid transparent;
            height: 0;
            margin-left: 355px;
            margin-top: -105px;
            position: absolute;
            width: 0;
        }

        .right-spike-1 {
            border-top: 15px solid #000;
            border-right: 15px solid transparent;
            height: 0;
            margin-left: 625px;
            margin-top: -105px;
            width: 0;
            position: absolute;
        }

        .right-spike-2 {
            border-top: 15px solid #000;
            border-right: 15px solid transparent;
            height: 0;
            margin-left: 610px;
            margin-top: -105px;
            position: absolute;
            width: 0;
        }

        .right-spike-3 {
            border-top: 15px solid #000;
            border-right: 15px solid transparent;
            height: 0;
            margin-left: 595px;
            margin-top: -105px;
            position: absolute;
            width: 0;
        }

        /* batman propulsion smoke */
        .propulsion {
            margin: 0 auto;
        }

        .left-jet {
            -webkit-animation-duration: .8s;
            -moz-animation-duration: .8s;
            -ms-animation-duration: .8s;
            -o-animation-duration: .8s;
            animation-duration: .8s;
            -webkit-animation-name: flight;
            -moz-animation-name: flight;
            -ms-animation-name: flight;
            -o-animation-name: flight;
            animation-name: flight;
            -webkit-animation-iteration-count: infinite;
            -moz-animation-iteration-count: infinite;
            -ms-animation-iteration-count: infinite;
            -o-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-direction: alternate;
            -moz-animation-direction: alternate;
            -ms-animation-direction: alternate;
            -o-animation-direction: alternate;
            animation-direction: alternate;
            background-color: #fff;
            background: -webkit-gradient(linear, 0 50%, 100% 50%, from(rgba(255, 255, 255, 0)), to(rgba(255, 255, 255, 1)));
            background: -webkit-linear-gradient(0deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1));
            background: -moz-linear-gradient(0deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1));
            background: -o-linear-gradient(0deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1));
            background: linear-gradient(0deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1));
            -webkit-border-radius: 75% 75% 100% 100% / 30% 30% 150% 150%;
            -moz-border-radius: 75% 75% 100% 100% / 30% 30% 150% 150%;
            border-radius: 75% 75% 100% 100% / 30% 30% 150% 150%;
            display: block;
            float: left;
            height: 200px;
            margin-left: 410px;
            margin-top: -15px;
            opacity: .1;
            position: relative;
            width: 55px;
            z-index: -10;
        }

        .right-jet {
            -webkit-animation-duration: .9s;
            -moz-animation-duration: .9s;
            -ms-animation-duration: .9s;
            -o-animation-duration: .9s;
            animation-duration: .9s;
            -webkit-animation-name: flight;
            -moz-animation-name: flight;
            -ms-animation-name: flight;
            -o-animation-name: flight;
            animation-name: flight;
            -webkit-animation-iteration-count: infinite;
            -moz-animation-iteration-count: infinite;
            -ms-animation-iteration-count: infinite;
            -o-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-direction: alternate;
            -moz-animation-direction: alternate;
            -ms-animation-direction: alternate;
            -o-animation-direction: alternate;
            animation-direction: alternate;
            background-color: #fff;
            background: -webkit-gradient(linear, 0 50%, 100% 50%, from(rgba(255, 255, 255, 0)), to(rgba(255, 255, 255, 1)));
            background: -webkit-linear-gradient(0deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1));
            background: -moz-linear-gradient(0deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1));
            background: -o-linear-gradient(0deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1));
            background: linear-gradient(0deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1));
            -webkit-border-radius: 75% 75% 100% 100% / 30% 30% 150% 150%;
            -moz-border-radius: 75% 75% 100% 100% / 30% 30% 150% 150%;
            border-radius: 75% 75% 100% 100% / 30% 30% 150% 150%;
            display: block;
            float: right;
            height: 200px;
            margin-right: 410px;
            margin-top: -15px;
            opacity: .1;
            position: relative;
            width: 55px;
            z-index: -40;
        }

        /* animating the smoke opacity */
        @keyframes flight {
            from {
                opacity: .1;
            }

            to {
                opacity: .3;
            }
        }

        @-webkit-keyframes flight {
            from {
                opacity: .1;
            }

            to {
                opacity: .3;
            }
        }

        /* the clouds */
        .cloud-1 {
            -webkit-animation-delay: 0;
            -moz-animation-delay: 0;
            -ms-animation-delay: 0;
            -o-animation-delay: 0;
            animation-delay: 0;
            -webkit-animation-duration: 3s;
            -moz-animation-duration: 3s;
            -ms-animation-duration: 3s;
            -o-animation-duration: 3s;
            animation-duration: 3s;
            -webkit-animation-name: cloud-1;
            -moz-animation-name: cloud-1;
            -ms-animation-name: cloud-1;
            -o-animation-name: cloud-1;
            animation-name: cloud-1;
            -webkit-animation-iteration-count: infinite;
            -moz-animation-iteration-count: infinite;
            -ms-animation-iteration-count: infinite;
            -o-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-timing-function: ease-in-out;
            -moz-animation-timing-function: ease-in-out;
            -ms-animation-timing-function: ease-in-out;
            -o-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
            margin: 0 auto;
            margin-left: 25%;
            margin-top: -600px;
            opacity: 0;
            position: absolute;
            z-index: -11;
        }

        .cloud-2 {
            -webkit-animation-delay: 0;
            -moz-animation-delay: 0;
            -ms-animation-delay: 0;
            -o-animation-delay: 0;
            animation-delay: 0;
            -webkit-animation-duration: 3s;
            -moz-animation-duration: 3s;
            -ms-animation-duration: 3s;
            -o-animation-duration: 3s;
            animation-duration: 3s;
            -webkit-animation-name: cloud-2;
            -moz-animation-name: cloud-2;
            -ms-animation-name: cloud-2;
            -o-animation-name: cloud-2;
            animation-name: cloud-2;
            -webkit-animation-iteration-count: infinite;
            -moz-animation-iteration-count: infinite;
            -ms-animation-iteration-count: infinite;
            -o-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-timing-function: ease-in-out;
            -moz-animation-timing-function: ease-in-out;
            -ms-animation-timing-function: ease-in-out;
            -o-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
            margin: 0 auto;
            margin-left: 50%;
            margin-top: -500px;
            opacity: .5;
        }

        .cloud-3 {
            -webkit-animation-delay: 0;
            -moz-animation-delay: 0;
            -ms-animation-delay: 0;
            -o-animation-delay: 0;
            animation-delay: 0;
            -webkit-animation-duration: 3s;
            -moz-animation-duration: 3s;
            -ms-animation-duration: 3s;
            -o-animation-duration: 3s;
            animation-duration: 3s;
            -webkit-animation-name: cloud-3;
            -moz-animation-name: cloud-3;
            -ms-animation-name: cloud-3;
            -o-animation-name: cloud-3;
            animation-name: cloud-3;
            -webkit-animation-iteration-count: infinite;
            -moz-animation-iteration-count: infinite;
            -ms-animation-iteration-count: infinite;
            -o-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-timing-function: ease-in-out;
            -moz-animation-timing-function: ease-in-out;
            -ms-animation-timing-function: ease-in-out;
            -o-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
            margin: 0 auto;
            margin-left: 70%;
            margin-top: -300px;
            opacity: .5;
        }

        /* animating the clouds */
        @keyframes cloud-1 {
            from {
                margin-top: -600px;
                margin-left: 20%;
                opacity: 0;
            }

            45% {
                opacity: .1;
            }

            70% {
                opacity: 0;
            }

            to {
                margin-top: 30%;
                margin-left: 10%;
                opacity: 0;
            }
        }

        @keyframes cloud-2 {
            from {
                margin-top: -800px;
                opacity: 0;
            }

            45% {
                opacity: .1;
            }

            to {
                margin-top: 30%;
                margin-left: 50%;
                opacity: 0;
            }
        }

        @keyframes cloud-3 {
            from {
                margin-top: -1100px;
                opacity: 0;
            }

            35% {
                opacity: .1;
            }

            80% {
                opacity: 0;
            }

            to {
                margin-top: 30%;
                margin-left: 75%;
                opacity: 0;
            }
        }

        @-webkit-keyframes cloud-1 {
            from {
                margin-top: -600px;
                margin-left: 20%;
                opacity: 0;
            }

            45% {
                opacity: .1;
            }

            70% {
                opacity: 0;
            }

            to {
                margin-top: 30%;
                margin-left: 10%;
                opacity: 0;
            }
        }

        @-webkit-keyframes cloud-2 {
            from {
                margin-top: -800px;
                opacity: 0;
            }

            45% {
                opacity: .1;
            }

            to {
                margin-top: 30%;
                margin-left: 50%;
                opacity: 0;
            }
        }

        @-webkit-keyframes cloud-3 {
            from {
                margin-top: -1100px;
                opacity: 0;
            }

            35% {
                opacity: .1;
            }

            80% {
                opacity: 0;
            }

            to {
                margin-top: 30%;
                margin-left: 75%;
                opacity: 0;
            }
        }

        .puff-1 {
            background: #fff;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            border-radius: 50px;
            height: 100px;
            position: absolute;
            width: 100px;
        }

        .puff-2 {
            background: #fff;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            border-radius: 50px;
            height: 100px;
            margin-left: 75px;
            position: absolute;
            width: 100px;
        }

        .puff-3 {
            background: #fff;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            border-radius: 50px;
            height: 100px;
            margin-left: -25px;
            margin-top: 30px;
            position: absolute;
            width: 100px;
        }

        .puff-4 {
            background: #fff;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            border-radius: 50px;
            height: 100px;
            margin-left: 50px;
            margin-top: 30px;
            position: absolute;
            width: 100px;
        }

        .puff-5 {
            background: #fff;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            border-radius: 50px;
            height: 100px;
            margin-left: 125px;
            margin-top: 30px;
            position: absolute;
            width: 100px;
        }
    </style>
</head>

<body>
    <br><br>
    <h2 style="text-align: center;">“THE NIGHT IS DARKEST JUST BEFORE THE DAWN. AND I PROMISE YOU, THE DAWN IS COMING.” – BATMAN</h2>
    <br>

    <div class="batman">
        <!-- start of batman head -->
        <div class="head">
            <div class="left-ear"></div>
            <div class="right-ear"></div>
            <div class="mask">
                <div class="left-eye"></div>
                <div class="right-eye"></div>
                <div class="mouth">
                    <div class="nose"></div>
                    <div class="upper-lip"></div>
                    <div class="lower-lip"></div>
                    <div class="chin">
                    </div>
                </div>
            </div>
            <div class="neck">
            </div>
        </div>
        <!-- end of batman head -->

        <!-- start of batman body -->
        <div class="full-body">
            <div class="torso">
            </div>
            <div class="waist">
            </div>
            <div class="left-hand">
            </div>
            <div class="left-arm">
            </div>
            <div class="right-arm">
            </div>
            <div class="right-hand">
            </div>
            <!-- batman arm spikes -->
            <div class="spikes">
                <div class="left-spike-1">
                </div>
                <div class="left-spike-2">
                </div>
                <div class="left-spike-3">
                </div>
                <div class="right-spike-1">
                </div>
                <div class="right-spike-2">
                </div>
                <div class="right-spike-3">
                </div>
            </div>
            <div class="legs">
                <div class="left-leg">
                </div>
                <div class="croch">
                </div>
                <div class="right-leg">
                </div>
            </div>
            <div class="feet">
                <div class="left-foot">
                </div>
                <div class="right-foot">
                </div>
            </div>
            <div class="wings">
            </div>
            <!-- the batman beyond logo (sort of) -->
            <div class="emblem">
                <div class="left-bat-ear">
                </div>
                <div class="right-bat-ear">
                </div>
                <div class="left-bat-wing-1">
                </div>
                <div class="right-bat-wing-1">
                </div>
                <div class="left-bat-wing-2">
                </div>
                <div class="right-bat-wing-2">
                </div>
                <div class="bat-body">
                </div>
            </div>
            <!-- batman's belt buckle and cartridges-->
            <div class="belt">
                <div class="buckle">
                </div>
                <div class="orb">
                </div>
                <div class="cartridge-1">
                </div>
                <div class="cartridge-2">
                </div>
                <div class="cartridge-3">
                </div>
                <div class="cartridge-4">
                </div>
            </div>
            <!-- propulsion smoke -->
            <div class="propulsion">
                <div class="left-jet">
                </div>
                <div class="right-jet">
                </div>
            </div>
        </div>
        <!-- end of batman body -->

        <!-- start of clouds -->
        <div class="cloud-1">
            <!-- each cloud is made 5 circes (puffs) -->
            <div class="puff-1">
            </div>
            <div class="puff-2">
            </div>
            <div class="puff-3">
            </div>
            <div class="puff-4">
            </div>
            <div class="puff-5">
            </div>
        </div>
        <div class="cloud-2">
            <div class="puff-1">
            </div>
            <div class="puff-2">
            </div>
            <div class="puff-3">
            </div>
            <div class="puff-4">
            </div>
            <div class="puff-5">
            </div>
        </div>
        <div class="cloud-3">
            <div class="puff-1">
            </div>
            <div class="puff-2">
            </div>
            <div class="puff-3">
            </div>
            <div class="puff-4">
            </div>
            <div class="puff-5">
            </div>
        </div>
        <!-- end of clouds -->

    </div>
</body>

</html>
