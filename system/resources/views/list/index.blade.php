@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Semua Produk</h4>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Nama </th>
                            <th> Harga </th>
                            <th> Berat </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->nama}}</td>
                                    <td>Rp{{$item->harga}}</td>
                                    <td>{{$item->berat}} kg</td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                      <div class="col-md-12 mt-3">
                        {{$list->links()}}
                    </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection
