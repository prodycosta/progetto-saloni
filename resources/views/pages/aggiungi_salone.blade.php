<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiungi salone</title>
    <link rel="stylesheet" href="css/aggiungi_salone.css">
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
    min-width: 1500px; /* Imposta una larghezza minima */

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
            margin-left: 3%;
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

        .navbar-brand:hover {
        color:  #7FC8FF; /* Cambiato colore al passaggio del mouse */
    }


        .login-register-buttons {
            margin-right: 1%; /* Aggiunge un margine a destra */
        }

        .prenotazione-container {
    background-color: #B9D9EB;
    display: flex; /* Utilizza il flexbox per il layout */
    justify-content: flex-start; /* Allinea gli elementi a sinistra */
    margin-top: 0; /* Imposta il margine superiore a 0 */
    padding-top: 0; /* Imposta il padding superiore a 0 */
    min-height: 70vh;
    min-width: 100%;
    align-items: center;
}


    .form-control {
        width: 80%; /* Imposta la larghezza al 100% per riempire tutto lo spazio disponibile */
    height: auto; /* Altezza desiderata */
    font-size: 16px; /* Dimensione del testo */
    border-radius: 5px; /* Bordo arrotondato */
    border: 1px solid #ccc; /* Bordo sottile grigio */
    background-color: #eff6ff; /* Sfondo più chiaro */
    padding: 8px; /* Spazio interno */
    box-sizing: border-box; /* Include il padding e il bordo nella larghezza totale */
    transition: border-color 0.2s; /* Effetto di transizione per il bordo */
    margin: auto;
}

.form-control:focus {
    outline: none; /* Rimuove l'outline */
    border-color: #66afe9; /* Cambia il colore del bordo al focus */
}

/* Stile per i selezionatori */
.form-select {
    width: 200px; /* Larghezza desiderata */
    font-size: 14px; /* Dimensione del testo */
    margin: auto; /* Allinea al centro */
    display: block; /* Garantisce che il selezionatore sia su una riga separata */
}


/* Stile per label */
label {
    font-size: 16px; /* Dimensione del testo desiderata */
    margin: auto; /* Allinea al centro */
    display: block; /* Garantisce che ogni label sia su una riga separata */
    text-align: center; /* Allinea il testo al centro */
}

/* Stile per button */
.prenota-btn {
    width: 150px; /* Larghezza desiderata */
    height: 30px; /* Altezza desiderata */
    font-size: 14px; /* Dimensione del testo */
    margin: auto; /* Allinea al centro */
    display: block; /* Garantisce che il button sia su una riga separata */
}

.form-container {
    width: 60%; /* Imposta la larghezza del form container */
    border-radius: 5px;
    background-color: white;
    height: fit-content;
    justify-content: flex-start; /* Allinea gli elementi a sinistra */
    align-items: center; /* Centra verticalmente */
    margin-left: 3%;
}

.additional-info {
    background-color: white;
    width: 100%;
    height: auto;
    padding: 0%;
    margin: 0%;
    display: flex;
    border-radius: 5px;
    margin-top: 15%;
    z-index: 1;
}
.left-section,
.right-section {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-size: 24px;
    cursor: pointer;
}

.left-section span,
.right-section span {
    font-size: 14px; /* Imposta la dimensione del carattere a 14px */
    cursor: pointer;
}
.left-section i,
.right-section i {
    cursor: pointer;
    padding: 0%;
    margin: 0%;
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
            background-color: rgba(0, 0, 0, 0.5); /* Colore di sfondo con opacità al 50% */
            z-index: 1000; /* Assicura che l'overlay sia sopra il resto del contenuto */
            display: none; /* Inizialmente nascosto */
        }

        /* Stile per il div dei suggerimenti */
        #suggerimenti {
    position: absolute;
    width: calc(28.3% - 20px);
    margin-top: 10px; /* Aggiunto margine superiore */
    background-color: #B9D9EB;


    z-index: 999;
    max-height: 200px;
    overflow-y: auto;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
}

        /* Stile per i singoli suggerimenti */
        #suggerimenti div {
            padding: 5px;
            cursor: pointer; /* Mostra il puntatore al passaggio del mouse */
        }

        .custom-link {
        text-decoration: none;
        color: #7FC8FF; /* Colore di base */
        transition: color 0.1s; /* Effetto di transizione per il cambio colore */
    }

    /* Stile per i link al passaggio del mouse */
    .custom-link:hover {
        color: #4DA8FF; /* Colore quando il mouse è sopra il link */
        text-decoration: none;
    }

    .right-container {
    width: 60%;
    border-radius: 5px;
    background-color: white;
    height: 62vh;
    position: relative;
    right: 0;
    margin-right: 2%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    font-family: 'Noto Serif JP', sans-serif;
    font-size: 24px;
    z-index: 1;
    margin-left: 3%;
}

.service {
    padding: 0;
    margin-top: -10%; /* Rimuovo il margine negativo */
    margin-bottom: -8%;
    height: fit-content;
    width: 100%;
    text-align: center;
    display: flex;
    justify-content: center;
}

    .centered {
        width: 50%;
        justify-content: center;
    }

    .tutto {
    width: 100%;
    height: 40vh;
    display: flex;
    margin-top: 15%;

}
.left-half,
.right-half {
    width: 50%;
}
.price {
    margin-bottom: 10px;
    display: flex;
    align-items: center;
}

label {
    display: inline-block;
}

.input-price {
        width: 80px;
        height: 40px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 5px; /* Aggiunge spazio interno agli input */
        margin-top: 5px; /* Aggiunge spazio sopra agli input */
        background-color: #eff6ff;

    }

    .input-price:focus{
        outline: none; /* Rimuove l'outline */
        background-color: white;
    }

    .price label {
        margin-bottom: 5px; /* Riduce lo spazio sotto le label */
        display: block; /* Mostra le label su una riga separata */
    }

    body {
            height: auto;
        }

        #immagini:invalid + label {
        border: 2px solid red;
    }

    #errorMessage {
        color: red;
        display: none;
        margin-top: 5px;
    }

    #suggerimenti {
            list-style-type: none;
            padding: 0;
            margin: 0;
            width: 538px;
            max-height: 150px;
            overflow-y: auto;
            background-color: #a5cee5;

        }

        #suggerimenti li {
            padding: 10px;
            cursor: pointer;
        }

        #suggerimenti li:hover {
            background-color: #f0f0f0;
        }

        .input-group {
            display: flex;
            justify-content: space-between;
        }

        .input-group input {
            flex: 1;
            margin: 0 10%;
            max-width: 48%; /* Limita la larghezza degli input */
        }


        .btn-info {
    background-color: #2C5282; /* Colore di sfondo */
    color: white; /* Colore del testo */
    border: none; /* Rimuovi il bordo */
    border-radius: 5px; /* Angoli arrotondati */
    height: 40px; /* Altezza */
    font-size: 16px; /* Dimensione del font */
    padding: 0 20px; /* Padding laterale */
    cursor: pointer; /* Cambia il cursore al passaggio del mouse */
    transition: background-color 0.3s, transform 0.2s; /* Transizioni al passaggio del mouse */
}

