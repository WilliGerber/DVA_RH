<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
        <link href="{{ asset('css/master.css')}}" rel="stylesheet">
        <link href="@yield('css')">
        <title>@yield('title')</title>
    </head>

    <body>
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="/dashboard">Grupo 
                <!-- <img src="{{asset('img/logo_dva.png')}}" alt=""> -->
            </a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="{{route('login.sair')}}">Sair</a>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{route('dashboard')}}">
                                    <i class="fas fa-tachometer-alt mr-2"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item-group">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{route('empresas')}}">
                                    <i class="fas fa-store-alt mr-2"></i>
                                        Empresas
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{route('departamentos')}}">
                                        <i class="fas fa-bezier-curve mr-2"></i>
                                        Departamentos
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{route('setores')}}">
                                    <i class="fas fa-cogs mr-2"></i>
                                        Setores
                                    </a>
                                </li>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{route('escolaridade_graus')}}">
                                    <i class="fas fa-graduation-cap mr-2"></i>
                                    Escolaridade
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{route('cargos')}}">
                                <i class="fas fa-briefcase mr-2"></i>
                                    Cargos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{route('hierarquias')}}">
                                <i class="fas fa-sitemap mr-2"></i>
                                    Hierarquias
                                </a>
                            </li>                            
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{route('extra_curricular_cursos')}}">
                                <i class="fas fa-glasses mr-2"></i>
                                    Cursos Extra Curriculares
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{route('colaboradores')}}">
                                <i class="fas fa-user-friends mr-2"></i>
                                    Colaboradores
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{route('competencias_comportamentais')}}">
                                <i class="fas fa-newspaper mr-2"></i>
                                    Competencias Comportamentais
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{route('competencias_tecnicas')}}">
                                <i class="fas fa-newspaper mr-2"></i>
                                    Competencias Tecnicas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{route('setor_avaliacao_itens')}}">
                                <i class="fas fa-tasks mr-2"></i>
                                    Itens de Avaliacao por Setor
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{route('pontos_fortes')}}">
                                <i class="far fa-arrow-alt-circle-up mr-2"></i>
                                    Pontos Fortes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{route('pontos_melhorias')}}">
                                <i class="far fa-star mr-2"></i>
                                    Pontos de Melhoria
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{route('permissoes')}}">
                                <i class="fas fa-user-lock mr-2"></i>
                                    Permissões
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                    <div class="d-flex justify-content-betwen flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h3>@yield('title')</h3>
                    </div>
                    <div class="pt-2 pl-2 pr-2 pb-4 container-content">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>

        <footer>
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
            <script src="{{ asset('js/master.js') }}"></script>
            <script src="@yield('js')"></script>
        </footer>
    </body>

</html>
