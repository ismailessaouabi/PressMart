<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Moderne</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="logo">
                    <i class="fas fa-rocket"></i>
                    <span class="logo-text">Dashboard</span>
                </div>
                <button class="toggle-btn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            
            <div class="sidebar-menu">
                <div class="menu-group">
                    <div class="menu-title">MAIN</div>
                    <a href="home.php" class="menu-item" data-page="home">
                        <i class="fas fa-home"></i>
                        <span>Accueil</span>
                    </a>
                    <a href="analytics.php" class="menu-item" data-page="analytics">
                        <i class="fas fa-chart-line"></i>
                        <span>Analytics</span>
                    </a>
                    <a href="messages.php" class="menu-item" data-page="messages">
                        <i class="fas fa-envelope"></i>
                        <span>Messages</span>
                        <span class="badge">5</span>
                    </a>
                </div>
                
                <div class="menu-group">
                    <div class="menu-title">MANAGEMENT</div>
                    <a href="users.php" class="menu-item" data-page="users">
                        <i class="fas fa-users"></i>
                        <span>Utilisateurs</span>
                    </a>
                    <a href="products.php" class="menu-item" data-page="products">
                        <i class="fas fa-box"></i>
                        <span>Produits</span>
                    </a>
                    <a href="orders.php" class="menu-item" data-page="orders">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Commandes</span>
                    </a>
                </div>
                
                <div class="menu-group">
                    <div class="menu-title">PREFERENCES</div>
                    <a href="settings.php" class="menu-item" data-page="settings">
                        <i class="fas fa-cog"></i>
                        <span>Paramètres</span>
                    </a>
                    <a href="help.php" class="menu-item" data-page="help">
                        <i class="fas fa-question-circle"></i>
                        <span>Aide</span>
                    </a>
                </div>
            </div>
            
            <div class="sidebar-footer">
                <div class="user-profile">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Profile">
                    <div class="user-info">
                        <span class="user-name">Sophie Martin</span>
                        <span class="user-role">Administrateur</span>
                    </div>
                    <i class="fas fa-sign-out-alt"></i>
                </div>
            </div>
        </div>
        
        <!-- Contenu principal -->
        <main class="main-content" id="main-content">
            <?php include 'pages/home.php'; ?>
        </main>
    </div>

    <script src="scripte.js"></script>
</body>
</html>