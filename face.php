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
	
	var _$ = ["rect", "n/a", "female", "big-face-tooltip", "small-face-tooltip", '<div><span><img src="', '" class=', "><\/span>", "<\/div>", "background-color", "#F1D100", '<div data-html="true" class="child face-tooltip ', ' " id="', '"/>', "left", "px", "top", "px", "width", "px", "height", "px", "border", "1px solid white", "position", "absolute", "top", "#", "manual", "#", "show", "#faces", "<div><\/div>", "#thumbnail", "#thumbContainer", "<img/>", "src", "src", "#faces"];
var t = JSON["parse"](n);
var current_faces = t["Faces"];
add_rect = function(n, t, i, r, u, f) {
	var o = _$[0] + Math["round"](Math["random"]() * 1e4),
		e = null,
		c = _$[1],
		s, h, l, a;
	t != null && (c = Math["round"](Number(t)));
	s = male;
	i != null && i["toLowerCase"]() === _$[2] && (s = female);
	h = f <= 0x2 ? _$[3] : _$[4];
	e = _$[5] + s + _$[6] + h + _$[7] + c + _$[8];
	$(e)["css"](_$[9], _$[10]);
	l = _$[11] + h + _$[12] + o + _$[13];
	$(l)["appendTo"](u)["css"](_$[14], n["left"] + _$[15])["css"](_$[16], n["top"] + _$[17])["css"](_$[18], n["width"] + _$[19])["css"](_$[20], n["height"] + _$[21])["css"](_$[22], _$[23])["css"](_$[24], _$[25]);
	e != null && (a = _$[26], $(_$[27] + o)["tooltip"]({
		trigger: _$[28],
		show: !0x0,
		placement: a,
		title: e,
		html: !0x0
	}), $(_$[29] + o)["tooltip"](_$[30]))
};

function a() {
	var n, t;
	var img = $(this);
	var realWidth;
	var realHeight;
	if ($(_$[31])["html"](_$[32]), n = $(_$[33]), t = $(_$[34]), current_faces != null) {
		$(_$[35])["attr"](_$[36], n["attr"](_$[37]))["load"](function() {
			realWidth = this["width"];
			realHeight = this["height"];
			var i = n["height"]() / realHeight,
				r = n["width"]() / realWidth,
				u = n["offset"]()["left"] - t["offset"]()["left"],
				f = current_faces["length"];
			$["each"](current_faces, function(t, e) {
				var s = e["faceRectangle"],
					l = e["attributes"]["age"],
					a = e["attributes"]["gender"],
					o = {},
					h, c;
				o["top"] = Math["round"](i * s["top"]);
				o["height"] = Math["round"](i * s["height"]);
				o["left"] = Math["round"](r * s["left"]) + u;
				o["width"] = Math["round"](r * s["width"]);
				c = $(_$[38]);
				add_rect(o, l, a, t, c, f)
			})
		})
	}
};
a();

</script>

</html>
	
	
