<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Recupera Password</title>
    <link rel="stylesheet" href="css/map.css">
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Reddit+Mono:wght@200..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Include Leaflet library -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&family=Sedan+SC&display=swap" rel="stylesheet">


    <style>

body {
        background-color: #f8f9fa;
        color: #343a40;
        font-family: 'Arial', sans-serif;
        min-width: 500px;
    }
    .container-fluid {
            background-color: white;
            padding: 0;
            color: #7FC8FF;
        }
        .navbar-nav .nav-link {
            padding: 1.5rem 1rem;
            line-height: 2;
            margin-right: 30px;
        }
        .navbar-brand {
            margin-left: 3%;
            margin-top: 1%;
            font-family: "Henny Penny", system-ui;
            font-size: 24px;
            font-weight: bold;
            color:  #B9D9EB;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .navbar-brand:hover {
        color:  #7FC8FF; /* Cambiato colore al passaggio del mouse */
    }

    a.small {
    text-decoration: none; /* Rimuove la sottolineatura */
    color: #007bff; /* Colore del link (opzionale, puoi cambiarlo come preferisci) */
}

a.small:hover {
    text-decoration: none; /* Mantiene la sottolineatura rimossa anche al passaggio del mouse */
    color: #0056b3; /* Cambia il colore del link al passaggio del mouse (opzionale) */
}

.btn-primary {
    background-color: #B9D9EB; /* Colore di sfondo del bottone */
    border-color: #B9D9EB; /* Colore del bordo */
    color: #fff; /* Colore del testo */
    font-size: 14px; /* Riduce la dimensione del testo */
    padding: 10px 20px; /* Riduce il padding */
    width: auto; /* Impedisce al bottone di essere a larghezza intera */
    display: inline-block; /* Per assicurarsi che il bottone sia trattato come un blocco inline */
}

.btn-primary:hover {
    background-color: #A0C4D8; /* Colore di sfondo al passaggio del mouse */
    border-color: #A0C4D8; /* Colore del bordo al passaggio del mouse */
}

/* Centra il bottone */
.text-center .btn-primary {
    margin: 0 auto; /* Centra orizzontalmente */
    display: block; /* Assicura che il pulsante sia centrato all'interno del contenitore */
}



    </style>
</head>

<body class="bg-gradient-primary">
<nav class="navbar navbar-expand-lg bg-light" style="padding: 0%;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Whiskers</a>
    </div>
</nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Hai dimenticato la password?</h1>
                                        <p class="mb-4">Inserisci il tuo indirizzo email qui sotto
                                            e ti invieremo un link per reimpostare la tua password!</p>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('pages.forgot-password.post') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email" aria-describedby="emailHelp" placeholder="Inserisci email...">
                                        </div>
                                        <div class="text-center">
    <button type="submit" class="btn btn-primary btn-user">
        Reimposta Password
    </button>
</div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('auth.register') }}">Crea un Account!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('auth.login') }}">Hai gia un Account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
