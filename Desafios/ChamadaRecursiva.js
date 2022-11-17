// Neste desafio, receba um número inteiro N, calcule e imprima o somatório de todos os números de N até 0.  

let n = parseInt();

//TODO: Implemente um método que calcule o somatório de um número usando recursividade:

function somatorio(n){
  var soma = 0
  for (var i = 1; i <= n; i++) {
    soma += i;
  }
  return soma;
}
print(soma + "\n");