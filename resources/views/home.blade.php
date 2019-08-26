@extends('layouts.template')

@section('content')

    <div class="row">
        <!-- [ bitcoin-wallet section ] start-->
        <div class="col-md-6 col-xl-4">
            <div class="card theme-bg bitcoin-wallet">
                <div class="card-block" style="padding:30px">
                    <h5 class="text-white mb-2">Clientes</h5>
                    <h2 class="text-white mb-2 f-w-300">{{$clientes}}</h2>
                    {{--<span class="text-white d-block">Ratings by Market Capitalization</span>--}}
                    <i class="fas fa-user f-70 text-white"></i>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card theme-bg2 bitcoin-wallet">
                <div class="card-block" style="padding:30px">
                    <h5 class="text-white mb-2">Vendas</h5>
                    <h2 class="text-white mb-2 f-w-300">{{$vendas}}</h2>
                    {{--<span class="text-white d-block">Ratings by Market Capitalization</span>--}}
                    <i class="fas fa-dollar-sign f-70 text-white"></i>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xl-4">
            <div class="card bg-c-blue bitcoin-wallet">
                <div class="card-block" style="padding:30px">
                    <h5 class="text-white mb-2">Produtos</h5>
                    <h2 class="text-white mb-2 f-w-300">{{$produtos}}</h2>
                   {{-- <span class="text-white d-block">Ratings by Market Capitalization</span>--}}
                    <i class="fas fa-box f-70 text-white"></i>
                </div>
            </div>
        </div>
        <!-- [ bitcoin-wallet section ] end-->



        <!-- [ notifications section ] start -->
        <div class="col-xl-4 col-md-12">
            <div class="card note-bar">
                <div class="card-header">
                    <h5>Ultimas Vendas</h5>
                    <div class="card-header-right">
                        <div class="btn-group card-option">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="feather icon-more-horizontal"></i>
                            </button>
                            <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="card-block p-0">

                    @forelse($ultimasVendas as $venda)
                        <a href="{{route('vendas.edit', $venda->id)}}" class="media friendlist-box">
                            <div class="mr-3 photo-table">
                                <i class="far fa-bell f-30"></i>
                            </div>
                            <div class="media-body">
                                <h6>{{$venda->Cliente->nome}}</h6>
                                <span class="f-12 float-right text-muted">{{$venda->total_venda_liquido}}</span>
                                <p class="text-muted m-0">{{$venda->status}}</p>
                            </div>
                        </a>
                    @empty
                        <div style="padding:50px" align="center">
                            <i class="fa fa-shopping-cart f-70"></i>
                            <p></p>
                            <h6>Sem novas vendas no momento!</h6>
                        </div>

                    @endforelse

                </div>
            </div>
        </div>
        <!-- [ notifications section ] end-->


    </div>

@endsection
