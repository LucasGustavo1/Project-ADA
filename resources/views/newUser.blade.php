<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .align-center {
            display: flex;
            align-items: center;
        }
    </style>


</head>

<body>
    <div class="row mt-5">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <header class="container">
                <nav class="navbar bg-body-tertiary background-header ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src=https://bomcadastro.com.br/assets/img/BC-logo.png alt="Logo" width="90"
                                height="40" class="d-inline-block align-text-top">

                        </a>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
                <ul class="nav justify-content-around mt-3 mb-5">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Menu 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menu 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menu 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menu 3</a>
                    </li>
                </ul>

            </header>
            <div class="container">
                <div class="d-flex justify-content-center">
                    <div class="d-flex align-items-center">
                        <div class="border text-center px-3 py-3  ">

                            <form action="{{ route('user.store') }}" method="POST">
                                @csrf
                                <label for="">Nome do Usuário:</label>
                                <input type="text" name="name">
                                <br><br>
                                <label for="">Nome de Email:</label>
                                <input type="text" name="email">
                                <br><br>
                                <label for="">Senha do Usuário:</label>
                                <input type="password" name="password">
                                <br><br>
                                <button type="submit" value="Cadastrar Usuário">Cadastrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="container-fluid mt-5">
                <div class="row">
                    <div class="d-flex justify-content-center">
                        <a class="navbar-brand  ms-3 " href="#">
                            <img src=https://bomcadastro.com.br/assets/img/BC-logo.png alt="Logo" width="90"
                                height="40" class="d-inline-block align-text-top">
                            <h5 class="pe-4">Todos os Direitos Reservados</h5>
                    </div>
                </div>
        </div>
        </footer>
    </div>
    <div class="col-md-2"></div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>

</body>

</html>
