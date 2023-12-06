@section('title','خدمات')

<div>
    <div class="col-12 box-margin" wire:init="loadLogo">
        <div class="card">
            <div class="card-body pb-0">
                <div class="d-sm-flex">
                    <div class="mail-body--area">
                        <div class="row">
                            <div class="col-xl-4 box-margin height-card">
                                <div class="card card-body">
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12">
                                            @include('errors.error')
                                            <form wire:submit.prevent="store" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail111">نوع سازه:</label>
                                                    <select wire:model.lazy="service_id" class="form-control">
                                                        <option value="">--انتخاب کنید--</option>
                                                        @foreach($services as $s)
                                                            <option value="{{$s->id}}">{{$s->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail111">استان:</label>
                                                    <select wire:model.lazy="province_id" class="form-control">
                                                        <option value="">--انتخاب کنید--</option>
                                                        @foreach($provinces as $s)
                                                            <option value="{{$s->id}}">{{$s->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail111">شهر:</label>
                                                    <select wire:model.lazy="city_id" class="form-control">
                                                        <option value="">--انتخاب کنید--</option>
                                                        @foreach($cities as $s)
                                                            <option value="{{$s->id}}">{{$s->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail111">آدرس:</label>
                                                    <input type="text" wire:model.lazy="address"
                                                           class="form-control" id="exampleInputEmail111">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail111">طول:</label>
                                                    <input type="text" wire:model.lazy="width"
                                                           class="form-control" id="exampleInputEmail111">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail111">ارتفاع:</label>
                                                    <input type="text" wire:model.lazy="height"
                                                           class="form-control" id="exampleInputEmail111">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail111">متراژ:</label>
                                                    <input type="text" wire:model.lazy="meterage"
                                                           class="form-control" id="exampleInputEmail111">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail111">قیمت:</label>
                                                    <input type="text" wire:model.lazy="price"
                                                           class="form-control" id="exampleInputEmail111">
                                                </div>
                                                <button type="submit"
                                                        class="btn btn-outline-success mb-2 mr-2" style="float:left;">
                                                    <i class="fa fa-save"></i> ذخیره
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-8 box-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-2">لیست قیمت رسانه محیطی</h4>
                                        <hr>
                                    </div>
                                    <div class="col-sm-12">
                                        <div id="datatable-buttons_filter" class="dataTables_filter">
                                            <div class="form-group">
                                                <input wire:model="search" type="search" class="form-control mb-2 w-40"
                                                       placeholder="جستجو...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="datatable-buttons"
                                               class="table table-striped dt-responsive nowrap w-100" style="width: 686px;">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc">نوع سازه</th>
                                                <th class="sorting">ادرس</th>
                                                <th class="sorting">استان</th>
                                                <th class="sorting">شهر</th>
                                                <th class="sorting">طول</th>
                                                <th class="sorting">عرض</th>
                                                <th class="sorting">متراژ</th>
                                                <th class="sorting">قیمت</th>
                                                <th class="sorting">عملیات</th>
                                            </tr>
                                            </thead>
                                            @if($readyToLoad)
                                                <tbody>

                                                @foreach($prices as $p)
                                                    <tr role="row" class="odd">
                                                        <td>{{$p->services->title}}</td>
                                                        <td>{{$p->address}}</td>
                                                        <td>{{$p->provinces->name}}</td>
                                                        <td>{{$p->cities->name}}</td>
                                                        <td>{{$p->width}}</td>
                                                        <td>{{$p->height}}</td>
                                                        <td>{{$p->meterage}}</td>
                                                        <td>{{$p->price}}</td>
                                                        <td>
                                                            <a href="{{route('price.edit',$p->id)}}"
                                                               class="action-icon">
                                                                <i class="zmdi zmdi-edit zmdi-custom"></i>
                                                            </a>
                                                            <a href="javascript:void(0);"
                                                               wire:click="deleteId({{$p->id}})"
                                                               data-toggle="modal"
                                                               data-target="#exampleModal"
                                                               class="action-icon">
                                                                <i class="zmdi zmdi-delete zmdi-custom"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                {{$prices->links()}}
                                                </tbody>
                                            @else
                                                <div class="alert alert-warning">
                                                    در حال بارگزاری اطلاعات ...
                                                </div>
                                            @endif
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end card body-->
                    {{--                @include('livewire.admin.include.modal')--}}
                </div> <!-- end card -->
            </div>
        </div>
    </div>
</div>



@section('scripts')
    <script>
        document.addEventListener('livewire:load', () => {
            let progressSection = document.querySelector('#progressbar');
            let progressBar = document.querySelector('.progress-bar');

            document.addEventListener('livewire-upload-start', () => {
                console.log('شروع بارگزاری');
                progressSection.style.display = 'flex';
            });
            document.addEventListener('livewire-upload-finish', () => {
                console.log('اتمام آپلود');
                progressSection.style.display = 'none';
            });
            document.addEventListener('livewire-upload-error', () => {
                console.log('خطا در بارگزاری');
                progressSection.style.display = 'none';
            });
            document.addEventListener('livewire-upload-progress', (event) => {
                console.log(`${event.detail.progress}%`);
                progressBar.style.width = `${event.detail.progress}%`;
                progressBar.textContent = `${event.detail.progress}%`;
            });

        })
    </script>
@endsection
