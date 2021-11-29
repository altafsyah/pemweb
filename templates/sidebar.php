<nav id="sidebar">
   <div class="sidebar-header border-bottom">
      <div class="profile-pic mb-4 text-center"></div>
      <h3><?php echo "Halo, " . ucfirst($_SESSION['login'])?></h2>
   </div>
   <ul class="list-unstyled components">
      <li class="my-3">
         <a href="index.php?dashboard" class="d-flex align-items-center">
            <i class="far fa-chart-bar" id="sidebar-link"></i>
            <span class="px-4" id="sidebar-link">Dashboard</span>
         </a>
      </li>
      <li class="my-3">
         <a href="index.php?data" class="d-flex align-items-center">
            <i class="far fa-id-badge" id="sidebar-link"></i>
            <span class="px-4" id="sidebar-link">Data Pasien</span>
         </a>
      </li>
      <li class="my-3">
         <a href="index.php?diagnosis" class="d-flex align-items-center">
            <i class="far fa-edit" id="sidebar-link"></i>
            <span class="px-4" id="sidebar-link">Diagnosis</span>
         </a>
      </li>
      <li class="my-3 logout">
         <a href=" index.php?diagnosis" class="d-flex align-items-center">
            <i class="far fa-sign-out-alt" id="sidebar-link"></i>
            <span class="px-4" id="sidebar-link">Logout</span>
         </a>
      </li>
   </ul>
</nav>