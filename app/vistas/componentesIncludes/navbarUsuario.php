<nav class="navbar navbar-expand-sm navbar-dark color-primario">
    <button class="btn btn-primary" id="menu-toggle"><i class="fas fa-bars"></i></button>
    <a class="navbar-brand " href="#">Control de agua</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto  mt-lg-0">
        <li class="nav-item active">
                <a class="nav-link" href="V_InicioUsuario.php">

                  Inicio
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="V_VerRegistros.php?id=<?php echo $_SESSION["Id"]; ?>">

                  Ver Registros
                </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="../../../config/cerrar.php">

                   Cerrar Sesión
                </a>
            </li>
            <li class="nav-item active">

                <a class="nav-link" href="#"><i class="fa fa-user"></i> <?php echo $_SESSION['Nombre']; ?></a>
            </li>


    </div>


    </ul>


</nav>