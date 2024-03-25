@extends('layout-dash.layout-dash')
{{-- Esse conteudo sendo uma extensão da página layout-dash --}}

@section('title', 'Cadastro')

@section('conteudo-dash')
    {{-- Tudo que terá na página de cadastro --}}


    <style>
        /*  Botão Submit*/
        .ln_solid {
            border-top: 0px solid #e5e5e5;
            color: #ffffff;
            background-color: #ffffff;
            height: 100% !important;
            margin: 25px 0 !important;
        }
    </style>

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Cadastro Funcionários</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Formulário de cadastro <small></small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">
                            <form  method="POST" class="" action="{{ route('dashboard.adm.func.cad') }}" >
                                @csrf
                                <div class="teste">
                                    <div class="bloco">
                                        <span class="section">Informações pessoais</span>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3">Nome<span
                                                    class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control @error('nomeFuncionario') is-invalid @enderror "
                                                    data-validate-length-range="6" data-validate-words="2"
                                                    name="nomeFuncionario" id="nomeFuncionario"
                                                    placeholder="ex. John f. Kennedy" required="required"
                                                    value="{{ old('nomeFuncionario') }}" required />
                                                @error('nomeFuncionario')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3">Telefone<span
                                                    class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control @error('foneFuncionario') is-invalid @enderror "
                                                    type="text" class='number' name="foneFuncionario"
                                                    id="foneFuncionario" data-validate-minmax="8,20" required='required'
                                                    value="{{ old('foneFuncionario') }}" required>
                                                @error('foneFuncionario')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3">Endereço<span
                                                    class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input
                                                    class="form-control @error('enderecoFuncionario') is-invalid @enderror "
                                                    class='optional' name="enderecoFuncionario" id="enderecoFuncionario"
                                                    data-validate-length-range="5,15" type="text"
                                                    value="{{ old('enderecoFuncionario') }}" required />
                                                @error('enderecoFuncionario')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3">Cidade<span
                                                    class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input
                                                    class="form-control @error('cidadeFuncionario') is-invalid @enderror "
                                                    class='optional' name="cidadeFuncionario" id="cidadeFuncionario"
                                                    data-validate-length-range="5,15" type="text"
                                                    value="{{ old('cidadeFuncionario') }}" required />
                                                @error('cidadeFuncionario')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3">Estado<span
                                                    class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control @error('estadoFuncionario') is-invalid @enderror"
                                                    class='optional' name="estadoFuncionario" id="estadoFuncionario"
                                                    data-validate-length-range="5,15" type="text"
                                                    value="{{ old('estadoFuncionario') }}" required />
                                                @error('estadoFuncionario')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3">CEP<span
                                                    class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input
                                                    class="form-control @error('cepFuncionario') is-invalid @enderror"
                                                    type="text" class='cep' name="cepFuncionario"
                                                    id="cepFuncionario" data-validate-minmax="10,100" required='required'
                                                    value="{{ old('cepFuncionario') }}" required>
                                                @error('cepFuncionario')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3">Data de Nascimento<span
                                                    class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input
                                                    class="form-control @error('dataNasciFunc') is-invalid @enderror"
                                                    class='date' type="date" name="dataNasciFunc"
                                                    id="dataNasciFunc" required='required'
                                                    value="{{ old('dataNasciFunc') }}" required>
                                                @error('dataNasciFunc')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                    <div class="bloco">
                                        <span class="section">.</span>



                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3">Cargo<span
                                                    class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input
                                                    class="form-control @error('cargoFuncionario') is-invalid @enderror"
                                                    class='date' type="text" name="cargoFuncionario"
                                                    id="cargoFuncionario" required='required'
                                                    value="{{ old('cargoFuncionario') }}" required>
                                                @error('cargoFuncionario')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                            <label for="currency-field"
                                                class="col-form-label col-md-3 col-sm-3">Salário<span
                                                    class="required"></span></label>

                                            <div class="col-md-6 col-sm-6">
                                                <input
                                                    class="form-control @error('salarioFuncionario') is-invalid @enderror"
                                                    class='date' type="text" required='required'
                                                    name="salarioFuncionario"
                                                    name="currency-field"
                                                    id="salarioFuncionario"
                                                    id="currency-field"
                                                    pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$"
                                                    value="{{ old('salarioFuncionario') }}" required data-type="currency"
                                                    placeholder="$1,000,000.00" >
                                                @error('salarioFuncionario')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>


                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3">Email<span
                                                    class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input
                                                    class="form-control @error('emailFuncionario') is-invalid @enderror"
                                                    name="emailFuncionario" class='email' id="emailFuncionario"
                                                    required="required" type="email"
                                                    value="{{ old('emailFuncionario') }}" required />
                                                @error('emailFuncionario')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3">Senha<span
                                                    class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control @error('estadoFuncionario') is-invalid @enderror" type="password" id="password1"
                                                    name="password1"
                                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}"
                                                    title="Minimum 8 Characters Including An Upper And Lower Case Letter, A Number And A Unique Character"
                                                    required />
                                                    @error('estadoFuncionario')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror

                                                <span style="position: absolute;right:15px;top:7px;" onclick="hideshow()">
                                                    <i id="slash" class="fa fa-eye-slash"></i>
                                                    <i id="eye" class="fa fa-eye"></i>
                                                </span>
                                            </div>
                                        </div> --}}

                                        {{-- <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3">Tipo Funcionário<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select id="heard" name="tipoFuncionario" class="form-control @error('estadoFuncionario') is-invalid @enderror" required>
                                                    <option value="{{ old('tipoFuncionario') }}" required>administrador</option>
                                                    <option value="{{ old('tipoFuncionario') }}" required>instrutores</option>
                                            </div></select>
                                        </div> --}}

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3">Tipo Funcionário<span
                                                    class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select id="heard" name="tipoFuncionario"
                                                    class="form-control @error('tipoFuncionario') is-invalid @enderror"
                                                    required>
                                                    <option value="administrativo">Administrador</option>
                                                    <option value="instrutores">Instrutor</option>

                                                    @error('tipoFuncionario')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </select>
                                            </div>
                                        </div>



                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 @error('obsFuncionario') is-invalid @enderror">Observação<span class="required"></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea required="required" style="height: 100px" name="obsFuncionario">{{ old('obsFuncionario') }}</textarea>
                                                @error('obsFuncionario')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' onclick="{{ route('dashboard.adm.func.cad') }}" class="btn btn-primary">Enviar</button>
                                                    <button type='reset' class="btn btn-success">Limpar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- div teste --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->





    {{-- LINK JQUERY --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
        $("input[data-type='currency']").on({
            keyup: function() {
                formatCurrency($(this));
            },
            blur: function() {
                formatCurrency($(this), "blur");
            }
        });


        function formatNumber(n) {
            // format number 1000000 to 1,234,567
            return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        }


        function formatCurrency(input, blur) {
            // appends $ to value, validates decimal side
            // and puts cursor back in right position.

            // get input value
            var input_val = input.val();

            // don't validate empty input
            if (input_val === "") {
                return;
            }

            // original length
            var original_len = input_val.length;

            // initial caret position
            var caret_pos = input.prop("selectionStart");

            // check for decimal
            if (input_val.indexOf(".") >= 0) {

                // get position of first decimal
                // this prevents multiple decimals from
                // being entered
                var decimal_pos = input_val.indexOf(".");

                // split number by decimal point
                var left_side = input_val.substring(0, decimal_pos);
                var right_side = input_val.substring(decimal_pos);

                // add commas to left side of number
                left_side = formatNumber(left_side);

                // validate right side
                right_side = formatNumber(right_side);

                // On blur make sure 2 numbers after decimal
                if (blur === "blur") {
                    right_side += "00";
                }

                // Limit decimal to only 2 digits
                right_side = right_side.substring(0, 2);

                // join number by .
                input_val = "$" + left_side + "." + right_side;

            } else {
                // no decimal entered
                // add commas to number
                // remove all non-digits
                input_val = formatNumber(input_val);
                input_val = "$" + input_val;

                // final formatting
                if (blur === "blur") {
                    input_val += ".00";
                }
            }

            // send updated string to input
            input.val(input_val);

            // put caret back in the right position
            var updated_len = input_val.length;
            caret_pos = updated_len - original_len + caret_pos;
            input[0].setSelectionRange(caret_pos, caret_pos);
        }
    </script>


@endsection
