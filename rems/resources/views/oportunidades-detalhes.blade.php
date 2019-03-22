@extends('layout_dashboard')
<!-- Start Content-->
@section('content')
<div class="container-fluid">
                        
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                        <li class="breadcrumb-item active">Product Details</li>
                    </ol>
                </div>
                <h4 class="page-title">Detalhes</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- Product image -->
                            <a href="javascript: void(0);" class="text-center d-block mb-4">
                                <img src="{{URL::asset('dash/assets/images/detalhes-teste01.jpg')}}" class="img-fluid" style="max-width: 580px;" alt="Product-img">
                            </a>

                            <div class="d-lg-flex d-none justify-content-center">
                                <a href="javascript: void(0);">
                                    <img src="{{URL::asset('dash/assets/images/detalhes-teste01.jpg')}}" class="img-fluid img-thumbnail p-2" style="max-width: 175px;" alt="Product-img">
                                </a>
                                <a href="javascript: void(0);" class="ml-2">
                                    <img src="{{URL::asset('dash/assets/images/detalhes-teste02.jpg')}}" class="img-fluid img-thumbnail p-2" style="max-width: 175px;" alt="Product-img">
                                </a>
                                <a href="javascript: void(0);" class="ml-2">
                                    <img src="{{URL::asset('dash/assets/images/detalhes-teste03.png')}}" class="img-fluid img-thumbnail p-2" style="max-width: 175px;" alt="Product-img">
                                </a>
                            </div>
                        </div> <!-- end col -->
                        <div class="col-lg-7">
                            <form class="pl-lg-4">
                                <!-- Product title -->
                                <h3 class="mt-0">KEY ASSOCIADOS - SOLUÇÕES SUSTENTÁVEIS <a href="apps-ecommerce-add-products.html" class="text-muted"><i class="mdi mdi-square-edit-outline ml-2"></i></a> </h3>
                                <p class="mb-1">Captação em aberto</p>

                                <!-- Product stock -->
                                <div class="mt-6">
                                    <h4><span class="badge badge-success-lighten">Rating - B6</span></h4>
                                </div>

                                <!-- Product description -->
                                <div class="mt-4">
                                    <h6 class="font-14">Juros:</h6>
                                    <h3>21,7 % a.a</h3>
                                </div>

                                <div class="mt-4">
                                    <h6 class="font-14">Prazo:</h6>
                                    <h3>24 meses</h3>
                                </div>

                                <div class="mt-4">
                                    <h6 class="font-14">Finaliza em até:</h6>
                                    <h3>10 dias</h3>
                                </div>

                                <div class="mt-4">
                                    <h6 class="font-14">Número de investidores:</h6>
                                    <h3>49</h3>
                                </div>

                                <!-- Quantity -->
                                <div class="mt-4">
                                    <h6 class="font-14">Valor da oferta</h6>
                                    <div class="d-flex">
                                        <input type="number" min="1" value="1" class="form-control" placeholder="Qty" style="width: 90px;">
                                        <button type="button" class="btn btn-danger ml-2"><i class="mdi mdi-calculator mr-2"></i>SIMULAR OFERTA</button>
                                    </div>
                                </div>
                    
                                <!-- Product description -->
                                <div class="mt-4">
                                    <h6 class="font-14">Detalhes:</h6>
                                    <p>
                                    Há 20 anos trabalham com foco na valorização de cada um de seus clientes, desenvolvendo projetos que atendam as necessidades e particularidades de cada modelo de negócio. Tem como diretriz, oferecer soluções específicas, completas e que tragam as melhorias desejadas, sempre buscando a inovação em produtos, metodologias e na forma de atuação.
                                    </p>
                                </div>

                                <!-- Product information -->
                                <div class="mt-4">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="font-14">Faturamento:</h6>
                                            <p class="text-sm lh-150">R$10.000.000,00</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="font-14">Lucro líquido mensal:</h6>
                                            <p class="text-sm lh-150">R$200.000,00</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="font-14">Endividamento:</h6>
                                            <p class="text-sm lh-150">R$150.000,00</p>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div> <!-- end col -->
                    </div> <!-- end row-->

                    <div class="table-responsive mt-3">
                        <table class="table table-bordered table-centered mb-0">
                            <thead class="thead-light">
                                <tr>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Prazo Total (Meses)*</td>
                                    <td>24</td>
                                </tr>
                                <tr>
                                    <td>Prazo Máximo da Captação</td>
                                    <td>10 dia/s e 21 hora/s</td>
                                </tr>
                                <tr>
                                    <td>Motivo</td>
                                    <td>Expansão</td>
                                </tr>
                                <tr>
                                    <td>Nome do responsável</td>
                                    <td>Ricardo Valente da silva</td>
                                </tr>
                                <tr>
                                    <td>CNPJ</td>
                                    <td>03.006.106/0001-90</td>
                                </tr>
                                <tr>
                                    <td>Número de Empregados</td>
                                    <td>27</td>
                                </tr>
                                <tr>
                                    <td>Ano de fundação</td>
                                    <td>21/05/1998</td>
                                </tr>
                                <tr>
                                    <td>Página Web</td>
                                    <td>http://www.keyassociados.com.br/</td>
                                </tr>
                                <tr>
                                    <td>Endereço</td>
                                    <td>AV PAULISTA, 2439, BELA VISTA, SAO PAULO</td>
                                </tr>

                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->
                    
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->  
</div>
@endsection