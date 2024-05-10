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
        @php
            $cover = "default.png";
        @endphp
        @if($book->cover != NULL)
        @php
            $cover = $book->cover;
        @endphp
        @endif
            <form action="{{ url('proses-edit-data') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $book->id }}">
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
                                    <input type="file" class="form-control" name="cover" value="{{ $book->cover }}" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">ISBN</label>
                                    <input type="number" class="form-control" name="isbn" value="{{ $book->isbn }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Judul</label>
                                    <input type="text" class="form-control" name="title" value="{{ $book->title }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Penulis</label>
                                    <input type="text" class="form-control" name="author" value="{{ $book->author }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Penerbit</label>
                                    <input type="text" class="form-control" name="publisher" value="{{ $book->publisher }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tahun terbit</label>
                                    <input type="number" class="form-control" name="public_year" value="{{ $book->public_year }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="4" name="description">{{ $book->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Halaman</label>
                                    <input type="number" class="form-control" name="page" value="{{ $book->page }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Kategori</label>
                                    <select name="category" class="form-control custom-select">
                                        @foreach($categories as $category)
                                        @php
                                            $selected = "";
                                        @endphp
                                        @if($category['id'] == $book->category_id)
                                        @php
                                            $selected = "selected";
                                        @endphp
                                        @endif
                                        <option value="{{ $category['id'] }}" {{ $selected }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Rak</label>
                                    <select name="bookshelf" class="form-control custom-select">
                                        @foreach($bookshelves as $bookshelf)
                                        @php
                                            $selected = "";
                                        @endphp
                                        @if($bookshelf['id'] == $book->bookshelf_id)
                                        @php
                                            $selected = "selected";
                                        @endphp
                                        @endif
                                        <option value="{{ $bookshelf['id'] }}" {{ $selected }}>{{ $bookshelf['bookshelf'] }}</option>
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
                        Save
                    </button>
                    <a href="{{ url('data') }}" class="btn btn-secondary">Cancel</a>
                </div>
                <br>
            </form>
        </div>
    </section>
    
</div>

@endsection