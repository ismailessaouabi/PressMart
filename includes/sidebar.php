<!-- Sidebar -->
<style>
    /* Variables CSS */
:root {
  --primary-color: #6366f1;
  --primary-light: #818cf8;
  --dark-color: #1e293b;
  --light-color: #f8fafc;
  --gray-color: #94a3b8;
  --gray-dark: #64748b;
  --sidebar-width: 280px;
  --sidebar-width-collapsed: 90px;
  --transition: all 0.3s ease;
}

/* Reset et styles de base */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
  background-color: #f1f5f9;
  color: var(--dark-color);
}

.container {
  display: flex;
  min-height: 100vh;
}

/* Styles de la Sidebar */
.sidebar {
  width: var(--sidebar-width);
  background: white;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
  display: flex;
  flex-direction: column;
  transition: var(--transition);
  position: relative;
  z-index: 10;
}

.sidebar.collapsed {
  width: var(--sidebar-width-collapsed);
}

.sidebar-header {
  padding: 1.5rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}

.logo {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  color: var(--primary-color);
  font-weight: 700;
  font-size: 1.25rem;
}

.logo i {
  font-size: 1.5rem;
}

.logo-text {
  transition: var(--transition);
}

.sidebar.collapsed .logo-text {
  opacity: 0;
  width: 0;
  overflow: hidden;
}

.toggle-btn {
  background: none;
  border: none;
  color: var(--gray-dark);
  font-size: 1.25rem;
  cursor: pointer;
  transition: var(--transition);
}

.toggle-btn:hover {
  color: var(--primary-color);
}

.sidebar-menu {
  flex: 1;
  padding: 1.5rem;
  overflow-y: auto;
}

.menu-group {
  margin-bottom: 1.5rem;
}

.menu-title {
  color: var(--gray-color);
  font-size: 0.75rem;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  margin-bottom: 1rem;
  transition: var(--transition);
}

.sidebar.collapsed .menu-title {
  opacity: 0;
  height: 0;
  margin: 0;
  overflow: hidden;
}

.menu-item {
  display: flex;
  align-items: center;
  padding: 0.75rem;
  margin-bottom: 0.5rem;
  border-radius: 0.5rem;
  color: var(--gray-dark);
  text-decoration: none;
  transition: var(--transition);
  position: relative;
}

.menu-item:hover {
  background-color: #f1f5f9;
  color: var(--primary-color);
}

.menu-item.active {
  background-color: #eef2ff;
  color: var(--primary-color);
  font-weight: 500;
}

.menu-item i {
  font-size: 1.1rem;
  width: 24px;
  text-align: center;
  margin-right: 0.75rem;
}

.menu-item span {
  transition: var(--transition);
}

.sidebar.collapsed .menu-item span {
  opacity: 0;
  width: 0;
  overflow: hidden;
}

.badge {
  background-color: var(--primary-color);
  color: white;
  font-size: 0.7rem;
  padding: 0.2rem 0.5rem;
  border-radius: 9999px;
  margin-left: auto;
}

.sidebar-footer {
  padding: 1.5rem;
  border-top: 1px solid rgba(0, 0, 0, 0.05);
}

.user-profile {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  transition: var(--transition);
}

.user-profile img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  object-fit: cover;
}

.user-info {
  display: flex;
  flex-direction: column;
  transition: var(--transition);
}

.user-name {
  font-weight: 600;
  font-size: 0.9rem;
}

.user-role {
  font-size: 0.75rem;
  color: var(--gray-color);
}

.user-profile i {
  margin-left: auto;
  color: var(--gray-color);
  transition: var(--transition);
}

.user-profile:hover i {
  color: var(--primary-color);
}

.sidebar.collapsed .user-info,
.sidebar.collapsed .user-profile i {
  opacity: 0;
  width: 0;
  overflow: hidden;
}

/* Contenu principal */
.main-content {
  flex: 1;
  padding: 2rem;
  transition: var(--transition);
}

.sidebar.collapsed ~ .main-content {
  margin-left: var(--sidebar-width-collapsed);
}

/* Styles responsives */
@media (max-width: 768px) {
  .sidebar {
      position: fixed;
      left: 0;
      top: 0;
      bottom: 0;
      z-index: 100;
      transform: translateX(-100%);
  }
  
  .sidebar.active {
      transform: translateX(0);
  }
  
  .sidebar.collapsed {
      transform: translateX(-100%);
  }
  
  .main-content {
      margin-left: 0;
  }
}
</style>
<div class="sidebar">
    <div class="sidebar-header">
        <div class="logo">
            <i class="fa-brands fa-atlassian"></i>
            <span class="logo-text">Dashboard</span>
        </div>
        <button class="toggle-btn">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    
    <div class="sidebar-menu">
        <div class="menu-group">
            <div class="menu-title">MAIN</div>
            <a href="?page=home" class="menu-item <?php echo ($page == 'home') ? 'active' : ''; ?>">
                <i class="fas fa-home"></i>
                <span>Accueil</span>
            </a>
            <a href="?page=analytics" class="menu-item <?php echo ($page == 'analytics') ? 'active' : ''; ?>">
                <i class="fas fa-chart-line"></i>
                <span>Analytics</span>
            </a>
            <a href="?page=messages" class="menu-item <?php echo ($page == 'messages') ? 'active' : ''; ?>">
                <i class="fas fa-envelope"></i>
                <span>Messages</span>
                <span class="badge">5</span>
            </a>
        </div>
        
        <div class="menu-group">
            <div class="menu-title">MANAGEMENT</div>
            <a href="?page=users" class="menu-item <?php echo ($page == 'users') ? 'active' : ''; ?>">
                <i class="fas fa-users"></i>
                <span>Utilisateurs</span>
            </a>
            <a href="?page=products" class="menu-item <?php echo ($page == 'products') ? 'active' : ''; ?>">
                <i class="fas fa-box"></i>
                <span>Produits</span>
            </a>
            <a href="?page=categories" class="menu-item <?php echo ($page == 'categories') ? 'active' : ''; ?>">
                <i class="fas fa-box"></i>
                <span>Categories</span>
            </a>
            <a href="?page=orders" class="menu-item <?php echo ($page == 'orders') ? 'active' : ''; ?>">
                <i class="fas fa-shopping-cart"></i>
                <span>Commandes</span>
            </a>
        </div>
        
        <div class="menu-group">
            <div class="menu-title">PREFERENCES</div>
            <a href="?page=settings" class="menu-item <?php echo ($page == 'settings') ? 'active' : ''; ?>">
                <i class="fas fa-cog"></i>
                <span>Paramètres</span>
            </a>
            <a href="?page=help" class="menu-item <?php echo ($page == 'help') ? 'active' : ''; ?>">
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

