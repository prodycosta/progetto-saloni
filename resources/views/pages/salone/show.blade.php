<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saloni</title>

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
        .navbar-brand:hover {
        color:  #7FC8FF; /* Cambiato colore al passaggio del mouse */
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

.colored-br {
    width: 100%;
    height: 1px;
    background-color: #B9D9EB;

}


.centered-div {

            width: 80%;
            height: auto;
            background-color: white;
            margin: 20px auto;
            display: block;

            align-items: flex-start;

            border-radius: 5px;
            position: relative;
            padding: 20px;

        }

        .back-button {

    font-size: 18px;
    color: #000;
    padding: 10px;
    display: flex;
    align-items: center;
    cursor: pointer;
}

.back-button i {
    margin-right: 5px;
}

.button-container {
            display: flex;
            gap: 10px;
            position: absolute;
            top: 10px;
            right: 10px;
        }
        .button-container button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            background-color: #99C7DB;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .button-container button:hover {
            background-color: #78B4D0;
        }

        .inner-div {
    width: 100%;
    height: 300px;
    margin: 50px auto 0 auto;
    display: flex;
    justify-content: space-between;
    position: relative;

}

.half {
    width: 100%;

    overflow: hidden;
    position: relative;
}

.half img {
    width: 100%;
    height: 100%;
    object-fit: cover;

}

#prev-btn, #next-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.7);
    color: #555;
    border: none;
    padding: 4px 12px;
    font-size: 24px;
    cursor: pointer;
    z-index: 10;
    border-radius: 10%;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease, transform 0.3s ease;
}

#prev-btn {
    left: 10px;
}

#next-btn {
    right: 10px;
}

#prev-btn:hover, #next-btn:hover {
    background-color: black; /* Colore di sfondo grigio più scuro quando si passa sopra col mouse */
    transform: translateY(-50%) scale(1.1);
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
}

#prev-btn:active, #next-btn:active {
    transform: translateY(-50%) scale(0.95);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.back-button {
    font-size: 18px;
    color: #000;
    padding: 10px;
    display: flex;
    align-items: center;
    cursor: pointer;
}

.button-container {
    display: flex;
    gap: 10px;
    position: absolute;
    top: 10px;
    right: 10px;
}

.button-container button {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border: none;
    background-color: #99C7DB;
    color: white;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.button-container button:hover {
    background-color: #ccc;
}

#prev-btn i, #next-btn i {
    font-size: 24px;
    color: white;
}

.info-container {
    width: 100%; /* Larghezza completa del contenitore */
    margin-top: 20px;
    padding: 20px;
    background-color: white;

    box-sizing: border-box;
    clear: both; /* Assicura che questo div si posizioni sotto il contenuto precedente */
}

.info-container p {
    display: flex;
    align-items: center;
    font-size: 16px;
    margin: 10px 0;
}

.info-container i {
    font-size: 22px;
    margin-right: 25px;
    color: #000000;
}

.info-text {
    font-size: 19px;
    color: #000000;
}

.services-container {
    width: 100%;
    margin-top: 20px;
    padding: 20px;
    background-color: #e9ecef;
    border-radius: 8px;
    box-sizing: border-box;
}

.services-container h2 {
    font-size: 22px;
    color: #000;
    margin-bottom: 15px;
}

.services-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.service-box {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 15px;
    text-align: center;
    width: calc(15% - 15px); /* Ridotto per rendere i box più piccoli */
    box-sizing: border-box;
    transition: box-shadow 0.3s ease;
    min-width: 120px; /* Altezza minima per mantenere il layout */
}

.service-box i {
    font-size: 30px; /* Ridotto per mantenere la proporzione */
    color: #333;
    margin-bottom: 10px;
}

.service-box p {
    font-size: 14px; /* Ridotto per una dimensione più compatta */
    color: #333;
}

.service-box:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.treatments-container {
    width: 100%;
    margin-top: 3%;
    margin-bottom: 3%;
    background-color: white;
    box-sizing: border-box;
}

.treatments-container h2 {
    font-size: 22px;
    color: #000;
    margin-bottom: 15px;
}

.treatments-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.treatments-category {
    display: none; /* Nascondi tutte le categorie di default */
}

.treatments-category.active {
    display: block; /* Mostra solo la categoria attiva */
}

.treatments-category h3 {
    font-size: 20px;
    color: #333;
    margin-bottom: 10px;
}

.treatment-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 5px 0;
}

.treatment-name {
    font-size: 16px;
    margin: 0;
    font-weight: normal;
}

.treatment-price {
    font-size: 16px;
    margin: 0;
    font-weight: bold;
    color: #333;
}


