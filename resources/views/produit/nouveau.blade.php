@extends('./layouts/app')

@section('page-content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Nouveau produit</h4>
        <form class="forms-sample" action="{{ route('produit.ajouter')}} " method="post">
          @csrf
          @method('post')
          <div class="form-group">
                <label for="exampleInputUsername1">Nom</label>
                <input type="text" name="nom" class="form-control" id="exampleInputUsername1" placeholder="nom">
          </div>
          <div class="form-group">
                <label for="exampleInputUsername2">Unité</label>
                <input type="text" name="unite" class="form-control" id="exampleInputUsername2" placeholder="unite">
          </div>
          <div class="form-group">
                <label for="exampleInputUsername2">Prix</label>
                <input type="text" name="prix" class="form-control" id="exampleInputUsername2" placeholder="prix">
          </div>
          <button type="submit" class="btn btn-primary me-2">Inserer</button>
        </form>
      </div>
    </div>
</div>
@endsection