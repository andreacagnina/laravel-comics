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
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 p-2 d-flex flex-wrap justify-content-center mt-3">
                        @foreach ($comics as $comic)
                            <div class="col-2 d-flex">
                                <div class="card border-0 bg-transparent w-100 mx-3">
                                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}"
                                        class="card-img-top img-fluid">
                                    <div>
                                        <h5 class="text-white text-center pt-2">{{ $comic['series'] }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="content text-center">
                            <button class="button">Load more</button>
                        </div>
                    </div>
                </div>
            </div>
</section>
<section class="section-two">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content justify-content-between px-5">
                    <ul class="d-flex  align-items-center my-0 justify-content-around text-center text-nowrap">
                        <li><a href=""><img
                                    src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}"
                                    alt="">digital
                                comics</a></li>
                        <li><a href=""><img
                                    src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}"
                                    alt="">dc
                                merchandise</a></li>
                        <li><a href=""><img
                                    src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}"
                                    alt="">subscription</a></li>
                        <li><a href=""><img
                                    src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}"
                                    alt="">comic
                                shop locator</a></li>
                        <li><a href=""><img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}"
                                    alt="">dc power
                                visa</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
