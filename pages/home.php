<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MonShop - Boutique en ligne</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <style>
        /* Reset et styles de base */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    line-height: 1.6;
    color: #333;
    background-color: #f9f9f9;
}

a {
    text-decoration: none;
    color: inherit;
}

ul {
    list-style: none;
}

img {
    max-width: 100%;
    height: auto;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
}

.btn {
    display: inline-block;
    padding: 12px 24px;
    background-color: #ff6b6b;
    color: white;
    border-radius: 4px;
    font-weight: 600;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
}

.btn:hover {
    background-color: #ff5252;
    transform: translateY(-2px);
}

.btn-small {
    padding: 8px 16px;
    font-size: 0.9rem;
}

/* Barre de navigation */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 0;
    background-color: white;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 0;
    z-index: 1000;
}

.logo a {
    font-size: 1.8rem;
    font-weight: 700;
    color: #333;
}

.nav-links {
    display: flex;
    gap: 30px;
}

.nav-links a {
    font-weight: 500;
    transition: color 0.3s ease;
}

.nav-links a:hover {
    color: #ff6b6b;
}

.nav-icons {
    display: flex;
    gap: 20px;
    font-size: 1.2rem;
}

.nav-icons a {
    transition: color 0.3s ease;
}

.nav-icons a:hover {
    color: #ff6b6b;
}

.burger {
    display: none;
    font-size: 1.5rem;
    cursor: pointer;
}

/* Bannière principale */
.hero {
    height: 500px;
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://via.placeholder.com/1920x1080');
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    color: white;
    text-align: center;
    margin-bottom: 50px;
}

.hero-content {
    width: 100%;
    padding: 0 20px;
}

.hero h1 {
    font-size: 3rem;
    margin-bottom: 20px;
}

.hero p {
    font-size: 1.2rem;
    margin-bottom: 30px;
}

/* Catégories */
.categories {
    padding: 60px 0;
    text-align: center;
}

.categories h2 {
    font-size: 2rem;
    margin-bottom: 40px;
    position: relative;
    display: inline-block;
}

.categories h2::after {
    content: '';
    position: absolute;
    width: 50%;
    height: 3px;
    background-color: #ff6b6b;
    bottom: -10px;
    left: 25%;
}

.category-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin-top: 30px;
}

.category-card {
    background-color: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    padding: 20px;
    text-align: center;
}

.category-card:hover {
    transform: translateY(-10px);
}

.category-card img {
    border-radius: 4px;
    margin-bottom: 15px;
}

.category-card h3 {
    margin-bottom: 15px;
    font-size: 1.3rem;
}

/* Produits populaires */
.featured-products {
    padding: 60px 0;
    background-color: #f1f1f1;
    text-align: center;
}

.featured-products h2 {
    font-size: 2rem;
    margin-bottom: 40px;
    position: relative;
    display: inline-block;
}

.featured-products h2::after {
    content: '';
    position: absolute;
    width: 50%;
    height: 3px;
    background-color: #ff6b6b;
    bottom: -10px;
    left: 25%;
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin: 40px 0;
}

.product-card {
    background-color: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    padding: 20px;
    position: relative;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
}

.product-badge {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: #ff6b6b;
    color: white;
    padding: 5px 10px;
    border-radius: 4px;
    font-size: 0.8rem;
    font-weight: bold;
}

.product-card img {
    width: 100%;
    height: 200px;
    object-fit: contain;
    margin-bottom: 15px;
}

.product-card h3 {
    font-size: 1.1rem;
    margin-bottom: 10px;
}

.product-price {
    margin-bottom: 10px;
}

.current-price {
    font-size: 1.2rem;
    font-weight: bold;
    color: #ff6b6b;
}

.old-price {
    font-size: 0.9rem;
    text-decoration: line-through;
    color: #999;
    margin-left: 8px;
}

.product-rating {
    color: #ffc107;
    margin-bottom: 15px;
}

