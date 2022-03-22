@extends('master.master')

@section('content')

<section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Latest Products</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($all_barang as $b)
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                    <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <img src="{{ ('images/gambarProduct/'.$b-> gambar) }}" >
                        </div>
                        <div class="down-content">
                        <h4>{{$b->jenis_barang}}</h4>
                        <span>{{$b->harga}}</span>
                        <span>{{$b->merk}}</span>
                        <span>{{$b->warna}}</span>
                        <span>{{$b->ukuran}}</span>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div> 
                  @endforeach
             </div>
             <div class="col-lg-12">
                    <div class="pagination">
                        <ul>
                            <li class="active">
                                <a href="?page=1">1</a>
                            </li>
                            <li>
                                <a href="?page=2">2</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
    </section>
    @endsection