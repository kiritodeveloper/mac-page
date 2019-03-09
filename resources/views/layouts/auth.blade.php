<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>M@c-softins</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="admin/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="admin/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="admin/css/style.css" rel="stylesheet">
</head>
<script>
//<![CDATA[
// Fall v2.0 By MaxxBlade - http://www.maxxblade.co.uk/fall
var fallObjects=new Array();function newObject(url,height,width){fallObjects[fallObjects.length]=new Array(url,height,width);}
var numObjs=15, waft=100, fallSpeed=5, wind=-1;

newObject("http://lh5.googleusercontent.com/--jcOdbfXsBs/UGS2U_spSLI/AAAAAAAADCU/G-4XZ0mSEHg/s100/hoja1.png",29,15);
newObject("http://lh5.googleusercontent.com/-aE24R5QmbE4/UGS2U_hZj0I/AAAAAAAADCM/7Hb18sy3qfo/s100/hoja2.png",27,23);
newObject("http://lh6.googleusercontent.com/-9H8JyoZ6j3g/UGS2U2aOamI/AAAAAAAADCQ/6zY7uKgyV2A/s100/hoja3.png",46,15);
newObject("https://lh3.googleusercontent.com/-OhuXMSqpELQ/UGS2Vq8Qf0I/AAAAAAAADCg/UTCK1YQUZqA/s100/hoja4.png",36,33);
function winSize(){winWidth=(moz)?window.innerWidth:document.body.clientWidth;winHeight=(moz)?window.innerHeight:document.body.clientHeight;}
function fallObject(num,vari,nu){
objects[num]=new Array(parseInt(Math.random()*(winWidth-waft)),-30,(parseInt(Math.random()*waft))*((Math.random()>0.5)?1:-1),0.02+Math.random()/20,0,1+parseInt(Math.random()*fallSpeed),vari,fallObjects[vari][1],fallObjects[vari][2]);
if(nu==1){document.write('<img id="fO'+i+'" style="position:absolute;z-index:9;background:none;border:0;padding:0;box-shadow:none;" src="'+fallObjects[vari][0]+'">'); }
}
function fall(){
for(i=0;i<numObjs;i++){
var fallingObject=document.getElementById('fO'+i);
if((objects[i][1]>(winHeight-(objects[i][5]+objects[i][7])))||(objects[i][0]>(winWidth-(objects[i][2]+objects[i][8])))){fallObject(i,objects[i][6],0);}
objects[i][0]+=wind;objects[i][1]+=objects[i][5];objects[i][4]+=objects[i][3];
with(fallingObject.style){ top=objects[i][1]+winOffset+"px";left=objects[i][0]+(objects[i][2]*Math.cos(objects[i][4]))+"px";}
}
setTimeout("fall()",31);
}
var objects=new Array(),winOffset=0,winHeight,winWidth,togvis,moz=(document.getElementById&&!document.all)?1:0;winSize();
for (i=0;i<numObjs;i++){fallObject(i,parseInt(Math.random()*fallObjects.length),1);}
window.onresize=winSize;fall();
//]]>
</script>
<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">M@c<b>-Softins</b></a>
            <small>trabajando por la tecnologia</small>
        </div>
        <div class="card">
            <div class="body">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="admin/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="admin/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="admin/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="admin/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="admin/js/admin.js"></script>
    <script src="admin/js/pages/examples/sign-in.js"></script>
</body>

</html>