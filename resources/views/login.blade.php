<!DOCTYPE html>
<html lang="pt-br">
  @include('layout.header')
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-center mb-3">Portal Jurídico</h3>
                <form">
                  <div class="form-group">
                    <label>CPF *</label>
                    <input type="text" class="form-control p_input cpf_login">
                  </div>
                  <div class="form-group">
                    <label>Senha *</label>
                    <input type="text" class="form-control p_input password_login">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Lembre de mim </label>
                    </div>
                    <a href="#" class="forgot-pass">Esqueceu sua senha?</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Acessar</button>
                  </div>
                    <div class="d-flex justify-content-center">
                        <div class="spinner-grow text-primary loading" id="loading" role="status" style="display: none">
                            <span class="visually-hidden"></span>
                        </div>
                    </div>

                  {{-- <div class="d-flex">
                    <button class="btn btn-facebook mr-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  <p class="sign-up">Don't have an Account?<a href="#"> Sign Up</a></p> --}}
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <input type="hidden" class="path-dash" value="{{route('dashboard')}}">

    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    {{-- jquery --}}
    <script src="{{asset("assets/js/login/login.js")}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </body>
</html>
