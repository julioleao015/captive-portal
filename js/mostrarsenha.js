function mostrarSenha() {
            var tipo = document.getElementById("password");
            if (tipo.type == "password") {
                tipo.type = "text";
                document.getElementById("show-passwd").src = "../img/eye-closed.png";
            } else {
                tipo.type = "password";
                document.getElementById("show-passwd").src = "../img/eye-open.png";
            }

        }