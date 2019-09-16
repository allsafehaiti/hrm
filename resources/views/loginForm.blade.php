
<style>

#divp
{

    position:relative;
    top:16em;
    left:8%;
    bottom:0%;
    border: 3px;
    border-radius: 3px;
    width: 60%;
    height: 80;

}



</style>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div style='display:none;' class='container alert-danger' id='error'>
    <p class='text'></p>
</div>
<div id='divp' class="container">
    <form >

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">Nom Utilisateur</label>

            <div class="col-md-6">
                <input id="nomUtilisateur" type="text" class="form-control " name="nomUtilisateur"  required autofocus>


                    <span class="invalid-feedback" role="alert" style='display:none;'>
                        <strong></strong>
                    </span>

            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Mot de Passe</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control " name="password" required autocomplete="current-password">


                    <span class="invalid-feedback" role="alert" style="display:none;">
                        <strong></strong>
                    </span>

            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button id='bouton' type="button" class="btn btn-primary">
                   Connecter
                </button>


            </div>
        </div>
    </form>
</div>

<script>
$('#bouton').click(function(){
    $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });

    $.ajax({
        url:'login',
        type:'POST',
        data:{'nomUtilisateur':$('#nomUtilisateur').val(),'motDePasse':$('#password').val()},
        success:function(resultat)
        {
            window.location.replace('');
        },
        error:function(resultat)
        {
            console.log(resultat);
            $('#error').empty();
            $('#error').append(resultat.responseText);
            $('#error').fadeIn(200);
            $('error').fadeOut(500);
        }
    })
});

</script>
