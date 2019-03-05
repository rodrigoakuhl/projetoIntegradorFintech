@extends('layout_dashboard')

@section('content')

<h4 class="header-title mb-3">Edite suas informações</h4>

<form>
    <div id="progressbarwizard">

        <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-3">
            <li class="nav-item">
                <a href="#account-2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active show">
                    <i class="mdi mdi-account-circle mr-1"></i>
                    <span class="d-none d-sm-inline">INFORMAÇÕES PESSOAIS</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#profile-tab-2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                    <i class="mdi mdi-mailbox mr-1"></i>
                    <span class="d-none d-sm-inline">ENDEREÇO</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#profile-tab-2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                    <i class="mdi mdi-arrange-bring-forward mr-1"></i>
                    <span class="d-none d-sm-inline">OUTRAS INFORMAÇÕES</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#profile-tab-2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                    <i class="mdi mdi-bank mr-1"></i>
                    <span class="d-none d-sm-inline">CONTA BANCÁRIA PARA PAGAMENTOS</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#profile-tab-2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                    <i class="mdi mdi-file-document mr-1"></i>
                    <span class="d-none d-sm-inline">DOCUMENTOS</span>
                </a>
            </li>                                    
            <li class="nav-item">
                <a href="#finish-2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                    <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                    <span class="d-none d-sm-inline">CONCLUÍDO</span>
                </a>
            </li>
        </ul>
    
        <div class="tab-content b-0 mb-0">
    
            <div id="bar" class="progress mb-3" style="height: 7px;">
                <div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success"></div>
            </div>
    
            <div class="tab-pane active show" id="account-2">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="name">Nome</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="gender"> Sexo</label>
                            <div class="col-md-9">
                            <select name = "gender" class="form-control">
                                <option value = "none" selected></option>
                                <option value = "male">Masculino</option>
                                <option value = "female">Feminino</option>
                            </select>
                                <!-- <input type="text" id="gender" name="gender" class="form-control"> -->
                            </div>
                        </div>
                        
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="email">Email</label>
                            <div class="col-md-9">
                                <input type="text" id="email" name="email" class="form-control" value="{{ Auth::user()->email }}">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="marital_status">Estado civil</label>
                            <div class="col-md-9">
                                <select name = "marital_status" class="form-control">
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
                            <label class="col-md-3 col-form-label" for="mother_name">Nome da mãe</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="mother_name" name="mother_name">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="father_name">Nome do pai</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="father_name" name="father_name">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="phone_number_01">Telefone para contato 01</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="phone_number_01" name="phone_number_01">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="phone_number_02">Telefone para contato 02</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="phone_number_02" name="phone_number_02">
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>

            <div class="tab-pane" id="profile-tab-2">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="name1"> First name</label>
                            <div class="col-md-9">
                                <input type="text" id="name1" name="name1" class="form-control" value="Francis">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="surname1"> Last name</label>
                            <div class="col-md-9">
                                <input type="text" id="surname1" name="surname1" class="form-control" value="Brinkman">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-md-3 col-form-label" for="email1">Email</label>
                            <div class="col-md-9">
                                <input type="email" id="email1" name="email1" class="form-control" value="cory1979@hotmail.com">
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>

            <div class="tab-pane" id="finish-2">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                            <h3 class="mt-0">Thank you !</h3>

                            <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam
                                mattis dictum aliquet.</p>

                            <div class="mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                    <label class="custom-control-label" for="customCheck3">I agree with the Terms and Conditions</label>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>

            <ul class="list-inline mb-0 wizard">
                <li class="previous list-inline-item">
                    <a href="#" class="btn btn-info">Anterior</a>
                </li>
                <li class="next list-inline-item float-right">
                    <a href="#" class="btn btn-info">Próximo</a>
                </li>
            </ul>

        </div> <!-- tab-content -->
    </div> <!-- end #progressbarwizard-->
</form>
@endsection