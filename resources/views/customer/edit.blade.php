@extends('layouts.master')
    @section('content')
            <h1>Edit Data Pendaftar</h1>
            @if(session('sukses'))
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </symbol>
            </svg>

            <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <div>
                {{session('sukses')}}
                </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="row">

                <div class="col-lg-12">
                <form action="/customer/{{$customer->id}}/update" method="POST">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Pendaftar</label>
                        <input name= "nama" type="text" class="form-control" id="nama" aria-describedby="nameHelp" placeholder="Masukkan nama pendaftar" value="{{$customer -> nama}}">
                    </div>

                    <div class="mb-3">
                        <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" {{$customer->jenis_kelamin == 'Perempuan' ? 'checked' : ''}}>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Perempuan
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" {{$customer->jenis_kelamin == 'Laki-laki' ? 'checked' : ''}}>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Laki-laki
                        </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="floatingTextarea" class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control" id="alamat" style="height: 150px;">{{$customer -> alamat}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="paket">Pilih Paket Kursus</label>
                        <select name="paket" class="form-select" aria-label="Paket" value="{{$customer -> paket}}">
                            <option value="Silver" @if($customer->paket == "Silver") selected @endif>Silver</option>
                            <option value="Gold" @if($customer->paket == "Gold") selected @endif>Gold</option>
                            <option value="Platinum" @if($customer->paket == "Platinum") selected @endif>Platinum</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-warning">Update</button>
                </form>
                </div>

            </div>
    @endsection    