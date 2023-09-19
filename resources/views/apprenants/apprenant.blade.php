<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    

</head>
<body>
@include ('etudiants.nav')
<div class="container py-2  tableau">
    <h5 class="apprenant">Liste des apprenants</h5>
    <a href="ajouapp" class="btn btn-primary mb-3">Ajouter un apprenant</a>
    <table class="table table-striped table-hover table-dark table-striped ">
        <thead>
            <tr>
                <th >#ID</th>
                <th>Nom</th>
                <th >Prenom</th>
                <th >Adresse</th>
                <th >Telephone</th>
                <th >Opérations</th>
            </tr>
        </thead>
        <tbody>
               @foreach($apprenants as $apprenant)
            <tr>
                <td> #{{$apprenant ->id}} </td>
                <td> {{$apprenant ->nom}} </td>
                <td> {{$apprenant->prenom}} </td>
                <td> {{$apprenant->addresse}} </td>
                <td> {{$apprenant->telephone}} </td>
              
                <td>
                    <a href="{{route('apprenant.edit',$apprenant->id)}}" class="btn btn-primary">Modifier</a>
                    <a href="{{route('apprenant.show',$apprenant->id)}}" class="btn btn-primary">Detail</a>
                    <a href="{{route('apprenant.destroy',$apprenant->id)}}"  class="btn btn-danger">Supprimer</a>
                </td>
            </tr>

        @endforeach
        
        </tbody>
    </table>
</div>
</body>
</html>