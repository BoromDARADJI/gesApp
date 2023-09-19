<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   

</head>
<body></body>
@include ('etudiants.nav')
<div class="container py-2" >
    <h4 class="apprenant">Modifier L'apprenant {{$apprenant->nom}} </h4>
    
    <form action="{{route('apprenant.update',$apprenant->id)}}" method="post">
        @method("PUT")
        @csrf
        
        <label class="form-label">Nom</label>
        <input type="text" class="form-control" name="nom" value="{{$apprenant->nom}}">
        <label class="form-label">Prenom</label>
        <input type="text" class="form-control" name="prenom" value="{{$apprenant->prenom}}">
        <label class="form-label">Addresse</label>
        <input type="text" class="form-control" name="addresse"value="{{$apprenant->addresse}}">
        <label class="form-label">Telephone</label>
        <input type="text" class="form-control" name="telephone"value="{{$apprenant->telephone}}">

        <input type="submit" value="Modifier un apprenant" class="btn btn-primary my-2" name="ajouter">
    </form>
</div>

</body>
</html>