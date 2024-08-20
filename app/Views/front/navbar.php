<!-- navegación-->
<?php
  $session = session();
  $nombre = $session->get('nombre');
  $perfil = $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg navb" style="background-color: #3EF8D6; height: 50px; padding: 0;">
  <a class="navbar-brand" href="<?php echo base_url('principal'); ?>">
    <img src="assets/img/logoP.png" class="navbar-logo" style="height: 40px; width: auto; margin-left: 10px;" alt="Logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <!-- NavBar para clientes no logueados -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('quienessomos'); ?>" style="line-height: 50px;">Quiénes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('comercializacion'); ?>" style="line-height: 50px;">Comercializacion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('contacto'); ?>" style="line-height: 50px;">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('registrarse'); ?>" style="line-height: 50px;">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('login'); ?>" style="line-height: 50px;">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('terminosYusos'); ?>" style="line-height: 50px;">Términos y Usos</a>
        </li>
      </ul>
      <input class="form-control form-control-sm me-2 search-input" type="search" placeholder="Buscar" aria-label="Buscar" style="width: 150px;">
      <button class="btn btn-outline-light btn-sm" type="submit" style="padding: 0.25rem 0.5rem;">Buscar</button>
    </div>
</nav>
