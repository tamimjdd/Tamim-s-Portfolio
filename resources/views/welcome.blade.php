<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Competitive Programmer Website Developer | Tamim Wasif</title>

    <meta name="description" content="Tamim Wasif, a competitive programmer, Web Developer ">




    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Tamim Wasif</title>
    <style>
        *{
            margin: 0;
            box-sizing: border-box;
            outline: none;
        }
        body{
            background: black;
            overflow-x: hidden;
        }


        /* NAVBAR start */

        .navigation{
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            background: #e2b8aa;
            z-index: 200;
            clip-path: circle(20px at calc(100% - 45px) 45px);
            transition: all 300ms ease-in-out;
        }
        .navigation.active{
            clip-path: circle(75%);
        }
        .navigation .ham-btn{
            position: absolute;
            top: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: black;
            cursor: pointer;
        }
        .navigation .ham-btn span{
            position: absolute;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 50%;
            height:2px;
            background: #e2b8aa;
            transition: all 200ms ease-in-out;
        }

        .navigation .ham-btn span:nth-child(1){
            top:30%;
        }
        .navigation .ham-btn span:nth-child(2){
            top:50%;
        }
        .navigation .ham-btn span:nth-child(3){
            top:70%;
        }


        .navigation.active .ham-btn span:nth-child(1){
            top:50%;
            transform: translate(-50%,-50%) rotate(45deg);
        }
        .navigation.active .ham-btn span:nth-child(2){
            display: none;
        }
        .navigation.active .ham-btn span:nth-child(3){
            top:50%;
            transform: translate(-50%,-50%) rotate(-45deg);
        }

        .navigation .links{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            text-align: center;
        }

        .navigation .links a{
            position: relative;
            display: inline-block;
            margin: 20px 0px;
            font-size: 20px;
            font-weight: 600;
            text-decoration: none;
            color: #f5f5f5;
            text-transform: uppercase;
            letter-spacing: 5px;
        }

        .navigation .links a:after{
            content: "";
            position: absolute;
            left: 0px;
            bottom: -5px;
            height: 2px;
            width: 0%;
            background: tomato;
            transition: all 300ms ease-in-out;
        }

        .navigation .links a:hover:after{
            width: 100%;
        }

        /* NAVBAR ends */

        .overflow-hidden {
        overflow: hidden;
        }

        .drop-in {
        animation: drop-in 1.3s ease 300ms backwards;
        }

        .drop-in-2 {
        animation: drop-in 1.5s ease 600ms backwards;
        }

        @keyframes drop-in {
        from {
        opacity: 0;
        transform: translateY(-100px);
        }
        to {
        opacity: 1;
        transform: translate(0px);
        }
        }

        .mainlogo{
            position: fixed;
            width: 100px;
            height: 100px;
            opacity: 1!important;
            z-index: 200;
            padding-top: 25px;
            padding-left: 25px;
        }
        .common{
            padding: 70px 0;
            min-height: 100vh;
            position: relative;
        }
        .home-inner{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .home .text{
            mex-width: 250px;
            text-align: right;
            margin-right: 60px;
        }
        .home h5{
            font-size: 18px;
            text-transform: uppercase;
            position: relative;
        }
        .home h5::before{

            position: absolute;
            top: 50%;
            left: 0;
            width: 60px;
            height: 1px;
            background-color: #fff;
        }
        .shape img{
            position: absolute;
            width: 100%;
            z-index: -9;
        }
        .shape .shape1{
            right: -160px;
            top: -50px;
            width: 450px;
            opacity: .5;
            transform-origin: center;
            animation: shape linear 30s infinite reverse;
        }
        .shape .shape2{
            left: -70px;
            bottom: -50px;
            width: 450px;
            opacity: .5;
            transform-origin: center;
            animation: shape linear 30s infinite reverse;
        }
        @keyframes shape{
            100%{
                transform: rotate(360deg);
            }
        }
        .shape .shape3{
            top: 0;
            left: 0;
            width: 250px;
            opacity: .4;
            transform-origin: center;
            animation: shape3 linear 20s infinite;
            transform: translate(-200px,-100px) rotate(0deg);
        }
        @keyframes shape3{
            100%{
                transform: translate(1300px,600px) rotate(360deg);
            }
        }
        .shape .shape4{
            left: 0;
            bottom: 0;
            width: 150px;
            opacity: .4;
            transform-origin: center;
            animation: shape4 linear 20s infinite 1s;
            transform: translate(700px,80px) rotate(0deg);
        }
        @keyframes shape4{
            100%{
                transform: translate(1200px,-800px) rotate(360deg);
            }
        }
        .shape .shape5{
            left: 500px;
            top: 0;
            width: 100px;
            opacity: 0;
            transform-origin: center;
            animation: shape4 linear 25s infinite;
            transform: translate(0,-150px) rotate(0deg);
        }
        @keyframes shape5{
            100%{
                opacity: 1;
                transform: translate(0,800px) rotate(720deg);
            }
        }
        .main-loader {
        position: fixed;
        left: 0px;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('/images/logo.png') center no-repeat white;
        background-size:50px;
        }
        #svg-container {
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 10;
            margin: auto;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            width: 100%;
            height: 100%;
        }
        #svg-container2 {
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 10;
            margin: auto;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            width: 100%;
            height: 100%;
        }
        #svg-container3 {
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 10;
            margin: auto;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            width: 100%;
            height: 100%;
        }
        #mySVG {
            box-sizing: border-box;
            top: 75%;
            padding-left: 200px;
            height: 210px;
            width: 100%;
            margin:0 auto;
            overflow: visible;
            display: inline-block;
        }
        #some-space {
            background: black;
            color:#ffffff;
            height: 1000px;
            width: 100%;
            justify-content: center;
            align-items: center;
        }
        .quoteText{
            font-family: league_gothicregular!important;
            font-size: 30px;
            color: #fff;
            fill: #fff;
        }
        .secHead {
            font-family: inconsolata,monospace;
            font-size: 2rem;
            line-height: 1;
            padding: 3.75rem 0;
            padding-left: 96;
            position: relative;
            left: -3rem;
            color: red;
        }
        .secEnd{
            font-family: inconsolata,monospace;
            font-size: 2rem;
            line-height: 1;
            margin-top: -130;
            padding-left: 96;
            position: relative;
            left: -3rem;
            color: red;
        }
        .secHead:before {
            content: "<";
        }

        .secHead:before, .secHead:after {
            display: inline-block;
        }
        .secHead:after {
            content: ">";
        }
        .secHead:before, .secHead:after {
            display: inline-block;
        }
        .secEnd:after {
            content: "</" attr(data-text) ">";
            display: inline-block;
            font-family: inconsolata,monospace;
            font-size: 2rem;
            line-height: 1rem;
            margin-bottom: 3rem;
        }

        /* ul {
        list-style-type: none;
        padding: 0;
        border: 1px solid red;
        margin: 110;
        margin-top: 0;
        overflow: hidden;
        -webkit-backface-visibility: hidden;
        }

        ul li {
        padding: 8px 16px;
        border-bottom: 1px solid red;
        animation-duration: 5s;
            /* animation-delay: 3s; */
            animation-fill-mode: both;

        }*/

        ul li:last-child {
        border-bottom: none
        }

        ul,.new_section{
            list-style-type: none;
        padding: 0;
        margin: 200;
        margin-top: 0;
        overflow: hidden;
        -webkit-backface-visibility: hidden;
            }
            ul li{
                position: relative;
                padding: 8px 16px;
                border: 1px solid red;
                margin-bottom: 21;
                height: auto;
            }
            .cssanimation{
                overflow-x: hidden;
            color: #fff;
            opacity: 0;
            animation: animate .8s ease-in forwards 1.5s;
            padding-left: 1rem;
            }


            /* li::after{
                content: '';
                background-color: #ff0000;
                position: absolute;
                top: 0;
                left: 0;
                overflow: hidden;
                z-index: -1;
                //transform: translateX(0);
                //animation: bg-animate .1s ease-in forwards .1s;
            }
            @keyframes bg-animate {
                from {

                    transform: translate(-0%, 0%) ;
                }
                to {

                    transform: translate(-100%, 0%) ;
                }
            } */
            @keyframes animate{
            0%{
                opaicty: 0;
                transform: translateY(6rem);
            }
            100%{
                opacity: 1;
                transform: translateY(0);
            }
            }





        .reveler{
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: auto;
            background: red;
            transition-property: width;
            transition-duration: 1s;
            transition-delay: 2s;
            animation-duration: 5s;
            animation-delay: 1s;
            animation-fill-mode: both;
            -webkit-backface-visibility: hidden;
        }

        .fadeIn { animation-name: fadeIn;
            animation-duration: 1.5s;
        }
        @keyframes fadeIn {
            from {

               transform: translate(-0%, 0%) ;
            }
            to {

                transform: translate(-100%, 0%) ;
            }
        }

        .openPortfolio{
            -webkit-backface-visibility: hidden;
            color: #c22085;
            text-transform: uppercase;
            font-family: inconsolata,monospace;
            display: block;
        }
        .code-img{
            width: 500px;
            height: 500px;
            margin: auto;
        }

        @media only screen and (max-width: 1100px)
        .secHead, .secEnd {
            left: 0;
        }

        @media only screen and (max-width: 1070px) {
            html, body{
                overflow-x: hidden;
            }
            #svg-container{
                left: 20%;
            }
            ul{
                width: 80%;
                margin: 30;
                margin-left: 50;
                margin-top: -30;
                margin-bottom: 51;
            }
            ul li{
                width: 100%;
                height: auto;
                margin-bottom: 21;
            }
            .secEnd{
                margin-top: -20;
            }
            .reveler{
                height: auto;
            }
        }
        @media only screen and (max-width: 1070px) {
            #mySVG {
                padding-left: 370px;
            }
        }
        @media only screen and (max-width: 831px) {
            #mySVG {
                padding-left: 170px;
            }
            #mySVG2{
                margin-top: 312 !important;
                margin-left: -130 !important;
            }

        }


        @media only screen and (max-width: 642px) {
            #mySVG{
                margin-left:-50px;
                viewBox:"0 0 1500 1000";
                preserveAspectRatio:"none";
            }


        }
        @media only screen and (max-width: 500px) {

            .icons i{
                font-size: 18px !important;
            }

        }
        @media only screen and (max-width: 409px){
            #icons-main{
                padding-left: 50;
            }
            #svg-container2 {
                height: 1094!important;
            }
            #svg-container3 {
                height: 700!important;
            }
            ul{
                width: 80%;
                margin: 30;
                margin-left: 50;
                margin-top: -30;
                margin-bottom: 51;
            }
            ul li{
                width: 100%;
                height: auto;
                margin-bottom: 21;
            }
            .new_section{
                margin-left: -100;
                width: 300px;
            }
            .icons{
                width: 200px;
                height: 200px;
                margin-left: -50px;
                margin-top: -100px;
            }
            .secEnd{
                margin-top: -20;
            }
            .reveler{
                height: auto;
            }
            .code-img{
                margin-top: 700;
                width: 200px;
                height: 200px;
            }
            #mySVG2{
                margin-top: 512 !important;
                margin-left: -130 !important;
            }

        }

        @media only screen and (max-width: 358px){
            #mySVG2{
                height: 445px !important;
            }
        }

        @media only screen and (max-width: 509px) and (min-width: 409px){
            #mySVG2{
                height: 439px !important;
            }

        }

        @media only screen and (max-width: 941px) and (min-width: 831px){
            #mySVG2{
                margin-top: 300px !important;
                margin-right: 100px !important;
            }

        }

        @media only screen and (max-width: 1424px) and (min-width: 1070px){
            #mySVG2{
                margin-top: 400px !important;
            }

        }
        @media only screen and (max-width: 726px) and (min-width: 407px){
            .new_section{
                margin-left: -100;
                width: 300px;
            }

        }


        @media only screen and (max-width: 971px) and (min-width: 768px){
            .new_section{
                margin-left: -100;
                width: 300px;
            }
        }


        @media only screen and (max-width: 550px) and (min-width: 410px){
            ul,{
                width: 80%;
                margin: 30;
                margin-left: 50;
                margin-top: -30;
                margin-bottom: 51;
            }
            ul li {
                width: 100%;
                height: auto;
                margin-bottom: 21;
            }
            .secEnd{
                margin-top: -20;
            }
            .reveler{
                height: auto;
            }
            .code-img{
                margin-top: 400;
                width: 400px;
                height: 400px;
            }
            #mySVG2{
                margin-top: 300 !important;
                margin-left: -130 !important;
            }
        }
        #mySVG2{
            box-sizing: border-box;
            top: 75%;
            height: 210px;
            width: 33%;
            margin:0 auto;
            overflow: visible;
            display: inline-block;

        }
        #mySVG3{
            box-sizing: border-box;
            top: 75%;
            height: 210px;
            width: 33%;
            margin:0 auto;
            overflow: visible;
            display: inline-block;

        }
        .btn-box {
            border: 1px solid #2d9687;
            width: 100%;
            max-width: 30rem;
            text-align: center;
            display: block;
            margin-top: 5rem;
            overflow: visible;
            position: relative;
            display: block;
            font-size: 1.375rem;
            line-height: 2.4;
            color: #fff;
            font-family: inconsolata,monospace;
        }

        .fade-in{
            opacity: 0;
            transition: opacity 250ms ease-in;
        }
        .fade-in.appear{
            opacity: 1;
        }

        body, button, input {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            letter-spacing: 1.4px;
            }

            .background {
            display: flex;
            min-height: 100vh;
            }

            .container {
            flex: 0 1 700px;
            margin: auto;
            padding: 10px;
            }

            .screen {
            position: relative;
            margin-top: -200;
            background: #3e3e3e;
            border-radius: 15px;
            }

            .screen:after {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            left: 20px;
            right: 20px;
            bottom: 0;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
            z-index: -1;
            }

            .screen-header {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            background: #4d4d4f;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            }

            .screen-header-left {
            margin-right: auto;
            }

            .screen-header-button {
            display: inline-block;
            width: 8px;
            height: 8px;
            margin-right: 3px;
            border-radius: 8px;
            background: white;
            }

            .screen-header-button.close {
            background: #ed1c6f;
            }

            .screen-header-button.maximize {
            background: #e8e925;
            }

            .screen-header-button.minimize {
            background: #74c54f;
            }

            .screen-header-right {
            display: flex;
            }

            .screen-header-ellipsis {
            width: 3px;
            height: 3px;
            margin-left: 2px;
            border-radius: 8px;
            background: #999;
            }

            .screen-body {
            display: flex;
            }

            .screen-body-item {
            flex: 1;
            padding: 50px;
            }

            .screen-body-item.left {
            display: flex;
            flex-direction: column;
            }

            .app-title {
            display: flex;
            flex-direction: column;
            position: relative;
            color: #ea1d6f;
            font-size: 26px;
            }

            .app-title:after {
            content: '';
            display: block;
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 25px;
            height: 4px;
            background: #ea1d6f;
            }

            .app-contact {
            margin-top: auto;
            font-size: 8px;
            color: #888;
            }

            .app-form-group {
            margin-bottom: 15px;
            }

            .app-form-group.message {
            margin-top: 40px;
            }

            .app-form-group.buttons {
            margin-bottom: 0;
            text-align: right;
            }

            .app-form-control {
            width: 100%;
            padding: 10px 0;
            background: none;
            border: none;
            border-bottom: 1px solid #666;
            color: #ddd;
            font-size: 14px;
            text-transform: uppercase;
            outline: none;
            transition: border-color .2s;
            }

            .app-form-control::placeholder {
            color: #666;
            }

            .app-form-control:focus {
            border-bottom-color: #ddd;
            }

            .app-form-button {
            background: none;
            border: none;
            color: #ea1d6f;
            font-size: 14px;
            cursor: pointer;
            outline: none;
            }

            .app-form-button:hover {
            color: #b9134f;
            }

            .credits {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            color: #ffa4bd;
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 16px;
            font-weight: normal;
            }

            .credits-link {
            display: flex;
            align-items: center;
            color: #fff;
            font-weight: bold;
            text-decoration: none;
            }

            .dribbble {
            width: 20px;
            height: 20px;
            margin: 0 5px;
            }

            @media screen and (max-width: 520px) {
            .screen-body {
                flex-direction: column;
            }

            .screen-body-item.left {
                margin-bottom: 30px;
            }

            .app-title {
                flex-direction: row;
            }

            .app-title span {
                margin-right: 12px;
            }

            .app-title:after {
                display: none;
            }
            }

            @media screen and (max-width: 600px) {
            .screen-body {
                padding: 40px;
            }

            .screen-body-item {
                padding: 0;
            }
            }

            .nav {
                height: 50px;
                width: 100%;
                background-color: #black;
                position: relative;
                }

                .nav > .nav-header {
                display: inline;
                }

                .nav > .nav-header > .nav-title {
                display: inline-block;
                font-size: 22px;
                color: #fff;
                padding: 10px 10px 10px 10px;
                }

                .nav > .nav-btn {
                display: none;
                }

                .nav > .nav-links {
                display: inline;
                float: right;
                font-size: 18px;
                }

                .nav > .nav-links > a {
                display: inline-block;
                padding: 13px 10px 13px 10px;
                text-decoration: none;
                color: #e2b8aa;
                }

                .nav > .nav-links > a:hover {
                background-color: #011f4b ;
                }

                .nav > #nav-check {
                display: none;
                }

                @media (max-width:676px) {
                .nav > .nav-btn {
                    display: inline-block;
                    position: absolute;
                    right: 0px;
                    top: 0px;
                }
                .nav > .nav-btn > label {
                    display: inline-block;
                    width: 50px;
                    height: 50px;
                    padding: 13px;
                }
                .nav > .nav-btn > label:hover,.nav  #nav-check:checked ~ .nav-btn > label {
                    background-color: #2ab7ca ;
                }
                .nav > .nav-btn > label > span {
                    display: block;
                    width: 25px;
                    height: 10px;
                    border-top: 2px solid #eee;
                }
                .nav > .nav-links {
                    position: absolute;
                    display: block;
                    width: 100%;
                    background-color: #333;
                    height: 0px;
                    transition: all 0.3s ease-in;
                    overflow-y: hidden;
                    top: 50px;
                    left: 0px;
                }
                .nav > .nav-links > a {
                    display: block;
                    width: 100%;
                }
                .nav > #nav-check:not(:checked) ~ .nav-links {
                    height: 0px;
                }
                .nav > #nav-check:checked ~ .nav-links {
                    height: calc(100vh - 50px);
                    overflow-y: auto;
                    z-index: 10;
                }
                }

                .new2{
                    background: rgba(0,0,0,.7);
                    width: 100%;
                    max-width: 100%;
                    position: fixed;
                    height: 50px;
                    min-height: 40px;
                    z-index: 10000;
                }

    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
