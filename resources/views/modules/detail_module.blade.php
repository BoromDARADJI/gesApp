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

<main class="container mt-5  ">
<h4 class="module mx-3 ">liste pour le detail du module</h4>
    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis  shadow bg-success p-2 text-dark bg-opacity-10">
    
      <div class="col-lg-6 px-0">
      <h5 ><strong>#ID  : </strong>{{$module->id}}</h5>
  <p> <strong> libelles : </strong>{{$module->libelles}}</p> 
  <p><strong> DUREE : </strong>{{$module->duree}}</p>   
  <p> <strong> MONTANT : </strong>{{$module->montant}}</p>
   <p> <strong> NIVEAU D'ETUDE : </strong>{{}}</p>  
      </div>
    </div>
  </main>
</body>
</html>