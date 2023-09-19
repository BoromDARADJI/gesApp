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
    <h4 class="module">Modifier le  module :: {{$module->libelles}} </h4>
   
              
      
    <form action="{{route('module.update',$module->id)}}" method="post">
       @method("PUT")
        @csrf
        <label class="form-label">Libelles</label>
        <input type="text" class="form-control" name="libelles" value="{{$module->libelles}}">

        <label class="form-label">Duree</label>
        <input type="text" class="form-control"  name="duree"  value="{{$module->duree}}">

        <label class="form-label">Montant</label>
        <input type="text"  class="form-control" name="montant"value="{{$module->montant}}" >

    
        <label class="form-label">Niveau d'etude</label>
        <select name="niveau" class="form-control"  value="{{}}">
            <option value="">Choisissez un niveau d'etude</option>
    
        </select>


        <input type="submit" value="Modifier un module" class="btn btn-primary my-2" >
    </form>
</div>
</body>
</html>