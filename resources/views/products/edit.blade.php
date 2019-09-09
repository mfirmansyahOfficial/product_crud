@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Product</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form action="{{ route('update', $product->id ) }}" method="post">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" id="nama" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $product->nama ?? old('nama') }}">
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" id="harga" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ $product->harga ?? old('harga') }}">
                            @error('harga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" id="kategori" class="form-control @error('kategori') is-invalid @enderror" name="kategori" value="{{ $product->kategori ?? old('kategori') }}">
                            @error('kategori')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="number" id="stok" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ $product->stok ?? old('stok') }}">
                            @error('stok')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="text-right">
                            <button class="btn btn-md btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
