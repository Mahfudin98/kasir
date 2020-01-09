@foreach ($tokos as $toko)
    <li>
        <a href="/tampil/{{ $toko->id }}">{{ $toko->nama_toko }}</a> 
    </li>
@endforeach