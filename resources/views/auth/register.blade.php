<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrati</title>
    <link rel="stylesheet" href="css/register.css">
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
        color:  #7FC8FF;
    }

    .prenotazione-container {
        background-color: #B9D9EB;
        display: flex;
        justify-content: center;
        margin-top: 0;
        padding-top: 0;
        min-height: 90vh;
        align-items: center; /* Allinea verticalmente al centro */
    }

    .form-container {
        width: 30%;
        background-color: white;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Aggiunta di ombra */
        text-align: center; /* Centra il contenuto */
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .form-control, .form-select, .prenota-btn {
        width: 100%; /* Rende gli input e il bottone a larghezza completa */
        height: 40px;
        font-size: 16px;
        margin-bottom: 15px;
        border-radius: 8px;
        border: 1px solid #ccc;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease; /* Aggiunge una transizione fluida per l'effetto hover */
    }

    .form-control:focus, .form-select:focus, .prenota-btn:hover {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        outline: none; /* Rimuove il bordo di focus predefinito */
    }

    label {
        font-size: 16px;
        margin-bottom: 10px;
        display: block;
        font-weight: bold;
        color: #333;
    }

    .prenota-btn {
        background-color: #7FC8FF;
        color: white;
        border: none;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
    }

    .prenota-btn:hover {
        background-color: #4DA8FF;
    }

    /* Aggiunta di uno stile migliore per i link */
    .custom-link {
        text-decoration: none;
        color: #7FC8FF;
        transition: color 0.3s ease;
    }

    .custom-link:hover {
        color: #4DA8FF;
    }

    .additional-info {
        display: none; /* Nascondiamo questo elemento per ora */
    }

    /* Messaggi di errore e successo */
    .alert-danger, .alert-success {
        font-size: 14px;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Stile per il div dei suggerimenti */
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
        padding: 5px;
        cursor: pointer;
    }

    .custom-link {
    text-decoration: none; /* Rimuove la decorazione del testo */
    color: #7FC8FF;
    transition: color 0.3s ease;
}

.custom-link:hover {
    color: #4DA8FF; /* Colore al passaggio del mouse */
    text-decoration: none;
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
        <div class="additional-info"></div>

        <form method="POST" action="{{ route('auth.register') }}" id="myForm">
            @csrf

            <!-- Paragrafi sopra gli input -->
            <div class="mb-3 text-center">
                <p style="font-family: 'Noto Serif JP', sans-serif; font-size: 18px;">Benvenuto su Whiskers</p>
                <p style="font-family: 'Noto Serif JP', sans-serif; font-size: 24px;">Registrati</p>
            </div>

            <div class="mb-3 text-center" style="margin-top: 20px;">
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
            </div>

            <div class="row justify-content-center">
                <!-- Prima colonna -->
                <div class="col-md-6 form-column">
                    <!-- Campo per l'email -->
                    <div class="mb-3">
                        <input type="email" class="form-control" id="emailInput" name="email" placeholder="Email">
                    </div>

                    <!-- Campo per il nome -->
                    <div class="mb-3">
                        <input type="text" class="form-control" id="nameInput" name="name" placeholder="Nome">
                    </div>
                </div>

                <!-- Seconda colonna -->
                <div class="col-md-6 form-column">
                    <!-- Campo per la password -->
                    <div class="mb-3">
                        <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Password">
                    </div>

                    <!-- Campo per la conferma della password -->
                    <div class="mb-3">
                        <input type="password" class="form-control" id="passwordConfirmationInput" name="password_confirmation" placeholder="Conferma Password">
                    </div>

                    <!-- Campo per il cognome -->
                    <div class="mb-3">
                        <input type="text" class="form-control" id="surnameInput" name="surname" placeholder="Cognome">
                    </div>
                </div>
            </div>

            <!-- Pulsanti radio per il sesso -->
            <div class="mb-3 text-center d-flex justify-content-between">
                <label class="radio-inline">
                    <input type="radio" name="gender" value="male"> Uomo
                </label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="female"> Donna
                </label>
            </div>

            <!-- Pulsante per il login -->
            <div class="text-center">
                <button type="submit" class="btn btn-outline-info" style="border-radius: 8px;">Registrati</button>
            </div>

            <!-- Link per accedere con un account esistente -->
            <div class="mb-3 text-center" style="margin-top: 20px;">
                <a href="{{ route('auth.login') }}" class="custom-link">Possiedi già un account?</a>
            </div>
        </form>
    </div>
</div>

<footer style="text-align: center; padding: 20px; background-color: #B9D9EB; color: white; margin-top: 30px; font-size: 14px;">
    <p>&copy; {{ date('Y') }} Il tuo Salone. Tutti i diritti riservati.</p>
    <p><a href="mailto:whiskers@gmail.com" style="color: white; text-decoration: none;">Contattaci</a></p>
    <p>Politica sulla privacy</p>
</footer>


<script src="js/register.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/1f4c0029b5.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



</body>
</html>
