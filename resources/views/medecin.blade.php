<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des medecin</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<h1>liste des medecins</h1>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#change_password">+ medecin</button>



<div class="card" style="width: 18rem;">
           
    <table class="table table-striped">
        <thead>
                 <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">prenom</th>
                    <th scope="col">specialité</th>
                </tr>
        </thead>
        <tbody >
            @foreach($medecin as $data)
                <tr>
                    <th>{{ $data->id }}</th>
                    <th>{{ $data->nom }}</th>
                    <th>{{ $data->prenom }}</th>
                    <th>{{ $data->specialite }}</th>
                    <th class="actions">
                        <a href="#" class="edit btn btn-primary my-3  btn-lg">modifier</a>
                        <a href="#" class="destroy btn btn-danger my-3 btn-lg">supprimer</a>
                    </th> 
	            </tr>
            @endforeach               
        </tbody>
    </table>
</div class="card">

<div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">ajouter un medecin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                            <div class="modal-body">
                                <form action="{{ route('medecin.create') }}" method="POST">
                                    <div class="mb-1 col-8 ">
                                        <label for="" class="form-label">Nom du medecin</label>
                                        <input type="text" class="form-control" id="nom" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3  col-8">
                                        <label for="" class="form-label">Prenom du medecin </label>
                                        <input type="text" class="form-control" id="prenom">
                                    </div>
                                    <div class="mb-3  col-8">
                                        <label for="" class="form-label">specialite </label>
                                        <input type="text" class="form-control" id="specialite">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Envoyé</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            
</body>
</html>