/* Effetto hover */
.btn-info:hover {
    background-color: #1A4D6D; /* Colore al passaggio del mouse */
    transform: scale(1.05); /* Leggera animazione al passaggio del mouse */
}

/* Effetto active */
.btn-info:active {
    transform: scale(0.95); /* Leggero rimpicciolimento quando cliccato */
}

.dropdown-option {
    display: block;
    color: #333; /* Colore di default del testo */
    text-decoration: none;
    padding: 8px 10px;
    margin-bottom: 5px;
    border-radius: 5px;
    transition: background-color 0.2s, color 0.2s;
}

.dropdown-menu {
        z-index: 9999; /* Imposta un valore alto per il z-index */
    }
    .dropdown-item:hover {
    background-color: white;
    color: #B9D9EB; /* Cambia anche il colore del testo se lo desideri */
}

.dropdown-option i {
    margin-right: 8px;
    transition: color 0.2s;
}

.dropdown-option:hover {
    color: #B9D9EB; /* Cambia il colore del testo e dell'icona */
    text-decoration: none;
}

.dropdown-option:hover i {
    color:#B9D9EB; /* Cambia anche il colore dell'icona al passaggio del mouse */
}

.navbar-brand:hover {
        color:  #7FC8FF; /* Cambiato colore al passaggio del mouse */
    }

.navbar-nav .dropdown-menu {
    position: absolute;
    left: 0;
    top: 100%;
    z-index: 1000;
    display: none; /* Nascondi il dropdown di default */
    background-color: white;
    border: 1px solid #ddd;
    width: auto; /* Larghezza fissa del dropdown */
}

/* Visualizza il dropdown solo al clic */
.navbar-nav .nav-item.dropdown.show .dropdown-menu {
    display: block;
}

/* Impedisce l'espansione della navbar con il dropdown */
.navbar-nav {
    display: flex;
    flex-direction: row;
    gap: 15px;
}

.navbar-nav li {
    position: relative;
}



</style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light" style="padding: 0%;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Whiskers</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Capelli
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('pages.capelli.piega') }}">Piega</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.capelli.taglio_donna') }}">Taglio Donna</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.capelli.taglio_uomo') }}">Taglio Uomo</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.capelli.colpi_di_sole') }}">Colpi di Sole</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.capelli.trattamenti_capelli_specifici') }}">Trattamenti Capelli Specifici</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.capelli.taglio_e_piega_donna') }}">Taglio e Piega Donna</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Viso
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('pages.viso.trattamenti_viso') }}">Trattamenti viso</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.viso.depilazione_sopracciglia') }}">Depilazione sopracciglia</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.viso.extension_ciglia') }}">Extension ciglia</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.viso.colorazione_ciglia_e_sopracciglia') }}">Colorazione ciglia e sopracciglia</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.viso.depilazione_con_filo_orientale_sopracciglia') }}">Depilazione con filo orientale sopracciglia</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Unghie
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('pages.unghie.manicure_semipermanente') }}">Manicure semipermanente</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.unghie.manicure') }}">Manicure</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.unghie.pedicure') }}">Pedicure</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.unghie.rimozione_gel') }}">Rimozione gel</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.unghie.pedicure_semipermanente') }}">Pedicure semipermanente</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.unghie.callus_peeling') }}">Callus peeling</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Depilazione
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('pages.depilazione.ceretta_corpo') }}">Ceretta corpo</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.depilazione.ceretta_viso') }}">Ceretta viso</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.depilazione.ceretta_inguine_totale') }}">Ceretta inguine totale</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.depilazione.ceretta_gambe') }}">Ceretta gambe</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.depilazione.ceretta_braccia_o_ascelle') }}">Ceretta braccia o ascelle</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.depilazione.ceretta_inguine_parziale') }}">Ceretta inguine parziale</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Corpo
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('pages.corpo.solarium') }}">Solarium</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.corpo.trattamenti_anticellulite') }}">Trattamenti anticellulite</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.corpo.trattamenti_dimagranti') }}">Trattamenti dimagranti</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.corpo.bendaggi') }}">Bendaggi</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.corpo.circuito_spa') }}">Circuito spa</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Uomo
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('pages.capelli.taglio_uomo') }}">Taglio Uomo</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.uomo.colore_uomo') }}">Colore uomo</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.uomo.taglio_barba') }}">Taglio barba</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.uomo.trattamenti_viso_uomo') }}">Trattamenti viso uomo</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.uomo.barbiere') }}">Barbiere</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.uomo.depilazione_uomo') }}">Depilazione uomo</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Massaggio
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('pages.massaggio.massaggio_rilassante') }}">Massaggio rilassante</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.massaggio.massaggio_drenante') }}">Massaggio drenante</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.massaggio.massaggio_decontratturante') }}">Massaggio decontratturante</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.massaggio.pressoterapia') }}">Pressoterapia</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.massaggio.massaggio_tailandese') }}">Massaggio tailandese</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.massaggio.massaggio_del_viso') }}">Massaggio del viso</a></li>
                </ul>
            </li>
        </ul>
        @guest
        <div style="width: 200px; height: 40px;">
            <a href="{{ route('auth.login') }}" class="btn btn-outline-info login-register-buttons" style="display: inline-block;">Login</a>
            <a href="{{ route('auth.register') }}" class="btn btn-outline-info login-register-buttons" style="display: inline-block;">Register</a>
        </div>
        @endguest
        @auth
        <div style="display: inline-block; position: relative; text-align: left;">
            <a href="#" id="profile-link" style="cursor: pointer; text-decoration: none; color: #B9D9EB;">
                Il mio profilo<span style="margin-right: 15px;"></span><i class="fas fa-user" style="margin-right: 15px;"></i>
            </a>
            <div id="profile-dropdown" style="display: none; position: absolute; top: 120%; left: 0%; background-color: #fff; border: 1px solid #ccc; padding: 10px; min-width: 120px; box-shadow: 0 2px 5px rgba(0,0,0,0.2); border-radius: 5px; z-index: 9999;">
                <a href="{{ route('logout') }}" class="dropdown-option" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="{{ route('pages.account') }}" class="dropdown-option">
    <i class="fas fa-user"></i> Account
</a>
            </div>
        </div>
        @endauth
    </div>
</nav>

<div class="prenotazione-container">
<div class="form-container">
<div class="additional-info">

</div>
<form method="POST" id="saloneForm" action="{{ route('salone.store') }}" enctype="multipart/form-data" onsubmit="return checkForm()">
    @csrf
    <div class="mb-3 text-center" style="margin-top: -9%;">
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
        <p style="margin-bottom: 3%; font-family: 'Noto Serif JP', sans-serif; font-size: 24px; margin-top: -13%;">Inserisci salone</p>
        <div style="display: flex; justify-content: space-between;">
            <div style="width: 48%;">
                <div class="mb-3">
                    <input type="text" class="form-control" name="nome_salone" placeholder="Nome Salone" required maxlength="50">
                </div>
                <div class="mb-3">
    <input type="text" class="form-control" id="posizione" name="posizione" placeholder="Indirizzo" required maxlength="100">
    <ul id="suggerimenti"></ul>
    <div id="error-message" class="error-message"></div>
