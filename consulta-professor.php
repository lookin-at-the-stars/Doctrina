<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="/Doctrina/icones.png">

    <title>Doctrina- Inicio</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <?php session_start();
        if(!isset($_SESSION['nome'])){
        header('Location: login.html');}?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <!--<div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-graduation-cap"></i>-->
        
    
            <div class="sidebar-brand-icon"><img src="/Doctrina/icone-branco.png" alt="" style="height: 2.0rem; width: 2.0rem;"></div>
            <div class="sidebar-brand-text mx-0.75"><img src="/Doctrina/img/octrina-branco.png" alt="" style="height: 1.58rem; width: 6.6rem;"></div>
            <!--<div class="sidebar-brand-text mx-3" style="font-size: 24px;">Doctrina</div>-->
            </a>
            

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index-secretaria.php">
                    <i class="fas fa-fw fa-house-user" style="font-weight: bold;"></i>
                    <span>Início</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Financeiro
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-dollar-sign"></i>
                    <span>Mensalidades</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Situação:</h6>
                        <a class="collapse-item" href="buttons.html" style="color: red; font-weight: bold;">Em aberto</a>
                        <a class="collapse-item" href="cards.html" style="color: rgb(13, 211, 13); font-weight: bold;">Pagas</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-pencil-ruler"></i>
                    <span>Materiais Requeridos</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Listas de materiais:</h6>
                        <a class="collapse-item" href="utilities-color.html">Materias Didáticos</a>
                        <a class="collapse-item" href="utilities-border.html">Materiais Artisticos</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Educacional
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
           <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-user-edit"></i>
                    <span>Consulta de Aluno</span></a>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Login Screens:</h6> 
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div> 
                        <h6 class="collapse-header">Boletins</h6>
                        <a class="collapse-item" href="blank.php">Mensal</a>
                        <a class="collapse-item" href="404.html">Bimestral</a>
                        
                    </div>
                </div> -->
            </li>

            <!-- Nav Item - Tarefas -->
            <li class="nav-item">
                <a class="nav-link" href="consulta-aluno.php">
                    <i class="fas fa-fw fa-user-edit"></i>
                    <span>Consultar Aluno</span></a>
            </li>

            <!-- Nav Item - Carteirinha -->
            <li class="nav-item active">
                <a class="nav-link" href="consulta-professor.php">
                    <i class="fas fa-fw fa-graduation-cap"></i>
                    <span>Consultar Professor</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="consulta-turma.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Consultar Turma</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="consulta-disc.php">
                    <i class="fas fa-fw fa-briefcase"></i>
                    <span>Consultar Disciplina</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" style="background-color: #ffecc7;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background-color: #ffeecb;">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars" style="background-color: #ffeecb; color:#82031b;"></i>
                    </button>

                    <!-- Topbar Search 
                        <form
                          class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
-->
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                      <!----  <p style=" font-weight: bold; align-content: center; @media(max-width: 600px)
                         {display: none;}" class="sumicell">"A educação é uma das forças mais poderosas que pode transformar a sociedade." </p> -->
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <?php 
                                echo $_SESSION['nome'];
                                ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sair
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" style="background-color: #ffeecb;">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800" style="font-weight: bolder;">Consultar Professor</h1>
                    </div>
<?php
            $id = '';
            $nome =  '';
            $data_nascimento = '';
            $email = '';
            $senha = '';
    
            // Conexão com o banco de dados
            $conn = new mysqli("localhost", "root", "", "Doctrina");
    
            if ($conn->connect_error) {
                die("Erro de conexão: " . $conn->connect_error);
            }
