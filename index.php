<?php include("header.php") ?>

<!-- post form for getting, user's full name and country -->
<form method= "post" action="action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
    </select>

    <input type="submit" value="Submit">
</form>
 
<?php include("footer.php") ?>