</div>

                <div class="mb-3">

    <input type="text" class="form-control" id="numero_civico" name="numero_civico" placeholder="Numero Civico" required maxlength="10">
</div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="nome_proprietario" placeholder="nome proprietario" required maxlength="30">
                </div>


            </div>
            <div style="width: 48%;">
                <div class="mb-3">
                    <input type="text" class="form-control" name="cognome_proprietario" placeholder="cognome proprietario" required maxlength="30">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="email" required maxlength="50">
                </div>
                <div class="mb-3">
                    <input type="tel" class="form-control" name="numero_telefono" placeholder="numero telefono" required maxlength="11">
                </div>
                <div class="mb-3 input-group">
    <input type="time" class="form-control" id="orario_apertura" name="orario_apertura" placeholder="Orario Apertura" required>
    <input type="time" class="form-control" id="orario_chiusura" name="orario_chiusura" placeholder="Orario Chiusura" required>
</div>
            </div>
        </div>
        <span class="colored-br"></span>
        <div class="row">
        <div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
            <div class="form-check form-check-inline"> <!-- Aggiunto form-check-inline qui -->
                <input class="form-check-input" type="checkbox" name="servizio_capelli" value="1" id="servizio_capelli_checkbox" onchange="toggleCapelliInputs()">
                <label class="form-check-label" for="servizio_capelli_checkbox">Capelli</label>
            </div>
            <div class="form-check form-check-inline"> <!-- Aggiunto form-check-inline qui -->
    <input class="form-check-input" type="checkbox" id="servizio_depilazione_checkbox" name="servizio_depilazione" value="1" onchange="toggleDepilazioneInputs()">
    <label class="form-check-label" for="servizio_depilazione_checkbox">Depilazione</label>
</div>
<div class="form-check form-check-inline"> <!-- Aggiunto form-check-inline qui -->
    <input class="form-check-input" type="checkbox" id="servizio_unghie_checkbox" name="servizio_unghie" value="1" onchange="toggleUnghieInputs()">
    <label class="form-check-label" for="servizio_unghie_checkbox">Unghie</label>
</div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
        <div class="form-check form-check-inline"> <!-- Aggiunto form-check-inline qui -->
    <input class="form-check-input" type="checkbox" id="servizio_corpo_checkbox" name="servizio_corpo" value="1" onchange="toggleCorpoInputs()">
    <label class="form-check-label" for="servizio_corpo_checkbox">Corpo</label>
</div>
<div class="form-check form-check-inline"> <!-- Aggiunto form-check-inline qui -->
    <input class="form-check-input" type="checkbox" id="servizio_uomo_checkbox" name="servizio_uomo" value="1" onchange="toggleUomoInputs()">
    <label class="form-check-label" for="servizio_uomo_checkbox">Uomo</label>
</div>
<div class="form-check form-check-inline"> <!-- Aggiunto form-check-inline qui -->
    <input class="form-check-input" type="checkbox" id="servizio_massaggio_checkbox" name="servizio_massaggio" value="1" onchange="toggleMassaggioInputs()">
    <label class="form-check-label" for="servizio_massaggio_checkbox">Massaggio</label>
</div>
<div class="form-check form-check-inline"> <!-- Aggiunto form-check-inline qui -->
    <input class="form-check-input" type="checkbox" id="servizio_viso_checkbox" name="servizio_viso" value="1" onchange="toggleVisoInputs()">
    <label class="form-check-label" for="servizio_viso_checkbox">Viso</label>
</div>
        </div>
    </div>
    <span class="colored-br"></span>
    <div class="col-md-6">
    <div class="form-group mb-3">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="giorno_lunedi" value="1">
            <label class="form-check-label">Lunedì</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="giorno_martedi" value="1">
            <label class="form-check-label">Martedì</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="giorno_mercoledi" value="1">
            <label class="form-check-label">Mercoledì</label>
        </div>

    </div>
</div>
<div class="col-md-6">
    <div class="form-group mb-3">
    <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="giorno_giovedi" value="1">
            <label class="form-check-label">Giovedì</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="giorno_venerdi" value="1">
            <label class="form-check-label">Venerdì</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="giorno_sabato" value="1">
            <label class="form-check-label">Sabato</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="giorno_domenica" value="1">
            <label class="form-check-label">Domenica</label>
        </div>
    </div>
</div>
</div>
</div>
    </div>

</div>

<div class="right-container" id="capelli">
    <div class="service">
        <h3>Listino prezzi -> Capelli</h3>
    </div>
    <div class="tutto" style="margin-left: -2%; margin-bottom: -13%;">
        <div class="left-half" style="display: flex; flex-direction: column;">
        <div class="price" style="margin-bottom: 20px;">
    <label for="piega">Piega:</label>
    <input type="number" id="piega" name="prezzo_piega" placeholder="prezzo" class="input-price"  disabled>
</div>
<div class="price" style="margin-bottom: 20px;">
    <label for="taglio-donna">Taglio donna:</label>
    <input type="number" id="taglio-donna" name="prezzo_taglio_donna" placeholder="prezzo" class="input-price"  disabled>
</div>
<div class="price">
    <label for="taglio-uomo">Taglio uomo:</label>
    <input type="number" id="taglio-uomo" name="prezzo_taglio_uomo" placeholder="prezzo" class="input-price"  disabled>
</div>
</div>
<div class="right-half" style="display: flex; flex-direction: column;">
<div class="price" style="margin-bottom: 20px;">
    <label for="colpi-di-sole">Colpi di sole:</label>
    <input type="number" id="colpi-di-sole" name="prezzo_colpi_di_sole" placeholder="prezzo" class="input-price"  disabled>
</div>
<div class="price" style="margin-bottom: 20px;">
    <label for="trattamenti-specifici">Trattamenti capelli:</label>
    <input type="number" id="trattamenti-specifici" name="prezzo_trattamenti_capelli" placeholder="prezzo" class="input-price"  disabled>
</div>
<div class="price">
    <label for="taglio-piega-donna">Taglio e piega donna:</label>
    <input type="number" id="taglio-piega-donna" name="prezzo_taglio_piega_donna" placeholder="prezzo" class="input-price"  disabled>
</div>
        </div>
    </div>
    <nav aria-label="Page navigation example" style="margin-top: 5%; text-align: center;">
  <ul class="pagination" style="display: inline-block; list-style: none; padding: 0; margin: 0 auto;">
    <li class="page-item" onclick="showPage(1)" style="display: inline-block;">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item" onclick="showPage(2)" style="display: inline-block;">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item" onclick="showPage(3)" style="display: inline-block;">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item" onclick="showPage(4)" style="display: inline-block;">
      <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item" onclick="showPage(5)" style="display: inline-block;">
      <a class="page-link" href="#">5</a>
    </li>
    <li class="page-item" onclick="showPage(6)" style="display: inline-block;">
      <a class="page-link" href="#">6</a>
    </li>
    <li class="page-item" onclick="showPage(7)" style="display: inline-block;">
      <a class="page-link" href="#">7</a>
    </li>
  </ul>
