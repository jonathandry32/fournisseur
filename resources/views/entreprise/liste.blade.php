@extends('./layouts/app')

@section('page-content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Entreprises existantes</h4>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>
                Identifiant
              </th>
              <th>
                Nom
              </th>
              <th>
                Email
              </th>
              <th>
                Telephone
              </th>
              <th>
                Adresse
              </th>
            </tr>
          </thead>
          <tbody>
            @forelse ($entreprise as $e)
            <tr>
              <td>
                {{ $e->idEntreprise }}
              </td>
              <td>
                {{ $e->nom }}
              </td>
              <td>
                {{ $e->email }}
              </td>
              <td>
                {{ $e->telephone }}
              </td>
              <td>
                {{ $e->adresse }}
              </td>
            </tr>
            @empty
              <p>aucune entreprise</p>
            @endforelse

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
