@extends('website.layouts.layout')

@section('content')

<main>
       
    <div class="container2">
    
        <div id="imgI">
            <figure  class="thumbnail3">
                <img src="http://app.openbless.com/{{ $imoveis->image }}" class="imgs">
                 <figcaption class="tipo">
                        {{ $imoveis->negociacao }}
				 </figcaption>
            </figure>
        </div>       
      <!-- <div class="activities-grid">
            <div class=" star-gazing">
                      
            </div>
          <div class="hiking"> </div>
      </div> -->

      <!-- <div class="title-heading">
          <h1>Detalhes</h1>
       </div>  -->
     


        <div class="" style="margin: 4rem">
            <div class="row">
                <div class="" style="margin: 0 auto">
                    <div class="col-md-3">
                       <i class="fas fa-toilet icone"></i>
                       <div class="" style="display: flex">
                           <div class="banheiros" id="banheiros" style="font-size: 14px">
                              {{ $imoveis->banheiros }}
                           </div>
                             <span id="qtsB" style="margin-left: 5px; font-size: 14px">banheiros</span>
                         </div>
                     </div>
                   
                    <div class="col-md-3">
                        <div class="icone-format">
                        <i class="fas fa-warehouse icone"></i>
                        <div class="" style="display: flex">
                                <div class="garagem" id="garagem" style="font-size: 14px">
                                        {{ $imoveis->garagem }}
                                </div>
                                <span style="font-size: 14px">garagem</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="icone-format">
                            <i class="far fa-square icone"></i>
                                <div class="" style="display: flex">
                                    <div class="area" id="area" style="font-size: 14px">
                                    {{ $imoveis->areatotal }}
                                    </div>
                                <span style="font-size: 14px"> m²</span>
                            </div> 
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="icone-format">
                            <i class="fas fa-bed icone"></i>
                            <div class="" style="display: flex">
                            <div class="quartos" id="quartos" style="font-size: 14px">
                                {{ $imoveis->quartos }}   
                            </div>
                            <span id="qtsQ" style="font-size: 14px">quartos</span>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="detalhes">
                    <h1 class="nome-imovel">{{ $imoveis->tipo}} com  {{ $imoveis->quartos}} Quartos, {{ $imoveis->areatotal}} m²</h1>
                     <h3 class="endereco">{{ $imoveis->endereco }} - {{ $imoveis->bairro }}, {{ $imoveis->numero }} <i class="fas fa-map-marker-alt"></i></h3> 
                    <strong>Descrição: </strong>
                    <span>{{ $imoveis->descricao }} </span>
               </div>
            </div>
       
        <div class="col-md-4">
          <div class="panel-interesse">
              <div class="cor-valor">
                <span class="compra">Compra:</span>
                 <h2><strong>Valor: </strong></h2> 
                 <span>R$ {{ $imoveis->valorcondominio }}</span>
              </div>
              <div class="cor-interesse">
                 <span class="compra">Nome do anunciante:</span>
                  <h2><strong style="display:block; margin-top: 2rem">Mariane Moura</strong></h2>
              </div>
              <div class="button-interesse">
                  <button id="meuBtn">Tenho interesse</button>
              </div>
          </div>
        </div>
        </div>
    </div>

               <div id="meuModal" class="modal">

						<!-- Modal content -->
						<div class="modal-content">
							<span class="fechar">&times;</span>
							<p style="color: #476776 !important; text-align: center">Fale com o representante..</p>

							<div class="box">
								<form action="{{ route('send')}}" method="post">
                                @csrf
									<div class="row ">
										<div class="col-md-5">
											<div class="inputForm ">
												<input type="text" name="nome" required>
                                                <input type="text" name="user_imovel" value="{{ $imoveis->email_user }}" hidden>
												<label style="background-color: white; padding: 1px">Nome*</label>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="inputForm ">
												<input type="text" name="email" required>
												<label style="background-color: white; padding: 1px">Email*</label>
											</div>
										</div>
										<div class="col-md-5">
											<div class="inputForm ">
												<input type="text" name="telefone" required>
												<label style="background-color: white; padding: 1px">Telefone*</label>
											</div>
										</div>

										<div class="col-sm-12">
											<div class="inputForme ">
												<textarea type="text" name="mensagem" required></textarea>
												<label style="background-color: white; padding: 1px">Mensagem*</label>
											</div>
										</div>

									</div>

									<button type="submit">enviar</button>

								</form>

							</div>
						</div>

					</div>
            <div class="title-heading" style="margin-top: 25rem; display:block">
             
             <h1>Explore a vizinhança</h1>

             <div class="hr">

             </div>
           
          </div> 
          <h2 class="endereco" style="text-align:center">{{ $imoveis->endereco }} - {{ $imoveis->bairro }}, {{ $imoveis->numero }} <i class="fas fa-map-marker-alt"></i></h2>
        <div id="listarD">
            <figure  class="thumbnail2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3535.992969370693!2d-48.65244308494042!3d-27.593747582839104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95274a10c8f6f525%3A0xeb466ccbf5877b4e!2sR.%20Alvino%20Teodoro%20de%20Melo%2C%20100%20-%20Forquilhinhas%2C%20S%C3%A3o%20Jos%C3%A9%20-%20SC%2C%2088106-797!5e0!3m2!1spt-BR!2sbr!4v1570813363728!5m2!1spt-BR!2sbr" width="100%" height="100%" frameborder="0" style="top: -5px; border:0;" allowfullscreen=""></iframe>
            </figure>
        </div> 
</main>

@endsection