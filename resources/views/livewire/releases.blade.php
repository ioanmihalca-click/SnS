<div>
        <div class="section-title">
          <h2>Releases</h2>
          <p>Check Our Releases</p>
        </div>

    <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
        @foreach($releases as $release)
            <div class="overflow-hidden ">
                <div class="p-6">
                    {{-- <h3 class="mb-4 text-xl text-center font-bold text-red-800">{{ $release->title }}</h3> --}}
                    
                    <div class="mb-4">
                        {!! $release->spotify_embed_code !!}
                    </div>

                    @if($release->description)
                        <p class="p-3 mt-4 text-gray-300 bg-gray-800 rounded-md">{{ $release->description }}</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>