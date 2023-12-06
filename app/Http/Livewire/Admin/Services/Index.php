<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Service;
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
    public $image;
    public $parent_id;
    public $import;

    public $readyToLoad = false;

    public $search;
    protected $queryString = ['search'];

    protected $paginationTheme = 'bootstrap';


    public Service $service;

    public function mount()
    {
        $this->service = new Service();

    }

    protected $rules = [
        'title' => 'required',
        'image' => 'nullable',
        'import' => 'nullable',
        'parent_id' => 'nullable',
    ];

    public function store()
    {
        $this->validate();
        $service = $this->service->query()->create([
            'title'    => $this->title ,
            'import'     => $this->import,
            'parent_id'     => $this->parent_id,
            'image' => $this->image ? uploadImage('services',$this->image) : null
        ]);
        $this->resetForm();

//        Log::createLog(auth()->user()->id,'insert','لگو '.$logo->title.' ایجاد شد');

        $this->emit('toast', 'success', 'رکورد با موفقیت ثبت شد');
    }

    public function resetForm()
    {
        $this->title = null;
        $this->image = null;
        $this->parent_id = null;
        $this->import = null;
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;

    }

    public function delete()
    {
        $logo = Service::find($this->deleteId);
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
        $services = $this->readyToLoad ? Service::where('title','LIKE','%'.$this->search.'%')->latest()->paginate(10):[];
        return view('livewire.admin.services.index',compact('services'));
    }
}
