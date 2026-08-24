<?php

namespace App\Livewire\AdminV2\Posts;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class Show extends Component
{
    public Post $post;

    public function mount(Post $post): void
    {
        $this->post = $post->load(['category', 'tags', 'author']);
    }

    public function render()
    {
        return view('livewire.admin-v2.posts.show');
    }
}
