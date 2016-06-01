<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>WIKI</title>
		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="/thinkphp_3.2.3_core_extend/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/thinkphp_3.2.3_core_extend/Public/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="/thinkphp_3.2.3_core_extend/Public/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->

		<!-- ace styles -->

		<link rel="stylesheet" href="/thinkphp_3.2.3_core_extend/Public/assets/css/ace.min.css" />
		<link rel="stylesheet" href="/thinkphp_3.2.3_core_extend/Public/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/thinkphp_3.2.3_core_extend/Public/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/thinkphp_3.2.3_core_extend/Public/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/html5shiv.js"></script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		
		
		<link rel="stylesheet" href="/thinkphp_3.2.3_core_extend/Public/dokuwiki/lib/styles/all.css" />
		<link rel="stylesheet" href="/thinkphp_3.2.3_core_extend/Public/dokuwiki/lib/styles/feed.css" />
		<link rel="stylesheet" href="/thinkphp_3.2.3_core_extend/Public/dokuwiki/lib/styles/print.css" />
		<link rel="stylesheet" href="/thinkphp_3.2.3_core_extend/Public/dokuwiki/lib/styles/screen.css" />
		
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			
			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							<!--<img src="/thinkphp_3.2.3_core_extend/Public/assets/images/LOGO.jpg" />-->
								&nbsp;WIKI知识库 Demo &nbsp;&nbsp;&nbsp;&nbsp;
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->
				
				<div class="navbar-header pull-left">
					<ul class="nav ace-nav">
						<li class="light-blue">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<!--<i class="icon-tasks"></i>-->
								<span class="">导航下拉1</span>
								<i class="icon-caret-down"></i>
							</a>

							<ul class="pull-left  dropdown-menu dropdown-caret dropdown-close"><!--pull-left小箭头靠左--->
								
								<li>
									<a href="/thinkphp_3.2.3_core_extend/index.php/Home/autoframe/index/id/20">
										<div class="clearfix">
											<span class="pull-left">自动化框架</span>
											
										</div>
									</a>
								</li>

								<li>
									<a href="/thinkphp_3.2.3_core_extend/index.php/Home/autodesign/index/id/21">
										<div class="clearfix">
											<span class="pull-left">自动化设计</span>
										</div>
									</a>
								</li>
							</ul>
						</li>
					
						<li class="light-blue">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<!--<i class="icon-tasks"></i>-->
								<span class="">导航下拉2</span>
								<i class="icon-caret-down"></i>
							</a>

							<ul class="pull-left dropdown-navbar dropdown-menu dropdown-caret dropdown-close"><!--pull-left小箭头靠左--->
								
								<li>
									<a href="/thinkphp_3.2.3_core_extend/index.php/Home/autoframe/index/id/20">
										<div class="clearfix">
											<span class="pull-left">自动化框架</span>
											<!--<span class="pull-right">15%</span>-->
										</div>

									</a>
								</li>

								<li>
									<a href="/thinkphp_3.2.3_core_extend/index.php/Home/autodesign/index/id/21">
										<div class="clearfix">
											<span class="pull-left">自动化设计</span>
											<!--<span class="pull-right">90%</span>-->
										</div>
									</a>
								</li>
							</ul>
						</li>
						
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<span class="">导航下拉3</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-left dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="/thinkphp_3.2.3_core_extend/index.php/Home/autoframe/index/id/20">
										自动化框架
									</a>
								</li>
								<!--<li class="divider"></li>-->
								<li>
									<a href="/thinkphp_3.2.3_core_extend/index.php/Home/autodesign/index/id/21">										
										自动化设计
									</a>
								</li>
							</ul>
						</li>
						
						<li class="light-blue">
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
										<img src="/thinkphp_3.2.3_core_extend/Public/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
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
										<img src="/thinkphp_3.2.3_core_extend/Public/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
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
										<img src="/thinkphp_3.2.3_core_extend/Public/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
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
								<img class="nav-user-photo" src="/thinkphp_3.2.3_core_extend/Public/assets/avatars/user.jpg" alt="Jason's Photo" />
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
							<a href="/thinkphp_3.2.3_core_extend/index.php/Home/news/index">
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
									<a href="/thinkphp_3.2.3_core_extend/index.php/Home/autoframe/index/id/20" >
										<i class="icon-double-angle-right"></i>
										自动化框架
									</a>
								</li>

								<li>
									<a href="/thinkphp_3.2.3_core_extend/index.php/Home/autodesign/index/id/21">
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
					
	
					
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="main-content1">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="/thinkphp_3.2.3_core_extend/Home/Index/right">Home</a>
							</li>

							<li>
								<a href="#">Forms</a>
							</li>
							<li class="active">Form Elements</li>
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
					<br/>
					<br/>
					<div class="page-content">
						<div class="page-header">
							<h1>
								Form Elements
								<small>
									<i class="icon-double-angle-right"></i>
									Common form elements and layouts
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Text Field </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Password Field </label>

										<div class="col-sm-9">
											<input type="password" id="form-field-2" placeholder="Password" class="col-xs-10 col-sm-5" />
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle">Inline help text</span>
											</span>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Readonly field </label>

										<div class="col-sm-9">
											<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="This text field is readonly!" />
											<span class="help-inline col-xs-12 col-sm-7">
												<label class="middle">
													<input class="ace" type="checkbox" id="id-disable-check" />
													<span class="lbl"> Disable it!</span>
												</label>
											</span>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Relative Sizing</label>

										<div class="col-sm-9">
											<input class="input-sm" type="text" id="form-field-4" placeholder=".input-sm" />
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5">Grid Sizing</label>

										<div class="col-sm-9">
											<div class="clearfix">
												<input class="col-xs-1" type="text" id="form-field-5" placeholder=".col-xs-1" />
											</div>

											<div class="space-2"></div>

											<div class="help-block" id="input-span-slider"></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">Input with Icon</label>

										<div class="col-sm-9">
											<span class="input-icon">
												<input type="text" id="form-field-icon-1" />
												<i class="icon-leaf blue"></i>
											</span>

											<span class="input-icon input-icon-right">
												<input type="text" id="form-field-icon-2" />
												<i class="icon-leaf green"></i>
											</span>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Tooltip and help button</label>

										<div class="col-sm-9">
											<input data-rel="tooltip" type="text" id="form-field-6" placeholder="Tooltip on hover" title="Hello Tooltip!" data-placement="bottom" />
											<span class="help-button" data-rel="popover" data-trigger="hover" data-placement="left" data-content="More details." title="Popover on hover">?</span>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-tags">Tag input</label>

										<div class="col-sm-9">
											<input type="text" name="tags" id="form-field-tags" value="Tag Input Control" placeholder="Enter tags ..." />
										</div>
									</div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="button">
												<i class="icon-ok bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>

									<div class="hr hr-24"></div>

									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="widget-box">
												<div class="widget-header">
													<h4>Text Area</h4>

													<div class="widget-toolbar">
														<a href="#" data-action="collapse">
															<i class="icon-chevron-up"></i>
														</a>

														<a href="#" data-action="close">
															<i class="icon-remove"></i>
														</a>
													</div>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<div>
															<label for="form-field-8">Default</label>

															<textarea class="form-control" id="form-field-8" placeholder="Default Text"></textarea>
														</div>

														<hr />
														<div>
															<label for="form-field-9">With Character Limit</label>

															<textarea class="form-control limited" id="form-field-9" maxlength="50"></textarea>
														</div>

														<hr />
														<div>
															<label for="form-field-11">Autosize</label>

															<textarea id="form-field-11" class="autosize-transition form-control"></textarea>
														</div>
													</div>
												</div>
											</div>
										</div><!-- /span -->

										<div class="col-xs-12 col-sm-4">
											<div class="widget-box">
												<div class="widget-header">
													<h4>Masked Input</h4>

													<span class="widget-toolbar">
														<a href="#" data-action="settings">
															<i class="icon-cog"></i>
														</a>

														<a href="#" data-action="reload">
															<i class="icon-refresh"></i>
														</a>

														<a href="#" data-action="collapse">
															<i class="icon-chevron-up"></i>
														</a>

														<a href="#" data-action="close">
															<i class="icon-remove"></i>
														</a>
													</span>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<div>
															<label for="form-field-mask-1">
																Date
																<small class="text-success">99/99/9999</small>
															</label>

															<div class="input-group">
																<input class="form-control input-mask-date" type="text" id="form-field-mask-1" />
																<span class="input-group-btn">
																	<button class="btn btn-sm btn-default" type="button">
																		<i class="icon-calendar bigger-110"></i>
																		Go!
																	</button>
																</span>
															</div>
														</div>

														<hr />
														<div>
															<label for="form-field-mask-2">
																Phone
																<small class="text-warning">(999) 999-9999</small>
															</label>

															<div class="input-group">
																<span class="input-group-addon">
																	<i class="icon-phone"></i>
																</span>

																<input class="form-control input-mask-phone" type="text" id="form-field-mask-2" />
															</div>
														</div>

														<hr />
														<div>
															<label for="form-field-mask-3">
																Product Key
																<small class="text-error">a*-999-a999</small>
															</label>

															<div class="input-group">
																<input class="form-control input-mask-product" type="text" id="form-field-mask-3" />
																<span class="input-group-addon">
																	<i class="icon-key"></i>
																</span>
															</div>
														</div>

														<hr />
														<div>
															<label for="form-field-mask-4">
																Eye Script
																<small class="text-info">~9.99 ~9.99 999</small>
															</label>

															<div>
																<input class="input-medium input-mask-eyescript" type="text" id="form-field-mask-4" />
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- /span -->

										<div class="col-xs-12 col-sm-4">
											<div class="widget-box">
												<div class="widget-header">
													<h4>Select Box</h4>

													<span class="widget-toolbar">
														<a href="#" data-action="settings">
															<i class="icon-cog"></i>
														</a>

														<a href="#" data-action="reload">
															<i class="icon-refresh"></i>
														</a>

														<a href="#" data-action="collapse">
															<i class="icon-chevron-up"></i>
														</a>

														<a href="#" data-action="close">
															<i class="icon-remove"></i>
														</a>
													</span>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<div>
															<label for="form-field-select-1">Default</label>

															<select class="form-control" id="form-field-select-1">
																<option value="">&nbsp;</option>
																<option value="AL">Alabama</option>
																<option value="AK">Alaska</option>
																<option value="AZ">Arizona</option>
																<option value="AR">Arkansas</option>
																<option value="CA">California</option>
																<option value="CO">Colorado</option>
																<option value="CT">Connecticut</option>
																<option value="DE">Delaware</option>
																<option value="FL">Florida</option>
																<option value="GA">Georgia</option>
																<option value="HI">Hawaii</option>
																<option value="ID">Idaho</option>
																<option value="IL">Illinois</option>
																<option value="IN">Indiana</option>
																<option value="IA">Iowa</option>
																<option value="KS">Kansas</option>
																<option value="KY">Kentucky</option>
																<option value="LA">Louisiana</option>
																<option value="ME">Maine</option>
																<option value="MD">Maryland</option>
																<option value="MA">Massachusetts</option>
																<option value="MI">Michigan</option>
																<option value="MN">Minnesota</option>
																<option value="MS">Mississippi</option>
																<option value="MO">Missouri</option>
																<option value="MT">Montana</option>
																<option value="NE">Nebraska</option>
																<option value="NV">Nevada</option>
																<option value="NH">New Hampshire</option>
																<option value="NJ">New Jersey</option>
																<option value="NM">New Mexico</option>
																<option value="NY">New York</option>
																<option value="NC">North Carolina</option>
																<option value="ND">North Dakota</option>
																<option value="OH">Ohio</option>
																<option value="OK">Oklahoma</option>
																<option value="OR">Oregon</option>
																<option value="PA">Pennsylvania</option>
																<option value="RI">Rhode Island</option>
																<option value="SC">South Carolina</option>
																<option value="SD">South Dakota</option>
																<option value="TN">Tennessee</option>
																<option value="TX">Texas</option>
																<option value="UT">Utah</option>
																<option value="VT">Vermont</option>
																<option value="VA">Virginia</option>
																<option value="WA">Washington</option>
																<option value="WV">West Virginia</option>
																<option value="WI">Wisconsin</option>
																<option value="WY">Wyoming</option>
															</select>
														</div>

														<hr />
														<div>
															<label for="form-field-select-2">Multiple</label>

															<select class="form-control" id="form-field-select-2" multiple="multiple">
																<option value="AL">Alabama</option>
																<option value="AK">Alaska</option>
																<option value="AZ">Arizona</option>
																<option value="AR">Arkansas</option>
																<option value="CA">California</option>
																<option value="CO">Colorado</option>
																<option value="CT">Connecticut</option>
																<option value="DE">Delaware</option>
																<option value="FL">Florida</option>
																<option value="GA">Georgia</option>
																<option value="HI">Hawaii</option>
																<option value="ID">Idaho</option>
																<option value="IL">Illinois</option>
																<option value="IN">Indiana</option>
																<option value="IA">Iowa</option>
																<option value="KS">Kansas</option>
																<option value="KY">Kentucky</option>
																<option value="LA">Louisiana</option>
																<option value="ME">Maine</option>
																<option value="MD">Maryland</option>
																<option value="MA">Massachusetts</option>
																<option value="MI">Michigan</option>
																<option value="MN">Minnesota</option>
																<option value="MS">Mississippi</option>
																<option value="MO">Missouri</option>
																<option value="MT">Montana</option>
																<option value="NE">Nebraska</option>
																<option value="NV">Nevada</option>
																<option value="NH">New Hampshire</option>
																<option value="NJ">New Jersey</option>
																<option value="NM">New Mexico</option>
																<option value="NY">New York</option>
																<option value="NC">North Carolina</option>
																<option value="ND">North Dakota</option>
																<option value="OH">Ohio</option>
																<option value="OK">Oklahoma</option>
																<option value="OR">Oregon</option>
																<option value="PA">Pennsylvania</option>
																<option value="RI">Rhode Island</option>
																<option value="SC">South Carolina</option>
																<option value="SD">South Dakota</option>
																<option value="TN">Tennessee</option>
																<option value="TX">Texas</option>
																<option value="UT">Utah</option>
																<option value="VT">Vermont</option>
																<option value="VA">Virginia</option>
																<option value="WA">Washington</option>
																<option value="WV">West Virginia</option>
																<option value="WI">Wisconsin</option>
																<option value="WY">Wyoming</option>
															</select>
														</div>

														<hr />
														<div>
															<label for="form-field-select-3">Chosen</label>

															<br />
															<select class="width-80 chosen-select" id="form-field-select-3" data-placeholder="Choose a Country...">
																<option value="">&nbsp;</option>
																<option value="AL">Alabama</option>
																<option value="AK">Alaska</option>
																<option value="AZ">Arizona</option>
																<option value="AR">Arkansas</option>
																<option value="CA">California</option>
																<option value="CO">Colorado</option>
																<option value="CT">Connecticut</option>
																<option value="DE">Delaware</option>
																<option value="FL">Florida</option>
																<option value="GA">Georgia</option>
																<option value="HI">Hawaii</option>
																<option value="ID">Idaho</option>
																<option value="IL">Illinois</option>
																<option value="IN">Indiana</option>
																<option value="IA">Iowa</option>
																<option value="KS">Kansas</option>
																<option value="KY">Kentucky</option>
																<option value="LA">Louisiana</option>
																<option value="ME">Maine</option>
																<option value="MD">Maryland</option>
																<option value="MA">Massachusetts</option>
																<option value="MI">Michigan</option>
																<option value="MN">Minnesota</option>
																<option value="MS">Mississippi</option>
																<option value="MO">Missouri</option>
																<option value="MT">Montana</option>
																<option value="NE">Nebraska</option>
																<option value="NV">Nevada</option>
																<option value="NH">New Hampshire</option>
																<option value="NJ">New Jersey</option>
																<option value="NM">New Mexico</option>
																<option value="NY">New York</option>
																<option value="NC">North Carolina</option>
																<option value="ND">North Dakota</option>
																<option value="OH">Ohio</option>
																<option value="OK">Oklahoma</option>
																<option value="OR">Oregon</option>
																<option value="PA">Pennsylvania</option>
																<option value="RI">Rhode Island</option>
																<option value="SC">South Carolina</option>
																<option value="SD">South Dakota</option>
																<option value="TN">Tennessee</option>
																<option value="TX">Texas</option>
																<option value="UT">Utah</option>
																<option value="VT">Vermont</option>
																<option value="VA">Virginia</option>
																<option value="WA">Washington</option>
																<option value="WV">West Virginia</option>
																<option value="WI">Wisconsin</option>
																<option value="WY">Wyoming</option>
															</select>
														</div>

														<hr />
														<div>
															<div class="row">
																<div class="col-sm-6">
																	<span class="bigger-110">Multiple</span>
																</div><!-- /span -->

																<div class="col-sm-6">
																	<span class="pull-right inline">
																		<span class="grey">style:</span>

																		<span class="btn-toolbar inline middle no-margin">
																			<span id="chosen-multiple-style" data-toggle="buttons" class="btn-group no-margin">
																				<label class="btn btn-xs btn-yellow active">
																					1
																					<input type="radio" value="1" />
																				</label>

																				<label class="btn btn-xs btn-yellow">
																					2
																					<input type="radio" value="2" />
																				</label>
																			</span>
																		</span>
																	</span>
																</div><!-- /span -->
															</div>

															<div class="space-2"></div>

															<select multiple="" class="width-80 chosen-select" id="form-field-select-4" data-placeholder="Choose a Country...">
																<option value="">&nbsp;</option>
																<option value="AL">Alabama</option>
																<option value="AK">Alaska</option>
																<option value="AZ">Arizona</option>
																<option value="AR">Arkansas</option>
																<option value="CA">California</option>
																<option value="CO">Colorado</option>
																<option value="CT">Connecticut</option>
																<option value="DE">Delaware</option>
																<option value="FL">Florida</option>
																<option value="GA">Georgia</option>
																<option value="HI">Hawaii</option>
																<option value="ID">Idaho</option>
																<option value="IL">Illinois</option>
																<option value="IN">Indiana</option>
																<option value="IA">Iowa</option>
																<option value="KS">Kansas</option>
																<option value="KY">Kentucky</option>
																<option value="LA">Louisiana</option>
																<option value="ME">Maine</option>
																<option value="MD">Maryland</option>
																<option value="MA">Massachusetts</option>
																<option value="MI">Michigan</option>
																<option value="MN">Minnesota</option>
																<option value="MS">Mississippi</option>
																<option value="MO">Missouri</option>
																<option value="MT">Montana</option>
																<option value="NE">Nebraska</option>
																<option value="NV">Nevada</option>
																<option value="NH">New Hampshire</option>
																<option value="NJ">New Jersey</option>
																<option value="NM">New Mexico</option>
																<option value="NY">New York</option>
																<option value="NC">North Carolina</option>
																<option value="ND">North Dakota</option>
																<option value="OH">Ohio</option>
																<option value="OK">Oklahoma</option>
																<option value="OR">Oregon</option>
																<option value="PA">Pennsylvania</option>
																<option value="RI">Rhode Island</option>
																<option value="SC">South Carolina</option>
																<option value="SD">South Dakota</option>
																<option value="TN">Tennessee</option>
																<option value="TX">Texas</option>
																<option value="UT">Utah</option>
																<option value="VT">Vermont</option>
																<option value="VA">Virginia</option>
																<option value="WA">Washington</option>
																<option value="WV">West Virginia</option>
																<option value="WI">Wisconsin</option>
																<option value="WY">Wyoming</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div><!-- /span -->
									</div><!-- /row -->

									<div class="space-24"></div>

									<h3 class="header smaller lighter blue">
										Checkboxes & Radio
										<small>All Checkboxes, Radios and Switch Buttons Are Pure CSS</small>
									</h3>

									<div class="row">
										<div class="col-xs-12 col-sm-5">
											<div class="control-group">
												<label class="control-label bolder blue">Checkbox</label>

												<div class="checkbox">
													<label>
														<input name="form-field-checkbox" type="checkbox" class="ace" />
														<span class="lbl"> choice 1</span>
													</label>
												</div>

												<div class="checkbox">
													<label>
														<input name="form-field-checkbox" type="checkbox" class="ace" />
														<span class="lbl"> choice 2</span>
													</label>
												</div>

												<div class="checkbox">
													<label>
														<input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox" />
														<span class="lbl"> choice 3</span>
													</label>
												</div>

												<div class="checkbox">
													<label class="block">
														<input name="form-field-checkbox" disabled="" type="checkbox" class="ace" />
														<span class="lbl"> disabled</span>
													</label>
												</div>
											</div>
										</div>

										<div class="col-xs-12 col-sm-6">
											<div class="control-group">
												<label class="control-label bolder blue">Radio</label>

												<div class="radio">
													<label>
														<input name="form-field-radio" type="radio" class="ace" />
														<span class="lbl"> radio option 1</span>
													</label>
												</div>

												<div class="radio">
													<label>
														<input name="form-field-radio" type="radio" class="ace" />
														<span class="lbl"> radio option 2</span>
													</label>
												</div>

												<div class="radio">
													<label>
														<input name="form-field-radio" type="radio" class="ace" />
														<span class="lbl"> radio option 3</span>
													</label>
												</div>

												<div class="radio">
													<label>
														<input disabled="" name="form-field-radio" type="radio" class="ace" />
														<span class="lbl"> disabled</span>
													</label>
												</div>
											</div>
										</div>
									</div><!-- /row -->

									<hr />
									<div class="form-group">
										<label class="control-label col-xs-12 col-sm-3">On/Off Switches</label>

										<div class="controls col-xs-12 col-sm-9">
											<div class="row">
												<div class="col-xs-3">
													<label>
														<input name="switch-field-1" class="ace ace-switch" type="checkbox" />
														<span class="lbl"></span>
													</label>
												</div>

												<div class="col-xs-3">
													<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-2" type="checkbox" />
														<span class="lbl"></span>
													</label>
												</div>

												<div class="col-xs-3">
													<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-3" type="checkbox" />
														<span class="lbl"></span>
													</label>
												</div>
											</div>

											<div class="row">
												<div class="col-xs-3">
													<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-4" type="checkbox" />
														<span class="lbl"></span>
													</label>
												</div>

												<div class="col-xs-3">
													<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-5" type="checkbox" />
														<span class="lbl"></span>
													</label>
												</div>

												<div class="col-xs-3">
													<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-6" type="checkbox" />
														<span class="lbl"></span>
													</label>
												</div>

												<div class="col-xs-3">
													<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-7" type="checkbox" />
														<span class="lbl"></span>
													</label>
												</div>
											</div>
										</div>
									</div>

									<hr />
									<div class="row">
										<div class="col-sm-4">
											<div class="widget-box">
												<div class="widget-header">
													<h4>Custom File Input</h4>

													<span class="widget-toolbar">
														<a href="#" data-action="collapse">
															<i class="icon-chevron-up"></i>
														</a>

														<a href="#" data-action="close">
															<i class="icon-remove"></i>
														</a>
													</span>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<input type="file" id="id-input-file-2" />
														<input multiple="" type="file" id="id-input-file-3" />
														<label>
															<input type="checkbox" name="file-format" id="id-file-format" class="ace" />
															<span class="lbl"> Allow only images</span>
														</label>
													</div>
												</div>
											</div>
										</div>

										<div class="col-sm-4">
											<div class="widget-box">
												<div class="widget-header">
													<h4>jQuery UI Sliders</h4>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<div class="row">
															<div class="col-xs-3 col-md-2">
																<div id="slider-range"></div>
															</div>

															<div class="col-xs-9 col-md-10">
																<div id="eq">
																	<span class="ui-slider-green">77</span>
																	<span class="ui-slider-red">55</span>
																	<span class="ui-slider-purple">33</span>
																	<span class="ui-slider-orange">40</span>
																	<span class="ui-slider-dark">88</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-sm-4">
											<div class="widget-box">
												<div class="widget-header">
													<h4>Spinners</h4>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<input type="text" class="input-mini" id="spinner1" />
														<div class="space-6"></div>

														<input type="text" class="input-mini" id="spinner2" />
														<div class="space-6"></div>

														<input type="text" class="input-mini" id="spinner3" />
													</div>
												</div>
											</div>
										</div>
									</div>

									<hr />
									<div class="row">
										<div class="col-sm-4">
											<div class="widget-box">
												<div class="widget-header">
													<h4>Date Picker</h4>

													<span class="widget-toolbar">
														<a href="#" data-action="settings">
															<i class="icon-cog"></i>
														</a>

														<a href="#" data-action="reload">
															<i class="icon-refresh"></i>
														</a>

														<a href="#" data-action="collapse">
															<i class="icon-chevron-up"></i>
														</a>

														<a href="#" data-action="close">
															<i class="icon-remove"></i>
														</a>
													</span>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<label for="id-date-picker-1">Date Picker</label>

														<div class="row">
															<div class="col-xs-8 col-sm-11">
																<div class="input-group">
																	<input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
																	<span class="input-group-addon">
																		<i class="icon-calendar bigger-110"></i>
																	</span>
																</div>
															</div>
														</div>

														<hr />
														<label for="id-date-range-picker-1">Date Range Picker</label>

														<div class="row">
															<div class="col-xs-8 col-sm-11">
																<div class="input-group">
																	<span class="input-group-addon">
																		<i class="icon-calendar bigger-110"></i>
																	</span>

																	<input class="form-control" type="text" name="date-range-picker" id="id-date-range-picker-1" />
																</div>
															</div>
														</div>

														<hr />
														<label for="timepicker1">Time Picker</label>

														<div class="input-group bootstrap-timepicker">
															<input id="timepicker1" type="text" class="form-control" />
															<span class="input-group-addon">
																<i class="icon-time bigger-110"></i>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-sm-4">
											<div class="widget-box">
												<div class="widget-header">
													<h4>
														<i class="icon-tint"></i>
														Color Picker
													</h4>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<div class="row-fluid">
															<label for="colorpicker1">Color Picker</label>
														</div>

														<div class="control-group">
															<div class="bootstrap-colorpicker">
																<input id="colorpicker1" type="text" class="input-small" />
															</div>
														</div>

														<hr />
														<label for="simple-colorpicker-1">Custom Color Picker</label>

														<select id="simple-colorpicker-1" class="hide">
															<option value="#ac725e">#ac725e</option>
															<option value="#d06b64">#d06b64</option>
															<option value="#f83a22">#f83a22</option>
															<option value="#fa573c">#fa573c</option>
															<option value="#ff7537">#ff7537</option>
															<option value="#ffad46" selected="">#ffad46</option>
															<option value="#42d692">#42d692</option>
															<option value="#16a765">#16a765</option>
															<option value="#7bd148">#7bd148</option>
															<option value="#b3dc6c">#b3dc6c</option>
															<option value="#fbe983">#fbe983</option>
															<option value="#fad165">#fad165</option>
															<option value="#92e1c0">#92e1c0</option>
															<option value="#9fe1e7">#9fe1e7</option>
															<option value="#9fc6e7">#9fc6e7</option>
															<option value="#4986e7">#4986e7</option>
															<option value="#9a9cff">#9a9cff</option>
															<option value="#b99aff">#b99aff</option>
															<option value="#c2c2c2">#c2c2c2</option>
															<option value="#cabdbf">#cabdbf</option>
															<option value="#cca6ac">#cca6ac</option>
															<option value="#f691b2">#f691b2</option>
															<option value="#cd74e6">#cd74e6</option>
															<option value="#a47ae2">#a47ae2</option>
															<option value="#555">#555</option>
														</select>
													</div>
												</div>
											</div>
										</div>

										<div class="col-sm-4">
											<div class="widget-box">
												<div class="widget-header">
													<h4>
														<i class="icon-dashboard"></i>
														Knob Input
													</h4>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<div class="control-group">
															<div class="row">
																<div class="col-xs-6 center">
																	<div class="knob-container inline">
																		<input type="text" class="input-small knob" value="15" data-min="0" data-max="100" data-step="10" data-width="80" data-height="80" data-thickness=".2" />
																	</div>
																</div>

																<div class="col-xs-6  center">
																	<div class="knob-container inline">
																		<input type="text" class="input-small knob" value="41" data-min="0" data-max="100" data-width="80" data-height="80" data-thickness=".2" data-fgColor="#87B87F" data-displayPrevious="true" data-angleArc="250" data-angleOffset="-125" />
																	</div>
																</div>
															</div>

															<div class="row">
																<div class="col-xs-12 center">
																	<div class="knob-container inline">
																		<input type="text" class="input-small knob" data-min="0" data-max="10" data-width="150" data-height="150" data-thickness=".2" data-fgColor="#B8877F" data-angleOffset="90" data-cursor="true" />
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>

								<div class="hr hr-18 dotted hr-double"></div>

								<h4 class="pink">
									<i class="icon-hand-right green"></i>
									<a href="#modal-form" role="button" class="blue" data-toggle="modal"> Form Inside a Modal Box </a>
								</h4>

								<div class="hr hr-18 dotted hr-double"></div>
								<h4 class="header green">Form Layouts</h4>

								<div class="row">
									<div class="col-sm-5">
										<div class="widget-box">
											<div class="widget-header">
												<h4>Default</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<form>
														<!-- <legend>Form</legend> -->

														<fieldset>
															<label>Label name</label>

															<input type="text" placeholder="Type something&hellip;" />
															<span class="help-block">Example block-level help text here.</span>

															<label class="pull-right">
																<input type="checkbox" class="ace" />
																<span class="lbl"> check me out</span>
															</label>
														</fieldset>

														<div class="form-actions center">
															<button type="button" class="btn btn-sm btn-success">
																Submit
																<i class="icon-arrow-right icon-on-right bigger-110"></i>
															</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-7">
										<div class="widget-box">
											<div class="widget-header">
												<h4>Inline Forms</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<form class="form-inline">
														<input type="text" class="input-small" placeholder="Username" />
														<input type="password" class="input-small" placeholder="Password" />
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> remember me</span>
														</label>

														<button type="button" class="btn btn-info btn-sm">
															<i class="icon-key bigger-110"></i>
															Login
														</button>
													</form>
												</div>
											</div>
										</div>

										<div class="space-6"></div>

										<div class="widget-box">
											<div class="widget-header widget-header-small">
												<h5 class="lighter">Search Form</h5>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<form class="form-search">
														<div class="row">
															<div class="col-xs-12 col-sm-8">
																<div class="input-group">
																	<input type="text" class="form-control search-query" placeholder="Type your query" />
																	<span class="input-group-btn">
																		<button type="button" class="btn btn-purple btn-sm">
																			Search
																			<i class="icon-search icon-on-right bigger-110"></i>
																		</button>
																	</span>
																</div>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="modal-form" class="modal" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="blue bigger">Please fill the following form fields</h4>
											</div>

											<div class="modal-body overflow-visible">
												<div class="row">
													<div class="col-xs-12 col-sm-5">
														<div class="space"></div>

														<input type="file" />
													</div>

													<div class="col-xs-12 col-sm-7">
														<div class="form-group">
															<label for="form-field-select-3">Location</label>

															<div>
																<select class="chosen-select" data-placeholder="Choose a Country...">
																	<option value="">&nbsp;</option>
																	<option value="AL">Alabama</option>
																	<option value="AK">Alaska</option>
																	<option value="AZ">Arizona</option>
																	<option value="AR">Arkansas</option>
																	<option value="CA">California</option>
																	<option value="CO">Colorado</option>
																	<option value="CT">Connecticut</option>
																	<option value="DE">Delaware</option>
																	<option value="FL">Florida</option>
																	<option value="GA">Georgia</option>
																	<option value="HI">Hawaii</option>
																	<option value="ID">Idaho</option>
																	<option value="IL">Illinois</option>
																	<option value="IN">Indiana</option>
																	<option value="IA">Iowa</option>
																	<option value="KS">Kansas</option>
																	<option value="KY">Kentucky</option>
																	<option value="LA">Louisiana</option>
																	<option value="ME">Maine</option>
																	<option value="MD">Maryland</option>
																	<option value="MA">Massachusetts</option>
																	<option value="MI">Michigan</option>
																	<option value="MN">Minnesota</option>
																	<option value="MS">Mississippi</option>
																	<option value="MO">Missouri</option>
																	<option value="MT">Montana</option>
																	<option value="NE">Nebraska</option>
																	<option value="NV">Nevada</option>
																	<option value="NH">New Hampshire</option>
																	<option value="NJ">New Jersey</option>
																	<option value="NM">New Mexico</option>
																	<option value="NY">New York</option>
																	<option value="NC">North Carolina</option>
																	<option value="ND">North Dakota</option>
																	<option value="OH">Ohio</option>
																	<option value="OK">Oklahoma</option>
																	<option value="OR">Oregon</option>
																	<option value="PA">Pennsylvania</option>
																	<option value="RI">Rhode Island</option>
																	<option value="SC">South Carolina</option>
																	<option value="SD">South Dakota</option>
																	<option value="TN">Tennessee</option>
																	<option value="TX">Texas</option>
																	<option value="UT">Utah</option>
																	<option value="VT">Vermont</option>
																	<option value="VA">Virginia</option>
																	<option value="WA">Washington</option>
																	<option value="WV">West Virginia</option>
																	<option value="WI">Wisconsin</option>
																	<option value="WY">Wyoming</option>
																</select>
															</div>
														</div>

														<div class="space-4"></div>

														<div class="form-group">
															<label for="form-field-username">Username</label>

															<div>
																<input class="input-large" type="text" id="form-field-username" placeholder="Username" value="alexdoe" />
															</div>
														</div>

														<div class="space-4"></div>

														<div class="form-group">
															<label for="form-field-first">Name</label>

															<div>
																<input class="input-medium" type="text" id="form-field-first" placeholder="First Name" value="Alex" />
																<input class="input-medium" type="text" id="form-field-last" placeholder="Last Name" value="Doe" />
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="modal-footer">
												<button class="btn btn-sm" data-dismiss="modal">
													<i class="icon-remove"></i>
													Cancel
												</button>

												<button class="btn btn-sm btn-primary">
													<i class="icon-ok"></i>
													Save
												</button>
											</div>
										</div>
									</div>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								Inside
								<b>.container</b>
							</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/thinkphp_3.2.3_core_extend/Public/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/thinkphp_3.2.3_core_extend/Public/assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/thinkphp_3.2.3_core_extend/Public/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<!--<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/bootstrap.min.js"></script>-->
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="/thinkphp_3.2.3_core_extend/Public/assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/chosen.jquery.min.js"></script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/date-time/moment.min.js"></script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/date-time/daterangepicker.min.js"></script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/jquery.knob.min.js"></script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/jquery.autosize.min.js"></script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/jquery.maskedinput.min.js"></script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/bootstrap-tag.min.js"></script>

		<!-- ace scripts -->

		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/ace-elements.min.js"></script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
					$("#sidebar").removeClass("menu-min");		
			});
		</script>
	
			
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
			window.jQuery || document.write("<script src='/thinkphp_3.2.3_core_extend/Public/assets/js/jquery-2.0.3.min.js'>"+"<"+"script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/thinkphp_3.2.3_core_extend/Public/assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/thinkphp_3.2.3_core_extend/Public/assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/bootstrap.min.js"></script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="/thinkphp_3.2.3_core_extend/Public/assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/jquery.slimscroll.min.js"></script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/jquery.sparkline.min.js"></script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/flot/jquery.flot.min.js"></script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/flot/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->

		<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/ace-elements.min.js"></script>
		<!--<script src="/thinkphp_3.2.3_core_extend/Public/assets/js/ace.min.js"></script>-->

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
				
		</script>
	
</body>
</html>