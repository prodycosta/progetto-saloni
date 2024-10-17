<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Henny+Penny&family=Tilt+Neon&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
    min-width: 820px; /* Imposta una larghezza minima */

}
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
        margin-top: 1%;
        margin-bottom: 1%;
        margin-left: 3%;
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

    .login-register-buttons {
        margin-right: 1%; /* Margine per i bottoni login/register */
    }

    /* Stile del contenitore della prenotazione */
    .prenotazione-container {
        background-color: #B9D9EB;
        display: flex;
        justify-content: center;
        padding-top: 2%;
        min-height: 80vh;
    }

    .form-container {
        width: 30%;
        margin: auto;
        border-radius: 10px;
        background-color: white;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Aggiunto ombra */
        padding: 2rem;

        text-align: center;

    }

    /* Stile per il titolo della form */
    .form-container p {
        margin-bottom: 15px;
        font-family: 'Noto Serif JP', sans-serif;
        font-size: 28px;
        font-weight: bold;
        color: #4DA8FF; /* Colore del testo */
    }

    /* Stile per i campi input */
    .form-control {
        width: 100%;
        height: 40px;
        font-size: 16px;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #B9D9EB;
        border-radius: 8px;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #7FC8FF; /* Cambia il colore del bordo al focus */
        box-shadow: 0 0 5px rgba(127, 200, 255, 0.5); /* Aggiungi un'ombra leggera */
    }

    /* Stile per il pulsante */
    .btn-outline-info {
        width: 100%;
        height: 40px;
        border-radius: 8px;
        border: 2px solid #7FC8FF;
        color: #7FC8FF;
        font-size: 16px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .btn-outline-info:hover {
        background-color: #7FC8FF; /* Cambia il colore di sfondo al passaggio del mouse */
        color: white; /* Cambia il colore del testo */
    }

    /* Stile per i link */
    .custom-link {
        color: #7FC8FF;
        font-size: 14px;
        transition: color 0.3s ease;
    }

    .custom-link:hover {
        color: #4DA8FF;
        text-decoration: none;
    }

    /* Stile per messaggi di errore */
    .alert {
        font-size: 14px;
        margin-bottom: 20px;
    }

    /* Stile per il box aggiuntivo */
    .additional-info {
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .hidden {
        display: none;
    }

    #overlay {
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1000;
        display: none;
    }

    /* Suggerimenti */
    #suggerimenti {
        position: absolute;
        width: calc(28.3% - 20px);
        margin-top: 10px;
        background-color: #B9D9EB;
        z-index: 999;
        max-height: 200px;
        overflow-y: auto;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
    }

    #suggerimenti div {
        padding: 10px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    #suggerimenti div:hover {
        background-color: #7FC8FF;
    }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light" style="padding: 0%;">
    <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}">Whiskers</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
        </div>
    </div>
</nav>

<div class="prenotazione-container">
<div class="form-container">
<div class="additional-info">

</div>
<form method="POST" action="{{ route('auth.login') }}">
    @csrf
    <div class="mb-3 text-center d-flex flex-column align-items-center">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Scritta Accedi con margine migliorato -->
        <p style="margin-bottom: 30px; font-family: 'Noto Serif JP', sans-serif; font-size: 24px;">Accedi</p>

        <!-- Centrare i campi email e password -->
        <div class="mb-3">
            <input type="email" class="form-control" id="emailInput" name="email" placeholder="Email"
                   style="height: 40px; border-radius: 5px; width: 200px; margin-bottom: 15px;">
        </div>

        <div class="mb-3">
            <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Password"
                   style="height: 40px; border-radius: 5px; width: 200px;">
        </div>

        <!-- Pulsante per il login -->
        <div class="text-center">
    <button type="submit" class="btn btn-outline-info"
            style="border-radius: 5px; height: 40px; margin-top: 15px; width: 140px;">
        Accedi
    </button>
</div>

        <!-- Link per creare un nuovo account -->
        <div class="mb-3 text-center" style="margin-top: 15px;">
            <a href="{{ route('auth.register') }}" style="text-decoration: none; color: #7FC8FF;">Crea un nuovo account</a>
        </div>

        <!-- Link per recuperare la password -->
        <div class="text-center">
    <a href="{{ route('pages.forgot-password') }}" style="text-decoration: none; color: #7FC8FF;">Password dimenticata?</a>
</div>
    </div>
</form>
</div>
</div>
</div>


<footer style="text-align: center; padding: 20px; background-color: #B9D9EB; color: white; margin-top: 30px; font-size: 14px;">
    <p>&copy; {{ date('Y') }} Il tuo Salone. Tutti i diritti riservati.</p>
    <p><a href="mailto:whiskers@gmail.com" style="color: white; text-decoration: none;">Contattaci</a></p>
    <p>Politica sulla privacy</p>
</footer>


<script src="js/login.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/1f4c0029b5.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



</body>
</html>
