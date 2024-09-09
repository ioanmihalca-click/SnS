<div class="latest-articles">
    @if($latestArticles->isNotEmpty())
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($latestArticles as $article)
                <div class="bg-black bg-opacity-50 rounded-lg overflow-hidden">
                    @if($article->cover_image)
                        <img src="{{ asset('storage/' . $article->cover_image) }}" alt="{{ $article->title }}" class="w-full h-32 object-cover">
                    @else
                        <div class="w-full h-32 bg-gray-700"></div>
                    @endif
                    <div class="p-3">
                        <h4 class="text-lg font-semibold mb-1 text-red-800">
                            <a href="{{ route('blog.show', $article->slug) }}" class="hover:text-red-600 transition duration-300">
                                {{ Str::limit($article->title, 40) }}
                            </a>
                        </h4>
                        <p class="text-sm text-gray-300 mb-2">
                            {{ $article->published_at->format('M j, Y') }}
                        </p>
                        <a href="{{ route('blog.show', $article->slug) }}" class="text-red-800 text-sm hover:text-red-600 transition duration-300">
                            Read more
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center text-gray-400">No articles available at the moment.</p>
    @endif
</div>