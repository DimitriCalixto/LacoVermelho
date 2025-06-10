<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço Vermelho</title>
    <!-- Seu CSS personalizado -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Ícone -->
    <link rel="icon" href="assets/icons/logosmalLacoVermelho.png" type="image/png">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,700;1,14..32,700&display=swap" rel="stylesheet">
     <!-- CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<header>
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
        <div class="container-fluid">
          
          <!-- Logo ou nome -->
          <a class="navbar-brand" href="index.php">&#x1FA78; Laço Vermelho</a>
          
          <!-- Botão toggler para telas pequenas -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <!-- Itens da navbar -->
          <div class="collapse navbar-collapse" id="navbarContent">
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="informe.php">Informe-se</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="locais.php">Pontos de Doação</a>
              </li>
            </ul>
            <?php
    if (!str_contains($_SERVER['REQUEST_URI'], '/login.php')) { ?>
            <form class="d-flex">
              <a href="login.php"><button class="btn btn-outline-danger" type="button">Entrar/Cadastrar<i id="icone"></i></button></a>
            </form>
         <?php } 
    ?>
          </div>
        </div>
      </nav>
      </header>