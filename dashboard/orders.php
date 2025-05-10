<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Commande</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>


.commande-container {
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 30px;
    width: 100%;
    max-width: 600px;
    margin: 20px auto;
    align-self: center;
}

h1 {
    color: #333;
    text-align: center;
    margin-bottom: 30px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #555;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="number"],
select,
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
    box-sizing: border-box;
}

textarea {
    resize: vertical;
}

.submit-btn {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 12px 20px;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    transition: background-color 0.3s;
}

.submit-btn:hover {
    background-color: #45a049;
}

/* Style pour les champs obligatoires */
input:required, select:required, textarea:required {
    border-left: 3px solid #ff9800;
}

/* Style pour le focus */
input:focus, select:focus, textarea:focus {
    outline: none;
    border-color: #4CAF50;
    box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
}
    </style>
    <div class="commande-container">
        <h1>Passer votre commande</h1>
        <form action="/traiter-commande" method="POST">
            <div class="form-group">
                <label for="nom">Nom complet</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="tel" id="telephone" name="telephone">
            </div>
            
            <div class="form-group">
                <label for="adresse">Adresse de livraison</label>
                <textarea id="adresse" name="adresse" rows="3" required></textarea>
            </div>
            
            <div class="form-group">
                <label for="produit">Produit</label>
                <select id="produit" name="produit" required>
                    <option value="">Sélectionner un produit</option>
                    <option value="produit1">Produit 1</option>
                    <option value="produit2">Produit 2</option>
                    <option value="produit3">Produit 3</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="quantite">Quantité</label>
                <input type="number" id="quantite" name="quantite" min="1" value="1" required>
            </div>
            
            <div class="form-group">
                <label for="message">Message supplémentaire</label>
                <textarea id="message" name="message" rows="3"></textarea>
            </div>
            
            <button type="submit" class="submit-btn">Valider la commande</button>
        </form>
    </div>
</body>
</html>