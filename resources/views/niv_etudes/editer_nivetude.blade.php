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
@include ('etudiants.nav')
<div class="container py-2">
    <h4 class="etude">Modifier le niveau d'etude :: {{$niveau->libelles}}</h4>
    
    <form action="{{route('nivetude.update',$niveau->id)}}" method="post">
    @method("PUT")
        @csrf
        <label class="form-label">Libelles</label>
        <input type="text" class="form-control" name="libelles"  value="{{$niveau->libelles}}">
       

        <input type="submit" value="Modifier le niveau d'etude" class="btn btn-primary my-2" name="ajouter">
    </form>
</div>

</body>
</html>