<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cambia Password</title>
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
        color: #B9D9EB;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .navbar-brand:hover {
        color: #7FC8FF;
    }

    .container {
        margin-top: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 50vh;
    }

    .form-container {
        width: 100%;
        max-width: 600px;
        border: 1px solid #dfe4ea;
        border-radius: 10px;
        padding: 30px;
        background-color: #ffffff;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-control {
        border: 1px solid #ced4da;
        border-radius: 10px;
        padding: 10px;
    }

    .btn-primary {
        background-color: #B9D9EB;
        border-color: #B9D9EB;
        border-radius: 10px;
        width: 100%;
        padding: 12px;
        font-weight: bold;
        color: #fff;
        margin: auto;
        display: block;
    }

    .btn-primary:hover {
        background-color: #A0C4D8;
        border-color: #A0C4D8;
    }

    @media (max-width: 768px) {
        .form-container {
            padding: 20px;
        }

        .btn-primary {
            width: 100%;
        }

        .navbar-brand {
            font-size: 20px;
        }
    }

    @media (max-width: 576px) {
        .container {
            margin-top: 20px;
        }

        .form-container {
            padding: 15px;
        }

        .navbar-brand {
            font-size: 18px;
        }
    }
</style>

<body id="page-top">
    <nav class="navbar navbar-expand-lg bg-light" style="padding: 0%;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">Whiskers</a>
        </div>
    </nav>

    <div class="container mt-6">
        <div class="form-container text-left">
            <form class="user" method="POST" action="{{ route('pages.reset-password.post', ['token' => $token]) }}">
                {!! csrf_field() !!}
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group">
                    <label for="email">Indirizzo Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Inserisci l'indirizzo email..." required>
                </div>

                <div class="form-group">
                    <label for="password">Nuova Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Inserisci la nuova password" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Conferma Password:</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Conferma la password" required>
                    @error('password')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Resetta Password</button>
            </form>
        </div>
    </div>
</body>

</html>
