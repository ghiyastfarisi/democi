<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Begin page -->
<div id="wrapper">

<!-- Top Bar Start -->
<div class="topbar">
	<!-- LOGO -->
	<div class="topbar-left">
		<div class="text-center">
			<!--<a href="index.html" class="logo"><span>Up</span>Bond</a>-->
			<!--<a href="index.html" class="logo-sm"><span>U</span></a>-->
			<a href="index.html" class="logo"><img src="assets/images/logo.png" height="20" alt="logo"></a>
			<a href="index.html" class="logo-sm"><img src="assets/images/logo_sm.png" height="30" alt="logo"></a>
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
							<img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle">
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
				<img src="assets/images/users/avatar-1.jpg" alt="" class="img-circle">
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
					<div class="col-sm-6 col-lg-3">
						<div class="panel">
							<div class="panel-heading">
								<h4 class="panel-title text-muted m-t-10 font-light">Total Subscription</h4>
							</div>
							<div class="panel-body p-t-10">
								<h2 class="m-t-0 m-b-15 text-warning font-light"><i class="mdi mdi-arrow-down-bold-circle-outline m-r-10"></i>89,52,125</h2>
								<p class=" m-b-0 m-t-20 text-muted"><b>48%</b> From Last 24 Hours</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-lg-3">
						<div class="panel">
							<div class="panel-heading">
								<h4 class="panel-title text-muted m-t-10 font-light">Unique Visitors</h4>
							</div>
							<div class="panel-body p-t-10">
								<h2 class="m-t-0 m-b-15 text-success font-light"><i class="mdi mdi-arrow-up-bold-circle-outline m-r-10"></i>4,52,564</h2>
								<p class="text-muted m-b-0 m-t-20"><b>22%</b> From Last 24 Hours</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-lg-3">
						<div class="panel">
							<div class="panel-heading">
								<h4 class="panel-title text-muted m-t-10 font-light">Order Status</h4>
							</div>
							<div class="panel-body p-t-10">
								<h2 class="m-t-0 m-b-15 text-purple font-light"><i class="mdi mdi-arrow-up-bold-circle-outline m-r-10"></i>65,21,542</h2>
								<p class="m-b-0 m-t-20 text-muted"><b>42%</b> Orders in Last 10 months</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-lg-3">
						<div class="panel">
							<div class="panel-heading">
								<h4 class="panel-title text-muted m-t-10 font-light">Monthly Earnings</h4>
							</div>
							<div class="panel-body p-t-10">
								<h2 class="m-t-0 m-b-15 text-pink font-light"><i class="mdi mdi-arrow-down-bold-circle-outline m-r-10"></i>56,21,256</h2>
								<p class="text-muted m-b-0 m-t-20"><b>35%</b> From Last 1 Month</p>
							</div>
						</div>
					</div>
				</div>

				<div class="row">

					<div class="col-lg-4">
						<div class="panel panel-primary">
							<div class="panel-body">
								<h4 class="m-t-0">Monthly Earnings</h4>

								<ul class="list-inline widget-chart m-t-20 text-center">
									<li>
										<h4 class=""><b>3654</b></h4>
										<p class="text-muted m-b-0">Marketplace</p>
									</li>
									<li>
										<h4 class=""><b>954</b></h4>
										<p class="text-muted m-b-0">Last week</p>
									</li>
									<li>
										<h4 class=""><b>8462</b></h4>
										<p class="text-muted m-b-0">Last Month</p>
									</li>
								</ul>

								<div id="morris-donut-example" style="height: 300px"></div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="panel panel-primary">
							<div class="panel-body">
								<h4 class="m-t-0">Revenue</h4>

								<ul class="list-inline widget-chart m-t-20 text-center">
									<li>
										<h4 class=""><b>5248</b></h4>
										<p class="text-muted m-b-0">Marketplace</p>
									</li>
									<li>
										<h4 class=""><b>321</b></h4>
										<p class="text-muted m-b-0">Last week</p>
									</li>
									<li>
										<h4 class=""><b>964</b></h4>
										<p class="text-muted m-b-0">Last Month</p>
									</li>
								</ul>

								<div id="morris-bar-example" style="height: 300px"></div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="panel panel-primary">
							<div class="panel-body">
								<h4 class="m-t-0">Email Sent</h4>

								<ul class="list-inline widget-chart m-t-20 text-center">
									<li>
										<h4 class=""><b>3652</b></h4>
										<p class="text-muted m-b-0">Marketplace</p>
									</li>
									<li>
										<h4 class=""><b>5421</b></h4>
										<p class="text-muted m-b-0">Last week</p>
									</li>
									<li>
										<h4 class=""><b>9652</b></h4>
										<p class="text-muted m-b-0">Last Month</p>
									</li>
								</ul>

								<div id="morris-area-example" style="height: 300px"></div>
							</div>
						</div>
					</div>

				</div>
				<!-- end row -->


				<div class="row">

					<div class="col-md-7">
						<div class="panel">
							<div class="panel-body">
								<h4 class="m-b-30 m-t-0">Recent Contacts</h4>
								<div class="row">
									<div class="col-xs-12">
										<div class="table-responsive">
											<table class="table table-hover m-b-0">
												<thead>
												<tr>
													<th>Name</th>
													<th>Position</th>
													<th>Office</th>
													<th>Age</th>
													<th>Start date</th>
													<th>Salary</th>
												</tr>

												</thead>
												<tbody>
												<tr>
													<td>Tiger Nixon</td>
													<td>System Architect</td>
													<td>Edinburgh</td>
													<td>61</td>
													<td>2011/04/25</td>
													<td>$320,800</td>
												</tr>
												<tr>
													<td>Garrett Winters</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>63</td>
													<td>2011/07/25</td>
													<td>$170,750</td>
												</tr>
												<tr>
													<td>Ashton Cox</td>
													<td>Junior Technical Author</td>
													<td>San Francisco</td>
													<td>66</td>
													<td>2009/01/12</td>
													<td>$86,000</td>
												</tr>
												<tr>
													<td>Cedric Kelly</td>
													<td>Senior Javascript Developer</td>
													<td>Edinburgh</td>
													<td>22</td>
													<td>2012/03/29</td>
													<td>$433,060</td>
												</tr>
												<tr>
													<td>Airi Satou</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>33</td>
													<td>2008/11/28</td>
													<td>$162,700</td>
												</tr>
												<tr>
													<td>Brielle Williamson</td>
													<td>Integration Specialist</td>
													<td>New York</td>
													<td>61</td>
													<td>2012/12/02</td>
													<td>$372,000</td>
												</tr>
												<tr>
													<td>Herrod Chandler</td>
													<td>Sales Assistant</td>
													<td>San Francisco</td>
													<td>59</td>
													<td>2012/08/06</td>
													<td>$137,500</td>
												</tr>

												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end col -->
					<div class="col-md-5">
						<div class="panel">
							<div class="panel-body">
								<h4 class="m-b-30 m-t-0">Goal Completion</h4>

								<p class="font-600">Add Product to cart <span class="text-primary pull-right"><b>80%</b></span></p>
								<div class="progress">
									<div class="progress-bar progress-bar-primary " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
									</div><!-- /.progress-bar .progress-bar-danger -->
								</div><!-- /.progress .no-rounded -->

								<hr/>

								<p class="font-600">Complete Purchases <span class="text-success pull-right"><b>50%</b></span></p>
								<div class="progress">
									<div class="progress-bar progress-bar-success " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
									</div><!-- /.progress-bar .progress-bar-pink -->
								</div><!-- /.progress .no-rounded -->

								<hr/>

								<p class="font-600">Visit Premium plan <span class="text-pink pull-right"><b>70%</b></span></p>
								<div class="progress">
									<div class="progress-bar progress-bar-pink " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
									</div><!-- /.progress-bar .progress-bar-info -->
								</div><!-- /.progress .no-rounded -->

								<hr/>

								<p class="font-600">Send Inquiries <span class="text-primary pull-right"><b>65%</b></span></p>
								<div class="progress">
									<div class="progress-bar progress-bar-primary " role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
									</div><!-- /.progress-bar .progress-bar-warning -->
								</div><!-- /.progress .no-rounded -->

								<hr/>

								<p class="font-600">Monthly Purchases <span class="text-success pull-right"><b>25%</b></span></p>
								<div class="progress">
									<div class="progress-bar progress-bar-success " role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
									</div><!-- /.progress-bar .progress-bar-warning -->
								</div><!-- /.progress .no-rounded -->

								<hr class="m-b-15"/>
							</div>
						</div>
					</div> <!-- end col -->

				</div>
				<!-- end row -->


			</div><!-- container -->


		</div> <!-- Page content Wrapper -->

	</div> <!-- content -->

	<footer class="footer">
		 © 2017 Upbond - By Themesdesign.
	</footer>

</div>
<!-- End Right content here -->

</div>
<!-- END wrapper -->