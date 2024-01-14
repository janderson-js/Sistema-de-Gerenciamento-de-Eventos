<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/scripts.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body id="body">
    <header id="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">

            <div>
                <a class="navbar-brand" href="/">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQK3WiP99DVjq6huwUKag7mXFYlaKKz_GeF-A&usqp=CAU" alt="Bootstrap" width="30" height="24">
                    Projeto-Laravel
                </a>
            </div>
            <div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contacts/contatos">Contatos</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="/events/create">Criar Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard">Meus Eventos</a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="post">
                                @csrf
                                <a class="nav-link" href="/logout" 
                                    onclick="event.preventDefault(); 
                                    this.closest('form').submit();">
                                Sair</a>
                            </form>
                        </li>
                        @endauth
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Cadastrar</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>

        </nav>
    </header>

    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>

    <footer>
        <p>footer</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>