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
<div class="container py-2">
    <h5 class="etude ">Liste des niveaux d'etudes</h5>
    <a href="/ajouter" class="btn btn-primary mb-3">Ajouter un niveau d'etude</a>
    <table class="table table-striped table-hover table-dark table-striped">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Libelles</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
               @foreach($niveaux as $niveau)
            <tr>
                <td> #{{$niveau ->id}} </td>
                <td> {{$niveau ->libelles}} </td>
                
              
                <td>
                    <a href="{{route('niveau.edit',$niveau->id)}}" class="btn btn-primary">Modifier</a>
                    <a href="{{route('niveau.show',$niveau->id)}}" class="btn btn-primary">Detail</a>
                    <a href="{{route('niveau.destroy',$niveau->id)}}"  class="btn btn-danger">Supprimer</a>
                </td>
            </tr>

        @endforeach
        
        </tbody>
    </table>
</div>
</body>
</html>