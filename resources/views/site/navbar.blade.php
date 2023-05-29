<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    @component('site.menu')
    @endcomponent
    <div class="container">
        <a class="navbar-brand" href="http://127.0.0.1:8000">
            &#9842
            Descarte Aqui
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/login">Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/register">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
