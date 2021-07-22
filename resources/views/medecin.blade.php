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
<a href="{{('/medecinform')}}" class="btn btn-primary my-3">+ medecin</a>



<ul>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">prenom</th>
                    <th scope="col">specialité</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($medecin as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->nom }}</a></td>
                    <td>{{ $data->prenom }}</td>
                    <td>{{ $data->specialite }}</td>
                </tr>
                    @endforeach
                </tbody>
            </table>
</ul>
</body>
</html>