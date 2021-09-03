<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}" defer></script>
    <title>Time RH | @yield('title')</title>
</head>
<body>
<div>
    <nav>
        <ul>
            <li><a href="#">Mon espace</a></li>
            <li><a href="#">Mes demandes</a></li>
            <li><a href="#">Collaborateurs</a></li>
            <li><a href="#">Saisie et validation</a></li>
            <li><a href="#">Intérimaires</a></li>
            <li><a href="#">Visite médicales</a></li>
            <li><a href="#">E-document</a></li>
        </ul>
    </nav>
    @yield('content')
</div>
</body>
</html>
