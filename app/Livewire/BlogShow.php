<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.blog')]
class BlogShow extends Component
{
    public $blog;

    public function mount($slug)
    {
        $this->blog = Blog::where('slug', $slug)
            ->where('published_at', '<=', now())
            ->firstOrFail();
    }

    public function render()
    {
        return view('livewire.blog-show', [
            'blog' => $this->blog,
        ])->layout('components.layouts.blog', [
            'meta_title' => $this->blog->meta_title ?? $this->blog->title,
            'meta_description' => $this->blog->meta_description,
            'meta_keywords' => $this->blog->meta_keywords,
            'og_image' => $this->blog->cover_image ? asset('storage/' . $this->blog->cover_image) : null,
        ]);
    }
}