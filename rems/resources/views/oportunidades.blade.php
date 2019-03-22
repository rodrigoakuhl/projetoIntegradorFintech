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
                                            <a href="/dashboard/oportunidade-investir" class="btn btn-block btn-success" role="button">
                                                Investir
                                            </a>
                                        @else
                                            <button href="#" disabled class="btn btn-block btn-success" role="button">
                                                Encerrado
                                            </button>
                                        @endif
                                        <a href="/dashboard/oportunidade-detalhe" class="btn btn-block btn-secondary" role="button">
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