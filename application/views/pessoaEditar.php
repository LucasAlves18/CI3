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
        <a href="<?php echo base_url() . 'pessoa'; ?>">Voltar</a>
        <h1>Editar Pessoa</h1>
        <?php echo form_open('pessoa/atualizar'); ?>
            <input type="hidden" required value="<?php echo $pessoa[0]->idPessoa; ?>" name="idPessoa"/>
            <input type="text" required value="<?php echo $pessoa[0]->nome; ?>" name="nome"/>
            <br><br>
            <input type="tel" required value="<?php echo $pessoa[0]->telefone; ?>" name="telefone"/>
            <br><br>
            <input type="email" required value="<?php echo $pessoa[0]->email; ?>" name="email"/>
            <br><br>
            <input type="text" required value="<?php echo $pessoa[0]->endereco; ?>" name="endereco"/>
            <br><br>
            <input type="radio" required value="Fisica" 
                   <?php if (!is_null($pessoa[0]->cpf) && is_null($pessoa[0]->cnpj)) {
                       echo 'checked';
                   } else {
                       echo 'disabled';
                   } ?> name="tpPessoa">Fisíca
            <input type="radio" required value="Juridica" 
                   <?php if (!is_null($pessoa[0]->cnpj) && is_null($pessoa[0]->cpf)) {
                       echo 'checked';
                   } else {
                       echo 'disabled';
                   } ?> name="tpPessoa">Jurídica
            <br><br>
            <input type="text" value="<?php echo $pessoa[0]->cpf; ?>" 
                   <?php if (!is_null($pessoa[0]->cnpj)) {echo 'disabled';} ?>
                   minlength="11" maxlength="11" name="cpf"/>
            <br><br>
            <input type="text" value="<?php echo $pessoa[0]->rg; ?>" 
                   <?php if (!is_null($pessoa[0]->cnpj)) {echo 'disabled';} ?>
                   minlength="10" maxlength="10" name="rg"/>
            <br><br>
            <input type="radio" value="F" 
                <?php if ($pessoa[0]->sexo == 'F') {
                    echo 'checked';
                }elseif (!is_null($pessoa[0]->cnpj)) {
                    echo 'disabled';
                } ?> name="sexo">Feminino
                        <input type="radio" value="M" 
                <?php if ($pessoa[0]->sexo == 'M') {
                    echo 'checked';
                }elseif (!is_null($pessoa[0]->cnpj)) {
                    echo 'disabled';
                } ?> name="sexo">Masculino
            <br><br>
            <input type="number" value="<?php echo $pessoa[0]->cnpj; ?>"
                   <?php if (!is_null($pessoa[0]->cpf)) {echo 'disabled';} ?> name="cnpj"/>
            <br><br>
            <input type="text" value="<?php echo $pessoa[0]->nomeFantasia; ?>"
                   <?php if (!is_null($pessoa[0]->cpf)) {echo 'disabled';} ?> name="nomeFantasia"/>
            <br><br>
            <input type="text" value="<?php echo $pessoa[0]->site; ?>"
                   <?php if (!is_null($pessoa[0]->cpf)) {echo 'disabled';} ?> name="site"/>
            <br><br>
            <input type="submit" value="Salvar" name="salvar">
        <?php echo form_close(); ?>
    </body>
</html>
