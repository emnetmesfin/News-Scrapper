<?php
$file=fopen('C://News/new.txt','r');
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Daily News</title>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<style type="text/css">
<!--
a:link {
	text-decoration: none;
	color: #a8c686;
}
a:visited {
	text-decoration: none;
	color: #FFF;
}
a:hover {
	text-decoration: underline;
	color: #FC6;
}
a:active {
	text-decoration: none;
	color: #FC6;
}
-->
</style>
<!--The following line of code is to add the custom olive favicon to web browsers -->

<link rel="shortcut icon" href="http://www.twotreesoliveoil.net/favicon.ico">

</head>

<body onload="MM_preloadImages('images/about_RO.gif','images/process_RO.gif','images/shop_RO.gif','images/contact_RO.gif')">
<div id="wrapper">
  <div id="header">
    <div id="navbar">
      <div id="home"><a href="index.html" class="active">Home</a></div>
     
    </div>
      <img src="images/logo.png" width="173" height="188" alt="logo" /><img src="images/header_lower.gif" width="950" height="47" alt="header_lower" /></div>
  <div id="leftSide">
    <h1> Today's News!</h1>
    <p>
	<?php
  while($line=fgets($file)){
     echo ($line.'</br>');
    
  }
  ?>
    </p>
<p>Advertisment</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
 
  <div id="rightSide">
    <p>&quot;We serve only <span class="twoTreesName"><em>Two Trees Extra Virgin Olive Oil</em> </span>at Iodice's Trattoria. There simply is no other olive oil that meets our standards.&quot; - <span class="testimonialName">Samantha Iodice, restaurant owner</span></p>
    <p><em>&quot;<span class="twoTreesName">Two Trees Olive Oil</span></em> is the only olive oil I would even consider cooking with or serving. It's the most authentic oil I've tasted since living in Italy.&quot; -<span class="testimonialName"> Giselle Varialle, Master Chef</span></p>
    <p>&quot;The flavored oils have a remarkably authentic, smooth, and mild flavor - nothing like the other flavored oils you'll see in your local market. They are superb on pasta, bread, and vegetables.&quot; - <span class="testimonialName">Thomas Garner, Hobby Chef</span></p>
    <p>&quot;I give two thumbs up to <em class="twoTreesName">Two Trees Olive Oil</em>! It's the best.&quot; - <span class="testimonialName">Laura Taylor, <em>Good Eats, Good Drinks Magazine</em>.</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="sidebarBottom"><img src="images/sidebar_lower2.gif" width="240" height="87" alt="sidebar-lower" /></div>
  </div>
  <div id="footer">home | <a href="about.html">about</a> | <a href="process.html">process</a> | <a href="shop.html">shop</a> | <a href="contact.html">contact</a></div>
</div>
</body>

</html>
