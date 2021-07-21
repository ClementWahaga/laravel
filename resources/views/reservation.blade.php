<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
   
   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>reservation</title>
</head>
<body>



<div class=" mx-auto "style="width: 200px;">
    
    <div class="card " style="width: 30rem;">
        <h4 class="card-title">formulaire de prise de rendez-vous</h4>
        <img src="https://chiv.fr/wp-content/uploads/2020/05/prendre-rdv-opticaredim_163x188_acf_cropped.png" class="card-img-top" >
        <form>
                
            <div class="mb-1 col-8 ">
                <label for="exampleInputEmail1" class="form-label">Nom du patient</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="" class="form-text"></div>
            </div>
            <div class="mb-3  col-8">
                <label for="exampleInputPassword1" class="form-label">Prenom du patient </label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-1 col-8">
                <label for="exampleInputEmail1" class="form-label">date de reservation </label>
                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="" class="form-text"></div>
            </div>
            <div class="mb-1 col-8">
                <label for="exampleInputEmail1" class="form-label">heure de la reservation </label>
                <input type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="" class="form-text"></div>
            </div>
            <select class="form-select" aria-label="Default select example">
                <option selected>Liste des specialité</option>
                <option value="1">Dentiste</option>
                <option value="2">Medecin generaliste</option>
                <option value="3">Ortopediste</option>
                <option value="4">Gynecologue</option>
                <option value="5">Infirmier</option>
            </select>
            <select class="form-select" aria-label="Default select example">
                <option selected>Liste des docteurs </option>
                <option value="1">DR.Stone</option>
                <option value="2">DR.House</option>
                <option value="3">DR.Dre</option>
            </select>
            
            <button type="submit" class="btn btn-primary">Envoyé</button>
    
        </form>
    </div>
</div>


</body>
</html>