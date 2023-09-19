<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
       

</head>
<body>
@include ('etudiants.nav')
<div class="container py-2" >
    <h4 class="payment">Page pour ajouter un payment</h4>
     
    <form action="{{route('payment.store')}}" method="post">
    @csrf
    @if(session('status'))
        <div class="alert alert-success text-uppercase ">
            {{session('status')}}
        </div>
        @endif
        <label class="form-label">Apprenant</label>
        <select name="apprenant" class="form-control">
            <option value="">Choisissez un apprenant</option>
    
        </select>

        <label class="form-label">Module</label>
        <select name="module" class="form-control">
            <option value="">Choisissez un module</option>
    
        </select>
        <label class="form-label">Mois</label>
        <input type="text"  class="form-control" name="mois" >

    
        


        <input type="submit" value="Ajouter un payment" class="btn btn-primary my-2" >
    </form>
</div>
</body>
</html>