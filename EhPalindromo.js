// Neste desafio você deverá construir uma função que recebe uma String e identifique se a 
// mesma é um palíndromo, ou seja, se a String é igual a ela mesma invertida. 
// Dado que temos a String "digital" uma vez invertida temos "latigid" que são diferentes. 
// Logo, NÃO é um Palíndromo. 
// Já se recebemos a string "radar" uma vez invertida temos "radar" que são iguais.

let resultado = gets();
print(checaPalindromo(resultado));

function checaPalindromo(entrada){
  const caracter = entrada.split('').reverse().join('')
  if(entrada === caracter){
    return "TRUE"
  } else {
    return "FALSE" 
  }
}