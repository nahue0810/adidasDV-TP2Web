
<header id="background" class="col-12">
    <nav class="navbar navbar-expand-lg navbar-body">
        <div class="container">
            <a href="index.php"><img src="img/estilo/if_adidas_23043.png" alt="adidas" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                   @foreach($navbar as $nombre => $url)
                    <li class="nav-item">
                        <a class="nav-link" href='{{ route($url) }}'>{{$nombre}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>