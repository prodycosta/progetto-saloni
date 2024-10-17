<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceretta gambe</title>
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
    min-width: 1500px; /* Imposta una larghezza minima */

}
        /* Styles for the map container */
        .map-container {
            width: 600px; /* map container width */
            height: 400px; /* map container height */
            border: 2px solid black; /* 2px black border */
            margin: 50px auto; /* 50px top and bottom margin, horizontally centered */
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

/* Stile per label */
label {
    font-size: 14px; /* Dimensione del testo desiderata */
    margin: auto; /* Allinea al centro */
    display: block; /* Garantisce che ogni label sia su una riga separata */
    text-align: center; /* Allinea il testo al centro */
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

.btn-mappa {
  background-color: #B9D9EB; /* Blue background */
  border: 2px solid black; /* Add a 1px black border */
  border-radius: 5px; /* Rounded corners */
  color: black; /* White text */
  padding: 12px 16px; /* Some padding */
  font-size: 16px; /* Set a font size */
  cursor: pointer; /* Mouse pointer on hover */
  transition: all 0.2s;
}

/* Darker background on mouse-over */
.btn-mappa:hover {
  background-color: #B9D9EB;
  transform: scale(1.02);
}
    </style>

<style>
/* Stile base del bottone */
.btn {
    font-size: larger;
}

/* Stile quando il bottone è cliccato */
.btn.hidden {
    display: none;
}

/* Stile della mappa */
.map-container {
    width: 600px; /* Imposta la larghezza desiderata */
    height: 400px; /* Imposta l'altezza desiderata */
    background-color: white; /* Colore di sfondo della mappa */
    margin-top: 20px; /* Aggiungi spazio sopra la mappa */
    /* La mappa è visibile di default */
}
</style>
<style>
        /* Stile della classe .filtri */
        .filtri {
            width: 100%; /* Lunghezza al 100% */
            height: 90px; /* Altezza di 90px */
             /* Sfondo nero */
            display: flex; /* Utilizzo di Flexbox per allineare gli elementi */
            justify-content: center; /* Centrare gli elementi lungo l'asse principale (orizzontale) */
            align-items: center; /* Centrare gli elementi lungo l'asse trasversale (verticale) */
            border: none;
        }

        /* Stile del nuovo div */
        .nuovo-div {
            flex: 1;
            width: 80%; /* Larghezza al 80% del genitore */
            height: 90px; /* Altezza di 90px */

            color: black; /* Testo nero */
            text-align: center; /* Testo centrato */
            display: flex; /* Utilizzo di Flexbox per allineare gli elementi */
            justify-content: space-between;

        }


        /* Stile delle due parti */
        .parte {
            flex: 1; /* Ogni parte occupa lo stesso spazio */
            border: none; /* Aggiungo un bordo per la separazione */
            display: flex; /* Utilizzo di Flexbox per allineare il testo al centro */
            justify-content: center; /* Centrare il testo lungo l'asse principale (orizzontale) */
            align-items: center; /* Centrare il testo lungo l'asse trasversale (verticale) */
        }
    </style>
    <style>
        .btn-outline-secondary.ordina {
            background-color: white;
            color: black;
            border: 2px solid black;
            cursor: pointer; /* Mouse pointer on hover */
            transition: all 0.2s;
        }

        .btn-outline-secondary.ordina:hover {
            background-color: white;
            transform: scale(1.02);


            }

            #map {
        border: none;
    }

        </style>
        <style>
        .contenuto {
            text-align: center;
            border: 1px solid #E0E0E0;
            margin: 15px;
            cursor: pointer;
            transition: all 0.3s;
            background-color: white;
            margin-left: 15%;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .contenuto:hover {
        box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.1); /* Effetto hover con ombra più grande */
}

        .contenuto ul {
            list-style-type: none;
            padding: 0;
        }

        .immagini img {
    width: 330px;
    height: 150px;
    margin: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;

}
    </style>
    <style>
    /* Aggiungi stili personalizzati per il rating */
    .rating {
      display: inline-block; /* Aggiunto per la disposizione orizzontale */
    }
    .rating input {
      display: none;
    }
    .rating label {
      font-size: 24px;
      color: #ccc;
      cursor: pointer;
      margin-right: 5px; /* Spazio tra le stelle */
    }
    .rating label:hover,
    .rating label:hover ~ label,
    .rating input:checked ~ label {
      color: #ffcc00;
    }

    .contenuto {
    display: flex;
    align-items: flex-start; /* Allinea i contenuti in alto */
    margin-bottom: 20px; /* Spazio inferiore tra i contenuti */
}

.immagini {
    flex: 1; /* Utilizza lo spazio disponibile */
    margin-right: 20px; /* Spazio tra le immagini e i dettagli */
}

.dettagli-salone {
    flex: 2; /* Utilizza il doppio dello spazio rispetto alle immagini */
}

.navigazione-immagini {
    flex: 1; /* Utilizza lo stesso spazio delle immagini */
    display: flex;
    flex-direction: column; /* Allinea i bottoni verticalmente */
}

.bottone-precedente button,
.bottone-successivo button {
    background: none;
    border: none;
    cursor: pointer;
    padding: 0;
}

.bottone-precedente button i,
.bottone-successivo button i {
    font-size: 24px; /* Imposta la dimensione dell'icona a tuo piacimento */
}

.contenuto {
    display: grid;
    grid-template-columns: 1fr 1fr; /* Divide il contenuto in due colonne di larghezza uguale */
    gap: 20px; /* Aggiunge uno spazio tra le colonne */
}

.sinistra {
    display: flex;
    flex-direction: column;
    align-items: center;
}
.navigazione-immagini {
    display: flex;
    align-items: center;
}

.bottone-precedente button,
.bottone-successivo button {
    margin: 0 70px; /* Aggiunge spazio tra i bottoni */
    margin-bottom: 10px;
    cursor: pointer; /* Cambia il cursore al passaggio sopra il bottone */
    transition: transform 0.2s;
    color: #B9D9EB;
}

.bottone-precedente button:hover,
.bottone-successivo button:hover {
    transform: scale(1.1);
    color: #81b3cf;
}

.dettagli-salone p {
    margin-top: 15px;
}

.dettagli-salone p {
    margin-top: 15px;
    font-size: 20px;
    font-weight: bold;
    color: #333; /* Colore del testo */

}

.dettagli-salone ul {
    list-style-type: none; /* Rimuove i punti di elenco */
    padding: 0; /* Rimuove il padding predefinito dell'elenco */
}

.dettagli-salone ul li {
    font-size: 18px;
    margin-bottom: 8px; /* Aggiunge spazio tra gli elementi della lista */
    color: #666; /* Colore del testo */
}

.opzioni-filtri {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    height: 300px;
    background-color: rgba(255, 255, 255, 1); /* Bianco con trasparenza */
    z-index: 9999; /* Assicura che il div sia sopra tutti gli altri elementi */
    border-radius: 5px;
    border: 1px solid #B9D9EB;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}


.inner-div {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    width: 90%;
    height: 90%;
    margin: 2px;
}

.opzioni-filtri h5 {
    margin-top: 0; /* Rimuove il margine superiore predefinito */
    margin-bottom: 20px; /* Aggiunge spazio sotto l'elemento */
    text-align: left;
    font-size: 18px;
    font-family: "Poppins", sans-serif;
    font-style: normal;
    opacity: 0.7;
}

.radio-container {
    width: 350px;
    align-items: center;
    justify-content: flex-end; /* Centra verticalmente */
    margin-bottom: 5px; /* Aggiunge spazio tra i radio button */
}

.radio-container input[type="radio"] {
     /* Aggiunge spazio tra l'input e il label */
    align-self: center;
    margin-left: auto;
    width: 17px; /* Imposta la larghezza desiderata */
    height: 17px;
    }

.radio-container label {
    margin-bottom: 5px;
    font-size: 16px;
    margin-left: 0;

}

hr {
    border: none; /* Rimuove il bordo predefinito */
    border-top: 2px solid black; /* Aggiunge un bordo superiore dello spessore desiderato e del colore specificato */
    width: 100%; /* Imposta la larghezza al 100% per occupare l'intera larghezza del contenitore */
}

.form-label {
    float: right;
    font-size: 16px;
}

#reset, #applica {
    background-color:  #8ABAD3; /* Colore di sfondo */
    color: #FFFFFF; /* Colore del testo */
    border: none; /* Rimuove il bordo */
    padding: 10px 20px; /* Aggiunge spazio interno */
    cursor: pointer; /* Cambia il cursore al passaggio del mouse */
    border-radius: 5px; /* Bordo arrotondato */
    font-size: 16px; /* Dimensione del testo */
    margin-top: 30px;
}

#reset:hover, #applica:hover {
    background-color: #B9D9EB; /* Cambia il colore di sfondo al passaggio del mouse */
}
#reset {
    margin-right: 30px; /* Aggiunge spazio a destra */
}

