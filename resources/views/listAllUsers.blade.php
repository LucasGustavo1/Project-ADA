<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background-image: url(https://i.pinimg.com/originals/79/8d/92/798d92a78ce015dafdf68fcfb8863ef3.jpg);
            height: 100%;
            width: 100%;
            background-repeat: no-repeat;

        }

        .background-header {
            background-color: #FECAD7 !important;
        }
        @media (max-width: 700px) {
            .none {
                display: none;
            }
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
                <ul class="nav justify-content-around mt-3">
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
            <div class="card mt-5">
                <div class="card-header background-header ">
                    <div class="d-flex justify-content-between">
                        <h5 class="">Cadastro de Clientes</h5>
                        <a class="btn btn-primary" href="{{ route('user.create') }}">Adicionar
                            <i class="bi bi-plus-circle ms-2"></i>
                        </a>
                    </div>

                </div>
            </div>
            <table class="table table-bordered table-danger">
                <thead>
                    <tr>
                        <th scope="col-sm-2">#ID</th>
                        <th scope="col-sm-2">Nome dos Usuário</th>
                        <th scope="col-sm-2">Email dos Usuário</th>
                        <th scope="col-sm-2">Visualizar Usuário</th>
                        <th scope="col-sm-2">Editar Usuário</th>
                        <th scope="col-sm-2">Deletar Usuário</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td class="none">{{ $user->email }}</td>
                            <td><a class="btn btn-primary" href="{{ route('user.show', ['user' => $user->id]) }}">Ver
                                    Usuário</a>
                            </td>
                            <td><a class="btn btn-primary"
                                    href="{{ route('user.edit', ['user' => $user->id]) }}">Editar</a></td>
                            <td>
                                <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="POST"
                                    id="deleteForm">
                                    @csrf
                                    @method('delete')

                                    <!-- Botão de remoção usando JavaScript para acionar o modal -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal" data-user-id="{{ $user->id }}">
                                        Remover
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Deseja realmente
                                                        apagar o cliente?</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-footer">
                                                    <!-- Botão de confirmação para exclusão -->
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-danger">Remover</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!-- Script para enviar o formulário quando o botão "Remover" do modal é clicado -->
                                <script>
                                    const deleteForm = document.getElementById('deleteForm');
                                    const confirmDeleteButton = document.querySelector('[data-bs-target="#exampleModal"]');

                                    confirmDeleteButton.addEventListener('click', function() {
                                        const userId = confirmDeleteButton.getAttribute('data-user-id');
                                        const inputField = document.createElement('input');
                                        inputField.setAttribute('type', 'hidden');
                                        inputField.setAttribute('name', 'user');
                                        inputField.setAttribute('value', userId);
                                        deleteForm.appendChild(inputField);
                                    });
                                </script>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <footer class="container-fluid">
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
    </div>









    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
</body>

</html>
