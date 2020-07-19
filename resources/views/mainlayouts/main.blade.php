<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('/css/app.css')}}">

    <title>@yield('title')</title>

  </head>
  <body>
   <header class="text-center bg-primary">
   		Тестовый SHOP91
   </header>

	@yield('content')





   <footer class="text-center bg-primary" >
   		Здесь расположена различная информация для пользователя
   </footer>
<script src="{{asset('/js/app.js')}}"></script>
  </body>
</html>