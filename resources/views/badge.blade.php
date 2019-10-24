

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="cs/ionicons.min.css">
  <link rel="stylesheet" href="css/AdminLTE.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <link rel="stylesheet" href="css/loader.css">


    <title>Document</title>
</head>

<body class="bg-info">
        <div class="row">
            <div class="col-md-6 "style="background-color:#fff;margin-top:25px;margin-left:25px;">
        
                          <h3>Badge Employe         <i style="float:right;">{!! DNS1D::getBarcodeHTML(substr("000000000{$dossierEmploye->id}",-9),'C128') !!}</i> </h3>
       
                          
                          <form style="padding-top:50px;">
                              <div class="form-group">
                                  <label >Nom</label>
                                  <input type="text" class="form-control" name="name" value="{{$dossierEmploye->Nom}} ">
                              </div>
                              <div class="form-group">
                                  <label>Prenom</label>
                                  <input type="text" class="form-control" name="country" value="{{$dossierEmploye->Prenom}} ">
                              </div>
                              <div class="form-group">
                                  <label>Sexe</label>
                                  <input type="text" class="form-control" name="country" value="{{$dossierEmploye->Sexe}} ">
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label >CIN</label>
                                      <input type="text" class="form-control" name="city" value="{{$dossierEmploye->Cin}}">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label >NIF</label>
                                      <input type="text" class="form-control" name="street" placeholder="Street"value="{{$dossierEmploye->Nif}}">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <a  href="{{action('Controller\DossierEmployeController@downloadPDF', $dossierEmploye->id)}}"class="btn btn-info fa fa-database">Telecharger PDF</a>
                              </div>
                          </form>
                          
                          
                          
                          
                          </div>
                        


                          <div class="col-md-5 "style="margin-top:10px;">
                        
                        <div style="width:350px; height:470px; background:#fd9d06; position:absolute; font-family:Gill Sans MT,Cambria,serif;">
                              <div style="width:350px; height:100px; background:#fff; margin-top:-10px;position:absolut">
                                  <h2 style="text-align:center;"><strong>H     R     M</strong></h2> 
                                  <h6 style="text-align:center; color:#fd9d06;margin-top:-10px;">COMPANY</h6>
                               </div>
                              <div style="width:100px; height:100px; background:#fff;  border-radius:100px;margin-top:-50px;
                                  margin-left:125px;">
                                  <img style=" " src="{{asset('/uploads/user.png')}}"/>
                              </div>
                              <div>
                                  <h2 style="text-align:center; color:#000;margin-top:40px;"><strong> {{$dossierEmploye->Nom}} </strong> {{$dossierEmploye->Prenom}}</h2> <br>
                                  <h3 style="text-align:center; color:#000;margin-top:-40px;"> Ingenieur </h3> 
                                  <h5 style="text-align:center; color:#000;margin-top:20px;margin-left:-195px;"> Sexe: {{$dossierEmploye->Sexe}}  </h5> 
                                  <h5 style="text-align:center; color:#000;margin-top:10px;margin-left:-195px;"> CIN: {{$dossierEmploye->Cin}}  </h5> 
                                  <h5 style="text-align:center; color:#000;margin-top:10px;margin-left:-195px;"> NIF: {{$dossierEmploye->Nif}}  </h5> 
                              </div>
                              <div style=" height:70px;   margin-top:40px;
                                  margin-left:130px;">
                                  <img style=" height:70px; background:#fff;" src="{{asset('/uploads/barcode-')}}{{$dossierEmploye->id}}{{'.png'}}">
                              </div>
                        </div>
                    </div>




            </div>
        


        

                        
                        

    
</body>
</html>





<script>
    
    $(document).ready(function(){
            $('#loader').hide();
    });
</script>


  