@extends('layout_dashboard')
<!-- Start Content-->
@section('content')
<div class="container-fluid">
                        
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
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
                                <img src="{{URL::asset('dash/assets/images/detalhes-picture-01-company-'.$oportunidade->id.'.jpg')}}" class="img-fluid" style="max-width: 480px;" alt="Product-img">
                            </a>

                            <div class="d-lg-flex d-none justify-content-center">
                                <a href="javascript: void(0);">
                                    <img src="{{URL::asset('dash/assets/images/detalhes-picture-01-company-'.$oportunidade->id.'.jpg')}}" class="img-fluid img-thumbnail p-2" style="max-width: 150px;" alt="Product-img">
                                </a>
                                <a href="javascript: void(0);" class="ml-2">
                                    <img src="{{URL::asset('dash/assets/images/detalhes-picture-02-company-'.$oportunidade->id.'.jpg')}}" class="img-fluid img-thumbnail p-2" style="max-width: 150px;" alt="Product-img">
                                </a>
                            </div>
                        </div> <!-- end col -->
                        <div class="col-lg-7">
                            <form class="pl-lg-4">
                                <!-- Product title -->
                                <h3 class="mt-0">{{ $oportunidade->company_name }}<a href="apps-ecommerce-add-products.html" class="text-muted"></a> </h3>
                                <p class="mb-1">
                                    @if ($oportunidade->status === 1)
                                         Captação em aberto
                                    @else
                                        Captação encerrada
                                    @endif
                                </p>

                                <!-- Product stock -->
                                <div class="mt-6">
                                    <h4><span class="badge badge-success-lighten">Rating - {{ $oportunidade->rate }}</span></h4>
                                </div>

                                <!-- Product description -->
                                <div class="mt-4">
                                    <h6 class="font-14">Juros:</h6>
                                    <h3>{{  number_format($oportunidade->return_rate, 2, ',', '.').' a.a.' }}</h3>
                                </div>

                                <div class="mt-4">
                                    <h6 class="font-14">Prazo:</h6>
                                    <h3>{{ $oportunidade->duration.' meses' }}</h3>
                                </div>

                                <div class="mt-4">
                                    <h6 class="font-14">Finaliza em até:</h6>
                                    <h3>
                                    
                                        {{ 
                                            date_diff(
                                                date_create(date("Y-m-d")), 
                                                date_create($oportunidade->date_end)
                                            )->format("%a").' dias'  
                                        }}
                                    
                                    </h3>
                                </div>

                                <div class="mt-4">
                                    <h6 class="font-14">Número de investidores:</h6>
                                    <h3>{{ $oportunidade->number_investors }}</h3>
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
                                        {{ $oportunidade->company_description }}
                                    </p>
                                </div>

                                <!-- Product information -->
                                <div class="mt-4">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="font-14">Faturamento:</h6>
                                            <p class="text-sm lh-150">{{  'R$ '.number_format($oportunidade->company_revenue, 2, ',', '.') }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="font-14">Lucro líquido mensal:</h6>
                                            <p class="text-sm lh-150">{{  'R$ '.number_format($oportunidade->company_monthly_net_profit, 2, ',', '.') }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="font-14">Endividamento:</h6>
                                            <p class="text-sm lh-150">{{  'R$ '.number_format($oportunidade->company_debt, 2, ',', '.') }}</p>
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
                                    <td>{{ $oportunidade->duration.' meses' }}</td>
                                </tr>
                                <tr>
                                    <td>Prazo Máximo da Captação</td>
                                    <td>
                                    
                                        {{ 
                                            date_diff(
                                                date_create(date("Y-m-d")), 
                                                date_create($oportunidade->date_end)
                                            )->format("%a").' dias'  
                                        }}
                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td>Motivo</td>
                                    <td>{{ $oportunidade->loan_reason }}</td>
                                </tr>
                                <tr>
                                    <td>Nome do responsável</td>
                                    <td>{{ $oportunidade->company_responsible }}</td>
                                </tr>
                                <tr>
                                    <td>CNPJ</td>
                                    <td>{{ $oportunidade->company_tax_id }}</td>
                                </tr>
                                <tr>
                                    <td>Número de Empregados</td>
                                    <td>{{ $oportunidade->number_employees }}</td>
                                </tr>
                                <tr>
                                    <td>Ano de fundação</td>
                                    <td>{{ date('d/m/Y', strtotime($oportunidade->fundation_year)) }}</td>
                                </tr>
                                <tr>
                                    <td>Página Web</td>
                                    <td>{{ $oportunidade->company_web_page }}</td>
                                </tr>
                                <tr>
                                    <td>Endereço</td>
                                    <td>
                                        {{ $oportunidade->street_name }}, {{ $oportunidade->street_number }}, 
                                        {{ $oportunidade->neighborhood }}, {{ $oportunidade->city }}
                                    </td>
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