</nav>
</div>

<div class="right-container" style="display: none;" id="viso">
    <div class="service">
        <h3>Listino prezzi -> Viso</h3>
    </div>
    <div class="tutto" style="margin-left: -2%; margin-bottom: -13%;">
        <div class="left-half" style="display: flex; flex-direction: column;">
            <div class="price" style="margin-bottom: 20px;">
                <label for="trattamenti-viso">Trattamenti viso:</label>
                <input type="number" id="trattamenti-viso" name="prezzo_trattamenti_viso" placeholder="prezzo" class="input-price" disabled>
            </div>
            <div class="price" style="margin-bottom: 20px;">
                <label for="depilazione-sopracciglia">Depilazione delle sopracciglia:</label>
                <input type="number" id="depilazione-sopracciglia" name="prezzo_depilazione_sopracciglia" placeholder="prezzo" class="input-price" disabled>
            </div>
            <div class="price">
                <label for="extension-ciglia">Extension ciglia:</label>
                <input type="number" id="extension-ciglia" name="prezzo_extension_ciglia" placeholder="prezzo" class="input-price" disabled>
            </div>
        </div>
        <div class="right-half" style="display: flex; flex-direction: column;">
            <div class="price" style="margin-bottom: 20px;">
                <label for="permanente-ciglia">Permanente ciglia:</label>
                <input type="number" id="permanente-ciglia" name="prezzo_permanente_ciglia" placeholder="prezzo" class="input-price" disabled>
            </div>
            <div class="price" style="margin-bottom: 20px;">
                <label for="colorazione-ciglia-sopracciglia">Colorazione ciglia e sopracciglia:</label>
                <input type="number" id="colorazione-ciglia-sopracciglia" name="prezzo_colorazione_ciglia_sopracciglia" placeholder="prezzo" class="input-price" disabled>
            </div>
            <div class="price">
                <label for="depilazione-filo-orientale">Depilazione con filo orientale:</label>
                <input type="number" id="depilazione-filo-orientale" name="prezzo_depilazione_filo_orientale" placeholder="prezzo" class="input-price" disabled>
            </div>

        </div>

    </div>
    <nav aria-label="Page navigation example" style="margin-top: 5%; text-align: center;">
  <ul class="pagination" style="display: inline-block; list-style: none; padding: 0; margin: 0 auto;">
    <li class="page-item" onclick="showPage(1)" style="display: inline-block;">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item" onclick="showPage(2)" style="display: inline-block;">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item" onclick="showPage(3)" style="display: inline-block;">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item" onclick="showPage(4)" style="display: inline-block;">
      <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item" onclick="showPage(5)" style="display: inline-block;">
      <a class="page-link" href="#">5</a>
    </li>
    <li class="page-item" onclick="showPage(6)" style="display: inline-block;">
      <a class="page-link" href="#">6</a>
    </li>
    <li class="page-item" onclick="showPage(7)" style="display: inline-block;">
      <a class="page-link" href="#">7</a>
    </li>
  </ul>
</nav>
</div>
<div class="right-container" style="display: none;" id="unghie">
    <div class="service">
        <h3>Listino prezzi -> Unghie</h3>
    </div>
    <div class="tutto" style="margin-left: -2%; margin-bottom: -13%;">
        <div class="left-half" style="display: flex; flex-direction: column;">
            <div class="price" style="margin-bottom: 20px;">
                <label for="manicure-semipermanente">Manicure semipermanente:</label>
                <input type="number" id="manicure-semipermanente" name="prezzo_manicure_semipermanente" placeholder="prezzo" class="input-price" disabled>
            </div>
            <div class="price" style="margin-bottom: 20px;">
                <label for="manicure" >Manicure:</label>
                <input type="number" id="manicure" name="prezzo_manicure" placeholder="prezzo" class="input-price" disabled>
            </div>
            <div class="price">
                <label for="pedicure">Pedicure:</label>
                <input type="number" id="pedicure" name="prezzo_pedicure" placeholder="prezzo" class="input-price" disabled>
            </div>
        </div>
        <div class="right-half" style="display: flex; flex-direction: column;">
            <div class="price" style="margin-bottom: 20px;">
                <label for="rimozione-gel">Rimozione gel:</label>
                <input type="number" id="rimozione-gel" name="prezzo_rimozione_gel" placeholder="prezzo" class="input-price" disabled>
            </div>
            <div class="price" style="margin-bottom: 20px;">
                <label for="pedicure-semipermanente">Pedicure semipermanente:</label>
                <input type="number" id="pedicure-semipermanente" name="prezzo_pedicure_semipermanente" placeholder="prezzo" class="input-price" disabled>
            </div>
            <div class="price">
                <label for="callus-peeling">Callus peeling:</label>
                <input type="number" id="callus-peeling" name="prezzo_callus_peeling" placeholder="prezzo" class="input-price" disabled>
            </div>
        </div>
    </div>
    <nav aria-label="Page navigation example" style="margin-top: 5%; text-align: center;">
  <ul class="pagination" style="display: inline-block; list-style: none; padding: 0; margin: 0 auto;">
    <li class="page-item" onclick="showPage(1)" style="display: inline-block;">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item" onclick="showPage(2)" style="display: inline-block;">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item" onclick="showPage(3)" style="display: inline-block;">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item" onclick="showPage(4)" style="display: inline-block;">
      <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item" onclick="showPage(5)" style="display: inline-block;">
      <a class="page-link" href="#">5</a>
    </li>
    <li class="page-item" onclick="showPage(6)" style="display: inline-block;">
      <a class="page-link" href="#">6</a>
    </li>
    <li class="page-item" onclick="showPage(7)" style="display: inline-block;">
      <a class="page-link" href="#">7</a>
    </li>
  </ul>
</nav>
</div>

<div class="right-container" style="display: none;" id="depilazione" >
    <div class="service">
        <h3>Listino prezzi -> Depilazione</h3>
    </div>
    <div class="tutto" style="margin-left: -2%; margin-bottom: -13%;">
        <div class="left-half" style="display: flex; flex-direction: column;">
            <div class="price" style="margin-bottom: 20px;">
                <label for="ceretta-corpo">Ceretta corpo:</label>
                <input type="number" id="ceretta-corpo" name="prezzo_ceretta_corpo" placeholder="prezzo" class="input-price" disabled>
            </div>
            <div class="price" style="margin-bottom: 20px;">
                <label for="ceretta-viso">Ceretta viso:</label>
                <input type="number" id="ceretta-viso" name="prezzo_ceretta_viso" placeholder="prezzo" class="input-price" disabled>
            </div>
            <div class="price">
                <label for="ceretta-inguine-totale">Ceretta inguine tot:</label>
                <input type="number" id="ceretta-inguine-totale" name="prezzo_ceretta_ing_parziale" placeholder="prezzo" class="input-price" disabled>
            </div>
        </div>
        <div class="right-half" style="display: flex; flex-direction: column;">
            <div class="price" style="margin-bottom: 20px;">
                <label for="ceretta-gambe">Ceretta gambe:</label>
                <input type="number" id="ceretta-gambe" name="prezzo_ceretta_gambe" placeholder="prezzo" class="input-price" disabled>
            </div>
            <div class="price" style="margin-bottom: 20px;">
                <label for="ceretta-braccia-ascelle">Ceretta braccia o ascelle:</label>
                <input type="number" id="ceretta-braccia-ascelle" name="prezzo_ceretta_braccia_ascelle" placeholder="prezzo" class="input-price" disabled>
            </div>
            <div class="price">
                <label for="ceretta-inguine-parziale">Ceretta inguine parz:</label>
                <input type="number" id="ceretta-inguine-parziale" name="prezzo_ceretta_ing_totale" placeholder="prezzo" class="input-price" disabled>
            </div>
        </div>
    </div>
    <nav aria-label="Page navigation example" style="margin-top: 5%; text-align: center;">
  <ul class="pagination" style="display: inline-block; list-style: none; padding: 0; margin: 0 auto;">
    <li class="page-item" onclick="showPage(1)" style="display: inline-block;">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item" onclick="showPage(2)" style="display: inline-block;">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item" onclick="showPage(3)" style="display: inline-block;">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item" onclick="showPage(4)" style="display: inline-block;">
      <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item" onclick="showPage(5)" style="display: inline-block;">
      <a class="page-link" href="#">5</a>
    </li>
    <li class="page-item" onclick="showPage(6)" style="display: inline-block;">
      <a class="page-link" href="#">6</a>
    </li>
    <li class="page-item" onclick="showPage(7)" style="display: inline-block;">
      <a class="page-link" href="#">7</a>
    </li>
  </ul>
</nav>
</div>
<div class="right-container" style="display: none;" id="massaggio">
    <div class="service">
        <h3>Listino prezzi -> Massaggio</h3>
    </div>
    <div class="tutto" style="margin-left: -2%; margin-bottom: -13%;">
        <div class="left-half" style="display: flex; flex-direction: column;">
            <div class="price"  style="margin-bottom: 20px;">
                <label for="massaggio-rilassante">Massaggio rilassante:</label>
                <input type="number" id="massaggio-rilassante" name="prezzo_massaggio_rilassante" placeholder="prezzo" class="input-price" disabled>
            </div>
            <div class="price" style="margin-bottom: 20px;">
                <label for="massaggio-drenante">Massaggio drenante:</label>
                <input type="number" id="massaggio-drenante" name="prezzo_massaggio_drenante" placeholder="prezzo"  class="input-price" disabled>
            </div>
            <div class="price">
                <label for="massaggio-decontratturante">Massaggio decontratturante:</label>
                <input type="number" id="massaggio-decontratturante" name="prezzo_massaggio_decontratturante" placeholder="prezzo" class="input-price" disabled>
            </div>
        </div>
        <div class="right-half" style="display: flex; flex-direction: column;">
            <div class="price" style="margin-bottom: 20px;">
                <label for="pressoterapia">Pressoterapia:</label>
                <input type="number" id="pressoterapia" name="prezzo_pressoterapia" placeholder="prezzo" class="input-price" disabled>
            </div>
            <div class="price"  style="margin-bottom: 20px;">
                <label for="massaggio-tailandese">Massaggio tailandese:</label>
                <input type="number" id="massaggio-tailandese" name="prezzo_massaggio_tailandese" placeholder="prezzo" class="input-price" disabled>
            </div>
            <div class="price">
                <label for="massaggio-del-viso">Massaggio del viso:</label>
                <input type="number" id="massaggio-del-viso" name="prezzo_massaggio_viso" placeholder="prezzo" class="input-price" disabled>
            </div>
        </div>
    </div>
    <nav aria-label="Page navigation example" style="margin-top: 5%; text-align: center;">
  <ul class="pagination" style="display: inline-block; list-style: none; padding: 0; margin: 0 auto;">
    <li class="page-item" onclick="showPage(1)" style="display: inline-block;">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item" onclick="showPage(2)" style="display: inline-block;">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item" onclick="showPage(3)" style="display: inline-block;">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item" onclick="showPage(4)" style="display: inline-block;">
      <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item" onclick="showPage(5)" style="display: inline-block;">
      <a class="page-link" href="#">5</a>
    </li>
    <li class="page-item" onclick="showPage(6)" style="display: inline-block;">
      <a class="page-link" href="#">6</a>
    </li>
    <li class="page-item" onclick="showPage(7)" style="display: inline-block;">
      <a class="page-link" href="#">7</a>
    </li>
  </ul>
</nav>
</div>

<div class="right-container" style="display: none;" id="uomo">
<div class="service">
    <h3>Listino prezzi -> Uomo</h3>
</div>
<div class="tutto" style="margin-left: -2%; margin-bottom: -13%;">
<div class="left-half" style="display: flex; flex-direction: column;">
        <div class="price" style="margin-bottom: 20px;">
            <label for="taglio-uomo">Taglio uomo:</label>
            <input type="number" id="taglio-uomo" name="prezzo_taglio_uomo" placeholder="prezzo" class="input-price" disabled>
        </div>
        <div class="price" style="margin-bottom: 20px;">
            <label for="colore-uomo">Colore uomo:</label>
            <input type="number" id="colore-uomo" name="prezzo_colore_uomo" placeholder="prezzo" class="input-price" disabled>
        </div>
        <div class="price">
            <label for="taglio-barba">Taglio barba:</label>
            <input type="number" id="taglio-barba" name="prezzo_taglio_barba" placeholder="prezzo" class="input-price" disabled>
        </div>
    </div>
    <div class="right-half" style="display: flex; flex-direction: column;">
        <div class="price" style="margin-bottom: 20px;">
            <label for="trattamenti-viso-uomo">Trattamenti viso uomo:</label>
            <input type="number" id="trattamenti-viso-uomo" name="prezzo_trattamenti_viso_uomo" placeholder="prezzo" class="input-price" disabled>
        </div>
        <div class="price" style="margin-bottom: 20px;">
            <label for="barbiere">Barbiere:</label>
            <input type="number" id="barbiere" name="prezzo_barbiere" placeholder="prezzo" class="input-price" disabled>
        </div>
        <div class="price">
            <label for="depilazione-uomo" >Depilazione uomo:</label>
            <input type="number" id="depilazione-uomo" name="prezzo_depilazione_uomo" placeholder="prezzo" class="input-price" disabled>
        </div>
    </div>
</div>
<nav aria-label="Page navigation example" style="margin-top: 5%; text-align: center;">
  <ul class="pagination" style="display: inline-block; list-style: none; padding: 0; margin: 0 auto;">
    <li class="page-item" onclick="showPage(1)" style="display: inline-block;">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item" onclick="showPage(2)" style="display: inline-block;">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item" onclick="showPage(3)" style="display: inline-block;">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item" onclick="showPage(4)" style="display: inline-block;">
      <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item" onclick="showPage(5)" style="display: inline-block;">
      <a class="page-link" href="#">5</a>
    </li>
    <li class="page-item" onclick="showPage(6)" style="display: inline-block;">
      <a class="page-link" href="#">6</a>
    </li>
    <li class="page-item" onclick="showPage(7)" style="display: inline-block;">
      <a class="page-link" href="#">7</a>
    </li>
  </ul>
