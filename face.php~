<?php

$img = $_get['url'];
$data = array();
$curlobj = curl_init();
curl_setopt($curlobj, CURLOPT_URL, "http://how-old.net/Home/Analyze?isTest=False&source=&faceUrl=".$img);
curl_setopt($curlobj, CURLOPT_USERAGENT,'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727;)');
curl_setopt($curlobj, CURLOPT_HEADER, 0);
curl_setopt($curlobj, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curlobj, CURLOPT_POST, 1);
curl_setopt($curlobj, CURLOPT_POSTFIELDS, $data);
curl_setopt($curlobj, CURLOPT_HTTPHEADER, array());
$rth = curl_exec($curlobj);
curl_close($curlobj);
?>

﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>微信测脸</title>
	<link href="main.css" rel="stylesheet"/>
	</head>
<body>
	<div class="container">
		<div style="text-align:center; margin-top:8px; margin-bottom:22px;">
			<span style=" font-size:25px; color:rgba(248,247,187,1); font-weight:bold;">
			微信测脸	</span>
		</div>
		<div id="thumbContainer" class="center-block" style="position: relative;">
			<img id="thumbnail" src="<?php echo $img; ?>" class="img-responsive center-block" />
			<div id="faces">
				<div></div>
			</div>
		</div>
		<div style="text-align:center;">
			<a href="http://mp.weixin.qq.com/s?__biz=MzAwNDA2NzI4Mg==&mid=205292107&idx=1&sn=56d2018888f50a6643fc9c94a3c5227a#rd" class="btn btn-default center-block action" target="_Blank" style="width:254px; margin:0px auto; margin-top:26px; color:rgba(248,247,187,1);">
			发送照片测一测你的年龄吧
			</a>
			<!--
			<button class="btn btn-default center-block action" onclick=" history.go(-1); ">
			
			</button>	
			-->
			<p style="text-align:center;">
				<span class="bodyfont" style="  font-size: 15px;" >
				把你朋友的照片也放进来测一测，太神奇了！
				</span>
			</p>
			<p style="text-align:center; margin-top:20px;">
				<img src="http://codelies.qiniudn.com/me.png" style=" width:60%;"/><br/>
				<span class="bodyfont" style="  font-size: 15px;" >
								</span>
			</p>	
		
		</div>
		
		<br>
    
	</div>
