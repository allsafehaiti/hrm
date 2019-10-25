

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <section class="content-header">

      <h1>
        HRM  Modification d'un dossier
        <small>Formulaire</small>
      </h1>

      <div id='enregistrementSuccess' class="alert alert-success" role="alert" style="display:none;" >
        Modification effectue avec success
      </div>
      <div id='enregistrementError' class="alert alert-danger" role="alert" style="display:none;" >
            Erreur
          </div>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Formulaires</a></li>
        <li class="active">Modifier </li>
      </ol>
      <div id="load" class="overlay">
            <i class="fa fa-refresh fa-spin"></i>
          </div>

    </section>

    <!-- Main content -->

    <section class="content">
        <form >
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Informations personnelles</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

        <input type='hidden'  id='dossierId' value='{{$dossierEmploye->id}}' >
         <input type="hidden" value='{{$dossierEmploye->ProfessionEmploye->Description}}' id='professionBlade'>
         <div id='listeSkills'>
                @foreach($dossierEmploye->Skills as $skill)
                <input type="hidden" id='skillBlade' value='{{$skill->Nom}}'>
                @endforeach

         </div>

         <div id='listeExperiencesPostes'>
            @foreach($dossierEmploye->Experiences as $experience)
         <input type='hidden' value='{{ $experience->Poste}}'>
            @endforeach
         </div>

         <div id='listeExperiencesFrom'>
                @foreach($dossierEmploye->Experiences as $experience)
             <input type='hidden' value='{{ $experience->FromDate}}'>
                @endforeach
             </div>

             <div id='listeExperiencesTo'>
                    @foreach($dossierEmploye->Experiences as $experience)
                 <input type='hidden' value='{{ $experience->ToDate}}'>
                    @endforeach
                 </div>



         <form role="form">
              <div class="box-body">
                  <div class="form-group">
                      <label for="nom">Nom</label>
                  <input value='{{$dossierEmploye->Nom}}' type="text" class="form-control" id="nom" name="nom" placeholder="Entrer le nom" required="required" >
                  <span id='nomErreur' class='text-danger' style="display:none;"> </span>
                    </div>
                   <div class="form-group">
                      <label for="prenom">Prenom</label>
                      <input value='{{$dossierEmploye->Prenom}}' type="text" class="form-control" id="prenom" name="prenom"  placeholder="Entrer le prenom"required="required">
                      <span id='prenomErreur' class='text-danger' style="display:none;"> </span>
                    </div>

                 <!-- radio -->
                   <div class="form-group">
                      <label for="sexe">Sexe</label>
                     <fieldset id="sexe">
                          <div class="radio">
                              <label for="masculin" class="radio">
                                  @if($dossierEmploye->Sexe=='masculin')
                              <input type="radio" checked name="origine" value="masculin" id="masculin" required="required">
                              @else
                             <input type="radio" name="origine" value="masculin" id="masculin" required="required">
                             @endif
                             Masculin
                              </label>
                          </div>
                          <div class="radio">
                            <label for="feminin" class="radio">
                                @if($dossierEmploye->Sexe=='feminin')
                            <input type="radio" checked name="origine" value="feminin" id="feminin">
                           @else
                           <input type="radio" name="origine" value="feminin" id="feminin">
                                @endif
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
                    <input value='{{$dossierEmploye->Email}}' type="email" class="form-control"id="email" name="email" placeholder="Email"required="required">
                    <span id='emailErreur' class='text-danger' style="display:none;">
                </div>


                  <div class="form-group">
                      <label for="email">Telepone</label>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <input value={{$dossierEmploye->Telephone}} type="text" class="form-control"id="phone" name="tel" placeholder="Telephone">
                        <span id='phoneErreur' class='text-danger' style="display:none;">
                    </div>

               <!-- radio -->
               <div class="form-group">
                  <label for="status">Statut matrimonial</label>
                 <fieldset id="status">
                      <div class="radio">
                          <label for="celibataire" class="radio">
                            @if($dossierEmploye->StatutMatrimonial=='celibataire')
                          <input type="radio" checked name="origin" value="celibataire" id="celibataire"required="required">
                         @else
                         <input type="radio"  name="origin" value="celibataire" id="celibataire"required="required">
                         @endif
                         Celibataire
                          </label>
                      </div>
                      <div class="radio">
                        <label for="fiance" class="radio">
                        @if($dossierEmploye->StatutMatrimonial=='fiance')
                            <input type="radio" checked name="origin" value="fiance" id="fiance">
                            @else
                            <input type="radio" name="origin" value="fiance" id="fiance">
                            @endif
                        Fiance
                        </label>
                    </div>
                    <div class="radio">
                      <label for="marie" class="radio">
                          @if($dossierEmploye->StatutMatrimonial=='marie')
                      <input type="radio" checked name="origin" value="marie" id="marie">
                      @else
                      <input type="radio"  name="origin" value="marie" id="marie">
                        @endif
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
                            <span id='professionErreur' class='text-danger' style="display:none;"></span>
                </div>

            </div>

          </div>


          <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Valisation des saisies</h3>
              </div>
              <div class="box-footer">
                  <button id="sende" type="button" class="btn btn-primary">Modifier</button>
                  @if($dossierEmploye->Compte)
                    @if($dossierEmploye->Compte->status==1 || $dossierEmploye->Compte->status==2)
                  <button id="resetUser" type="button" class="btn btn-primary">Reinitialiser mot de passe</button>
                     @endif
                     @if($dossierEmploye->Compte->status!=0)
                  <button id="deleteUser" type="button" class="btn btn-primary">Suspendre utilisateur</button>
                     @endif
                     @if($dossierEmploye->Compte->status==0)
                  <button id="reactivateUser" type="button" class="btn btn-primary">Reactiver utilisateur</button>
                     @endif
                 @else
                 <button id="createUser" type="button" class="btn btn-primary">Creer utilisateur</button>
                 @endif
                 
                 <button id="createBadge" type="button" class="btn btn-warning">Creer Badge</button>

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
                    <input value='{{$dossierEmploye->LieuNaissance}}' type="text" class="form-control" id="lieunais" name="lieunais" placeholder="Lieu..." required>
                    <span id='lieuNaissanceErreur' class='text-danger' style="display:none;"></span>
                </div>
                </div>
                <div class="form-group">
                    <label for="datenais" class="col-sm-2 control-label">Date de naissance</label>
                    <div class="col-sm-10">
                      <input value={{$dossierEmploye->DateNaissance}} type="date" class="form-control datepicker" name="datenais" id="datenais" placeholder="Date de naissance"required="required">
                      <span id='dateNaissanceErreur' class='text-danger' style="display:none;"></span>
                    </div>
                  </div>
                <div class="form-group">
                  <label for="adresse" class="col-sm-2 control-label">Adresse</label>

                  <div class="col-sm-10">
                    <input value='{{$dossierEmploye->Adresse}}' type="text" class="form-control" name="adresse" id="adresse" placeholder="Entrer l'adresse"required="required">
                    <span id='adresseErreur' class='text-danger' style="display:none;"></span>
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
                      <input value='{{$dossierEmploye->Nif}}' id="nif"type="number" class="form-control" name="nif" placeholder="xxx"required="required">
                      <span id='nifErreur' class='text-danger' style="display:none;"></span>
                    </div>

                  </div>
                </div>

                  <div class="box-body">
                      <label>CIN</label>
                    <div class="row">
                      <div class="col-xs-12">
                        <input value='{{$dossierEmploye->Cin}}' id="cin" type="number" class="form-control"name="cin" placeholder="xxx"required="required">
                        <span id='cinErreur' class='text-danger' style="display:none;"></span>
                    </div>

                    </div>
          </div>


        </div>
        <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Competances</h3>
            </div>


               <div id="comp" class="form-group">

                </div>


            <button id="btncomp"type="button" class="btn btn-primary">Ajouter</button>
            <a id="bts" class="btn btn-danger" >Effacer</a>

          </div>


           <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Experiences</h3>
              </div>
              <div  style="height:300px; overflow-y:scroll;" >
                  <fieldset id="cont-exp" >

                </fieldset>
              </div>
              <button type="button" class="btn btn-primary" id="ajout-exp">Ajouter</button>
              <a id="rem"class=" btn btn-danger" >Effacer</a>

            </div>

      </div>

      </form>
    </section>




<script src='js/modification.js'></script>


