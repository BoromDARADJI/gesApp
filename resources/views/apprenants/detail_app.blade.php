<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>detail</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>
  @include ('etudiants.nav')

  <main class="container mt-5  ">
  <h4 class="module mx-3 ">liste pour le detail de l'apprenant</h4>
    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis  shadow bg-success p-2 text-dark bg-opacity-10">
      <div class="col-lg-6 px-0">
        <h5><strong>#ID : </strong>{{$apprenant->id}}</h5>
        <p> <strong> NOM : </strong>{{$apprenant->nom}}</p>
        <p><strong> PRENOM : </strong>{{$apprenant->prenom}}</p>
        <p> <strong> ADDRESSE : </strong> {{$apprenant->addresse}}</p>
        <p> <strong> TELEPHONE : </strong> {{$apprenant->telephone}}</p>
      </div>
    </div>
  </main>
<!-- 
  <img src="{{asset('images/avatar.png')}}" alt="">

  <img src="{{URL('images/avatar.png')}}" alt=""> -->
</body>

</html>