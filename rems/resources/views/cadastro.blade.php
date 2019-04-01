@extends('layout_dashboard')

@section('content')

<h4 class="header-title mb-3">Edite suas informações</h4>

<form id="formCadastro" action="/dashboard/cadastro" method="POST" enctype="multipart/form-data">
@csrf
    <div id="progressbarwizard">

        <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-3">
            <li class="nav-item">
                <a href="#" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active show" id="btn-personalInformation">
                    <i class="mdi mdi-account-circle mr-1"></i>
                    <span class="d-none d-sm-inline">INFORMAÇÕES PESSOAIS</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2" id="btn-addressInformation">
                    <i class="mdi mdi-mailbox mr-1"></i>
                    <span class="d-none d-sm-inline">ENDEREÇO</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#profile-tab-3" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2" id="btn-anotherInformation">
                    <i class="mdi mdi-arrange-bring-forward mr-1"></i>
                    <span class="d-none d-sm-inline">OUTRAS INFORMAÇÕES</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#profile-tab-4" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2" id="btn-bankInformation">
                    <i class="mdi mdi-bank mr-1"></i>
                    <span class="d-none d-sm-inline">CONTA BANCÁRIA PARA PAGAMENTOS</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#profile-tab-4" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2" id="btn-documents">
                    <i class="mdi mdi-file-document mr-1"></i>
                    <span class="d-none d-sm-inline">DOCUMENTOS</span>
                </a>
            </li>                                    
            <li class="nav-item">
                <a href="#finish-2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2" id="btn-finish">
                    <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                    <span class="d-none d-sm-inline">CONCLUÍDO</span>
                </a>
            </li>
        </ul>
    
        <div class="tab-content b-0 mb-0">
            <span>% do Cadastro Concluído</span>
            <div id="bar" class="progress mb-3" style="height: 7px;">
                <div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success"></div>
            </div>
    
            <div class="tab-pane active show" id="personalInformation">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row mb-1">
                            <label class="col-md-1 col-form-label" for="name">Nome</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="name" name="name" value="{{ $cadastro->name }}">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-1 col-form-label" for="gender"> Sexo</label>
                            <div class="col-md-9">
                            <select name="gender" class="form-control" data-option="{{ $cadastro->gender }}">
                                <option value = "" selected></option>
                                <option value = "male">Masculino</option>
                                <option value = "female">Feminino</option>
                            </select>
                                <!-- <input type="text" id="gender" name="gender" class="form-control"> -->
                            </div>
                        </div>
                        
                        <div class="form-group row mb-3">
                            <label class="col-md-1 col-form-label" for="email">Email</label>
                            <div class="col-md-9">
                                <input type="text" id="email" name="email" class="form-control" value="{{ $cadastro->usuario->email }}">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-1 col-form-label" for="marital_status">Estado civil</label>
                            <div class="col-md-9">
                                <select name = "marital_status" class="form-control" data-option="{{ $cadastro->marital_status }}">
                                    <option value = "" selected></option>
                                    <option value="married">Casado(a)</option>
                                    <option value="single">Solteiro(a)</option>
                                    <option value="widowed">Viúvo(a)</option>
                                    <option value="separated">Desquitado(a)</option>
                                    <option value="divorced">Divorciado(a)</option>
                                    <option value="legally_separated">Separado(a) Judicialmente</option>
                                    <option value="stable_union">União Estável</option>
                                    <option value="others">Outros</option></select>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-1 col-form-label" for="mother_name">Nome da mãe</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="mother_name" name="mother_name" value="{{ $cadastro->mother_name }}">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-1 col-form-label" for="father_name">Nome do pai</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="father_name" name="father_name" value="{{ $cadastro->father_name }}">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-1 col-form-label" for="phone_number_01">Telefone para contato 01</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="phone_number_01" name="phone_number_01" value="{{ $cadastro->phone_number_01 }}">
                            </div>
                            <label class="col-md-1 col-form-label" for="phone_number_02">Telefone para contato 02</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="phone_number_02" name="phone_number_02" value="{{ $cadastro->phone_number_02 }}">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-1 col-form-label" for="city_birth">Naturalidade</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="city_birth" name="city_birth" value="{{ $cadastro->city_birth }}">
                            </div>
                            <label class="col-md-1 col-form-label" for="country_bith">Nacionalidade</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="country_bith" name="country_bith" value="{{ $cadastro->country_bith }}">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-1 col-form-label" for="tax_id">CPF</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="tax_id" name="tax_id" value="{{ $cadastro->tax_id }}">
                            </div>
                            <label class="col-md-2 col-form-label" for="birth_date">Data de nascimento</label>
                            <div class="col-md-3">
                                <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ $cadastro->birth_date }}">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-1 col-form-label" for="id_number">RG</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="id_number" name="id_number" value="{{ $cadastro->id_number }}">
                            </div>
                            <label class="col-md-2 col-form-label" for="id_number_issuer">Orgão emissor</label>
                            <div class="col-md-1">
                                <input type="text" class="form-control" id="id_number_issuer" name="id_number_issuer" value="{{ $cadastro->id_number_issuer }}">
                            </div>
                            <label class="col-md-2 col-form-label" for="id_number_state">Estado do emissor</label>
                            <div class="col-md-2">
                                <select name="id_number_state" class="form-control" data-option="{{ $cadastro->id_number_state }}">
                                        <option value = "" selected></option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                        <label class="col-md-2 col-form-label" for="id_number_issue_date">Data de emissão</label>
                            <div class="col-md-3">
                                <input type="date" class="form-control" id="id_number_issue_date" name="id_number_issue_date" value="{{ $cadastro->id_number_issue_date }}">
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>

            <div class="tab-pane" id="addressInformation">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row mb-3">
                            <label class="col-md-1 col-form-label" for="zip_code">CEP</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="zip_code" name="zip_code" value="{{ $cadastro->zip_code }}">
                            </div>
                            <label class="col-md-1 col-form-label" for="street_name">Endereço</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="street_name" name="street_name" value="{{ $cadastro->street_name }}">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-1 col-form-label" for="street_number">Número</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="street_number" name="street_number" value="{{ $cadastro->street_number }}">
                            </div>
                            <label class="col-md-1 col-form-label" for="street_name">Complemento</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="street_name" name="street_name" value="{{ $cadastro->street_name }}">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-1 col-form-label" for="neighborhood">Bairro</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="neighborhood" name="neighborhood" value="{{ $cadastro->neighborhood }}">
                            </div>
                            <label class="col-md-1 col-form-label" for="city">Cidade</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="city" name="city" value="{{ $cadastro->city }}">
                            </div>
                            <label class="col-md-1 col-form-label" for="state">Estado</label>
                            <div class="col-md-2">
                                <select name="state" class="form-control" data-option="{{ $cadastro->state }}">
                                        <option value = "" selected></option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-1 col-form-label" for="country">País</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="country" name="country" value="{{ $cadastro->country }}">
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>
            <div class="tab-pane" id="anotherInformation">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row mb-3">
                            <label class="col-md-2 col-form-label" for="monthly_income">Renda mensal aprox. (R$)</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="monthly_income" name="monthly_income" value="{{ $cadastro->monthly_income }}">
                            </div>
                            <label class="col-md-2 col-form-label" for="total_assets">Patrimônio aprox. (R$)</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="total_assets" name="total_assets" value="{{ $cadastro->total_assets }}">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-4 col-form-label" for="person_of_interest">DECLARA PODER SER CLASSIFICADO(S) COMO PESSOA EXPOSTA POLITICAMENTE ("PEP")?</label>
                            <div class="col-md-1">
                                <select class="form-control" name="person_of_interest" data-option="{{ $cadastro->person_of_interest }}">
                                    <option value=""></option>
                                    <option value="0">NÃO</option>
                                    <option value="1">SIM</option>
                                </select>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>
            <div class="tab-pane" id="bankInformation">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row mb-3">
                            <label class="col-md-1 col-form-label" for="bank_number">Banco</label>
                            <div class="col-md-2">
                                <select name="bank_number" class="form-control" data-option="{{ $cadastro->bank_number }}">
                                    <option value=""></option>
                                    <option value="3">Banco do Brasil</option>
                                    <option value="33">Banco da Amazônia S.A.</option>
                                    <option value="16">BNB - Banco do Nordeste</option>
                                    <option value="24">Banestes</option>
                                    <option value="12">Santander</option>
                                    <option value="29">Banco do Estado do Pará S.A.</option>
                                    <option value="13">Banrisul</option>
                                    <option value="19">BRB - Banco de Brasília</option>
                                    <option value="21">Banco Inter S.A.</option>
                                    <option value="28">Cooperativa Central de Crédito Urbano-CECRED</option>
                                    <option value="36">Unicred</option>
                                    <option value="31">Banco UNIPRIME</option>
                                    <option value="20">Banco XP</option>
                                    <option value="1">Caixa Econômica Federal</option>
                                    <option value="25">CONFEDERACAO NACIONAL DAS COOPERATIVAS CENTRAIS UNICREDS</option>
                                    <option value="4">BTG Pactual</option>
                                    <option value="11">Original</option>
                                    <option value="8">Bradesco</option>
                                    <option value="32">Nubank</option>
                                    <option value="15">BMG</option>
                                    <option value="2">Itaú Unibanco</option>
                                    <option value="7">JP Morgan</option>
                                    <option value="23">BANCO MERCANTIL DO BRASIL S.A.</option>
                                    <option value="14">HSBC</option>
                                    <option value="30">Banco Safra SA</option>
                                    <option value="6">Banco Pan</option>
                                    <option value="34">Sofisa</option>
                                    <option value="35">Pine</option>
                                    <option value="5">Votorantim</option>
                                    <option value="10">Daycoval</option>
                                    <option value="17">Neon</option>
                                    <option value="9">Citibank</option>
                                    <option value="22">Banco Sicredi</option>
                                    <option value="27">Sicoob</option>
                                    <option value="37">CC UNIPRIME NORTE DO PARANA</option>
                                </select>
                            </div>
                            <label class="col-md-1 col-form-label" for="bank_account_type">Tipo de conta</label>
                            <div class="col-md-6">
                                <select class="form-control" name="bank_account_type" data-option="{{ $cadastro->bank_account_type }}">
                                    <option value=""></option>
                                    <option value="current">Conta Corrente</option>
                                    <option value="saving">Poupança</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-1 col-form-label" for="bank_branch_number">Número da agência</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="bank_branch_number" name="bank_branch_number" value="{{ $cadastro->bank_branch_number }}">
                            </div>
                            <label class="col-md-1 col-form-label" for="account_number">Número da conta</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="account_number" name="account_number" value="{{ $cadastro->account_number }}">
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->    
            </div>
            <div class="tab-pane" id="documents">
                <div class="row">
                    <div class="col-12">
                        <div class="custom-file row mb-3">
                            <label class="custom-file-label col-md-9" for="document_tax_id">DOCUMENTO DE IDENTIDADE - CNH OU RG (OBRIGATÓRIO)</label>
                            <div class="col-md-9">
                                <input type="file" class="custom-file-input" id="document_tax_id" name="document_tax_id">
                            </div>
                        </div>
                        <div class="custom-file row mb-3">
                            <label class="custom-file-label col-md-9" for="document_tax_id_side">VERSO DO DOCUMENTO DE IDENTIDADE (SE FOR NECESSÁRIO)</label>
                            <div class="col-md-9">
                                <input type="file" class="custom-file-input" id="document_tax_id_side" name="document_tax_id_side">
                            </div>
                        </div>
                        <div class="custom-file row mb-3">
                            <label class="custom-file-label col-md-9" for="document_address">COMPROVANTE DE RESIDÊNCIA (OBRIGATÓRIO)</label>
                            <div class="col-md-2">
                                <input type="file" class="custom-file-input" id="document_address" name="document_address">
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>
            <div class="tab-pane" id="finish">
                <div class="row" style="margin-left: 20%;">
                    <div class="col-12">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-block btn-primary">SALVAR</button>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>

            <ul class="list-inline mb-0 wizard">
                <li class="previous list-inline-item">
                    <a href="#" class="btn btn-info" id="btnPrevious">Anterior</a>
                </li>
                <li class="next list-inline-item float-right">
                    <a href="#" class="btn btn-info" id="btnNext">Próximo</a>
                </li>
            </ul>

        </div> <!-- tab-content -->
    </div> <!-- end #progressbarwizard-->
</form>
@endsection