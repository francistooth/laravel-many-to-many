<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>boolpress | Admin</title>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.css'
        integrity='sha512-8BU3emz11z9iF75b10oPjjpamM4Mz23yQFQymbtwyPN3mNWHxpgeqyrYnkIUP6A8KyAj5k2p3MiYLtYqew7gIw=='
        crossorigin='anonymous' />

    @vite(['resources/js/app.js'])
</head>

<body>

    @include('admin.partials.header')

    <div class="d-flex main-wrapper gap-3">
        @auth
            @include('admin.partials.aside')
        @endauth

        <div>
            @yield('content')
        </div>

    </div>


    @include('admin.partials.footer')


</body>

</html>