#applica {
    margin-left: 30px; /* Aggiunge spazio a sinistra */
}

.custom-hr {
     /* Rimuove il bordo predefinito */
    border-top: 2px solid black; /* Aggiunge un bordo superiore dello spessore desiderato e del colore specificato */
    width: 100%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 1); /* Aggiunge un'ombra */
}

.saloni-message {
    font-size: 20px;
    font-family: "Sedan SC", serif;
    opacity: 0.9;
}
</style>

<style>
.visualizza-btn {
    display: inline-block;
    background-color:#7eb9da;
    color: white;
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    transition: background-color 0.3s ease, transform 0.1s ease-out;
    font-size: 14px;
    border: 2px solid transparent;
    text-align: center;
    cursor: pointer;
}

.visualizza-btn:hover {
    background-color:#a5cee5;
    text-decoration: none;


}

.visualizza-btn:active {
    transform: scale(0.95);
}

.visualizza-btn span {
    margin-right: 4px;
}

.visualizza-btn i {
    font-size: 12px;
    margin-left: 4px;
    transition: margin-left 0.3s ease;
}

.visualizza-btn:hover i {
    margin-left: 6px;
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

<div class="dati" style="width: 100%; height: 200px; background-color: #B9D9EB;">
<div style="display: flex; width: 100%; height: 100%;">
        <div style="flex: 1; display: flex; justify-content: center;">
        <form id="myForm">
    <div class="mb-3 text-center">
        <div style="display: inline-block;">
            <!-- Tendina delle opzioni -->
            <div class="dropdown">
            <div class="input-group">
    <div style="display: none;">
        <select class="form-select mb-2" id="posizioneSelect" name="trattamento" onclick="toggleDropdown('dropdownMenu')" onchange="aggiornaRisultati()"  style="height: 38px;width:300px; font-size: 14px; color: #495057; border: 1px solid #ced4da; border-radius: 10px 0px 0px 10px;" required>
        @foreach($servizi as $key => $value)
        <option value="{{ substr($key, 9) }}" {{ $trattamento == substr($key, 9) ? 'selected' : '' }}>{{ $value }}</option>
    @endforeach
        </select>
        <div class="input-group-append">
            <span class="input-group-text" style="background-color: white; border-left: none; height: 38px; border-radius: 0px 10px 10px 0px;"><i class="fa-solid fa-search"></i></span>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <input type="date" class="form-control" id="dataInput" name="data" value="{{ $data }}" onchange="aggiornaRisultati()" style="height: 38px; padding: 0.375rem 0.75rem; border-radius: 10px; border: 1px solid #ced4da; width: 100%;" required>
    </div>
    <div class="mb-3">
        <div class="input-group justify-content-center mx-auto" style="width: 100%;height: 38px;">
            <input type="text" class="form-control" id="posizioneInput" name="posizione" value="{{ $posizione }}" onchange="aggiornaRisultati()" style="height: 38px; border-right: none; border-radius: 10px 0px 0px 10px;" placeholder="Posizione" required>
            <div class="input-group-append">
                <span class="input-group-text" style="background-color: white; border-left: none; height: 38px; border-radius: 0px 10px 10px 0px;"><i class="fa-solid fa-map-marker-alt"></i></span>
            </div>
        </div>
        <div id="suggerimenti"></div>
    </div>
</form>
</div>
<div style="flex: 1; background-color: #B9D9EB; display: flex; justify-content: center; align-items: center;">
  <p style="font-size:25px; font-family: 'Reddit Mono', monospace;" id="selectedOption">{{ $title }}</p>
</div>
<div style="flex: 1; background-color: #B9D9EB; display: flex; justify-content: center; align-items: center;">
    <button class="btn-mappa" id="hideButton"><i class="fa fa-close" style="margin-right: 10px;"></i> Nascondi mappa</button>
    <button class="btn-mappa hidden" id="showButton"><i class="fa fa-map-marker" style="margin-right: 10px;"></i> Mostra mappa</button>
</div>
    </div>
</div>
<div class="filtri">
    <!-- Primo div -->
    <div class="nuovo-div">
    <div class="parte">
    <p class="saloni-message">Scegli fra i vari saloni che offrono {{ $title }}</p>
        </div>
        <!-- Seconda parte -->
        <div class="parte">
        <button type="button" class="btn btn-outline-secondary ordina" style="margin-right:-400px">
            <i class="fas fa-filter"></i> Filtra e ordina
        </button>
        <div id="opzioniFiltri" class="opzioni-filtri">
            <div class="inner-div">
                <h5>Ordina per</h5>
                <form id="filtri-form">
    <div class="radio-container" style="display: flex; align-items: flex-start;">
        <label for="recente">Recente</label>
        <input type="radio" id="recente" name="ordina" value="recente" onchange="this.form.submit()">
    </div>
    <div class="radio-container" style="display: flex; align-items: flex-start;">
        <label for="prezzo-basso">Prezzo più basso</label>
        <input type="radio" id="prezzo-basso" name="ordina" value="prezzo-basso" onchange="this.form.submit()">
    </div>
    <div class="radio-container" style="display: flex; align-items: flex-start;">
        <label for="prezzo-alto">Prezzo più alto</label>
        <input type="radio" id="prezzo-alto" name="ordina" value="prezzo-alto" onchange="this.form.submit()">
    </div>
    <button type="button" id="reset">Reset</button>
</form>
            </div>
        </div>
        </div>
    </div>
</div>
<div style="display: flex; width: 100%; height: auto;">
    <div class="saloni-container" style="flex: 1; background-color: white;">

    @if($saloni->isEmpty())
        <p style="text-align: center; font-size: 18px; padding: 20px;">
            Nessun salone disponibile. Prova a cambiare i filtri di ricerca.
        </p>
    @else

    @foreach($saloni as $index => $salone)

    <div class="contenuto" id="contenuto-{{ $index }}">
    <div class="sinistra">
        <div class="immagini">
            @if($salone->immagini)
                @foreach(json_decode($salone->immagini) as $indice => $immagine)
                    <img src="{{ asset('storage/' . $immagine) }}" alt="Immagine del salone" style="display: {{ $indice === 0 ? 'block' : 'none' }}">
                @endforeach
            @endif
        </div>
        <div class="navigazione-immagini">
            <div class="bottone-precedente">
            <button onclick="precedente('{{ $index }}')">
                    <i class="fas fa-arrow-left" style="font-size: 24px;"></i> <!-- Icona freccia sinistra -->
                </button>
                <button onclick="successivo('{{ $index }}')">
                    <i class="fas fa-arrow-right" style="font-size: 24px;"></i> <!-- Icona freccia destra -->
                </button>
            </div>
        </div>
    </div>
   <div class="destra">
    <div class="dettagli-salone">
        <p>{{ $salone->nome_salone }}</p>
        <ul>
            <li>{{ $salone->posizione }}</li>
            <li>{{ $salone->numero_telefono }}</li>
        </ul>
        <a href="{{ route('salone.show', $salone->id) }}" class="visualizza-btn">
            Visualizza dettagli
        </a>
    </div>
</div>
</div>
@endforeach
@endif
    </div>
    <div style="flex: 1; background-color: white;">
        <div id="map" class="map-container" style="position: sticky; top: 0;"></div>
        <div id="map-error" style="display: none; text-align: center; color: white; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 20px;">
        Mappa non disponibile al momento. Riprova più tardi.
    </div>
    </div>
</div>

<footer style="text-align: center; padding: 20px; background-color: #B9D9EB; color: white; margin-top: 30px; font-size: 14px;">
    <p>&copy; {{ date('Y') }} Il tuo Salone. Tutti i diritti riservati.</p>
    <p><a href="mailto:whiskers@gmail.com" style="color: white; text-decoration: none;">Contattaci</a></p>
    <p>Politica sulla privacy</p>
</footer>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
    // Inizializza la mappa
    var map = L.map('map').setView([41.9028, 12.4964], 6); // Centra la mappa inizialmente su Roma

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Funzione per ottenere le coordinate tramite l'API di Nominatim
    function getCoordinates(indirizzo, callback) {
        var urlGeocoding = "https://nominatim.openstreetmap.org/search?format=json&q=" + encodeURIComponent(indirizzo);

        fetch(urlGeocoding)
            .then(response => response.json())
            .then(data => {
                if (data.length > 0) {
                    var lat = data[0].lat;
                    var lon = data[0].lon;
                    callback(lat, lon); // Esegui la funzione di callback con lat e lon
                } else {
                    console.error('Impossibile trovare la posizione per:', indirizzo);
                }
            })
            .catch(error => console.error('Errore nella geocodifica:', error));
    }

    // Itera su tutti i saloni per ottenere le loro coordinate e aggiungere marker
    @foreach($saloni as $salone)
        var salonePosizione = '{{ $salone->posizione }}'; // Indirizzo del salone
        var nomeSalone = '{{ $salone->nome_salone }}';   // Nome del salone
        var saloneId = '{{ $salone->id }}';               // ID del salone

        // Estrai le immagini e seleziona una casualmente
        var immagini = @json(json_decode($salone->immagini)); // Ottieni le immagini come array
        var immagineCasuale = immagini[Math.floor(Math.random() * immagini.length)]; // Seleziona un'immagine casualmente
        var immagineUrl = '{{ asset("storage/") }}' + '/' + immagineCasuale; // Crea l'URL completo dell'immagine

        // Chiamata alla funzione di geocodifica per ottenere le coordinate
        getCoordinates(salonePosizione, function(lat, lon) {
            // Aggiungi un marker per ogni salone con le coordinate trovate
            var marker = L.marker([lat, lon]).addTo(map);
            marker.bindPopup("<b>" + nomeSalone + "</b><br>" + salonePosizione + "<br><img src='" + immagineUrl + "' alt='Immagine del salone' style='width: 200px; height: auto;'><br><a href='/salone/" + saloneId + "' style='text-decoration: none;'>Visualizza dettagli</a>").openPopup();
        });
    @endforeach
</script>
<script src="js/home.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/1f4c0029b5.js" crossorigin="anonymous"></script>


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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $(".dropdown-menu .dropdown-item").click(function() {
      var selectedOption = $(this).text();
      $(this).closest(".dropdown").find(".dropdown-toggle").html(selectedOption);
    });
  });
</script>

<script>
// Nascondi il bottone Mostra mappa all'avvio
document.getElementById("showButton").classList.add("hidden");

// Aggiungi un gestore di eventi per il click sul bottone Nascondi mappa
document.getElementById("hideButton").addEventListener("click", function() {
    // Nascondi il bottone Nascondi mappa
    this.classList.add("hidden");
    // Mostra il bottone Mostra mappa
    document.getElementById("showButton").classList.remove("hidden");
    // Nascondi la mappa
    document.getElementById("map").style.display = "none";
});

// Aggiungi un gestore di eventi per il click sul bottone Mostra mappa
document.getElementById("showButton").addEventListener("click", function() {
    // Nascondi il bottone Mostra mappa
    this.classList.add("hidden");
    // Mostra il bottone Nascondi mappa
    document.getElementById("hideButton").classList.remove("hidden");
    // Mostra la mappa
    document.getElementById("map").style.display = "block";
});
</script>
<script>
        function mostraImmagine(indiceContenuto, indiceImmagine) {
    let contenuto = document.querySelectorAll('.contenuto')[indiceContenuto];
    let immaginiSalone = contenuto.querySelectorAll('.immagini img');

    immaginiSalone.forEach((immagine, index) => {
        immagine.style.display = (index === indiceImmagine) ? 'block' : 'none';
    });
}