?>
                    <!-- Content Row -->
                    <div class="row">
    <form action="" method="post">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <input type="number" name="id" class="form-control" placeholder="ID" value="<?php echo $id; ?>">
            <input type="text" name="nome" class="form-control" placeholder="Nome" value="<?php echo $nome; ?>">
            <input type="date" name="data_nasc" class="form-control" placeholder="Data de Nascimento" value="<?php echo $data_nascimento; ?>">
            <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>">
            <input type="text" name="senha" class="form-control" placeholder="Senha" value="<?php echo $senha; ?>">
    
        </div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <input type="submit" value="Adicionar" name="adicionar" class="btn" style="background-color: #82031b; border-color:#680215; color:#ffecc7">
            <input type="submit" value="Alterar" name="alterar" class="btn" style="background-color: #82031b; border-color:#680215; color:#ffecc7">
            <input type="submit" value="Remover" name="remover" class="btn" style="background-color: #82031b; border-color:#680215; color:#ffecc7">
            <input type="submit" value="Consultar" name="consultar" class="btn" style="background-color: #82031b; border-color:#680215; color:#ffecc7">
        </div>
    </form>
</div>

<div class="row">
    <?php

    // Verifica se o botão "Consultar" foi clicado
    if(isset($_POST['consultar'])) {
        // Recupera os valores dos inputs
        $id = $_POST['id'] ?? '';
        $nome = $_POST['nome'] ?? '';
        $data_nascimento = $_POST['data_nasc'] ?? '';
        $email = $_POST['email'] ?? '';
        $senha = $_POST['senha'] ?? '';

// Constrói a consulta SQL com base nos parâmetros fornecidos
$sql = "SELECT Professor.id, Professor.nome, Professor.data_nascimento, Professor.email, Professor.senha
        FROM Professor
        WHERE 1=1";

if (!empty($id)) {
    $sql .= " AND Professor.id = $id";
}
if (!empty($nome)) {
    $sql .= " AND Professor.nome LIKE '%$nome%'";
}        
if (!empty($data_nascimento)) {
    $sql .= " AND Professor.data_nascimento = '$data_nascimento'";
}
if (!empty($email)) {
    $sql .= " AND Professor.email = '$email'";
}
if (!empty($senha)) {
    $sql .= " AND Professor.senha = '$senha'";
}

// Executa a consulta no banco de dados
$result = $conn->query($sql);

// Verifica se houve algum erro na consulta
if ($result === false) {
    echo "Erro na consulta: " . $conn->error;
} else {
    // Verifica se a consulta retornou resultados
    if ($result->num_rows > 0) {
        // Exibe os resultados em uma tabela
        echo "<div class='table-responsive'>";
        echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>";
        echo "<thead><tr><th>ID</th><th>Nome</th><th>Data de Nascimento</th><th>Email</th><th>Senha</th></tr></thead>";
        echo "<tbody>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["nome"]."</td>";
            $data_nascimento = date("d-m-Y", strtotime($row["data_nascimento"]));
            echo "<td>".$data_nascimento."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["senha"]."</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    } else {
        echo "Nenhum resultado encontrado.";
    }
}

// Fecha a conexão com o banco de dados
$conn->close();
    }


    if (isset($_POST['adicionar'])) {
        $nome = $_POST['nome'] ?? '';
        $data_nascimento = $_POST['data_nasc'] ?? '';
        $email = $_POST['email'] ?? '';
        $senha = $_POST['senha'] ?? '';
    
        if ($nome != '' && $data_nascimento != '' && $email != '' && $senha != '') {
            // Prepara a consulta para inserir o professor
            $stmt = $conn->prepare("INSERT INTO Professor(nome, data_nascimento, email, senha)
                                    VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $nome, $data_nascimento, $email, $senha);
            $result = $stmt->execute();
    
            if ($result === false) {
                echo "Professor não adicionado. Algum dado está conflitando com o de outro professor.";
            } else {
                echo "Professor adicionado.";
            }
        } else {
            echo "Por favor, preencha todos os campos.";
        }
    }
    
