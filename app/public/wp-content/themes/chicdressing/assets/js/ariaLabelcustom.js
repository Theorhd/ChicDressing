document.addEventListener('DOMContentLoaded', function() {
    var boutonsAjouterAuPanier = document.querySelectorAll('.button.product_type_simple.add_to_cart_button');

    boutonsAjouterAuPanier.forEach(function(bouton) {
        var nouveauLabel = 'Ajouter au panier';

        bouton.setAttribute('aria-label', nouveauLabel);
    });
});