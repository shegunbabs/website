<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use \Canvas\Models\Post;

new
#[Layout('layouts.website')]
#[\Livewire\Attributes\Title('Welcome to shegunbabs.com')]
class extends Component {

    public $slug;

    public function mount()
    {
    }

    public function with()
    {
        /** Post $post */
        $post = Post::with('user', 'tags')->where('slug', $this->slug)->first();
        event(new Canvas\Events\PostViewed($post));
        return [
            'post' => $post,
        ];
    }
}
?>

<div class="mx-auto max-w-2xl">
    @section('scripts')
        <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.8.0/build/styles/github.min.css">
    @endsection
    {!! $post->body !!}
</div>
