document.addEventListener('DOMContentLoaded', function() {
    const toggleBtn = document.querySelector('.toggle-btn');
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.getElementById('main-content');
    
    // Toggle sidebar
    toggleBtn.addEventListener('click', function() {
        sidebar.classList.toggle('collapsed');
        
        if (window.innerWidth <= 768) {
            sidebar.classList.remove('active');
        }
    });
    
    // Gestion de la navigation AJAX
    document.querySelectorAll('.menu-item').forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Mettre à jour l'élément actif
            document.querySelectorAll('.menu-item').forEach(i => {
                i.classList.remove('active');
            });
            this.classList.add('active');
            
            // Charger le contenu via AJAX
            const page = this.getAttribute('data-page');
            loadPage(page);
            
            // Pour mobile, fermer la sidebar après sélection
            if (window.innerWidth <= 768) {
                sidebar.classList.remove('active');
            }
        });
    });
    
    // Fonction pour charger les pages
    function loadPage(page) {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', `pages/${page}.php`, true);
        
        xhr.onload = function() {
            if (this.status === 200) {
                mainContent.innerHTML = this.responseText;
                
                // Mettre à jour l'URL sans rechargement
                history.pushState(null, null, `${page}.php`);
                
                // Ajouter ici tout script spécifique à la page chargée
                initPageScripts();
            } else {
                mainContent.innerHTML = '<h1>Page non trouvée</h1>';
            }
        };
        
        xhr.onerror = function() {
            mainContent.innerHTML = '<h1>Erreur de chargement</h1>';
        };
        
        xhr.send();
    }
    
    // Gérer le bouton précédent/suivant du navigateur
    window.addEventListener('popstate', function() {
        const path = window.location.pathname.split('/').pop();
        const page = path.replace('.php', '');
        loadPage(page);
    });
    
    // Initialiser les scripts spécifiques aux pages
    function initPageScripts() {
        // Ajouter ici les initialisations spécifiques aux pages
        console.log('Initialisation des scripts de la page');
    }
    
    // Pour les mobiles, ajouter un bouton de menu
    if (window.innerWidth <= 768) {
        const mobileMenuBtn = document.createElement('button');
        mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
        mobileMenuBtn.classList.add('mobile-menu-btn');
        mainContent.prepend(mobileMenuBtn);
        
        mobileMenuBtn.addEventListener('click', function() {
            sidebar.classList.add('active');
        });
    }
    
    // Gérer le redimensionnement
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            sidebar.classList.remove('active');
        }
    });
});