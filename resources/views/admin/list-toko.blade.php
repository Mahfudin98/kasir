@extends('layouts.layout')

@section('title')
    List Toko
@stop
@section('menu')   
    List Toko
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
                            <th>Nama Toko</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                        
                        @foreach ($tokos as $nama)
                        <tr>
                            <td title="List Produk"><a href="/produk/{{ $nama->id }}">{{ $nama->nama_toko }}</a></td>
                            <td>

                            <a href="/produk/{{ $nama->id }}/edit"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>  
                                                     
                            </td>

                            <td>
                            <form action="{{ url('/produk/'.$nama->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
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