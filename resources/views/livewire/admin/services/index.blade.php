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
                                                    <label for="exampleInputEmail111">عنوان خدمات:</label>
                                                    <input type="text" wire:model.lazy="title"
                                                           class="form-control" id="exampleInputEmail111">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail111">دسته والد:</label>
                                                    <select wire:model.lazy="parent_id" class="form-control">
                                                        <option value="">--انتخاب کنید--</option>
                                                        @foreach(\App\Models\Service::all() as $s)
                                                            <option value="{{$s->id}}">{{$s->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail111">مکان نمایش:</label>
                                                    <select wire:model.lazy="import" class="form-control">
                                                        <option value="1">خدمات اصلی</option>
                                                        <option value="2">سایر خدمات</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="file" class="form-control" id="image" wire:model="image">
                                                    <span class="mt-2 text-danger" wire:loading wire:target="image">درحال اپلود عکس ...</span>
                                                    <div wire:ignore id="progressbar" style="display: none"
                                                         class="progress mb-20">
                                                        <div class="progress-bar progress-bar-striped"
                                                             role="progressbar" style="width: 0%;"
                                                             aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%
                                                        </div>
                                                    </div>
                                                    @if($image)
                                                        <img src="{{$image->temporaryUrl()}}" class="form-control">
                                                    @endif
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
                                        <h4 class="card-title mb-2">لیست خدمات</h4>
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
                                                <th class="sorting_asc">عنوان خدمات</th>
                                                <th class="sorting">تصویر</th>
                                                <th class="sorting">دسته والد</th>
                                                <th class="sorting">مکان نمایش</th>
                                                <th class="sorting">عملیات</th>
                                            </tr>
                                            </thead>
                                            @if($readyToLoad)
                                                <tbody>

                                                @foreach($services as $service)
                                                    <tr role="row" class="odd">
                                                        <td>{{$service->title}}</td>
                                                        <td tabindex="0" class="sorting_1">
                                                            <img src="{{url($service->image)}}"
                                                                 style="width: 50px">
                                                        </td>
                                                        <td>{{$service->parent_id}}</td>
                                                        <td>{{$service->import}}</td>
                                                        <td>
                                                            <a href="{{route('service.edit',$service->id)}}"
                                                               class="action-icon">
                                                                <i class="zmdi zmdi-edit zmdi-custom"></i>
                                                            </a>
                                                            <a href="javascript:void(0);"
                                                               wire:click="deleteId({{$service->id}})"
                                                               data-toggle="modal"
                                                               data-target="#exampleModal"
                                                               class="action-icon">
                                                                <i class="zmdi zmdi-delete zmdi-custom"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                {{$services->links()}}
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
