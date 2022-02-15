<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo base_url() . 'home'; ?>">Voltar</a>
        <h1>Cadastro Carro</h1>
        <?php echo form_open('carro/inserir'); ?>
            <input type="text" required placeholder="Marca aqui..." name="marca"/>
            <br><br>
            <input type="text" required placeholder="Modelo aqui..." name="modelo"/>
            <br><br>
            <input type="number" required placeholder="Portas aqui..." name="portas"/>
            <br><br>
            <input type="color" required placeholder="Cor aqui..." name="cor"/>
            <br><br>
            <input type="text" placeholder="Placa aqui..." name="placa"/>
            <br><br>
            <input type="text" placeholder="Proprietário aqui..." name="idPessoa"/>
            <br><br>
            <input type="submit" value="Salvar" name="salvar">
            <input type="reset" value="Limpar" name="limpar">
        <?php echo form_close(); ?>
        <h2>Lista Carros</h2>
        <table>
            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Portas</th>
                    <th>Cor</th>
                    <th>Proprietário</th>
                    <th>Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carro as $car): ?>
                <tr>
                    <td><?php echo $car->marca; ?></td>
                    <td><?php echo $car->modelo; ?></td>
                    <td><?php echo $car->portas; ?></td>
                    <td><input type="color" disabled value="<?php echo $car->cor; ?>"/></td>
                    <td><?php echo $car->idPessoa; ?></td>
                    <td>
                        <a href="<?php echo base_url() .
                                'carro/editar/' . 
                                $car->idCarro; ?>" >Editar</a> | 
                        <a href="<?php echo base_url() .
                                'carro/excluir/' . 
                                $car->idCarro; ?>" >Deletar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>