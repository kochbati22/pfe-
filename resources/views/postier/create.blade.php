<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard | By Code Info</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<style>
/*  import google fonts */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700");
*{
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}  
.bordered-form {
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 5px;
    background-color: #fff; /* Couleur de fond */
}
body{
  background: #dfe9f5;
}
.container{
  display: flex;
}
nav{
  position: relative;
  top: 0;
  bottom: 0;
  height: 100vh;
  left: 0;
  background: #fff;
  width: 280px;
  overflow: hidden;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.logo{
  text-align: center;
  display: flex;
  margin: 10px 0 0 10px;
}
.logo img{
  width: 45px;
  height: 45px;
  border-radius: 50%;
}
.logo span{
  font-weight: bold;
  padding-left: 15px;
  font-size: 18px;
  text-transform: uppercase;
}
a{
  position: relative;
  color: rgb(85, 83, 83);
  font-size: 14px;
  display: table;
  width: 280px;
  padding: 10px;
}
nav .fas{
  position: relative;
  width: 70px;
  height: 40px;
  top: 14px;
  font-size: 20px;
  text-align: center;
}
.nav-item{
  position: relative;
  top: 12px;
  margin-left: 10px;
}
a:hover{
  background: #eee;
}
.logout{
  position: absolute;
  bottom: 0;
}

/* Main Section */
.main{
  position: relative;
  padding: 20px;
  width: 100%;
}
.main-top{
  display: flex;
  width: 100%;
}
.main-top i{
  position: absolute;
  right: 0;
  margin: 10px 30px;
  color: rgb(110, 109, 109);
  cursor: pointer;
}
.main-skills{
  display: flex;
  margin-top: 20px;
}
.main-skills .card{
  width: 25%;
  margin: 10px;
  background: #fff;
  text-align: center;
  border-radius: 20px;
  padding: 10px;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.main-skills .card h3{
  margin: 10px;
  text-transform: capitalize;
}
.main-skills .card p{
  font-size: 12px;
}
.main-skills .card button{
  background: orangered;
  color: #fff;
  padding: 7px 15px;
  border-radius: 10px;
  margin-top: 15px;
  cursor: pointer;
}
.main-skills .card button:hover{
  background: rgba(223, 70, 15, 0.856);
}
.main-skills .card i{
  font-size: 22px;
  padding: 10px;
}

/* Courses */
.main-course{
  margin-top:20px ;
  text-transform: capitalize;
}
.course-box{
  width: 100%;
  height: 300px;
  padding: 10px 10px 30px 10px;
  margin-top: 10px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.course-box ul{
  list-style: none;
  display: flex;
}
.course-box ul li{
  margin: 10px;
  color: gray;
  cursor: pointer;
}
.course-box ul .active{
  color: #000;
  border-bottom: 1px solid #000;
}
.course-box .course{
  display: flex;
}
.box{
  width: 33%;
  padding: 10px;
  margin: 10px;
  border-radius: 10px;
  background: rgb(235, 233, 233);
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.box p{
  font-size: 12px;
  margin-top: 5px;
}
.box button{
  background: #000;
  color: #fff;
  padding: 7px 10px;
  border-radius: 10px;
  margin-top: 3rem;
  cursor: pointer;
}
.box button:hover{
  background: rgba(0, 0, 0, 0.842);
}
.box i{
  font-size: 7rem;
  float: right;
  margin: -20px 20px 20px 0;
}
.html{
  color: rgb(25, 94, 54);
}
.css{
  color: rgb(104, 179, 35);
}
.js{
  color: rgb(28, 98, 179);
}

/* Style du formulaire */
.bordered-form {
  border: 1px solid #ccc;
  padding: 20px;
  border-radius: 5px;
  background-color: #fff; /* Couleur de fond */
}

/* Style des champs de saisie */
.form-group {
  margin-bottom: 20px;
}

/* Style des libellés des champs */
.form-group label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

/* Style des champs de saisie */
.form-control {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

/* Style du bouton de soumission */
.btn-primary {
  background-color: #007bff; /* Couleur de fond */
  color: #fff; /* Couleur du texte */
  padding: 10px 20px; /* Rembourrage */
  border: none; /* Suppression de la bordure */
  border-radius: 5px; /* Coins arrondis */
  cursor: pointer; /* Curseur de souris */
  font-size: 16px; /* Taille de la police */
}

.btn-primary:hover {
  background-color: #0056b3; /* Couleur de fond au survol */
}
.main--content{
position: relative;
background:#ebe9e9;
width: 100%;
padding: 1rem;
}
.header--wrapper img{
    width: 50px;
    height: 50px;
    cursor: pointer;
    border-radius :50%;
}
.header--wrapper{
    display: flex;
    justify-content:space-between;
    align-items: center;
    flex-wrap:wrap;
    background:#fff;
    border-radius: 10px;
    padding: 10px 2rem;
    margin-bottom 1rem;
} 
.header--title{
    color:rgb(113,99,186,253)
}
.user--info{
    display: flex;
    align-items:center;
    gap: 1rem;
}
.search--box{
    background:rgb(237,237,237);
    border-radius: 15px;
    color:rgb(113,99,186,255);
    display: flex;
    align-items: center;
    gap: 5px;
    padding: 4px 12px;

}
.search--box input{
    background:transparent;
    padding: 10px;
}
.search--box i{
    cursor: pointer; /* Curseur de souris */
  font-size: 1.2rem;
  transition:all 0.5s ease-out;
} 
.search--box i: hover{
    transition:scale(1.2);
} 
@tailwind base;
@tailwind components;
@tailwind utilities;


/* Style du formulaire */

/* Style des champs de saisie */

  
</style>
<body>
  <div class="container">
    <!-- Barre de navigation -->
    <nav>
        <ul>
            <!-- Logo -->
            <li><a href="#" class="logo">
                <img src="/logo.jpg" alt="">
                <span class="nav-item">Dashboard</span>
            </a></li>
            <!-- Liens de navigation -->
            <li><a href="#">
                <i class="fas fa-home"></i>
                <span class="nav-item">Home</span>
            </a></li>
            <li><a href="">
                <i class="fas fa-user"></i>
                <span class="nav-item">Profile</span>
            </a></li>
            <li><a href="{{ route('postier.create') }}">
                <i class="fas fa-user-plus"></i> <!-- Changement de l'icône en "add user" -->
                <span class="nav-item">Add Postier</span> <!-- Changement du texte -->
            </a></li>
            <li><a href="{{ route('postier.index') }}">
                <i class="fas fa-users"></i> <!-- Changement de l'icône en "users" -->
                <span class="nav-item">Liste Postier</span> <!-- Changement du texte -->
            </a></li>
            <li><a href="{{ route('demandes_conger.index')}}">
                <i class="fas fa-calendar-alt"></i> <!-- Changement de l'icône en "calendar-alt" -->
                <span class="nav-item">Demandes Conger</span> <!-- Changement du texte -->
            </a></li>
            <li><a href="">
                <i class="fas fa-cog"></i>
                <span class="nav-item">Settings</span>
            </a></li>
            <li><a href="">
                <i class="fas fa-question-circle"></i>
                <span class="nav-item">Help</span>
            </a></li>
            <!-- Bouton de déconnexion -->
            <li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Log out</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- Contenu principal -->
    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>primery</span>
                <h2>Dashboard</h2>

            </div>
            <div class="user--info">
                <div class="search--box">
                <i class="fasolid fa-search"></i>
                <input type="rext" placeholder="search">
                </div>
                <img src="" alt=""/>

            </div>
        </div>
        <!-- Formulaire d'ajout de postier -->
        <div class="bordered-form p-6">
    <h4 class="text-lg font-bold mb-4">Ajouter un Nouveau Postier</h4>
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
            <strong class="font-bold">Erreur!</strong>
            <span class="block sm:inline">Il y a eu quelques problèmes avec vos entrées.</span>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('postier.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="nom" class="font-bold">Nom:</label>
                <input type="text" id="nom" name="name" class="form-control" required>
            </div>
            <div>
                <label for="prenom" class="font-bold">Prénom:</label>
                <input type="text" id="prenom" name="prenom" class="form-control" required>
            </div>
            <div>
                <label for="email" class="font-bold">Adresse Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div>
                <label for="telephone" class="font-bold">Numéro de Téléphone:</label>
                <input type="text" id="telephone" name="telephone" class="form-control">
            </div>
            <div>
                <label for="adresse" class="font-bold">Adresse Postale:</label>
                <input type="text" id="adresse" name="adresse" class="form-control">
            </div>
            <div>
                <label for="matricule" class="font-bold">Numéro de Matricule:</label>
                <input type="text" id="matricule" name="matricule" class="form-control">
            </div>
            <div>
                <label for="cv" class="font-bold">CV (PDF, Word):</label>
                <div class="flex items-center">
                    <input type="file" id="cv" name="cv" class="form-control" accept=".pdf,.doc,.docx" required>
                    <label for="cv" class="ml-2 bg-blue-500 text-white py-2 px-4 rounded-md cursor-pointer">Choisir un Fichier</label>
                </div>
            </div>
            <div>
                <label for="password" class="font-bold">Mot de Passe:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div>
                <label for="cin" class="font-bold">Numéro de CIN:</label>
                <input type="text" id="cin" name="cin" class="form-control" required>
            </div>
            <div>
                <label for="date_naissance" class="font-bold">Date de Naissance:</label>
                <input type="date" id="date_naissance" name="date_naissance" class="form-control" required>
            </div>
        </div>
        <button type="submit" class="btn-primary mt-4">Ajouter</button>
    </form>
</div>
       
    <!-- Autre contenu du dashboard -->

        </div>
    
    </div>
    
  </body>
  </html>