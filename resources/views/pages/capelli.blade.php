<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Henny+Penny&family=Tilt+Neon&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .container-fluid {
            background-color: white;
            padding: 0;
        }
        .navbar-nav .nav-link {
            padding: 1.5rem 1rem;
            line-height: 2;
            margin-right: 30px;
        }
        .navbar-brand {
            margin-left: 5%;
            font-family: "Henny Penny", system-ui;
            font-size: 24px;
            font-weight: bold;
            color:  #B9D9EB;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .navbar-brand:hover{
            color:  #B9D9EB;
        }
        main div {
            width: 100%;
            height: 370px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        main div h6 {
            margin: 0;
        }
        .form {
            max-width: 500px;
            min-width: 100px;
            height: 200px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
        }
        .form-group label {
            position: relative;
            padding-left: 30px;
            padding-right: 30px;
        }
        .icon-black {
            color: black;
        }
        .custom-color {
            color: #B9D9EB !important;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light" style="padding: 0%;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Whiskers</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" style="font-size: 22px;">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Donna
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('pages.capelli') }}">Capelli</a></li>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Taglio</a></li>
                                <li><a class="dropdown-item" href="#">Colore</a></li>
                                <li><a class="dropdown-item" href="#">Styling</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item dropdown-toggle" href="#">Viso</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Cura della pelle</a></li>
                                <li><a class="dropdown-item" href="#">Trucco</a></li>
                                <li><a class="dropdown-item" href="#">Maschere</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item dropdown-toggle" href="#">Unghie</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Manicure</a></li>
                                <li><a class="dropdown-item" href="#">Pedicure</a></li>
                                <li><a class="dropdown-item" href="#">Smalti</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item dropdown-toggle" href="#">Depilazione</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Cera</a></li>
                                <li><a class="dropdown-item" href="#">Rasatura</a></li>
                                <li><a class="dropdown-item" href="#">Epilatori</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Uomo
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Taglio uomo</a></li>
                        <li><a class="dropdown-item" href="#">Colore uomo</a></li>
                        <li><a class="dropdown-item" href="#">Taglio barba</a></li>
                        <li><a class="dropdown-item" href="#">Trattamenti viso uomo</a></li>
                        <li><a class="dropdown-item" href="#">Barbiere</a></li>
                        <li><a class="dropdown-item" href="#">Depilazione uomo</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Massaggio
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Massaggio rilassante</a></li>
                        <li><a class="dropdown-item" href="#">Massaggio drenante</a></li>
                        <li><a class="dropdown-item" href="#">Massaggio decontratturante</a></li>
                        <li><a class="dropdown-item" href="#">Pressoterapia</a></li>
                        <li><a class="dropdown-item" href="#">Massaggio tailandese</a></li>
                        <li><a class="dropdown-item" href="#">Massaggio del viso</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" style="font-size: 22px;">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="font-size: 18px;">
                <button class="btn btn-outline-success" type="submit" style="font-size: 20px;">Search</button>
            </form>
        </div>
    </div>
</nav>
<main>
    <div>
        <div style="width: 100%; height: 370px; background-color: #B9D9EB; display: flex; align-items: center; justify-content: center; margin-top: 20px;">
            <div class="form">
                <form action="#" method="post">
                    <div style="display: flex; justify-content: space-between; margin-top: 10px;">
                        <div style="text-align: center;">
                            <div style="position: relative; top: -20%; cursor: pointer;" onclick="changeColor('trattamenti')">
                                <i class="fas fa-scissors icon-black" style="font-size: 28px; margin-right: 0;" id="trattamenti"></i>
                                <div style="position: absolute; bottom: -20px; top:20px;" id="trattamenti-text">Trattamenti</div>
                            </div>
                        </div>
                        <div style="text-align: center; margin-left: 250px; display: flex; align-items: center;">
                            <div style="position: relative; top: -20%; cursor: pointer;" onclick="changeColor('saloni')">
                                <i class="fas fa-shop icon-black" style="font-size: 28px; margin-right: 10px;" id="saloni"></i>
                                <div style="position: absolute; bottom: -20px; top:20px;" id="saloni-text">Salone</div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<script src="js/home.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/1f4c0029b5.js" crossorigin="anonymous"></script>

<script>
    function changeColor(id) {
        var icons = document.querySelectorAll('.fas');
        var texts = document.querySelectorAll('[id$="-text"]');

        icons.forEach(function(icon) {
            icon.classList.remove('custom-color');
        });

        texts.forEach(function(text) {
            text.style.color = 'black';
        });

        var icon = document.getElementById(id);
        var text = document.getElementById(id + '-text');

        icon.classList.add('custom-color');
        text.style.color = '#B9D9EB';
    }

    changeColor('trattamenti');
</script>

</body>
</html>
