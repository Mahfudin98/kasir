@extends('layouts.layout')

@section('title')
    {{ $tokos->nama_toko }}
@stop
@section('menu')    
    {{ $tokos->nama_toko }}
@stop

@section('body')
<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Products List</h4>
                    <div class="add-product">
                        <a href="/produk/create">Add Product</a>
                    </div>
                    <table>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th>Harga Satuan</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                        @if ($tokos->produks->count())
                        @foreach ($tokos->produks as $produk)
                        <tr>
                            <td>{{ $produk->nama_barang }}</td>
                            <td>{{ $produk->stok }}</td>
                            <td>{{ $produk->harga }}</td>
                            <td>{{ $produk->hargasatuan }}</td>
                            <td>
                            
                            <a href="/produk/{{ $produk->id }}/edit"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>  

                            </td>
                            <td>
                            <form action="{{ url('/produk/'.$produk->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </table>
                    <div class="custom-pagination">
					    <ul class="pagination">
							<li class="page-item"><a class="page-link" href="#">Previous</a></li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">Next</a></li>
						</ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop