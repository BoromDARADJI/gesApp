<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    

</head>
<body >
@include ('etudiants.nav')
<div class="container py-2" >
    <h4 class="apprenant">PAGE POUR AJOUTER UN APPRENANT</h4>
    
    <form action="{{route('apprenant.store')}}" method="post">
    @csrf

    @if(session('status'))
        <div class="alert alert-success  text-uppercase">
            {{session('status')}}
        </div>
        @endif
        <!-- @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>
¨                  {{$error}}
                </li>
                @endforeach
            </ul>
        </div>
       @endif -->
       
        <label class="form-label">Nom</label>
        @error('nom')
        <span class=" text-danger">{{$message}}</span>
        @enderror
    <input type="text" class="form-control" name="nom" value={{old("nom")}} >
        <label class="form-label">Prenom</label>
        <input type="text" class="form-control" name="prenom"value={{old("prenom")}}>
        <label class="form-label">Addresse</label>
        <input type="text" class="form-control" name="addresse"value={{old("addresse")}}>
        <label class="form-label">Telephone</label>
        <input type="text" class="form-control" name="telephone">

        <input type="submit" value="Ajouter un apprenant" class="btn btn-primary my-2" name="ajouter">
    </form>
</div>

</body>
</html>