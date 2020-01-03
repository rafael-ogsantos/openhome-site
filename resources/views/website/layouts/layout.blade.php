

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OpenBless</title>
    <!--Ion Icons-->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
    <!--Our own stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/card.css')}}">
    <link rel="stylesheet" href="{{ asset('css/detalhes.css')}}">
    <link rel="stylesheet" href="{{ asset('css/card-consulta.css')}}">
    <link rel="stylesheet" href="{{ asset('css/modal.css')}}">
   <script src="https://kit.fontawesome.com/7b14f03178.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <script
   src="https://code.jquery.com/jquery-3.4.1.js"
   integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
   crossorigin="anonymous"></script>
</head>

<body>
        <header>
            <div class="tamanho box-shadow">
                <div class="containerMenu">
                    <div id="icon-botton" class="menu-icons open">
                        <i class="icon ion-md-menu"></i>
                    </div> 
    
                   <nav>
                        <a href="{{ url('/')}}"><img src="{{ asset('image/openbless.png')}}" width="80px"></a>
                        <div class="menu-header-menu-right">
                           <ul>
                                <li class="nav-item space">
                                    <a href="{{ route('list.imoveis')}}" class="nav-link">Home</a>
                                </li>

                                <li class="nav-item space">
                                    <a href="https://openbless.com/index.php/sobre/" class="nav-link">Quem somos</a>
                                </li>

                                <li class="nav-item space">
                                    <a href="https://openclub.site/" class="nav-link">OpenClub</a>
                                </li>

                                <li class="nav-item space">
                                    <a href="https://openBless.com/index.php/franquias/" class="nav-link">Franquias</a>
                                </li>
                    
                                <li class="nav-item space">
                                    <a href="#" class="nav-link">Entre como Franqueado</a>
                                </li>

                                <li class="nav-item space">
                                    <a href="#" class="nav-link">Entre</a>
                                </li>
                           </ul>
                        </div>
                   </nav>
                </div>    
            </div>
        </header>        

@yield('content')

<footer class="footer-consulta">
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
                       <a href="{{ route('list.imoveis')}}" class="nav-link-footer">Home</a>
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
                    <li class="space-top">
                      <a href="#" class="nav-link-footer">
                      <i class="fab fa-instagram"></i>
                          Instagram
                      </a>
                    </li>
                    <li class="space-top">
                        <a href="https://openbless.com/index.php/sobre/" class="nav-link-footer">
                        <i class="fab fa-facebook-square"></i>
                          Facebook
                        </a>
                    </li>
                    <li class="space-top">
                        <a href="https://openclub.site/" class="nav-link-footer">
                           <i class="fab fa-twitter"></i>
                           Twitter
                        </a>
                    </li>
                    <li class="space-top">
                        <a href="https://openBless.com/index.php/franquias/" class="nav-link-footer">
                            <i class="fab fa-youtube"></i>
                            YouTube
                       </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="p-bottom">
           <p>&copy; 2019 OpenHome</p>
        </div>
</footer>
    <script type="text/javascript" src="scripts.js">
    
    </script>
    <script type="text/javascript" src="js/script.js">
    
    </script>

    <script type="text/javascript" src="{{ asset('js/modal.js')}}">
    
    </script>
    <script type="text/javascript">
var query = location.search.slice(1);
var partes = query.split('&');
var data = {};
partes.forEach(function (parte) {
    var chaveValor = parte.split('=');
    var chave = chaveValor[0];
    var valor = chaveValor[1];
    data[chave] = valor;
});
console.log(data["id"]) //10
var conteudo = document.getElementById('listarD')

fetch(`http://app.openbless.com/api/imoveis/${data['id']}`)
.then(res => res.json())
.then(data => {
            if(data.banheiros <= 1 ){
                document.getElementById('qtsB').innerHTML = 'banheiro'
            }else{
                document.getElementById('qtsB').innerHTML = 'banheiros'
            }

            if(data.quartos <= 1 ){
                document.getElementById('qtsQ').innerHTML = 'quarto'
            }else{
                document.getElementById('qtsQ').innerHTML = 'quartos'
            }

           document.getElementById('banheiros').innerHTML = `
             ${data.banheiros}
           
           `
           document.getElementById('garagem').innerHTML = `
             ${data.garagem}
           
           `

           document.getElementById('area').innerHTML = `
             ${data.areatotal}
           
           `

           document.getElementById('quartos').innerHTML = `
             ${data.quartos} 
           
           `

           document.getElementById('listarD').innerHTML = `
         
            <figure  class="thumbnail2">
                
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3535.992969370693!2d-48.65244308494042!3d-27.593747582839104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95274a10c8f6f525%3A0xeb466ccbf5877b4e!2sR.%20Alvino%20Teodoro%20de%20Melo%2C%20100%20-%20Forquilhinhas%2C%20S%C3%A3o%20Jos%C3%A9%20-%20SC%2C%2088106-797!5e0!3m2!1spt-BR!2sbr!4v1570813363728!5m2!1spt-BR!2sbr" width="100%" height="100%" frameborder="0" style="top: -5px; border:0;" allowfullscreen=""></iframe>
                
            </figure>
       
            
           `
           document.getElementById('imgI').innerHTML = `
            <figure  class="thumbnail3">
                     <img src="http://app.openbless.com/${data.image}" class="imgs">
                     <figcaption class="tipo">
						 ${data.negociacao}
					</figcaption>
               </figure>
           `

            document.getElementById('detalhes').innerHTML=`
           
          
           <div class="padding">
          
           <h3 class="endereco">${data.endereco} - ${data.bairro}, ${data.numero} <i class="fas fa-map-marker-alt"></i></h3> 
           <strong>Descrição: </strong>${data.descricao}
           
            `
})

</script>
</body>
</html>