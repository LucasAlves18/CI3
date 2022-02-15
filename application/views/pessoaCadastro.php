<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo base_url() . 'home'; ?>">Voltar</a>
        <h1>Cadastro Pessoa</h1>
        <?php echo form_open('pessoa/inserir'); ?>
            <input type="text" required placeholder="Nome aqui..." name="nome"/>
            <br><br>
            <input type="tel" required placeholder="Telefone aqui..." name="telefone"/>
            <br><br>
            <input type="email" required placeholder="E-mail aqui..." name="email"/>
            <br><br>
            <input type="text" required placeholder="Endereço aqui..." name="endereco"/>
            <br><br>
            <input type="radio" required value="Fisica" name="tpPessoa">Fisíca
            <input type="radio" required value="Juridica" name="tpPessoa">Jurídica
            <br><br>
            <input type="text" placeholder="CPF aqui..." 
                   minlength="11" maxlength="11" name="cpf"/>
            <br><br>
            <input type="text" placeholder="RG aqui..." minlength="10" maxlength="10" name="rg"/>
            <br><br>
            <input type="radio" value="F" name="sexo">Feminino
            <input type="radio" value="M" name="sexo">Masculino
            <br><br>
            <input type="number" placeholder="CNPJ aqui..." name="cnpj"/>
            <br><br>
            <input type="text" placeholder="Nome Fantasia aqui..." name="nomeFantasia"/>
            <br><br>
            <input type="text" placeholder="Site aqui..." name="site"/>
            <br><br>
            <input type="submit" value="Salvar" name="salvar">
            <input type="reset" value="Limpar" name="limpar">
        <?php echo form_close(); ?>
        <h2>Lista Pessoas</h2>
        <table>
            <thead>
                <tr>
                    <th>Nome</th><th>E-mail</th><th>Telefone</th><th>Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pessoas as $pes): ?>
                <tr>
                    <td><?php echo $pes->nome; ?></td>
                    <td><?php echo $pes->email; ?></td>
                    <td><?php echo $pes->telefone; ?></td>
                    <td>
                        <a href="<?php echo base_url() .
                                'pessoa/editar/' . 
                                $pes->idPessoa; ?>" >Editar</a> | 
                        <a href="<?php echo base_url() .
                                'pessoa/excluir/' . 
                                $pes->idPessoa; ?>" >Deletar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>