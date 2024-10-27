
<h2>Add New Camera</h2>
<form action="<?= BASEURL ?>/camera/add" method="POST">
    <label for="name">Camera Name:</label>
    <input type="text" id="name" name="name" required>
    
    <label for="details">Details:</label>
    <textarea id="details" name="details" required></textarea>
    
    <label for="stock">Stock:</label>
    <input type="number" id="stock" name="stock" required min="1">
    
    <button type="submit">Add Camera</button>
</form>