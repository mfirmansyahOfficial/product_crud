@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Product Detail | {{$product->nama}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-3">Nama</div>
                        <div class="col-md-9">{{ $product->nama }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Harga</div>
                        <div class="col-md-9">@currency($product->harga)</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Kategori</div>
                        <div class="col-md-9">{{ $product->kategori }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Stok</div>
                        <div class="col-md-9">{{ $product->stok }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
