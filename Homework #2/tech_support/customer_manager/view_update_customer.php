<?php require('../model/country_db.php'); ?>
<?php include '../view/header.php'; ?>

<main>

<h1>View/Update Customer</h1>

<?php foreach ($customers as $customer) : ?>

<form action="." method="post" id="aligned">
        <input type="hidden" name="action" value="update_customer">

        <label>First Name</label>
        <input type="text" name="firstName" value="<?php echo htmlspecialchars($customer['firstName']); ?>" required> <br>

        <label>Last Name</label>
        <input type="text" name="lastName" value="<?php echo htmlspecialchars($customer['lastName']); ?>" required> <br>

        <label>Address</label>
        <input type="text" name="address" value="<?php echo htmlspecialchars($customer['address']); ?>" required> <br>

        <label>City</label>
        <input type="text" name="city" value="<?php echo htmlspecialchars($customer['city']); ?>" required> <br>

        <label>State</label>
        <input type="text" name="state" value="<?php echo htmlspecialchars($customer['state']); ?>" required> <br>

        <label>Postal Code</label>
        <input type="text" name="postalCode" value="<?php echo htmlspecialchars($customer['postalCode']); ?>" required> <br>



        <?php $countries = country_collection(); ?>
        <label>Country Code</label>
        <select name = "countryCode">
                <?php foreach ($countries as $country) : ?>
                <option value="<?php echo htmlspecialchars($country['countryCode']); ?>"
                <?php echo ($country['countryCode'] == $customer['countryCode']) ? 'selected' : ''; ?>>
                <?php echo htmlspecialchars($country['countryName']); ?>
                </option>
                <?php endforeach; ?>
        </select><br>



        <label>Phone Number</label>
        <input type="text" name="phone" value="<?php echo htmlspecialchars($customer['phone']); ?>" required> <br>

        <label>Email</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($customer['email']); ?>" required> <br>

        <label>Password</label>
        <input type="text" name="password" value="<?php echo htmlspecialchars($customer['password']); ?>" required> <br>

        <input type="text" name="customerID" value= "<?php echo htmlspecialchars($customer['customerID']); ?>" hidden>

        <label>&nbsp;</label>
        <input type="submit" value="Update Customer" /><br>

</form>
<?php endforeach; ?>


<p><a href="?action=customer_search">Search Customers</a></p>
</main>

<?php include '../view/footer.php'; ?>