<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>WIKI</title>
		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="/svn/thinkphp_3.2.3_core_extend/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/svn/thinkphp_3.2.3_core_extend/Public/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="/svn/thinkphp_3.2.3_core_extend/Public/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->

		<!-- ace styles -->

		<link rel="stylesheet" href="/svn/thinkphp_3.2.3_core_extend/Public/assets/css/ace.min.css" />
		<link rel="stylesheet" href="/svn/thinkphp_3.2.3_core_extend/Public/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/svn/thinkphp_3.2.3_core_extend/Public/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/svn/thinkphp_3.2.3_core_extend/Public/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/html5shiv.js"></script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		
		
		<link rel="stylesheet" href="/svn/thinkphp_3.2.3_core_extend/Public/dokuwiki/lib/styles/all.css" />
		<link rel="stylesheet" href="/svn/thinkphp_3.2.3_core_extend/Public/dokuwiki/lib/styles/feed.css" />
		<link rel="stylesheet" href="/svn/thinkphp_3.2.3_core_extend/Public/dokuwiki/lib/styles/print.css" />
		<link rel="stylesheet" href="/svn/thinkphp_3.2.3_core_extend/Public/dokuwiki/lib/styles/screen.css" />
		
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			
			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							<!--<img src="/svn/thinkphp_3.2.3_core_extend/Public/assets/images/LOGO.jpg" />-->
								&nbsp;WIKI知识库 Demo &nbsp;&nbsp;&nbsp;&nbsp;
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->
				
				<div class="navbar-header pull-left">
					<ul class="nav ace-nav">
						<li class="light-blue nav-dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<!--<i class="icon-tasks"></i>-->
								<span class="">导航下拉1</span>
								<i class="icon-caret-down"></i>
							</a>

							<ul class="pull-left  dropdown-menu dropdown-caret dropdown-close"><!--pull-left小箭头靠左--->
								
								<li>
									<a href="/svn/thinkphp_3.2.3_core_extend/index.php/Home/autoframe/index/id/20">
										<div class="clearfix">
											<span class="pull-left">自动化框架</span>
											
										</div>
									</a>
								</li>

								<li>
									<a href="/svn/thinkphp_3.2.3_core_extend/index.php/Home/autodesign/index/id/21">
										<div class="clearfix">
											<span class="pull-left">自动化设计</span>
										</div>
									</a>
								</li>
							</ul>
						</li>
					
						<li class="light-blue nav-dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<!--<i class="icon-tasks"></i>-->
								<span class="">导航下拉2</span>
								<i class="icon-caret-down"></i>
							</a>

							<ul class="pull-left dropdown-navbar dropdown-menu dropdown-caret dropdown-close"><!--pull-left小箭头靠左--->
								
								<li>
									<a href="/svn/thinkphp_3.2.3_core_extend/index.php/Home/autoframe/index/id/20">
										<div class="clearfix">
											<span class="pull-left">自动化框架</span>
											<!--<span class="pull-right">15%</span>-->
										</div>

									</a>
								</li>

								<li>
									<a href="/svn/thinkphp_3.2.3_core_extend/index.php/Home/autodesign/index/id/21">
										<div class="clearfix">
											<span class="pull-left">自动化设计</span>
											<!--<span class="pull-right">90%</span>-->
										</div>
									</a>
								</li>
							</ul>
						</li>
						
						<li class="light-blue nav-dropdown">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<span class="">导航下拉3</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-left dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="/svn/thinkphp_3.2.3_core_extend/index.php/Home/autoframe/index/id/20">
										自动化框架
									</a>
								</li>
								<!--<li class="divider"></li>-->
								<li>
									<a href="/svn/thinkphp_3.2.3_core_extend/index.php/Home/autodesign/index/id/21">										
										自动化设计
									</a>
								</li>
							</ul>
						</li>
						
						<li class="light-blue nav-dropdown">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<span class="">导航下拉4</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-left dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										设置
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										个人资料
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
						
					</ul>
				</div>
				
				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<!--<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-ok"></i>
									还有4个任务完成
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">软件更新</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:65%" class="progress-bar "></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">硬件更新</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:35%" class="progress-bar progress-bar-danger"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">单元测试</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:15%" class="progress-bar progress-bar-warning"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">错误修复</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-striped active">
											<div style="width:90%" class="progress-bar progress-bar-success"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										查看任务详情
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-warning-sign"></i>
									8条通知
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												新闻评论
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-xs btn-primary icon-user"></i>
										切换为编辑登录..
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												新订单
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												粉丝
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										查看所有通知
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-envelope-alt"></i>
									5条消息
								</li>

								<li>
									<a href="#">
										<img src="/svn/thinkphp_3.2.3_core_extend/Public/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												不知道写啥 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>1分钟以前</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="/svn/thinkphp_3.2.3_core_extend/Public/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												不知道翻译...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20分钟以前</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="/svn/thinkphp_3.2.3_core_extend/Public/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												到底是不是英文 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>下午3:15</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="inbox.html">
										查看所有消息
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>-->

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/svn/thinkphp_3.2.3_core_extend/Public/assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎光临,</small>
									wiki
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										设置
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										个人资料
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
			
		</div>
		
		
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>
				
				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list" id="side-menu">
						<li id="news">
							<a href="/svn/thinkphp_3.2.3_core_extend/index.php/Home/news/index">
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
									<a href="/svn/thinkphp_3.2.3_core_extend/index.php/Home/autoframe/index/id/20" >
										<i class="icon-double-angle-right"></i>
										自动化框架
									</a>
								</li>

								<li>
									<a href="/svn/thinkphp_3.2.3_core_extend/index.php/Home/autodesign/index/id/21">
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

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>
				
				
			
				<div class="main-content">
						
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<li class="active">首页</li>
								<!--<a href="#">首页</a>-->
							</li>
							<!--<li class="active">控制台</li>-->
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>
					
					
	
	<div>
		<link href="/svn/thinkphp_3.2.3_core_extend/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/svn/thinkphp_3.2.3_core_extend/Public/assets/css/font-awesome.min.css" />
		<link rel="stylesheet" href="/svn/thinkphp_3.2.3_core_extend/Public/assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="/svn/thinkphp_3.2.3_core_extend/Public/assets/css/chosen.css" />
		<link rel="stylesheet" href="/svn/thinkphp_3.2.3_core_extend/Public/assets/css/datepicker.css" />
		<link rel="stylesheet" href="/svn/thinkphp_3.2.3_core_extend/Public/assets/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="/svn/thinkphp_3.2.3_core_extend/Public/assets/css/daterangepicker.css" />
		<link rel="stylesheet" href="/svn/thinkphp_3.2.3_core_extend/Public/assets/css/colorpicker.css" />
		<link rel="stylesheet" href="/svn/thinkphp_3.2.3_core_extend/Public/assets/css/ace.min.css" />
		<link rel="stylesheet" href="/svn/thinkphp_3.2.3_core_extend/Public/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/svn/thinkphp_3.2.3_core_extend/Public/assets/css/ace-skins.min.css" />
		
		<style type="text/css">
			#dw__toc{
				display:none;
			}
			
			.pagelist{ text-align:center; /*background:#f1f1f1;*/ padding:7px 0;}
			.pagelist a{ margin:0 5px; border:#6185a2 solid 1px; display:inline-block; padding:2px 6px 1px; line-height:16px; background:#fff; color:#6185a2;}
			.pagelist span{ margin:0 5px; border:#6185a2 solid 1px; display:inline-block; padding:2px 6px 1px; line-height:16px; color:#6185a2; color:#fff; background:#6185a2;}
			
		</style>

		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/ace-extra.min.js"></script>
		
		<script type="text/javascript">
			window.jQuery || document.write("<script src='/svn/thinkphp_3.2.3_core_extend/Public/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/svn/thinkphp_3.2.3_core_extend/Public/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<!--<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/bootstrap.min.js"></script>-->
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/typeahead-bs2.min.js"></script>

		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/chosen.jquery.min.js"></script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/date-time/moment.min.js"></script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/date-time/daterangepicker.min.js"></script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/jquery.knob.min.js"></script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/jquery.autosize.min.js"></script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/jquery.maskedinput.min.js"></script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/bootstrap-tag.min.js"></script>

		<!-- ace scripts -->

		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/ace-elements.min.js"></script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/ace.min.js"></script>
	
		
		<script>
			$(document).ready(function(){
				$("#sidebar").removeClass("menu-min");
			
				//图片链接到新的标签
				$('.well a').attr('target','_blank');
				
			});
			
		</script>
		
		
		<div class="page-content">
			
			<div class="col-xs-12">
				<a href="/svn/thinkphp_3.2.3_core_extend/index.php/Home/Autodesign/create/id/<?php echo ($navigation_id); ?>"><button id="createTopic" type="button" class="btn  btn-success">创建话题</button></a>
			</div>
			
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!--<div class="row">-->
					<div class="col-xs-12">
						<!--<div class="col-sm-3">
							<h2>welcome</h2>
						</div>-->
						<h2 class="header smaller lighter blue">
							<!--<a href="/svn/thinkphp_3.2.3_core_extend/index.php/Home/autodesign/detail?id=<?php echo ($autoinfoArr[$i]['cur_version_id']); ?>&version=<?php echo ($verArr[$i]['version']); ?>"><?php echo ($autoinfoArr[$i]["title"]); ?></a>
							&nbsp;<small>创建时间:<?php echo ($autoinfoArr[$i]["create_time"]); ?>&nbsp;&nbsp;&nbsp;当前正在使用版本号：<?php echo ($verArr[$i]["version"]); ?></small>-->
							<a href="/svn/thinkphp_3.2.3_core_extend/index.php/Home/autodesign/detail?id=<?php echo ($vo["cur_version_id"]); ?>&version=<?php echo ($vo["verArr"]["version"]); ?>"><?php echo ($vo["title"]); ?></a>
							&nbsp;<small>创建时间:<?php echo ($vo["create_time"]); ?>&nbsp;&nbsp;&nbsp;当前正在使用版本号：<?php echo ($vo["verArr"]["version"]); ?></small>
						</h2>
					</div>
				<!--</div>
				<div class="row">-->
					<div class="col-xs-12">
						<div class="well">
							<font size=+1>
								<?php  echo p_wiki_xhtml_dai_define($vo['verArr']['content']); ?>
							</font>
						</div>
					</div>
				<!--</div>--><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		
	</div>
	<div class="pagelist"><?php echo ($page); ?></div>
	
			
			</div><!-- /.main-container-inner -->

			<!--<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>-->
		</div><!-- /.main-container -->
		
		<!-- basic scripts -->

		<!--[if !IE]> -->

		<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->

		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/svn/thinkphp_3.2.3_core_extend/Public/assets/js/jquery-2.0.3.min.js'>"+"<"+"script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/svn/thinkphp_3.2.3_core_extend/Public/assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/svn/thinkphp_3.2.3_core_extend/Public/assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/bootstrap.min.js"></script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/jquery.slimscroll.min.js"></script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/jquery.sparkline.min.js"></script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/flot/jquery.flot.min.js"></script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/flot/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->

		<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/ace-elements.min.js"></script>
		<!--<script src="/svn/thinkphp_3.2.3_core_extend/Public/assets/js/ace.min.js"></script>-->

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				
				//$("#sidebar").removeClass("menu-min");
				
				
				/**菜单点击效果**/
				var s_url=window.location.pathname; 
				var now_url = '';
				for(var i = 0;i<$("#side-menu li").length;i++){
					now_url=$("#side-menu li a").eq(i).attr("href");
				
					if(now_url == s_url){
						//判断是不是业界动态，true为不是,false是
						var isNoNewsMenu = $("#side-menu a").eq(i).parent().parent().hasClass("submenu");
						
						if(isNoNewsMenu==false){
							$("#side-menu a").eq(i).parent().addClass("active");
						}else{
							$("#news").removeClass("active");
							
							$("#side-menu a").eq(i).parent().addClass("active");
							$("#side-menu a").eq(i).parent().parent().parent().removeClass("open");
							
							$("#side-menu a").eq(i).parent().parent().parent().find(".submenu").css({"display":"block"});
						
						}
						
					}else{
						$("#side-menu a").eq(i).parent().removeClass("active");
						
					}
				}
				
			})
			
			 $('.nav-dropdown').hover(function(){
                    $(this).addClass("open");
				},function(){
                    $(this).removeClass("open");
             });
				
		</script>
	
</body>
</html>