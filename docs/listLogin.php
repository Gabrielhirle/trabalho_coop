<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>cooper</title>
</head>
<body>
    <div class="container-fluid">
        <?php
        include 'menu.php';
        ?>
        <div class="row">
            <div class="col m-3 p-3 text-center">
                <h1>listagem de login</h1>
                <?php
                   require 'conectaBanco.php';
                    $sql = "SELECT * FROM login ";
                    $resultado = mysqli_query($banco, $sql);
                   $banco->close();
                ?>

                <table class="table table-hover">
                  <thead>
                    <th scope="col">Id</th>
                    <th scope="col">usuario</th>
                    <th scope="col">senha</th>
                    <th scope="col">acoes</th>
                  </thead>
                  <tbody>


                    <?php
                      if(resultado){
                        while($linha = ($resultado)){
                          $id = $linha['id'];
                          $id = $linha['email'];
                          $id = $linha['senha'];

                             echo "<tr>
                                <th scope='row'>$id</th>
                                <td>$emai</td>
                                <td>$senha</td>
                                <td></td>
                              </tr>"

                        }
                      }
                      
                      
                    ?>


                  </tbody>
                </table>

            </div>

        </div>
    </div>
</body>
</html>
