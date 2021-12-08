@extends('layouts.master')
    @section('content')
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
                <div class="col-6">
                    <h1 class="mb-3">Data Pendaftar Kursus TOEFL</h1>
                </div>

                <div class="col-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-warning btn-sm float-end fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal"">
                    + Data Pendaftar
                    </button>
                </div>

                
                <table class="table table-warning table-striped table-hover">
                    <thead>
                    <tr style="color: #f2bb66;">
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Paket Kursus</th>
                        <th>Waktu Daftar</th>
                        <th>Kelola Data</th>
                    </tr>
                    </thead>

                    @foreach($data_customer as $customer)
                    <tr> 
                        <td>{{$customer->nama}}</td>
                        <td>{{$customer->jenis_kelamin}}</td>
                        <td>{{$customer->alamat}}</td> 
                        <td>{{$customer->paket}}</td>
                        <td>{{$customer->created_at}}</td>
                        <td>
                            <a href="/customer/{{$customer->id}}/edit" class="btn btn-warning btn-sm me-2">
                                Edit
                            </a>
                            <a href="/customer/{{$customer->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus?')">
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach

                </table>


            </div>
        </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pendaftar Kursus</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/customer/create" method="POST">
                                {{csrf_field()}}
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Pendaftar</label>
                                    <input name= "nama" type="text" class="form-control" id="nama" aria-describedby="nameHelp" placeholder="Masukkan nama pendaftar">
                                </div>

                                <div class="mb-3">
                                    <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Perempuan
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Laki-laki
                                    </label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="floatingTextarea" class="form-label">Alamat</label>
                                    <textarea name="alamat" class="form-control" placeholder="Masukkan alamat pendaftar" id="alamat" style="height: 150px;"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="paket">Pilih Paket Kursus</label>
                                    <select name="paket" class="form-select" aria-label="Paket">
                                        <option value="Silver" selected>Silver</option>
                                        <option value="Gold">Gold</option>
                                        <option value="Platinum">Platinum</option>
                                    </select>
                                </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-warning">Submit</button>
                            </form>
                        </div>
                        </div>
                    </div>
    @endsection                  
                    