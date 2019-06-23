<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Begin page -->
<div id="wrapper">

<!-- Top Bar Start -->
<div class="topbar">
	<!-- LOGO -->
	<div class="topbar-left">
		<div class="text-center">
			<a href="index.html" class="logo"><img src="template/upbound/images/logo.png" height="20" alt="logo"></a>
			<a href="index.html" class="logo-sm"><img src="template/upbound/images/logo_sm.png" height="30" alt="logo"></a>
		</div>
	</div>
	<!-- Button mobile view to collapse sidebar menu -->
	<div class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="">
				<div class="pull-left">
					<button type="button" class="button-menu-mobile open-left waves-effect waves-light">
						<i class="ion-navicon"></i>
					</button>
					<span class="clearfix"></span>
				</div>

				<ul class="nav navbar-nav navbar-right pull-right">
					<li class="dropdown hidden-xs">
						<a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light notification-icon-box" data-toggle="dropdown" aria-expanded="true">
							<i class="ion-ios7-bell"></i> <span class="badge badge-xs badge-danger">17</span>
						</a>
						<ul class="dropdown-menu dropdown-menu-lg">
							<li class="text-center notifi-title">Notification <span class="badge badge-xs badge-success">3</span></li>
							<li class="list-group">
							   <!-- list item-->
							   <a href="javascript:void(0);" class="list-group-item">
								  <div class="media">
									  <i class="fa fa-diamond text-danger noti-sm-icon"></i>
									  <div class="noti-content">
										  <div class="media-heading">Your order is placed</div>
										  <p class="m-0">
											  <small>Dummy text of the printing and typesetting industry.</small>
										  </p>
									  </div>
								  </div>
							   </a>
							   <!-- list item-->
								<a href="javascript:void(0);" class="list-group-item">
								  <div class="media">
									  <i class="fa  fa-envelope-o text-primary noti-sm-icon"></i>
									  <div class="noti-content">
										  <div class="media-heading">New Message received</div>
										  <p class="m-0">
											  <small>You have 87 unread messages</small>
										  </p>
									  </div>
								  </div>
								</a>
								<!-- list item-->
								<a href="javascript:void(0);" class="list-group-item">
									<i class="fa fa-fighter-jet text-warning noti-sm-icon"></i>
									<div class="noti-content">
										<div class="media-heading">Your item is shipped.</div>
										<p class="m-0">
											<small>It is a long established fact that a reader will</small>
										</p>
									</div>
								</a>
							   <!-- last list item -->
								<a href="javascript:void(0);" class="list-group-item">
								  <small class="text-primary">See all notifications</small>
								</a>
							</li>
						</ul>
					</li>
					<li class="hidden-xs">
						<a href="#" id="btn-fullscreen" class="waves-effect waves-light notification-icon-box"><i class="ion-qr-scanner"></i></a>
					</li>
					<li class="dropdown">
						<a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
							<img src="template/upbound/images/users/avatar-1.jpg" alt="user-img" class="img-circle">
							<span class="profile-username">
								James Grim <span class="caret"></span>
							</span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="javascript:void(0)"> Profile</a></li>
							<li><a href="javascript:void(0)"><span class="badge badge-success pull-right">5</span> Settings </a></li>
							<li><a href="javascript:void(0)"> Lock screen</a></li>
							<li class="divider"></li>
							<li><a href="javascript:void(0)"> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
</div>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->

<div class="left side-menu">
	<div class="sidebar-inner slimscrollleft">

		<form class="sidebar-search">
			<div class="">
				<input type="text" class="form-control search-bar" placeholder="Search...">
			</div>
			<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
		</form>

		<div class="user-details">
			<div class="text-center">
				<img src="template/upbound/images/users/avatar-1.jpg" alt="" class="img-circle">
			</div>
			<div class="user-info">
				<div class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">James A. Grim <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="javascript:void(0)"> Profile</a></li>
						<li><a href="javascript:void(0)"> Settings</a></li>
						<li><a href="javascript:void(0)"> Lock screen</a></li>
						<li class="divider"></li>
						<li><a href="javascript:void(0)"> Logout</a></li>
					</ul>
				</div>

				<!--<p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p>-->
			</div>
		</div>
		<!--- Divider -->


		<div id="sidebar-menu">
			<ul>
				<li>
					<a href="index.html" class="waves-effect"><i class="ion-ios7-analytics"></i><span> Dashboard <span class="badge badge-success pull-right">21</span></span></a>
				</li>

				<li class="has_sub">
					<a href="javascript:void(0);" class="waves-effect"><i class="ion-connection-bars"></i><span> Charts </span><span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
					<ul class="list-unstyled">
						<li><a href="charts-chartjs.html">Chartjs</a></li>
						<li><a href="charts-flot.html">Flot Chart</a></li>
						<li><a href="charts-morris.html">Morris Chart</a></li>
						<li><a href="charts-chartist.html">Chartist Chart</a></li>
						<li><a href="charts-other.html">Other Chart</a></li>
					</ul>
				</li>

				<li class="has_sub">
					<a href="javascript:void(0);" class="waves-effect"><i class="ion-folder"></i> <span> Icons </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
					<ul class="list-unstyled">
						<li><a href="icons-material.html">Material Design</a></li>
						<li><a href="icons-ion.html">Ion Icons</a></li>
						<li><a href="icons-fontawesome.html">Font awesome</a></li>
						<li><a href="icons-glyphicons.html">Glyphicons</a></li>
						<li><a href="icons-themify.html">Themify Icons</a></li>
					</ul>
				</li>

				<li class="has_sub">
					<a href="javascript:void(0);" class="waves-effect"><i class="ion-clipboard"></i><span> Forms </span><span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
					<ul class="list-unstyled">
						<li><a href="form-elements.html">General Elements</a></li>
						<li><a href="form-validation.html">Form Validation</a></li>
						<li><a href="form-advanced.html">Advanced Form</a></li>
						<li><a href="form-editors.html">Form Editors</a></li>
						<li><a href="form-uploads.html">Multiple File Upload</a></li>
						<li><a href="form-mask.html">Form Mask</a></li>
						<li><a href="form-xeditable.html">Form Xeditable</a></li>
					</ul>
				</li>

				<li class="has_sub">
					<a href="javascript:void(0);" class="waves-effect"><i class="ion-beaker"></i> <span> User Interface </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
					<ul class="list-unstyled">
						<li><a href="ui-buttons.html">Buttons</a></li>
						<li><a href="ui-panels.html">Panels</a></li>
						<li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
						<li><a href="ui-modals.html">Modals</a></li>
						<li><a href="ui-components.html">Components</a></li>
						<li><a href="ui-progressbars.html">Progress Bars</a></li>
						<li><a href="ui-alerts.html">Alerts</a></li>
						<li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
						<li><a href="ui-grid.html">Grid</a></li>
					</ul>
				</li>

				<li>
					<a href="typography.html" class="waves-effect"><i class="ion-funnel"></i><span> Typography <span class="badge badge-primary pull-right">4</span></span></a>
				</li>

				<li class="has_sub">
					<a href="javascript:void(0);" class="waves-effect"><i class="ion-cube"></i><span> Tables </span><span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
					<ul class="list-unstyled">
						<li><a href="tables-basic.html">Basic Tables</a></li>
						<li><a href="tables-datatable.html">Data Table</a></li>
						<li><a href="tables-responsive.html">Responsive Table</a></li>
						<li><a href="tables-editable.html">Editable Table</a></li>
					</ul>
				</li>

				<li class="menu-title">Extras</li>

				<li class="has_sub">
					<a href="javascript:void(0);" class="waves-effect"><i class="ion-map"></i><span> Maps </span><span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
					<ul class="list-unstyled">
						<li><a href="maps-google.html"> Google Map</a></li>
						<li><a href="maps-vector.html"> Vector Map</a></li>
					</ul>
				</li>

				<li>
					<a href="calendar.html" class="waves-effect"><i class="ion-calendar"></i><span> Calendar <span class="badge badge-warning pull-right">NEW</span></span></a>
				</li>

				<li class="has_sub">
					<a href="javascript:void(0);" class="waves-effect"><i class="ion-disc"></i><span> Pages </span><span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
					<ul class="list-unstyled">
						<li><a href="pages-timeline.html">Timeline</a></li>
						<li><a href="pages-invoice.html">Invoice</a></li>
						<li><a href="pages-directory.html">Directory</a></li>
						<li><a href="pages-login.html">Login</a></li>
						<li><a href="pages-register.html">Register</a></li>
						<li><a href="pages-recoverpw.html">Recover Password</a></li>
						<li><a href="pages-lock-screen.html">Lock Screen</a></li>
						<li><a href="pages-blank.html">Blank Page</a></li>
						<li><a href="pages-404.html">Error 404</a></li>
						<li><a href="pages-500.html">Error 500</a></li>
					</ul>
				</li>

				<li>
					<a href="collapse-menu.html" class="waves-effect"><i class="ion-log-in"></i><span> Menu Collapse </span></a>
				</li>

				<li>
					<a href="small-menu.html" class="waves-effect"><i class="ion-toggle-filled"></i><span> Small Menu <span class="badge badge-info pull-right">1</span></span></a>
				</li>

			</ul>
		</div>
		<div class="clearfix"></div>
	</div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->

<!-- Start right Content here -->

<div class="content-page">
	<!-- Start content -->
	<div class="content">

		<div class="">
			<div class="page-header-title">
				<h4 class="page-title">Dashboard</h4>
			</div>
		</div>

		<div class="page-content-wrapper ">
			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<div class="panel panel-primary">
							<div class="panel-body">
								<h4 class="m-b-30 m-t-0">Responsive Example</h4>
								<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>id</th>
											<th>username</th>
											<th>email</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>username</td>
											<td>email</td>
										</tr>
										<tr>
											<td>1</td>
											<td>username</td>
											<td>email</td>
										</tr>
										<tr>
											<td>1</td>
											<td>username</td>
											<td>email</td>
										</tr>
										<tr>
											<td>1</td>
											<td>username</td>
											<td>email</td>
										</tr>
										<tr>
											<td>1</td>
											<td>username</td>
											<td>email</td>
										</tr>
										<tr>
											<td>1</td>
											<td>username</td>
											<td>email</td>
										</tr>
										<tr>
											<td>1</td>
											<td>username</td>
											<td>email</td>
										</tr>
										<tr>
											<td>1</td>
											<td>username</td>
											<td>email</td>
										</tr>
										<tr>
											<td>1</td>
											<td>username</td>
											<td>email</td>
										</tr>
										<tr>
											<td>1</td>
											<td>username</td>
											<td>email</td>
										</tr>
										<tr>
											<td>1</td>
											<td>username</td>
											<td>email</td>
										</tr>
										<tr>
											<td>1</td>
											<td>username</td>
											<td>email</td>
										</tr>
										<tr>
											<td>1</td>
											<td>username</td>
											<td>email</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div> <!-- Page content Wrapper -->

	</div> <!-- content -->

	<footer class="footer">
		 <!-- © <?php echo Date('Y'); ?> Democi by moeghifar - with Upbound template. -->
	</footer>

</div>
<!-- End Right content here -->

</div>
<!-- END wrapper -->