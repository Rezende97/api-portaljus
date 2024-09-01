<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        {{-- <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a> --}}
        <a href="{{ route('dashboard') }}" style="color: #fff; text-decoration:none;"><h6>Jurídico</h6></a>
    </div>
    <ul class="nav">

        <li class="nav-item nav-category">
            <span class="nav-link">Portal Jurídico</span>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
                <i class="mdi mdi-folder"></i>
                </span>
                <span class="menu-title">Audiência</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html"><i class='mdi mdi-folder'></i>&nbsp Audiência</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html"><i class='mdi mdi-plus'></i>&nbsp Tipo de Audiência</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html"><i class='mdi mdi-plus'></i>&nbsp Vara da Audiência</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html"><i class='mdi mdi-plus'></i>&nbsp Região da Audiência</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html"><i class='mdi mdi-plus'></i>&nbsp Status da Audiência</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#processo" aria-expanded="false" aria-controls="processo">
                <span class="menu-icon">
                <i class="mdi mdi-folder"></i>
                </span>
                <span class="menu-title">Processo</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="processo">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a href="{{ route('processo') }}" class="nav-link" href="pages/ui-features/buttons.html"><i class='mdi mdi-folder'></i>&nbsp Processo</a></li>
                    <li class="nav-item"> <a href="{{ route('reclamante') }}" class="nav-link" href="pages/ui-features/dropdowns.html"><i class='mdi mdi-plus'></i>&nbsp Reclamante</a></li>
                    <li class="nav-item"> <a href="{{ route('reclamada') }}" class="nav-link" href="pages/ui-features/typography.html"><i class='mdi mdi-plus'></i>&nbsp Reclamada</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#advogado" aria-expanded="false" aria-controls="advogado">
                <span class="menu-icon">
                <i class="mdi mdi-account-circle"></i>
                </span>
                <span class="menu-title">Advogado</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="advogado">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html"><i class='mdi mdi-account-circle'></i>&nbsp Advogado</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="user">
                <span class="menu-icon">
                <i class="mdi mdi-settings"></i>
                </span>
                <span class="menu-title">Configurações</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="user">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html"><i class='mdi mdi-account-circle'></i>&nbsp Usuário</a></li>
                </ul>
            </div>
        </li>

        {{-- <li class="nav-item menu-items">
            <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Form Elements</span>
            </a>
        </li> --}}

    </ul>
</nav>
