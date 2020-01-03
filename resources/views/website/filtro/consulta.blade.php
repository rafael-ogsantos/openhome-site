@extends('website.layouts.layout')

@section('content')
<section>
    <div class="container-filtro">
        <div class="row">
            <div class="col-md-3">
                <div class="dados-busca">
                    <div class="painel-filtro">
                        <div class="input-busca">
                            <h2>Localizacao do imovel</h2>
                            <input type="text" class="busca" placeholder="Digite uma rua, bairro ou uma cidade">
                            <div class="span-detalhes">
                                @foreach($buscas as $busca)
                                <span>{{ $busca->estado }}</span>
                                @endforeach
                            </div>
                        </div>


                        <div class="input-busca">
                            <h2>Tipo do imovel</h2>
                            <input type="text" class="busca" placeholder="Digite uma rua, bairro ou cidade">
                            <div class="span-detalhes">
                                <span style="text-transform:uppercase">{{ $search }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="filtro-imoveis">
                    <div style="display: flex; align-items:center; margin-left:15px">
                        <span style="font-size: 22px; font-weight: 600">Apartamentos em {{ $busca->estado }}</span>
                    </div>

                    @foreach($buscas as $busca)
                    <a href="{{ route('list.id', $busca->id)}}" style="text-decoration: none; color:black">
                        <div class="card-consulta">
                            <div class="row">
                                <div class="col-md-4">
                                    <figure class="img-left-imovel">
                                        <img src="http://app.openbless.com/{{ $busca->image}}" alt="" class="img">
                                        <figcaption class="tipo">
                                            {{ $busca->tipo }}
                                        </figcaption>
                                    </figure>
                                </div>

                                <div class="col-md-6">
                                    <div class="conteudo-card-consulta">
                                        <div class="padding">
                                            <h3>{{ $busca->tipo}} com {{ $busca->quartos}} Quartos, {{ $busca->areatotal}} m² </h3>
                                            <p class="color-endereco">{{ $busca->endereco }} - {{ $busca->bairro }}, {{ $busca->numero }}</p>
                                            <p>{{ $busca->tipo}} com {{ $busca->quartos}} Quartos, {{ $busca->areatotal}} m²</p>

                                            <div class="icon-detalhes">
                                                <i class="fas fa-toilet icone">
                                                    <span>{{ $busca->banheiros }} banheiros</span>
                                                </i>

                                                <i class="fas fa-warehouse icone">
                                                    <span>{{ $busca->garagem }} garagem</span>
                                                </i>

                                                <i class="fas fa-square icone">
                                                    <span>{{ $busca->areatotal }} m²</span>
                                                </i>

                                                <i class="fas fa-bed icone">
                                                    <span>{{ $busca->quartos }} quartos</span>
                                                </i>
                                            </div>

                                            <div class="descricao">
                                                <p>{{ $busca->descricao }}</p>
                                            </div>

                                            <div class="valor">
                                                <p>R$ {{ $busca->valorcondominio }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection