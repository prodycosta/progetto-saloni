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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
    min-width: 1500px;


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

        .countenuti {
    background-color: #B9D9EB;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: 0;
    padding: 20px 0 40px 0; /* padding bottom maggiore */
    min-height: 100vh;
    min-width: 100%;
    gap: 20px;
    border-bottom-left-radius: 50px;
    border-bottom-right-radius: 50px;
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
    background-color: #B9D9EB;
    color: black; /* Cambia anche il colore del testo se lo desideri */
}

.card {
    background-color: #f8f9fa;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Ombra più marcata */
    width: 100%;
    max-width: 300px;
    margin: 0 auto;
    text-align: center;
    transition: transform 0.2s; /* Aggiungi una transizione per un effetto al passaggio del mouse */
}

.card:hover {
    transform: scale(1.10); /* Ingrandisce la card al passaggio del mouse */

}

.immagini img {
    width: 100%; /* Fai sì che l'immagine riempia completamente la card */
    height: 200px; /* Altezza fissa per tutte le immagini */
    object-fit: cover; /* Mantiene le proporzioni dell'immagine */
    border-radius: 10px 10px 0 0; /* Angoli arrotondati per l'immagine */
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
                <a href="{{ route('pages.aggiungi_salone') }}" class="dropdown-option">
                    <i class="fas fa-plus"></i> Aggiungi
                </a>
            </div>
        </div>
        @endauth
    </div>
</nav>

<div class="countenuti">
    <div class="container">
        @if($saloni->isEmpty())
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <p style="font-size: 18px; color: #555;">Non ci sono saloni.</p>
                </div>
            </div>
        @else
            <div class="row justify-content-start">
                @if($saloni->count() === 1)
                    @php $salone = $saloni->first(); @endphp
                    <div class="col-12 col-md-10 offset-md-1">
                        <div class="card">
                            <div class="immagini">
                                @if($salone->immagini)
                                    @foreach(json_decode($salone->immagini) as $indice => $immagine)
                                        <img src="{{ asset('storage/' . $immagine) }}" alt="Immagine del salone" class="{{ $indice === 0 ? 'd-block' : 'd-none' }}">
                                    @endforeach
                                @endif
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $salone->nome_salone }}</h5>
                                <a href="{{ route('saloni.destroy', $salone->id) }}" class="btn btn-danger"
                                   onclick="event.preventDefault(); document.getElementById('delete-form-{{ $salone->id }}').submit();">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <form id="delete-form-{{ $salone->id }}" action="{{ route('saloni.destroy', $salone->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    @foreach($saloni as $salone)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
                            <div class="card flex-fill">
                                <div class="immagini">
                                    @if($salone->immagini)
    @php $immagini = json_decode($salone->immagini, true); @endphp
    @if(is_array($immagini) && count($immagini) > 0)
        <img src="{{ asset('storage/' . $immagini[0]) }}" alt="Immagine del salone" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px 10px 0 0;">
    @endif
@endif
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $salone->nome_salone }}</h5>
                                    <a href="{{ route('saloni.destroy', $salone->id) }}" class="btn btn-danger"
                                       onclick="event.preventDefault(); document.getElementById('delete-form-{{ $salone->id }}').submit();">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <form id="delete-form-{{ $salone->id }}" action="{{ route('saloni.destroy', $salone->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        @endif
    </div>
</div>


<footer style="text-align: center; padding: 20px; background-color: #B9D9EB; color: white; margin-top: 30px; font-size: 14px;">
    <p>&copy; {{ date('Y') }} Il tuo Salone. Tutti i diritti riservati.</p>
    <p><a href="mailto:whiskers@gmail.com" style="color: white; text-decoration: none;">Contattaci</a></p>
    <p>Politica sulla privacy</p>
</footer>


<script src="js/home.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/1f4c0029b5.js" crossorigin="anonymous"></script>









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
