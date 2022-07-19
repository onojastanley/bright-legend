
  <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">


  <link href="{{ asset('backend/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('backend/css/all.min.css') }}" rel="stylesheet" type="text/css">
	
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	

  <script src="{{ asset('backend/js/main/jquery.min.js') }}"></script>
  <script src="{{ asset('backend/js/main/bootstrap.bundle.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	

  <script src="{{ asset('backend/js/plugins/forms/inputs/typeahead/handlebars.min.js') }}"></script>
    <script src="{{ asset('backend/js/plugins/forms/inputs/alpaca/alpaca.min.js') }}"></script>	
	<script src="{{ asset('backend/js/plugins/forms/inputs/alpaca/price_format.min.js') }}"></script>
	<script src="{{ asset('backend/js/plugins/forms/selects/select2.min.js') }}"></script>
	<script src="{{ asset('backend/js/plugins/ui/prism.min.js') }}"></script>
  <script src="{{ asset('backend/js/plugins/editors/ckeditor/ckeditor.js') }}"></script>

  <script src="{{ asset('backend/js/app.js') }}"></script>
  <script src="{{ asset('backend/js/demo_pages/alpaca_advanced.js') }}"></script>

	<!-- /theme JS files -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
</head>


<body>

	<!-- Main navbar -->
	@include('admin.body.navbar')
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		@include('admin.body.sidebar')
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Page header -->
				@include('admin.body.header')
				<!-- /page header -->


				<!-- Content area -->
				@yield('admin')
				<!-- /content area -->


				<!-- Footer -->
				@include('admin.body.footer')
				<!-- /footer -->

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

	<script>
	 @if(Session::has('message'))
	 var type = "{{ Session::get('alert-type','info') }}"
	 switch(type){
		case 'info':
		toastr.info(" {{ Session::get('message') }} ");
		break;
	
		case 'success':
		toastr.success(" {{ Session::get('message') }} ");
		break;
	
		case 'warning':
		toastr.warning(" {{ Session::get('message') }} ");
		break;
	
		case 'error':
		toastr.error(" {{ Session::get('message') }} ");
		break; 
	 }
	 @endif 
	</script>
	
	
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	
	 
		
		
</body>
</html>
