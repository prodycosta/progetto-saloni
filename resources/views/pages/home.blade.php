<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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


        .login-register-buttons {
            margin-right: 1%; /* Aggiunge un margine a destra */
        }

        .prenotazione-container {
    background-color: #B9D9EB;
    display: flex; /* Utilizza il flexbox per il layout */
    justify-content: center; /* Centra orizzontalmente */
    margin-top: 0; /* Imposta il margine superiore a 0 */
    padding-top: 0; /* Imposta il padding superiore a 0 */
    min-height: 60vh;
    min-width: 100%;

    }


    .form-control {
    width: 200px; /* Larghezza desiderata */
    height: 30px; /* Altezza desiderata */
    font-size: 14px; /* Dimensione del testo */
    margin: auto; /* Allinea al centro */
    display: block; /* Garantisce che l'input sia su una riga separata */
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
    font-size: 14px; /* Dimensione del testo desiderata */
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
.prenota-btn:hover {
   background-color: #A9C9DB;
   transform: scale(1.05); /* Effetto di zoom leggero */
   transition: all 0.3s ease;
}

.form-container {
    width: 27%;
    margin: auto;
    border-radius: 5px;
    background-color: white;
    height: 50vh; /* Imposta un'altezza desiderata */
    margin-top: 40px;
    margin-bottom: 40px;
    justify-content: center; /* Centra orizzontalmente */
    align-items: center; /* Centra verticalmente */
}

.additional-info {
    background-color: white;
    width: 100%;
    height: 20%;
    padding: 0%;
    margin: 0%;
    display: flex;
    border-radius: 5px;
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

        .dropdown-menu {
        z-index: 9999; /* Imposta un valore alto per il z-index */
    }
    .dropdown-item:hover {
    background-color: white;
    color: #B9D9EB; /* Cambia anche il colore del testo se lo desideri */
}

    </style>

<style>
    .dropdown-option {
    display: block;
    color: #333; /* Colore di default del testo */
    text-decoration: none;
    padding: 8px 10px;
    margin-bottom: 5px;
    border-radius: 5px;
    transition: background-color 0.2s, color 0.2s;
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

.container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 20px;
}

/* Layout per dispositivi mobili */
@media (max-width: 768px) {
    .container {
        grid-template-columns: 1fr; /* cambia layout su schermi piccoli */
    }
}

</style>

<style>


    .additional-info {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
        font-size: 18px;
        font-weight: bold;
    }

    .left-section, .right-section {
        display: flex;
        align-items: center;
        margin-top: 5%;
        margin-bottom: 5%;
    }

    #scissorsIcon, #shopIcon {
        margin-right: 10px;
    }

    .form-container {
        width: 30%;
        height: auto;
    }

    .input-group-text {
        background-color: white;
        border-left: none;
    }

    /* Aggiustamento delle dimensioni per tutti gli input */
    .form-control {
        height: 38px; /* Imposta l'altezza coerente per tutti i campi */
        font-size: 14px;
        padding: 0.375rem 0.75rem;
        border-radius: 0.10rem;
        border: 1px solid #ced4da;
    }

    /* Specifico per input[type="date"] */
    input[type="date"] {
        height: 38px; /* Stessa altezza degli altri input */
        font-size: 14px;
        padding: 0.375rem 0.75rem;
        border-radius: 0.10rem;
        border: 1px solid #ced4da;
        width: 50%; /* Rende la larghezza coerente */

    }

    .input-group {
        width: 50%;
        margin: 0 auto;


    }

    .text-center {
        text-align: center; /* Centra il testo */
    }

    #suggerimenti {
        text-align: center; /* Centra il testo all'interno del div */
        margin-top: 10px; /* Margine per distanziare dai campi sopra */
        width: 30%;
    }


    .input-group .form-select {
    border-right: none; /* Rimuovi il bordo destro dall'input select */

}

