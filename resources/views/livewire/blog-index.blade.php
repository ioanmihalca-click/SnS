<div class="blog-index">
    <div class="mb-6">
        <input wire:model.debounce.300ms="search" type="text" placeholder="Search blogs..." 
               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($blogs as $blog)
            <article class="bg-black
             rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:transform hover:-translate-y-1 hover:shadow-lg">
                @if($blog->cover_image)
                    <img src="{{ asset('storage/' . $blog->cover_image) }}" class="w-full h-48 object-cover" alt="{{ $blog->title }}">
                @else
                    <div class="w-full h-48 bg-gray-200"></div>
                @endif
                <div class="p-4 flex flex-col h-64">
                    <h2 class="text-xl font-semibold mb-2 text-gray-800 hover:text-yellow-600 transition-colors duration-300">
                        <a href="{{ route('blog.show', $blog->slug) }}">
                            {{ $blog->title }}
                        </a>
                    </h2>
                    <p class="text-sm text-gray-600 mb-2">Published on {{ $blog->published_at->format('F j, Y') }}</p>
                    <div class="text-gray-700 mb-4 flex-grow overflow-hidden">
                        {!! Str::limit(strip_tags($blog->content), 100) !!}
                    </div>
                    <a href="{{ route('blog.show', $blog->slug) }}" class="mt-auto inline-block px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition-colors duration-300">
                        Read more
                    </a>
                </div>
            </article>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $blogs->links() }}
    </div>

  
</div>