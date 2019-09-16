<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title >H R M </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">

</head>
<body class="hold-transition login-page">
<div class="login-box">
    <img src="allSafeLogo.png"  style="position: relative; left:42%;top: 5%;" >
  <div class="login-logo">

    <a style="font-family:Tahoma,serif,Cambria;">HRM</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style='border-radius:20px;'>
    <p class="login-box-msg">Se connecter</p>

    <form>
      <div class="form-group has-feedback">
        <input id="email" type="email" class="form-control glyphicon glyphicon " placeholder="Email" required="required" style="border-radius:50px;">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input id="pass"type="password" class="form-control" placeholder="Mot de passe" required="required" style="border-radius:50px;">
        <span class="glyphicon glyphicon-lock "></span>
      </div>
      <div id="msg" ><a class="text-danger"></a></div>
      <div class="row">

        <!-- /.col -->
        <div class="col-xs-4">
          <button id="connection"type="button" class="btn btn-primary " style="border-radius: 50px;">Connecter</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="js/bootstrap.min.js"></script>

<script>
$('#connection').click(function(){

    $.ajaxSetup({

headers: {

        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }
});
    $.ajax({
        url:'login',
        type:'POST',
        data:{'nomUtilisateur':$('#email').val(),'motDePasse':$('#pass').val()},
        success:function(){
            window.location.replace('accueil');
        },
        error:function(res){
            console.log(res);
            $('#msg').empty();
            $('#msg').append('<a class="text-danger">'+res.responseText+'</a>');
        }
    });
});


</script>

</body>
</html>
