
    var listeProfession=new Map();
var listeSkills=new Map();
        $(document).ready(function(){
            $("#btncomp").click(function(){
        var text='<div> <label>   Choisir une competance</label>';
                  text+='<select class="form-control" name="competance">';
                        for(const skill of listeSkills.values())
                        {

                            text+='<option>'+skill+'</option>';
                        }
                  text+=' </select> </div>';

        $("#comp").append($(text));
      });

      $('#bts').click(function(){
          $('#comp').find('div').last().remove();
      });
        $.ajax({
            url:'api/listeProfession',
            type:'GET',
            success:function(resultat)
            {

              for(var i=0;i<resultat.length;i++)
              {
                listeProfession.set(resultat[i].id,resultat[i].Description);
                var text='<option>'+resultat[i].Description+'</option>';

                  $('#listeP').append(text);
              }


            },
            error:function(error){
                console.log(error);
            }
        });

        $.ajax({
            url:'api/listeSkills',
            type:'GET',
            success:function(resultat)
            {

              for(var i=0;i<resultat.length;i++)
              {
                listeSkills.set(resultat[i].id,resultat[i].Nom);
                   var text='<option>'+resultat[i].Nom+'</option>';

                  $('#listeC').append(text);
              }


            },
            error:function(error){
                console.log(error);
            }
        });

        });


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


      $("#cont-exp").append($(text));
    });
      $('#rem').click(function(){
          $("#cont-exp").find('fieldset').last().remove();

    });
  });






      $(document).ready(function(){

          $('#sende').click(function()
          {
            var getKey=function getkey(object,value){
              for(var key of object.keys()){
                  if(object.get(key)==value)
                    return key;
              }
          }
              var sexe;
            if($('#masculin').is(':checked'))
                sexe='masculin';
            else if($('#feminin').is(':checked'))
                sexe='feminin';
            var statutMatrimonial;
            if($('#marie').is(':checked'))
                statutMatrimonial='marie';
            else if($('#celibataire').is(':checked'))
                statutMatrimonial='celibataire';
            else if($('#fiance').is(':checked'))
                statutMatrimonial='fiance';


              var nom=$('#nom').val();
               var prenom=$('#prenom').val();
              var  email=$('#email').val();
               var phone=$('#phone').val();
             var profession=getKey(listeProfession,$('#listeP').find(':selected').text());
             var  lieunais=$('#lieunais').val();
              var datenais=$('#datenais').val();
              var adresse=$('#adresse').val();
             var nif=$('#nif').val();
             var cin=$('#cin').val();
              var competance=[];
              var competanceId=[]
              for(var i=0;i<$('#comp').find('select').length;i++)
              {

                competanceId[i]=getKey(listeSkills,$('#comp').find('select')[i].value);
              }


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
              $.ajaxSetup({

                    headers: {

                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                            }
              });
             $.ajax({
                 url:'dossierEmploye',
                 type:'POST',
                 data:{'Nom':nom,'Prenom':prenom,'Email':email,'DateNaissance':datenais,
                 'LieuNaissance':lieunais,'Cin':cin,'Nif':nif,'Adresse':adresse,'Telephone':phone,
                 'Profession':profession,'Competance':competanceId,'Poste':poste,'DateDebutPoste':dateDeb,
                 'DateFinPoste':dateFin,'Sexe':sexe,'StatutMatrimonial':statutMatrimonial
                 },
                 success:function(resultat){
                    $("html, body").animate({ scrollTop: 0 },500);
                    $('#enregistrementSuccess').fadeIn(1000);
                    $('#enregistrementSuccess').fadeOut(5000);
                 },
                 error:function(xhr,status,error){
                    console.log(xhr);

                $("html, body").animate({ scrollTop: 0 },500);
                $('#enregistrementError').fadeIn(1000);
                $('#enregistrementError').fadeOut(5000);

                     if(xhr.responseJSON.errors['Nom'])
                     {
                        $('#nomErreur').empty();
                         $('#nomErreur').append(xhr.responseJSON.errors['Nom'][0]);
                         $('#nomErreur').show();
                     }
                     if( xhr.responseJSON.errors['Prenom'])
                     {
                        $('#prenomErreur').empty();
                         $('#prenomErreur').append(xhr.responseJSON.errors['Prenom'][0]);
                         $('#prenomErreur').show();
                     }
                     if( xhr.responseJSON.errors['Email'])
                     {
                        $('#emailErreur').empty();
                         $('#emailErreur').append(xhr.responseJSON.errors['Email'][0]);
                         $('#emailErreur').show();
                     }
                     if( xhr.responseJSON.errors['Profession'])
                     {
                         $('#professionErreur').append(xhr.responseJSON.errors['Profession'][0]);
                         $('#professionErreur').show();
                     }


                 }
                 });

             });
          });


////////////script load////////////
$(document).ready(function(){
    $('#load').delay().hide(500);
  });

