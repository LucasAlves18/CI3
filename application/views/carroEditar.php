<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo base_url() . 'carro'; ?>">Voltar</a>
        <h1>Editar Carro</h1>
        <?php echo form_open('carro/atualizar'); ?>
            <input type="hidden" required value="<?php echo $carro[0]->idCarro; ?>" name="idCarro"/>
            <input type="text" required value="<?php echo $carro[0]->marca; ?>" name="marca"/>
            <br><br>
            <input type="text" required value="<?php echo $carro[0]->modelo; ?>" name="modelo"/>
            <br><br>
            <input type="number" required value="<?php echo $carro[0]->portas; ?>" name="portas"/>
            <br><br>
            <input type="color" required value="<?php echo $carro[0]->cor; ?>" name="cor"/>
            <br><br>
            <input type="text" required value="<?php echo $carro[0]->placa; ?>" name="placa"/>
            <br><br>
            <input type="number" required value="<?php echo $carro[0]->idPessoa; ?>" name="idPessoa"/>
            <br><br>
            <input type="submit" value="Salvar" name="salvar">
        <?php echo form_close(); ?>
    </body>
</html>