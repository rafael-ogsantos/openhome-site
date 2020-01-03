<!doctype html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>OpenBless</title>
   <!--Ion Icons-->
   <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
   <!--Google Fonts-->
   <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
   <!--Our own stylesheet-->
   <link rel="stylesheet" href="{{ asset('css/style.css')}}">
   <!--COMFORTAA FONT-->
   <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
   <link rel="stylesheet" href="css/card.css">
   <script src="https://kit.fontawesome.com/7b14f03178.js" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
   <style>
      .main-message h1 {
         font-family: 'Comfortaa' !important;
      }

      .title-heading h1 {
         font-family: 'Comfortaa';
         font-size: 2rem;
         margin: .5rem 0 1rem;
      }

      .testimonial-text-box p {
         font-family: 'Comfortaa';
      }
   </style>
</head>

<body>
   <header>
      <div class="container">
         <nav class="nav">
            <div class="nav-brand">
               <a href="index.html"></a>
            </div>

            <div class="menu-icons open">
               <i class="icon ion-md-menu"></i>
            </div>

            <ul class="nav-list">
               <div class="menu-icons close">
                  <i class="icon ion-md-close"></i>
               </div>

               <li class="nav-item">
                  <a href="{{ route('list.imoveis')}}" class="nav-link">Home</a>
               </li>
               <li class="nav-item">
                  <a href="https://openbless.com/index.php/sobre/" class="nav-link">Quem somos</a>
               </li>
               <li class="nav-item">
                  <a href="https://openclub.site/" class="nav-link">OpenClub</a>
               </li>
               <li class="nav-item">
                  <a href="https://openBless.com/index.php/franquias/" class="nav-link">Franquias</a>
               </li>
               <li class="nav-item">
                  <a href="#" class="nav-link">Entre como Franqueado</a>
               </li>
               <li class="nav-item">
                  <a href="#" class="nav-link">Entre</a>
               </li>

            </ul>

         </nav>
      </div>
   </header>
   <main>



      <section class="hero">
         <div class="container">

            <div class="main-message">

               <div class="img">
                  <img src="{{ asset('image/openhome.png')}}">
               </div>

               <h1 class="sub-logo">Abrindo portas para você</h1>
               <form action="{{ route('busca')}}" class="form-imoveis" id="form" method="get">

                  <div class="input-buttom">
                     <input name="search" id="search" type="text" placeholder="Digite uma rua, bairro ou cidade" class="input-tamanho">
                     <button type="submit"><i class="fas fa-search"></i></button>
                  </div>

               </form>
            </div>
         </div>
      </section>


      <html>

      <head>
         <title>Enviando E-mail com PHP - DevMedia</title>
         <link rel="stylesheet" type="text/css" href="estilo.css">
      </head>

      <body>


         <section class="experience-outdoors">
            <div class="container2">
               <div class="title-heading">
                  <span style="font-size: 30px">Lançamentos</span>
                  <div class="hr">
                  </div>
               </div>

               <div class="row">

                  @foreach($properties as $imovel)
                  <a href="{{ route('list.id', $imovel->id)}}">
                     <div class="col-md-4">
                        <div class="card">
                           <figure class="thumbnail">
                              <img src="{{$imovel->image}}" class="imgs">
                              <figcaption class="tipo">
                                 {{$imovel->image}}
                              </figcaption>
                           </figure>

                           <div class="padding">
                              <h4 class="nomeImovel">{{ $imovel->description}} com {{ $imovel->title}} Quartos, {{ $imovel->areat}} m² </h4>
                              <span style="font-weight: 700; font-size: 15px;  color: #476776;"></span>
                              <div class="area-total">
                                 <span style="font-weight: 700; font-size: 15px"></span>
                              </div>

                              <div style="display: flex">
                                 <div class="area-total">
                                    <b style="color: black; font-weight: 700">
                                       Area total: {{ $imovel->areat}}
                                    </b>
                                    <span style="color: rgb(134, 134, 134)"> m² </span>
                                 </div>

                                 <div class="area-total">
                                    <b style="color: black; font-weight: 700">
                                       Area privativa: {{ $imovel->areap}}
                                    </b>
                                    <span style="color: rgb(134, 134, 134)"> m² </span>
                                 </div>
                              </div>

                              <div style="display:flex; margin-bottom: 9px">
                                 <div class="area-total">
                                    <b>
                                       <i class='fas fa-toilet' style='font-size:17px; color: rgb(129, 127, 127)'></i>
                                    </b>
                                    <span style="color: rgb(134, 134, 134)">{{ $imovel->banheiros}} banheiros </span>
                                 </div>

                                 <div class="area-total">
                                    <b>
                                       <i class='fas fa-bed' style='font-size:17px ;color: rgb(129, 127, 127)'></i>
                                    </b>
                                    <span style="color: rgb(134, 134, 134)">{{ $imovel->numero_quartos}} dorms </span>
                                 </div>
                              </div>


                              <div>
                                 <span class="valor" style="color: rgb(0, 0, 0);font-size:16px; font-weight: 600">R$ {{ $imovel->price }}</span>
                              </div>

                              <div class="ver">
                                 <span>Ver detalhes</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </a>
                  @endforeach
               </div>



            </div>
         </section>

         <section class="testimonials">
            <div class="container">
               <div class="testimonial">
                  <div class="testimonial-text-box">
                     <p style="font-size: 40px">Participe da OpenBless</p>
                     <p style="font-size: 40px">O sistema de franquias mais dinâmico do Brasil</p>
                  </div>
                  <!-- <div class="testimonial-customer">
                  <img src="images/profile-pic.jpg" alt="">
                  <h1>Rafael G.</h1>
              </div> -->
               </div>
            </div>
         </section>


         <section class="begin-adventure">
            <div class="container2">
               <div class="activities-grid">
                  <div class="activities-grid-item star-gazing">
                     <!-- <i class="icon ion-md-star"></i> -->
                     <span style="font-size: 25px">Você deseja anunciar um imóvel?</span>
                     <div class="button-login">
                        <a href="http://app.openbless.com/">
                           <button>Faça seu login</button>
                        </a>
                     </div>
                  </div>



                  <div class="activities-grid-item hiking">
                     <!-- <i class="icon ion-md-compass"></i> -->
                     <span style="font-size: 25px">Voce deseja participar da rede de franquias mais dinâmica do pais?</span>
                     <div class="button-login">
                        <a href="http://app.openbless.com/">
                           <button>Faça seu login</button>
                        </a>
                     </div>
                  </div>

                  <div class="activities-grid-item hiking">
                     <!-- <i class="icon ion-md-compass"></i> -->
                     <span style="font-size: 25px">Deseja favoritar seus imoveis e falar com seu corretor?</span>
                     <div class="button-login">
                        <a href="http://app.openbless.com/">
                           <button>Faça seu login</button>
                        </a>
                     </div>
                  </div>



               </div>
            </div>


         </section>
   </main>

   <footer>
      <div style="display: flex; padding-bottom: 5rem">
         <nav class="nav-footer-nav">
            <ul class="nav-footer">
               <li class="nav-item">
                  <a href="#" class="nav-link-footer">Comprar</a>
               </li>
               <li class="nav-item">
                  <a href="https://openbless.com/index.php/sobre/" class="nav-link-footer">Alugar</a>
               </li>
               <li class="nav-item">
                  <a href="https://openclub.site/" class="nav-link-footer">Imoveis novos</a>
               </li>
               <li class="nav-item">
                  <a href="https://openBless.com/index.php/franquias/" class="nav-link-footer">Franquias</a>
               </li>

            </ul>
         </nav>

         <div class="footer-institucional">
            <ul class="nav-footer">
               <li class="nav-item">
                  <a href="#" class="nav-link-footer">Home</a>
               </li>
               <li class="nav-item">
                  <a href="https://openbless.com/index.php/sobre/" class="nav-link-footer">Quem somos</a>
               </li>
               <li class="nav-item">
                  <a href="https://openclub.site/" class="nav-link-footer">OpenClub</a>
               </li>
               <li class="nav-item">
                  <a href="https://openBless.com/index.php/franquias/" class="nav-link-footer">Franquias</a>
               </li>
               <li class="nav-item">
                  <a href="#" class="nav-link-footer">Entre como Franqueado</a>
               </li>
               <li class="nav-item">
                  <a href="#" class="nav-link-footer">Entre</a>
               </li>
            </ul>
         </div>

         <div class="rede-social">
            <ul class="nav-footer">
               <li class="nav-item">
                  <a href="#" class="nav-link-footer">Instagram</a>
               </li>
               <li class="nav-item">
                  <a href="https://openbless.com/index.php/sobre/" class="nav-link-footer">Facebook</a>
               </li>
               <li class="nav-item">
                  <a href="https://openclub.site/" class="nav-link-footer">Twitter</a>
               </li>
               <li class="nav-item">
                  <a href="https://openBless.com/index.php/franquias/" class="nav-link-footer">YouTube</a>
               </li>

            </ul>
         </div>
      </div>
      <div class="p-bottom">
         <p>&copy; 2019 OpenHome</p>
      </div>
   </footer>
   <script type="text/javascript" src="js/scripts.js">

   </script>
   <script type="text/javascript" src="js/script.js">

   </script>
   <script type="text/javascript" src="{{ asset('js/menu.js')}}">

   </script>

   <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

   <script type="text/javascript">
      function enviar(event) {

         event.preventDefault();
         document.getElementById('message').innerHTML = "checking";

         const url = "http://localhost:8000/api/dados";
         const data = {
            "nome": document.getElementById('nome').value,
            "email": document.getElementById('emai').value,
            "telefone": document.getElementById('telefone').value,
            "mensagem": document.getElementById('mensagem').value,

         };
         const other_params = {
            headers: {
               "content-type": "application/json; charset=UTF-8"
            },
            body: data,
            method: "POST",
            mode: "cors"
         };

         fetch(url, other_params)
            .then(function(response) {
               if (response.ok) {
                  return response.json();
               } else {
                  throw new Error("Could not reach the API: " + response.statusText);
               }
            }).then(function(data) {
               document.getElementById("message").innerHTML = data.encoded;
            }).catch(function(error) {
               document.getElementById("message").innerHTML = error.message;
            });
         return true;
      }
   </script>
</body>

</html>