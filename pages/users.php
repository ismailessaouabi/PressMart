<style>
    /* Style général */
.page-content {
    padding: 2rem;
    max-width: 1200px;
    margin: 0 auto;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #333;
}

.page-content h1 {
    color: #2c3e50;
    margin-bottom: 1rem;
    font-size: 2rem;
    border-bottom: 2px solid #3498db;
    padding-bottom: 0.5rem;
    display: inline-block;
}

.page-content p {
    color: #7f8c8d;
    margin-bottom: 2rem;
    font-size: 1.1rem;
}

/* Conteneur du tableau */
.table-container {
    overflow-x: auto;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    background-color: white;
}

/* Style du tableau */
.users-table {
    width: 100%;
    border-collapse: collapse;
    min-width: 600px;
}

.users-table thead {
    background-color: #3498db;
    color: white;
}

.users-table th {
    padding: 1rem;
    text-align: left;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 0.85rem;
    letter-spacing: 0.5px;
}

.users-table tbody tr {
    border-bottom: 1px solid #ecf0f1;
    transition: background-color 0.2s ease;
}

.users-table tbody tr:hover {
    background-color: #f8f9fa;
}

.users-table td {
    padding: 1rem;
    color: #34495e;
}

/* Boutons d'action */
.btn-edit, .btn-delete {
    border: none;
    padding: 0.5rem 0.8rem;
    margin-right: 0.5rem;
    border-radius: 4px;
    cursor: pointer;
    transition: all 0.2s ease;
    font-size: 0.9rem;
}

.btn-edit {
    background-color: #f39c12;
    color: white;
}

.btn-edit:hover {
    background-color: #e67e22;
}

.btn-delete {
    background-color: #e74c3c;
    color: white;
}

.btn-delete:hover {
    background-color: #c0392b;
}

/* Style des icônes */
.fas {
    margin-right: 0.3rem;
}

/* Responsive design */
@media (max-width: 768px) {
    .page-content {
        padding: 1rem;
    }
    
    .users-table th, .users-table td {
        padding: 0.75rem 0.5rem;
    }
    
    .btn-edit, .btn-delete {
        padding: 0.4rem 0.6rem;
        margin-right: 0.3rem;
    }
}

/* Animation pour les lignes */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

.users-table tbody tr {
    animation: fadeIn 0.3s ease forwards;
}

.users-table tbody tr:nth-child(1) { animation-delay: 0.1s; }
.users-table tbody tr:nth-child(2) { animation-delay: 0.2s; }
/* Ajoutez plus de lignes si nécessaire */
</style>
<div class="page-content">
    <h1>Gestion des Utilisateurs</h1>
    <p>Gérez les utilisateurs de votre application ici.</p>
    
    <div class="table-container">
        <table class="users-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Rôle</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Sophie Martin</td>
                    <td>sophie@example.com</td>
                    <td>Admin</td>
                    <td>
                        <button class="btn-edit"><i class="fas fa-edit"></i></button>
                        <button class="btn-delete"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jean Dupont</td>
                    <td>jean@example.com</td>
                    <td>Utilisateur</td>
                    <td>
                        <button class="btn-edit"><i class="fas fa-edit"></i></button>
                        <button class="btn-delete"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>