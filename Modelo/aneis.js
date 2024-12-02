const aneis = [
    {
        name: "Anel Prata Corações",
        price: 150,
        image: "Visao/imagem/AnelPrataCorações.png"
    },
    {
        name: "Anel Prata Cruzadas",
        price: 299.99,
        image: "Visao/imagem/AnelPrataCruzadas.png"
    },
    {
        name: "Anel Prata Diabo",
        price: 190,
        image: "Visao/imagem/AnelPrataDiabo.png"
    },
    {
        name: "Anel Prata Diamantes",
        price: 279.99,
        image: "Visao/imagem/AnelPrataDiamantes.png" 
    },
    {
        name: "Anel Diamante Azul",
        price: 550,
        image: "Visao/imagem/AnelDiamante Azul.png" 
    },
    {
        name: "Anel Chevron",
        price: 400,
        image: "Visao/imagem/AnelChevron.png" 
    },
    {
        name: "Anel Coroa",
        price: 99,99,
        image: "Visao/imagem/AnelCoroa.png" 
    },
    {
        name: "Anel Diamante de Flor",
        price: 450,
        image: "Visao/imagem/AnelDiamanteFlor.png" 
    },
    {
        name: "Anel Diamante",
        price: 280,
        image: "Visao/imagem/AnelDiamante.png" 
    },
     {
        name: "Anel Cruzado",
        price: 579.90,
        image: "Visao/imagem/AnelCruzada.png" 
    },
    {
        name: "Anel Fino",
        price: 99.99,
        image: "Visao/imagem/AnelLinhaFina.png" 
    },
    {
        name: "Anel Minnie",
        price: 199.99,
        image: "Visao/imagem/AnelMinnie.png" 
    }
];
const productList = document.getElementById('product-list');
aneis.forEach(anel => {
    const productDiv = document.createElement('div');
    productDiv.classList.add('produto');

    productDiv.innerHTML = `
        <img src="${anel.image}" alt="${anel.name}">
        <h3>${anel.name}</h3>
        <p><strong>R$${anel.price}</strong></p>
    `;

    productList.appendChild(productDiv);
});