</head>
<body>
    <div class="big">
    <div class="main-loader"></div>
    <header class="flex drop-in">
        <div class="wrap new2">
        <div class="mainlogo drop-in">
            <img src="/images/logo.png" alt="">
        </div>
        <div class="navigation">
                <div class="ham-btn" onclick="showNav()">
                <span></span>
                <span></span>
                <span></span>
                </div>


                <div class="links">
                    <div class="link">
                        <a href="#home" onclick="showNav()">Home</a>
                    </div>
                    <div class="link">
                        <a href="#projects" onclick="showNav()">Projects</a>
                    </div>
                    <div class="link">
                        <a href="#about" onclick="showNav()">About</a>
                    </div>
                    <div class="link">
                        <a href="#contact" onclick="showNav()">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <section class="home common" id="home">
        <div  class="shape">
            <img loading="lazy" class="shape1" src="/images/triangle.png" alt="this is 1">
            <img loading="lazy" class="shape2" src="/images/triangle.png" alt="this is 2">
            <img loading="lazy" class="shape3" src="/images/triangle.png" alt="this is 3">
            <img loading="lazy" class="shape4"  src="/images/triangle.png" alt="this is 4">
            <img loading="lazy" class="shape5" src="/images/triangle.png" alt="this is 5">
        </div>
        <div class="home-inner">
            <div class="text overflow-hidden">
                <h5 class="drop-in-2" style="color: white;">Hi I am expert in competitive
                    programming and web development </h5>
            </div>
        </div>
    </section>
    <div id="trigger1" class="spacer s0"></div>
    <section id="svg-container">
        <svg id="mySVG" viewBox="0 0 491.7 213.3">
          <path fill="none" stroke="red" style=" stroke-linejoin: round;"" stroke-width="10" id="triangle" d="M150 0 L75 200 L225 200 Z" />
          Sorry, your browser does not support inline SVG.
          <rect x="50" y="132.9" class="quoteTextBG" width="93" height="50"></rect>
          <rect x="150" y="63.9" class="quoteTextBG" width="93" height="50"></rect>
          <text  x="150.2858" y="109.9107" class="quoteText quote1TextTop" data-svg-origin="239.28579711914062 48.03357696533203" transform="matrix(1,0,0,1,0,0)">“DO WHAT YOU LOVE
          </text>
          <text x="-155.7142" y="179.7315" class="quoteText quote1TextBottom" data-svg-origin="-0.7142000198364258 117.85437774658203" transform="matrix(1,0,0,1,0,0)">LOVE WHAT YOU DO”
          </text>
        </svg>

      </section>

      <section id="some-space">
        <h1 class="secHead" id="projects">projects</h1>
        <ul >


        </ul>
        <div class="secEnd" data-text="projects"></div>
      </section>
      <div id="trigger2" class="spacer s0"></div>
      <section id="svg-container2">
        <svg height="200" width="900"
        id="mySVG2" viewBox="0 0 255.3 243">

        <text  x="200.2858" y="109.9107" class="quoteText quote1TextTop" data-svg-origin="239.28579711914062 48.03357696533203" transform="matrix(1,0,0,1,0,0)">“EVER POSITIVE
            </text>
              <text x="20.7142" y="350.7315" class="quoteText quote1TextBottom" data-svg-origin="-0.7142000198364258 117.85437774658203" transform="matrix(1,0,0,1,0,0)">NEVER NEGATIVE”
            </text>


        <polyline fill="none"id="triangle2" stroke-width="10" stroke="#2d9687" class="quotePositiveLines" points="199.1,74.2 164.9,15 17.1,271 312.7,271 240.7,146.3 " style="stroke-dashoffset: 100px;"></polyline>
            <polyline fill="none"id="triangle3" stroke="#2d9687" class="quotePositiveLines"stroke-width="10" points="256.8,364 293.7,428 441.4,172 145.9,172 216.2,293.8 " style="stroke-dashoffset:100px;"</polyline>





        </svg>
      </section>


      <section id="about">
        <h1 class="secHead" style="color: #2d9687;">about</h1>
        <div class="md:flex justify-between mx-32">
            <div class="new_section w-96 sm:m-0" data-aos="fade-right">
                <p style="color:#2d9687;">My name is Tamim Wasif. I graduated from North Western University,
                    Khulna, Bangladesh in Computer Science and Engineering. I am familiar
                    with competitive programming with CPP, web development with Laravel (PHP freamwork).
                </p>
                <p style="color:#e9b171; padding-top: 20px;">
                    In my thesis I worked with Parkinson Disease Detection using feature selection
                    technique got accuracy 97.43%, and Diabetes detection using Multi Objective
                     Evolutionary Fuzzy Classifier and got accuracy 83.043%. Both papers were accepted
                      in IEEE and Springer respectively.
                </p>
                <a href="https://github.com/tamimjdd/profile.github.io/blob/master/CV_TamimWasif_MAR_6.pdf" target="_blank" class="btn-box">My CV (PDF)</a>
            </div>

            <div class="icons " data-aos="zoom-in">
                <img src="/images/fire2.png" alt="">
                <div class="flex justify-evenly space-x-2 ml-12 mr-12" >
                    <a href="https://www.facebook.com/logan.hakathon">
                        <i class="fa fa-facebook-official flex-grow h-14" style="font-size:32px;color:#e9b171"></i>
                    </a>
                    <a href="mailto:deviltamim88@gmail.com">
                    <i class="fa fa-envelope flex-grow h-14" aria-hidden="true" style="font-size:32px;color:#e9b171"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCEX3BfAnJMi0mmpQI60UIDA">
                    <i class="fa fa-youtube-play flex-grow h-14" style="font-size:32px;color:#e9b171"></i>
                    </a>
                    <a href="https://github.com/tamimjdd">
                        <i class="fa fa-github flex-grow h-14" style="font-size:32px;color:#e9b171"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/tamim-wasif-72b453158/">
                    <i class="fa fa-linkedin-square flex-grow h-14" style="font-size:32px;color:#e9b171"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="secEnd" style="color: #2d9687;margin-top: 100;" data-text="about"></div>
      </section>
      <div id="trigger3" class="spacer s0"></div>
      <section id="svg-container3">

        <svg height="200" width="900"
        id="mySVG3" viewBox="0 0 255.3 243">
            <polyline stroke="#e9b171" id="triangle4" fill="none" class="quote3Poem" points="82.15,209.55 13,209.55 125.3,15 350,404.1 462.3,209.5 386.817,209.5 " stroke="#E9B171" stroke-width="10" style="stroke-dashoffset: 900px;"></polyline>
            <rect x="92" y="167" class="quoteTextBG" width="332" height="82"></rect>
            <text x="100" y="229.6151" id="quote3Text" class="quoteText quote3Text" data-svg-origin="258.32838439941406 207.68894958496094" transform="matrix(1,0,0,1,0,0)" style="opacity: 1;">“CODE IS POETRY”</text>
        </svg>
      </section>

      <section id="contact">
        <h1 class="secHead" style="color: white">contact</h1>
        <div class="background" data-aos="zoom-in">
            <div class="container">
                <div class="screen">
                <div class="screen-header">
                    <div class="screen-header-left">
                    <div class="screen-header-button close"></div>
                    <div class="screen-header-button maximize"></div>
                    <div class="screen-header-button minimize"></div>
                    </div>
                    <div class="screen-header-right">
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                    </div>
                </div>
                <div class="screen-body">
                    <div class="screen-body-item left">
                    <div class="app-title">
                        <span>CONTACT</span>
                        <span>Me</span>
                    </div>
                    <div class="app-contact">CONTACT INFO : +880 177 25 44 228</div>
                    </div>
                    <div class="screen-body-item">
                    <div class="app-form">
                        <div class="app-form-group">
                        <input class="app-form-control name" placeholder="NAME" >
                        <div id="name-error" style="color: red"></div>
                        </div>
                        <div class="app-form-group">
                        <input class="app-form-control email" placeholder="EMAIL">
                        <div id="email-error" style="color: red"></div>
                        </div>
                        <div class="app-form-group">
                        <input class="app-form-control message" placeholder="MESSAGE">
                        <div id="message-error" style="color: red"></div>
                        </div>
                        <div class="app-form-group buttons">
                                <button class="app-form-button">SEND</button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

            </div>
            </div>
            <div class="secEnd" data-text="contact" style="color: white"></div>

      </section>


    </div>




    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

            function showNav(){
                document.getElementsByClassName("navigation")[0].classList.toggle("active");

            }





        $(document).on('click', '.app-form-button', function (e) {

            var data={
                'name': $('.name').val(),
                'email': $('.email').val(),
                'message': $('.message').val(),
            }
            $('.app-form-button').text('Sending...');
            $.ajax({
                type: "GET",
                url: "/send",
                data: data,
                dataType: "json",
                success: function (response) {
                    if(response.status==400){
                        $('#name-error').append(response.errors['name']);
                        $('#email-error').append(response.errors['email']);
                        $('#message-error').append(response.errors['message']);
                        $('.app-form-button').text('SEND');
                    }
                    else{
                        $('#name-error').html("");
                        $('#email-error').html("");
                        $('#message-error').html("");
                        $('.app-form-button').text('Mail Sent');
                    }

                }
            });


        });





        AOS.init();
        var $preLoader = $(".main-loader");
        $(function(){ // this replaces document.ready
        setTimeout(function(){
            $('.main-loader').fadeOut('slow', function() {
            $(this).remove();
            });
        }, 500);
        });
        //svg-1
        $(document).ready(function(){
        function pathPrepare ($el) {
            var lineLength = $el[0].getTotalLength();
            console.log("this is length: "+lineLength);
            $el.css("stroke-dasharray", lineLength);
            $el.css("stroke-dashoffset", lineLength);
        }

        var $word = $("path#triangle");

        // prepare SVG
        pathPrepare($word);

        // init controller
        var controller = new ScrollMagic.Controller();

        // build tween
        var tween = new TimelineMax()
            .add(TweenMax.to($word, 0.9, {strokeDashoffset: 0, ease:Linear.easeNone}));			// change color during the whole thing

        // build scene
        var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: 200, tweenChanges: true})
                        .setTween(tween)
                        .addTo(controller);
                    })


        //second svg:
        $(document).ready(function(){
        function pathPrepare2 ($el) {
            var lineLength = $el[0].getTotalLength();
            console.log("this is length: "+lineLength);
            $el.css("stroke-dasharray", lineLength);
            $el.css("stroke-dashoffset", lineLength);
        }

        var $word2 = $("#triangle2");

        // prepare SVG
        pathPrepare2($word2);

        // init controller
        var controller2 = new ScrollMagic.Controller();

        // build tween
        var tween2 = new TimelineMax()
            .add(TweenMax.to($word2, 0.9, {strokeDashoffset: 0, ease:Linear.easeNone}));			// change color during the whole thing

        // build scene
        var scene2 = new ScrollMagic.Scene({triggerElement: "#trigger2", duration: 200, tweenChanges: true})
                        .setTween(tween2)
                        .addTo(controller2);
                    })

                //3rd svg

                $(document).ready(function(){
        function pathPrepare3 ($el) {
            var lineLength = $el[0].getTotalLength();
            console.log("this is length: "+lineLength);
            $el.css("stroke-dasharray", lineLength);
            $el.css("stroke-dashoffset", lineLength);
        }


        var $word3 = $("#triangle3");

        // prepare SVG

        pathPrepare3($word3);

        // init controller
        var controller3 = new ScrollMagic.Controller();

        // build tween
        var tween3 = new TimelineMax()
            .add(TweenMax.to($word3, 0.9, {strokeDashoffset: 0, ease:Linear.easeNone}));			// change color during the whole thing

        // build scene
        var scene3 = new ScrollMagic.Scene({triggerElement: "#trigger2", duration: 200, tweenChanges: true})
                        .setTween(tween3)
                        .addTo(controller3);
                    })

                    // 4th svg
                    $(document).ready(function(){
                    function pathPrepare4 ($el) {
                        var lineLength = $el[0].getTotalLength();
                        console.log("this is length: "+lineLength);
                        $el.css("stroke-dasharray", lineLength);
                        $el.css("stroke-dashoffset", lineLength);
                    }

                    var $word4 = $("#triangle4");

                    // prepare SVG
                    pathPrepare4($word4);


                    // init controller
                    var controller4 = new ScrollMagic.Controller();

                    // build tween
                    var tween4 = new TimelineMax()
                        .add(TweenMax.to($word4, 0.9, {strokeDashoffset: 0, ease:Linear.easeNone}));			// change color during the whole thing

                    // build scene
                    var scene4 = new ScrollMagic.Scene({triggerElement: "#trigger3", duration: 200, tweenChanges: true})
                                    .setTween(tween4)
                                    .addTo(controller4);
                                })



        jQuery(document).on('ready', function() {
        jQuery(window).on('resize', function() {
            /* Tablet Portrait size to standard 960 (devices and browsers) */
            if (jQuery(document).width() < 361 ) {
               //change the attributes from the div #home_content (first parameter: the attribute, what it needs to be)
               //jQuery('#mySVG').attr('viewBox','0 0 1500 1000');
               var mySVG = document.getElementById('svg');
               mySVG.setAttribute("viewBox", "0 0 1500 1000");

            }
        }).trigger('resize');
        });

        let x=0,y=0;

        $(window).scroll(function(){

        if ($(this).scrollTop() > 900 && x==0) {


              $('ul').append('<li ><div class="reveler fadeIn" ></div><div class="cssanimation news" style="color: white"><h1>My Portfolio Website</h1><h2>Its a responsive website where I worked with scroll drawings, animations</h2><a class="openPortfolio" href="#">Visit Site</a></div></li>');

              $('ul').append('<li ><div class="reveler fadeIn" ></div><div class="cssanimation news" style="color: white"><h1>My Software Engineering Project</h1><h2>Its a sorting algorithms visualizer and pathfinding algorithms visualizer project</h2><a class="openPortfolio" href="https://tamimjdalgovisualization.netlify.app/">Visit Site</a></div></li>');
              x=1;

        } else if($(this).scrollTop() < 900){
            x=0;
            y=0;
            $('ul').empty();
        }

        if ($(this).scrollTop() > 900 && $(this).scrollTop() < 1583 && y==0) {

              $('ul').append('<li ><div class="reveler fadeIn" ></div><div class="cssanimation news" style="color: white"><h1>My Blog Website</h1><h2>Its a responsive blog website where I worked with database mysql, infinite loading, comment-like system, real time notification and real time like count.</h2><a class="openPortfolio" href="http://stark-dawn-03290.herokuapp.com/">Visit Site</a></div></li>');
              $('ul').append('<li ><div class="reveler fadeIn" ></div><div class="cssanimation news" style="color: white"><h1>My CPP console Project</h1><h2>Its a console project for a university library where any one can store when a book is borrowed in the file system</h2><a class="openPortfolio" href="https://github.com/tamimjdd/CPP-console-project">View Code</a></div></li>');
              $('ul').append('<li ><div class="reveler fadeIn" ></div><div class="cssanimation news" style="color: white"><h1>My PHP Website</h1><h2>Its a website about library management system of a university where a student can borrow, return, search book and admin have full control</h2><a class="openPortfolio" href="https://github.com/tamimjdd/PHP-project">View Code</a></div></li>');
              $('ul').append('<li ><div class="reveler fadeIn" ></div><div class="cssanimation news" style="color: white"><h1>My JAVA project</h1><h2>Its a library management system project using java and mysql database where a student can search for book, borrow book, return book, and see all borrowed book history, and admin has full control of the database</h2><a class="openPortfolio" href="https://github.com/tamimjdd/RSP2">View Code</a></div></li>');
            y=1;
        }


        });

        const appearOptions={
            threshold: 1,
        };

        const faders= document.querySelectorAll('.fade-in');
        const appearOnScroll= new IntersectionObserver
        (function(
            entries,
            appearOnScroll
            ){
                entries.forEach(entry=>{
                    if(!entry.isIntersecting){
                        return;
                    } else{
                        entry.target.classList.add("appear");
                        appearOnScroll.unobserve(entry.target);
                    }
                })
            },
            appearOptions);

            faders.forEach(fader=>{
                appearOnScroll.observe(fader);
            })

    </script>
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/621f9170a34c245641291679/1ft5l08kf';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
</body>

</html>
