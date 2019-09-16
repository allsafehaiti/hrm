@inject('getProfession','App\getProfession')

  </div>





<meta name="viewport" content="width=device-width, initial-scale=1">
<div class='container' style="width:95%;">
        <table id='list' class=' display' style='display:none;'>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Profession</th>
                        <th>Email</th>
                        <th>Cin</th>
                        <th>Date Creation</th>
                        <th>Date Modification</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($listeDossierEmploye as $DossierEmploye)
                      <tr id='rowC' style='cursor:pointer;'>
                          <input type='hidden' value={{$DossierEmploye->id}}>
                    <td> {{ $DossierEmploye->Nom}}</td>
                    <td> {{ $DossierEmploye->Prenom}}</td>
                    <td> {{ $getProfession->getProfession($DossierEmploye->Profession)}}</td>
                      <td>{{$DossierEmploye->Email}}</td>
                    <td> {{ $DossierEmploye->Nif}}</td>
                    <td>{{$DossierEmploye->created_at}}</td>
                    <td>{{$DossierEmploye->updated_at}}</td>
                  </tr>
                    @endforeach

                </tbody>
            </table>
</div>




<link rel="stylesheet" type="text/css" href="css/jquery.datatables.css">
<script type="text/javascript" charset="utf8" src="js/jquery.datatables.js"></script>
<script type="text/javascript" charset="utf8" src="js/dataTables.bootstrap.min.js"></script>

<script>
    $(document).ready(function()
    {
        $('#loader').hide();
        $('#list').DataTable
        (
            {


                "language":
                {
                    "lengthMenu": "Montre _MENU_ resultats par page",
                    "zeroRecords": "Aucune information - desole",
                    "info": "Montre _PAGE_ de _PAGES_",
                    "infoEmpty": "Aucun resultat trouve",
                    "infoFiltered": "(filtre de _MAX_ total resultats)",
                    "search": "Recherche",
                    "paginate":
                    {
                    "previous":"Precedent",
                    "next":"Prochain"
                    }


                }

            }

        );
            $('#list').fadeIn(400);



    });
    $('tr').click(function(){

let id=$(this).find('input').val();
$('#page').empty();
        $('#loader').show();
$('#page').load('dossierEmploye/'+id);

});
</script>
