<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/logo.jpg') }}" width="130" alt="">
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">ACCUEIL <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">NOUVELLES</a></li>
                <li class="login-btn">
                    <a class="btn btn-primary my-2 my-sm-0" href="#">S'IDENTIFIER</a>
                </li>
            </ul>
        </div>
    </div> <!-- .container -->
</nav> <!-- navbar -->