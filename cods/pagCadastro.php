<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="cadastrocss.css" media="screen"/>
        <script src="https://kit.fontawesome.com/ec4f0fa510.js" crossorigin="anonymous"></script>
        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <div class="content first-content">
                <div class="first-colum">
                    <h2 class="title title-primary">Bem-vindo(a)!</h2>
                    <p class="description description-primary">Logue com suas informações pessoais.</p>
                    <p class="description description-primary">Bons estudos!</p>
                    <button id="signin" class="btn btn-primary">Entrar</button>
                </div>
                <div class="second-colum">
                    <h2 class="title title-second">Criar conta</h2>
                    <div class="social-media">
                        <ul class="list-social-media">
                            <a class="link-social-media" href="#">
                                <li class="item-social-media">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </li>
                            </a>
                            <a class="link-social-media" href="#">
                                <li class="item-social-media">
                                    <i class="fa-brands fa-google-plus-g"></i>
                                </li>
                            </a>
                            <a class="link-social-media" href="#">
                                <li class="item-social-media">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </li>
                            </a>
                        </ul>
                    </div><!--social media-->
                    <p class="description description-second">Ou utilize seu email para registro</p>
                    <form class="form" method="post" action="inserirUsuario.php">
                        <label class="label-input" for="">
                            <i class="fa-solid fa-user icon-modify"></i>
                            <input type="text" placeholder="Nome" name="nome">
                        </label>
                        <label class="label-input" for="">
                            <i class="fa-solid fa-envelope icon-modify"></i>
                            <input type="email" placeholder="Email" name="email">
                        </label>
                        <label class="label-input " for="">
                            <i class="fa-solid fa-lock icon-modify"></i>
                            <input type="password" placeholder="Senha" name="senha">
                        </label>
                        <button class="btn btn-second" type="submit">inscrever</button>
                    </form>
                </div><!--second colum-->
            </div><!--first content-->
            <div class="content second-content">
                <div class="first-colum">
                    <h2 class="title title-primary">Olá!</h2>
                    <p class="description description-primary">Novo por aqui?</p>
                    <p class="description description-primary">Faça seu cadastro e venha estudar!</p>
                    <button id="signup" class="btn btn-primary">cadastrar</button>
                </div>
                <div class="second-colum">
                    <h2 class="title title-second">Entrar</h2>
                    <div class="social-media">
                        <ul class="list-social-media">
                            <a class="link-social-media" href="#">
                                <li class="item-social-media">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </li>
                            </a>
                            <a class="link-social-media" href="#">
                                <li class="item-social-media">
                                    <i class="fa-brands fa-google-plus-g"></i>
                                </li>
                            </a>
                            <a class="link-social-media" href="#">
                                <li class="item-social-media">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </li>
                            </a>
                        </ul>
                    </div><!--social media-->
                    <p class="description description-second">Ou utilize teu email para registro</p>
                    <form class="form" method="post" action="validarlogin.php">
                        <label class="label-input" for="">
                            <i class="fa-solid fa-envelope icon-modify"></i>
                            <input type="email" placeholder="email" name="email">
                        </label>
                        <label class="label-input " for="">
                            <i class="fa-solid fa-lock icon-modify"></i>
                            <input type="password" placeholder="password" name="senha">
                        </label>
                        <a class="password" href="#">Esqueceu sua senha?</a>
                        <button class="btn btn-second" type="submit">entrar</button>
                    </form>
                </div><!--second colum-->
            </div><!--second-content-->
        </div>
        <script src="cadastrojava.js"></script>
    </body>
</html>