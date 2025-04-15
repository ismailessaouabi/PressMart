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

<style>
.page-content {
    padding: 2rem;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
    margin-top: 2rem;
}

.stat-card {
    background: white;
    padding: 1.5rem;
    border-radius: 0.5rem;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    text-align: center;
}

.stat-card i {
    font-size: 2rem;
    color: var(--primary-color);
    margin-bottom: 1rem;
}

.stat-card h3 {
    color: var(--gray-dark);
    margin-bottom: 0.5rem;
}

.stat-card p {
    font-size: 1.5rem;
    font-weight: bold;
    color: var(--dark-color);
}
</style>