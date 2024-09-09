<div>
    <div class="section-title">
        <h2>Our</h2>
        <p>Artists</p>
    </div>

    <div class="row">
        @foreach($artists as $artist)
            <div class="col-lg-4 mt-4 mt-lg-0">
                <a href="{{ $artist->spotify_url }}" target="_blank" rel="noreferrer">
                    <div class="box" data-aos="zoom-in" data-aos-delay="{{ 100 * $loop->iteration }}">
                        <span>{{ str_pad($artist->order, 2, '0', STR_PAD_LEFT) }}</span>
                        <h4>{{ $artist->name }}</h4>
                        <p>{{ $artist->description }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>