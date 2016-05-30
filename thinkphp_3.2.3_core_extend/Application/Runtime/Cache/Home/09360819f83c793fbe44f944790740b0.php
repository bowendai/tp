<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>菜单</title>
		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="/thinkphp_3.2.3_core/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/thinkphp_3.2.3_core/Public/assets/css/font-awesome.min.css" />

		<link rel="stylesheet" href="/thinkphp_3.2.3_core/Public/assets/css/ace.min.css" />
		<link rel="stylesheet" href="/thinkphp_3.2.3_core/Public/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/thinkphp_3.2.3_core/Public/assets/css/ace-skins.min.css" />

		<script src="/thinkphp_3.2.3_core/Public/assets/js/ace-extra.min.js"></script>

	</head>

	<body>
		
		<!--<div class="main-container" id="main-container">-->
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<!--<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>-->

				<div class="sidebar1" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					
					<ul class="nav nav-list">
						<li id="news">
							<a href="/thinkphp_3.2.3_core/index.php/Home/news/index" target="right">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 业界动态 </span>
							</a>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text"> 测试自动化 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/thinkphp_3.2.3_core/index.php/Home/autoframe/index" target="right">
										<i class="icon-double-angle-right"></i>
										自动化框架
									</a>
								</li>

								<li>
									<a href="/thinkphp_3.2.3_core/index.php/Home/autodesign/index" target="right">
										<i class="icon-double-angle-right"></i>
										自动化设计
									</a>
								</li>

							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 测试工具 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="tables.html">
										<i class="icon-double-angle-right"></i>
										性能工具
									</a>
								</li>

								<li>
									<a href="jqgrid.html">
										<i class="icon-double-angle-right"></i>
										DFR工具
									</a>
								</li>
								
								<li>
									<a href="jqgrid.html">
										<i class="icon-double-angle-right"></i>
										安全工具
									</a>
								</li>
								
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-edit"></i>
								<span class="menu-text"> 测试技术 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="form-elements.html">
										<i class="icon-double-angle-right"></i>
										性能测试
									</a>
								</li>

								<li>
									<a href="form-wizard.html">
										<i class="icon-double-angle-right"></i>
										可靠性测试
									</a>
								</li>

								<li>
									<a href="wysiwyg.html">
										<i class="icon-double-angle-right"></i>
										安全测试
									</a>
								</li>

								<li>
									<a href="dropzone.html">
										<i class="icon-double-angle-right"></i>
										测试设计
									</a>
								</li>
								
								<li>
									<a href="dropzone.html">
										<i class="icon-double-angle-right"></i>
										评估
									</a>
								</li>
							</ul>
						</li>
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-edit"></i>
								<span class="menu-text"> 客户化测试 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="form-elements.html">
										<i class="icon-double-angle-right"></i>
										DT场景
									</a>
								</li>

								<li>
									<a href="form-wizard.html">
										<i class="icon-double-angle-right"></i>
										HWS场景
									</a>
								</li>

								<li>
									<a href="wysiwyg.html">
										<i class="icon-double-angle-right"></i>
										流程IT场景
									</a>
								</li>

								<li>
									<a href="dropzone.html">
										<i class="icon-double-angle-right"></i>
										私有云场景
									</a>
								</li>								
							</ul>
						</li>
						
					</ul><!-- /.nav-list -->

					<!--<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>-->
				</div>

				
			</div><!-- /.main-container-inner -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/thinkphp_3.2.3_core/Public/assets/js/jquery-2.0.3.min.js'>"+"<"+"script>");
		</script>

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/thinkphp_3.2.3_core/Public/assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/bootstrap.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/typeahead-bs2.min.js"></script>

		<script src="/thinkphp_3.2.3_core/Public/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/jquery.slimscroll.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/jquery.sparkline.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/flot/jquery.flot.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/flot/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->

		<script src="/thinkphp_3.2.3_core/Public/assets/js/ace-elements.min.js"></script>
		<script src="/thinkphp_3.2.3_core/Public/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				$(".submenu li").click(function(){
					
					$("#sidebar li").removeClass("active");
					
					$(this).addClass("active");
				});
				
				$(".dropdown-toggle").click(function(){
					
					$("#sidebar li").removeClass("active");
					
				});
				
				$("#news").click(function(){
					$("#sidebar li").removeClass("active");
					
					$("#sidebar li").removeClass("open");
					$(".submenu").css({"display":"none"});
					
					$(this).addClass("active");
				});
			})
		</script>
	
</body>
</html>