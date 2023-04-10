<!DOCTYPE html>
<html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Halaman <?= $data["judul"]; ?></title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 </head>

 <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <div class="container"><a class="navbar-brand" href="<?= BASE_URL; ?>">MVC</a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
           aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
           <div class="navbar-nav"><a class="nav-item nav-link active" href="<?= BASE_URL; ?>">Home</a>
           <a class="nav-item nav-link" href="<?= BASE_URL; ?>/blog">Blog</a>
           <a class="nav-item nav-link" href="<?= BASE_URL; ?>/user">User</a>
           <a class="nav-item nav-link" href="<?= BASE_URL; ?>/user/profile">Profile</a></div>
         </div>
       </div>
     </nav>