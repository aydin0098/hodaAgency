<?php

namespace App\Http\Livewire\Admin\Portfolios;

use App\Models\Portfolio;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;
    use AuthorizesRequests;

    public $image;
    public $category_id;


    public $readyToLoad = false;

    public $search;
    protected $queryString = ['search'];

    protected $paginationTheme = 'bootstrap';


    public Portfolio $portfolio;

    public function mount()
    {
        $this->portfolio = new Portfolio();

    }

    protected $rules = [
        'category_id' => 'required',
        'image' => 'required',

    ];

    public function store()
    {
        $this->validate();
        $item = $this->portfolio->query()->create([
            'category_id'    => $this->category_id ,
            'image' => uploadImage('portfolios',$this->image)
        ]);
        $this->resetForm();

//        Log::createLog(auth()->user()->id,'insert','لگو '.$logo->title.' ایجاد شد');

        $this->emit('toast', 'success', 'رکورد با موفقیت ثبت شد');
    }

    public function resetForm()
    {
        $this->category_id = null;
        $this->image = null;
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;

    }

    public function delete()
    {
        $logo = Portfolio::find($this->deleteId);
        $logo->delete();
        $this->emit('toast','success','ایتم مورد نظر حذف منتقل شد');

    }




    public function loadLogo()
    {
        $this->readyToLoad = true;

    }

    public function render()
    {
//        $this->authorize('setting-footer-logo',FooterLogo::class);
        $portfolios = $this->readyToLoad ? Portfolio::where('image','LIKE','%'.$this->search.'%')->latest()->paginate(10):[];
        return view('livewire.admin.portfolios.index',compact('portfolios'));
    }
}
