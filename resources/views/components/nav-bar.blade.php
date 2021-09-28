<div>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href={{route('start-page')}}>
            <img src="{{asset('images/logoAPI.svg')}}" width="60" height="60" class="d-inline-block align-bottom"
                 alt="{{ __('Solar System API') }}" class="logo-image">
            {{ __('Solar System API') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href={{route('register')}}>Register<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
</div>
