<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire medecin</title>
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
   
   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>



<h1>formulaire medecin </h1>
<div class=" mx-auto "style="width: 200px;">  
    <div class="card " style="width: 30rem;">      
            <form action="{{ route('medecin.create') }}" method="POST">
                    <div class="mb-1 col-8 ">
                        <label for="exampleInputEmail1" class="form-label">Nom du medecin</label>
                        <input type="text" class="form-control" id="nom" aria-describedby="emailHelp">
                    <div id="" class="form-text"></div>
                        </div>
                    <div class="mb-3  col-8">
                        <label for="exampleInputPassword1" class="form-label">Prenom du medecin </label>
                        <input type="text" class="form-control" id="prenom">
                    </div>
                    <div class="mb-3  col-8">
                        <label for="exampleInputPassword1" class="form-label">specialite </label>
                        <input type="text" class="form-control" id="specialite">
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyé</button>
            </form>
    </div>
</div>            
</body>
</html>