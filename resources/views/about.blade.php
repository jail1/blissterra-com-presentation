<div class="row_1 bg-1" id="about">
    <div class="container">
        <h2 id="fly-left">art <span>of</span> pixels</h2>
        <h5>From the single pixels to your website. How it's made?</h5>

        <div class="row">

            @foreach($slogans as $slogan)
                @include('partials.slogan',$slogan)
            @endforeach


        </div>
    </div>
</div>