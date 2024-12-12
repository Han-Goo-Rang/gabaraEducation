<?php

namespace App\Livewire;
use App\Models\News;
use App\Models\Category;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class NewsList extends Component
{
    use WithPagination;



    #[Url()]
    public $sort = 'desc';

    public function setSort($sort)
    {
        $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
    }

    #[Computed()]
    public function News()
    {
        return News::published()
        ->with('author')
        ->orderBy('published_at', $this->sort)
        ->paginate(3);
    }

    public function render()
    {
        return view('livewire.news-list');
    }
}