.input-group .input-group-text {
    border-left: none; /* Rimuovi il bordo sinistro dall'icona */
    border-radius: 0 0.25rem 0.25rem 0; /* Arrotonda gli angoli */
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
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
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
            <div style=" width: 200px;height:40px ">
    <a href="{{ route('auth.login') }}" class="btn btn-outline-info login-register-buttons" style="display: inline-block;">Login</a>
    <a href="{{ route('auth.register') }}" class="btn btn-outline-info login-register-buttons" style="display: inline-block;">Register</a>
</div>
            @endguest
            @auth
<div style="display: inline-block; position: relative; text-align: left;">
    <a href="#" id="profile-link" style="cursor: pointer; text-decoration: none; color: #B9D9EB;">
        Il mio profilo<span style="margin-right: 15px;"></span><i class="fas fa-user" style="margin-right: 15px;"></i>
    </a>
    <div id="profile-dropdown" style="display: none; position: absolute; top: 120%; left: 0%; background-color: #fff; border: 1px solid #ccc; padding: 10px; min-width: 120px; box-shadow: 0 2px 5px rgba(0,0,0,0.2); border-radius: 5px;">
    <!-- Contenuto del dropdown qui -->
    <a href="{{ route('logout') }}" class="dropdown-option" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <i class="fas fa-sign-out-alt"></i> Logout
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<a href="{{ route('pages.aggiungi_salone') }}" class="dropdown-option">
    <i class="fas fa-plus"></i> Aggiungi
</a>

<a href="{{ route('pages.account') }}" class="dropdown-option">
    <i class="fas fa-user"></i> Account
</a>
</div>
</div>
@endauth
        </div>
    </div>
</nav>

<div class="prenotazione-container">
<div class="form-container">
<div class="additional-info">
    <div class="left-section">
        <i id="scissorsIcon" class="fa-solid fa-scissors"></i>
        <span id="scissorsText">Trattamenti</span>
    </div>
    <div class="right-section">
        <i id="shopIcon" class="fa-solid fa-shop"></i>
        <span id="shopText">Nome del salone</span>
    </div>
</div>
<form id="myForm" method="GET" action="{{ route('pages.map') }}" onsubmit="updateFormAction()">
            <!-- Selezione trattamenti -->
            <div class="mb-3 text-center">
    <div class="dropdown" style="width: 100%;">
        <div class="input-group">
            <select class="form-select" id="posizioneSelect" name="trattamento" required style="border-right: none;">
                <option value="" selected disabled style="display: none;">Cerca per trattamenti</option>
                <option value="Capelli" {{ request('trattamento') == 'Capelli' ? 'selected' : '' }}>Capelli</option>
                <option value="Depilazione" {{ request('trattamento') == 'Depilazione' ? 'selected' : '' }}>Depilazione</option>
                <option value="Viso" {{ request('trattamento') == 'Viso' ? 'selected' : '' }}>Viso</option>
                <option value="Unghie" {{ request('trattamento') == 'Unghie' ? 'selected' : '' }}>Unghie</option>
                <option value="Corpo" {{ request('trattamento') == 'Corpo' ? 'selected' : '' }}>Corpo</option>
                <option value="Massaggio" {{ request('trattamento') == 'Massaggio' ? 'selected' : '' }}>Massaggio</option>
                <option value="Per uomo" {{ request('trattamento') == 'Per uomo' ? 'selected' : '' }}>Per uomo</option>
            </select>
            <div class="input-group-append">
                <span class="input-group-text" style="border-left: none; border-radius: 0 0.25rem 0.25rem 0;"><i class="fa-solid fa-search"></i></span>
            </div>
        </div>
    </div>
</div>

            <!-- Data input -->
            <div class="mb-3 text-center">
                <input type="date" class="form-control" id="dataInput" name="data" value="{{ request('data') }}" required>
            </div>

            <!-- Posizione input -->
            <div class="mb-3 text-center">
    <div class="input-group">
        <input type="text" class="form-control" id="posizioneInput" name="posizione" value="{{ request('posizione') }}" placeholder="Posizione" required style="border-right: none;">
        <div class="input-group-append">
            <span class="input-group-text" style="border-left: none; border-radius: 0 0.25rem 0.25rem 0;"><i class="fa-solid fa-map-marker-alt"></i></span>
        </div>
    </div>
    <div id="suggerimenti"></div>
</div>

            <!-- Bottone cerca -->
            <div class="text-center custom-margin" style="margin-top: 15px; margin-bottom: 15px;">
            <button type="submit" class="btn btn-outline-info" style="width: 30%;">Cerca</button>
        </div>
        </form>
    <div id="secondForm" class="hidden"> <!-- Div contenente il secondo form -->
    <form id="searchForm" onsubmit="return searchSaloni()">
        <div class="mb-3 text-center">
            <div class="input-group mx-auto" style="width: 50%;">
                <input type="text" class="form-control" id="saloneInput" placeholder="Cerca salone..." name="nome" value="{{ request()->input('nome') }}" style="border-right: none; height: 38px; border-radius: 0.25rem 0 0 0.25rem;" required>
                <span class="input-group-text" style="border-left: none; border-radius: 0 0.25rem 0.25rem 0; background-color: white;">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>
            </div>
        </div>
        <div class="text-center custom-margin" style="margin-top: 15%; margin-bottom: 15%;">
            <button type="submit" class="btn btn-outline-info" style="width: 30%;">Cerca</button>
        </div>
    </form>
</div>
</div>
</div>

<footer style="text-align: center; padding: 20px; background-color: #B9D9EB; color: white; margin-top: 10%; font-size: 14px; height:auto">
    <p>&copy; {{ date('Y') }} Il tuo Salone. Tutti i diritti riservati.</p>
    <p><a href="mailto:whiskers@gmail.com" style="color: white; text-decoration: none;">Contattaci</a></p>
    <p>Politica sulla privacy</p>
</footer>


<script src="js/home.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/1f4c0029b5.js" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        // Seleziona la sezione delle forbici
        const scissorsSection = $(".left-section");
        const scissorsIcon = scissorsSection.find("i");
        const scissorsText = scissorsSection.find("span");

        // Imposta il colore di default per le forbici
        scissorsIcon.css("color", "#B9D9EB");
        scissorsText.css("color", "#B9D9EB");

        // Aggiungi un listener di evento al clic sulla sezione delle forbici
        scissorsSection.click(function() {
            // Imposta il colore dell'icona e del testo delle forbici
            scissorsIcon.css("color", "#B9D9EB");
            scissorsText.css("color", "#B9D9EB");

            // Imposta il colore nero per l'icona del salone e il suo testo
            $(".right-section i").css("color", "black");
            $(".right-section span").css("color", "black");
        });

        // Seleziona la sezione del salone
        const shopSection = $(".right-section");
        const shopIcon = shopSection.find("i");
        const shopText = shopSection.find("span");

        // Aggiungi un listener di evento al clic sulla sezione del salone
        shopSection.click(function() {
            // Imposta il colore dell'icona e del testo del salone
            shopIcon.css("color", "#B9D9EB");
            shopText.css("color", "#B9D9EB");

            // Imposta il colore nero per l'icona delle forbici e il suo testo
            $(".left-section i").css("color", "black");
            $(".left-section span").css("color", "black");
        });
    });
