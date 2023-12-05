<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;
    use AuthorizesRequests;

    public $title;
    public $readyToLoad = false;

    public $search;
    protected $queryString = ['search'];

    protected $paginationTheme = 'bootstrap';


    public Category $category;

    public function mount()
    {
        $this->category = new Category();

    }

    protected $rules = [
        'title' => 'required',
    ];

    public function store()
    {
        $this->validate();
        $category = $this->category->query()->create([
            'title'    => $this->title ,
        ]);
        $this->resetForm();

//        Log::createLog(auth()->user()->id,'insert','لگو '.$logo->title.' ایجاد شد');

        $this->emit('toast', 'success', 'رکورد با موفقیت ثبت شد');
    }

    public function resetForm()
    {
        $this->title = null;
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;

    }

    public function delete()
    {
        $cat = Category::find($this->deleteId);
        $cat->delete();
        $this->emit('toast','success','ایتم مورد نظر به سطل زباله منتقل شد');

    }




    public function loadLogo()
    {
        $this->readyToLoad = true;

    }

    public function render()
    {
//        $this->authorize('setting-footer-logo',FooterLogo::class);
        $categories = $this->readyToLoad ? Category::where('title','LIKE','%'.$this->search.'%')->latest()->paginate(10):[];
        return view('livewire.admin.categories.index',compact('categories'));
    }
}
