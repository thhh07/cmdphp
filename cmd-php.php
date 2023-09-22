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

FOR ----------------------
 ESTRUTURA DE REPETIÇÃO MAIS USADA
 SINTAXE MAIS ORGANIZADA

LOOP INFINITO --------------------
 ERRO QUE PODE OCASIONAR QUANDO NÃO TEM CONDIÇÃO DE TÉRMINO
 PODE TRAVAR A MAQUINA
 > EX:
 > for($i = 0: $i < 10; $i--) {
 > echo "teste <br>;
 > }

FOREACH ----------------------------
 ESTRUTURA DE REPETIÇÃO
 E ORIENTADA POR UM ARRAY 

 > EX:
 > foreach($array as $item) {
 > codigo
 > }
 
CONTINUE -------------------
 PULA A EXECUÇÃO
 QUANDO O INTERPRETADOR ENCONTRA ESSA INSTRUÇÃO, A PROXIMA ETAPA DO LOOP 
 E EXECUTADA 
 APLICADO DENTRO DE UMA ESTRUTURA DE CONDIÇÃOES 

INCLUDE -------------------
 IMPORTANTE 
 INSERIMOS UM ARQUIVO DE PHP, OU ATÁ MESMO UM HTML
 ASSIM PODEMOS USAR TUDO QUE FOI DECLARADO NO ARQUIVO
 NÃO DA ERRO FATAL CASO NN EXISTIR O ARQUIVO MAS SIM WARING

 > EX: include "arquivo.ext" 

REQUIRE ---------------------
 UNSERIMOS UM ARQUIVO DE PHP, OU ATÁ ,ES,O UM HTML
 PODE UTILIZAR TUDO QUE ESTA DECLARADO NO ARQUIVO
 GERRA ERRO FATAL SE NÃO EXISTIR O ARQUIVO, PARANDO O SCRIPT 

 >EX: require "arquivo.ext" 

INCLUDE_ONCE REQUIRE_ONCE --------------------
 FUNCIONAM DA MESMA MANEIRA 
 INPEDE QUE O MESMO ARQUIVO SEJA ADICIONADO MAIS DE UMA VEZ NA PÁGINA
 MÉTODO MAIS INDICADO QUANDO ESTAMOS MONTANDO TEMPLATES COM PHP


SHORT TAGS ---------------------------
 ADICIONA CODIGO PHP NA PAGINA 
 DEPENDE DE UMA CONFIG GO SERVIDOR 
 CÓDIGO PODE NÃO FUNCIONAR 

 >EX: <? echo "teste";?>




EXERCÍCIO 29 \\\\\\\\\\\\\\\\\\\
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

EXERCÍCIO 30b \\\\\\\\\\\\\\\\\\
 - CRIAR UM ARRAY DE 1 A 10
 - UTILIZE UM LOOP PARA CRIAR O ARRAY
 - PODE USAR O METODO array_push(arr, elemento) PARA INSERIR ELEMENTOS NO ARRAY 
 - IMPRIMA UM ARRAY COM print_r;

 RESOLUÇÃO:
 > $arr = [];
 > for($i = 1; $i <=10; $i++) {
 > array_push($arr, $i);
 > }
 > print_r($arr);
 
EXERCÍCIO 30c: \\\\\\\\\\\\\\\\\
 - CRIAR ARRAY DE 10 A 20 COM FOR
 - FAÇA UM LOOP EM CIMA DO ARRAY CRIADO DINAMICAMENTE 
 - IMPRIMA APENAS OS NÚMEROS IMPARES 

  RESOLUÇÃO:
 > $arr = [];
 > for($i = 10; $i <=20; $i++) {
 > array_push($arr, $i);
 > }
 > print_r($arr);
 > FOR($i = 0; $i < count($arr); $i++) {
 >   if($arr[$i] % 2 != 0) {
 >    echo "numero ímpar: $arr[$i]" <br>";
 >   }
 > }



 */

?>