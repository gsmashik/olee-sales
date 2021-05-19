<!DOCTYPE html>
<html lang="en" class="theme-light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{asset('public/olee/sales/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('public/olee/sales/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('public/olee/sales/css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{asset('public/olee/sales/jquery.dataTables.min.css')}}">

<link rel="stylesheet" href="{{asset('public/olee/sales/css/lightbox.min.css')}}">

<link rel="stylesheet" href="{{asset('public/olee/sales/css/colReorder.dataTables.min.css')}}">

<link rel="stylesheet" href="{{asset('public/olee/sales/css/style.css')}}">
<link rel="stylesheet" href="{{asset('public/olee/sales/css/menubar.css')}}">
<link rel="stylesheet" href="{{asset('public/olee/sales/css/tabs.css')}}">
<link rel="stylesheet" href="{{asset('public/olee/sales/css/color.css')}}">
 @yield('css')
</head>
<body>
@yield('content') 

<script src="{{ asset('public/olee/sales/js/jquery-1.12.4.js') }}"></script>
<script src="{{ asset('public/olee/sales/js/popper.min.js') }}"></script>
<script src="{{ asset('public/olee/sales/js/bootstrap.min.js') }}"></script>


<!--  Context Menu -->

<!-- DAtatable -->
<script src="{{ asset('public/olee/sales/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/olee/sales/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('public/olee/sales/js/dataTables.colReorder.min.js') }}"></script>
<script src="{{ asset('public/olee/sales/js/dataTables.rowReorder.min.js') }}"></script>
<script src="{{ asset('public/olee/sales/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('public/olee/sales/js/sweetalert.min.js') }}"></script>

      
    <script src=
"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" >
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script><!-- Scripts -->
    <script src="{{ asset('public/olee/sales/js/sales.js') }}" defer></script>


<script>
      var path = "{{ route('autocomplete') }}";

    $('input.itemcode').typeahead({

        source:  function (query, process) {

        return $.get(path, { query: query }, function (data) {

                return process(data);
				

            }
			);

        }


    }
	);
</script>


@yield('js') 
</body>
</html>