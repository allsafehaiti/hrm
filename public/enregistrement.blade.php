
    <!-- Content Header (Page header) -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <section class="">
      <h1>
        HRM  Enregistrement d'un employe
        <small>Formulaire</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Formulaires</a></li>
        <li class="active">Enregistrer employe</li>
      </ol>
    </section>


            <form role="form">
              <div class="box-body">
                  <div class="form-group">
                      <label for="nom">Nom</label>
                      <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer le nom" required="required" >
                   </div>
                   <div class="form-group">
                      <label for="prenom">Prenom</label>
                      <input type="text" class="form-control" id="prenom" name="prenom"  placeholder="Entrer le prenom"required="required">
                   </div>

                 <!-- radio -->
                   <div class="form-group">
                      <label for="sexe">Sexe</label>
                     <fieldset id="sexe">
                          <div class="radio">
                              <label for="masculin" class="radio">
                              <input type="radio" name="origine" value="masculin" id="masculin" required="required">
                              Masculin
                              </label>
                          </div>
                          <div class="radio">
                            <label for="feminin" class="radio">
                            <input type="radio" name="origine" value="feminin" id="feminin">
                            Feminin
                            </label>
                        </div>
                        <div class="radio">
                          <label for="autre" class="radio">
                          <input type="radio" name="origine" value="autre" id="autre">
                          Autre
                          </label>
                          </div>
                     </fieldset>
                   </div>

                <div class="form-group">
                  <label for="email">Adresse email</label>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control"id="email" name="email" placeholder="Email"required="required">
                  </div>


                  <div class="form-group">
                      <label for="email">Telepone</label>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <input type="text" class="form-control"id="phone" name="tel" placeholder="Telephone">
                     </div>

               <!-- radio -->
               <div class="form-group">
                  <label for="status">Statut matrimonial</label>
                 <fieldset id="status">
                      <div class="radio">
                          <label for="celibataire" class="radio">
                          <input type="radio" name="origin" value="celibataire" id="celibataire"required="required">
                          Celibataire
                          </label>
                      </div>
                      <div class="radio">
                        <label for="fiance" class="radio">
                        <input type="radio" name="origin" value="fiance" id="fiance">
                        Fiance
                        </label>
                    </div>
                    <div class="radio">
                      <label for="marie" class="radio">
                      <input type="radio" name="origin" value="marie" id="amrie">
                      Marie
                      </label>
                      </div>
                 </fieldset>
               </div>

              </div>



              <!-- /.box-body -->


            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Profession</h3>
            </div>
            <div class="box-body">
              <input id="profession" class="form-control input-lg" type="text" name="profession" placeholder="Entrer profession"required="required">

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Valisation des saisies</h3>
              </div>
              <div class="box-footer">
                  <button id="sende" type="button" class="btn btn-primary">Enregistrer</button>
               </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->


          <!-- /.box -->



        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Localisation</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="lieunais" class="col-sm-2 control-label">Lieu de naissance</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="lieunais" name="lieunais" placeholder="Lieu..."required="required">
                  </div>
                </div>
                <div class="form-group">
                    <label for="datenais" class="col-sm-2 control-label">Date de naissance</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control datepicker" name="datenais" id="datenais" placeholder="Date de naissance"required="required">
                    </div>
                  </div>
                <div class="form-group">
                  <label for="adresse" class="col-sm-2 control-label">Adresse</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Entrer l'adresse"required="required">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">

                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Identification</h3>
            </div>
                <div class="box-body">
                    <label>NIF</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input id="nif"type="number" class="form-control" name="nif" placeholder="xxx"required="required">
                    </div>

                  </div>
                </div>

                  <div class="box-body">
                      <label>CIN</label>
                    <div class="row">
                      <div class="col-xs-12">
                        <input id="cin" type="number" class="form-control"name="cin" placeholder="xxx"required="required">
                      </div>

                    </div>


            <!-- /.box-header -->

            <!-- /.box-body -->
          </div>

          <!-- /.box -->
        </div>
        <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Competances</h3>
            </div>
            <div  class="box-body" style="height:150px; overflow-y:scroll;">
               <!-- select -->
               <div id="comp" class="form-group">
                  <label>Choisir une competance</label>
                  <select class="form-control" name="competance">
                    <option value="option1">option 1</option>
                    <option value="option2">option 2</option>
                    <option value="option3">option 3</option>
                    <option value="option4">option 4</option>
                    <option value="option5">option 5</option>
                  </select>
                </div>

            </div>
            <button id="btncomp"type="button" class="btn btn-primary">Ajouter</button>
            <a id="bts" class=" glyphicon glyphicon-remove" style="color:red"></a>
            <!-- /.box-body -->
          </div>

           <!-- Input addon -->
           <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Experiences</h3>
              </div>
              <div id="cont-exp" style="height:300px; overflow-y:scroll;" >
                  <fieldset ><legend>Travail</legend>
                    <div  id="yep"class="box-body">
                    <!-- textarea -->
                    <div class="form-group">
                        <label for="nom">Poste</label>
                        <input type="text" class="form-control" id="poste" name="poste" placeholder="Entrer le poste">
                    </div>
                    <div class="form-group">
                        <label for="nom">Date de debut</label>
                        <input type="date" class="form-control datepicker" name="dateposte"id="debut" name="debut" >
                    </div>
                    <div class="form-group">
                        <label for="nom">Date termine</label>
                        <input type="date" class="form-control datepicker" name="dateposte1" id="fin" name="fin" >
                    </div>
                    </div>
                </fieldset>
              </div>
              <button type="button" class="btn btn-primary" id="ajout-exp">Ajouter</button>
              <a id="rem"class=" glyphicon glyphicon-remove" style="color:red"></a>


              <!-- /.box-body -->
            </div>
            <!-- /.box -->

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
      </form>
    </section>
    <!-- /.content -->


<!-- jQuery 3 -->
<script src="jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bootstrap.min.js"></script>
<!-- FastClick -->
<script src="fastclick.js"></script>
<!-- AdminLTE App -->
<script src="adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="demo.js"></script>

<script
  src="http://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  crossorigin="anonymous"></script>

<!-- pou bouton experience-->
<script>
  $(document).ready(function(){
    var text='<fieldset ><legend>    Travail</legend>';
                 text+='   <div class="box-body">';

                    text+='<div class="form-group">';
                        text+='  <label for="nom">Poste</label>';
                        text+='  <input type="text" class="form-control" id="poste" name="poste" placeholder="Entrer le poste">';
                        text+= ' </div> <div class="form-group"> <label for="nom">Date de debut</label>';
                          text+='<input type="date" class="form-control datepicker" name="dateposte"id="debut" name="debut" >';
                          text+=' </div> <div class="form-group"> <label for="nom">Date termine</label>';
                            text+='  <input type="date" class="form-control datepicker" name="dateposte1" id="fin" name="fin" > </div>';
                            text+='</div> </fieldset>';
    $("#ajout-exp").click(function(){
      console.log("okokokoko");

      $("#cont-exp").append($(text));
    });
      $('#rem').click(function(){
          $("#cont-exp").find('fieldset').last().remove();

    });
  });
</script>

<script>
    $(document).ready(function(){
      var text='<div> <label>   Choisir une competance</label>';
                  text+='<select class="form-control" name="competance">';
                      text+='<option>option 1</option>';
                      text+='<option>option 2</option>';
                      text+=' <option>option 3</option>';
                      text+='   <option>option 4</option>';
                      text+='  <option>option 5</option>';
                      text+=' </select> </div>';
      $("#btncomp").click(function(){
        $("#comp").append($(text));
      });

      $('#bts').click(function(){
          $('#comp').find('div').last().remove();
      });
    });
  </script>

<script>
  $(document).ready(function(){
$("#profession").autocomplete({source : ["Programmeur","Medecin","Marchand","Ingennieur"]});
  });
</script>


<script>
      $(document).ready(function(){
          $('#sende').click(function()
          {
              console.log('hello');
              var nom=$('#nom').val();
               var prenom=$('#prenom').val();
              var  email=$('#email').val();
               var phone=$('#phone').val();
             var profession=$('#profession').val();
             var  lieunais=$('#lieunais').val();
              var datenais=$('#datenais').val();
              var adresse=$('#adresse').val();
             var nif=$('#nif').val();
             var cin=$('#cin').val();
              var competance=[];
              for(var i=0;i<$('#comp').find('select').length;i++)
              competance[i]=$('#comp').find('select')[i].value;

              var poste=[];
              var dateDeb=[];
              var dateFin=[];
              var j=0;
              for(var i=0;i<$('#cont-exp').find('input').length;i=i+3)
              {
                poste[j]=$('#cont-exp').find('input')[i].value;
                j++;
              }
             j=0;
              for(var i=1;i<$('#cont-exp').find('input').length;i=i+3)
              {
                dateDeb[j]=$('#cont-exp').find('input')[i].value;
                j++;
              }
              j=0;
              for(var i=2;i<$('#cont-exp').find('input').length;i=i+3)
              {
                dateFin[j]=$('#cont-exp').find('input')[i].value;
                j++;
              }




             });
          });



</script>
