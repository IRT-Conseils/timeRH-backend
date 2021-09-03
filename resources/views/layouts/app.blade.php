<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <script src="{{mix('js/app.js')}}" defer></script>
    <title>Time RH | @yield('title')</title>
</head>
<body>
<div>
    <nav>
        <ul>
            <li><a href="{{route('rh.dashboard')}}">Mon espace</a></li>
            <li><a href="{{route('rh.my-requests')}}">Mes demandes</a></li>
            <li><a href="{{route('rh.my-collaborators')}}">Collaborateurs</a></li>
            <li><a href="{{route('rh.entries-and-validations')}}">Saisie et validation</a></li>
            <li><a href="{{route('rh.temporary-workers')}}">Intérimaires</a></li>
            <li><a href="{{route('rh.medical-check-up')}}">Visite médicales</a></li>
            <li><a href="{{route('rh.e-document')}}">E-document</a></li>
        </ul>
    </nav>
    @yield('content')
</div>
</body>
</html>
