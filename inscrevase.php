<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <main class="main-login">
        <div class="left-login">
            

        </div>
        <div class="right-login">
            <div class="card-login">
                <div class="title">
                    <h1>Cadastre-se</h1>
                </div>
                <div class="formulario">
                    <div class="coluna-esquerda">
                        <div class="textfield">
                            <label for="nome">Primeiro Nome</label>
                            <input type="text" name="nome" id="nome" placeholder="Digite seu primeiro nome">
                        </div>
                        <div class="textfield">
                            <label for="email">E-mail</label>
                            <input type="text" name="email" id="email" placeholder="Digite seu e-mail">
                        </div>
                        <div class="textfield">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
                        </div>
                    </div>
                    <div class="coluna-direita">
                        <div class="textfield">
                            <label for="sobrenome">Sobrenome</label>
                            <input type="text" name="sobrenome" id="sobrenome" placeholder="Digite seu sobrenome">
                        </div>
                        <div class="textfield">
                            <label for="celular">Celular</label>
                            <input type="text" name="celular" id="celular" placeholder="(XX) XXXXX-XXXX">
                        </div>
                        <div class="textfield">
                            <label for="cidade">Cidade</label>
                            <input type="text" name="cidade" id="cidade" placeholder="Digite sua cidade">
                        </div>
                    </div>
                    
                </div>

                <div class="formulario-genero">
                    <div class="titulo-genero">
                        <label for="">Gênero</label>
                    </div>
                    <div class="genero-inputs">
                        <div class= "inputs-left">
                            <div class="input-genero">
                                    <input type="radio" name="genero" id="masculino">
                                    <label for="masculino">Masculino</label>
                            </div>
                            <div class="input-genero">
                                    <input type="radio" name="genero" id="feminino">
                                    <label for="masculino">Feminino</label>
                            </div>
                        </div>
                        <div class="inputs-right">
                            <div class="input-genero">
                                    <input type="radio" name="genero" id="outro">
                                    <label for="masculino">Outro</label>
                            </div>
                            <div class="input-genero">
                                    <input type="radio" name="genero" id="none">
                                    <label for="masculino">Prefiro não dizer</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn-continuar">Continuar</button>
            </div>
        </div>

    </main>

</body>

</html>