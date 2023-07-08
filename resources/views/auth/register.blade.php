<head>
    <title>Registro System Compras</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
      <link rel="stylesheet" href="{{ asset('assets/estilos.css') }}">
      <link rel="icon" href="{{ asset('imagenes/1.png')}}" />
      <link rel="stylesheet" href="{{ asset('assets/mdi/css/materialdesignicons.min.css')}}">

  </head>
  
  <body class="auth login-bg">
      
    <section class= "content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-5">
            <div class="card rounded-3 text-black">
              <div class="row g-0 fondo">
                <div class="col-lg-12 fondo">
                  <div class="card-body p-md-6 mx-md-5 fondo">
    
                    <div class="text-center">
                      <img src="{{ asset('imagenes/4.png') }}"
                        style="width: 300px;" alt="logo">
                      
                    </div>


                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="form-label text-white fs-4 mdi mdi-account">{{ __('Nombre') }}</label>

                            <div class="form-outline mb-4">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="form-label text-white fs-4 mdi mdi-email">{{ __('Correo Electrónico') }}</label>

                            <div class="form-outline mb-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="form-label text-white fs-4 mdi mdi-lock">{{ __('Contraseña') }}</label>

                            <div class="form-outline mb-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="form-label text-white fs-4 mdi mdi-lock">{{ __('Confirmar Contraseña') }}</label>

                            <div class="form-outline mb-4">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary btn-block fa-lg colorB2 mb-3">
                                    {{ __('Registrar') }}
                                </button>

                                <!-- COLOCAMOS UN BOTON QUE REDIRIGUE AL INICIO DE SESION -->
                                @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="btn btn-primary btn-block fa-lg colorB2 mb-3">Ingresar</a>
                            @endif
                            <!-- FIN DEL BOTON INICIO DE SESION-->

                            </div>
                        </div>
                    </form>
    
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
  
  
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
  </body>
  
  </html>
