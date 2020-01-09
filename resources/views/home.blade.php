@extends('layouts.layout')

@section('title')
    Home
@stop


@section('menu')
    Selmat datang
@stop


@section('body')
    
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                    @foreach ($tokos as $nama)
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><a href="/produk/{{ $nama->id }}">{{ $nama->nama_toko }}</a></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green">30%<i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">10,000</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>                        
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
        
<br>
@endsection
