<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body   >
@include ('etudiants.nav')
<div class="container py-2">
    <h2 class="payment">Liste des payments</h2>
    <a href="/ajouter_payment" class="btn btn-primary mb-3">Ajouter une payment</a>
    <table class="table table-striped table-hover table-dark table-striped">
        <thead >
            <tr>
                <th>#ID</th>
                <th></th>
                <th></th>
                <th>Mois</th>  
                <th>Opérations</th>
            </tr>
        </thead>
        <tbody>
               @foreach($payments as $payment)
            <tr>
                <td> #{{$payment ->id}} </td>
                <td> </td>
                <td>  </td>
                <td> {{$payment->mois}} </td>
                
              
                <td>
                    <a href="" class="btn btn-primary">Modifier</a>
                    <a href="" class="btn btn-primary">Detail</a>
                    <a href=""  class="btn btn-danger">Supprimer</a>
                </td>
            </tr>

        @endforeach
        
        </tbody>
    </table>
</div>
</body>
</html>