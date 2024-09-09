<div>
        <div class="section-title">
          <h2>Releases</h2>
          <p>Check Our Releases</p>
        </div>

    <div class="grid grid-cols-1 md:grid-cols-4  gap-8">
        @foreach($releases as $release)
            <div class="bg-gray-900 rounded-lg overflow-hidden shadow-lg">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-4 text-red-800">{{ $release->title }}</h3>
                    
                    <div class="mb-4">
                        {!! $release->spotify_embed_code !!}
                    </div>

                    @if($release->description)
                        <p class="mt-4 bg-gray-800 p-3 rounded-md text-gray-300">{{ $release->description }}</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>