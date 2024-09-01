<!DOCTYPE html>
<html lang="pt-br">
    @include('layout.header')
  <body>
    <div class="container-scroller">

        {{-- INICIO MENU DO PORTAL --}}
        @include('layout.nav')
        {{-- FIM MENU DO PORTAL --}}

        <div class="container-fluid page-body-wrapper">
            <nav class="navbar p-0 fixed-top d-flex flex-row">

                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
                </div>

                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">

                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>

                    <ul class="navbar-nav navbar-nav-right">

                        <li class="nav-item dropdown ">

                            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-email"></i>
                                <span class="count bg-success"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                                <h6 class="p-3 mb-0">Mensagem</h6>
                                <div class="dropdown-divider"></div>

                                {{-- <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                    <img src="assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                                    </div>
                                    <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                                    <p class="text-muted mb-0"> 1 Minutes ago </p>
                                    </div>
                                </a> --}}
                                {{-- <div class="dropdown-divider"></div> --}}

                                {{-- <div class="dropdown-divider"></div>
                                    <p class="p-3 mb-0 text-center">4 new messages</p>--}}
                            </div>

                        </li>

                        <li class="nav-item dropdown border-left">

                            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                                <i class="mdi mdi-bell"></i>
                                <span class="count bg-danger"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">

                                <h6 class="p-3 mb-0">Notificação</h6>

                                <div class="dropdown-divider"></div>

                                {{-- <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-calendar text-success"></i>
                                    </div>
                                    </div>
                                    <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Event today</p>
                                    <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                                    </div>
                                </a> --}}
                                {{-- <div class="dropdown-divider"></div> --}}

                                {{-- <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">See all notifications</p> --}}
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                            <div class="navbar-profile">
                                <img class="img-xs rounded-circle" src="assets/images/juridico.png" alt="">
                                <p class="mb-0 d-none d-sm-block navbar-profile-name">Nome do usuario</p>
                                <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                            </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0">Usuário</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-settings text-success"></i>
                                    </div>
                                    </div>
                                    <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Alterar Senha</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item" href="{{ route('login') }}">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Sair</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Reclamada </h3>
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item">Listagem</li>
                            <li class="breadcrumb-item active" aria-current="page">Reclamada</li>
                          </ol>
                        </nav>
                    </div>
                    <div class="page-header">
                        <h3 class="page-title">  </h3>
                        <nav aria-label="breadcrumb"style="margin-left: 10px" >
                          <ol class="breadcrumb" >
                            <button class="btn btn-primary" onclick="openModalReclamada()">+ &nbsp Cadastrar Reclamada</button>
                          </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body">
                                <h4 class="card-title">Reclamada</h4>
                                <div class="table-responsive">
                                    <table id="datatable-buttons1" class="table table-striped table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Reclamada</th>
                                                <th>Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modalReclamada" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Reclamada</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: transparent; color: #fff" onclick="closeModal()">X</button>
                            </div>
                            <div class="modal-body">
                              <form>
                                <div class="mb-3">
                                  <label for="recipient-name" class="col-form-label">Recipient:</label>
                                  <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                  <label for="message-text" class="col-form-label">Message:</label>
                                  <textarea class="form-control" id="message-text"></textarea>
                                </div>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="closeModal()">Cancelar</button>
                              <button type="button" class="btn btn-primary">Cadastrar Reclamante</button>
                            </div>
                          </div>
                        </div>
                    </div>

                </div>

                @include('layout.footer')


                @include('layout.script')
                <script src="{{ asset('assets/js/processo/reclamada.js') }}"></script>
  </body>
</html>
