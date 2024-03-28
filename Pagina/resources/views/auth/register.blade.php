<!doctype html>
<html lang="en">
<head>
    <title>MicroWeb | Registro</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- CSS local -->
    <link rel="stylesheet" href="{{ asset('assets/estilos.css') }}">
</head>

    <body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-5">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-12">
              <div class="card-body p-md-3 mx-md-4">

                <div class="text-center">
                  <img src="{{asset ('assets/LogoGris.jpeg')}}"
                    style="width: 110px;" alt="logo">
                  <h4 class="mt-1 mb-1 pb-1">MicroWeb</h4>
                  <h5 class="mt-1 mb-3 pb-1">¿Listo para crecer?</h5>
                </div>

                <form action="{{route('register')}}" method="post">
                    @csrf

                  <div class="form-outline mb-4">
                    <input type="text" name= "name" id="form2Example11" class="form-control"
                      placeholder="Ingrese nombre" />
                    <label class="form-label" for="form2Example11">Nombre</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="email" name= "email" id="form2Example11" class="form-control"
                      placeholder="Teléfono o Correo electrónico" />
                    <label class="form-label" for="form2Example11">Correo</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="password" id="form2Example22" class="form-control" />
                    <label class="form-label" for="form2Example22">Contraseña</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="password_confirmation" id="form2Example22" class="form-control" />
                    <label class="form-label" for="form2Example22">Confirmar contraseña</label>
                  </div>

                  <div class="text-center pt-1 mb-2 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Registrarse</button>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-2">
                    <a href="{{route('login')}}" class="btn btn-outline-danger">Iniciar sesión</a>
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
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
