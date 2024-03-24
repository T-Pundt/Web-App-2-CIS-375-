<?php include '../view/header.php'; ?>

<main>

    <h1>Customer Search</h1>
    <form action="." method="post" id="customerSearch">
        <input type="hidden" name="action" value="customer_search">

        <label>Last Name:</label>
        <input type="text" name="lastName" required>

        <label>&nbsp;</label>
        <input type="submit" value="Submit">
    </form>
</main>


<?php include '../view/footer.php'; ?>