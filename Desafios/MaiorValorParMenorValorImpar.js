// Faça um programa que receba N (quantidade de números) e seus respectivos valores. 
// Imprima o maior número par e o menor número impar. 

const N = gets();
let maiorNumeroPar = null;
let menorNumeroImpar = null;

for (let i = 0; i < N; i++) {
  const numero = parseInt(gets());

  if (numero % 2 === 0) {
    if ( maiorNumeroPar === null || numero > maiorNumeroPar ) {
      maiorNumeroPar = numero;
    }
    
  }else{
    if(menorNumeroImpar === null || numero < menorNumeroImpar){
      menorNumeroImpar = numero;
    }
  }
}
print('Maior número par: ' + maiorNumeroPar);
print('Menor número impar: ' + menorNumeroImpar);