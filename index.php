<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cadastro do Gerador de Curriculo "Léo alves"</title>
</head>

<body>
<p><strong>Digite os seus dados para gerar o Curriculo:
</strong></p>
<form id="form1" name="form1" method="post" action="curriculo.php">
 
  <table width="714" border="0">
    <tr>
      <td width="104"><strong>Nome:</strong></td>
      <td width="211"><label>
        <input name="nome" type="text" id="nome" size="35" />
      </label></td>
      <td width="101"><strong>Endereço:</strong></td>
      <td width="270"><label>
        <input name="endereco" type="text" id="endereco" size="45" />
      </label></td>
    </tr>
    <tr>
      <td><strong>Numero:</strong></td>
      <td><input name="numero" type="text" id="numero" size="35" /></td>
      <td><strong>Bairro:</strong></td>
      <td><input name="bairro" type="text" id="bairro" size="45" /></td>
    </tr>
    <tr>
      <td><strong>Cidade:</strong></td>
      <td><input name="cidade" type="text" id="cidade" size="35" /></td>
      <td><strong>UF:</strong></td>
      <td><input name="estado" type="text" id="estado" size="45" /></td>
    </tr>
    <tr>
      <td><strong>Cep:</strong></td>
      <td><input name="cep" type="text" id="cep" size="35" /></td>
      <td><strong>Tel.:</strong></td>
      <td><input name="fone" type="text" id="fone" size="45" /></td>
    </tr>
    <tr>
      <td><strong>Celular:</strong></td>
      <td><input name="cel" type="text" id="cel" size="35" /></td>
      <td><strong>E-mail:</strong></td>
      <td><input name="email" type="text" id="email" size="45" /></td>
    </tr>
    <tr>
      <td><strong>Nacionalidade:</strong></td>
      <td><input name="nacionalidade" type="text" id="nacionalidade" size="35" /></td>
      <td><strong>Naturalidade:</strong></td>
      <td><input name="naturalidade" type="text" id="naturalidade" size="45" /></td>
    </tr>
    <tr>
      <td><strong>Sexo:</strong></td>
      <td><input name="sexo" type="text" id="sexo" size="35" /></td>
      <td><strong>Estado Civil:</strong></td>
      <td><input name="estado_civil" type="text" id="estado_civil" size="45" /></td>
    </tr>
    <tr>
      <td><strong>Idade:</strong></td>
      <td colspan="3"><input name="idade" type="text" id="idade" size="35" /></td>
    </tr>
  </table><hr />
  <p><strong>Agora Preencha os campos referentes a sua Formação Acadêmica:</strong> </p>
  <table width="698" border="1">
    <tr>
      <td width="75"><strong>Instituição:</strong></td>
      <td width="210"><input name="escola" type="text" id="escola" size="35" /></td>
      <td width="62"><strong>Cidade:</strong></td>
      <td width="234"><input name="cidade_escola" type="text" id="cidade_escola" size="35" /></td>
      <td width="30"><strong>UF:</strong></td>
      <td width="47"><input name="estado_escola" type="text" id="estado_escola" size="9" /></td>
    </tr>
    <tr>
      <td><strong>Período:</strong></td>
      <td><input name="periodo" type="text" id="periodo" size="35" /></td>
      <td><strong>Situação:</strong></td>
      <td colspan="3"><input name="escola_situacao" type="text" id="escola_situacao" size="35" /></td>
    </tr>
  </table>
<h3>Cursos: </h3>
<table width="696" border="1">
  <tr>
    <td width="75"><strong>Instituição:</strong></td>
    <td width="262"><input name="escola_curso1" type="text" id="escola_curso1" size="35" /></td>
    <td width="74"><strong>Descrição:</strong></td>
    <td width="267"><input name="curso1" type="text" id="curso1" size="35" /></td>
  </tr>
  <tr>
    <td><strong>Instituição:</strong></td>
    <td><input name="escola_curso2" type="text" id="escola_curso2" size="35" /></td>
    <td><strong>Descrição:</strong></td>
    <td><input name="curso2" type="text" id="curso2" size="35" /></td>
  </tr>
  <tr>
    <td><strong>Instituição:</strong></td>
    <td><input name="escola_curso3" type="text" id="escola_curso3" size="35" /></td>
    <td><strong>Descrição:</strong></td>
    <td><input name="curso3" type="text" id="curso3" size="35" /></td>
  </tr>
</table>
<p><strong><em>Digite as três ultimas empresas que você trabalhou, nos campos que nao for preencher digite apenas o sinal &quot; -&quot;  .</em></strong></p>
<table width="714" border="1">
  <tr>
    <td width="60"><strong>Enpresa:</strong></td>
    <td width="210"><label>
      <input name="empresa1" type="text" id="empresa1" size="35" />
    </label></td>
    <td width="64"><strong>Telefone:</strong></td>
    <td width="144"><label>
      <input type="text" name="fone_empresa1" id="fone_empresa1" />
    </label></td>
    <td width="56"><strong>Período:</strong></td>
    <td width="144"><label>
      <input type="text" name="periodo_empresa1" id="periodo_empresa1" />
    </label></td>
  </tr>
  <tr>
    <td><strong>Cargo:</strong></td>
    <td colspan="5"><input name="cargo1" type="text" id="cargo1" size="45" /></td>
  </tr>
  <tr>
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Enpresa:</strong></td>
    <td><input name="empresa2" type="text" id="empresa2" size="35" /></td>
    <td><strong>Telefone:</strong></td>
    <td><label>
      <input type="text" name="fone_empresa2" id="fone_empresa2" />
    </label></td>
    <td><strong>Período:</strong></td>
    <td><label>
      <input type="text" name="periodo_empresa2" id="periodo_empresa2" />
    </label></td>
  </tr>
  <tr>
    <td><strong>Cargo:</strong></td>
    <td colspan="5"><label>
      <input name="cargo2" type="text" id="cargo2" size="45" />
    </label></td>
  </tr>
  <tr>
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Enpresa:</strong></td>
    <td><label>
      <input name="empresa3" type="text" id="empresa3" size="35" />
    </label></td>
    <td><strong>Telefone:</strong></td>
    <td><label>
      <input type="text" name="fone_empresa3" id="fone_empresa3" />
    </label></td>
    <td><strong>Período:</strong></td>
    <td><label>
      <input type="text" name="periodo_empresa3" id="periodo_empresa3" />
    </label></td>
  </tr>
  <tr>
    <td><strong>Cargo:</strong></td>
    <td colspan="5"><input name="cargo3" type="text" id="cargo3" size="45" /></td>
  </tr>
  <tr>
    <td colspan="6">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<hr border="2" color="#000066" />
<h3><strong>Qualificações:</strong></h3>
<p>
  <label>
    <textarea name="qualificacao" id="qualificacao" cols="65" rows="9"></textarea>
  </label>
</p>
<p>
  <label>
    <input type="submit" name="button" id="button" value="Gerar Curriculo" />
  </label>
</p>
</form>
</body>
</html>