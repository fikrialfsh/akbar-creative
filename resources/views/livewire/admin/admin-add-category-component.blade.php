<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>

    <div class="container" style="padding:30px 0;"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                            Tambah Kategori
                            </div>
                            <div class="col-md-6">
                            <a href="{{route('admin.categories')}}" class="btn btn-success pull-right">Semua Kategori</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="storeCategory">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nama Kategori</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Category Name" class="form-control input-md" wire:model="name" wire:keyup="generateslug"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Slug</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Slug Name" class="form-control input-md" wire:model="slug"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>