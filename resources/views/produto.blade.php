@extends('layouts.main')
@section('title', 'Produto - '.$produto->nome )
@section('conteudo')
<section id="produto">
    <div class="row">
        <div class="card mt-5">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="col-md-6">
                        <div class="tab-content">
                            <div class="tab-pane active" id="pic-1"><img src="{{ asset($produto->img) }}"  class="img-fluid"/></div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <h3 class="product-title">{{ $produto->nome }}</h3>
                        <p>{{ $produto->detalhe }}</p>
                        <small>
                            @foreach ($produto->categorias as $categoria)
                                {{ $categoria->nome }}                                
                            @endforeach
                        </small>
                        <hr>
                        <h4>Valor: <span>R$ {{ $produto->valor }}</span></h4>
                        <div class="mt-2">
                            <form action="{{ url('carrinho/insert') }}" method="POST">
                                @csrf
                                <input name="id" value="{{ $produto->id }}" hidden>
                                <input name="quantity" value="1" hidden>
                                <button type="submit" href="#" class="btn">Adicionar ao Carrinho</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection