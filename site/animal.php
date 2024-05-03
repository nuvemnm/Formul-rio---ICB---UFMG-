<?php

		$login = $_SERVER ['Shib-Person-UID'];
		$mail = $_SERVER ['Shib-Person-Mail'];
		$nome = $_SERVER ['Shib-Person-CommonName'];
		$cpf = $_SERVER ['Shib-brPerson-CPF'];
		$unidade = $_SERVER ['Shib-EP-OrgUnitDN'];
		$departamento = $_SERVER ['Shib-EP-OrgUnitDN'];

		//variaveis de unidade
		$virgula = strrpos($unidade, ',');
		$igual = strrpos($unidade, '=', $virgula - strlen($unidade));
		$substring = substr($unidade, $igual + 1, $virgula - $igual - 1);
		
		//variaveis de departamento

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.icb.ufmg.br/novoportal/images/favicon.ico">
    <title>Requisição de Animais</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="animal.js" defer></script>
    <link rel="stylesheet" href="animal.css">
</head>
<body>
    <div class= "container" id="container">
        <div class="header" id="header">
            <a href="https://ufmg.br/">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Logo_UFMG.png" heght="120" width="160" alt="ufmg">
            </a>
            <h1>ICB - Instituto de Ciências Biológicas</h1>
        </div>
        <form method = "get" id="form">
            <fieldset class="campo1">
                <div class="requisicao" id="requisicao">
                    <h2 class="title">Requisição de Animais-CEBIO</h2>
                    <div class="radiobox">
                        <div class="especie">
                            <div class="spann">
                                <strong>Espécie:</strong>
                            </div>
                            <div class="cato">
                                <div class="rato">
                                    <input type="radio" name="especie" id="rato" >
                                    <label for="rato">Rato</label>
                                </div>
                                <div class="camundongo">
                                    <input type="radio" name="especie" id="camundongo" >
                                    <label for="camundongo">Camundongo</label>
                                </div>
                            </div>
                        </div>
                        <div class="sexo">
                            <div class="spann">
                                <strong>Sexo:</strong>
                            </div>
                            <div class="fecho">
                                <div class="femea">                                    
                                    <input type="radio" name="sexo" id="femea" >
                                    <label for="femea">Fêmea</label>
                                </div>
                                <div class="macho">
                                    <input type="radio" name="sexo" id="macho" >
                                    <label for="macho">Macho</label>
                                </div>
                            </div>
                        </div>
                        <div class="linhagem">
                            <div class="spann">
                                <strong>Linhagem:</strong>
                            </div>
                            <div class="tipagem">
                                <div class="swiss">
                                    <input type="radio" name="tipagem" id="swiss" >
                                    <label for="swiss">SWISS</label>
                                </div>
                                <div class="balbc">
                                    <input type="radio" name="tipagem" id="balbc" >
                                    <label for="balbc">BALB/C</label>
                                </div>
                                <div class="c57bl6j">
                                    <input type="radio" name="tipagem" id="c57bl6j" >
                                    <label for="c57bl6j">C57BL6J</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="textbox">
                        <div class="fields">
                            <div class="numero">
                                <label for="quantidade">Quantidade</label>
                                <input type="text" name="quantidade" id="quantidade" pattern="[0-9]*" placeholder="Quantidade(unid)" >
                            </div>
                            <div class="numero">
                                <label for="idade">Idade</label>
                                <input type="text" name="idade" id="idade" pattern="[0-9]*" placeholder="Idade(semanas)" >
                            </div>
                            <div class="numero">
                                <label for="peso">Peso</label>
                                <input type="text" name="peso" id="peso" pattern="[0-9]*" placeholder="Peso(g)" >
                            </div>
                        </div>
                        <div class="pessoa">
                            <label for="requerente">Requerente</label>
                            <input type="text" name="requerente" id="requerente" placeholder="Requerente" value="<?php 
		                            print $_SERVER ['Shib-Person-CommonName']; 
                            ?>">
                            <label for="orientador">Orientador</label>
                            <input type="text" name="orientador" id="orientador" placeholder="Orientador" >
                        </div>
                        <div class="fields2">
                            <div class="ramade">
                                <label for="ramal">Ramal</label>
                                <input type="text" name="ramal" id="ramal" placeholder="Ramal" >
                            </div>
                            <div class="ramade2">
                                <label for="unidade">Unidade</label>
                                <input type="text" name="unidade" id="unidade" placeholder="Unidade" value="<?
                                	print $substring;
                                ?>
                                ">
                            </div>
                        </div>
                        <div class="departamento">
                            <label for="departamento">Departamento</label>
                            <input type="text" name="departamento" id="departamento" placeholder="Departamento" value="<?
                         
                            ?>" >
                        </div>
                        <div class="rodape">
                            <div class="assiantura">
                                <span>Assinatura do Orientador: </span>   
                            </div>
                            <div class="data">
                                <label for="data">Data</label>
                                <input type="text" name="data" id="data" placeholder="Data">
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <hr class="linha">
            <fieldset class="campo2" id="campo2">
                <div class="protocolo" id="protocolo">
                    <h2 class="title">Protocolo de Requisição de Animais-CEBIO</h2>
                    <div class="radiobox">
                        <div class="especie">
                            <div class="spann">
                                <strong>Espécie:</strong>
                            </div>
                            <div class="cato">
                                <div class="rato">
                                    <input type="radio" class="radioinput" name="especie2" id="rato2" >
                                    <label class="radiolabel" for="rato2">Rato</label>
                                </div>
                                <div class="camundongo">
                                    <input type="radio" class="radioinput" name="especie2" id="camundongo2" >
                                    <label class="radiolabel" for="camundongo2">Camundongo</label>
                                </div>
                            </div>
                        </div>
                        <div class="sexo">
                            <div class="spann">
                                <strong>Sexo:</strong>
                            </div>
                            <div class="fecho">
                                <div class="femea">
                                    <input type="radio" name="sexo2" id="femea2" >
                                    <label for="femea2">Fêmea</label>
                                </div>
                                <div class="macho">
                                    <input type="radio" name="sexo2" id="macho2" >
                                    <label for="macho2">Macho</label>
                                </div>
                            </div>
                        </div>
                        <div class="linhagem">
                            <div class="spann">
                                <strong>Linhagem:</strong>
                            </div>
                            <div class="tipagem">
                                <div class="swiss">
                                    <input type="radio" name="tipagem02" id="swiss2" >
                                    <label for="swiss2">SWISS</label>
                                </div>
                                <div class="balbc">
                                    <input type="radio" name="tipagem02" id="balbc2" >
                                    <label for="balbc2">BALB/C</label>
                                </div>
                                <div class="c57bl6j">
                                    <input type="radio" name="tipagem02" id="c57bl6j2" >
                                    <label for="c57bl6j2">C57BL6J</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="textbox">
                        <div class="fields">
                            <div class="numero">
                                <label for="quantidade">Quantidade</label>
                                <input type="text" name="quantidade" id="quantidade2">
                            </div>
                            <div class="numero">
                                <label for="idade">Idade</label>
                                <input type="text" name="idade" id="idade2">
                            </div>
                            <div class="numero">
                                <label for="peso">Peso</label>
                                <input type="text" name="peso" id="peso2">
                            </div>
                        </div>
                        <div class="rodape">
                            <div class="assiantura">
                                <span>Assinatura CEBIO:</span>
                            </div>
                            <div class="data">
                                <label for="data">Data</label>
                                <input type="text" name="data" id="data" >
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <button onclick="gerapdf()" class="button type1" id="pdf">
                <span class="btn-txt">Salvar Formulário</span>
            </button>
        </form>
    </div>
</body>
</html> 