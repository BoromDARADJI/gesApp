<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>detail</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  @include ('etudiants.nav')

  </div>
  </div>
  <main class="container mt-5  ">
    <h4 class="etude mx-3 ">liste pour le detail du niveau d'etude</h4>
    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis  shadow bg-success p-2 text-dark bg-opacity-10">

      <div class="col-lg-6 px-0">
        <h5><strong>#ID : </strong>{{$niveau->id}}</h5>
        <p> <strong> Libelle : </strong>{{$niveau->libelles}}</p>
      </div>
    </div>
  </main>
</body>

</html>