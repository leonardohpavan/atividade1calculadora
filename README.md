# Calculadora
Repositório referente a atividade 01 que consiste em criar uma Calculadora utilizando as linguagens de PHP e HTML(Básico).

## Perguntas referentes a atividade:
1.	O que é a linguagem PHP e qual o seu principal uso?
É uma linguagem de programação utilizada por programadores e desenvolvedores para construir sites dinâmicos, extensões de integração de aplicações e agilizar no desenvolvimento de um sistema.
2.	É possível criar aplicações desktop com PHP?
Sim. Utilizando principalmente extensões como o PHP-GTK ou frameworks modernos como o NativePHP, que permitem criar aplicativos com interface gráfica e executá-los fora do navegador. O PHP-GTK interage com bibliotecas C para criar interfaces, enquanto o NativePHP, que usa o Electron por baixo dos panos, permite converter aplicações web (como as feitas com Laravel) em aplicativos desktop.
3.	O que é necessário para iniciar o desenvolvimento com essa linguagem?
Conhecimento básico, um computador, a instalação da propria linaguaem e m ambiente de desenvolvimento (IDE ou editor de texto).
4.	Qual a estrutura básica de um documento PHP?
Tags especiais que delimitam o código PHP do restante do conteúdo, como HTML. 
5.	Como declarar variáveis em PHP?
Você usa o sinal de cifrão ($), seguido de um nome que deve começar com uma letra ou sublinhado (_) e não com um número. O valor é atribuído usando o sinal de igual (=). Por exemplo, $nome = "Maria" declara a variável $nome e a define como a string "Maria". 
6.	Qual a sintaxe das seguintes estruturas:
a)	if..else
if(isset($_POST["nome"]) && isset($_POST["idade"]) && isset($_POST["genero"])){
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $genero = $_POST["genero"];
} else {
    unset($nome);
    unset($idade);
    unset($genero);
}
b)	for
<?php
// Exemplo prático: Imprimir números de 0 a 4
for ($i = 0; $i < 5; $i++) {
  echo "O valor de i é: " . $i . "<br>";
}
?>
c)	while
<?php
$contador = 1; // Inicializa a variável contador

while ($contador <= 5) { // Condição: enquanto contador for menor ou igual a 5
  echo $contador . "<br>"; // Imprime o valor atual do contador
  $contador++; // Incrementa o contador em 1 (equivalente a $contador = $contador + 1)
}
?>
7.	Qual a sintaxe para a criação de funções com PHP?
function saudar($nome) {
    return "Olá, " . $nome . "!";
}

echo saudar("Mundo"); // Saída: Olá, Mundo!
8.	Para manipulação de formulários, é possível passar informações do formulário para o PHP através dos métodos GET e POST. Explique o funcionamento de cada um deles.
O método POST, onde os dados enviados não são visíveis nas URLs, ocultando possíveis importantes informações e permitindo o envio de longas informações. O GET é totalmente o contrário disso.
9.	Como escrever mensagens na tela do usuário com PHP?
Pode utilizar os comandos echo ou print.
Exemplo:
ECHO:
<?php
// Exemplo básico
echo "Olá, mundo!";

// Exibindo variáveis e HTML
$usuario = "Visitante";
echo "<h1>Bem-vindo, " . $usuario . "!</h1>";
echo "<p>Esta é uma mensagem de exemplo.</p>";

// Múltiplos parâmetros (sem parênteses)
echo "Parâmetro 1", "Parâmetro 2", "Parâmetro 3";
?>

PRINT
<?php
// Exemplo básico
print "Esta é uma mensagem usando print.";

// Exibindo variáveis
$produto = "Notebook";
print "<p>Você comprou um " . $produto . ".</p>";
?>
10.	Crie um exemplo básico de PHP que escreva “Hello World” na tela.
<?php
echo "Olá, mundo!";
?>
11.	Desenvolva uma calculadora utilizando um formulário em HTML 5 e PHP.
a)	O usuário deve preencher os valores nos campos do formulário, ao clicar em calcular, os valores serão enviados para uma página em PHP que realizará o cálculo e apresentará o resultado na tela.

Ministrado pelo Professor Danilo Arantes.

Senac Rio Claro.
12 de Dezembro de 2025.