if (isset($_POST['remover'])) {
    $id = $_POST['id'] ?? '';
    $nome = $_POST['nome'] ?? '';
    $data_nascimento = $_POST['data_nasc'] ?? '';
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    // Monta a consulta SQL de remoção
    $sql = "DELETE FROM Professor WHERE 1=1";

    if (!empty($id)) {
        $sql .= " AND id = $id";
    }
    if (!empty($nome)) {
        $sql .= " AND nome = '$nome'";
    }
    if (!empty($data_nascimento)) {
        $sql .= " AND data_nascimento = '$data_nascimento'";
    }
    if (!empty($email)) {
        $sql .= " AND email = '$email'";
    }
    if (!empty($senha)) {
        $sql .= " AND senha = '$senha'";
    }

    // Executa a consulta de remoção
    $result = $conn->query($sql);
    if ($result === false) {
        echo "Erro ao remover o professor.";
    } else {
        echo "Professor removido com sucesso.";
    }
}

if (isset($_POST['alterar'])) {
    $id = $_POST['id'] ?? '';
    $nome = $_POST['nome'] ?? '';
    $data_nascimento = $_POST['data_nasc'] ?? '';
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    // Verifica se o ID do professor foi fornecido
    if (empty($id)) {
        echo "ID do professor não fornecido.";
        exit;
    }

    // Verifica se algum campo está vazio
    if (empty($nome) || empty($data_nascimento) || empty($email) || empty($senha)) {
        echo "Por favor, preencha todos os campos.";
        exit;
    }

    // Prepara a consulta para atualizar os dados do professor
    $stmt = $conn->prepare("UPDATE Professor SET nome = ?, data_nascimento = ?, email = ?, senha = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $nome, $data_nascimento, $email, $senha, $id);
    $result = $stmt->execute();

    if ($result === false) {
        echo "Erro ao atualizar os dados do professor.";
    } else {
        echo "Dados do professor atualizados com sucesso.";
    }

    // Fecha a conexão com o banco de dados
    $stmt->close();
    $conn->close();
}

    
    
    ?>
</div>


<div class="row">
</div>


                    <!-- Content Row -->
                    <!-- <div class="row">

                        <!-- Content Column -->
                        <!-- <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                           <!--  <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Server Migration <span
                                            class="float-right">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Sales Tracking <span
                                            class="float-right">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Customer Database <span
                                            class="float-right">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Payout Details <span
                                            class="float-right">80%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Account Setup <span
                                            class="float-right">Complete!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color System -->
                        <!--     <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-primary text-white shadow">
                                        <div class="card-body">
                                            Primary
                                            <div class="text-white-50 small">#4e73df</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Success
                                            <div class="text-white-50 small">#1cc88a</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-info text-white shadow">
                                        <div class="card-body">
                                            Info
                                            <div class="text-white-50 small">#36b9cc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-warning text-white shadow">
                                        <div class="card-body">
                                            Warning
                                            <div class="text-white-50 small">#f6c23e</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            Danger
                                            <div class="text-white-50 small">#e74a3b</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-secondary text-white shadow">
                                        <div class="card-body">
                                            Secondary
                                            <div class="text-white-50 small">#858796</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-light text-black shadow">
                                        <div class="card-body">
                                            Light
                                            <div class="text-black-50 small">#f8f9fc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-dark text-white shadow">
                                        <div class="card-body">
                                            Dark
                                            <div class="text-white-50 small">#5a5c69</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> --> 

                     <!--    <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                           <!--  <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/undraw_posting_photo.svg" alt="...">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                                        unDraw &rarr;</a>
                                </div>
                            </div>

                            <!-- Approach -->
                        <!--     <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                                </div>
                                <div class="card-body">
                                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                        CSS bloat and poor page performance. Custom CSS classes are used to create
                                        custom components and custom utility classes.</p>
                                    <p class="mb-0">Before working with this theme, you should become familiar with the
                                        Bootstrap framework, especially the utility classes.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Doctrina 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deseja realmente sair?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Aperte "Sair" se você estiver pronto para finalizar a sessão.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-google" href="login.html">Sair</a>
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

    <!-- Page level plugins -->

    <!-- Page level custom scripts -->

</body>

</html>