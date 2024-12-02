const braceletes = [
    {
        name: "Bracelete Raizes de Amor",
        price: 130,
        Image:"Visao/imagem/BraceleteRaizesdeAmor.png"
    },
    {
        name: "Bracelete Lua Azul",
        price: 135.90,
        image: "Visao/imagem/BraceleteLuaAzul.png"
    },
    {
        name: "Bracelete Estrela",
        price: 299,
        image: "Visao/imagem/BraceleteEstrela.png"
    },
    {
        name: "Bracelete Mickey",
        price: 300,
        image: "Visao/imagem/BraceleteMickey.png"
    },
    {
        name: "Bracelete Black Iron",
        price: 459.90,
        image: "Visao/imagem/BraceleteBlackIroncomRódioNegro.png"
    },
    {
        name: "Bracelete vermelho",
        price: 309.99,
        image: "Visao/imagem/BraceleteCoracaoVermelho.png"
    },
    {
        name: "Bracelete Sentinela",
        price: 400,
        image: "Visao/imagem/BraceleteCronosSentinela.png"
    },
    {
        name: "Bracelete Esfera",
        price: 99.99,
        image: "Visao/imagem/BraceleteEsferaBrilhante.png"
    },
    {
        name: "Bracelete Cronos",
        price: 300,
        image: "Visao/imagem/BraceleteCronos.png"
    },
    {
        name: "Bracelete Perola",
        price: 350,
        image: "Visao/imagem/BraceltePerola.png"
    },
    {
        name: "Bracelete Raizes",
        price: 400,
        image: "Visao/imagem/BraceleteRaizesdeAmor.png"
    },
    {
        name: "Bracelete Estrela",
        price: 100,
        image: "Visao/imagem/BraceleteEstrela.png"
    },
];
const productList = document.getElementById('product-list');
braceletes.forEach(bracelete => {
    const productDiv = document.createElement('div');
    productDiv.classList.add('produto');

    productDiv.innerHTML = `
        <img src="${bracelete.image}" alt="${bracelete.name}">
        <h3>${bracelete.name}</h3>
        <p><strong>R$${bracelete.price}</strong></p>
    `;

    productList.appendChild(productDiv);
});
