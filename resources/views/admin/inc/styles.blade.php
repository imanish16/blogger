	<link href="{{asset('assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
	<script src="{{asset('assets/js/loader.js')}}"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">

	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
	<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}">
	<link href="{{asset('assets/css/tables/table-basic.css')}}" rel="stylesheet" type="text/css" />


	{{-- Table Datatable Alternative --}}
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}}">

<!-- Datatable STYLES -->
<link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}}">

@if ($page_name != 'coming_soon' && $page_name != 'contact_us' && $page_name != 'error404' && $page_name != 'error500' && $page_name != 'error503' && $page_name != 'faq' && $page_name != 'helpdesk' && $page_name != 'maintenence' && $page_name != 'privacy' && $page_name != 'auth_boxed' && $page_name != 'auth_default')
<link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
@endif


  {{-- Image Uploader --}}
  <link type="text/css" rel="stylesheet" href="{{ asset('css/backend/image-uploader.min.css') }}">
  <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


	{{-- Table Datatable Custom --}}
	
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/custom_dt_custom.css')}}">

  
  <link href="{{asset('assets/css/components/tabs-accordian/custom-tabs.css')}}" rel="stylesheet" type="text/css" />



	{{-- Select2 --}}
	<link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/select2/select2.min.css')}}">
	{{-- Forms Date Range Picker --}}
	<link href="{{asset('plugins/flatpickr/flatpickr.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('plugins/noUiSlider/nouislider.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('plugins/flatpickr/custom-flatpickr.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('plugins/noUiSlider/custom-nouiSlider.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('plugins/bootstrap-range-Slider/bootstrap-slider.css')}}" rel="stylesheet" type="text/css">
	

{{-- Full Calendar --}}
<link href="{{asset('css/backend/calendar/main.css')}}" rel="stylesheet" type="text/css">
<script src="{{asset('js/backend/calendar/main.js')}}"></script>

{{-- fontawesome --}}
<link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{asset('plugins/font-icons/fontawesome/css/regular.css')}}">
<link rel="stylesheet" href="{{asset('plugins/font-icons/fontawesome/css/fontawesome.css')}}">
      <style>
        @import "https://code.highcharts.com/css/highcharts.css";
#container {
    height: 400px;
}



.highcharts-figure,
.highcharts-data-table table {
  min-width: 320px;
  max-width: 600px;
  margin: 1em auto;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #ebebeb;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}

.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}

.highcharts-data-table th {
  font-weight: 600;
  padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
  padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}

.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
          .feather-icon .icon-section {
            padding: 30px;
        }
        .feather-icon .icon-section h4 {
            color: #3b3f5c;
            font-size: 17px;
            font-weight: 600;
            margin: 0;
            margin-bottom: 16px;
        }
        .feather-icon .icon-content-container {
            padding: 0 16px;
            width: 86%;
            margin: 0 auto;
            border: 1px solid #bfc9d4;
            border-radius: 6px;
        }
        .feather-icon .icon-section p.fs-text {
            padding-bottom: 30px;
            margin-bottom: 30px;
        }
        .feather-icon .icon-container { cursor: pointer; }
        .feather-icon .icon-container svg {
            color: #3b3f5c;
            margin-right: 6px;
            vertical-align: middle;
            width: 20px;
            height: 20px;
            fill: rgba(0, 23, 55, 0.08);
        }
        .feather-icon .icon-container:hover svg {
            color: #1b55e2;
            fill: rgba(27, 85, 226, 0.23921568627450981);
        }
        .feather-icon .icon-container span { display: none; }
        .feather-icon .icon-container:hover span { color: #1b55e2; }
        .feather-icon .icon-link {
            color: #1b55e2;
            font-weight: 600;
            font-size: 14px;
        }


        /*FAB*/
        .fontawesome .icon-section {
            padding: 30px;
        }
        .fontawesome .icon-section h4 {
            color: #3b3f5c;
            font-size: 17px;
            font-weight: 600;
            margin: 0;
            margin-bottom: 16px;
        }
        .fontawesome .icon-content-container {
            padding: 0 16px;
            width: 86%;
            margin: 0 auto;
            border: 1px solid #bfc9d4;
            border-radius: 6px;
        }
        .fontawesome .icon-section p.fs-text {
            padding-bottom: 30px;
            margin-bottom: 30px;
        }
        .fontawesome .icon-container { cursor: pointer; }
        .fontawesome .icon-container i {
            font-size: 20px;
            color: #3b3f5c;
            vertical-align: middle;
            margin-right: 10px;
        }
        .fontawesome .icon-container:hover i { color: #1b55e2; }
        .fontawesome .icon-container span { color: #888ea8; display: none; }
        .fontawesome .icon-container:hover span { color: #1b55e2; }
        .fontawesome .icon-link {
            color: #1b55e2;
            font-weight: 600;
            font-size: 14px;
        }
      </style>

      



	{{-- Forms Checkbox Radio --}}
	<link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}">
	{{-- Forms File Upload --}}
	<link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />
	{{-- Forms Markdown --}}
	<link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('plugins/editors/markdown/simplemde.min.css')}}">
	{{-- User Profile --}}
	<link href="{{asset('assets/css/users/user-profile.css')}}" rel="stylesheet" type="text/css" />
	{{-- User Account Settings --}}
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/dropify/dropify.min.css')}}">
	<link href="{{asset('assets/css/users/account-setting.css')}}" rel="stylesheet" type="text/css" />


<link href="{{asset('plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" /> 
@php 
$page_name = Request::segment(3);
@endphp 
@if ($page_name != 'coming_soon' && $page_name != 'contact_us' && $page_name != 'error404' && $page_name != 'error500' && $page_name != 'error503' && $page_name != 'faq' && $page_name != 'helpdesk' && $page_name != 'maintenence' && $page_name != 'privacy' && $page_name != 'auth_boxed' && $page_name != 'auth_default')
<link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
@endif
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

{{-- Jquery Date time Picker --}}
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


@switch($page_name)
    @case('analytics')
      {{-- Dashboard --}}
<link href="{{asset('plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/dashboard/dash_2.css')}}" rel="stylesheet" type="text/css" />
      @break

    @default
       
@endswitch
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->