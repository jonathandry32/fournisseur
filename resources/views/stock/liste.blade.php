@extends('./layouts/app')

@section('page-content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Historiques des mouvements de stock</h4>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>
                Identifiant
              </th>
              <th>
                Produit
              </th>
              <th>
                Quantité
              </th>
              <th>
                Prix Unitaire
              </th>
              <th>
                Type
              </th>
              <th>
                Date
              </th>
            </tr>
          </thead>
          <tbody>
            @forelse ($stock as $s)
            <tr>
              <td>
                {{ $s->idStock }}
              </td>
              <td>
                {{ $s->produit->nom }}
              </td>
              <td>
                {{ $s->quantite }}
              </td>
              <td>
                {{ $s->prixUnitaire }}
              </td>
              <td>
                {{ $s->type }}
              </td>
              <td>
                {{ $s->date }}
              </td>
            </tr>
            @empty
              <p>aucun mouvement</p>
            @endforelse

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
