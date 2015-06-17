<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>生成微信通讯录名片二维码</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="stylesheet" href="assets/bower_components/amazeui/dist/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/app.css"/>
  <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="assets/bower_components/amazeui/dist/js/amazeui.min.js"></script>
  <script src="assets/js/app.js"></script>
</head>
<body>

	<!--  导航条 start  -->
	<header class="am-topbar am-topbar-fixed-top">
	  <div class="am-container">
		<h1 class="am-topbar-brand">
		  <a href="#">Limei</a>
		</h1>

		<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-secondary am-show-sm-only"
				data-am-collapse="{target: '#collapse-head'}"><span class="am-sr-only">导航切换</span> <span
			class="am-icon-bars"></span></button>

		<div class="am-collapse am-topbar-collapse" id="collapse-head">
		  <ul class="am-nav am-nav-pills am-topbar-nav">
			<li class="am-active"><a href="#">首页</a></li>
		  </ul>
		</div>
	  </div>
	</header>
	<!--  导航条 end  -->

	<!--  banner区块 start  -->
	<section class="banner">
	  <div class="am-g">
	<div class="am-u-lg-12">
	  <h1>打造属于自己的身份二维码</h1> 
	</div>
	</div>
	</section>
	<!--  banner区块 end  -->

	<!--  正文主体内容 start  -->
	<section class="container">
	<div class="am-g am-container">
	<div class="am-u-lg-12">
	  <h2>填下以下信息 点击提交 就可以生成属于自己的身份二维码</h2>

	  <div class="am-g">
		<div class="am-u-lg-6 am-u-md-4 am-u-sm-12">
		  <form class="am-form" id="cardForm">
			<label for="name" class="about-color">姓名</label>
			<input id="name" type="text" name="name" required  minlength="3">
			<br>
			<label for="phone" class="about-color">手机</label>
			<input id="phone" type="number" name="phone"  minlength="11" required>
			<br>
			<label for="tel" class="about-color">电话</label>
			<input id="tel" type="number" name="tel">
			<br>
			<label for="email" class="about-color">邮箱</label>
			<input id="email" type="email" name="email">
			<br>
			<label for="url" class="about-color">网址</label>
			<input id="url" type="url" name="url">
			<br>
			<label for="company" class="about-color">公司</label>
			<input id="company" type="text" name="company">
			<br>
			<label for="duty" class="about-color">职务</label>
			<input id="duty" type="text" name="duty">
			<br>
			<label for="addr" class="about-color">地址</label>
			<input id="addr" type="text" name="addr">
			<br>
			<label for="message" class="about-color">备注</label>
			<textarea id="message" name="remark"></textarea>
			<br>
			<button type="submit" class="am-btn am-btn-primary am-btn-sm"><i class="am-icon-check"></i> 提 交</button>
		  </form>
		  <hr class="am-article-divider am-show-sm-only">
		</div>

		<div class="am-u-lg-6 am-u-md-8 am-u-sm-12">
		  <h4>操作方式</h4>
		  <p>
			  1. 填写完右侧信息<br />
			  2. 点击提交<br />
			  3. 页面弹出二维码<br />
			  4. 打开手机微信-扫一扫<br />
			  5. 验收名片<br />
		  </p>
		  
		  <h4>技术支持</h4>
		  <p>
			  本工具主要使用的类库为 前端妹子UI和后台phpqrcode类库<br />
			  支持手机移动终端打开
		  </p>
		</div>
	  </div>
	</div>
	</div>
	</section>
	<!--  正文主体内容 end  -->

	<!--  页脚 start  -->
	<footer class="footer">
	<p>友情链接: <a href="http://www.limei.com/" target="_blank">力美科技</a></p>
	</footer>
	<!--  页脚 end  -->

	<!-- popup start -->
	<div class="am-popup" id="my-popup">
	  <div class="am-popup-inner">
		<div class="am-popup-hd">
		  <h4 class="am-popup-title">二维码</h4>
		  <span data-am-modal-close class="am-close">&times;</span>
		</div>
		<div class="am-popup-bd">
			<img class="am-center" id="codeImg" width="300" />
		</div>
	  </div>
	</div>
	<!-- popup end -->

</body>
</html>