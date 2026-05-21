<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/Control.css">
</head>
<body>
     <main>
        <section class="product">
            <div class="container">
                <div class="product__title">
                    <h2>Create<br>Product</h2>
                </div>
                <div class="product__form">
                    <form enctype="multipart/form-data" action="./php/createProduct.php" method="post">
                        <input name="file" type="file" accept="image/*" required>
                        
                        <input name="title" type="text" placeholder="Title dishes" required>
                        
                        <select name="category" required>
                            <option value="">Select category</option>
                            <option value="1">Bestseller</option>
                            <option value="2">New</option>
                        </select>
                        
                        <textarea name="description" placeholder="Description"></textarea>
                        
                        <input name="additional" type="text" placeholder="Additional information">
                        
                        <div class="form__row">
                            <input name="price" type="number" step="0.01" placeholder="Price" required>
                            <input name="weight" type="number" placeholder="Weight (grams)" required>
                        </div>
                        
                        <button type="submit">Create Product</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>
</html>