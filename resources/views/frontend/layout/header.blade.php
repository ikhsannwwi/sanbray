<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My awesome portfolio</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="{{asset('sanbray/css/style.css')}}">
    
    <link rel="icon" href="{{asset('images/icon/smea.ico')}}">

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</head>

<body>

    

@yield('content')



        <footer>
            <img class="footer-logo" src="./images/logo-2.svg" alt="">
            <div class="footer-socials">
                <a href="#"><box-icon name='instagram' type='logo' color="white" animation='tada' ></a>
                <a href="https://www.facebook.com/codersgyan"><box-icon name='facebook' type='logo' color="white" animation='tada' ></a>
                <a href="https://twitter.com/CoderGyan"> <box-icon name='twitter' type='logo' color="white" animation='tada' ></a>
                <a href="#"> <box-icon name='mail-send' type='logo' color="white" animation='tada' ></a>
                <a href="https://www.instagram.com/codersgyan/"> <box-icon name='linkedin' type='logo' color="white" animation='tada' ></a>
            </div>
            <div class="copyright">
                Copyright 2020 © Mochammad Ikhsan Nawawi
            </div>
        </footer>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{asset('sanbray/js/app.js')}}"></script>
</body>

</html>