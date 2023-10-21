<section class="logos">
    <div class="container">
        <div>
               <div class="slick-slider">
                   @foreach($partners as $partner)
                <div>
                    <div class='px-2'  data-wow-delay="0s">
                    <figure>
                        <img  src="{{ asset($partner->photo) }}">
                        <h6>{{ $partner->alt }}</h6>
                    </figure>
                </div>
                </div>
            @endforeach
                </div>
        </div>
    </div>
</section>
