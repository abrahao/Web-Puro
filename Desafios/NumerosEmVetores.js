// Faça um Programa que leia cinco números inteiros e 
// armazene-os em um vetor chamado VETOR. Armazene os números pares no 
// vetor PAR e os números ímpares no vetor IMPAR. 

let vetor = [];
let pares = [];
let impares = [];

for(let i = 0; i < 5; i++){
  vetor[i] = gets();
  if(vetor[i] % 2 === 0){
    pares.push(vetor[i]);
  } else {
    impares.push(vetor[i]);
  }
}

  print("Vetor: " + vetor)

  print("Par(es): " + pares)

  print("Impar(es): " + impares)