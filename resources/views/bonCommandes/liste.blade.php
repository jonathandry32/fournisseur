@extends('./layouts/app')

@section('page-content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Striped Table</h4>
      <p class="card-description">
        Add class <code>.table-striped</code>
      </p>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>
                Bon Commande
              </th>
              <th>
               Date
              </th>
              <th>
               Etat
              </th>
              <th>
                Valider
              </th>
            </tr>
          </thead>
          <tbody>
            @forelse ($bonCommandes as $bonCommande)
            <tr>
              <td>
                Numero 00{{ $bonCommande->idBonCommande }}
              </td>
              <td>
                {{ $bonCommande->date }} 
              </td>
              <td>
              @php
                  if($bonCommande->etat==0){
                    $etat='Non valider';
                  }  
                  else if ($bonCommande->etat==1){
                    $etat='Non modifiable';
                  }
                  else if ($bonCommande->etat==5){
                    $etat='attente validation daf';
                  }
                  else{
                    $etat='valider';
                  }
             @endphp
                {{ $etat }} 
              </td>
              <td>
                <form action="{{ route('bonCommandes.details', [$bonCommande->idBonCommande]) }} " method="post" enctype="multipart/form-data">                    
                    @csrf
                    @method('post')
                    <input type="submit" value="Details">
                </form>
              </td>
            </tr>
            @empty
              <p>aucune demande</p>
            @endforelse

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
