<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class AdminCtegoryComponent extends Component
{
    use WithPagination;

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('message','Category has been deleted successfuly!');
    }
    public function render()
    {
        $categories= Category::paginate(5);
        return view('livewire.admin.admin-ctegory-component',['categories'=>$categories])->layout('layouts.base');
    }
}
