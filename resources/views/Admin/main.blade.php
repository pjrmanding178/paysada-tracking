
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body class="css-body-admin-main">
<div class="flex flex-col justify-center items-center h-screen bg-gray-900 text-center">
    <h1 class="title-css font-black text-9xl">PAYSADA</h1>
    <h3 class="secTitle-css text-3xl font-bold mt-5 text-white">JEEPNEY FARE COLLECTION <br> & TRACKING PLATFORM</h3>
    <h6 class="my-5 text-white">Admin</h6>
    <a href="/live">
        <button class="button-main-css p-5 rounded font-bold bg-blue-500 text-white">OPEN LOCATION</button>
    </a>
</div>

</body>
</html>