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
        <li><a href="{{ route('rh.create') }}">
          <i class="fas fa-wallet"></i>
          <span class="nav-item">Wallet</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Analytics</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-tasks"></i>
          <span class="nav-item">Tasks</span>
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
                @if(Auth::user()->image)
            <img src="{{ asset('storage/images/' . Auth::user()->image) }}" alt="{{ Auth::user()->name }}" />
        @else
            <!-- Si aucune image n'est disponible, affichez une image par défaut -->
            <img src="{{ asset('default_profile_image.jpg') }}" alt="Profile Image" />
        @endif

            </div>
        </div>
        <div class="container mx-auto py-1">
    <div class="max-w-screen-4xl mx-auto my-10 px-10 py-8 bg-white rounded-lg shadow-lg border border-gray-200">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Ajouter RH</h2>
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
        <form class="space-y-6" method="POST" action="{{ route('rh.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-6">
                <!-- Champs à gauche -->
                <div>
                    <label for="matricule" class="block text-sm font-medium text-gray-700">Matricule</label>
                    <input type="text" id="matricule" name="matricule" autocomplete="matricule" required
                        class="mt-1 p-2 w-full rounded-md border border-gray-300 shadow-sm focus:ring focus:ring-blue-200">
                </div>
                <div>
                    <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
                    <input type="text" id="nom" name="name" autocomplete="nom" required
                        class="mt-1 p-2 w-full rounded-md border border-gray-300 shadow-sm focus:ring focus:ring-blue-200">
                </div>
                <div>
                    <label for="prenom" class="block text-sm font-medium text-gray-700">Prénom</label>
                    <input type="text" id="prenom" name="prenom" autocomplete="prenom" required
                        class="mt-1 p-2 w-full rounded-md border border-gray-300 shadow-sm focus:ring focus:ring-blue-200">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" autocomplete="email" required
                        class="mt-1 p-2 w-full rounded-md border border-gray-300 shadow-sm focus:ring focus:ring-blue-200">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                    <input type="password" id="password" name="password" autocomplete="current-password" required
                        class="mt-1 p-2 w-full rounded-md border border-gray-300 shadow-sm focus:ring focus:ring-blue-200">
                </div>
                <div>
                    <label for="cin" class="block text-sm font-medium text-gray-700">CIN</label>
                    <input type="text" id="cin" name="cin" autocomplete="cin" required
                        class="mt-1 p-2 w-full rounded-md border border-gray-300 shadow-sm focus:ring focus:ring-blue-200">
                </div>
                <!-- Image de profil et champs à droite -->
                <div>
                    <label for="avatar" class="block text-sm font-medium text-gray-700">Image de profil</label>
                    <input type="file" id="avatar" name="image" accept="image/*"
                        class="mt-1 p-2 w-full rounded-md border border-gray-300 shadow-sm focus:ring focus:ring-blue-200">
                    <p class="mt-2 text-sm text-gray-500">Seules les images de type JPG, JPEG, PNG sont acceptées.</p>
                </div>
                <div>
                    <label for="telephone" class="block text-sm font-medium text-gray-700">Téléphone</label>
                    <input type="tel" id="telephone" name="telephone" autocomplete="telephone" required
                        class="mt-1 p-2 w-full rounded-md border border-gray-300 shadow-sm focus:ring focus:ring-blue-200">
                </div>
                <div>
                    <label for="adresse" class="block text-sm font-medium text-gray-700">Adresse</label>
                    <textarea id="adresse" name="adresse" autocomplete="adresse" required rows="3"
                        class="mt-1 p-2 w-full rounded-md border border-gray-300 shadow-sm focus:ring focus:ring-blue-200"></textarea>
                </div>
                <div>
                    <label for="date_naissance" class="block text-sm font-medium text-gray-700">Date de naissance</label>
                    <input type="date" id="date_naissance" name="date_naissance" autocomplete="date_naissance" required
                        class="mt-1 p-2 w-full rounded-md border border-gray-300 shadow-sm focus:ring focus:ring-blue-200">
                </div>
            </div>
            <!-- Bouton Ajouter -->
            <div class="text-center">
                <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200">Ajouter</button>
            </div>
        </form>
    </div>
</div>



    </div>
    
  </div>
  
</body>
</html>