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


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="skin-blue ">
        <div id='tagg'>

        </div>
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">

      <span class="logo-mini">HRM</span>

      <span class="logo-lg">H R M</span>
    </a>

    <nav class="navbar navbar-static-top">


        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>


    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">

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
           li:hover { background-color:#006db9; }
           li:active {background-color: #FF851B; }
       </style>

        <li class="treeview active">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Formulaires</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="#" id="loadFormulaire"><i class="fa fa-circle-o"></i> Enregistrer emeploye</a></li>
            <li class="active" id='hhv' style='hover { background-color: yellow;  } '><a href="#" id="listeDossierEmploye"><i class="fa fa-circle-o"></i> Liste Dossier Employe</a></li>

          </ul>
        </li>




      </ul>
    </section>

  </aside>

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

<script src='js/enregistrement.js'></script>

<script>
  $(document).ready(function()
  {
    $("#loadFormulaire").click(function()
    {
         $("#page").load('enregistrement');

    });

    $("#listeDossierEmploye").click(function()
    {
      $("#page").load('listeDossierEmploye');
    });
  });
</script>

</body>
</html>
