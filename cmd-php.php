<?php 
/*
COMANDOS PHP

VARIÁVEIS----------------------------------------
 INICIAM COM "$"
 VARIÁVEL PODE SER IMPRESSA NA TELA ATRAVEZ DO "ECHO"  DENTRO DE ASPAS DUPLAS

FLOATS-------------------------------------------
 CASAS DECIMAIS
 >EX:
 >is_float() = testar se dado inserido e float

STRINGS-----------------------------------------
 TEXTOS 
 TEXTOS SÃO INSERIDOS EM ASPAS SIMPLES OU DUPLAS

BOOLEANOS---------------------------------------
 VERDADEIRO - TRUE
 FALSO - FALSE

ARRAYS 
 CONJUNTO DE LISTAS-----------------------------
 ARRAY COM VÁRIOS ITENS 
 >EX:
 >$itens = ["teto solar", "Motor", "Porta];

OPERADORES PHP--------------------------------
 ( == ) IGUAL
 ( != ) DIFERENTE
 ( === ) IDÊNTICO
 ( !== ) NÃO IDÊNTICO 
 ( > ) MAIOR 
 ( < ) MENOR 
 ( <= ) MENOR OU IGUAL
 ( ? ) OPERADOR TERNÁRIO

OPRADORES LÓGICOS--------------------------- 
 ( && ) CHECA AS DUAS OPERAÇÕES AO MESMO TEMPO / AS DUAS  TEM Q SER VERDADEIRAS >OPERADOR AND
 ( || ) CHECA AS OPERAÇÕES AO MESMO TEMPO JÁ BASTA UMA  OPERAÇÃO SER VERDADEIRA > OPERADOR OR
 -APENAS UM LADO PRECISA FUNCIONAR
 ( ! ) RETORNA O CONTRÁRIO DO RESULTADO DA OPERAÇÃO

OPERADORES DE CONVERSÃO

OPERADOR TERNÁRIO--------------------------
 >EX:
 >echo 20 > 10 ? "Deu true <br>" : "Deu false";
 >resultado = Deu true

ESTRUTURA IF-------------------------------
 CHECA SE A EXPRESSÃO E VERDADEIRA
 >EX:
 > if(5 > 2){
 >deu certo
 >}
 >resultado = deu certo

SWITCH-----------------------------------
 PODEMOS ADICIONAR A INSTRUÇÃO BREAK, PARA NÃO 
 SER MAIS EXECUTADO

IF/ ELSE --------------------------------
 executado um de cada vez
 >EX:
 >if("teste" === 5) {
 >echo "entrou no if";
 >} else { echo "entrou no else";
 >}
 >resultado = 


~~~~~~~~~~~~~~
 > EX: IRA IMPRIMIR NA TELA "DIFERENTE"
 > POIS AS VARIÁVEIS NN SÃO IGUAIS 
 > ( != ) DIFERENTE 

 > $a = 8;
 > $b = 5; 
 >  if($a != $b){
 >      echo "diferente<br>";
 >    }
~~~~~~~~~~~~~~~~
BREAK ----------------------------
 PULAR CASES 
 SAIR DO LOOP 
 >EX:
 >$x = 0;
 >while($x < 0){
 >echo "O X é $x <br>";
 > if($x === 5){
 >   echo"termenando o loop <br>";
 >   break;
 >   } 
 >   $x++;
 > }
 > echo "saiu do loop"


ESTRUTURAS DE REPETIÇÃO ----------------
 ( WHILE ) = ESTRUTURA DE REPETIÇÃO
 GERALMENTE NECESSÁRIO UM CONTADOR PARA ATINGIR A CONDIÇÃO 
 
 >EX:  while(condicao){
 > codigo 
 > }

 >EX: 
 > $x = 0;
 > while($x < 10){
 >   echo $x . "<br>";
 > $x = $x + 1;
 > }

DO WHILE -----------------------
 ESTRUTURAS DE REPETIÇÃO 
 ESTRUTURA INVERTIDA
 
 > EX:
 > do {
 > codigo
 > } whilre(condicao);
 
 CONTINUE -------------------
 PULA A EXECUÇÃO
 QUANDO O INTERPRETADOR ENCONTRA ESSA INSTRUÇÃO, A PROXIMA ETAPA DO LOOP 
 E EXECUTADA 
 APLICADO DENTRO DE UMA ESTRUTURA DE CONDIÇÃOES 

EXERCÍCIO 29
 - CRIAR UM ARRAY COM VALORES DE 10 A 100, COM INCREMENTO DE 10
 - APLICAR UM LOOP NO ARRAY 
 - QUANDO CHEGAR NOS VALORES 20 OU 40 PULAR PARA A PRÓXIMA EXECUÇÃO 

 RESOLUÇÃO: 
 > $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
 > $i = 0;
 > $numeroatual = $arr[$i];
 > wile($i < count($arr)){
 > if($numeroatual == 30 || $numeroatual == 40) {
 > $i++;
 > continue;
 > }
 > echo "elementos $numeroatual <br>";
 > $i++;
 > }

*/

?>