document.addEventListener("DOMContentLoaded", function() {
    const promoBtn = document.querySelector('.promo .btn');
    promoBtn.addEventListener('click', function(e) {
        e.preventDefault();
        alert('Você clicou em "Compre Agora". Redirecionando...');
    });
});