function precedente(indiceContenuto) {
    let contenuto = document.querySelectorAll('.contenuto')[indiceContenuto];
    let immaginiSalone = contenuto.querySelectorAll('.immagini img');

    let indiceImmagineCorrente = 0;
    immaginiSalone.forEach((immagine, index) => {
        if (immagine.style.display === 'block') {
            indiceImmagineCorrente = index;
        }
    });

    indiceImmagineCorrente = (indiceImmagineCorrente === 0) ? immaginiSalone.length - 1 : indiceImmagineCorrente - 1;
    mostraImmagine(indiceContenuto, indiceImmagineCorrente);
}

function successivo(indiceContenuto) {
    let contenuto = document.querySelectorAll('.contenuto')[indiceContenuto];
    let immaginiSalone = contenuto.querySelectorAll('.immagini img');

    let indiceImmagineCorrente = 0;
    immaginiSalone.forEach((immagine, index) => {
        if (immagine.style.display === 'block') {
            indiceImmagineCorrente = index;
        }
    });

    indiceImmagineCorrente = (indiceImmagineCorrente === immaginiSalone.length - 1) ? 0 : indiceImmagineCorrente + 1;
    mostraImmagine(indiceContenuto, indiceImmagineCorrente);
}
    </script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const stars = document.querySelectorAll(".rating input");

    stars.forEach(function(star) {
      star.addEventListener("change", function() {
        console.log("Valutazione:", this.value);
      });
    });
  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
