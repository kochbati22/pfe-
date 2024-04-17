<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un RH</title>
    <!-- Ajoutez ici vos liens vers les styles CSS -->
    <style>
        /* Ajoutez ici vos styles personnalisés */
        .container {
            width: 50%;
            margin: auto;
            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 10px;
        }
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            margin: 10px 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-cancel {
            background-color: #ccc;
            color: #000;
        }
        .btn-save {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Modifier un RH</h1>
        <form action="{{ route('rh.update', $rh->id) }}" method="POST">
            @csrf
            @method('PUT')
            <!-- Champ pour le nom -->
            <input type="text" name="name" value="{{ $rh->name }}" placeholder="Nom">
            <!-- Champ pour le prénom -->
            <input type="text" name="prenom" value="{{ $rh->prenom }}" placeholder="Prénom">
            <!-- Champ pour l'email -->
            <input type="email" name="email" value="{{ $rh->email }}" placeholder="Email">
            <!-- Champ pour le téléphone -->
            <input type="text" name="telephone" value="{{ $rh->telephone }}" placeholder="Téléphone">
            <!-- Champ pour le matricule -->
            <input type="text" name="matricule" value="{{ $rh->matricule }}" placeholder="Matricule">
            <!-- Boutons -->
            <div>
                <button type="submit" class="btn-save">Enregistrer les modifications</button>
                <a href="{{ route('rh.listeRH') }}" class="btn btn-cancel">Annuler</a>
            </div>
        </form>
    </div>
</body>
</html>