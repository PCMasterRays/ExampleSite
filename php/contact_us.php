<?php
$page_title = 'Contact Us'; // Set the pages title
include ('includes/header.html'); // include page header
?>

<h1>Contact Us</h1>

<form action="response.php" method="post" class="basic-grey">
    <h2>Contact Form
        <span>Please Complete all of the fields.</span>
    </h2>
    <label>
        <span>Your Name</span>
        <input id="name" type="text" name="sender" placeholder="Your Full Name">
    </label>

    <label>
        <span>Your Email</span>
        <input id="email" type="text" name="email" placeholder="Your Email Address"/>
    </label>

    <label>
        <span>Message: </span>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea
    </label>

    <label>
        <span>Subject:</span><select name="subject">
            <option value="General Question">General Question</option>
            <option value="Programming">Programming</option>
            <option value="Theory">Theory</option>
        </select>
    </label>

    <label>
        <span></span>
        <input type="submit" class="button" value="Submit">
    </label>

</form>
<!-- final form -->
<?php
include ('includes/footer.html');
?>