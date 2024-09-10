<div>
 

        <div class="section-title">
          <h2>Photos</h2>
          <p>Some photos of Our Artists</p>
        </div>
         


        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

        @foreach($photos as $photo)
           <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
                <a href="{{ asset('storage/' . $photo->image_path) }}" class="gallery-lightbox" data-gall="gallery-item">
                    <img src="{{ asset('storage/' . $photo->image_path) }}" alt="{{ $photo->title }}" class="img-fluid">
              </a>
            </div>
          </div>
        @endforeach

    </div>
    </div>

    <div class="mt-8">
        {{ $photos->links() }}
    </div>

</div>