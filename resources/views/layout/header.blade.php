	<!DOCTYPE html>







<!--



Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8



Author: KeenThemes



Website: http://www.keenthemes.com/



Contact: support@keenthemes.com



Follow: www.twitter.com/keenthemes



Dribbble: www.dribbble.com/keenthemes



Like: www.facebook.com/keenthemes



Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes



Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes



License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.



-->



<html lang="en">
<head>



	<base href="">



	<meta charset="utf-8" />



	<title>	{{setWebsite('website_name')}} </title>



	<meta name="description" content="Latest updates and statistic charts">



	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--begin::Fonts -->



	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">







	<!--end::Fonts -->



	<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" />

	<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.1/css/fixedHeader.dataTables.min.css" />

	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.0.2/css/responsive.dataTables.min.css" /> -->

	<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />



	<!--begin::Page Vendors Styles(used by this page) -->

<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

	<link href="{{ asset('/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />







	<!--end::Page Vendors Styles -->



	<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js" type="text/javascript"></script>

	<script src="{{ asset('/assets/js/pages/crud/forms/widgets/select2.js') }}" type="text/javascript"></script>



	<!--begin::Global Theme Styles(used by all pages) -->



	<link href="{{ asset('/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />



	<link href="{{ asset('/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />


	<style type="text/css">
		th {
			font-weight: bold !important;
			color: ##602040 !important;
		}
		.toast.toast-success {
			background: ##602040;
		}
		.toast.toast-warning {
			background: red;
		}
		.toast.toast-error {
			background: #808000;
		}
		.toast.toast-info {
			background: #808000;
		}
	</style>
	<style type="text/css">
		@media only screen and (max-width: 600px) {
			.top{

				display: block !important;
			}
			.bottom{

				display: block !important;
			}
		}
		.kt-portlet{
			/*width: 100%;*/
			margin: 0 auto;
		}
		.top{
			justify-content: space-between;
			display: flex;
		}
		.bottom{
			justify-content: space-between;
			display: flex;
		}
		label
		{
			font-weight: bold !important;
		}

		.list-content{
			margin-bottom: 10px;
		}
		.list-content a{
			padding: 10px 15px;
			width: 100%;
			display: inline-block;
			background-color: #f5f5f5;
			position: relative;
			color: #565656;
			font-weight: 400;
			border-radius: 4px;
		}
		.list-content a[aria-expanded="true"] i{
			transform: rotate(180deg);
		}
		.list-content a i{
			text-align: right;
			position: absolute;
			top: 15px;
			right: 10px;
			transition: 0.5s;
		}


	</style>



	<!--end::Global Theme Styles -->



	<script src="{{ asset('/assets/plugins/global/plugins.bundle.js') }}" type="text/javascript"></script>



	<script src="{{ asset('/assets/js/scripts.bundle.js') }}" type="text/javascript"></script>



	<!--begin::Layout Skins(used by all pages) -->





	<!--end::Layout Skins -->



	<link rel="shortcut icon" href="{{ asset('/assets/media/logos/logo-10-sm.png') }}" />



	@stack('styles')



</head>







<!-- end::Head -->







<!-- begin::Body -->



<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading">







	<!-- begin:: Page -->







	<!-- begin:: Header Mobile -->



	<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">



		<div class="kt-header-mobile__logo">


			<a href="{{route('home')}}">
				<img alt="Logo" src="{{ asset(setWebsite('logo') ?? 'frontend/assets/images/logo-header-05.png') }}"  style="height: 50px; width: 50px;" />
			</a>


		</div>



		<div class="kt-header-mobile__toolbar">



			<div class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></div>



			<div class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></div>



			<div class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></div>



		</div>



	</div>







	<!-- end:: Header Mobile -->



	<div class="kt-grid kt-grid--hor kt-grid--root">



		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">







			<!-- begin:: Aside -->



			<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>



			<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">







				<!-- begin:: Aside Menu -->



				<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">



					<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">



						<ul class="kt-menu__nav ">
							<li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true"><a href="{{route('home')}}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-protection"></i><span class="kt-menu__link-text">Dashboard</span></a></li>
							<li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true" title="User Managment"><a href="{{route('user.index')}}" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-user-circle"></i><span class="kt-menu__link-text">User Managment</span></a></li>
							<li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true" title="Year Managment"><a href="{{route('year.index')}}" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-calendar"></i><span class="kt-menu__link-text">Year</span></a></li>
                            <li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true" title="Genre Managment"><a href="{{route('genre.index')}}" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-file"></i><span class="kt-menu__link-text">Genre</span></a></li>
                            <li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true" title="Type Managment"><a href="{{route('type.index')}}" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-envelope"></i><span class="kt-menu__link-text">Type</span></a></li>
                            <li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true" title="Setting"><a href="{{route('setting.index')}}" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-cog"></i><span class="kt-menu__link-text">Setting</span></a></li>
                            <li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true" title="Banner"><a href="{{route('banner.index')}}" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-image"></i><span class="kt-menu__link-text">Banner</span></a></li>
                        </ul>
					</div>
				</div>







				<!-- end:: Aside Menu -->



			</div>







			<!-- end:: Aside -->



			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">







				<!-- begin:: Header -->



				<div id="kt_header" class="kt-header kt-grid kt-grid--ver  kt-header--fixed ">







					<!-- begin:: Aside -->



					<div class="kt-header__brand kt-grid__item  " id="kt_header_brand" style="background-color: white !important;">



						<div class="kt-header__brand-logo">
							<a href="{{route('home')}}">
								<img alt="Logo" src="{{ asset(setWebsite('logo') ?? 'frontend/assets/images/logo-header-05.png') }}" style=" height: 75px; width: 75px;" />
							</a>
						</div>



					</div>







					<!-- end:: Aside -->







					<!-- begin:: Title -->



					<h3 class="kt-header__title kt-grid__item">
						<a href="{{route('home')}}" style=" color: #602040;">
							{{setWebsite('website_name') ?? env('APP_NAME')}}
						</a>
					</h3>







					<!-- end:: Title -->







					<!-- begin: Header Menu -->



					<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>



					<div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_header_menu_wrapper">



						<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">



							<ul class="kt-menu__nav ">
								<li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="{{route('home')}}" class="kt-menu__link "><span class="kt-menu__link-text">Dashboard</span></a></li>
								<li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="{{route('user.index')}}" class="kt-menu__link "><span class="kt-menu__link-text">User Master</span></a></li>
								<li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="{{route('movie.index')}}" class="kt-menu__link "><span class="kt-menu__link-text">Movie Master</span></a></li>
								<li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="{{route('web-series.index')}}" class="kt-menu__link "><span class="kt-menu__link-text">Web Series Master</span></a></li>
								<li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="{{route('year.index')}}" class="kt-menu__link "><span class="kt-menu__link-text">Year Master</span></a></li>

							</ul>



						</div>



					</div>







					<!-- end: Header Menu -->
