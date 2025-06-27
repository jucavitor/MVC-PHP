<?php
//EXIBIÇÃO DOS RESULTADOS TRAZIDOS PELA MODEL
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./views/css/index.css">
        <title>Listagem de usuarios</title>
    </head>
<body>
    <h1>Listagem de Clientes</h1>
        <div class="content">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                    </tr>
                </thead>
                     <tbody>
                     <?php if (isset($resultdata) && is_array($resultdata)): ?>
                        <?php foreach($resultdata as $data): ?>
                                 <tr>
                                      <td><?= $data['id'] ?></td>
                                      <td><?= $data['nome'] ?></td>
                                      <td><?= $data['email'] ?></td>
                                      <td><?= $data['telefone'] ?></td>
                                 </tr>
                          <?php endforeach; ?>
                      <?php else: ?>
                           <tr><td colspan="4">Nenhum cliente encontrado.</td></tr>
                     <?php endif; ?>
                </tbody>
            </table>
        </div>
</body>
</html>