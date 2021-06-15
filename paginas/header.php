<script src="bootstrap.bundle.min.js"></script>
<nav class="navbar navbar-expand-xxl navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PET GEST</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarsExampleXxl" aria-controls="navbarNavDarkDropdown" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav me-auto mb-2 mb-xl-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">HOME</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">LISTAR</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="listarClientes.php">Clientes</a></li>
                <li><a class="dropdown-item" href="listarPet.php">Pet</a></li>
                <li><a class="dropdown-item" href="listarFunc.php">Funcionarios</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownXxl" data-bs-toggle="dropdown" aria-expanded="false">CADASTRO</a>
            <ul class="dropdown-menu" aria-labelledby="dropdownXxl">
                <li><a class="dropdown-item" href="cadastroCliente.php">Cliente</a></li>
                <li><a class="dropdown-item" href="cadastroAnimal.php">Pet</a></li>
                <li><a class="dropdown-item" href="cadastroFuncionario.php">Funcionario</a></li>
                <li><a class="dropdown-item" href="cadastroServicos.php">Serviços</a></li>
                <li><a class="dropdown-item" href="cadastroOS">Ordem de Serviço</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownXxl" data-bs-toggle="dropdown" aria-expanded="false">RELATORIO</a>
            <ul class="dropdown-menu" aria-labelledby="dropdownXxl">
              <li><a class="dropdown-item" href="#">Banho e tosas</a></li>
            </ul>
          </li>

        </ul>
    
      </div>
    </div>
  </nav>