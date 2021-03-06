<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Captive Portal</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/cute-alert-master/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body onload="cuteAlert()">
    <div class="container">
        <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-sm">
                <div id="div-geral" class="d-flex justify-content-center">
                    <div class="user-card bg-white">
                        <!-- Div Logo -->
                        <div class="div-logo d-flex justify-content-center">
                            <figure>
                                <img id="img-logo" src="img/logo-absj.png" alt="Logo ABSJ" class="mb-3">
                                <figcaption class="text-center">Associação Beneficente <br> São José</figcaption>
                            </figure>
                        </div>
                        <!-- End Logo -->
                        <hr class="line-divisor mt-1">
                        <!-- Div Form -->
                        <div id="div-form" class="d-flex justify-content-center mt-4">
                            <form action="POST" action="$PORTAL_ACTION$">
                                <div class="input-group mb-4">
                                    <div class="input-group-append">
                                        <img class="img-input" src="img/user-solid.png" alt="Ícone do usuário">
                                    </div>
                                    <input type="text" class="form-control" name="auth_user" id="user" placeholder="Usuário">
                                    <input name="redirurl" type="hidden" value="$PORTAL_REDIRURL$">
                                    <input name="zone" type="hidden" value="$PORTAL_ZONE$">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <img class="img-input" src="img/key-solid.png" alt="Ícone da senha">
                                    </div>
                                    <input type="password" class="form-control" name="auth_pass" id="password" placeholder="Senha">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="icon-show-passwd"><img src="img/eye-open.png" id="show-passwd" onclick="mostrarSenha()"></span>
                                    </div>
                                </div>
                                <div class="form-group form-check mt-3 mb-5">
                                    <input type="checkbox" class="form-check-input" id="check-form">
                                    <label class="form-check-label" for="exampleCheck1">Lembrar-me</label>
                                </div>
                                <button type="submit" class="btn mb-3" id="btn-submit">Entrar</button>
                            </form>
                        </div>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
            <div class="col-sm">
            </div>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/mostrarsenha.js"></script>
    <script src="js/cute-alert-master/cute-alert.js"></script>
    <!-- Function alert onload -->
    <script>
        cuteAlert({
            type: "info",
            title: "Aviso",
            message: "Se você for um colaborador ABSJ use seu usuário de domínio para acessar a rede, caso contrário, use o código voucher fornecido a você.",
            buttonText: "Fechar"
        }).then(() => {
            // do something
        })
    </script>

</body>

</html>