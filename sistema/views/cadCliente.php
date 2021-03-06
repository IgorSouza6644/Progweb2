<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <!-- Menu-->
            <?php
            include_once "menu.php";
            ?>
        </div>




        <div class="col-md-10">

            <!-- Conteúdo-->
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center"> Cadastro de Clientes </h3>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="form row">
                            <div class="form group col-md-8">
                                <label for"">Nome</label>
                                <input type="text" class="form-control"placeholder="Nome" name="nome">
                            </div>
                            <div class="form-group col-md-4">
                                <label for"">CPF</label>
                                <input type="text" class="form-control"placeholder="xxx.xxx.xxx-xx" cpf="cpf">
                            </div>
                            <div class="form-group col-md-12">
                                <label for"">Endereço</label>
                                <input type="text" class="form-control"placeholder="Endereço" endereco="endereco">
                            </div>
                            <div class="form-group col-md-6">
                                <label for"">E-mail</label>
                                <input type="text" class="form-control"placeholder="example@email.com" email="email">
                            </div>
                            <div class="form-group col-md-3">
                                <label for"">Senha</label>
                                <input type="text" class="form-control"placeholder="Senha" senha="senha">
                            </div>
                            <div class="form-group col-md-3">
                                <label for"">Telefone</label>
                                <input type="text" class="form-control"placeholder="Telefone" telefone="telefone">
                            </div>
                            <button class="btn btn-primary" type ="submit" name ="salvar">Salvar</button>

                        </div> <!-- End Form Row -->
                    </form>
                </div> <!-- Card Body -->
            </div><!-- Card End -->

        </div>
    </div>
</div>



<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>