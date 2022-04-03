<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
    <a href="" class="navbar-brand d-block d-lg-none">
        <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Safety</span>First</h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
        <div class="navbar-nav mr-auto py-0">
            <a href="{{ route('welcome') }}" class="nav-item nav-link {{ Request::route()->getName() =='welcome'?'active':'' }}">Home</a>
            <a href="{{ route('about-us') }}" class="nav-item nav-link {{ Request::route()->getName() =='about-us'?'active':'' }}">About</a>
            <a href="{{ route('service') }}" class="nav-item nav-link {{ Request::route()->getName() =='service'?'active':'' }}">Service</a>
            <a href="{{ route('pricing') }}" class="nav-item nav-link {{ Request::route()->getName() =='pricing'?'active':'' }}">Price</a>
            <a href="{{ route('welcome') }}" class="nav-item nav-link">Contact</a>
        </div>
        <a href="" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Sign In</a>
    </div>
</nav>
