 <?php   include('includes/header.html'); ?>
 
 
 <!DOCTYPE html>
	<html>
	<head>
		<title>Category Quiz</title>
		<style>
		div,span{padding: 0;margin: 0;}
#main-clock{
    width: 200px;
    margin: 0 auto;
    position: relative
}
#dial-wrap{
    width: 200px;
    height: 200px;
    padding-top: 10px;
    border-radius: 50%;
    position: relative;
    z-index: 2;
    background: #996600; /* Old browsers */
    background: -moz-radial-gradient(center, ellipse cover,  #996600 0%, #996600 62%, #ffcc00 76%, #896d00 86%); /* FF3.6+ */
    background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,#996600), color-stop(62%,#996600), color-stop(76%,#ffcc00), color-stop(86%,#896d00)); /* Chrome,Safari4+ */
    background: -webkit-radial-gradient(center, ellipse cover,  #996600 0%,#996600 62%,#ffcc00 76%,#896d00 86%); /* Chrome10+,Safari5.1+ */
    background: -o-radial-gradient(center, ellipse cover,  #996600 0%,#996600 62%,#ffcc00 76%,#896d00 86%); /* Opera 12+ */
    background: -ms-radial-gradient(center, ellipse cover,  #996600 0%,#996600 62%,#ffcc00 76%,#896d00 86%); /* IE10+ */
    background: radial-gradient(ellipse at center,  #996600 0%,#996600 62%,#ffcc00 76%,#896d00 86%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#996600', endColorstr='#896d00',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}
#dial-wrap:after{
    content: "";
    display: block;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    position: absolute;
    left: 50%;
    top: 50%;
    margin: -4px 0 0 -4px;
    background: #ffffff; /* Old browsers */
    background: -moz-radial-gradient(center, ellipse cover,  #ffffff 0%, #585858 100%); /* FF3.6+ */
    background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,#ffffff), color-stop(100%,#585858)); /* Chrome,Safari4+ */
    background: -webkit-radial-gradient(center, ellipse cover,  #ffffff 0%,#585858 100%); /* Chrome10+,Safari5.1+ */
    background: -o-radial-gradient(center, ellipse cover,  #ffffff 0%,#585858 100%); /* Opera 12+ */
    background: -ms-radial-gradient(center, ellipse cover,  #ffffff 0%,#585858 100%); /* IE10+ */
    background: radial-gradient(ellipse at center,  #ffffff 0%,#585858 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#585858',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}
#dial{
    font-size: 15px;
    font-family: arial; sans-serif;
    color: #000;
    border-radius: 50%;
    width: 180px;
    height: 180px;
    margin: 0 auto;
    position: relative;
    background: #a4a4a4; /* Old browsers */
    background: -moz-linear-gradient(-45deg,  #a4a4a4 0%, #ffffff 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#a4a4a4), color-stop(100%,#ffffff)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(-45deg,  #a4a4a4 0%,#ffffff 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(-45deg,  #a4a4a4 0%,#ffffff 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(-45deg,  #a4a4a4 0%,#ffffff 100%); /* IE10+ */
    background: linear-gradient(135deg,  #a4a4a4 0%,#ffffff 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a4a4a4', endColorstr='#ffffff',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}
#dial span{display: block;position: absolute;}
.dial-num-12{left: 82px;top: 5px}
.dial-num-1{left: 128px;top: 15px}
.dial-num-2{left: 155px;top: 45px}
.dial-num-3{left: 165px;top: 90px}
.dial-num-4{left: 150px;top: 125px}
.dial-num-5{left: 125px;top: 150px}
.dial-num-6{left: 84px;top: 160px}
.dial-num-7{left: 46px;top: 150px}
.dial-num-8{left: 20px;top: 125px}
.dial-num-9{left: 5px;top: 90px}
.dial-num-10{left: 12px;top: 46px}
.dial-num-11{left: 40px;top: 15px}
#hour-hand{
    width: 60px;
    height: 5px;
    border-radius: 8px;
    background-color: #000;
    position: absolute;
    left: 42px;
    top: 98px;
    transform: rotate(7deg);
    -webkit-transform: rotate(7deg);
    -moz-transform: rotate(7deg);
    transform-origin: 100% 100% 0;
    -webkit-transform-origin: 100% 100% 0;
    -moz-transform-origin: 100% 100% 0;
}
#minute-hand{
    width: 70px;
    height: 4px;
    border-radius: 8px;
    background-color: #000;
    position: absolute;
    left: 102px;
    top: 100px;
    transform: rotate(65deg);
    -webkit-transform: rotate(65deg);
    -moz-transform: rotate(65deg);
    transform-origin: 0 0 0;
    -webkit-transform-origin: 0 0 0;
    -moz-transform-origin: 0 0 0;
}
#second-hand{
    width: 80px;
    height: 2px;
    border-radius: 5px;
    background-color: #000;
    position: absolute;
    left: 20px;
    top: 100px;
    transform: rotate(90deg);
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    transform-origin: 100% 50% 0;
    -webkit-transform-origin: 100% 50% 0;
    -moz-transform-origin: 100% 50% 0;
    -webkit-animation: secondHand 60s linear infinite; 
    -moz-animation: secondHand 60s linear infinite; 
    animation: secondHand 60s linear infinite;
}
#pendulum{
    width: 15px;
    height: 150px;
    margin: -10px auto 0;
    position: relative;
    z-index: 1;
    -webkit-animation: pendulum 2s cubic-bezier(.57,.07,.47,.84) infinite; 
    -moz-animation: pendulum 2s cubic-bezier(.57,.07,.47,.84) infinite; 
    animation: pendulum 2s cubic-bezier(.57,.07,.47,.84) infinite;
    transform-origin: 0 0 0;
    -webkit-transform-origin: 0 0 0;
    -moz-transform-origin: 0 0 0;
    background: #996600; /* Old browsers */
    background: -moz-linear-gradient(left,  #996600 0%, #996600 46%, #f2bf00 78%, #fcc900 81%, #b69100 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, right top, color-stop(0%,#996600), color-stop(46%,#996600), color-stop(78%,#f2bf00), color-stop(81%,#fcc900), color-stop(100%,#b69100)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(left,  #996600 0%,#996600 46%,#f2bf00 78%,#fcc900 81%,#b69100 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(left,  #996600 0%,#996600 46%,#f2bf00 78%,#fcc900 81%,#b69100 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(left,  #996600 0%,#996600 46%,#f2bf00 78%,#fcc900 81%,#b69100 100%); /* IE10+ */
    background: linear-gradient(to right,  #996600 0%,#996600 46%,#f2bf00 78%,#fcc900 81%,#b69100 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#996600', endColorstr='#b69100',GradientType=1 ); /* IE6-9 */
}
#pendulum:after{
    content: "";
    display: block;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    position: absolute;
    left: 50%;
    bottom: -30px;
    margin-left: -30px;
    background: #996600; /* Old browsers */
    background: -moz-radial-gradient(center, ellipse cover,  #996600 0%, #d3a000 56%, #fdca00 63%, #786621 100%); /* FF3.6+ */
    background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,#996600), color-stop(56%,#d3a000), color-stop(63%,#fdca00), color-stop(100%,#786621)); /* Chrome,Safari4+ */
    background: -webkit-radial-gradient(center, ellipse cover,  #996600 0%,#d3a000 56%,#fdca00 63%,#786621 100%); /* Chrome10+,Safari5.1+ */
    background: -o-radial-gradient(center, ellipse cover,  #996600 0%,#d3a000 56%,#fdca00 63%,#786621 100%); /* Opera 12+ */
    background: -ms-radial-gradient(center, ellipse cover,  #996600 0%,#d3a000 56%,#fdca00 63%,#786621 100%); /* IE10+ */
    background: radial-gradient(ellipse at center,  #996600 0%,#d3a000 56%,#fdca00 63%,#786621 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#996600', endColorstr='#786621',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

/*secondHand animation*/
@-webkit-keyframes secondHand {
    0%{
        -webkit-transform: rotate(90deg);
    }
    100%{
        -webkit-transform: rotate(450deg);
    }
} 
@-moz-keyframes secondHand { 
   0%{
        -moz-transform: rotate(90deg);
    }
    100%{
        -moz-transform: rotate(450deg);
    } 
} 
@keyframes secondHand { 
    0%{
       transform: rotate(90deg);
    }
    100%{
        transform: rotate(450deg);
    }
}

/*pendulum animation*/
@-webkit-keyframes pendulum {
    0%{
        -webkit-transform: rotate(-15deg);
    }
    50%{
        -webkit-transform: rotate(15deg);
    }
    100%{
        -webkit-transform: rotate(-15deg);
    }
} 
@-moz-keyframes pendulum { 
   0%{
        -moz-transform: rotate(-15deg);
    }
    50%{
        -moz-transform: rotate(15deg);
    }
    100%{
        -moz-transform: rotate(-15deg);
    }
} 
@keyframes pendulum { 
    0%{
        transform: rotate(-15deg);
    }
    50%{
        transform: rotate(15deg);
    }
    100%{
        transform: rotate(-15deg);
    }
}
		</style>
	</head>
	
	<body>
<br><br><br><br>
<div id="main-clock">
    <div id="dial-wrap">
        <div id="dial">
            <span class="dial-num-12">12</span>
            <span class="dial-num-1">1</span>
            <span class="dial-num-2">2</span>
            <span class="dial-num-3">3</span>
            <span class="dial-num-4">4</span>
            <span class="dial-num-5">5</span>
            <span class="dial-num-6">6</span>
            <span class="dial-num-7">7</span>
            <span class="dial-num-8">8</span>
            <span class="dial-num-9">9</span>
            <span class="dial-num-10">10</span>
            <span class="dial-num-11">11</span>
        </div>
        <div id="hour-hand"></div>
        <div id="minute-hand"></div>
        <div id="second-hand"></div>
    </div>
    <div id="pendulum"></div>
</div>
		
	

 </body>
 </html>
 