.btn-add-to-cart {
    width: 100%;
    padding: 10px;
    background-color: #333;
    color: white;
    border: none;
    border-radius: 4px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-add-to-cart:hover {
    background-color: #ff6b6b;
}

.view-all {
    margin-top: 30px;
}

/* Bannière promotionnelle */
.promo-banner {
    height: 300px;
    background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://via.placeholder.com/1920x600');
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    color: white;
    text-align: center;
    margin: 50px 0;
}

.promo-content {
    width: 100%;
    padding: 0 20px;
}

.promo-banner h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.promo-banner p {
    font-size: 1.2rem;
    margin-bottom: 30px;
}

/* Témoignages */
.testimonials {
    padding: 60px 0;
    text-align: center;
}

.testimonials h2 {
    font-size: 2rem;
    margin-bottom: 40px;
    position: relative;
    display: inline-block;
}

.testimonials h2::after {
    content: '';
    position: absolute;
    width: 50%;
    height: 3px;
    background-color: #ff6b6b;
    bottom: -10px;
    left: 25%;
}

.testimonial-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.testimonial-card {
    background-color: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.testimonial-rating {
    color: #ffc107;
    margin-bottom: 20px;
}

.testimonial-card p {
    font-style: italic;
    margin-bottom: 20px;
}

.testimonial-author {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
}

.testimonial-author img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
}

.testimonial-author span {
    font-weight: 600;
}

/* Newsletter */
.newsletter {
    padding: 60px 0;
    background-color: #333;
    color: white;
    text-align: center;
}

.newsletter h2 {
    font-size: 2rem;
    margin-bottom: 20px;
}

.newsletter p {
    margin-bottom: 30px;
    font-size: 1.1rem;
}

.newsletter form {
    display: flex;
    max-width: 500px;
    margin: 0 auto;
}

.newsletter input {
    flex: 1;
    padding: 12px 20px;
    border: none;
    border-radius: 4px 0 0 4px;
    font-size: 1rem;
}

.newsletter button {
    border-radius: 0 4px 4px 0;
}

/* Pied de page */
footer {
    background-color: #222;
    color: #ddd;
    padding: 60px 0 0;
}

.footer-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 40px;
    margin-bottom: 40px;
}

.footer-section h3 {
    font-size: 1.3rem;
    margin-bottom: 20px;
    color: white;
}

.footer-section p {
    margin-bottom: 20px;
}

.footer-section ul li {
    margin-bottom: 10px;
}

.footer-section ul li i {
    margin-right: 10px;
    color: #ff6b6b;
}

.social-icons {
    display: flex;
    gap: 15px;
    margin-top: 20px;
}

.social-icons a {
    font-size: 1.2rem;
    transition: color 0.3s ease;
}

.social-icons a:hover {
    color: #ff6b6b;
}

.footer-bottom {
    text-align: center;
    padding: 20px 0;
    border-top: 1px solid #444;
}

/* Responsive */
@media (max-width: 992px) {
    .nav-links {
        gap: 15px;
    }
}

@media (max-width: 768px) {
    .burger {
        display: block;
    }
    
    .nav-links {
        position: fixed;
        top: 80px;
        left: -100%;
        width: 100%;
        height: calc(100vh - 80px);
        background-color: white;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 30px;
        transition: left 0.3s ease;
    }
    
    .nav-links.active {
        left: 0;
    }
    
    .hero h1 {
        font-size: 2.5rem;
    }
    
    .promo-banner h2 {
        font-size: 2rem;
    }
}

