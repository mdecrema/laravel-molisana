<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    </head>
    <body>

        @include('partials.header')

        <main>
        @yield('main_content')
        </main>

        @include('partials.footer')
    
        <script type="text-javascript" src="{{asset('js/app.js')}}"></script>
    </body>
</html>


