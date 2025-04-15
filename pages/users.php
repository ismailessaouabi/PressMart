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

<style>
.users-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 1.5rem;
}

.users-table th, .users-table td {
    padding: 1rem;
    text-align: left;
    border-bottom: 1px solid #e2e8f0;
}

.users-table th {
    background-color: #f8fafc;
    font-weight: 600;
}

.btn-edit, .btn-delete {
    background: none;
    border: none;
    cursor: pointer;
    padding: 0.5rem;
    margin: 0 0.25rem;
}

.btn-edit {
    color: #3b82f6;
}

.btn-delete {
    color: #ef4444;
}
</style>

<script>
// Script spécifique à la page users
document.addEventListener('DOMContentLoaded', function() {
    console.log('Script users chargé');
    // Ajouter ici les fonctionnalités spécifiques à la page users
});
</script>