</nav>
</div>
<div class="right-container" style="display: none;" id="corpo">
    <div class="service">
        <h3>Listino prezzi -> Corpo</h3>
    </div>
    <div class="tutto" style="margin-left: -2%; margin-bottom: -13%;">
        <div class="left-half" style="display: flex; flex-direction: column;">
            <div class="price" style="margin-bottom: 20px;">
                <label for="solarium">Solarium:</label>
                <input type="number" id="solarium" name="prezzo_solarium" placeholder="prezzo" class="input-price" disabled>
            </div>
            <div class="price" style="margin-bottom: 20px;">
                <label for="trattamenti-anticellulite">Trattamenti anticellulite:</label>
                <input type="number" id="trattamenti-anticellulite" name="prezzo_trattamenti_anticellulite" placeholder="prezzo" class="input-price" disabled>
            </div>
            <div class="price">
                <label for="trattamenti-dimagranti">Trattamenti dimagranti:</label>
                <input type="number" id="trattamenti_dimagranti" name="prezzo_trattamenti_dimagranti" placeholder="prezzo" class="input-price" disabled>
            </div>
        </div>
        <div class="right-half" style="display: flex; flex-direction: column;">
            <div class="price" style="margin-bottom: 20px;">
                <label for="bendaggi">Bendaggi:</label>
                <input type="number" id="bendaggi" name="prezzo_bendaggi" placeholder="prezzo" class="input-price" disabled>
            </div>
            <div class="price">
                <label for="circuito-spa">Circuito spa:</label>
                <input type="number" id="circuito-spa" name="prezzo_circuito_spa" placeholder="prezzo" class="input-price"disabled>
            </div>
        </div>
    </div>
    <nav aria-label="Page navigation example" style="margin-top: 5%; text-align: center;">
        <ul class="pagination" style="display: inline-block; list-style: none; padding: 0; margin: 0 auto;">
            <li class="page-item" onclick="showPage(1)" style="display: inline-block;">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item" onclick="showPage(2)" style="display: inline-block;">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item" onclick="showPage(3)" style="display: inline-block;">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item" onclick="showPage(4)" style="display: inline-block;">
                <a class="page-link" href="#">4</a>
            </li>
            <li class="page-item" onclick="showPage(5)" style="display: inline-block;">
                <a class="page-link" href="#">5</a>
            </li>
            <li class="page-item" onclick="showPage(6)" style="display: inline-block;">
                <a class="page-link" href="#">6</a>
            </li>
            <li class="page-item" onclick="showPage(7)" style="display: inline-block;">
                <a class="page-link" href="#">7</a>
            </li>
        </ul>
    </nav>
</div>
</div>
<div class="new-container" style="display: flex; justify-content: space-between; background-color: #B9D9EB; padding: 20px;">
        <div class="left-column" style="width: 40%; background-color: #B9D9EB; padding: 10px;">
            <!-- Contenuto per la colonna sinistra con solo le label -->
            <div class="mb-3">
            <label for="salone" style="display: block; margin-bottom: 9%; font-family: 'Arial', sans-serif; font-size: 16px; font-weight: bold; color: #333;">Informazioni sul salone:</label>
                <label for="trasporto" style="display: block; margin-bottom: 5%; font-family: 'Arial', sans-serif; font-size: 16px; font-weight: bold; color: #333;">Informazioni trasporto pubblico più vicino:</label>
                <label for="team" style="display: block; margin-bottom: 5%; font-family: 'Arial', sans-serif; font-size: 16px; font-weight: bold; color: #333;">Informazioni sul team:</label>
                <label for="punti-forti" style="display: block; margin-bottom: 5%; font-family: 'Arial', sans-serif; font-size: 16px; font-weight: bold; color: #333;">Informazioni sui punti forti del salone:</label>
            </div>
        </div>
        <div class="right-column" style="width: 100%; background-color: #ffffff; padding: 10px;background-color: #B9D9EB;">
            <!-- Contenuto per la colonna destra con solo gli input text -->
            <div class="mb-3">
                <input type="text" id="saloni" class="form-control" name="saloni" style="width: 100%; margin-bottom: 10px;"value="{{ old('saloni') }}" required maxlength="255">
                <input type="text" id="trasporto" class="form-control" name="trasporto" style="width: 100%; margin-bottom: 10px;"value="{{ old('trasporto') }}" required maxlength="255">
                <input type="text" id="team" class="form-control" name="team" style="width: 100%; margin-bottom: 10px;"value="{{ old('team') }}" required maxlength="255">
                <input type="text" id="punti-forti" class="form-control" name="punti_forti" style="width: 100%; margin-bottom: 10px;"value="{{ old('punti_forti') }}" required maxlength="255">
            </div>
        </div>
    </div>
<div style="background-color: #B9D9EB; padding: 15px; margin-bottom: 20px; display: flex; align-items: center;">

    <!-- Etichetta del campo di caricamento -->
    <label for="immagini" style="color: #4A5568; font-size: 16px; margin-right: 10px; margin-left: 50px;">
    <i class="fas fa-upload" style="margin-right: 5px;"></i> Carica immagini:
</label>

    <!-- Input per il caricamento delle immagini -->
    <input type="file" name="immagini[]" id="immagini" multiple onchange="showSelectedFiles(this)" required>

    <!-- Bottone per il caricamento delle immagini -->


    <!-- Contenitore per i nomi dei file selezionati -->
    <div id="selectedFilesContainer" style="margin-left: 10px; color: #718096; font-size: 14px; max-width: 1200px; overflow-wrap: break-word;"></div>

    <!-- Bottone per aggiungere le immagini -->
    <button type="submit" class="btn btn-info" id="aggiungiBtn" style="margin-left: auto; height: 40px; font-size: 16px; margin-right: 10px; background-color: #2C5282;">Invia</button>


    <div id="errorMessage">Carica almeno un'immagine.</div>

</div>

</form>

<footer style="text-align: center; padding: 20px; background-color: #B9D9EB; color: white; margin-top: 10%; font-size: 14px; height:auto">
    <p>&copy; {{ date('Y') }} Il tuo Salone. Tutti i diritti riservati.</p>
    <p><a href="mailto:whiskers@gmail.com" style="color: white; text-decoration: none;">Contattaci</a></p>
    <p>Politica sulla privacy</p>
</footer>




