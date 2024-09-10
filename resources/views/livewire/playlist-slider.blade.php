<div>
<!-- Swiper Slider Container -->
    <div class="w-3/4 mx-auto swiper-container">
      <div class="swiper-wrapper">

        @foreach($playlists as $playlist)
            <div class="swiper-slide">
                {!! $playlist->spotify_embed_url !!}
            </div>
        @endforeach

        </div>
        </div>
        
        <!-- Add Pagination -->
<div class="swiper-pagination"></div>
<!-- Add Navigation Arrows -->
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>

</div>
   