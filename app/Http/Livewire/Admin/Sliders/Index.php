<?php

namespace App\Http\Livewire\Admin\Sliders;

use App\Models\Slider;
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
    public $title_text;
    public $description_text;

    public $readyToLoad = false;

    public $search;
    protected $queryString = ['search'];

    protected $paginationTheme = 'bootstrap';


    public Slider $slider;

    public function mount()
    {
        $this->slider = new Slider();

    }

    protected $rules = [
        'title' => 'nullable',
        'image' => 'required',
        'title_text' => 'nullable',
        'description_text' => 'nullable',
    ];

    public function store()
    {
        $this->validate();
        $slider = $this->slider->query()->create([
            'title'    => $this->title ,
            'title_text'     => $this->title_text,
            'description_text'     => $this->description_text,
            'image' => uploadImage('sliders',$this->image)
        ]);
        $this->resetForm();

//        Log::createLog(auth()->user()->id,'insert','لگو '.$logo->title.' ایجاد شد');

        $this->emit('toast', 'success', 'رکورد با موفقیت ثبت شد');
    }

    public function resetForm()
    {
        $this->title = null;
        $this->image = null;
        $this->title_text = null;
        $this->description_text = null;
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;

    }

    public function delete()
    {
        $logo = Slider::find($this->deleteId);
        $logo->delete();
        $this->emit('toast','success','ایتم مورد نظر به سطل زباله منتقل شد');

    }




    public function loadLogo()
    {
        $this->readyToLoad = true;

    }

    public function render()
    {
//        $this->authorize('setting-footer-logo',FooterLogo::class);
        $sliders = $this->readyToLoad ? Slider::where('title','LIKE','%'.$this->search.'%')->latest()->paginate(10):[];
        return view('livewire.admin.sliders.index',compact('sliders'));
    }
}
