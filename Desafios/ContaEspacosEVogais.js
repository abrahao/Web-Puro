// Jorginho é professor do primário de uma determinada escola. 
// Ele tem 100000 alunos e precisa criar um programa que verifica quantos espaços em branco 
// e quantas vogais existem em uma determinada string de entrada que os alunos entregaram na avaliação final. 
// Ajude-o a realizar essa tarefa antes que o tempo para entrega-la no fim do semestre acabe!

let str = gets(); 
let strSplit = str.toLowerCase().split('');
let brancos;
let vogais;

vogais = strSplit.filter(vetorVogais);
brancos = strSplit.filter(vetorBrancos);

function vetorVogais(str){
  if (str === "a" || str === "e" || str === "i" || str === "o" || str === "u"){
    return true;
  } 
}

function vetorBrancos(str){
  if (str === " "){
    return true;
  }
}

print("Espacos em branco: " + brancos.length + " Vogais: " + vogais.length)