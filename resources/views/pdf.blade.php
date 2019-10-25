
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Badge</title>
</head>

<body >
       
        
                          <h2>Badge Employe     </h2><br>
                        
                          <div style="width:350px; height:470px; background:#fd9d06; position:absolute; font-family:Gill Sans MT,Cambria,serif;">
                                <div style="width:350px; height:100px; background:#fff; margin-top:-10px;position:absolut">
                                    <h2 style="text-align:center;"><strong>H     R     M</strong></h2> 
                                    <h6 style="text-align:center; color:#fd9d06;margin-top:-25px;">COMPANY</h6>
                                 </div>
                                <div style="width:100px; height:100px; background:#fff;  border-radius:100px;margin-top:-50px;
                                    margin-left:125px;">
                                    <img style=" " src="{{asset('/uploads/user.png')}}"/>
                                </div>
                                <div>
                                    <h2 style="text-align:center; color:#000;margin-top:40px;"><strong> {{$dossierEmploye->Nom}} </strong> {{$dossierEmploye->Prenom}}</h2> <br>
                                    <h3 style="text-align:center; color:#000;margin-top:-40px;"> Ingenieur </h3> 
                                    <h5 style="text-align:center; color:#000;margin-top:20px;margin-left:-195px;"> Sexe: {{$dossierEmploye->Sexe}}  </h5> 
                                    <h5 style="text-align:center; color:#000;margin-top:10px;margin-left:-180px;"> CIN: {{$dossierEmploye->Cin}}  </h5> 
                                    <h5 style="text-align:center; color:#000;margin-top:10px;margin-left:-180px;"> NIF: {{$dossierEmploye->Nif}}  </h5> 
                                </div>
                                <div style=" height:70px;  margin-top:-10px;
                                    margin-left:150px;">
                                    <img style=" background:#fff; height:70px;" src="{{asset('/uploads/barcode-')}}{{$dossierEmploye->id}}{{'.png'}}">
                                </div>
                          </div>
                          
                          
    
                
</body>
</html>





  