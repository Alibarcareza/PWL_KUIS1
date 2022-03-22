@extends('master.master')

@section('content')

<section class="pelanggan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 style="text-align:center">Subscriber List</h2>
                        <span>Welcome to subscriber list.</span>
                    </div>
                </div>
            
            <div class="container mt-4 meaning">            
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th>Nama Pelanggan</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>No HP</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_pelanggan as $p)
                    <tr>
                        <td>{{$p->nama_pelanggan}}</td>
                        <td>{{$p->alamat}}</td>
                        <td>{{$p->jenis_kelamin}}</td>
                        <td>{{$p->no_hp}}</td>
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