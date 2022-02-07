@include('admin.Layouts.header')
<body>
@include('admin.Modules.top-nav')
@include('admin.Modules.left-nav')
	@yield('content')
@include('admin.Layouts.footer')