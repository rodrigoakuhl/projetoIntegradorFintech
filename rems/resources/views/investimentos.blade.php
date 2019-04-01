@extends('layout_dashboard')
<!-- Start Content-->
@section('content')
<div class="container-fluid">
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                </div>
                <h4 class="page-title">Resumo dos meus investimentos</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="card">

        <div class="table-responsive-sm">
            <table class="table table-bordered table-centered mb-0">
                <thead>
                    <tr>
                        <th>Empresa</th>
                        <th>Valor</th>
                        <th>Status</th>
                        <th>Juros</th>
                        <th>Feito em</th>
                        <th class="text-center">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($operacoes as $operacao)
                    <tr>
                        <td>{{ $operacao->oportunidade->company_name }}</td>
                        <td>{{ $operacao->amount }}</td>
                        <td>
                            @switch($operacao->status)
                                @case(1)
                                Aguardando pagamento @break
                                @case(2)
                                Processado @break
                                @case(3)
                                Em dia @break
                                @case(4)
                                Em atraso @break
                            @endswitch    
                        </td>
                        <td>{{  number_format($operacao->oportunidade->return_rate, 2, ',', '.').'% a.m.' }}</td>
                        <td>
                            {{ date('d/m/Y', strtotime($operacao->created_at)) }}
                        </td>
                        <td class="table-action text-center">
                            @if($operacao->status === 1)
                                <a href="/dashboard/investimento-cancelar/{{ $operacao->id }}" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div> <!-- end card body-->
</div> <!-- container -->
@endsection