</script>



<script>
    $(document).ready(function(){
        // Aggiungi un listener di evento al clic sulla prima icona
        $(".left-section").click(function(){
            // Rimuovi la classe "active" dalla seconda icona e aggiungila alla prima
            $(".right-section").removeClass("active");
            $(this).addClass("active");
            // Visualizza il form
            $("#myForm").removeClass("hidden");
            // Nascondi il secondo form
            $("#secondForm").addClass("hidden");
        });

        // Aggiungi un listener di evento al clic sulla seconda icona
        $(".right-section").click(function(){
            // Rimuovi la classe "active" dalla prima icona e aggiungila alla seconda
            $(".left-section").removeClass("active");
            $(this).addClass("active");
            // Nascondi il form
            $("#myForm").addClass("hidden");
            // Visualizza il secondo form
            $("#secondForm").removeClass("hidden");
        });
    });
</script>

<script>


        // Variabile contenente solo i nomi delle province
        var nomiProvince = Array.from(new Set(provincesData.map(provincia => provincia.nome)));

// Variabile contenente solo le province senza ripetizioni
var province = Array.from(new Set(provincesData.map(provincia => provincia.provincia.nome)));

// Variabile contenente solo i cap delle province senza ripetizioni
var capProvince = Array.from(new Set(provincesData.flatMap(provincia => provincia.cap)));

        // Selezione dell'input e del div dei suggerimenti
        var inputPosizione = document.getElementById('posizioneInput');
        var suggerimentiDiv = document.getElementById('suggerimenti');

        // Aggiungi un listener di evento all'input per gestire la digitazione
        inputPosizione.addEventListener('input', function() {
            // Ottieni il testo inserito nell'input
            var inputText = inputPosizione.value.toLowerCase();

            // Se la lunghezza del testo è maggiore di 2
            if (inputText.length >= 4) {
                // Filtra i suggerimenti in base al testo inserito
                var suggerimenti = nomiProvince.filter(provincia => provincia.toLowerCase().includes(inputText))
                                        .concat(province.filter(provincia => provincia.toLowerCase().includes(inputText)))
                                        .concat(capProvince.filter(cap => cap.startsWith(inputText)));

                // Se ci sono suggerimenti, mostra il div dei suggerimenti
                if (suggerimenti.length > 0) {
                    // Genera l'HTML per i suggerimenti
                    var suggerimentiHTML = suggerimenti.map(suggerimento => `<div>${suggerimento}</div>`).join('');

                    // Aggiorna il contenuto del div dei suggerimenti e mostralo
                    suggerimentiDiv.innerHTML = suggerimentiHTML;
                    suggerimentiDiv.style.display = 'block';
                } else {
                    // Se non ci sono suggerimenti, nascondi il div dei suggerimenti
                    suggerimentiDiv.style.display = 'none';
                }
            } else {
                // Se la lunghezza del testo è inferiore a 3, nascondi il div dei suggerimenti
                suggerimentiDiv.style.display = 'none';
            }
        });

        // Aggiungi un listener di evento al div dei suggerimenti per gestire la selezione
        suggerimentiDiv.addEventListener('click', function(event) {
            // Ottieni il testo del suggerimento selezionato
            var suggerimentoSelezionato = event.target.textContent;

            // Inserisci il testo del suggerimento nell'input
            inputPosizione.value = suggerimentoSelezionato;

            // Nascondi il div dei suggerimenti
            suggerimentiDiv.style.display = 'none';
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
    function validateSecondForm() {
        // Verifica se il campo posizioneSelect2 è stato compilato
        var posizioneSelect2 = document.getElementById('posizioneSelect2').value;
        if (posizioneSelect2 === '') {
            alert('Il campo Posizione è obbligatorio!');
            return false; // Interrompe l'azione del link se il campo è vuoto
        }
        // Altri controlli possono essere aggiunti qui, se necessario
        return true; // Procedi con l'azione del link se il campo è compilato
    }
</script>
<script>
    function validateMyForm() {
        // Verifica se i campi obbligatori sono stati compilati
        var posizioneSelect = document.getElementById('posizioneSelect').value;
        var dataInput = document.getElementById('dataInput').value;
        var posizioneInput = document.getElementById('posizioneInput').value;

        if (posizioneSelect === '' || dataInput === '' || posizioneInput === '') {
            alert('Tutti i campi sono obbligatori!');
            return false; // Interrompe l'invio del modulo se uno dei campi è vuoto
        }
        // Altri controlli possono essere aggiunti qui, se necessario
        return true; // Procedi all'invio del modulo se tutti i campi obbligatori sono compilati
    }
</script>

<script>
    document.getElementById('myForm').addEventListener('submit', function(e) {
        var trattamento = document.getElementById('posizioneSelect').value;
        if (trattamento === 'Capelli') {
            this.action = "{{ route('pages.capelli.piega') }}";
        } else if (trattamento === 'Depilazione') {
            this.action = "{{ route('pages.depilazione.ceretta_corpo') }}";
        } else if (trattamento === 'Viso') {
            this.action = "{{ route('pages.viso.trattamenti_viso') }}";
        } else if (trattamento === 'Unghie') {
            this.action = "{{ route('pages.unghie.manicure_semipermanente') }}";
        } else if (trattamento === 'Corpo') {
            this.action = "{{ route('pages.corpo.solarium') }}";
        } else if (trattamento === 'Per uomo') {
            this.action = "{{ route('pages.uomo.taglio_barba') }}";
        } else if (trattamento === 'Massaggio') {
            this.action = "{{ route('pages.massaggio.massaggio_rilassante') }}";
        }
    });
</script>

<script>
        function searchSaloni() {
            const saloneInput = document.getElementById('saloneInput').value;
            const url = `{{ route('pages.saloni') }}?nome=${encodeURIComponent(saloneInput)}`;
            window.location.href = url; // Reindirizza alla pagina con i risultati della ricerca
            return false; // Previene l'invio del form in modo tradizionale
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


</body>
</html>
