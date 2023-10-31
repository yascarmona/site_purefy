<?php 
    include_once('config.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUREFY</title>
    <link rel="stylesheet" href="estilo/style-dash.css">
    <link rel="shortcut icon" type="imagex/png" href="./img/gota.ICO.png" class="logohead">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="js/script-relatorio.js"></script>
</head>
<body>
    <header>
        <div class="logo">
            <a a href="index.html"><img src="img/logoplaneta.png" alt="logo planeta" class="imagem1"></a>
        </div>
        <h1> PUREFY</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="pagina1.html">Sobre</a></li>
                <li><a href="pagina2.html">Clientes</a></li>
                <li><a href="telalogin.html">Perfil</a></li>
            </ul>
        </nav>
    </header>
  <main>
    <div class="perfil">
      <h2>Relatorio Mensal</h2>
      <p>Conteúdo do Widget 1.</p>
      <ul>
        <li>Ph</li>
        <li>sei la</li>
        <li>qualquer coisa</li>
      </ul>
    </div>
    <br>
    <div class="botao-tabela">
    <input type="submit" id="consultar" value="Consultar" onclick="mostrarTabela('maisinfo');" />
    </div>
    <br>
    <div class="report-container" style="display: none;" id="spoiler">
      <h1>Relatório Mensal</h1>
      <table>
        <form action="perfil-dash.php" method="POST">
          <tr>
              <th>Parâmetro</th>
              <th>Valor</th>
              <th>Edição</th>
          </tr>
          <tr>
              <td><span>pH:</span></td>
                <?php
                    $pH = $_GET['pH'];
                    $sql = "SELECT name FROM tb_relatorio WHERE pH='$pH'";
                    $result = mysqli_query($conexao, $sql);
                    $data = mysqli_fetch_assoc($result);
                    if($conexao->query($sql)) {
                    echo '<input type="int" name="pH" value="7">';
                    }
                ?>
                  <a class="edit-button" href="#">Editar</a>
                  <a class="delete-button" href="#">Excluir</a>
              </td>
          </tr>
          <tr>
              <td>Qualidade da Água</td>
              <td>Boa</td>
              <td>
                  <a class="edit-button" href="#">Editar</a>
                  <a class="delete-button" href="#">Excluir</a>
              </td>
          </tr>
          <tr>
              <td>Resíduos na Água</td>
              <td>Baixos</td>
              <td>
                  <a class="edit-button" href="#">Editar</a>
                  <a class="delete-button" href="#">Excluir</a>
              </td>
          </tr>
          <tr>
              <td>Quantidade de Água Armazenada</td>
              <td>10.000 litros</td>
              <td>
                  <a class="edit-button" href="#">Editar</a>
                  <a class="delete-button" href="#">Excluir</a>
              </td>
          </tr>
      </table>
      </form>
      <br><br>
      <input type="submit" id="consultar" value="Ocultar Tabela" onclick="ocultarTabela()" />
  </div>
  <?php
    if(isset($_POST['edit'])) {
      $pH = mysqli_real_escape_string($conexao, $_POST['pH']);
      $qualidade = mysqli_real_escape_string($conexao, $_POST['qualidade']);
      $residuos = mysqli_real_escape_string($conexao, $_POST['residuos']);
      $armazen = mysqli_real_escape_string($conexao, $_POST['armazen']);

      $sql = "UPDATE user SET name = '$name', cpf = '$cpf' WHERE id = '$id'";
      
      if(mysqli_query($connection, $sql) or die($connection->error)) {
        header('Location: index.php');
      } else {
        echo '<script type="text/javascript">
          alert("Error: ' .$sql. ". "
            .$connection->error.
          '");
        </script>';
      }
  }
  mysqli_close($conexao);
  ?>
  </main>
</body>
<footer>
    <p>&copy; 2023 Yasmin Gonçalves Carmona</p>
</footer>
</html>