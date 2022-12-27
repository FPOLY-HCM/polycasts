<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite('resources/js/app.js')
    @routes
    @inertiaHead
</head>
<body class="bg-[#151f32] bg-[url('https://laracasts.com/images/forum/upper-gradient.svg')] bg-no-repeat bg-50% text-white">
    @inertia
</body>
</html>
