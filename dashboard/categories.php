<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une catégorie</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
    color: #333;
}

.admin-container {
    max-width: 800px;
    margin: 30px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #2c3e50;
    text-align: center;
    margin-bottom: 30px;
}

.category-form {
    display: flex;
    flex-direction: column;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #2c3e50;
}

input[type="text"],
textarea,
select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
}

textarea {
    resize: vertical;
    min-height: 100px;
}

input[type="file"] {
    padding: 5px;
}

.submit-btn {
    background-color: #3498db;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

.submit-btn:hover {
    background-color: #2980b9;
}
    </style>
    <div class="admin-container">
        <h1>Ajouter une nouvelle catégorie</h1>
        
        <form action="process_category.php" method="POST" class="category-form">
            <div class="form-group">
                <label for="category_name">Nom de la catégorie:</label>
                <input type="text" id="category_name" name="category_name" required>
            </div>
            
            <div class="form-group">
                <label for="category_description">Description:</label>
                <textarea id="category_description" name="category_description" rows="4"></textarea>
            </div>
            
            <div class="form-group">
                <label for="parent_category">Catégorie parente (optionnel):</label>
                <select id="parent_category" name="parent_category">
                    <option value="0">Aucune (catégorie principale)</option>
                    <option value="0">Aucune (catégorie principale)</option>

                    <option value="0">Aucune (catégorie principale)</option>
                    <option value="0">Aucune (catégorie principale)</option>

                    <!-- Les options seront dynamiquement remplies par PHP -->
                    
                </select>
            </div>
            
            <div class="form-group">
                <label for="category_image">Image de la catégorie:</label>
                <input type="file" id="category_image" name="category_image" accept="image/*">
            </div>
            
            <button type="submit" class="submit-btn">Ajouter la catégorie</button>
        </form>
    </div>
</body>
</html>