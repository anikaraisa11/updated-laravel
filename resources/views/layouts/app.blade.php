<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<!--begin::Body-->
<body id="kt_app_body" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" class="app-default">
<!--begin::Theme mode setup on page load-->
<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
      <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
         @include('includes.header')
         	
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
			
            @include('includes.sidemenu')
            <!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main"> 
			  @yield('content')
          
      @include('includes.footer')
      </div>
					<!--end:::Main-->
      	</div>
				<!--end::Wrapper-->
		
    
      </div>
			<!--end::Page-->
      </div>
		<!--end::App-->

@include('includes.footerjs')

</body>
</html>