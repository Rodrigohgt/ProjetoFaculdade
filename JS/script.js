function addCarrinho() {
    alert("Produto adicionado ao carrinho");
}

function AddCarrinho(produto, qtd, valor, posicao) {
    localStorage.setItem("produto" + posicao, produto);
    localStorage.setItem("qtd" + posicao, qtd);
    valor = valor * qtd;
    localStorage.setItem("valor" + posicao, valor);
    alert("Produto adicionado ao carrinho!");
}

var total = 0; 
var i = 0;     
var valor = 0; 

for(i=1; i<=99; i++) 
{
    var prod = localStorage.getItem("produto" + i + ""); 
    if(prod != null) 
    {	
        
        document.getElementById("itens").innerHTML += localStorage.getItem("qtd" + i) + " x ";
        document.getElementById("itens").innerHTML += localStorage.getItem("produto" + i);
        document.getElementById("itens").innerHTML += " ";
        document.getElementById("itens").innerHTML += "R$: " + localStorage.getItem("valor" + i) + "<hr>";
        
        
        valor = parseFloat(localStorage.getItem("valor" + i));
        total = (total + valor); 
    }
} 

document.getElementById("total").innerHTML = total.toFixed(2); 
