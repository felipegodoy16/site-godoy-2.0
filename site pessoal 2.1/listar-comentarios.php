<?php
    require_once 'classe/Comentario.php';
    $comentario = new Comentario();
    $lista = $comentario->listar();
?>

<?php foreach ($lista as $linha): ?>
    <tr>
        <td><?php echo $linha['nome'] ?></td>
        <td><?php echo $linha['insta'] ?></td>                                                              
        <td><?php echo $linha['mensagem'] ?></td>
        <td><?php echo "<img src='uploads/".$linha['imagem']."' width='200'>" ?></td>
    </tr>
<?php endforeach ?> 