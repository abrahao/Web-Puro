// O gerente de uma loja resolveu aplicar descontos 
// em todos os seus produtos! A tarefa é calcular a 
// Porcentagem de Desconto aplicada a esses produtos. 

let M, S; 

M = parseInt(gets()); 

S = parseInt(gets()); 

const desconto =  (M-S)/M*100;

print("O desconto foi de " + desconto + "%");