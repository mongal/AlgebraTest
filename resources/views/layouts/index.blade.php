<!DOCTYPE html>
<html lang="en">

<html>
    <head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>@yield('title')</title>
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		
		@stack('styles')
		
    </head>
    <body>
        
        <div class="container">
            @yield('content')
        </div>
		@stack('scripts')
    </body>
</html>