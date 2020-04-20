<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href= "{{ asset('css/style.css') }}">

    <title> @yield('title')</title>
</head>

<body>
    <div class="container">
        <!-- header -->
        <div class="nav">
        <nav class="dropdown">
                <button id="start-bt"> Start </button>
                <div class="dropdown-content">
                    <div class="photoDropdown">
                        <a href="/photos">Photos</a>
                            <div class="photoDropdown-content">
                                <a href="">Teste Photo 1</a>
                                <a href="">Teste Photo 1</a>           
                            </div>
                    </div>
                    <div class="musicDropdown">
                        <a href="#">Music</a>
                            <div class="musicDropdown-content">
                                <a href="">Teste Music1</a>
                                <a href="">Teste Music1</a>           
                            </div>
                    </div>
                    <a href="/documents">Documents</a>
                    <a href="/">Home</a>
                </div>
            </nav>
        </div>
        @yield ('content')
    </div>

</body>

</html>