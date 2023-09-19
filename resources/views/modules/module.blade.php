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
    <h5 class="module">Listes des modules</h5>
    <a href="/ajouter_module" class="btn btn-primary mb-3">Ajouter un module</a>
    <table class="table table-striped table-hover table-dark table-striped">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Libelles</th>
                <th>Duree</th>
                <th>Montant</th>  
                <th>Opérations</th>
            </tr>
        </thead>
        <tbody>
               @foreach($modules as $module)
            <tr>
                <td> #{{$module ->id}} </td>
                <td> {{$module ->libelles}} </td>
                <td> {{$module->duree}} </td>
                <td> {{$module->montant}} </td>
                
              
                <td>
                    <a href="{{route('module.edit',$module->id)}}" class="btn btn-primary">Modifier</a>
                    <a href="{{route('module.show',$module->id)}}" class="btn btn-primary">Detail</a>
                    <a href="{{route('module.destroy',$module->id)}}"  class="btn btn-danger">Supprimer</a>
                </td>
            </tr>

        @endforeach
        
        </tbody>
    </table>
</div>
</body>
</html>