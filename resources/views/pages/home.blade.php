@extends('layouts.app')

@section('content')
<main>
        <section id="home-banner">
            <div class="inner-wrap">
                <div id="left-floater" class="text-white text-center">
                    <h2>I</h2>
                    <i class="fa fa-heartbeat" aria-hidden="true"></i>
                    <h2>CODE</h2>
                </div>
            </div>
        </section>
        <section id="home-stats" class="m-5">
            <blockquote class="blockquote text-center pt-5 mb-5">
                <p class="mb-0">Creativity is the way I share my soul with the world.</p>
                <footer class="blockquote-footer">Brene Brown</footer>
            </blockquote>
            <div class="container text-center my-5 pt-5">
                <div class="row">
                    <div class="col-sm">
                        <i class="fa fa-code fa-5x" aria-hidden="true"></i>
                        <hr />
                        <h3>10+</h3>
                        <h4>Years of developing</h4>
                    </div>
                    <div class="col-sm">
                        <i class="fa fa-check-square-o fa-5x" aria-hidden="true"></i>
                        <hr />
                        <h3>30+</h3>
                        <h4>Websites developed</h4>
                    </div>
                    <div class="col-sm">
                        <i class="fa fa-heart-o fa-5x" aria-hidden="true"></i>
                        <hr />
                        <h3>100+</h3>
                        <h4>Hours donated to charity</h4>
                    </div>
                </div>
            </div>
        </section>
        <section id="home-sub-banner">
            <h2 class="text-white text-center">Keep moving forward...</h2>
        </section>
    </main>
@endsection