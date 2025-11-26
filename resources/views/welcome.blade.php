<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2>Your API Document</h2>
    <hr>
    <h4>Get All Products</h4>
    <ul>
        <li>Method : GET</li>
        <li>URL : http://localhost:8000/api/products</li>
    </ul>
    <h4>Get Product By Id</h4>
     <ul>
        <li>Method : GET</li>
        <li>URL : http://localhost:8000/api/products/id/{product_id}</li>
    </ul>
    <h4>Delete Product</h4>
     <ul>
        <li>Method : DELETE</li>
        <li>URL : http://localhost:8000/api/products/id/{product_id}</li>
    </ul>
    <h4>Create Product</h4>
     <ul>
        <li>Method : POST</li>
        <li>URL : http://localhost:8000/api/products</li>
        <li>item_name, cost, price, qty</li>
    </ul>
    <h4>Update Product</h4>
     <ul>
        <li>Method : PUT</li>
        <li>URL : http://localhost:8000/api/products</li>
        <li>item_name, cost, price, qty, id</li>
    </ul>
</body>
</html>