<script>
    $(document).ready(function() {
        $('.ordina').click(function() {
            $('#opzioniFiltri').toggle(); // Mostra o nasconde il div delle opzioni di filtro
        });

        $(document).click(function(event) {
            // Verifica se il clic è avvenuto all'interno o sul bottone "Filtra e ordina"
            if (!$(event.target).closest('#opzioniFiltri').length && !$(event.target).hasClass('ordina')) {
                $('#opzioniFiltri').hide(); // Nascondi l'elemento opzioni-filtri
            }
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.js"></script>
<script>
    // Inizializza lo slider con noUiSlider
    const slider = document.getElementById('slider');
    noUiSlider.create(slider, {
        start: [0, 1000],
        connect: true,
        range: {
            'min': 0,
            'max': 1000
        }
    });

    // Aggiorna il testo con l'intervallo di prezzi selezionato
    const prezzoValue = document.getElementById('prezzo-value');
    slider.noUiSlider.on('update', function(values, handle) {
        prezzoValue.textContent = `Prezzo: €${values[0]} - €${values[1]}`;
    });

    // Seleziona i bottoni Applica e Reset
    const applicaButton = document.getElementById('applica');
    const resetButton = document.getElementById('reset');

    // Gestisce l'evento click del bottone Applica
    applicaButton.addEventListener('click', function() {
        // Esegui le azioni necessarie per applicare i filtri selezionati
        console.log('Filtri applicati');
    });

    // Gestisce l'evento click del bottone Reset
    resetButton.addEventListener('click', function() {
        // Reimposta lo slider ai valori predefiniti
        slider.noUiSlider.set([0, 1000]);
        // Reimposta i radio button ai loro stati predefiniti
        document.querySelectorAll('input[type="radio"]').forEach(radio => {
            radio.checked = false; // Deseleziona ogni radio button
        });
        // Esegui le azioni necessarie per reimpostare gli altri filtri
        console.log('Filtri reimpostati');
    });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Funzione per aggiornare dinamicamente i saloni
        function aggiornaSaloni() {
            var trattamento = $('#posizioneSelect').val();
            var posizione = $('#posizioneInput').val();

            // Effettua una richiesta AJAX al controller MapController
            $.ajax({
                url: "{{ route('pages.depilazione.ceretta_gambe') }}",
                type: "GET",
                data: {
                    trattamento: trattamento,
                    posizione: posizione
                },
                success: function(response) {
                    // Aggiorna dinamicamente la parte della pagina che mostra i saloni
                    $('#saloniContainer').html(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }

        // Attiva la funzione di aggiornamento dei saloni quando cambiano i valori nei campi di input
        $('#posizioneSelect, #posizioneInput').change(function() {
            aggiornaSaloni();
        });
    });
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const trattamentoSelect = document.getElementById('posizioneSelect');
    const dataInput = document.getElementById('dataInput');
    const posizioneInput = document.getElementById('posizioneInput');

    const aggiornaRisultati = () => {
        const trattamento = trattamentoSelect.value;
        const data = dataInput.value;
        const posizione = posizioneInput.value;

        fetch(`{{ route('pages.depilazione.ceretta_gambe') }}?trattamento=${trattamento}&data=${data}&posizione=${posizione}`, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            const saloniContainer = document.querySelector('.saloni-container');
            saloniContainer.innerHTML = ''; // Pulisci i risultati attuali

            data.saloni.forEach(salone => {
                const saloneDiv = document.createElement('div');
                saloneDiv.className = 'contenuto';
                saloneDiv.innerHTML = `
                    <div class="sinistra">
                        <div class="immagini">
                            ${salone.immagini.map((immagine, indice) => `<img src="{{ asset('storage/${immagine}') }}" alt="Immagine del salone" style="display: ${indice === 0 ? 'block' : 'none'}">`).join('')}
                        </div>
                        <div class="navigazione-immagini">
                            <div class="bottone-precedente">
                                <button onclick="precedente('${salone.id}')">
                                    <i class="fas fa-arrow-left" style="font-size: 24px;"></i>
                                </button>
                                <button onclick="successivo('${salone.id}')">
                                    <i class="fas fa-arrow-right" style="font-size: 24px;"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="destra">
                        <div class="dettagli-salone">
                            <p>${salone.nome_salone}</p>
                            <ul>
                                <li>${salone.posizione}</li>
                                <li>${salone.numero_telefono}</li>
                            </ul>
                        </div>
                    </div>
                `;
                saloniContainer.appendChild(saloneDiv);
            });
        })
        .catch(error => console.error('Error:', error));
    };

    trattamentoSelect.addEventListener('change', aggiornaRisultati);
    dataInput.addEventListener('change', aggiornaRisultati);
    posizioneInput.addEventListener('input', aggiornaRisultati);
});
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const trattamentoSelect = document.getElementById('posizioneSelect');
        const dataInput = document.getElementById('dataInput');
        const posizioneInput = document.getElementById('posizioneInput');
        let timeoutId;

        const aggiornaRisultatiDopoRitardo = () => {
            clearTimeout(timeoutId); // Cancella il timer esistente
            timeoutId = setTimeout(aggiornaRisultati, 2000); // Imposta un nuovo timer di 2 secondi
        };

        const aggiornaRisultati = () => {
            const trattamento = trattamentoSelect.value;
            const data = dataInput.value;
            const posizione = posizioneInput.value;

            // Ricarica la pagina con i nuovi valori dei campi di input
            window.location.href = `{{ route('pages.depilazione.ceretta_gambe') }}?trattamento=${trattamento}&data=${data}&posizione=${posizione}`;
        };

        trattamentoSelect.addEventListener('change', aggiornaRisultatiDopoRitardo);
        dataInput.addEventListener('input', aggiornaRisultatiDopoRitardo);
        posizioneInput.addEventListener('input', aggiornaRisultatiDopoRitardo);
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function aggiornaSaloni() {
        // Ottieni i valori dai selettori
        var trattamento = $('#trattamentoSelect').val(); // Assicurati che l'ID sia corretto
        var posizione = $('#posizioneInput').val();
        var data = $('#dataInput').val(); // Aggiungi la data
        var ordina = $('input[name="ordina"]:checked').val(); // Ottieni l'opzione di ordinamento selezionata

        // Effettua la chiamata AJAX
        $.ajax({
            url: "{{ route('pages.depilazione.ceretta_gambe') }}",
            type: "GET",
            data: {
                trattamento: trattamento,
                posizione: posizione,
                data: data, // Includi il parametro di data
                ordina: ordina // Includi il parametro di ordinamento
            },
            success: function(response) {
                $('#saloniContainer').html(response); // Aggiorna il contenitore con la risposta
            },
            error: function(xhr, status, error) {
                console.error(error); // Logga eventuali errori
            }
        });
    }

    $(document).ready(function() {
        // Chiamata a aggiornaSaloni() quando cambia il valore di uno dei filtri
        $('#trattamentoSelect, #posizioneInput, #dataInput, input[name="ordina"]').change(function() {
            aggiornaSaloni(); // Richiama la funzione per aggiornare i saloni
        });
    });
</script>

<script>
$(document).ready(function() {
    // Gestione del bottone "Applica"
    $('#applica').on('click', function() {
        var ordina = $('input[name="ordina"]:checked').val(); // Ottieni il valore selezionato

        // Controlla se è stato selezionato un valore
        if (ordina) {
            // Invia i dati al server
            $.ajax({
                url: "{{ route('pages.depilazione.ceretta_gambe') }}",
                type: "GET",
                data: {
                    ordina: ordina // Includi il parametro di ordinamento
                },
                success: function(response) {
                    $('#saloniContainer').html(response);
                    $('#filtri-applicati').show(); // Mostra il messaggio
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        } else {
            alert("Seleziona un'opzione di ordinamento."); // Messaggio se non è selezionato nulla
        }
    });

    // Gestione del bottone "Reset"
    $('#reset').on('click', function() {
        $('input[name="ordina"]').prop('checked', false); // Deseleziona tutti i radio
        $('#saloniContainer').empty(); // Pulisce il contenitore dei saloni
        $('#filtri-applicati').hide(); // Nascondi il messaggio
    });
});
</script>
<script>
$(document).ready(function() {
    // Gestione del bottone "Reset"
    $('#reset').on('click', function() {
        $('input[name="ordina"]').prop('checked', false); // Deseleziona tutti i radio
        $('#saloniContainer').empty(); // Pulisce il contenitore dei saloni
        $('#filtri-applicati').hide(); // Nascondi il messaggio

        // Reindirizza alla rotta specificata
        window.location.href = "{{ route('pages.depilazione.ceretta_gambe') }}"; // Reindirizza a /piega
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
