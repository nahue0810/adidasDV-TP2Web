@extends("web.layout")


@section("contenido")
<section id="Productos">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-left">SUCURSALES</h1>
                </div>
            </div>
            
            <article class="card-columns">
               <?php
                use adidasDV\Modelos\Sucursal;
                
                $sucursales = Sucursal::all();
                
                foreach($sucursales  as $sucursal):
                ?>
                       
                    <div class="card border-default">
                       <div class="card-body">
                            <img src="<?= $sucursal->imagen; ?>" alt="" class="img-fluid">
                            <h4 class="card-title"><?= ucfirst($sucursal->nombre); ?></h4>
                          <!--  <p><?= $sucursal->descripcion; ?></p>-->
                        </div>
                    </div>                
                
                <?php
                endforeach;
                
                ?>
            </article>
        </div>
    </section>


@endsection