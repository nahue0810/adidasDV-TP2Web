@extends("panel.layout")

@section("contenido")

<section id="Productos">
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1 class="h3">Nuevo articulo</h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        @if(isset($articulo))
                            <form action="{{ route('articulos.update',$articulo->id) }}" method="POST" enctype="multipart/form-data">
                                @method("PUT")
                                @else
                            <form action="{{ route('articulos.store') }}" method="POST" enctype="multipart/form-data">
                                @endif
                                @csrf

                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                @if(isset($articulo))
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre" value="{{ $articulo->nombre }}">
                                @else
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre" value="{{ old('nombre') }}">
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="precio">Tipo</label>
                                <select class="form-contro w-100" name="id_tipo_articulo">
                                    <option selected>Seleccione el tipo</option>
                                    @foreach($tipos as $id => $nombre)
                                      @if(isset($articulo) && $id == $articulo->id_tipo_articulo)
                                         <option value="{{ $id }}" selected>{{ $nombre }}</option>
                                      @else
                                         <option value="{{ $id }}">{{ $nombre }}</option>
                                      @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="input-group my-3">
                                <label class="w-100">Imagen</label>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="imagen" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Seleccione su archivo</label>
                                    </div>
                            </div>
                            @isset($articulo)
                              <div class="row">
                                <div class="col-12">
                                    <img src="{{ $articulo->imagen }}" alt="" width="150">
                                </div>
                              </div>
                            @endisset>


                            <div class="form-group mt-4">

                                <button type="submit" class="btn btn-primary">Cargar</button>
                            </div>

                        </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>   
@endsection