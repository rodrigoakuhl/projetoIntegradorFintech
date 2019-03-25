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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">Starter</li>
                    </ol>
                </div>
                <h4 class="page-title">Oportunidades</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="card">
                <div class="card-body">
                @foreach($oportunidades as $oportunidade)
                <div id="full-width-modal-{{ $oportunidade->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-full-width">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="fullWidthModalLabel">{{ $oportunidade->company_name }} - {{ $oportunidade->rate }}</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="mt-4">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <h6 class="font-14">Cidade/UF</h6>
                                                <p class="text-sm lh-150">{{ $oportunidade->city }} / {{ $oportunidade->state }}</p>
                                            </div>
                                            <div class="col-md-2">
                                                <h6 class="font-14">Taxa de Juros:</h6>
                                                <p class="text-sm lh-150">{{  number_format(($oportunidade->return_rate/12), 2, ',', '.').'% a.m.' }}</p>
                                            </div>
                                            <div class="col-md-2">
                                                <h6 class="font-14">Valor da parcela:</h6>
                                                <p class="text-sm lh-150">TO DO</p>
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-2 col-lg-6">
                                        <div class="card widget-flat bg-primary">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="mdi mdi-currency-usd widget-icon bg-primary-lighten rounded-circle text-primary"></i>
                                                </div>
                                                <h5 class="text-light font-weight-normal mt-0" title="Revenue">Valor solicitado</h5>
                                                <h3 class="mt-3 mb-3 text-white">{{ number_format($oportunidade->requested_amount, 2, ',', '.') }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-6">
                                        <div class="card widget-flat bg-primary">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="mdi mdi mdi-av-timer widget-icon bg-primary-lighten rounded-circle text-primary"></i>
                                                </div>
                                                <h5 class="text-light font-weight-normal mt-0" title="Revenue">Duração</h5>
                                                <h3 class="mt-3 mb-3 text-white">{{ $oportunidade->duration.' meses' }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6">
                                        <div class="card widget-flat bg-primary">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="mdi mdi-currency-usd widget-icon bg-primary-lighten rounded-circle text-primary"></i>
                                                </div>
                                                <h5 class="text-light font-weight-normal mt-0" title="Revenue">Valor total do empréstimo</h5>
                                                <h3 class="mt-3 mb-3 text-white">TO DO</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
                @endforeach
                    <div class="table-responsive-sm">
                        <table class="table table-centered mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Rating</th>
                                    <th>Valor Solicitado</th>
                                    <th>Prazo</th>
                                    <th>Rendimento</th>
                                    <th>Garantia</th>
                                    <th>Término</th>
                                    <th>%Levantado</th>
                                    <th style="text-align: center;">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($oportunidades as $oportunidade)
                                <tr>
                                    <td> {{ $oportunidade->id }} </td>
                                    <td> {{ $oportunidade->rate }} </td>
                                    <td> {{  'R$ '.number_format($oportunidade->requested_amount, 2, ',', '.') }} </td>
                                    <td> {{ $oportunidade->duration.' meses' }} </td>
                                    <td> {{  number_format($oportunidade->return_rate, 2, ',', '.').' a.a.' }} </td>
                                    <td> {{  number_format($oportunidade->guarantee_percent, 0, ',', '.').'%' }} </td>
                                    <td> 
                                    
                                        <!-- {{ date( 'd/m/Y' , strtotime($oportunidade->date_end))}} -->
                                        {{ 
                                            date_diff(
                                                date_create(date("Y-m-d")), 
                                                date_create($oportunidade->date_end)
                                            )->format("%a").' dias'  
                                        }}
                                    
                                    </td>
                                    <td>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: {{ $oportunidade->funding_completed }}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        {{  number_format($oportunidade->funding_completed, 0, ',', '.').'%' }}
                                    </td>
                                    <td>
                                        @if($oportunidade->status)
                                            <button
                                                id="btnInvestir"                                  
                                                class="btn btn-block btn-success" 
                                                type="button"
                                                data-id = "{{ $oportunidade->id }}"
                                                data-toggle="modal"
                                                data-target="#full-width-modal-{{ $oportunidade->id }}"
                                            >
                                                Investir
                                            </button>
                                        @else
                                            <button href="#" disabled class="btn btn-block btn-success" role="button">
                                                Encerrado
                                            </button>
                                        @endif
                                        <a href="/dashboard/oportunidade-detalhe/{{ $oportunidade->id }}" class="btn btn-block btn-secondary" role="button">
                                            Detalhes
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->

                </div> <!-- end card body-->
            </div>    
</div> <!-- container -->
@endsection