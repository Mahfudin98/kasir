<h1>{{ $toko->nama_toko }}</h1>
{{ $toko->id}}


@if ($toko->produks->count())
<div>
        @foreach ($toko->produks as $produk)
            <li> {{ $produk->nama_barang }}</li>
        @endforeach
</div>    
@endif