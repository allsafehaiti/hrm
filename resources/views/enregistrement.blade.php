
    <div id='tag'></div>
    <section class="content-header">

      <h1>
        HRM  Enregistrement d'un employe
        <small>Formulaire</small>
      </h1>

      <div id='enregistrementSuccess' class="alert alert-success" role="alert" style="display:none" >
        Enregistrement effectue avec success
      </div>
      <div id='enregistrementError' class="alert alert-danger" role="alert" style="display:none" >
            Erreur verifier vos champs
          </div>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Formulaires</a></li>
        <li class="active">Enregistrer employe</li>
      </ol>
      <div id="load" class="overlay">
            <i class="fa fa-refresh fa-spin"></i>
          </div>

    </section>


    <section class="content">
        <form action="trait_enr_emp.php" method="POST">
      <div class="row">

        <div class="col-md-6">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Informations personnelles</h3>
            </div>

            <form role="form">
              <div class="box-body">
                  <div class="form-group">
                      <label for="nom">Nom</label>
                      <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer le nom" required="required" >
                  <span id='nomErreur' class='text-danger' style="display:none;"> </span>
                    </div>
                   <div class="form-group">
                      <label for="prenom">Prenom</label>
                      <input type="text" class="form-control" id="prenom" name="prenom"  placeholder="Entrer le prenom"required="required">
                      <span id='prenomErreur' class='text-danger' style="display:none;"> </span>
                    </div>

                 <!-- radio -->
                   <div class="form-group">
                      <label for="sexe">Sexe</label>
                     <fieldset id="sexe">
                          <div class="radio">
                              <label for="masculin" class="radio">
                              <input type="radio" checked name="origine" value="masculin" id="masculin" required="required">
                              Masculin
                              </label>
                          </div>
                          <div class="radio">
                            <label for="feminin" class="radio">
                            <input type="radio" name="origine" value="feminin" id="feminin">
                            Feminin
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
                    <span id='emailErreur' class='text-danger' style="display:none;">
                </div>


                  <div class="form-group">
                      <label for="email">Telepone</label>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <input type="text" class="form-control"id="phone" name="tel" placeholder="Telephone">
                        <span id='phoneErreur' class='text-danger' style="display:none;">
                    </div>

               <!-- radio -->
               <div class="form-group">
                  <label for="status">Statut matrimonial</label>
                 <fieldset id="status">
                      <div class="radio">
                          <label for="celibataire" class="radio">
                          <input type="radio" checked name="origin" value="celibataire" id="celibataire"required="required">
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
                      <input type="radio" name="origin" value="marie" id="marie">
                      Marie
                      </label>
                      </div>
                 </fieldset>
               </div>

            </div>

            </form>
          </div>

          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Profession</h3>
            </div>
            <div class="box-body">
                <div class='form-group'>
                        <select id='listeP' class='form-control'>

                            </select>
                            <span id='professionErreur' class='text-danger' style="display:none;">
                </div>

            </div>

          </div>


          <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Valisation des saisies</h3>
              </div>
              <div class="box-footer">
                  <button id="sende" type="button" class="btn btn-primary">Enregistrer</button>
               </div>

            </div>


        </div>

        <div class="col-md-6">

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Localisation</h3>
            </div>

            <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="lieunais" class="col-sm-2 control-label">Lieu de naissance</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="lieunais" name="lieunais" placeholder="Lieu..."required="required">
                    <span id='lieuNaissanceErreur' class='text-danger' style="display:none;">
                </div>
                </div>
                <div class="form-group">
                    <label for="datenais" class="col-sm-2 control-label">Date de naissance</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control datepicker" name="datenais" id="datenais" placeholder="Date de naissance"required="required">
                      <span id='dateNaissanceErreur' class='text-danger' style="display:none;">
                    </div>
                  </div>
                <div class="form-group">
                  <label for="adresse" class="col-sm-2 control-label">Adresse</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Entrer l'adresse"required="required">
                    <span id='adresseErreur' class='text-danger' style="display:none;">
                </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">

                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Identification</h3>
            </div>
                <div class="box-body">
                    <label>NIF</label>
                  <div class="row">
                    <div class="col-xs-12">
                      <input id="nif"type="number" class="form-control" name="nif" placeholder="xxx"required="required">
                      <span id='nifErreur' class='text-danger' style="display:none;">
                    </div>

                  </div>
                </div>

                  <div class="box-body">
                      <label>CIN</label>
                    <div class="row">
                      <div class="col-xs-12">
                        <input id="cin" type="number" class="form-control"name="cin" placeholder="xxx"required="required">
                        <span id='cinErreur' class='text-danger' style="display:none;">
                    </div>

                    </div>


          </div>

        </div>
        <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Competances</h3>
            </div>
            <div  class="box-body" style="height:150px; overflow-y:scroll;">
               <div id="comp" class="form-group">
                  <label>Choisir une competance</label>
                  <select id='listeC' class="form-control" name="competance">

                  </select>
                </div>

            </div>
            <button id="btncomp"type="button" class="btn btn-primary">Ajouter</button>
            <a id="bts" class="btn btn-danger" >Effacer</a>
          </div>

           <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Experiences</h3>
              </div>
              <div  style="height:300px; overflow-y:scroll;" >
                  <fieldset id="cont-exp" ><legend>Travail</legend>
                    <div  id="yep"class="box-body">

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
              <a id="rem"class=" btn btn-danger" >Effacer</a>


            </div>

      </div>
      </form>
    </section>


<script src='js/enregistrement.js'></script>

