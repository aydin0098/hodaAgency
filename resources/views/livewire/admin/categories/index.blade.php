@section('title','دسته بندی ها')

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
                                                <label for="exampleInputEmail111">عنوان دسته:</label>
                                                <input type="text" wire:model.lazy="title"
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
                                    <h4 class="card-title mb-2">لیست دسته ها</h4>
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
                                            <th class="sorting_asc">عنوان دسته</th>
                                            <th class="sorting">عملیات</th>
                                        </tr>
                                        </thead>
                                        @if($readyToLoad)
                                            <tbody>

                                            @foreach($categories as $cat)
                                                <tr role="row" class="odd">
                                                    <td>{{$cat->title}}</td>
                                                    <td>
                                                        <a href="{{route('category.edit',$cat->id)}}"
                                                           class="action-icon">
                                                            <i class="zmdi zmdi-edit zmdi-custom"></i>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                           wire:click="deleteId({{$cat->id}})"
                                                           data-toggle="modal"
                                                           data-target="#exampleModal"
                                                           class="action-icon">
                                                            <i class="zmdi zmdi-delete zmdi-custom"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            {{$categories->links()}}
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
