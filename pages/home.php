<style>
    /* Style général des cartes de statistiques */
.stat-card {
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    padding: 25px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin: 15px;
    flex: 1;
    min-width: 200px;
    max-width: 300px;
    border: 1px solid #e0e0e0;
}

/* Effet au survol */
.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

/* Style des icônes */
.stat-card i {
    font-size: 2.5rem;
    margin-bottom: 15px;
    color: #4a6cf7;
    background: rgba(74, 108, 247, 0.1);
    width: 70px;
    height: 70px;
    line-height: 70px;
    border-radius: 50%;
    display: inline-block;
}

/* Style des titres */
.stat-card h3 {
    font-size: 1.1rem;
    color: #555;
    margin-bottom: 10px;
    font-weight: 600;
}

/* Style des valeurs */
.stat-card p {
    font-size: 1.8rem;
    color: #333;
    font-weight: 700;
    margin: 0;
}

/* Conteneur parent (si vous utilisez flexbox) */
.stat-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 20px;
}

/* Version mobile */
@media (max-width: 768px) {
    .stat-card {
        min-width: 150px;
        padding: 20px;
    }
    
    .stat-card i {
        font-size: 2rem;
        width: 60px;
        height: 60px;
        line-height: 60px;
    }
    
    .stat-card p {
        font-size: 1.5rem;
    }
}
</style>
<div class="page-content">
    <h1>Bienvenue sur votre Dashboard</h1>
    <p>Ceci est la page d'accueil. Sélectionnez une option dans le menu pour naviguer.</p>
    
    <div class="stats-grid">
        <div class="stat-card">
            <i class="fas fa-users"></i>
            <h3>Utilisateurs</h3>
            <p>1,248</p>
        </div>
        <div class="stat-card">
            <i class="fas fa-shopping-cart"></i>
            <h3>Commandes</h3>
            <p>356</p>
        </div>
        <div class="stat-card">
            <i class="fas fa-chart-line"></i>
            <h3>Performance</h3>
            <p>+12.5%</p>
        </div>
    </div>
</div>