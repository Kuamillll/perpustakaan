@extends('layouts.main')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>DataTables</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ISBN</th>
                      <th>Nama Buku</th>
                      <th>AUTHOR</th>
                      <th>PENERBIT</th>
                      <th>TAHUN TERBIT</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>9789793062792</td>
                      <td>5 cm</td>
                      <td>Donny Dhirgantoro</td>
                      <td>Gramedia Widiasarana Indonesia</td>
                      <td>2023</td>
                    </tr>
                    <tr>
                      <td>9789797835617</td>
                      <td>Ancika</td>
                      <td>Abdullah Dilan</td>
                      <td>Bandung Production</td>
                      <td>1995</td>
                    </tr>
                    <tr>
                      <td>9786020318929</td>
                      <td>Critical Eleven</td>
                      <td>Ika Natassa</td>
                      <td>Gramedia Pustaka Utama</td>
                      <td>2010</td>
                    </tr>
                    <tr>
                      <td>9789797807696</td>
                      <td>Kuala Kumal</td>
                      <td>Raditya Dika</td>
                      <td>Kawah Media</td>
                      <td>2015</td>
                    </tr>
                    <tr>
                      <td>9789793062792</td>
                      <td>New Edition Laskar Pelangi</td>
                      <td>Andrea Hirata</td>
                      <td>Bentang Pustaka</td>
                      <td>2011</td>
                    </tr>
                    <tr>
                      <td>9789793098465</td>
                      <td>One Piece 104</td>
                      <td>Hiro Hito</td>
                      <td>Kyoto Entertaiment</td>
                      <td>2023</td>
                    </tr>
                    <tr>
                      <td>9782654086528</td>
                      <td>OSHI NO KO v3</td>
                      <td>Tadano hito hito</td>
                      <td>Tokyo film</td>
                      <td>2024</td>
                    </tr>
                    <tr>
                      <td>Tidak Tersedia</td>
                      <td>Si Anak Spesial</td>
                      <td>Tere Liye</td>
                      <td> republika penerbit</td>
                      <td>2019</td>
                    </tr>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection