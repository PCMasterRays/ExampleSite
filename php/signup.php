<?php
 require "dbfunctions.php";
 $page_title = "Sign Up"; // Set page title
include ('includes/header.html');
$fname="";
$sname="";
$email="";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // get values from form data
    $fname = db_quote($_POST['fname']);
    $sname = db_quote($_POST['sname']);
    $email = db_quote($_POST['email']);
    $course = db_quote($_POST['course']);
    // prepare query string
    $qstring = "INSERT INTO tbl_booking (forename, surname, email, course) VALUES ($fname, $sname, $email, $course);";
    // display query string for now to debug errors
    echo $qstring;
    echo "</br></br>";
    // Run Query
    $result = db_query($qstring);
    if ($result == false) {
        $error = db_error();
        echo $error;
        echo "</br></br>";
        echo "That didn't go through, please try again";
        echo "</br></br>";
    } else {
        echo "</br></br>";
        echo "Success";
    }
}
?>

<form action="signup.php" method="post" class="basic-grey">
    <h2>Sign Up Form
        <span>Please complete all fields</span>
    </h2>
    <label>
        <span>Your First Name :</span>
        <input id="fname" name="fname" type="text" placeholder="Your First Name">
    </label>

    <label>
        <span>Your Surname :</span>
        <input id="sname" name="sname" type="text" placeholder="Your Surname">
    </label>

    <label>
        <span>Your Email :</span>
        <input id="email" name="email" type="text" placeholder="Your Email Address">
    </label>

    <label>
        <span>Course :</span><select name="course" >
        <option value="CS" selected="selected">Computer Science</option>
        <option value="IT3">IT BTEC Level 3</option>
        <option value="IT2">IT BTEC Level 2</option>
        </select>
    </label>

    <label>
        <span></span>
        <input type="submit" class="button" value="Submit" />
    </label>
</form>

<?php
include('includes/footer.html');
?>