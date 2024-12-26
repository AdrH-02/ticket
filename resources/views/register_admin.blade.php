<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ticketing - Inscription</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/Image 1.png') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css')  }}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" style="background-color: rgb(254, 102, 102);" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
					<img src="{{ asset('assets/images/logos/Image1.png ') }}" width="180" alt="">
                </a>
                <p class="text-center">Engagé pour une énergie meilleur</p>
                <form method="post" action="{{route('insert_user')}}">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom" aria-describedby="textHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" name="pass">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Role</label>
                    <select name="role" class="form-control">
                      @foreach($liste as $poste)
                        <option value="{{$poste->id}}">{{$poste->nom}}</option>
                      @endforeach
                    </select>
                  </div>
                  <input type="submit" class="btn btn-danger w-100 py-8 fs-4 mb-4 rounded-2" value="Ajouter utilisateur" />
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Compte déjà créer?</p>
                    <a class="text-danger fw-bold ms-2" href="./authentication-login.html">Se connecter ici</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>