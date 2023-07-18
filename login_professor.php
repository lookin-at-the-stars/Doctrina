<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="/Doctrina/icone.png">

    <title>Doctrina - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-danger">

    <div class="container" style="padding-top: 3%;">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row" style="background-color: #f5e3c1;">
                            <div class="col-lg-6 d-none d-lg-block" style="padding-top: 1rem; background-color: #e7d5b4; color: #660114;"><a class="sidebar-brand d-flex align-items-center justify-content-center" style="color:#660114;">
                                <div class="sidebar-brand-icon rotate-n-15">
                                   <!-- <i style="font-size: 60px;" class="fas fa-graduation-cap"></i> -->
                                </div>      
                                <div><a href="login.html"><img src="/Doctrina/img/logo.png" alt="" href="login.html" style="height: 30rem; width: 45 rem;"></a> </div>                      
                            <!-- <div class="" style="font-size: 54px ; color: #660114; font-weight: 800;">DOCTRINA</div> -->
                        </div>
                            <div class="col-lg-6">
                                <div class="p-4">
                                    <div class="text-center" >
                                        <h1 class="h4 mb-4" style="font-weight: 800; color: #660315;">Login do Professor: </h1>
                                    </div>


                                    <div>
                                    <form class="user" method="post" action="">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Senha" name="senha">
                                        </div>
                                        <div class="form-group">
                                        </div>
                                        <input type="submit" value="Entrar" class="btn btn-google btn-user btn-block ">
                                            <hr>
                                    </form>
                                    </div>
                                    <p class="small" style="text-align: center;">
                                    <?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Conexão com o banco de dados
    $conn = new mysqli("localhost", "root", "", "Doctrina");

    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    // Consulta de seleção de usuário com base no email
    $sql = "SELECT id, nome, email, senha FROM Professor WHERE Email = '$email';";
    $result = $conn->query($sql);

    if (!$result) {
        die("Erro na consulta: " . $conn->error);
    }
        if ($result->num_rows > 0) 
        {
            // Verifica se a senha está correta
            $row = $result->fetch_assoc();
            echo $row['senha'], $senha;
            if ($senha == $row['senha']) {
                // Inicia a sessão e armazena os dados do usuário
                session_start();
                $_SESSION['id'] = $row['id'];
                $_SESSION['nome'] = $row['nome'];
                $_SESSION['email'] = $row['Email'];
                // Redireciona para a página de perfil
                header('Location: index-professor.php');
                exit;
                ?>
                

                                    <div class="text-center" >
                                    <?php
                                    } 
                                    else {
                                    // Senha incorreta
                                    echo "Senha incorreta";
                                    }   
                                }   
                                    else   {
                                    // Usuário não encontrado
                                    echo "Usuário não encontrado";
                                    }
                                }

                                ?></p>
                                </div>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    <br>

                                    <br>
                                    <br>
                                    
                                    </div>
                                    <div style="align-items: flex-end;""> <i class="fas fa-graduation-cap" 
                                    style="font-size: 3rem; color: #660114; padding-left:83%;
                                     padding-top: 2rem;"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>