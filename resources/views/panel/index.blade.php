@extends("panel.layout")

@section("contenido")

<section id="Productos">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h1 class="h3">Bienvenidos al panel de control!</h1>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-12">
                <p class="text-justified">Aqui podra ver el listado de todos los articulos que se encuentran en nuestra web a nuestra web.<br> Una vez acceda a listado va a poder agregar un nuevo producto, modificar un articulo o bien eleminar el articulo de ser necesarios.</p>                
                <a class="btn btn-primary" href="{{ route('articulos.index') }}">Listado de articulos</a>
            </div>
        </div>
        
    </div>
</section>
@endsection