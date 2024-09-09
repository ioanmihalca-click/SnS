<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach($blogs as $blog)
        <article class="bg-black bg-opacity-50 rounded-lg overflow-hidden shadow-lg transition duration-300 hover:shadow-2xl">
            @if($blog->cover_image)
                <img src="{{ asset('storage/' . $blog->cover_image) }}" alt="{{ $blog->title }}" class="w-full h-48 object-cover">
            @else
                <div class="w-full h-48 bg-gray-800"></div>
            @endif
            <div class="p-6">
                <h2 class="text-xl font-bold mb-2 line-clamp-1 text-red-800 hover:text-red-600 transition duration-300">
                    <a href="{{ route('blog.show', $blog->slug) }}">
                        {{ $blog->title }}
                    </a>
                </h2>
                <p class="text-gray-400 text-sm mb-4">
                    Published on {{ $blog->published_at->format('F j, Y') }}
                </p>
                <div class="text-gray-300 mb-4 line-clamp-3">
                    {!! strip_tags($blog->content) !!}
                </div>
                <a href="{{ route('blog.show', $blog->slug) }}" class="inline-block px-4 py-2 bg-red-800 text-white rounded hover:bg-red-700 transition duration-300">
                    Read more
                </a>
            </div>
        </article>
    @endforeach
</div>