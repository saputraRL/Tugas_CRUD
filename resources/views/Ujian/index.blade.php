@extends('template') 

 @section('content')

  <div class="container">

  <br>
  <h2>Form Data Ujian</h2>
  <br>

  <a class="btn btn-success" href="{{ route('ujian.add') }}">Tambah Mata Kuliah</a>
  <br><br>

     @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif


        <table class="table table-bordered table-hover table-bordered" >
        <thead class="table-dark">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Mata Kuliah</th>
            <th scope="col">Dosen</th>
            <th scope="col">Jumlah Soal</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($ujians as $ujian)
            <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td scope="row">{{$ujian->nama_mk}}</td>
            <td scope="row">{{$ujian->dosen}}</td>
            <td scope="row">{{$ujian->jumlah_soal}}</td>
            <td scope="row">{{$ujian->keterangan}}</td>
            <td scope="row"> 
                <form action="">
                  <a class="btn btn-warning" href="">Edit</a>

                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            </tr>
        @endforeach
        </tbody>
        </table>


  </div>

      
 @endsection