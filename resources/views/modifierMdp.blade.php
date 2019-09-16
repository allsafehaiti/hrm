
<div class='container-fluid'>

<div class="login-box">
    <img src="allSafeLogo.png"  style="position: relative; left:42%;top: 5%;" >
  <div class="login-logo">

    <a style="font-family:Tahoma,serif,Cambria;">HRM</a>
  </div>

  <div class="login-box-body">
    <p class="login-box-msg">Modifier mot de passe</p>

    <form >
      <div class="form-group has-feedback">
        <input id='ancienMdp' type="password" class="form-control" placeholder="Ancien mot de passe" required="required" style="border-radius:50px;">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
          <input id="newPassword" type="password" class="form-control" placeholder="Nouveau mot de passe" required="required" style="border-radius:50px;">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
            <input id="confPassword" type="password" class="form-control" placeholder="Confirmer nouveau mot de passe" required="required" style="border-radius:50px;">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div id="error" ></div>
      <div class="row">

        <!-- /.col -->
        <div class="col-xs-4">
          <button id="confirmer"type="button" class="btn btn-primary " style="border-radius: 50px;" disabled>Confirmer</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->


  </div>
  <!-- /.login-box-body -->
</div>
</div>

<script>
  $(document).ready(function(){
      $('#loader').hide();
    $('#confPassword').keyup(function(){
      if($('#newPassword').val()!=$('#confPassword').val()){
        $('#error').empty();
        $('#error').append('<a class="text-danger" >Les mots de passe ne correspondent pas !</a>');
          }
          else{
            $('#error').empty();
            $('#confirmer').removeAttr('disabled');
          }

    });

    $('#confirmer').click(function(){
        $.ajaxSetup({

headers: {

        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }
});
        $.ajax({
            url:'changerMdp',
            type:'POST',
            data:{'ancienMdp':$('#ancienMdp').val(),'nouveauMdp':$('#newPassword').val()},
            success:function(resultat)
            {
                $('#error').empty();
                $('#error').append(resultat);
                console.log(resultat);
            },
            error:function(resultat)
            {
                $('#error').empty();
                $('#error').append('<a class=" text-danger">'+resultat.responseText+'</a>');
                console.log(resultat);
            }
        });
    });
  });
</script>

