<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{url('css/style.css')}}" />
    <title>Home page example</title>
   

</head>

<body>
@yield('homepage')
@yield('loginpage')
@yield('registerpage')

<script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <script src="{{url('js/index.js')}}"></script>
</body>
<footer style ="background=#eee;padding =20 px;text-align=center;">
    copy right 2023 xpertbotacademy
</footer>
</html>
