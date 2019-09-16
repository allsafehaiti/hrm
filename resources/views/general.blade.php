<!DOCTYPE html>
<html>
<head>

  <link href="style.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>H R M</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="cs/ionicons.min.css">
  <link rel="stylesheet" href="css/AdminLTE.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <link rel="stylesheet" href="css/loader.css">


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="skin-blue ">

<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">

      <span class="logo-mini">HRM</span>

      <span class="logo-lg">H R M</span>
    </a>

    <nav class="navbar navbar-static-top">


        @if(Auth::check())
        <div class='navbar navbar-right' >
            <a data-toggle='dropdown' class='btn btn-warning dropdown-toggle' style="position:relative;right:80%;bottom:0px;top:8px;">{{Auth::user()->nomUtilisateur}}</a>
            <ul class='dropdown-menu'>
            <li><a id ='voirP'class="dropdown-item">Voir profile</a></li>
            <li><a class="dropdown-item">Messages</a></li>
            <li><a class="dropdown-item" id='changerMdp'>Changer mot de passe</a></li>
            <li ><a href='logout' class="dropdown-item">Deconnecter </a></li>


            </ul>
        </div>
        @endif
        @if(!Auth::check())
        <div class='navbar navbar-right'>
            <button id='seConnecter' class='btn btn-warning' style="position:relative;right:80%;bottom:0px;top:8px;">Se connecter</button>
        </div>
        @endif


    </nav>
  </header>
  <aside  class="main-sidebar">
    <section id='menuLeft' class="sidebar">

      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

       <style>
           .lil:hover { background-color:#006db9; }
           .lil:active {background-color: #FF851B; }
           .li{}
       </style>
    @if(Auth::check())
        <li class="treeview active">
          <a  data-toggle="collapse" href='#doss'>
            <i class="fa fa-edit"></i> <span> Dossier employe</span>
            <span class="pull-right-container" >
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class=" collapse" id='doss'>
            <li ><a href="#" class="lil font-weight-light" id="loadFormulaire">Enregistrer employe</a></li>
            <li ><a href="#" id="listeDossierEmploye" class="lil font-weight-light"> Liste Dossier Employe</a></li>

          </ul>
        </li>

        @endif


      </ul>
    </section>
<input type="hidden" value="{{Auth::user()->idDossier}}" id='idDossier'>
  </aside>
  <div  id='loader' class="loader" hidden>

  </div>
  <!-- Contenu page -->
  <div id="page" class="content-wrapper">

  </div>
  <!-- Contenu page -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2019 <a href="#">HRM</a>.</strong> All rights
    reserved.
    <div id='ss'></div>
  </footer>


</div>

<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>



<script>

  $(document).ready(function()
  {

      $('menuLeft').height($(document).height());
    $("#loadFormulaire").click(function()
    {
        $('#page').empty();
        $('#loader').show();
         $("#page").load('enregistrement');

    });

    $("#listeDossierEmploye").click(function()
    {
        $('#page').empty();
        $('#loader').show();
      $("#page").load('listeDossierEmploye');
    });

    $("#seConnecter").click(function()
    {
        $('#page').empty();
        $('#loader').show();
      $("#page").load('loginForm');
    });

    $("#changerMdp").click(function()
    {

        $('#page').empty();
        $('#loader').show();
      $("#page").load('modifierMdp');
    });

    $("#voirP").click(function()
    {
        $('#page').empty();
        $('#loader').show();
      $("#page").load('dossierEmploye/'+$('#idDossier').val());
    });



  });
</script>

</body>
</html>
