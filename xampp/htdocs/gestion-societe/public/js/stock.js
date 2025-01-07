document.addEventListener('DOMContentLoaded', () => {
    const stockAlertElements = document.querySelectorAll('.stock-alert');

    stockAlertElements.forEach(el => {
        el.addEventListener('click', () => {
            alert('Produit bientôt en rupture !');
        });
    });
});