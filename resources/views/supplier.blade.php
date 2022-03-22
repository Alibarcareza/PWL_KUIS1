@extends('master.master')

@section('content')

<section class="supplier">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 style="text-align:center">Supplier List</h2>
                        <span>Welcome to supplier list.</span>
                    </div>
                </div>
            
            <div class="container mt-4 meaning">            
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th>Nama Supplier</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_supplier as $sup)
                    <tr>
                        <td>{{$sup->nama_sup}}</td>
                        <td>{{$sup->alamat}}</td>
                        <td>{{$sup->no_hp}}</td>
                    </tr>
                    @endforeach
                    </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
</section>          
    @endsection