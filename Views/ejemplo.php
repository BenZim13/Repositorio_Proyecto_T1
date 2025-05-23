<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SuperCarpi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" >
  <link href="../assets/css/miestilo.css" rel="stylesheet">

</head>
<body>

  <nav class="navbar bg-body-tertiary fixed-top"> 
     <div class="container-fluid">
      <a class="navbar-brand" href="#">SuperCarpi</a>
  
      <!-- Barra de busqueda -->
      <form class="d-flex mt-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar Productos" aria-label="Buscar">
        <button class="btn btn-outline-secondary" type="submit">
          <img src="../assets/img/search.svg" alt="Buscar">
        </button>
      </form>
  
      <!-- Menu -->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <i class="bi bi-list"></i>
      </button>
  
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h5>
          <button type="button" class="btn btn-outline" data-bs-dismiss="offcanvas" aria-label="Cerrar">
            <img src="../assets/img/x-circle.svg" alt="Cerrar">
          </button>
        </div>
  
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#comercializacion" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Comercialización
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Lácteos</a></li>
                <li><a class="dropdown-item" href="#">Carnes</a></li>
                <li><a class="dropdown-item" href="#">Panificados</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Pedidos</a></li>
              </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('proyecto/quienes-somos', "") ?>">Quienes Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contacto">Información de Contactos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#terminos">Términos y Usos</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Secciones -->
  <div id="comercializacion" class="section bg-light text-center">
    <div class="container">
      <h2>Comercialización</h2>
      <p>Ofrecemos una amplia gama de productos para satisfacer todas tus necesidades.</p>
    </div>
  </div>

  <div id="quienes-somos" class="section text-center">
    <div class="container">
      <h2>Quienes Somos</h2>
      <p>Somos una empresa dedicada a la comercialización de productos de alta calidad.</p>
    </div>
  </div>

  <div id="contacto" class="section text-center">
    <div class="container">
      <h2>Información de Contactos</h2>
      <p>Para más información, contáctanos a través de nuestro correo: contacto@supermercadovirtual.com</p>
    </div>
  </div>

  <div id="terminos" class="section bg-light text-center">
    <div class="container">
      <h2>Términos y Usos</h2>
      <p>Por favor, revisa nuestros términos y condiciones antes de realizar una compra.</p>
    </div>
  </div>

  <footer class="text-center py-4">
    <p>&copy; 2025 Supermercado Virtual. Todos los derechos reservados.</p>
  
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>