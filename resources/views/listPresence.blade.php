
  </div>



<meta name="viewport" content="width=device-width, initial-scale=1">
<div class='container' style="width:95%;">
<h3 style="text-align:center;">Liste De Presence </h3>
        <table id='list' class=' display' style='display:none;'>
                <thead>
                    <tr>
                        <th>Employe</th>
                        <th>Date</th>
                        <th>Present</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($list as $emp)
                        <tr id='rowC' style='cursor:pointer;'>
                            @foreach($employes as $unNom)
                                @if($emp->employeId==$unNom->id)
                                     <td> {{ $unNom->Nom}}  {{$unNom->Prenom}}</td>
                                @endif
                            @endforeach
                            <td> {{ $emp->created_at}}</td>
                            @if( $emp->isPresent==1)
                            <td><a class="fa fa-check" style="color:green; margin-left:30px;"></a></td>
                            @else
                            <td><a class="fa fa-close" style="color:red; padding-left:30px;"></a></td>
                            @endif
                        </tr>
                    @endforeach

                </tbody>
            </table>
</div>


  <link rel="stylesheet" href="css/font-awesome.min.css">

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
//$('#page').load('dossierEmploye/'+id);

});
</script>
