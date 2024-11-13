<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @param  array<string>  $categories
     */
    public function __construct(
        public array $categories,
        public string $title,
        public string $user,
        public string $date,
        public string|null $src = null,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-card', [
            'categories' => $this->categories,
            'title' => $this->title,
            'src'=> $this->src,
            'user' => $this->user,
            'date' => $this->date,
        ]);
    }
}
