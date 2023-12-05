@extends('layouts.index')
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tabel Penduduk</h4>
                    <a class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">Add</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        No
                                    </th>
                                    <th>Action</th>
                                    <th>Foto</th>
                                    <th>Name</th>
                                    <th>NIK</th>
                                    <th>Tag IdCard</th>
                                    <th>Jenis Kelamin</th>
                                    <th>TTL</th>
                                    <th>Gol. Darah</th>
                                    <th>Pendidikan</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data_penduduk as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>
                                            <div class="btn-group"><button class="btn btn-warning">Edit</button><button
                                                    class="btn btn-danger">Delete</button><button
                                                    class="btn btn-info">Detail</button></div>
                                        </td>
                                        <td> {{ $item->foto }} </td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->nik }}</td>
                                        <td>{{ $item->tag_idcard }}</td>
                                        <td>{{ $item->jenis_kelamin }}</td>
                                        <td>{{ $item->ttl }}</td>
                                        <td>{{ $item->golongan_darah }}</td>
                                        <td>{{ $item->pendidikan }}</td>
                                    </tr>
                                @endforeach
                                {{-- <td>
                                        <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle"
                                            width="35" data-toggle="tooltip" title="Wildan Ahdian">
                                    </td>

                                    <td>2018-01-20</td>
                                    <td>2018-01-20</td>
                                    <td>2018-01-20</td>
                                    <td>2018-01-20</td>
                                    <td>2018-01-20</td>

                                    <td>
                                        <div class="badge badge-success">Completed</div>
                                    </td>
                                    <td><a href="#" class="btn btn-secondary">Detail</a></td> --}}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Penduduk Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Nama</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label>NIK</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Tag ID Card</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="text" class="form-control datepicker">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Jenis Kelamin</label>
                                <select id="inputState" class="form-control">
                                    <option selected>--</option>
                                    <option>Laki Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputState">Pendidikan</label>
                                <select id="inputState" class="form-control">
                                    <option selected>--</option>
                                    <option>SD</option>
                                    <option>SMA</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Golongan Darah</label>
                                <select id="inputState" class="form-control">
                                    <option selected>--</option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>B</option>
                                    <option>B</option>
                                    <option>B</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
