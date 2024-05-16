@extends('layouts.main')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form class="form-inline" action="{{ url('data') }}" method="get">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" name="q" value="<?= ($q != NULL) ? $q : "" ?>">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                        @if($q != NULL)
                        @endif
                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </form>
            <a href="{{ url('tambah-data') }}" class="btn btn-primary">
                <i class="bi bi-plus-square-fill"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="21" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0" />
                </svg>
            </a>
            <br><br>
            <table class="table table-bordered table-striped">
                <thead>
                    <th class="text-center">No</th>
                    <th class="text-center">Cover</th>
                    <th class="text-center">Judul</th>
                    <th class="text-center">Penulis</th>
                    <th class="text-center">Penerbit</th>
                    <!-- <th class="text-center">Deskripsi</th> -->
                    <th class="text-center">Halaman</th>
                    <th class="text-center"></th>
                </thead>
                <tbody>
                    @php
                    $no = 0;
                    @endphp
                    @foreach($books as $book)
                    @php
                    $no++;
                    @endphp
                    <tr>
                        <td class="text-center">{{ $no }}</td>
                        <td class="text-center">
                            @php
                            $cover = "default.png";
                            @endphp
                            @if($book->cover != NULL)
                            @php
                            $cover = $book->cover;
                            @endphp
                            @endif
                            <img src="{{ url('pictures/'.$cover) }}" alt="" width="70px">
                        </td>
                        <td class="text-center">{{ $book->title }}</td>
                        <td class="text-center">{{ $book->author }}</td>
                        <td class="text-center">{{ $book->publisher }}, {{ $book->public_year }}</td>
                        <!-- <td class="">
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modals">View</button>
                            - Modal
                            <div class="modal fade" id="modals" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" name="description">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modal-title">Deskripsi {{ $book->title }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    - Scrollable modal
                                        <div class="modal-body">
                                            <p>
                                                {{ $book->description }}
                                            </p>
                                        </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </td> -->
                        <td class="text-center">{{ $book->page }}</td>
                        <td class="text-center">
                            <a href="{{ url('showbook/'.$book->id.'/detail') }}" class="btn btn-primary btn-sm">Detail</a>
                            <a href="{{ url('data/'.$book->id.'/edit') }}" class="btn btn-success btn-sm">
                                <i class="bi bi-pencil-square"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                </svg>
                            </a>
                            <a href="{{ url('data/'.$book->id.'/hapus') }}" onclick="return confirm('Yakin Hapus {{ $book->title }}')" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash3-fill"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection