<nav class="navbar navbar-expand-lg sticky-top navbar-bg" data-bs-theme="light">
    <div class="container">
        <h3 class="navbar-brand" href="#">AFIFFUDIN</h3>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">ABOUT ME</a>
                <a class="nav-link" href="{{ url('resume') }}">RESUME</a>
                <a class="nav-link" href="{{ url('project') }}">PROJECT</a>
                <a class="nav-link" href="{{ url('contact') }}">CONTACT</a>
            </div>
        </div>
    </div>
</nav>
