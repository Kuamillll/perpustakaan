@extends('layouts.main')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form action="{{ url('proses-tambah-data') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data</h3>

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
                                    <label class="form-label">Cover</label>
                                    <input type="file" class="form-control" name="cover">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">ISBN</label>
                                    <input type="number" class="form-control" name="isbn">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Judul</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Penulis</label>
                                    <input type="text" class="form-control" name="author">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Penerbit</label>
                                    <input type="text" class="form-control" name="publisher">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tahun terbit</label>
                                    <input type="number" class="form-control" name="public_year">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="5" name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Halaman</label>
                                    <input type="number" class="form-control" name="page">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Kategori</label>
                                    <select name="category" class="form-control custom-select">
                                        @foreach($categories as $category)
                                        <option value="{{ $category['id'] }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Rak</label>
                                    <select name="bookshelf" class="form-control custom-select">
                                        @foreach($bookshelves as $bookshelf)
                                        <option value="{{ $bookshelf['id'] }}">{{ $bookshelf['bookshelf'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="col-12">
                    <button type="submit" class="btn btn-submit btn-primary">
                        Create
                    </button>
                </div>
                <br>
            </form>
        </div>
    </section>
    
</div>

@endsection