<div>
    <article class="max-w-5xl mx-auto">
        @if($blog->cover_image)
            <img src="{{ asset('storage/' . $blog->cover_image) }}" alt="{{ $blog->title }}" class="w-full h-auto mb-6 rounded-lg shadow-md">
        @endif
        <h1 class="text-3xl font-bold mb-4">{{ $blog->title }}</h1>
        <p class="text-gray-600 mb-4">Published on {{ $blog->published_at->format('F j, Y') }} by Snow 'n' Stuff</p>
        <div class="prose max-w-none">
            {!! $blog->content !!}
        </div>
    </article>
    <a href="{{ route('blog.index') }}" class="mt-8 inline-block text-blue-600 hover:underline">Back to all posts</a>
</div>