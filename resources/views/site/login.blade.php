@section('title', 'Login')


{{-- formulário --}}

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="assets/img/favicon.icon">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ asset('vendor/bootstrap/css/bootstrap.min.css') }}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ asset('vendor/animate/animate.css') }}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ asset('vendor/css-hamburgers/hamburgers.min.css') }}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ asset('vendor/select2/select2.min.css') }}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ asset('assets/css/util.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('assets/css/estilo-gaby.css') }}>
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="assets/img/img-01.png" alt="IMG">
                </div>

                <form action="{{ route('login') }}" method="POST" class="login100-form validate-form">
                    {{-- especifica para onde os dados do formulário serão enviados quando o formulário for enviado nesse caso a rota --}}
                    @csrf
                    {{-- Se não me engano isso é uma diretiva do Blade, é usada incluir um token CSRF de segurança --}}
                    <span class="login100-form-title">
                        Bem vindo
                    </span>



                    {{-- <div class="wrap-input100 validate-input" data-validate = "E-mail é obrigatório">
						<input class="input100" type="text" name="email" placeholder="Email" id="email" value="{{ old('email') }}">

                        <p class=".alert-validate" {{ $errors->has('email') ?$errors->first('email'): '' }}></p>
                        tratativa de error
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div> --}}

                    <div class="wrap-input100 validate-input" data-validate="E-mail é obrigatório">
                        <input class="input100 {{ $errors->has('email') ? 'input-error' : '' }}" type="text"
                            name="email" placeholder="Email" id="email" value="{{ old('email') }}">
                        {{--  Basicamente utilizando $errors se houver erros de validação associados ao campo de e-mail a minha classe 'input-error' irá dar um estilo expecífico ao erro --}}
                        {{-- Aquele old no valor é para  usado para preencher o input email com valores já usados --}}
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>

                        @if($errors->has('email'))
                            {{--  Aqui acontece a verificação se há erros de validação associados ao e-mail. --}}
                            </span>
                            <p class="alert-validate">{{ $errors->first('email') }}</p>
                            {{-- Se tiver erro, exibir a msg de erro  --}}
                        @endif
                    </div>


                    {{-- <div class="wrap-input100 validate-input" data-validate = "Senha é obrigatória">
						<input class="input100" type="password" name="password" placeholder="Senha" id="password" value="{{ old ('password') }}">
                        {{ $errors->has('password') ?$errors->first('password'): '' }}
                        {{-- tratativa de erros --}}
                    {{-- <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div> --}}

                    <div class="wrap-input100 validate-input" data-validate="Senha é obrigatória">
                        <input class="input100 {{ $errors->has('password') ? 'input-error' : '' }}" type="password"
                            name="password" placeholder="Senha" id="password" value="{{ old('password') }}">
                        {{--  Basicamente utilizando $errors se houver erros de validação associados ao campo password a minha classe 'input-error' irá dar um estilo expecífico ao erro --}}

                        {{-- Tratativa de erro --}}
                        @if ($errors->has('password'))
                            {{--  Aqui acontece a verificação se há erros de validação associados a senha --}}
                            <p class="error-message alert-validate">{{ $errors->first('password') }}</p>
                            {{-- Se tiver erro, exibir a msg de erro  --}}
                        @endif
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Esqueceu
                        </span>
                        <a class="txt2" href="#">
                            Email / Senha?
                        </a>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="#">
                            Crie sua conta
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src={{ asset('vendor/jquery/jquery-3.2.1.min.js') }}></script>
    <!--===============================================================================================-->
    <script src={{ asset('vendor/bootstrap/js/popper.js') }}></script>
    <script src={{ asset('vendor/bootstrap/js/bootstrap.min.js') }}></script>
    <!--===============================================================================================-->
    <script src={{ asset('vendor/select2/select2.min.js') }}></script>
    <!--===============================================================================================-->
    <script src={{ asset('vendor/tilt/tilt.jquery.min.js') }}></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="assets/js/login.js"></script>

</body>

</html>
