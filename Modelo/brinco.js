const brinco = [
    {
        name: "Brinco Ancora",
        price: 189.99,
        Image: "Visao/imagem/BrincoAncoraCoração.png"
    },
    {
        name:"Brinco Cascata",
        price: 135.90,
        image: "Visao/imagem/BrincoCascata.png" 
    },
    {
        name: "Brinco Dragao",
        price: 300,
        image:"Visao/imagem/BrincoDragao.png"
    },
    {
        name: "Brinco Prata",
        price: 130,
        image: "Visao/imagem/BrincoPrataBasico.png" 
    },
    {
        name: "Brinco Coracao",
        price: 299.99,
        image: "Visao/imagem/BrincoArgolaCoracao.png" 
    },
    {
        name: "Brinco Argola",
        price: 300,
        image: "Visao/imagem/BrincoArgolaRosa.png" 
    },
    {
        name: "Brinco Mickey",
        price: 499.99,
        image: "Visao/imagem/BrincoMickey.png" 
    },
    {
        name: "Brinco Laço",
        price: 80,
        image: "Visao/imagem/Brincolaço.png" 
    }
];
const productList = document.getElementById('product-list');
brinco.forEach(Brincos => {
    const productDiv = document.createElement('div');
    productDiv.classList.add('produto');

    productDiv.innerHTML = `
        <img src="${brinco.image}" alt="${brinco.name}">
        <h3>${brinco.name}</h3>
        <p><strong>R$${brinco.price}</strong></p>
    `;

    productList.appendChild(productDiv);
});
