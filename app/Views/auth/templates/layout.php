<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.0.5/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Auth Style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/templates/auth-layout.css">
    
    <title><?= $title ?></title>
  </head>
  <body class="hold-transition <?= $page ?>">
    
    <?= $this->renderSection('content') ?>
    
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.0.5/dist/js/adminlte.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/70351a3d8c.js" crossorigin="anonymous"></script>
    <!-- Eruda -->
    <script src="https://cdn.jsdelivr.net/npm/eruda@2.4.1/eruda.js"></script>
    <script>eruda.init()</script>
  </body>
</html>
                                                                                                                                                                                                                                                                                                            