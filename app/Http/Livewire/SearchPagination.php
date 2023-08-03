<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class SearchPagination extends Component
{
    use WithPagination;
    public $searchTerm;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        return view('livewire.search-pagination',[
            'users' => User::where('name','like', $searchTerm)->paginate(3),
            'my'=>'karim'

        ]);
    }
}
