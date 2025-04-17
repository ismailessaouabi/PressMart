<?php require_once 'includes/db.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>
    <style>
        
        
        .container-pro {
            width: 850px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="number"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        textarea {
            min-height: 100px;
            resize: vertical;
        }
        
        .btn-submit {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        
        .btn-submit:hover {
            background-color: #45a049;
        }
        
        .btn-back {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            color: #333;
            padding: 8px 16px;
            background-color: #f1f1f1;
            border-radius: 4px;
        }
        
        .btn-back:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container-pro">
        <h1>Ajouter un nouveau produit</h1>
        <?php
        // Récupération des catégories avec gestion d'erreur
try {
    $stmt = $pdo->query("SELECT * FROM categories");
    if ($stmt) {
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $categories = [];
        echo "<p>Erreur lors de la récupération des catégories</p>";
    }
} catch (PDOException $e) {
    $categories = [];
    error_log("Erreur base de données: " . $e->getMessage());
    echo "<p>Problème d'accès à la base de données</p>";
}

// Vérifiez ensuite les noms exacts des colonnes
if (!empty($categories)) {
    // Afficher la première catégorie pour vérifier les noms des colonnes
    $first_category = $categories[0];
    echo "<pre>";
    print_r($first_category);
    echo "</pre>";
}
        // Vérification de la soumission du formulaire
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nom = $_POST['nom'];
            $description = $_POST['description'];
            $prix = $_POST['prix'];
            $quantite = $_POST['quantite'];
            $categorie = $_POST['categorie'];

            // Gestion de l'image
            if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                $image = $_FILES['image'];
                $imagePath = 'images/' . basename($image['name']);
                move_uploaded_file($image['tmp_name'], $imagePath);
            } else {
                $imagePath = null;
            }

            // Insertion dans la base de données
            try {
                $stmt = $pdo->prepare("INSERT INTO products (nom, description, prix, qauntitie, img, idCat) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->execute([$nom, $description, $prix, $quantite, $imagePath, $categorie]);
                echo "<p>Produit ajouté avec succès !</p>";
            } catch (PDOException $e) {
                echo "<p>Erreur lors de l'ajout du produit: " . htmlspecialchars($e->getMessage()) . "</p>";
            }
        }
        ?>
        
        <form  method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nom">Nom du produit*</label>
                <input type="text" id="nom" name="nom" required>
            </div>

            <div class="form-group">
                <label for="image">Image du produit</label>
                <input type="file" id="image" name="image" accept="image/*">
                <small>Formats acceptés: JPG, PNG, GIF (max 2MB)</small>
            </div>
            
            <div class="form-group">
                <label for="description">Description*</label>
                <textarea id="description" name="description" required></textarea>
            </div>
            
            <div class="form-group">
                <label for="prix">Prix (€)*</label>
                <input type="number" id="prix" name="prix" step="0.01" min="0" required>
            </div>
            
            <div class="form-group">
                <label for="quantite">Quantité en stock*</label>
                <input type="number" id="quantite" name="quantite" min="0" required>
            </div>
            
            <div class="form-group">
            <label for="categorie">Catégorie</label>
<select id="categorie" name="categorie" required>
    <option value="">-- Sélectionnez une catégorie --</option>
    <?php 
    // Affichage des catégories dans le menu déroulant
    foreach ($categories as $category) {
        echo "<option value='" . htmlspecialchars($category['idC']) . "'>" . htmlspecialchars($category['nom']) . "</option>";
    }
    ?>
</select>
            </div>
            
           
            
            <button type="submit" class="btn-submit">Ajouter le produit</button>
        </form>
        
        <a href="liste_produits.php" class="btn-back">Retour à la liste des produits</a>
    </div>
</body>
</html>