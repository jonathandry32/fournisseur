@extends('./layouts/app')

@section('page-content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">insertion de stock</h4>
        <p class="card-description">
          a
        </p>
        <form class="forms-sample" action="{{ route('stock.insertion')  }} " method="post" enctype="multipart/form-data">
          @csrf
          @method('post')


          <div class="form-group">
            <label for="exampleInputPassword1">Produit</label>
            <select name="idProduit" class="form-control" >
                @forelse ($produit as $p)
                    <option value="{{ $p->idProduit }}">{{ $p->nom }} </option>
                @empty
                <p>Aucun produit</p>       
                @endforelse
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Quantite</label>
            <input type="number" name="quantite"  class="form-control" id="exampleInputEmail1" step="0.01" placeholder="Qunantité">
          </div>

          <div class="form-group">
            <label for="exampleInputUsername1">Prix unitaire</label>
            <input type="text" name="prixUnitaire" class="form-control" id="exampleInputUsername1" placeholder="prix unitaire">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Type</label>
            <select name="type" class="form-control" >
                    <option value="entrer">entrer</option>
                    <option value="sortie">sortie</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputUsername1">Date</label>
            <input type="date" name="date" class="form-control" id="exampleInputUsername1" placeholder="date">
          </div>

          <button type="submit" class="btn btn-primary me-2">Insérer</button>
        </form>
      </div>
    </div>
</div>

@endsection

