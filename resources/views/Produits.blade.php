    @extends('Master_page')
    @section('title','Produits')
    @section('content')
    <div class="container mt-5">
        <h2>Liste des Prduits de la catégorie  {{ $categorie }}</h2>
        
        <div class="row">
            @foreach ($products as $item )
                <div class="col-md-4 p-2">
                    <div class="card">
                        <img src="{{ asset('img/' . $item['image']) }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item["nom"] }}</h5>
                            <p class="card-text">{{ $item["prix"] }} dh</p>
                            <button class="btn btn-warning">Add to Cart</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endsection

    {{-- <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}

