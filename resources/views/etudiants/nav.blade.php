<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body class="bg-success p-2 text-dark bg-opacity-10">

<nav class="navbar navbar-expand-lg shadow bg-primary rounded-bottom  navigation" >
        <div class="container-fluid" >
            <a class="navbar-brand text-light" href="/">DaradjiTech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link  text-uppercase  text-light " aria-current="page" href="/"> Accueil</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-uppercase text-light " aria-current="page" href="/apprenant">Liste des apprenants</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link  text-uppercase text-light" aria-current="page" href="/module">Liste des Modules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase text-light " aria-current="page" href="/niv_etude">Liste des Niveaux D'études</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link  text-uppercase text-light" aria-current="page" href="/payment">Liste des Payments</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
</body>

</html>