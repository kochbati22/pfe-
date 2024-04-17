<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil RH</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        @if(Auth::check() && Auth::user()->role === 'rh')
            <div class="row">
                <div class="col-sm-10">
                    <h1>{{ Auth::user()->name }}</h1>
                </div>
                <div class="col-sm-2">
                    <a href="/users" class="pull-right">
                    @if(isset($user->image))
    <img src="{{ asset($user->image) }}" alt="Photo de profil"/>
@endif
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="text-center">
                        <img src="{{ asset('') }}" class="avatar img-circle img-thumbnail" alt="avatar">
                        <h6>Changer de photo...</h6>
                        <input type="file" class="text-center center-block file-upload">
                    </div>
                    <hr>
                    <div class="panel panel-default">
                        <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
                        <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item text-muted">Activité <i class="fa fa-dashboard fa-1x"></i></li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Partages</strong></span> 125</li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>J'aime</strong></span> 13</li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Publications</strong></span> 37</li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Abonnés</strong></span> 78</li>
                    </ul> 
                    <div class="panel panel-default">
                        <div class="panel-heading">Réseaux sociaux</div>
                        <div class="panel-body">
                            <i class="fa fa-facebook fa-2x"></i>
                            <i class="fa fa-github fa-2x"></i>
                            <i class="fa fa-twitter fa-2x"></i>
                            <i class="fa fa-pinterest fa-2x"></i>
                            <i class="fa fa-google-plus fa-2x"></i>
                        </div>
                    </div>
                </div><!--/col-3-->
                <div class="col-sm-9">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Accueil</a></li>
                        <li><a data-toggle="tab" href="#messages">Menu 1</a></li>
                        <li><a data-toggle="tab" href="#settings">Menu 2</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <hr>
                            <form class="form" action="##" method="post" id="registrationForm">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="first_name"><h4>Nom</h4></label>
                                        <input type="text" class="form-control" name="first_name" id="first_name" value="{{ Auth::user()->name }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="last_name"><h4>Prénom</h4></label>
                                        <input type="text" class="form-control" name="last_name" id="last_name" value="{{ Auth::user()->prenom }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="phone"><h4>Téléphone</h4></label>
                                        <input type="text" class="form-control" name="telephone " id="phone" value="{{ Auth::user()->phone }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="email"><h4>E-mail</h4></label>
                                        <input type="email" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="location"><h4>Adresse</h4></label>
                                        <input type="text" class="form-control" id="location" name="" value="{{ Auth::user()->adresse }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <br>
                                        <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Enregistrer</button>
                                        <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Réinitialiser</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                        </div><!--/tab-pane-->
                        <div class="tab-pane" id="messages">
                            <h2></h2>
                            <hr>
                            <form class="form" action="##" method="post" id="registrationForm">
                                <!-- Ajoutez les champs et les éléments de formulaire nécessaires ici -->
                            </form>
                        </div><!--/tab-pane-->
                        <div class="tab-pane" id="settings">
                            <hr>
                            <form class="form" action="##" method="post" id="registrationForm">
                                <!-- Ajoutez les champs et les éléments de formulaire nécessaires ici -->
                            </form>
                        </div><!--/tab-pane-->
                    </div><!--/tab-content-->
                </div><!--/col-9-->
            </div><!--/row-->
        @else
            <div class="alert alert-danger">
                Accès non autorisé.
            </div>
        @endif
    </div>
</body>
</html>