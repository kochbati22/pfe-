<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Postier</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Modifier Postier</h1>
    <form action="{{ route('postier.update', $postier->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $postier->name }}">
        </div>
        <div class="form-group">
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" class="form-control" value="{{ $postier->prenom }}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $postier->email }}">
        </div>
        <div class="form-group">
            <label for="adresse">Adresse:</label>
            <input type="text" id="adresse" name="adresse" class="form-control" value="{{ $postier->adresse }}">
        </div>
        <div class="form-group">
            <label for="telephone">Téléphone:</label>
            <input type="text" id="telephone" name="telephone" class="form-control" value="{{ $postier->telephone }}">
        </div>
        <div class="form-group">
            <label for="matricule">Matricule:</label>
            <input type="text" id="matricule" name="matricule" class="form-control" value="{{ $postier->matricule }}">
        </div>
        <div class="form-group">
            <label for="cv">CV:</label>
            <input type="file" id="cv" name="cv" class="form-control-file" value="{{ $postier->cv }}">
        </div>
        <div class="form-group">
                        <label for="password">Mot de passe:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
        <!-- Autres champs à éditer -->
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
</body>
</html>