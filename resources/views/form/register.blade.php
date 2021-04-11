<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Inscription</title>

    <!-- Icons font CSS-->
    <link href="/regform/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="/regform/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="/regform/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/regform/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/regform/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">inscription</h2>
                    <form action="{{route('inscrit')}}" method="POST">
                        @csrf
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Nom" name="nom">
                            <span class="text-danger">@error ('nom'){{ $message }} @enderror</span>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Prénom" name="prenom">
                            <span class="text-danger">@error ('prenom'){{ $message }} @enderror</span>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" placeholder="Date de Naissance" name="naissance">
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                            <span class="text-danger">@error ('naissance'){{ $message }} @enderror</span>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="genre">
                                    <option disabled="disabled" selected="selected">Genre</option>
                                    <option>Homme</option>
                                    <option>Femme</option>
                                    <option>Autre</option>
                                </select>
                                <div class="select-dropdown"></div>
                                <span class="text-danger">@error ('genre'){{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email">
                            <span class="text-danger">@error ('email'){{ $message }} @enderror</span>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Mot de Passe" name="password">
                            <span class="text-danger">@error ('password'){{ $message }} @enderror</span>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Rôle" name="role">
                            <span class="text-danger">@error ('role'){{ $message }} @enderror</span>
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Envoyer</button>
                        </div>
                        <div>
                            <a class="ml-5" style="text-decoration: none; color:white;" href="{{route('login')}}">Connecter vous</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="/regform/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="/regform/vendor/select2/select2.min.js"></script>
    <script src="/regform/vendor/datepicker/moment.min.js"></script>
    <script src="/regform/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="/regform/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
