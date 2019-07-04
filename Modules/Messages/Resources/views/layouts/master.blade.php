<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Messages</title>

       {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/messages.css') }}"> --}}

    </head>
    <body>
        @yield('content')

        {{-- Laravel Mix - JS File --}}
        {{-- <script src="{{ mix('js/messages.js') }}"></script> --}}
    </body>
</html> -->

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>BOOTSTRAP CHAT EXAMPLE</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet" />

</head>

<body style="font-family:Verdana">
    <div class="container">
        <div class="row " style="padding-top:40px;">
            <h3 class="text-center">BOOTSTRAP CHAT EXAMPLE </h3>
            <br /><br />
            @yield('content')
            @include('messages::layouts.includes.list-chat')
        </div>
    </div>
</body>

</html>