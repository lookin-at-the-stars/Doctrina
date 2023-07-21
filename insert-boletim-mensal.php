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
    include "conexao.php";
    $conn = new mysqli("localhost", "root", "", "Doctrina");
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }
    // Verifica se o aluno está autenticado
    if (!isset($_SESSION['id'])) {
      // Redireciona para a página de login caso não esteja autenticado
      header("Location: login.html");
      exit();
    }
    ?>
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

            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-house-user" style="font-weight: bold;"></i>
                    <span>Início</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
         <!--   <div class="sidebar-heading"> 
                Financeiro
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
           <!-- <li class="nav-item">
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
        <!--    <li class="nav-item">
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
        <!--    <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Educacional
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-mail-bulk"></i>
                    <span>Boletim</span></a>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Login Screens:</h6> 
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div> -->
                        <h6 class="collapse-header">Boletins</h6>
                        <a class="collapse-item" href="insert-boletim-mensal.php">Inserir notas mensais</a>
                        <a class="collapse-item" href="404.html">Inserir notas bimestral</a>
                        
                    </div>
                </div>
            </li>

            <!-- Nav Item - Tarefas -->
            <li class="nav-item">
                <a class="nav-link" href="tarefas.html">
                    <i class="fas fa-fw fa-clipboard"></i>
                    <span>Tarefas</span></a>
            </li>

            <!-- Nav Item - Carteirinha -->
            <li class="nav-item">
                <a class="nav-link" href="carteirinha.html">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>Carteirinha</span></a>
            </li>

            <!-- Nav Item - Registro de Aula -->
            <li class="nav-item">
                <a class="nav-link" href="chamada.php">
                    <i class="fas fa-fw fa-chalkboard-teacher"></i>
                    <span>Registro de Aula</span></a>
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


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Boletim - Mensal</h1>

                </div>
                <!-- /.container-fluid -->
                <div class="container-fluid">
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><?php 
                                echo $_SESSION['nome'];
                                ?></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <form action="" method="post">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <select id="turma" class="form-control" name="turma">
            <option value="">Turma</option>
            <?php
            // Verificar se há resultados da consulta
            $sql = "SELECT DISTINCT t.id, t.nome 
                    FROM Turma t 
                    INNER JOIN Disciplina d ON t.id = d.turma_id 
                    INNER JOIN Professor p ON d.professor_id = p.id 
                    WHERE p.id = ?";
            
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $_SESSION['id']); // Substitua $_SESSION['id'] pelo nome correto da variável de sessão que armazena o ID do professor logado
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // Loop pelos resultados e criar as opções
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "'>" . $row["nome"] . "</option>";
                }
            } else {
                echo "<option value=''>Nenhuma turma encontrada</option>";
            }
            ?>
        </select>
        <br>
        <select id="disciplina" class="form-control" name="disciplina">
            <option value="">Disciplina</option>
            <?php
            // Verificar se há resultados da consulta
            $sql = "SELECT id, nome FROM Disciplina WHERE professor_id = '$_SESSION[id]'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // Loop pelos resultados e criar as opções
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "'>" . $row["nome"] . "</option>";
                }
            } else {
                echo "<option value=''>Nenhuma disciplina encontrada</option>";
            }
            ?>
        </select>
        <br>
        <select id="disciplina" class="form-control" name="bimestre">
        <option value="">Bimestre</option>
        <option value="1">1 Bimestre</option>
        <option value="2">2 Bimestre</option>
        <option value="3">3 Bimestre</option>
        <option value="4">4 Bimestre</option>

        <input type="submit" class="form-control btn btn-google" value="Mostrar" name="mostrar">
        </form>  
        </div>
        <?php
if (isset($_POST['mostrar'])) {
    $turma_id = $_POST['turma'];
    $disciplina_id = $_POST['disciplina'];
    $bimestre = $_POST['bimestre'];

    $sql = "SELECT a.id, a.nome, 
                   n1.nota AS prova1, 
                   n2.nota AS prova2, 
                   n3.nota AS trabalho, 
                   n4.nota AS atividade 
            FROM Aluno a 
            LEFT JOIN Nota n1 ON a.id = n1.aluno_id AND n1.tipo_id = 1 AND n1.bim = $bimestre AND n1.disciplina_id = $disciplina_id
            LEFT JOIN Nota n2 ON a.id = n2.aluno_id AND n2.tipo_id = 2 AND n2.bim = $bimestre AND n2.disciplina_id = $disciplina_id
            LEFT JOIN Nota n3 ON a.id = n3.aluno_id AND n3.tipo_id = 3 AND n3.bim = $bimestre AND n3.disciplina_id = $disciplina_id
            LEFT JOIN Nota n4 ON a.id = n4.aluno_id AND n4.tipo_id = 4 AND n4.bim = $bimestre AND n4.disciplina_id = $disciplina_id
            WHERE a.turma_id = $turma_id";

    $result = $conn->query($sql);

    // Exibe o formulário com a tabela dentro
    echo "<form action='' method='post'>";
    echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>";
    echo "<thead><tr><th>Nome</th><th>Prova 1</th><th>Prova 2</th><th>Trabalho</th><th>Atividade</th></tr></thead>";
    echo "<tbody>";

    // Verifica se houve algum erro na consulta
    if ($result === false) {
        echo "Erro na consulta: " . $conn->error;
    } else {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
            echo "<td><input type='text' name='prova1' class='form-control' value='" . (isset($row['prova1']) ? htmlspecialchars($row['prova1']) : "") . "'></td>";
            echo "<td><input type='text' name='prova2' class='form-control' value='" . (isset($row['prova2']) ? htmlspecialchars($row['prova2']) : "") . "'></td>";
            echo "<td><input type='text' name='trabalho' class='form-control' value='" . (isset($row['trabalho']) ? htmlspecialchars($row['trabalho']) : "") . "'></td>";
            echo "<td><input type='text' name='atividade' class='form-control' value='" . (isset($row['atividade']) ? htmlspecialchars($row['atividade']) : "") . "'></td>";
            echo "</tr>";
        }
    }
    echo "</tbody>";
    echo "</table>";
    echo "<input type='submit' class='btn btn-facebook' value='Salvar Notas' name='salvar_notas'>";
    echo "</form>";
}
?>







    
                            
                            </div>
                        </div>
                    </div>

                </div>    
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
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