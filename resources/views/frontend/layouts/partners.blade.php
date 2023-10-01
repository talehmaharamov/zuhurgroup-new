<section class="logos">
    <div class="container">
        <div class="row">
            @foreach($partners as $partner)
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0s">
                    <figure>
                        <img src="{{ asset($partner->photo) }}">
                        <h6>{{ $partner->alt }}</h6>
                    </figure>
                </div>
            @endforeach
        </div>
    </div>
</section>