@media (max-width: 576px) {
    .hero {
        height: 400px;
    }
    
    .hero h1 {
        font-size: 2rem;
    }
    
    .hero p {
        font-size: 1rem;
    }
    
    .newsletter form {
        flex-direction: column;
    }
    
    .newsletter input {
        border-radius: 4px;
        margin-bottom: 10px;
    }
    
    .newsletter button {
        border-radius: 4px;
        width: 100%;
    }
}
    </style>
    <!-- Barre de navigation -->
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="index.html">MonShop</a>
            </div>
            <ul class="nav-links">
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Produits</a></li>
                <li><a href="#">Nouveautés</a></li>
                <li><a href="#">Promotions</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="nav-icons">
                <a href="#"><i class="fas fa-search"></i></a>
                <a href="#"><i class="fas fa-user"></i></a>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>
            </div>
            <div class="burger">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
    </header>

    <!-- Bannière principale -->
    <section class="hero">
        <div class="hero-content">
            <h1>Collection Printemps 2023</h1>
            <p>Découvrez nos nouveaux produits avec des remises exceptionnelles</p>
            <a href="#" class="btn">Voir la collection</a>
        </div>
    </section>

    <!-- Catégories -->
    <section class="categories">
        <h2>Nos Catégories</h2>
        <div class="category-grid">
            <div class="category-card">
                <img src="https://via.placeholder.com/300x200" alt="Vêtements">
                <h3>Vêtements</h3>
                <a href="#" class="btn-small">Explorer</a>
            </div>
            <div class="category-card">
                <img src="https://via.placeholder.com/300x200" alt="Électronique">
                <h3>Électronique</h3>
                <a href="#" class="btn-small">Explorer</a>
            </div>
            <div class="category-card">
                <img src="https://via.placeholder.com/300x200" alt="Maison">
                <h3>Maison & Jardin</h3>
                <a href="#" class="btn-small">Explorer</a>
            </div>
            <div class="category-card">
                <img src="https://via.placeholder.com/300x200" alt="Sports">
                <h3>Sports & Loisirs</h3>
                <a href="#" class="btn-small">Explorer</a>
            </div>
        </div>
    </section>

    <!-- Produits populaires -->
    <section class="featured-products">
        <h2>Produits Populaires</h2>
        <div class="product-grid">
            <div class="product-card">
                <div class="product-badge">Nouveau</div>
                <img src="https://via.placeholder.com/250x250" alt="Produit 1">
                <h3>Nom du Produit</h3>
                <div class="product-price">
                    <span class="current-price">49,99 €</span>
                    <span class="old-price">59,99 €</span>
                </div>
                <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <button class="btn-add-to-cart">Ajouter au panier</button>
            </div>
            <div class="product-card">
                <div class="product-badge">Promo</div>
                <img src="https://via.placeholder.com/250x250" alt="Produit 2">
                <h3>Nom du Produit</h3>
                <div class="product-price">
                    <span class="current-price">39,99 €</span>
                    <span class="old-price">49,99 €</span>
                </div>
                <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <button class="btn-add-to-cart">Ajouter au panier</button>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/250x250" alt="Produit 3">
                <h3>Nom du Produit</h3>
                <div class="product-price">
                    <span class="current-price">29,99 €</span>
                </div>
                <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <button class="btn-add-to-cart">Ajouter au panier</button>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/250x250" alt="Produit 4">
                <h3>Nom du Produit</h3>
                <div class="product-price">
                    <span class="current-price">79,99 €</span>
                </div>
                <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <button class="btn-add-to-cart">Ajouter au panier</button>
            </div>
        </div>
        <div class="view-all">
            <a href="#" class="btn">Voir tous les produits</a>
        </div>
    </section>

    <!-- Bannière promotionnelle -->
    <section class="promo-banner">
        <div class="promo-content">
            <h2>Soldes d'été - Jusqu'à 50% de réduction</h2>
            <p>Profitez de nos offres spéciales pour une durée limitée</p>
            <a href="#" class="btn">Acheter maintenant</a>
        </div>
    </section>

    <!-- Témoignages -->
    <section class="testimonials">
        <h2>Ce que disent nos clients</h2>
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <div class="testimonial-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"Excellent service client et produits de qualité. Je recommande vivement!"</p>
                <div class="testimonial-author">
                    <img src="https://via.placeholder.com/50x50" alt="Client">
                    <span>Jean D.</span>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>"Livraison rapide et produits conformes à la description. Très satisfait."</p>
                <div class="testimonial-author">
                    <img src="https://via.placeholder.com/50x50" alt="Client">
                    <span>Marie L.</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter">
        <div class="newsletter-content">
            <h2>Abonnez-vous à notre newsletter</h2>
            <p>Recevez des offres exclusives et des mises à jour sur nos nouveaux produits</p>
            <form>
                <input type="email" placeholder="Votre adresse email">
                <button type="submit" class="btn">S'abonner</button>
            </form>
        </div>
    </section>

    <!-- Pied de page -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>MonShop</h3>
                <p>Votre boutique en ligne préférée pour tous vos besoins.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Liens rapides</h3>
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Produits</a></li>
                    <li><a href="#">Nouveautés</a></li>
                    <li><a href="#">Promotions</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Informations</h3>
                <ul>
                    <li><a href="#">À propos de nous</a></li>
                    <li><a href="#">Livraison</a></li>
                    <li><a href="#">Politique de retour</a></li>
                    <li><a href="#">Conditions générales</a></li>
                    <li><a href="#">Politique de confidentialité</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> 123 Rue du Commerce, Paris</li>
                    <li><i class="fas fa-phone"></i> +33 1 23 45 67 89</li>
                    <li><i class="fas fa-envelope"></i> contact@monshop.com</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2023 MonShop. Tous droits réservés.</p>
        </div>
    </footer>

    <script >
        // Menu burger
document.querySelector('.burger').addEventListener('click', function() {
    document.querySelector('.nav-links').classList.toggle('active');
    this.querySelector('i').classList.toggle('fa-times');
    this.querySelector('i').classList.toggle('fa-bars');
});

// Fermer le menu lorsqu'un lien est cliqué
document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        document.querySelector('.nav-links').classList.remove('active');
        document.querySelector('.burger i').classList.remove('fa-times');
        document.querySelector('.burger i').classList.add('fa-bars');
    });
});
    </script>
</body>
</html>