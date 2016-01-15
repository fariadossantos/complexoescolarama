<h3 class="">INSCREVA-SE</h3>
<form name="forminscricao" action="" method="post" class="forminscricao" enctype="multipart/form-data">
<fieldset>
    <legend>DADOS PESSOAIS E ACADÉMICOS</legend>
    <label>
        <span class="campo">Nome Completo:</span>
        <input type="text" name="nome" />
    </label>

    <label>
        <span class="campo">Natural de :</span>
        <select class="" name="provincia">
          <option value="" disabled="disable" selected="selected">Seleciona a provincia</option>
          <?php
                $resultado = selecionadados('tbl_provincias', 'order by (prov_codigo) asc');

                while($registos = mysql_fetch_array($resultado)){
          ?>
              <option value="<?php echo $registos['prov_nome']  ?>"><?php echo $registos['prov_nome']  ?></option>
          <?php } ?>
        </select><br><br>
        <input type="text" name="sobrenome" placeholder="Complemento: Bairro XXXXX e Municipio de XXXXXX" />
    </label>
    <label>
        <span class="campo">Data de Nascimento:</span>
        <input type="date" name="datadenascimento"/>
    </label>

    <label>
        <span class="campo">Residência:</span>
        <input type="text" name="residencia" placeholder="Ex: Bairro Benfica Rua nº casa nº" />
    </label>
    <label>
        <span class="campo">Contactos:</span>
        <input type="tel" name="telemovel" placeholder="Telemóvel: 923 XXX XXX" /><br><br>
        <input type="email" name="email" placeholder="E-mail: user@dominio.com" />
    </label>
    <label>
        <span class="campo">Pai:</span>
        <input type="text" name="pai" placeholder="Nome do pai" /><br><br>
        <input type="tel" name="telpai" placeholder="Telemovel do pai" />
    </label>
    <label>
        <span class="campo">Mãe:</span>
        <input type="text" name="mae"  placeholder="Nome da mãe"/> <br><br>

        <input type="tel" name="telmae" placeholder="Telemovel da mãe"/>
    </label>
    <label>
        <span class="campo">Encarregado de Educação:</span>
        <input type="text" name="mae"  placeholder="Nome do encarregado"/> <br><br>
        <input type="text" name="residenciaencarregado"  placeholder="Residência do encarregado"/> <br><br>
        <input type="tel" name="telmae" placeholder="Telemovel do encarregado"/>
    </label>
</fieldset>
<fieldset>
    <legend>DOCUMENTAÇÃO</legend>
    <label>
        <span class="campo">BI:</span>
        <input type="file" name="bi" />
    </label>

    <label>
        <span class="campo">Certificado:</span>
        <input type="file" name="certificadoescolar" />
    </label>

    <label>
        <span class="campo">Atestado Médico:</span>
        <input type="file" name="atestadomedico" />
    </label>

    <label>
        <span class="campo">Certificado de Vacina:</span>
        <input type="file" name="ceritifcadovacina" />
    </label>
</fieldset>
    <span class="submitload"></span>
    <input type="hidden" name="acao" value="inscrever">
    <input type="submit" value="Enviar" class="btnedit j_buttom_edit" />
    <input type="reset" value="Fechar" class="btnclose j_buttom_close" />
</form>
