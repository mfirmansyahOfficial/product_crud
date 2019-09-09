@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        Product List
                    </div>
                    <div>
                        <a href="{{ route('create') }}" class="btn btn-sm btn-primary">Tambah</a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table table-borderless">
                        <thead class="text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @forelse ($products as $a => $product)
                            <tr class="text-center">
                                <td class="align-middle">{{ ++$a }}</td>
                                <td class="align-middle">{{ $product->nama }}</td>
                                <td class="align-middle">@currency($product->harga)</td>
                                <td class="align-middle">{{ $product->kategori }}</td>
                                <td class="align-middle">{{ $product->stok }}</td>
                                <td class="align-middle">
                                    <a href="{{ route('show', $product->id ) }}" class="btn btn-sm btn-light"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('edit', $product->id ) }}" class="btn btn-sm btn-light"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('destroy', $product->id ) }}" method="post" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-sm btn-light"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">No Data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection