<?php include '../view/header.php'; ?>

<main>
    <h1>Add Technician</h1>

    <form action="." method="post" id="aligned">
        <input type="hidden" name="action" value="add_technician">
        
        <label>Tech ID</label>
        <input type="text" name="ID" required><br>

        <label>First Name</label>
        <input type="text" name="firstName" required><br>

        <label>Last Name</label>
        <input type="text" name="lastName" required><br>

        <label>Email</label>
        <input type="text" name="email" required><br>

        <label>Phone Number</label>
        <input type="text" name="phoneNumber" required>
        <label class="message">Use 'XXX-XXX-XXXX' format</label><br>

        <label>Password</label>
        <input type="text" name="password" required><br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Technician" /><br>
    </form>
    <p><a href="?action=list_technicians">View Technician List</p>
</main>

<?php include '../view/footer.php'; ?>