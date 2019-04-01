  @extends('layout_home')

  @section('home-emprestimos')
  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    <div class="gradient-overlay-half-purple-v1 bg-img-hero-center" style="background-image: url({{URL::asset('img/1920x1080/investidor-fundo.jpg);')}}">
      <!-- Info -->
      <div class="container text-center space-2 space-3--lg">
        <div class="w-lg-75 mx-lg-auto">
          <h1 class="text-white font-weight-medium">Uma nova opção de empréstimo com garantia de imóveis</h1>
        </div>
        <div class="w-md-75 w-lg-50 mx-md-auto">
          <div class="mb-5">
            <p class="lead text-light">rápido, seguro e transparente.</p>
          </div>
          <a class="btn btn-outline-light btn-wide mb-2 mb-md-0" href="https://themes.getbootstrap.com/product/space-multipurpose-responsive-template/">
            QUERO SIMULAR
            <span class="fa fa-angle-right ml-2"></span>
          </a>
        </div>
      </div>
      <!-- End Info -->

      <div class="container-fluid space-2-bottom">
        <div class="px-lg-9">
          <!-- Icon Blocks -->
          <div class="row">
            <div class="col-sm-8 col-md-6 col-lg-4 offset-sm-2 offset-md-3 offset-lg-0 mb-7 mb-lg-0">
              <!-- Icon Blocks -->
              <div class="media align-items-center">
                <img class="max-width-10 mr-3" src="{{URL::asset('svg/components/teaching-white-icon.svg')}}" alt="Image Description">
                <div class="media-body">
                  <!-- <h2 class="h4 text-white">Learn from the best</h2> -->
                  <p class="text-light mb-0">Taxas prefixadas menores do que as oferecidas pelos bancos.</p>
                </div>
              </div>
              <!-- End Icon Blocks -->
            </div>

            <div class="col-sm-6 col-lg-4 mb-7 mb-sm-0">
              <!-- Icon Blocks -->
              <div class="media align-items-center">
                <img class="max-width-10 mr-3" src="{{URL::asset('svg/components/mountains-white-icon.svg')}}" alt="Image Description">
                <div class="media-body">
                  <!-- <h3 class="h4 text-white">Conquer</h3> -->
                  <p class="text-light mb-0">Solução para quitar dívidas, fluxo de caixa ou investir no seu negócio.</p>
                </div>
              </div>
              <!-- End Icon Blocks -->
            </div>

            <div class="col-sm-6 col-lg-4">
              <!-- Icon Blocks -->
              <div class="media align-items-center">
                <img class="max-width-10 mr-3" src="{{URL::asset('svg/components/get-rewarded-white-icon.svg')}}" alt="Image Description">
                <div class="media-body">
                  <!-- <h3 class="h4 text-white">Get rewarded</h3> -->
                  <p class="text-light mb-0">Seja financiado diretamente por investidores.</p>
                </div>
              </div>
              <!-- End Icon Blocks -->
            </div>
          </div>
          <!-- End Icon Blocks -->
        </div>
      </div>
    </div>
    <!-- End Hero Section -->

    <!-- Features Section -->
    <div class="container space-2 space-3--lg">
      <div class="row justify-content-lg-between">
        <div class="col-md-6 order-md-2 mb-5 mb-md-0">
          <div class="pl-md-4">
            <div class="mb-4">
              <!-- <span class="u-label u-label--sm u-label--purple mb-3">Manage</span> -->
              <!-- <h2 class="h3">One solution. Endless value.</h2> -->
              <p class="feature-section-paragraphy">Somos um Marketplace de Crédito e Investimento Coletivo especializado no Segmento<b> Imobiliário</b> (Peer-to-Peer Lending) rápido, seguro, transparente e online.</p>
            </div>
