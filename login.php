<?php include 'header.php'; ?>
<?php include ('connection.php'); 
if(isset($_POST['email']) || isset($_POST['senha'])){
  if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
              session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: LacoVermelho/index.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}
?>
<body>
  <div class="background">
    <div class="container" id="backgraund2">
      <div class="card">

        <h1 class="mt-3">Acesse sua Conta</h1>
            
          <div class="card-body">

          <form action="" method="POST">
            <div class="mb-3">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" class="form-control" id="email" placeholder="Seu e-mail" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Senha</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Sua senha" required>
            </div>
            <div class="buttonBack">
              <button type="submit" class="btn btn-secondary">Enviar</button>
              <a href="index.php">Voltar</a>
            </div>
          </form>

          </div>
        </div>
      </div>
      
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>