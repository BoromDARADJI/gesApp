<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  

</head>
<body>
       

</head>
<body>
@include ('etudiants.nav')
<div class="container py-2" >
    <h4 class="module"> PAGE POUR Ajouter un module</h4>
     
    <form action="{{route('module.store')}}" method="post">
    @csrf
    @if(session('status'))
        <div class="alert alert-success text-uppercase ">
            {{session('status')}}
        </div>
        @endif
        <label class="form-label">Libelles</label>
        <input type="text" class="form-control" name="libelles">

        <label class="form-label">Duree</label>
        <input type="text" class="form-control"  name="duree" >

        <label class="form-label">Montant</label>
        <input type="text"  class="form-control" name="montant" >

    
        <label class="form-label">Niveau d'etude</label>
        <select  class="form-control" name="id_niveau">
             @foreach($niveaux as $niveau)
            <option value="{{$niveau->id}}">{{$niveau->libelles}}</option>
          @endforeach
        </select>


        <input type="submit" value="Ajouter un module" class="btn btn-primary my-2" >
    </form>
</div>
</body>
</html>