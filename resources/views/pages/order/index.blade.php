@extends('templates.store')
@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Orders
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Sales</li>
                    <li class="breadcrumb-item active">Orders</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Manage Order</h5>
                </div>
                <div class="card-body order-datatable">
                    <table class="display" id="basic-1">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Makanan</th>
                            <th>Jumlah Pesanan</th>
                            <th>Total Harga</th>
                            <th>Date</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                        <tr>


                            <td>{{$loop->iteration}}</td>
                            <td>
                                <div class="d-flex">
                                    <img src="{{asset('uploads/store/'.$data->food->image)}}" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                </div>
                            </td>
                        <td>{{$data->food->name}}</td>
                            <td>{{$data->qty}}</td>
                            <td>{{$data->order->total_price}}</td>
                            <td>Dec 10,18</td>
                            <td>$54671</td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

@endsection
