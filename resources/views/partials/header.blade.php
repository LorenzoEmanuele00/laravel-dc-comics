<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand text-center m-0" href="{{ route('home') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo" class="w-50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="{{ route('comics.index') }}">Comics</a>
                    <a class="nav-link" href="{{ route('comics.create') }}">Nuovo Comic</a>
                </div>
            </div>
        </div>
    </nav>
</header>