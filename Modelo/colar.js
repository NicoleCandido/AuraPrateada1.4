const colares = [
    {
        name: "Colar Lua Arvore",
        price: 255.90,
        Image: "Visao/imagem/ColarLuaArvoredaVida.png" 
    },
    {
        name:"Corrente Mini",
        price: 100,
        image: "Visao/imagem/ColarMiniCoracoes.png"
    },
    {
        name: "Colar Prata",
        price: 250,
        image: "Visao/imagem/ColarPrataDoisCoracoes.png"
    },
    {
        name: "Colar Prata Pigente",
        price: 279.99,
        image: "Visao/imagem/ColarPrataPingente.png"
    },
    {
        name: "Colar Pendente",
        price: 300,
        image: "isao/imagem/Colar Com Pendente Circulo E Aglomerado Riqueza Botanica Brilhante .png"
    },
    {
        name: "Colar Vermelho",
        price: 550,
        image: "Visao/imagem/Colar de Prata Coração Vermelho Brilhante .png"
    },
    {
        name: "Colar Circular",
        price: 279.99,
        image: "Visao/imagem/Colar de Prata Círculo Logo e Pavé .png"
    },
    {
        name: "Colar Prata Pendente",
        price: 229.99,
        image: "Visao/imagem/colar de prata pendente.png"
    }
];
const productList = document.getElementById('product-list');
colares.forEach(colares => {
    const productDiv = document.createElement('div');
    productDiv.classList.add('produto');

    productDiv.innerHTML = `
        <img src="${colares.image}" alt="${colares.name}">
        <h3>${colares.name}</h3>
        <p><strong>R$${colares.price}</strong></p>
    `;

    productList.appendChild(productDiv);
});
