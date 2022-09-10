@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Filter
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/products/pc/filter')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
                            </div>
                            <button class="btn btn-primary float-right"><i class="mdi mdi-search-web"></i>Filter</button>
                        </form>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        Data Produk
                        <a href="{{url('admin/products/pc/create')}}" class="btn btn-primary float-right"><i class="mdi mdi-library-plus"></i>Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>
                            </thead>
                            <tbody>
                                @foreach ($list_products as $produk)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('admin/products/pc', $produk->id)}}" class="btn btn-primary"><i class="mdi mdi-information"></i></a>
                                            <a href="{{url('admin/products/pc', $produk->id)}}/edit" class="btn btn-warning"><i class="mdi mdi-file-document-edit"></i></a>
                                            @include('template.utils.delete', ['url' => url('admin/products/pc', $produk->id)])
                                        </div>
                                    </td>
                                    <td>{{$produk->nama}}</td>
                                    <td>Rp{{$produk->harga}}</td>
                                    <td>{{$produk->stok}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
