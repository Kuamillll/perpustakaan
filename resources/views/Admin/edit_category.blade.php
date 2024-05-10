@extends('layouts.main')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Data</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form action="{{ url('proses-edit-category') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $category->id }}">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Edit Kategori</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Kategori</label>
                                    <input type="text" class="form-control" name="name" value="{{ $category->name }}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="col-12">
                    <button type="submit" class="btn btn-submit btn-primary">
                        Save
                    </button>
                    <a href="{{ url('category') }}" class="btn btn-secondary">Cancel</a> 
                </div>
                <br>
            </form>
        </div>
    </section>
    
</div>

@endsection
