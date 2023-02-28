<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="dashboard/style.css" />
  <title>Dashboard | Spbe</title>
</head>

<body>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-white" id="sidebar-wrapper">
      <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
          class="fas fa-user-secret me-2"></i>Admin</div>
      <div class="list-group list-group-flush my-3">
        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
            class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
            class="fas fa-users me-2"></i>Pegawai</a>
        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
            class="fas fa-pen me-2"></i>Penambahan Article</a>
        <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
            class="fas fa-power-off me-2"></i>Logout</a>
      </div>
    </div>
    <div class="template">
        @yield('sidebar')
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      var el = document.getElementById("wrapper");
      var toggleButton = document.getElementById("menu-toggle");

      toggleButton.onclick = function() {
        el.classList.toggle("toggled");
      };
    </script>
</body>

</html>