<!--             <a class="btn btn-sm btn-primary btn-wide" href="https://themes.getbootstrap.com/product/space-multipurpose-responsive-template/">
              Learn More
              <span class="fa fa-angle-right font-size-14 ml-2"></span>
            </a>
 -->          </div>
        </div>
        <div class="col-md-6 order-md-1">
          <object type="image/png" style="height: 50%" data="{{URL::asset('img/building-intro.png')}}"></object>
        </div>
      </div>
    </div>
    <!-- End Features Section -->

    <!-- Divider -->
    <div class="container">
      <hr class="my-0">
    </div>
    <!-- End Divider -->

    <!-- Features Section -->
    <div class="gradient-overlay-half-purple-v2 bg-img-hero-center">
      <div class="container space-2 space-3--lg">
        <div class="row justify-content-lg-between">
          <div class="col-md-6 mb-5 mb-md-0">
            <div class="pr-md-4">
              <div class="mb-4">
                <!-- <span class="u-label u-label--sm u-label--purple mb-3">Monitor</span> -->
                <!-- <h2 class="h3">Case information on a single page</h2> -->
                <p class="feature-section-paragraphy text-dark">A segurança do capital do investidor é muito importante para nós, e por isso todas as operações possuem Garantias Reais de Imóveis, e passam por uma análise de crédito e aprovação antes da oferta.
                </p>
              </div>
  <!--             <a class="btn btn-sm btn-primary btn-wide" href="https://themes.getbootstrap.com/product/space-multipurpose-responsive-template/">
                Learn More
                <span class="fa fa-angle-right font-size-14 ml-2"></span>
              </a> -->
            </div>
          </div>

          <div class="col-md-6">
            <object class="img-fluid our-premisses" type="image/jpeg" style="height:50%" data="{{URL::asset('img/house-por-cento.png')}}"></object>
          </div>
        </div>
      </div>
    </div>
    <!-- End Features Section -->

    <!-- Features Section -->
    <!----------------------------------------------------------- -->
    <!-- Tela inibida em 25/11 por Paulo Kuhl conforme definição  -->
    <!----------------------------------------------------------- -->

    <!-- <div class="container space-2-bottom space-3-bottom--lg">
      <div class="row">
        <div class="col-md-6 mb-9">

          <div class="media pr-lg-4">
            <span class="u-icon u-icon--md u-icon--shadow bg-white rounded-circle p-2 mr-4">
              <img class="u-icon__inner" src="{{URL::asset('svg/components/trophy-purple-icon.svg')}}" alt="Image Description">
            </span>
            <div class="media-body">
              <h4 class="h5">Professional design</h4>
              <p class="mb-0">Achieve virtually any look and layout from within the one template.</p>
            </div>
          </div>

        </div>

        <div class="col-md-6 mb-9">

          <div class="media pl-lg-4">
            <span class="u-icon u-icon--md u-icon--shadow bg-white rounded-circle p-2 mr-4">
              <img class="u-icon__inner" src="{{URL::asset('svg/components/rocket-cyan-icon.svg')}}" alt="Image Description">
            </span>
            <div class="media-body">
              <h4 class="h5">Unlimited power</h4>
              <p class="mb-0">Find what you need in one template and combine features at will.</p>
            </div>
          </div>

        </div>

        <div class="w-100"></div>

        <div class="col-md-6 mb-9">

          <div class="media pr-lg-4">
            <span class="u-icon u-icon--md u-icon--shadow bg-white rounded-circle p-2 mr-4">
              <img class="u-icon__inner" src="{{URL::asset('svg/components/idea-primary-icon.svg')}}" alt="Image Description">
            </span>
            <div class="media-body">
              <h4 class="h5">Super-light</h4>
              <p class="mb-0">Manage document assembly with sophisticated yet super-light templates.</p>
            </div>
          </div>

        </div>

        <div class="col-md-6 mb-9">

          <div class="media pl-lg-4">
            <span class="u-icon u-icon--md u-icon--shadow bg-white rounded-circle p-2 mr-4">
              <img class="u-icon__inner" src="{{URL::asset('svg/components/documentation-red-icon.svg')}}" alt="Image Description">
            </span>
            <div class="media-body">
              <h4 class="h5">Fully documented</h4>
              <p class="mb-0">Every component and plugin is well documented with live examples.</p>
            </div>
          </div>

        </div>

        <div class="w-100"></div>

        <div class="col-md-6 mb-9 mb-md-0">

          <div class="media pr-lg-4">
            <span class="u-icon u-icon--md u-icon--shadow bg-white rounded-circle p-2 mr-4">
              <img class="u-icon__inner" src="{{URL::asset('svg/components/sucure-payment-brown-icon.svg')}}" alt="Image Description">
            </span>
            <div class="media-body">
              <h4 class="h5">Premium images</h4>
              <p class="mb-0">Premium stock images are included with your purchase in the download package.</p>
            </div>
          </div>

        </div>

        <div class="col-md-6">

          <div class="media pl-lg-4">
            <span class="u-icon u-icon--md u-icon--shadow bg-white rounded-circle p-2 mr-4">
              <img class="u-icon__inner" src="{{URL::asset('svg/components/social-services-dark-icon.svg')}}" alt="Image Description">
            </span>
            <div class="media-body">
              <h4 class="h5">Social services</h4>
              <p class="mb-0">We strive to figure out ways to help your audience grow through all social platforms.</p>
            </div>
          </div>

        </div>
      </div>
    </div> -->
    <!-- End Features Section -->

    <!-- CTA Section -->
    <!-- <div class="gradient-overlay-half-purple-v2 bg-img-hero-center" style="background-image: url({{URL::asset('img/1920x400/img1.jp);')}}">
      <div class="container text-center space-2 specifc-align-tems">
        <p class="landing-scenario-header">  <h2> CENÁRIO DE CRÉDITO NO PAÍS </h2>   </p>
        <div class="container-landing-scenario">
          <div class="bank-credit">
            <img src="{{URL::asset('img/investor-home-bank-credit.png')}}" class="img-fluid" alt="">
            <p>5 bancos concentram 80% do crédito no país</p>
          </div>
          <div class="interest-graph">
            <img src="{{URL::asset('img/investor-home-interest-graph.png')}}" class="img-fluid" alt="">
            <p>Taxa de juros, a Selic, no menor nível histórico</p>
          </div>
          <div class="spread-graph">
            <img src="{{URL::asset('img/investor-home-spread-graph.png')}}" class="img-fluid" alt="">
            <p>Spread bancário no Brasil é alto</p>
          </div>
          <div class="seek-alternatives">
            <img src="{{URL::asset('img/investor-home-seek-alternatives.png')}}" class="img-fluid" alt="">
            <p>Investidores procuram alternativas após a queda de juros</p>
          </div>
          <div class="bank-profit">
            <img src="{{URL::asset('img/investor-home-bank-profit.png')}}" class="img-fluid" alt="">
            <p>Bancos registram os maiores lucros entre as empresas de capital aberto.</p>
          </div>
        </div> -->
          <!-------------------------------------------->
          <!-- Elemente hidden by Cleiton 2018 DEC-03 -->
          <!-------------------------------------------->
        <!--<div class="w-lg-50 mx-lg-auto">-->
          <!-- <div class="mb-5">
            <h2 class="h3 text-white">Space makes you look at things from a different perspectives.</h2>
          </div>
          <a class="btn btn-primary btn-wide mb-2 mb-md-0" href="https://themes.getbootstrap.com/product/space-multipurpose-responsive-template/">Start Free Trial</a>
        </div> -->
      <!-- </div>
      <p class="info-source">Fontes: G1, BACEN, Estadão, Reuters </p>
    </div> -->
    <!-- End CTA Section -->

    <!-- Pricing Section -->
    <div class="container space-2 space-3--lg">
      <!-- Title -->
      <div class="mx-md-auto mb-9">
          <div class="what-we-do">
            <!-- <div class="title-what-we-do"> 
              <h2>O QUE FAZEMOS?</h2>
            </div> -->
            <h1>O Que Fazemos?</h1>
            <p>
              Conectamos pessoas e empresas à procura de crédito com investidores e instituições com dinheiro para emprestar.                
            </p>
            <p>
              Os dois lados saem ganhando: as pessoas e empresas pagam taxas menores e os investidores ganham retornos maiores.
            </p>
            <img src="{{URL::asset('img/what-we-do-img.png')}}" class="img-fluid" alt="">
          </div>
      </div>
      <div class="mx-md-auto mb-9">
          <div class="what-we-do-advanteges">
            <ul>
              <li>Retornos maiores sobre os investimentos</li>
              <li>Sem taxa de administração</li>
              <li>Possibilidade de analisar o risco e a garantia de cada operação</li>
              <li>Transparência, segurança e controle dos investimentos</li>
            </ul>
            <p style= "color: red"><b>Ambos acessam as melhores taxas</b></p>
            <ul>
              <li>Taxas de juros menores do que as oferecidas pelos bancos</li>
              <li>Menos burocracia</li>
              <li>Acesso à uma nova fonte de captação</li>
            </ul>
          </div>
      </div>
      <!-- End Title -->
      <h1 class="text-center">Público Alvo</h1>
      <div class="card-group d-block d-md-flex shadow text-center mb-5">
        <!-- Pricing -->
        <div class="card">
          <!-- Header -->
          <header class="card-body pt-6">

          <img class="pessoa-fisica-imagem" src="{{URL::asset('img/1920x1080/man.svg')}}" class="img-fluid" alt="">
          <h5 class="pessoa-fisica-frase">
            <b> Pessoa Física </b>
          </h5>
          <p class="pessoa-fisica-linha">____________________</p>
          <!-- <small class="d-block text-muted">Rendimento acima de R$ 10 mil por mês </small> -->

            <!-- <h4>Team</h4>
            <h5 class="h1 text-primary">
              $69
            </h5>
            <p>per active case, per month<br>billed monthly</p>
            <small class="d-block text-muted">No credit card required. Request a Demo</small> -->
          </header>
          <!-- End Header -->

          <!-- Content -->
          <!-- <div class="card-footer border-0 pb-6">
            <button type="button" class="btn btn-sm btn-primary">Start Free Trial</button>
          </div> -->
          <!-- End Content -->
        </div>
        <!-- End Pricing -->

        <!-- Pricing -->
        <div class="card bg-purple text-white">
          <!-- Header -->
          <header class="card-body pt-6">

          <img class="empreendedores-imagem" src="{{URL::asset('img/1920x1080/team.svg')}}" class="img-fluid" alt="">
           <h5 class="empreendedores-frase">
            <b>Empreendedores e Pequenas Empresas</b>
           </h5>
           <p class="empreendedores-linha">____________________</p>
           <small class="d-block text-muted-empreendedor">Receita Anual: < R$ 5 Milhões </small>
            <!-- <h4>Growth</h4>
            <h5 class="h1">
              $99
            </h5>
            <p class="text-light">per active case, per month<br>billed monthly</p>
            <small class="d-block text-white-50">No credit card required. Request a Demo</small> -->
          </header>
          <!-- End Header -->

          <!-- Content -->
          <!-- <div class="card-footer bg-purple border-0 pb-6">
            <button type="button" class="btn btn-sm btn-light">Start Free Trial</button>
          </div> -->
          <!-- End Content -->
        </div>
        <!-- End Pricing -->

        <!-- Pricing -->
        <div class="card">
          <!-- Header -->
          <header class="card-body pt-6">

          <img class="empresas-imagem" src="{{URL::asset('img/1920x1080/enterprise.png')}}" class="img-fluid" alt="" style="height: 90px;">
          <h5 class="empresas-frase">
          <b>Médias e Grandes  Empresas</b>
          </h5>
          <p class="empresas-linha">____________________</p>
          <small class="d-block text-muted">Receita Anual: > R$ 5 Milhões </small>
            <!-- <h4>Enterprises</h4>
            <h5 class="h1 text-primary">
              $129
            </h5>
            <p>per active case, per month<br>billed monthly</p>
            <small class="d-block text-muted">No credit card required. Request a Demo</small> -->
          </header>
          <!-- End Header -->

          <!-- Content -->
          <!-- <div class="card-footer border-0 pb-6">
            <button type="button" class="btn btn-sm btn-primary">Start Free Trial</button>
          </div> -->
          <!-- End Content -->
        </div>
        <!-- End Pricing -->
      </div>

      <!-- <div class="w-lg-60 text-center mx-lg-auto">
        <p>If you are interested in plans for more than 1,000 cases, please shoot us an email at <a href="#mailto:support@htmlstream.com">support@htmlstream.com</a> for custom pricing.</p>
      </div> -->
    </div>
    <!-- End Pricing Section -->

    <!-- Features Section -->
    <div class="bg-gray-100">
      <div class="container space-2 space-3--lg">
        <div class="row justify-content-lg-between align-items-md-center">
          <!-- <div class="col-md-6 col-lg-5 order-md-1 mb-9 mb-md-0">
            <object type="image/svg+xml" data="{{URL::asset('svg/mockups/phone-mockup-3.svg')}}"></object>
          </div> -->

          <div class="col-md-6 order-md-2">
            <!-- Title -->
            <!-- alterações slide 11 -->
            <div style="width: 1080px">
              <h2 style="text-align:center">Perguntas?</h2>
              <a href="#"> <p style="text-align:center">Veja as perguntas mais frequentes.</p> </a>
            </div>
            <!-- End Title -->

            <!-- Button -->
            <!-- <button type="button" class="btn btn-xs btn-dark text-left mb-2 mb-md-0 mr-md-2">
              <span class="media align-items-center">
                <span class="fab fa-apple fa-3x mr-3"></span>
                <span class="d-block">
                  <span class="d-block">Download on the</span>
                  <strong class="d-block font-size-14">App Store</strong>
                </span>
              </span>
            </button> -->
            <!-- End Button -->

            <!-- Button -->
            <!-- <button type="button" class="btn btn-xs btn-dark text-left mb-2 mb-md-0">
              <span class="media align-items-center">
                <span class="fab fa-google-play fa-3x mr-3"></span>
                <span class="d-block">
                  <span class="d-block">Get it on</span>
                  <strong class="d-block font-size-14">Google Play</strong>
                </span>
              </span>
            </button> -->
            <!-- End Button -->

            <!-- Divider -->
            <!-- <div class="max-width-10">
              <hr class="my-5">
            </div> -->
            <!-- End Divider -->

            <!-- Review -->
            <!-- <div class="media">
              <img class="u-avatar rounded-circle mr-3" src="{{URL::asset('img/100x100/img1.jpg" alt="Image Description')}}">
              <div class="media-body">
                <h4 class="h6 mb-0">Maria Muszynska</h4>
                <p class="text-muted">"I love Space! I love the ease of use, I love the fact that I have total creative freedom. The template is really nice and offers quite a large set of options. It's beautiful and the coding is done quickly and seamlessly."</p>
              </div> -->
            </div>
            <!-- End Review -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Features Section -->

    <!-- Clients Section -->
    <!----------------------------------------------------------- -->
    <!-- Tela inibida em 25/11 por Paulo Kuhl conforme definição  -->
    <!----------------------------------------------------------- -->

      <!-- Title -->
    <!-- <div class="container space-2 space-3--lg">

      <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
        <h2 class="h3">Space loved by more than 35,500 brands globally</h2>
      </div>


      <div class="js-slick-carousel u-slick"
           data-autoplay="true"
           data-speed="5000"
           data-infinite="true"
           data-slides-show="6"
           data-responsive='[{
             "breakpoint": 1200,
             "settings": {
               "slidesToShow": 4
             }
           }, {
             "breakpoint": 992,
             "settings": {
               "slidesToShow": 4
             }
           }, {
             "breakpoint": 768,
             "settings": {
               "slidesToShow": 3
             }
           }, {
             "breakpoint": 576,
             "settings": {
               "slidesToShow": 3
             }
           }, {
             "breakpoint": 480,
             "settings": {
               "slidesToShow": 2
             }
           }]'>
        <div class="js-slide">
          <img class="u-clients" src="{{URL::asset('img/clients/amazon.png" alt="Image Description')}}">
        </div>
        <div class="js-slide">
          <img class="u-clients" src="{{URL::asset('img/clients/google.png" alt="Image Description')}}">
        </div>
        <div class="js-slide">
          <img class="u-clients" src="{{URL::asset('img/clients/paypal.png" alt="Image Description')}}">
        </div>
        <div class="js-slide">
          <img class="u-clients" src="{{URL::asset('img/clients/slack.png" alt="Image Description')}}">
        </div>
        <div class="js-slide">
          <img class="u-clients" src="{{URL::asset('img/clients/samsung.png" alt="Image Description')}}">
        </div>
        <div class="js-slide">
          <img class="u-clients" src="{{URL::asset('img/clients/airbnb.png" alt="Image Description')}}">
        </div>
        <div class="js-slide">
          <img class="u-clients" src="{{URL::asset('img/clients/lenovo.png" alt="Image Description')}}">
        </div>
        <div class="js-slide">
          <img class="u-clients" src="{{URL::asset('img/clients/spotify.png" alt="Image Description')}}">
        </div>
      </div>

    </div> -->
    <!-- End Clients Section -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->
  @endsection