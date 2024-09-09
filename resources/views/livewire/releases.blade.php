<div>
        <div class="section-title">
          <h2>Releases</h2>
          <p>Check Our Releases</p>
        </div>

    @foreach($releases as $release)
        <div class="mb-8">
            <h2 class="text-xl font-bold mb-2">{{ $release->title }}</h2>

            {!! $release->spotify_embed_code !!}

            @if($release->description)
                <p class="mt-2 bg-gray-700 p-2 rounded-md">{{ $release->description }}</p>
            @endif
        </div>
    @endforeach
</div>