.reviews-container {
    margin-top: 10%;
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

.reviews-title {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
    border-bottom: 2px solid #ddd;
    padding-bottom: 10px;
}

.review-item {
    border-bottom: 1px solid #ddd;
    padding: 15px 0;
    margin-bottom: 15px;
}

.review-item:last-child {
    border-bottom: none;
}

.review-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.review-name {
    font-size: 18px;
    color: #333;
}

.review-rating {
    font-size: 16px;
    color: #f39c12;
}

.star {
    font-size: 18px;
    color: #ccc;
}

.star.filled {
    color: #f39c12;
}

.review-text {
    margin: 10px 0;
    color: #555;
}

.review-date {
    font-size: 12px;
    color: #888;
}

.no-reviews {
    color: #777;
    font-style: italic;
}

.add-review {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    margin-top: 40px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.add-review-title {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

.review-form .form-group {
    margin-bottom: 20px;
}

.review-textarea {
    width: 100%;
    height: 150px;
    padding: 15px;
    border-radius: 8px;
    border: 1px solid #ddd;
    background-color: #f9f9f9;
    font-size: 16px;
    resize: none;
    box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.05);
}

.review-input {
    width: 100%;
    padding: 15px;
    border-radius: 8px;
    border: 1px solid #ddd;
    background-color: #f9f9f9;
    font-size: 16px;
}

.rating-section {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 0;
}

.rating-label {
    font-size: 18px;
    font-weight: bold;
    color: #555;
}

.review-select {
    width: 100px;
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ddd;
    background-color: #f9f9f9;
    font-size: 16px;
}

.submit-btn {
    background-color: #3498db;
    color: #fff;
    font-size: 18px;
    padding: 12px 25px;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    display: block;
    margin: 0 auto;
    width: 100%;
    max-width: 200px;
}

.submit-btn:hover {
    background-color: #2980b9;
}

.star-rating {
    display: flex;
    flex-direction: row-reverse;
    justify-content: flex-start;
    gap: 5px;
}

.star-rating input {
    display: none;
}

.star-rating label {
    font-size: 2rem;
    color: #ddd;
    cursor: pointer;
    transition: color 0.3s ease-in-out;
}

.star-rating input:checked ~ label,
.star-rating label:hover,
.star-rating label:hover ~ label {
    color: #f5c518;
}
    </style>

<style>
    .no-underline {
        text-decoration: none; /* Rimuove la sottolineatura */

    }

    .no-underline:hover {
        text-decoration: none; /* Assicura che non ci sia sottolineatura al passaggio del mouse */
    }


    .additional-info {
    margin-top: 30px; /* Distanziamento tra la sezione recensioni e la sezione informazioni */
    padding: 20px;
    background-color: white;
    border-radius: 8px;
}

.additional-info h4 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.additional-info p {
    font-size: 1em;
    line-height: 1.5;
}
</style>
<style>
    #profile-dropdown a.dropdown-option:hover {

        color: #B9D9EB; /* Cambia anche il testo in bianco per contrasto */
    }

    .no-image-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;  /* Assicura che l'area prenda tutta l'altezza del div */
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

</style>

<style>
    .ordina:hover {
        border-color: #B9D9EB; /* Cambia il colore del bordo */
        color: #B9D9EB; /* Cambia il colore del testo */
    }

    .ordina:hover .fas {
        color: #B9D9EB; /* Cambia il colore dell'icona */
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

.dropdown-menu {
        z-index: 9999; /* Imposta un valore alto per il z-index */
    }
    .dropdown-item:hover {
    background-color: white;
    color: #B9D9EB; /* Cambia anche il colore del testo se lo desideri */
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
</nav>

<br><div class="colored-br"></div>

<div class="centered-div">
<div class="back-button" onclick="history.back()">
    <i class="fas fa-arrow-left"></i> Indietro
</div>
    <div class="button-container">
    <button data-target="prenota-section">Prenota ora</button>
    <button data-target="biografia-section">Biografia</button>
</div>

    <div class="inner-div">

    @php
        $immagini = $salone->immagini ? json_decode($salone->immagini) : [];
        $numeroDiImmagini = count($immagini);
    @endphp
        @if($numeroDiImmagini > 1)
        <button id="prev-btn">
            <i class="fas fa-chevron-left"></i> <!-- Icona di Font Awesome per la freccia a sinistra -->
        </button>
        @endif


         <div class="half" id="left-half">
        @if($numeroDiImmagini > 0)
            <img src="{{ asset('storage/' . $immagini[0]) }}" alt="Immagine del salone">
        @else
        <div class="no-image-container">
            <p>Nessuna immagine disponibile.</p>
        </div>
        @endif
    </div>

    <div class="half" id="right-half">
        @if($numeroDiImmagini > 1)
            <img src="{{ asset('storage/' . $immagini[1]) }}" alt="Immagine del salone">
        @else
        <div class="no-image-container">
            <p>Nessuna immagine disponibile.</p>
        </div>
        @endif
    </div>

    @if($numeroDiImmagini > 1)
    <button id="next-btn">
        <i class="fas fa-chevron-right"></i> <!-- Icona di Font Awesome per la freccia a destra -->
    </button>
    @endif
    </div>

    <!-- Nuovo div per le informazioni, posizionato fuori da inner-div -->
    <div id="prenota-section" class="info-container">
    <p>
        <i class="fas fa-map-marker-alt"></i>
        <span class="info-text">{{ $salone->posizione ?? 'Indirizzo non disponibile' }}</span>
    </p>
    <p>
        <i class="fas fa-clock"></i>
        <span class="info-text">
            Orario Apertura: {{ \Carbon\Carbon::parse($salone->orario_apertura)->format('H:i') ?? 'orario non disponibile' }}<br>
            Orario Chiusura: {{ \Carbon\Carbon::parse($salone->orario_chiusura)->format('H:i') ?? 'orario non disponibile' }}
        </span>
    </p>
    <p>
        <i class="fas fa-phone-alt"></i>
        <span class="info-text">{{ $salone->numero_telefono ?? 'Numero di telefono non disponibile' }}</span>
    </p>
</div>
<div class="services-container">
    <h2>Servizi Offerti</h2>

    <!-- Quadrati dei servizi -->
    <div class="services-grid">
        <!-- Quadrato per tutti i servizi -->
        <div class="service-box" data-category="all">
            <i class="fas fa-th-list"></i>
            <p>Tutti</p>
        </div>

        <!-- Variabile per controllare se ci sono servizi disponibili -->
        @php
            $serviziDisponibili = false; // Flag per controllare la disponibilità dei servizi
        @endphp

        <!-- Servizi specifici -->
        @if($salone->servizio_capelli)
            @php $serviziDisponibili = true; @endphp
            <div class="service-box" data-category="capelli">
                <i class="fas fa-cut"></i>
                <p>Capelli</p>
            </div>
        @endif
        @if($salone->servizio_depilazione)
            @php $serviziDisponibili = true; @endphp
            <div class="service-box" data-category="depilazione">
                <i class="fas fa-tachometer-alt"></i> <!-- Icona per Depilazione -->
                <p>Depilazione</p>
            </div>
        @endif
        @if($salone->servizio_unghie)
            @php $serviziDisponibili = true; @endphp
            <div class="service-box" data-category="unghie">
                <i class="fas fa-hand-sparkles"></i>
                <p>Unghie</p>
            </div>
        @endif
        @if($salone->servizio_corpo)
            @php $serviziDisponibili = true; @endphp
            <div class="service-box" data-category="corpo">
                <i class="fas fa-spa"></i>
                <p>Corpo</p>
            </div>
        @endif
        @if($salone->servizio_uomo)
            @php $serviziDisponibili = true; @endphp
            <div class="service-box" data-category="uomo">
                <i class="fas fa-male"></i>
                <p>Uomo</p>
            </div>
        @endif
        @if($salone->servizio_massaggio)
            @php $serviziDisponibili = true; @endphp
            <div class="service-box" data-category="massaggio">
                <i class="fas fa-bed"></i>
                <p>Massaggio</p>
            </div>
        @endif
        @if($salone->servizio_viso)
            @php $serviziDisponibili = true; @endphp
            <div class="service-box" data-category="viso">
                <i class="fas fa-face-smile"></i>
                <p>Viso</p>
            </div>
        @endif

        <!-- Messaggio se non ci sono servizi disponibili -->
        @if (!$serviziDisponibili)
            <p>Nessun servizio disponibile.</p>
        @endif
    </div>
</div>

    <!-- Sezione trattamenti -->
    <div class="treatments-container">
    <h2>Trattamenti Disponibili</h2>
    <div class="treatments-list">
        <!-- Trattamenti per Capelli -->
        @php
            $hasAvailablePrice = $salone->prezzo_piega || $salone->prezzo_taglio_donna || $salone->prezzo_taglio_uomo || $salone->prezzo_colpi_di_sole || $salone->prezzo_trattamenti_capelli || $salone->prezzo_taglio_piega_donna;
        @endphp
        @if($hasAvailablePrice)
            <div class="treatments-category capelli">
                <h3>Capelli</h3>
                @if($salone->prezzo_piega)
                    <div class="treatment-item">
                        <p class="treatment-name">Piega:</p>
                        <p class="treatment-price">{{ $salone->prezzo_piega }}€</p>
                    </div>
                @endif
                @if($salone->prezzo_taglio_donna)
                    <div class="treatment-item">
                        <p class="treatment-name">Taglio Donna:</p>
                        <p class="treatment-price">{{ $salone->prezzo_taglio_donna }}€</p>
                    </div>
                @endif
                @if($salone->prezzo_taglio_uomo)
                    <div class="treatment-item">
                        <p class="treatment-name">Taglio Uomo:</p>
                        <p class="treatment-price">{{ $salone->prezzo_taglio_uomo }}€</p>
                    </div>
                @endif
                @if($salone->prezzo_colpi_di_sole)
                    <div class="treatment-item">
                        <p class="treatment-name">Colpi di Sole:</p>
                        <p class="treatment-price">{{ $salone->prezzo_colpi_di_sole }}€</p>
                    </div>
                @endif
                @if($salone->prezzo_trattamenti_capelli)
                    <div class="treatment-item">
                        <p class="treatment-name">Trattamenti Capelli:</p>
                        <p class="treatment-price">{{ $salone->prezzo_trattamenti_capelli }}€</p>
                    </div>
                @endif
                @if($salone->prezzo_taglio_piega_donna)
                    <div class="treatment-item">
                        <p class="treatment-name">Taglio e Piega Donna:</p>
                        <p class="treatment-price">{{ $salone->prezzo_taglio_piega_donna }}€</p>
                    </div>
                @endif
            </div>
        @endif
        </div>
        </div>
        @if($salone->prezzo_trattamenti_viso || $salone->prezzo_depilazione_sopracciglia || $salone->prezzo_extension_ciglia || $salone->prezzo_permanente_ciglia || $salone->prezzo_colorazione_ciglia_sopracciglia || $salone->prezzo_depilazione_filo_orientale)
<div class="treatments-category viso">
    <h3>Viso</h3>

    <!-- Trattamenti Viso -->
    @if($salone->prezzo_trattamenti_viso)
    <div class="treatment-item">
        <p class="treatment-name">Trattamenti Viso:</p>
        <p class="treatment-price">{{ $salone->prezzo_trattamenti_viso }}€</p>
    </div>
    @endif

    <!-- Depilazione Sopracciglia -->
    @if($salone->prezzo_depilazione_sopracciglia)
    <div class="treatment-item">
        <p class="treatment-name">Depilazione Sopracciglia:</p>
        <p class="treatment-price">{{ $salone->prezzo_depilazione_sopracciglia }}€</p>
    </div>
    @endif

    <!-- Extension Ciglia -->
    @if($salone->prezzo_extension_ciglia)
    <div class="treatment-item">
        <p class="treatment-name">Extension Ciglia:</p>
        <p class="treatment-price">{{ $salone->prezzo_extension_ciglia }}€</p>
    </div>
    @endif

    <!-- Permanente Ciglia -->
    @if($salone->prezzo_permanente_ciglia)
    <div class="treatment-item">
        <p class="treatment-name">Permanente Ciglia:</p>
        <p class="treatment-price">{{ $salone->prezzo_permanente_ciglia }}€</p>
    </div>
    @endif

    <!-- Colorazione Ciglia e Sopracciglia -->
    @if($salone->prezzo_colorazione_ciglia_sopracciglia)
    <div class="treatment-item">
        <p class="treatment-name">Colorazione Ciglia e Sopracciglia:</p>
        <p class="treatment-price">{{ $salone->prezzo_colorazione_ciglia_sopracciglia }}€</p>
    </div>
    @endif

    <!-- Depilazione Filo Orientale -->
    @if($salone->prezzo_depilazione_filo_orientale)
    <div class="treatment-item">
        <p class="treatment-name">Depilazione con Filo Orientale:</p>
        <p class="treatment-price">{{ $salone->prezzo_depilazione_filo_orientale }}€</p>
    </div>
    @endif

</div>
@endif
@if($salone->prezzo_manicure_semipermanente || $salone->prezzo_manicure || $salone->prezzo_pedicure || $salone->prezzo_rimozione_gel || $salone->prezzo_pedicure_semipermanente || $salone->prezzo_callus_peeling)
<div class="treatments-category unghie">
    <h3>Unghie</h3>

    <!-- Manicure Semipermanente -->
    @if($salone->prezzo_manicure_semipermanente)
    <div class="treatment-item">
        <p class="treatment-name">Manicure Semipermanente:</p>
        <p class="treatment-price">{{ $salone->prezzo_manicure_semipermanente }}€</p>
    </div>
    @endif

    <!-- Manicure -->
    @if($salone->prezzo_manicure)
    <div class="treatment-item">
        <p class="treatment-name">Manicure:</p>
        <p class="treatment-price">{{ $salone->prezzo_manicure }}€</p>
    </div>
    @endif

    <!-- Pedicure -->
    @if($salone->prezzo_pedicure)
    <div class="treatment-item">
        <p class="treatment-name">Pedicure:</p>
        <p class="treatment-price">{{ $salone->prezzo_pedicure }}€</p>
    </div>
    @endif

    <!-- Rimozione Gel -->
    @if($salone->prezzo_rimozione_gel)
    <div class="treatment-item">
        <p class="treatment-name">Rimozione Gel:</p>
        <p class="treatment-price">{{ $salone->prezzo_rimozione_gel }}€</p>
    </div>
    @endif

    <!-- Pedicure Semipermanente -->
    @if($salone->prezzo_pedicure_semipermanente)
    <div class="treatment-item">
        <p class="treatment-name">Pedicure Semipermanente:</p>
        <p class="treatment-price">{{ $salone->prezzo_pedicure_semipermanente }}€</p>
    </div>
    @endif

    <!-- Callus Peeling -->
    @if($salone->prezzo_callus_peeling)
    <div class="treatment-item">
        <p class="treatment-name">Callus Peeling:</p>
        <p class="treatment-price">{{ $salone->prezzo_callus_peeling }}€</p>
    </div>
    @endif

</div>
@endif
@if($salone->prezzo_ceretta_corpo || $salone->prezzo_ceretta_viso || $salone->prezzo_ceretta_ing_parziale || $salone->prezzo_ceretta_gambe || $salone->prezzo_ceretta_braccia_ascelle || $salone->prezzo_ceretta_ing_totale)
<div class="treatments-category depilazione">
    <h3>Depilazione</h3>

    <!-- Ceretta Corpo -->
    @if($salone->prezzo_ceretta_corpo)
    <div class="treatment-item">
        <p class="treatment-name">Ceretta Corpo:</p>
        <p class="treatment-price">{{ $salone->prezzo_ceretta_corpo }}€</p>
    </div>
    @endif

    <!-- Ceretta Viso -->
    @if($salone->prezzo_ceretta_viso)
    <div class="treatment-item">
        <p class="treatment-name">Ceretta Viso:</p>
        <p class="treatment-price">{{ $salone->prezzo_ceretta_viso }}€</p>
    </div>
    @endif

    <!-- Ceretta Inguine Parziale -->
    @if($salone->prezzo_ceretta_ing_parziale)
    <div class="treatment-item">
        <p class="treatment-name">Ceretta Inguine Parziale:</p>
        <p class="treatment-price">{{ $salone->prezzo_ceretta_ing_parziale }}€</p>
    </div>
    @endif

    <!-- Ceretta Gambe -->
    @if($salone->prezzo_ceretta_gambe)
    <div class="treatment-item">
        <p class="treatment-name">Ceretta Gambe:</p>
        <p class="treatment-price">{{ $salone->prezzo_ceretta_gambe }}€</p>
    </div>
    @endif

    <!-- Ceretta Braccia e Ascelle -->
    @if($salone->prezzo_ceretta_braccia_ascelle)
    <div class="treatment-item">
        <p class="treatment-name">Ceretta Braccia e Ascelle:</p>
        <p class="treatment-price">{{ $salone->prezzo_ceretta_braccia_ascelle }}€</p>
    </div>
    @endif

    <!-- Ceretta Inguine Totale -->
    @if($salone->prezzo_ceretta_ing_totale)
    <div class="treatment-item">
        <p class="treatment-name">Ceretta Inguine Totale:</p>
        <p class="treatment-price">{{ $salone->prezzo_ceretta_ing_totale }}€</p>
    </div>
    @endif

</div>
@endif
@if($salone->prezzo_massaggio_rilassante || $salone->prezzo_massaggio_drenante || $salone->prezzo_massaggio_decontratturante || $salone->prezzo_pressoterapia || $salone->prezzo_massaggio_tailandese || $salone->prezzo_massaggio_viso)
<div class="treatments-category massaggio">
    <h3>Massaggio</h3>

    <!-- Massaggio Rilassante -->
    @if($salone->prezzo_massaggio_rilassante)
    <div class="treatment-item">
        <p class="treatment-name">Massaggio Rilassante:</p>
        <p class="treatment-price">{{ $salone->prezzo_massaggio_rilassante }}€</p>
    </div>
    @endif

    <!-- Massaggio Drenante -->
    @if($salone->prezzo_massaggio_drenante)
    <div class="treatment-item">
        <p class="treatment-name">Massaggio Drenante:</p>
        <p class="treatment-price">{{ $salone->prezzo_massaggio_drenante }}€</p>
    </div>
    @endif

    <!-- Massaggio Decontratturante -->
    @if($salone->prezzo_massaggio_decontratturante)
    <div class="treatment-item">
        <p class="treatment-name">Massaggio Decontratturante:</p>
        <p class="treatment-price">{{ $salone->prezzo_massaggio_decontratturante }}€</p>
    </div>
    @endif

    <!-- Pressoterapia -->
    @if($salone->prezzo_pressoterapia)
    <div class="treatment-item">
        <p class="treatment-name">Pressoterapia:</p>
        <p class="treatment-price">{{ $salone->prezzo_pressoterapia }}€</p>
    </div>
    @endif

    <!-- Massaggio Thai -->
    @if($salone->prezzo_massaggio_tailandese)
    <div class="treatment-item">
        <p class="treatment-name">Massaggio Tailandese:</p>
        <p class="treatment-price">{{ $salone->prezzo_massaggio_tailandese }}€</p>
    </div>
    @endif

    <!-- Massaggio Viso -->
    @if($salone->prezzo_massaggio_viso)
    <div class="treatment-item">
        <p class="treatment-name">Massaggio Viso:</p>
        <p class="treatment-price">{{ $salone->prezzo_massaggio_viso }}€</p>
    </div>
    @endif

</div>
@endif
@if($salone->prezzo_colore_uomo || $salone->prezzo_taglio_barba || $salone->prezzo_trattamenti_viso_uomo || $salone->prezzo_barbiere || $salone->prezzo_depilazione_uomo)
<div class="treatments-category uomo">
    <h3>Uomo</h3>

    <!-- Colore Uomo -->
    @if($salone->prezzo_colore_uomo)
    <div class="treatment-item">
        <p class="treatment-name">Colore Uomo:</p>
        <p class="treatment-price">{{ $salone->prezzo_colore_uomo }}€</p>
    </div>
    @endif

    <!-- Taglio Barba -->
    @if($salone->prezzo_taglio_barba)
    <div class="treatment-item">
        <p class="treatment-name">Taglio Barba:</p>
        <p class="treatment-price">{{ $salone->prezzo_taglio_barba }}€</p>
    </div>
    @endif

    <!-- Trattamenti Viso Uomo -->
    @if($salone->prezzo_trattamenti_viso_uomo)
    <div class="treatment-item">
        <p class="treatment-name">Trattamenti Viso Uomo:</p>
        <p class="treatment-price">{{ $salone->prezzo_trattamenti_viso_uomo }}€</p>
    </div>
    @endif

    <!-- Barbiere -->
    @if($salone->prezzo_barbiere)
    <div class="treatment-item">
        <p class="treatment-name">Barbiere:</p>
        <p class="treatment-price">{{ $salone->prezzo_barbiere }}€</p>
    </div>
    @endif

    <!-- Depilazione Uomo -->
    @if($salone->prezzo_depilazione_uomo)
    <div class="treatment-item">
        <p class="treatment-name">Depilazione Uomo:</p>
        <p class="treatment-price">{{ $salone->prezzo_depilazione_uomo }}€</p>
    </div>
    @endif

</div>
@endif
@php
            $hasAvailablePrice = $salone->prezzo_solarium || $salone->prezzo_trattamenti_anticellulite || $salone->prezzo_trattamenti_dimagranti || $salone->prezzo_bendaggi || $salone->prezzo_circuito_spa;
        @endphp
        @if($hasAvailablePrice)
            <div class="treatments-category corpo">
                <h3>Corpo</h3>
                @if($salone->prezzo_solarium)
                    <div class="treatment-item">
                        <p class="treatment-name">Solarium:</p>
                        <p class="treatment-price">{{ $salone->prezzo_solarium }}€</p>
                    </div>
                @endif
                @if($salone->prezzo_trattamenti_anticellulite)
                    <div class="treatment-item">
                        <p class="treatment-name">Trattamenti Anticellulite:</p>
                        <p class="treatment-price">{{ $salone->prezzo_trattamenti_anticellulite }}€</p>
                    </div>
                @endif
                @if($salone->prezzo_trattamenti_dimagranti)
                    <div class="treatment-item">
                        <p class="treatment-name">Trattamenti Dimagranti:</p>
                        <p class="treatment-price">{{ $salone->prezzo_trattamenti_dimagranti }}€</p>
                    </div>
                @endif
                @if($salone->prezzo_bendaggi)
                    <div class="treatment-item">
                        <p class="treatment-name">Bendaggi:</p>
                        <p class="treatment-price">{{ $salone->prezzo_bendaggi }}€</p>
                    </div>
                @endif
                @if($salone->prezzo_circuito_spa)
                    <div class="treatment-item">
                        <p class="treatment-name">Circuito SPA:</p>
                        <p class="treatment-price">{{ $salone->prezzo_circuito_spa }}€</p>
                    </div>
                @endif
            </div>
        @endif
        @if(session('scroll_to_reviews'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.location.hash = 'reviews-section';
        });
    </script>
@endif

<!-- Sezione recensioni -->
@if(isset($recensioni) && $recensioni->count() > 0)
<div id="recensioni-section" class="reviews-container">
        <h2 class="reviews-title">Recensioni</h2>

        <!-- Loop per mostrare tutte le recensioni -->
        @foreach($recensioni as $recensione)
            <div class="review-item">
                <div class="review-header">
                    <h3 class="review-name">{{ $recensione->nome }}</h3>
                    <div class="review-rating">
                        @for($i = 1; $i <= 5; $i++)
                            <span class="star {{ $i <= $recensione->voto ? 'filled' : '' }}">&#9733;</span>
                        @endfor
                    </div>
                </div>
                <p class="review-text">{{ $recensione->recensione }}</p>
                <span class="review-date">Recensito il: {{ \Carbon\Carbon::parse($recensione->data_recensione)->format('d F Y') }}</span>
            </div>
        @endforeach
    </div>
@else
    <p class="no-reviews">Non ci sono recensioni al momento.</p>
@endif

<!-- Sezione per aggiungere una nuova recensione -->
<div class="add-review">
    <h3 class="add-review-title">Aggiungi una Recensione</h3>

    @auth
        <form action="{{ route('recensioni.salva') }}" method="POST" class="review-form">
            @csrf
            <div class="form-group">
    @if(Auth::check())
        <input type="hidden" name="nome" value="{{ Auth::user()->name }}" class="form-control review-input">
        <p><strong>{{ Auth::user()->name }}</strong></p>
    @else
        <input type="text" name="nome" placeholder="Il tuo nome" required class="form-control review-input">
    @endif
</div>
<div class="form-group">
    <textarea name="recensione" placeholder="Scrivi la tua recensione..." required class="form-control review-textarea"></textarea>
</div>
<input type="hidden" name="salone_id" value="{{ $salone->id }}">

<!-- Campo per il voto -->
<div class="form-group rating-section">
    <label for="voto" class="rating-label">Voto:</label>
    <div class="star-rating">
        <input type="radio" id="star5" name="voto" value="5" required />
        <label for="star5" title="5 stelle">☆</label>

        <input type="radio" id="star4" name="voto" value="4" required />
        <label for="star4" title="4 stelle">☆</label>

        <input type="radio" id="star3" name="voto" value="3" required />
        <label for="star3" title="3 stelle">☆</label>

        <input type="radio" id="star2" name="voto" value="2" required />
        <label for="star2" title="2 stelle">☆</label>

        <input type="radio" id="star1" name="voto" value="1" required />
        <label for="star1" title="1 stella">☆</label>
    </div>
</div>

            <button type="submit" class="submit-btn">Invia Recensione</button>
        </form>
    @else
    <p class="not-logged-in-message">
    Per inviare una recensione devi essere
    <a href="{{ route('auth.login') }}" class="no-underline">loggato</a> o
    <a href="{{ route('auth.register') }}" class="no-underline">registrato</a>.
</p>
    @endauth
</div>

<div id="biografia-section" class="additional-info">
<div class="info-content" style="display: flex; align-items: flex-start;">
    <!-- Colonna mappa -->
    <div class="map-column" style="width: 70%; margin-right: 20px;">
        <h4 id="salon-title">Sul salone</h4> <!-- Assegna un ID al titolo per poterlo nascondere -->
        <!-- Link alla mappa di Google -->
        <a href="https://www.google.com/maps?q={{ urlencode($salone->posizione) }}" target="_blank">
            <!-- Div per la mappa -->
            <div id="salon-map" style="width: 100%; height: 300px; cursor: pointer;"></div>
        </a>
    </div>

    <!-- Colonna informazioni -->
    <div id="info-column" class="info-column" style="width: 30%; margin-top: 10%">
        <p style="font-size: 18px; font-weight: bold; color: #333;">
            <i class="fas fa-map-marker-alt" style="color: black; font-size: 20px; margin-right: 8px;"></i>
            {{ $salone->posizione }},
            <span style="font-weight: normal; font-size: 16px; color: #555;">Numero civico: {{ $salone->numero_civico }}</span>
        </p>
    </div>
</div>
</div>
<div class="info-column" style="display: flex; justify-content: space-between; width: 100%; margin-top: 20px;">
    <!-- Prima metà: Icona telefono -->
    <div style="flex: 1; text-align: left; margin-right: 10px;">
    <p style="margin-top: 5px; width: 600px; word-wrap: break-word;
          font-family: Arial, sans-serif; font-size: 16px; line-height: 1.5; color: #333;">
    {{ $salone->saloni }}
</p>
    <h6 style="margin-top: 20px;">Trasporto pubblico più vicino:</h6>
    <p style="margin-top: 5px; width: 600px; word-wrap: break-word;
          font-family: Arial, sans-serif; font-size: 16px; line-height: 1.5; color: #333;">
    {{ $salone->trasporto ? $salone->trasporto : 'Nessun dato disponibile' }}
</p>
    <h6 style="margin-top: 20px;">Il team:</h6>
    <p style="margin-top: 5px; width: 600px; word-wrap: break-word;
          font-family: Arial, sans-serif; font-size: 16px; line-height: 1.5; color: #333;">
     {{ $salone->team ? $salone->team : 'Nessun dato disponibile' }}
</p>
    <h6 style="margin-top: 20px;">I punti forti del salone:</h6>
    <p style="margin-top: 5px; width: 600px; word-wrap: break-word;
          font-family: Arial, sans-serif; font-size: 16px; line-height: 1.5; color: #333;">
    {{ $salone->punti_forti ? $salone->punti_forti : 'Nessun dato disponibile' }}
</p>

</div>

    <!-- Seconda metà: Testo numero di telefono -->
    <div style="flex: 1; text-align: center; padding: 20px;">

    <table style="width: 100%; max-width: 800px; margin: 0 auto; border-collapse: collapse; background-color: #f9f9f9; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <thead>
            <tr style="background-color: #B9D9EB; color: white; text-align: left;">
                <th style="border: 1px solid #ddd; padding: 12px 15px;">Giorno</th>
                <th style="border: 1px solid #ddd; padding: 12px 15px;">Orario di Apertura</th>
                <th style="border: 1px solid #ddd; padding: 12px 15px;">Orario di Chiusura</th>
            </tr>
        </thead>
        <tbody>
            <!-- Lunedì -->
            <tr>
                <td style="border: 1px solid #ddd; padding: 12px 15px;">Lunedì</td>
                <td style="border: 1px solid #ddd; padding: 12px 15px;">{{ $salone->giorno_lunedi ? date('H:i', strtotime($salone->orario_apertura)) : 'Chiuso' }}</td>
                <td style="border: 1px solid #ddd; padding: 12px 15px;">{{ $salone->giorno_lunedi ? date('H:i', strtotime($salone->orario_chiusura)) : 'Chiuso' }}</td>
            </tr>
            <!-- Martedì -->
            <tr>
                <td style="border: 1px solid #ddd; padding: 12px 15px;">Martedì</td>
                <td style="border: 1px solid #ddd; padding: 12px 15px;">{{ $salone->giorno_martedi ? date('H:i', strtotime($salone->orario_apertura)) : 'Chiuso' }}</td>
                <td style="border: 1px solid #ddd; padding: 12px 15px;">{{ $salone->giorno_martedi ? date('H:i', strtotime($salone->orario_chiusura)) : 'Chiuso' }}</td>
            </tr>
            <!-- Mercoledì -->
            <tr>
                <td style="border: 1px solid #ddd; padding: 12px 15px;">Mercoledì</td>
                <td style="border: 1px solid #ddd; padding: 12px 15px;">{{ $salone->giorno_mercoledi ? date('H:i', strtotime($salone->orario_apertura)) : 'Chiuso' }}</td>
                <td style="border: 1px solid #ddd; padding: 12px 15px;">{{ $salone->giorno_mercoledi ? date('H:i', strtotime($salone->orario_chiusura)) : 'Chiuso' }}</td>
            </tr>
            <!-- Giovedì -->
            <tr>
                <td style="border: 1px solid #ddd; padding: 12px 15px;">Giovedì</td>
                <td style="border: 1px solid #ddd; padding: 12px 15px;">{{ $salone->giorno_giovedi ? date('H:i', strtotime($salone->orario_apertura)) : 'Chiuso' }}</td>
                <td style="border: 1px solid #ddd; padding: 12px 15px;">{{ $salone->giorno_giovedi ? date('H:i', strtotime($salone->orario_chiusura)) : 'Chiuso' }}</td>
            </tr>
            <!-- Venerdì -->
            <tr>
                <td style="border: 1px solid #ddd; padding: 12px 15px;">Venerdì</td>
                <td style="border: 1px solid #ddd; padding: 12px 15px;">{{ $salone->giorno_venerdi ? date('H:i', strtotime($salone->orario_apertura)) : 'Chiuso' }}</td>
                <td style="border: 1px solid #ddd; padding: 12px 15px;">{{ $salone->giorno_venerdi ? date('H:i', strtotime($salone->orario_chiusura)) : 'Chiuso' }}</td>
            </tr>
            <!-- Sabato -->
            <tr>
                <td style="border: 1px solid #ddd; padding: 12px 15px;">Sabato</td>
                <td style="border: 1px solid #ddd; padding: 12px 15px;">{{ $salone->giorno_sabato ? date('H:i', strtotime($salone->orario_apertura)) : 'Chiuso' }}</td>
                <td style="border: 1px solid #ddd; padding: 12px 15px;">{{ $salone->giorno_sabato ? date('H:i', strtotime($salone->orario_chiusura)) : 'Chiuso' }}</td>
            </tr>
            <!-- Domenica -->
            <tr>
                <td style="border: 1px solid #ddd; padding: 12px 15px;">Domenica</td>
                <td style="border: 1px solid #ddd; padding: 12px 15px;">{{ $salone->giorno_domenica ? date('H:i', strtotime($salone->orario_apertura)) : 'Chiuso' }}</td>
                <td style="border: 1px solid #ddd; padding: 12px 15px;">{{ $salone->giorno_domenica ? date('H:i', strtotime($salone->orario_chiusura)) : 'Chiuso' }}</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
    </div>
</div>
<footer style="text-align: center; padding: 20px; background-color: #B9D9EB; color: white; margin-top: 30px; font-size: 14px;">
    <p>&copy; {{ date('Y') }} Il tuo Salone. Tutti i diritti riservati.</p>
    <p><a href="mailto:whiskers@gmail.com" style="color: white; text-decoration: none;">Contattaci</a></p>
    <p>Politica sulla privacy</p>
</footer>



<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<!-- Script per la mappa -->
<script>
    // Prende la posizione del salone dalla variabile PHP
    var salonePosizione = '{{ $salone->posizione }}'; // Posizione del salone (indirizzo)

    // Usa l'API di Nominatim per trasformare l'indirizzo in coordinate
    var urlGeocoding = "https://nominatim.openstreetmap.org/search?format=json&q=" + encodeURIComponent(salonePosizione);

    fetch(urlGeocoding)
        .then(response => response.json())
        .then(data => {
            if (data.length > 0) {
                var lat = data[0].lat;
                var lon = data[0].lon;

                // Inizializza la mappa con le coordinate ricevute
                var map = L.map('salon-map').setView([lat, lon], 13);

                // Aggiungi il tile layer di OpenStreetMap
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                // Aggiungi un marker alla posizione del salone
                var marker = L.marker([lat, lon]).addTo(map);
                marker.bindPopup("<b>Il nostro salone!</b><br>Visita la nostra sede.").openPopup();
            } else {
                // Nasconde il titolo, la mappa e le informazioni sulla posizione
                document.getElementById('salon-title').style.display = 'none';
                document.getElementById('salon-map').style.display = 'none';
                document.getElementById('info-column').style.display = 'none';
                alert('Impossibile trovare la posizione del salone.');
            }
        })
        .catch(error => {
            // Nasconde il titolo, la mappa e le informazioni sulla posizione in caso di errore
            document.getElementById('salon-title').style.display = 'none';
            document.getElementById('salon-map').style.display = 'none';
            document.getElementById('info-column').style.display = 'none';
            console.error('Errore nella geocodifica:', error);
            alert('Impossibile trovare la posizione del salone.');
        });
</script>
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
    document.addEventListener('DOMContentLoaded', function() {
        let leftHalf = document.getElementById('left-half');
        let rightHalf = document.getElementById('right-half');

        // Passa le immagini dal PHP a JavaScript
        let immagini = @json($immagini); // Converti l'array PHP in JSON per JavaScript

        let currentIndex = 0;

        function updateImages() {
            if (immagini.length > 0) {
                leftHalf.innerHTML = `<img src="{{ asset('storage/') }}/${immagini[currentIndex]}" alt="Immagine del salone - sinistra">`;
                rightHalf.innerHTML = `<img src="{{ asset('storage/') }}/${immagini[(currentIndex + 1) % immagini.length]}" alt="Immagine del salone - destra">`;
            } else {
                leftHalf.innerHTML = '<p>Nessuna immagine disponibile per questa metà.</p>';
                rightHalf.innerHTML = '<p>Nessuna immagine disponibile per questa metà.</p>';
            }
        }

        document.getElementById('prev-btn').addEventListener('click', function() {
            currentIndex = (currentIndex - 1 + immagini.length) % immagini.length;
            updateImages();
        });

        document.getElementById('next-btn').addEventListener('click', function() {
            currentIndex = (currentIndex + 1) % immagini.length;
            updateImages();
        });

        // Inizializza le immagini
        updateImages();
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const serviceBoxes = document.querySelectorAll('.service-box');
        const treatmentsCategories = document.querySelectorAll('.treatments-category');

        // Funzione per mostrare i trattamenti in base alla categoria selezionata
        function updateTreatments(category) {
            if (category === 'all') {
                treatmentsCategories.forEach(cat => cat.classList.add('active'));
            } else {
                treatmentsCategories.forEach(cat => {
                    if (cat.classList.contains(category)) {
                        cat.classList.add('active');
                    } else {
                        cat.classList.remove('active');
                    }
                });
            }
        }

        // Aggiungi evento click su ogni quadrato del servizio
        serviceBoxes.forEach(box => {
            box.addEventListener('click', function() {
                const category = this.getAttribute('data-category');
                updateTreatments(category);
            });
        });

        // Mostra tutti i trattamenti di default
        updateTreatments('all');
    });
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('button[data-target]').forEach(function(button) {
            button.addEventListener('click', function() {
                var targetId = button.getAttribute('data-target');
                var targetElement = document.getElementById(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
                } else {
                    console.error('Sezione con ID ' + targetId + ' non trovata.');
                }
            });
        });
    });
</script>
<script>
    document.querySelector('.back-button').addEventListener('click', function() {
        history.back();
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
