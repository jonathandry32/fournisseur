@extends('./layouts/app')

@section('page-content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Modification de produit</h4>
        <form class="forms-sample" action="{{ route('produit.update')}} " method="post">
          @csrf
          @method('post')
          @foreach ($produit as $p)
          <div class="form-group">
                <label for="exampleInputUsername1">Nom</label>
                <input type="text" name="nom" class="form-control" id="exampleInputUsername1" value="{{ $p->nom }}">
          </div>
          <div class="form-group">
                <label for="exampleInputUsername2">Unité</label>
                <input type="text" name="unite" class="form-control" id="exampleInputUsername2" value="{{ $p->unite }}">
          </div>
          <div class="form-group">
                <label for="exampleInputUsername2">Prix</label>
                <input type="text" name="prix" class="form-control" id="exampleInputUsername2" value="{{ $p->prix }}">
          </div>
          @endforeach
          <button type="submit" class="btn btn-primary me-2">Modifier</button>
        </form>
      </div>
    </div>
</div>
@endsection