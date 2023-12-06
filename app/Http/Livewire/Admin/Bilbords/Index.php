<?php

namespace App\Http\Livewire\Admin\Bilbords;

use App\Models\Bilboard\Price;
use App\Models\City;
use App\Models\Portfolio;
use App\Models\Province;
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

    public $service_id;
    public $province_id;
    public $city_id;
    public $address;
    public $width;
    public $height;
    public $meterage;
    public $price;


    public $readyToLoad = false;

    public $search;
    protected $queryString = ['search'];

    protected $paginationTheme = 'bootstrap';


    public Price $bilboard;

    public function mount()
    {
        $this->bilboard = new Price();

    }

    protected $rules = [
        'service_id' => 'required',
        'province_id' => 'required',
        'city_id' => 'required',
        'address' => 'required',
        'width' => 'nullable',
        'height' => 'nullable',
        'meterage' => 'nullable',
        'price' => 'nullable',

    ];

    public function store()
    {
        $this->validate();
        $item = $this->bilboard->query()->create([
            'service_id'    => $this->service_id ,
            'province_id'    => $this->province_id ,
            'city_id'    => $this->city_id ,
            'address'    => $this->address ,
            'width'    => $this->width ,
            'height'    => $this->height ,
            'meterage'    => $this->meterage ,
            'price'    => $this->price
        ]);
        $this->resetForm();

//        Log::createLog(auth()->user()->id,'insert','لگو '.$logo->title.' ایجاد شد');

        $this->emit('toast', 'success', 'رکورد با موفقیت ثبت شد');
    }

    public function resetForm()
    {
        $this->service_id = null;
        $this->province_id = null;
        $this->city_id = null;
        $this->address = null;
        $this->width = null;
        $this->height = null;
        $this->meterage = null;
        $this->price = null;
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;

    }

    public function delete()
    {
        $logo = Price::find($this->deleteId);
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
        $services = Service::where('parent_id',3)->get();
        $provinces = Province::all();
        $cities = City::where('province_id',$this->province_id)->get();
        $prices = $this->readyToLoad ? Price::where('address','LIKE','%'.$this->search.'%')->latest()->paginate(10):[];
        return view('livewire.admin.bilbords.index',compact('prices','services','provinces','cities'));
    }
}
