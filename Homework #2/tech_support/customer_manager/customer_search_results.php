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


<h1>Results</h1>
<table>
    <tr>
        <th>First Name</th>        
        <th>Last Name</th>
        <th>City</th>
        <th>Email</th>
    </tr>

    <?php foreach ($customers as $customer) : ?>

    <tr>
    <td><?php echo htmlspecialchars($customer['firstName']); ?></td>
    <td><?php echo htmlspecialchars($customer['lastName']); ?></td>
    <td><?php echo htmlspecialchars($customer['city']); ?></td>
    <td><?php echo htmlspecialchars($customer['email']); ?></td>
    <td><form action="." method="post">
                <input type="hidden" name="action"
                       value="view/update_customer">
                <input type="hidden" name="customerID"
                       value="<?php echo htmlspecialchars($customer['customerID']); ?>">
                <input type="submit" value="Select">
            </form></td>
    </tr>

    <?php endforeach; ?>
</table>

</main>

<?php include '../view/footer.php'; ?>