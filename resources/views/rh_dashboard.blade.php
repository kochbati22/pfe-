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
            <li><a href="{{ route('profile') }}">
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
            <li>
    <a href="{{ route('demandemutation.index') }}">
        <i class="fas fa-exchange-alt"></i>
        <span class="nav-item"> mutation</span>
    </a>
</li>


<li>
    <a href="">
        <i class="fas fa-file-signature"></i>
        <span class="nav-item">Déclaration familiale</span>
    </a>
</li>
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
                <img src="http://localhost:8000/storage/app/images/1712622210_347404986_779815873873040_3725295405806947887_n.jpg" alt=""/>

            </div>
        </div>
        </div>
    
    </div>
    
  </body>
  </html>