@extends('template')

@section('content')
    
    <div class="container">
        <br>
        <h2>Form Tambah Mata Kuliah</h2>
        <br>

        <form action="{{route('ujian.save')}}" method="post">

            @csrf

            <div class="form-group col-6">
                <label>Mata Kuliah</label>
                <input type="text" name="nama_mk" class="form-control @error('nama_mk') is-invalid @enderror" 
                            placeholder="Masukkan Mata Kuliah" value="{{ old('nama_mk') }}">
                @error('nama_mk')
                <div class="invalid-feedback">
                   {{ $message }}
                </div>
                @enderror
            </div>
            <br>

            <div class="form-group col-6">
                <label>Dosen</label>
                <input type="text" name="dosen" class="form-control @error('dosen') is-invalid @enderror" 
                            placeholder="Masukkan Nama Dosen" value="{{ old('dosen') }}">
                @error('dosen')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <br>

            <div class="form-group col-6">
                <label>Jumlah Soal</label>
                <input type="number" name="jumlah_soal" class="form-control @error('jumlah_soal') is-invalid @enderror" 
                            placeholder="Masukkan Jumlah Soal" value="{{ old('jumlah_soal') }}">
                @error('jumlah_soal')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <br>

            <div class="form-group col-6">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" 
                            placeholder="Masukkan Keterangan" value="{{ old('keterangan') }}">
                @error('keterangan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <br>

            <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
            <a class="btn btn-secondary" href="{{route('ujian.index')}}">Cancel</a>

        </form>
    </div>

@endsection