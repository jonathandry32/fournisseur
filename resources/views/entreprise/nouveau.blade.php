@extends('./layouts/app')

@section('page-content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Nouvelle entreprise</h4>
        <form class="forms-sample" action="{{ route('entreprise.ajouter')}} " method="post">
          @csrf
          @method('post')
          <div class="form-group">
                <label for="exampleInputUsername1">Nom</label>
                <input type="text" name="nom" class="form-control" id="exampleInputUsername1" placeholder="nom">
          </div>
          <div class="form-group">
                <label for="exampleInputUsername2">Email</label>
                <input type="text" name="email" class="form-control" id="exampleInputUsername2" placeholder="email">
          </div>
          <div class="form-group">
                <label for="exampleInputUsername2">Telephone</label>
                <input type="text" name="telephone" class="form-control" id="exampleInputUsername2" placeholder="telephone">
          </div>
          <div class="form-group">
                <label for="exampleInputUsername2">Adresse</label>
                <input type="text" name="adresse" class="form-control" id="exampleInputUsername2" placeholder="adresse">
          </div>
          <button type="submit" class="btn btn-primary me-2">Ajouter</button>
        </form>
      </div>
    </div>
</div>
@endsection