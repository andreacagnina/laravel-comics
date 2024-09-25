<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-around">
                <div class="content">
                    <a href="#">
                        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="">
                    </a>
                </div>
                <div class="content d-flex align-item-center">
                    <ul class="d-flex my-0">
                        <li class="fw-bold"><a href="">characters</a></li>
                        <li class="fw-bold {{ Route::currentRouteName() === 'homepage' ? 'active' : ' ?>' }}"><a
                                href="{{ route('homepage') }}">comics</a></li>
                        <li class="fw-bold"><a href="">movie</a></li>
                        <li class="fw-bold"><a href="">tv</a></li>
                        <li class="fw-bold"><a href="">games</a></li>
                        <li class="fw-bold"><a href="">collectibles</a></li>
                        <li class="fw-bold"><a href="">videos</a></li>
                        <li class="fw-bold"><a href="">fans</a></li>
                        <li class="fw-bold"><a href="">news</a></li>
                        <li class="fw-bold"><a href="">shop</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron">
    <div class="container-fluid jumbo">
        <div class="row">
            <div class="col-12 p-0">
                <div class="content">

                </div>
            </div>
        </div>
    </div>
    <Button class="button abs">CURRENT SERIES</Button>
</div>
