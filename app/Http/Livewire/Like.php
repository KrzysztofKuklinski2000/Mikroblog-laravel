<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Like extends Component
{
    public $post;

    public function like()
    {
        $this->post->usersThatLike()->attach(auth()->user()->id);
        $this->post->save();
    }

    public function undoLike()
    {
        $this->post->usersThatLike()->detach(auth()->user()->id);
        $this->post->save();
    }

    public function dislike()
    {
        $this->post->usersThatDisLike()->attach(auth()->user()->id);
        $this->post->save();
    }

    public function undoDislike()
    {
        $this->post->usersThatDisLike()->detach(auth()->user()->id);
        $this->post->save();
    }

    public function render()
    {
        return view('livewire.like');
    }
}