<script src="js/aggiungi_salone.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/1f4c0029b5.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
function showPage(numeroPagina) {
    // Nascondi tutti i contenitori dei listini prezzi
    var contenitori = document.querySelectorAll('.right-container');
    contenitori.forEach(function(contenitore) {
        contenitore.style.display = 'none';
    });

    // Mostra solo il contenitore relativo alla pagina cliccata
    switch(numeroPagina) {
        case 1:
            document.getElementById('capelli').style.display = 'flex';
            break;
        case 2:
            document.getElementById('viso').style.display = 'flex';
            break;
        case 3:
            document.getElementById('unghie').style.display = 'flex';
            break;
        case 4:
            document.getElementById('depilazione').style.display = 'flex';
            break;
        case 5:
            document.getElementById('massaggio').style.display = 'flex';
            break;
        case 6:
            document.getElementById('uomo').style.display = 'flex';
            break;
        case 7:
            document.getElementById('corpo').style.display = 'flex';
        default:
            // Gestisci numeroPagina non valido
            break;
    }
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<script>
function showSelectedFiles(input) {
    const files = input.files;
    const selectedFilesContainer = document.getElementById('selectedFilesContainer');
    selectedFilesContainer.innerHTML = '';

    for (let i = 0; i < files.length; i++) {
        const fileName = files[i].name;
        const fileItem = document.createElement('span');
        fileItem.textContent = fileName;

        if (i < files.length - 1) {
            fileItem.textContent += ', ';
        }

        selectedFilesContainer.appendChild(fileItem);

        // Aggiungi un salto di riga dopo un certo numero di caratteri o file
        if ((i + 1) % 3 === 0) {
            selectedFilesContainer.appendChild(document.createElement('br'));
        }
    }
}

function checkFiles(event) {
    const input = document.getElementById('immagini');
    const errorMessage = document.getElementById('errorMessage');

    if (!input.value) {
        event.preventDefault(); // Previene l'invio del modulo
        errorMessage.style.display = 'block';
    } else {
        errorMessage.style.display = 'none';
    }
}


function validateForm() {
    const input = document.getElementById('immagini');
    const errorMessage = document.getElementById('errorMessage');

    if (!input.value) {
        errorMessage.style.display = 'block';
        return false; // Impedisce l'invio del modulo
    } else {
        errorMessage.style.display = 'none';
        return true; // Consente l'invio del modulo
    }
}

function checkImages() {
    const input = document.getElementById('immagini');
    const errorMessage = document.getElementById('errorMessage');

    if (!input.files.length) {
        errorMessage.style.display = 'block';
        return false; // Impedisce l'invio del modulo
    } else {
        errorMessage.style.display = 'none';
        return true; // Consente l'invio del modulo
    }
}
</script>

<script>
let debounceTimeout;

function getLocationSuggestions() {
    const input = document.getElementById('posizione').value;
    const suggestionsList = document.getElementById('suggerimenti');
    const errorMessage = document.getElementById('error-message');

    // Nascondi il messaggio di errore
    errorMessage.textContent = '';

    // Se l'input è vuoto, pulisci la lista dei suggerimenti
    if (input.trim() === '') {
        suggestionsList.innerHTML = '';
        return;
    }

    // Effettua una richiesta all'API di OpenStreetMap per ottenere i suggerimenti di località
    fetch(`https://nominatim.openstreetmap.org/search?q=${encodeURIComponent(input)}&format=json&polygon=0&addressdetails=1&limit=5`)
    .then(response => {
        if (!response.ok) {
            throw new Error('Errore durante la richiesta');
        }
        return response.json();
    })
    .then(data => {
        // Pulisci la lista dei suggerimenti
        suggestionsList.innerHTML = '';

        // Aggiungi i suggerimenti di località alla lista
        if (data.length > 0) {
            data.forEach(item => {
                if (item.address) {
                    const city = item.address.city || item.address.town || item.address.village || '';
                    const province = item.address.state || '';
                    const street = item.address.road || '';
                    const postcode = item.address.postcode || '';
                    const displayText = `${street}, ${city}, ${province}, ${postcode}`;
                    const listItem = document.createElement('li');
                    listItem.textContent = displayText;
                    listItem.onclick = () => {
                        document.getElementById('posizione').value = displayText;
                        suggestionsList.innerHTML = ''; // Pulisci i suggerimenti dopo aver selezionato un'opzione
                    };
                    suggestionsList.appendChild(listItem);
                }
            });
        } else {
            const noResultItem = document.createElement('li');
            noResultItem.textContent = 'Nessun risultato trovato';
            suggestionsList.appendChild(noResultItem);
        }
    })
    .catch(error => {
        console.error('Si è verificato un errore durante la richiesta:', error);
        errorMessage.textContent = 'Si è verificato un errore durante il recupero dei suggerimenti. Riprova più tardi.';
    });
}

// Funzione di debounce per ritardare la richiesta mentre l'utente digita
function debounce(func, delay) {
    return function() {
        clearTimeout(debounceTimeout);
        debounceTimeout = setTimeout(() => func(), delay);
    };
}

// Aggiungi un evento input all'input per chiamare getLocationSuggestions() con debounce
document.getElementById('posizione').addEventListener('input', debounce(getLocationSuggestions, 300));
</script>

<script>
    function toggleCapelliInputs() {
        const capelliCheckbox = document.getElementById('servizio_capelli_checkbox');
        const inputPrices = document.querySelectorAll('#capelli .input-price');

        inputPrices.forEach(input => {
            input.disabled = !capelliCheckbox.checked;
        });

        // Reset input values when Capelli checkbox is unchecked
        if (!capelliCheckbox.checked) {
            inputPrices.forEach(input => {
                input.value = '';
            });
        }
    }
</script>

<script>
    function toggleDepilazioneInputs() {
        const depilazioneCheckbox = document.getElementById('servizio_depilazione_checkbox');
        const inputPrices = document.querySelectorAll('#depilazione .input-price');

        inputPrices.forEach(input => {
            input.disabled = !depilazioneCheckbox.checked;
        });

        // Reset input values when Depilazione checkbox is unchecked
        if (!depilazioneCheckbox.checked) {
            inputPrices.forEach(input => {
                input.value = '';
            });
        }
    }
</script>

<script>
    function toggleUnghieInputs() {
        const unghieCheckbox = document.getElementById('servizio_unghie_checkbox');
        const inputPrices = document.querySelectorAll('#unghie .input-price');

        inputPrices.forEach(input => {
            input.disabled = !unghieCheckbox.checked;
        });

        // Reset input values when Unghie checkbox is unchecked
        if (!unghieCheckbox.checked) {
            inputPrices.forEach(input => {
                input.value = '';
            });
        }
    }
</script>

<script>
    function toggleCorpoInputs() {
        const corpoCheckbox = document.getElementById('servizio_corpo_checkbox');
        const inputPrices = document.querySelectorAll('#corpo .input-price');

        inputPrices.forEach(input => {
            input.disabled = !corpoCheckbox.checked;
        });

        // Reset input values when Corpo checkbox is unchecked
        if (!corpoCheckbox.checked) {
            inputPrices.forEach(input => {
                input.value = '';
            });
        }
    }
</script>

<script>
    function toggleCorpoInputs() {
        const corpoCheckbox = document.getElementById('servizio_corpo_checkbox');
        const inputPrices = document.querySelectorAll('#corpo .input-price');

        inputPrices.forEach(input => {
            input.disabled = !corpoCheckbox.checked;
        });

        // Reset input values when Corpo checkbox is unchecked
        if (!corpoCheckbox.checked) {
            inputPrices.forEach(input => {
                input.value = '';
            });
        }
    }
</script>

<script>
    function toggleCorpoInputs() {
        const corpoCheckbox = document.getElementById('servizio_corpo_checkbox');
        const inputPrices = document.querySelectorAll('#corpo .input-price');

        inputPrices.forEach(input => {
            input.disabled = !corpoCheckbox.checked;
        });

        // Reset input values when Corpo checkbox is unchecked
        if (!corpoCheckbox.checked) {
            inputPrices.forEach(input => {
                input.value = '';
            });
        }
    }
</script>

<script>
    function toggleUomoInputs() {
        const uomoCheckbox = document.getElementById('servizio_uomo_checkbox');
        const inputPrices = document.querySelectorAll('#uomo .input-price');

        inputPrices.forEach(input => {
            input.disabled = !uomoCheckbox.checked;
        });

        // Reset input values when Uomo checkbox is unchecked
        if (!uomoCheckbox.checked) {
            inputPrices.forEach(input => {
                input.value = '';
            });
        }
    }
</script>

<script>
    function toggleMassaggioInputs() {
        const massaggioCheckbox = document.getElementById('servizio_massaggio_checkbox');
        const inputPrices = document.querySelectorAll('#massaggio .input-price');

        inputPrices.forEach(input => {
            input.disabled = !massaggioCheckbox.checked;
        });

        // Reset input values when Massaggio checkbox is unchecked
        if (!massaggioCheckbox.checked) {
            inputPrices.forEach(input => {
                input.value = '';
            });
        }
    }
</script>

<script>
    function toggleVisoInputs() {
        const visoCheckbox = document.getElementById('servizio_viso_checkbox');
        const inputPrices = document.querySelectorAll('#viso .input-price');

        inputPrices.forEach(input => {
            input.disabled = !visoCheckbox.checked;
        });

        // Reset input values when Viso checkbox is unchecked
        if (!visoCheckbox.checked) {
            inputPrices.forEach(input => {
                input.value = '';
            });
        }
    }
</script>

<script>
    function checkForm() {
        // Controlla il caricamento delle immagini
        const input = document.getElementById('immagini');
        const errorMessage = document.getElementById('errorMessage');

        if (!input.files.length) {
            errorMessage.style.display = 'block';
            return false; // Impedisce l'invio del modulo
        } else {
            errorMessage.style.display = 'none';
        }

        // Controlla la selezione dei servizi
        const capelliCheckbox = document.getElementById('servizio_capelli_checkbox');
        const depilazioneCheckbox = document.getElementById('servizio_depilazione_checkbox');
        const unghieCheckbox = document.getElementById('servizio_unghie_checkbox');
        const corpoCheckbox = document.getElementById('servizio_corpo_checkbox');
        const uomoCheckbox = document.getElementById('servizio_uomo_checkbox');
        const massaggioCheckbox = document.getElementById('servizio_massaggio_checkbox');
        const visoCheckbox = document.getElementById('servizio_viso_checkbox');

        if (!capelliCheckbox.checked && !depilazioneCheckbox.checked && !unghieCheckbox.checked && !corpoCheckbox.checked && !uomoCheckbox.checked && !massaggioCheckbox.checked && !visoCheckbox.checked) {
            // Se nessun checkbox è selezionato, mostra un messaggio di errore o fai qualcosa per avvisare l'utente
            alert('Seleziona almeno un servizio.');
            return false; // Impedisce l'invio del modulo
        }

        // Controlla la selezione dei giorni
        const lunediCheckbox = document.getElementsByName('giorno_lunedi');
        const martediCheckbox = document.getElementsByName('giorno_martedi');
        const mercolediCheckbox = document.getElementsByName('giorno_mercoledi');
        const giovediCheckbox = document.getElementsByName('giorno_giovedi');
        const venerdiCheckbox = document.getElementsByName('giorno_venerdi');
        const sabatoCheckbox = document.getElementsByName('giorno_sabato');
        const domenicaCheckbox = document.getElementsByName('giorno_domenica');

        const checkboxes = [
            ...lunediCheckbox,
            ...martediCheckbox,
            ...mercolediCheckbox,
            ...giovediCheckbox,
            ...venerdiCheckbox,
            ...sabatoCheckbox,
            ...domenicaCheckbox
        ];

        const selectedDays = checkboxes.filter(checkbox => checkbox.checked);

        if (selectedDays.length === 0) {
            // Se nessun giorno è selezionato, mostra un messaggio di errore o fai qualcosa per avvisare l'utente
            alert('Seleziona almeno un giorno.');
            return false; // Impedisce l'invio del modulo
        }

        // Se tutto è valido, il modulo può essere inviato
        return true;
    }
</script>

<script>
    // Funzione per mostrare/nascondere il menu a discesa
    function toggleDropdown(dropdownId) {
        var dropdownMenu = document.getElementById(dropdownId);
        if (dropdownMenu.classList.contains("show")) {
            dropdownMenu.classList.remove("show");
        } else {
            dropdownMenu.classList.add("show");
        }
    }

    // Funzione per aggiornare l'input con l'opzione selezionata
    function selectOption(option) {
        document.getElementById("posizioneSelect").value = option;
        // Chiudi il dropdown quando viene selezionata un'opzione
        var profileDropdown = document.getElementById('profile-dropdown');
        profileDropdown.classList.remove('show');
    }

    // Chiudi il dropdown del profilo quando si fa clic altrove nella pagina o si seleziona un'opzione
    window.onclick = function(event) {
        var profileDropdown = document.getElementById('profile-dropdown');
        var profileLink = document.getElementById('profile-link');
        var input = document.getElementById('posizioneSelect');
        var input2 = document.getElementById('posizioneSelect2'); // Aggiunto

        if (event.target !== profileLink && event.target !== input && event.target !== input2 && !profileDropdown.contains(event.target)) {
            profileDropdown.classList.remove('show');
        }
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropdowns = document.querySelectorAll('.nav-item.dropdown');

        dropdowns.forEach(dropdown => {
            dropdown.addEventListener('click', function(e) {
                e.stopPropagation();  // Impedisce la propagazione del clic

                // Chiudi tutti i dropdown tranne quello corrente
                dropdowns.forEach(d => {
                    if (d !== dropdown) {
                        d.classList.remove('show');  // Rimuove la classe 'show' dagli altri dropdown
                    }
                });

                // Attiva/disattiva la classe 'show' sul dropdown corrente
                dropdown.classList.toggle('show');
            });
        });

        // Nascondi il dropdown quando si clicca fuori
        document.addEventListener('click', function() {
            dropdowns.forEach(dropdown => {
                dropdown.classList.remove('show');
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        // Mostra il dropdown quando viene cliccato il link
        $("#profile-link").click(function() {
            $("#profile-dropdown").toggle();
        });

        // Nasconde il dropdown quando si fa clic altrove nella pagina
        $(document).click(function(event) {
            if (!$(event.target).closest("#profile-link").length) {
                $("#profile-dropdown").hide();
            }
        });
    });
</script>


</body>
</html>