</body>
<script>
	var n = <?php echo $rth; ?>;
	var female = "http://weixin.dayibin.cn/addons/howold/template/mobile/gender-female.png";
	var male = "http://weixin.dayibin.cn/addons/howold/template/mobile/gender-male.png";
	
	eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1;};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p;}('G g$=["\\y\\d\\x\\b","\\A\\Z\\p","\\B\\d\\E\\p\\v\\d","\\K\\m\\D\\M\\B\\p\\x\\d\\M\\b\\j\\j\\v\\b\\m\\z","\\k\\E\\p\\v\\v\\M\\B\\p\\x\\d\\M\\b\\j\\j\\v\\b\\m\\z",\'\\I\\q\\m\\Q\\J\\I\\k\\z\\p\\A\\J\\I\\m\\E\\D\\F\\k\\y\\x\\P\\L\',\'\\L\\F\\x\\v\\p\\k\\k\\P\',"\\J\\I\\/\\k\\z\\p\\A\\J","\\I\\/\\q\\m\\Q\\J","\\K\\p\\x\\1H\\D\\y\\j\\C\\A\\q\\M\\x\\j\\v\\j\\y","\\O\\1d\\X\\1p\\X\\1b\\1b",\'\\I\\q\\m\\Q\\F\\q\\p\\b\\p\\M\\w\\b\\E\\v\\P\\L\\b\\y\\C\\d\\L\\F\\x\\v\\p\\k\\k\\P\\L\\x\\w\\m\\v\\q\\F\\B\\p\\x\\d\\M\\b\\j\\j\\v\\b\\m\\z\\F\',\'\\F\\L\\F\\m\\q\\P\\L\',\'\\L\\Z\\J\',"\\v\\d\\B\\b","\\z\\R","\\b\\j\\z","\\z\\R","\\H\\m\\q\\b\\w","\\z\\R","\\w\\d\\m\\D\\w\\b","\\z\\R","\\K\\j\\y\\q\\d\\y","\\X\\z\\R\\F\\k\\j\\v\\m\\q\\F\\H\\w\\m\\b\\d","\\z\\j\\k\\m\\b\\m\\j\\A","\\p\\K\\k\\j\\v\\C\\b\\d","\\b\\j\\z","\\O","\\E\\p\\A\\C\\p\\v","\\O","\\k\\w\\j\\H","\\O\\B\\p\\x\\d\\k","\\I\\q\\m\\Q\\J\\I\\/\\q\\m\\Q\\J","\\O\\b\\w\\C\\E\\K\\A\\p\\m\\v","\\O\\b\\w\\C\\E\\K\\1a\\j\\A\\b\\p\\m\\A\\d\\y","\\I\\m\\E\\D\\Z\\J","\\k\\y\\x","\\k\\y\\x","\\O\\B\\p\\x\\d\\k"];G t=1q["\\z\\p\\y\\k\\d"](n);G T=t["\\1d\\p\\x\\d\\k"];1c=U(n,t,i,r,u,f){G o=g$[0]+N["\\y\\j\\C\\A\\q"](N["\\y\\p\\A\\q\\j\\E"]()*1n),e=S,c=g$[1],s,h,l,a;t!=S&&(c=N["\\y\\j\\C\\A\\q"](1o(t)));s=1r;i!=S&&i["\\b\\j\\1u\\j\\H\\d\\y\\1a\\p\\k\\d"]()===g$[2]&&(s=1v);h=f<=1s?g$[3]:g$[4];e=g$[5]+s+g$[6]+h+g$[7]+c+g$[8];$(e)["\\x\\k\\k"](g$[9],g$[10]);l=g$[11]+h+g$[12]+o+g$[13];$(l)["\\p\\z\\z\\d\\A\\q\\1t\\j"](u)["\\x\\k\\k"](g$[14],n["\\v\\d\\B\\b"]+g$[15])["\\x\\k\\k"](g$[16],n["\\b\\j\\z"]+g$[17])["\\x\\k\\k"](g$[18],n["\\H\\m\\q\\b\\w"]+g$[19])["\\x\\k\\k"](g$[1f],n["\\w\\d\\m\\D\\w\\b"]+g$[1g])["\\x\\k\\k"](g$[1h],g$[1l])["\\x\\k\\k"](g$[1m],g$[1k]);e!=S&&(a=g$[1j],$(g$[1i]+o)["\\b\\j\\j\\v\\b\\m\\z"]({1w:g$[1N],1M:!1e,1P:a,1I:e,1O:!1e}),$(g$[1J]+o)["\\b\\j\\j\\v\\b\\m\\z"](g$[1L]))};U a(){G n,t;G 1K=$(V);G W;G Y;1A($(g$[1x])["\\w\\b\\E\\v"](g$[1y]),n=$(g$[1G]),t=$(g$[1E]),T!=S){$(g$[1C])["\\p\\b\\b\\y"](g$[1D],n["\\p\\b\\b\\y"](g$[1F]))["\\v\\j\\p\\q"](U(){W=V["\\H\\m\\q\\b\\w"];Y=V["\\w\\d\\m\\D\\w\\b"];G i=n["\\w\\d\\m\\D\\w\\b"]()/Y,r=n["\\H\\m\\q\\b\\w"]()/W,u=n["\\j\\B\\B\\k\\d\\b"]()["\\v\\d\\B\\b"]-t["\\j\\B\\B\\k\\d\\b"]()["\\v\\d\\B\\b"],f=T["\\v\\d\\A\\D\\b\\w"];$["\\d\\p\\x\\w"](T,U(t,e){G s=e["\\B\\p\\x\\d\\1z\\d\\x\\b\\p\\A\\D\\v\\d"],l=e["\\p\\b\\b\\y\\m\\K\\C\\b\\d\\k"]["\\p\\D\\d"],a=e["\\p\\b\\b\\y\\m\\K\\C\\b\\d\\k"]["\\D\\d\\A\\q\\d\\y"],o={},h,c;o["\\b\\j\\z"]=N["\\y\\j\\C\\A\\q"](i*s["\\b\\j\\z"]);o["\\w\\d\\m\\D\\w\\b"]=N["\\y\\j\\C\\A\\q"](i*s["\\w\\d\\m\\D\\w\\b"]);o["\\v\\d\\B\\b"]=N["\\y\\j\\C\\A\\q"](r*s["\\v\\d\\B\\b"])+u;o["\\H\\m\\q\\b\\w"]=N["\\y\\j\\C\\A\\q"](r*s["\\H\\m\\q\\b\\w"]);c=$(g$[1B]);1c(o,l,a,t,c,f)})})}};a();',62,114,'|||||||||||x74||x65|||_|||x6f|x73||x69|||x61|x64|||||x6c|x68|x63|x72|x70|x6e|x66|x75|x67|x6d|x20|var|x77|x3c|x3e|x62|x22|x2d|Math|x23|x3d|x76|x78|null|current_faces|function|this|realWidth|x31|realHeight|x2f|||||||||||x43|x30|add_rect|x46|0x0|20|21|22|27|26|25|23|24|1e4|Number|x44|JSON|male|0x2|x54|x4c|female|trigger|31|32|x52|if|38|35|36|34|37|33|x6b|title|29|img|30|show|28|html|placement'.split('|'),0,{}))

</script>

</html>
	
	