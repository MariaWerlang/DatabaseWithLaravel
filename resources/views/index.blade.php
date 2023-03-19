<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SISTEMA WEB</title>
    </head>

    @vite(['resources/css/app.css', 
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])

    <body>
        <!--container-->
        <div class="container">
            <!--navbar-->
            <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand  text-light" href="#">SISTEMA WEB</a>
                    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active  text-light" aria-current="page" href="/index">Cadastrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-muted" href="#">Consultar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!--formulário-->
            <form style="padding: 20px 25px 25px 25px;">
                <div><h4>Cadastrar - Agendamento de Potenciais Clientes</h4></div>
                <div>Sistema utilizado para agendamento de serviços</div>
                &nbsp
            <!--input-->
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Nome:</label>
                    <input type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">Telefone:</label>
                    <input type="phone" class="form-control" id="exampleInputPhone" aria-describedby="phoneHelp" placeholder="(xx) xxxxx-xxxx">
                </div>

                <!--seleção de opções-->
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Origem:</label>
                    <select id="disabledSelect" class="form-select">
                        <option>Escolha...</option>
                        <option>Celular</option>
                        <option>WhatsApp</option>
                    </select>
                </div>

                <!--campo de observação-->
                <div class="mb-3 form-group">
                    <label for="exampleFormControlInput1">Data do Contato:</label>
                    <input type="date" class="form-control" required name="txtDataContato" id="txtDataContato">
                </div>
                <div class="mb-3 form-group">
                    <label for="exampleFormControlTextarea1">Observação</label>
                    <textarea class="form-control" name="txtObservacao" id="txtObservacao" rows="3"></textarea>
                </div>

                <br>

                <!--botão-->
                <button class="btn btn-primary" type="submit">Cadatrar</button>
            </form>   

        </div> <!--fim container-->

    </body>
</html>