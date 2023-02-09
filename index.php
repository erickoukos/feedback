<?php include('includes/header.php'); ?>

<?php
// Create empty vars
$names = $email = $body = '';
$names_error = $email_error = $body_error = '';

// form submit
if(isset($_POST['submit'])){
    // validating inputs
    if(empty($_POST['names'])){
        $names_error = "Name is required!";
    } else {
        // $names = filter_var($_POST['names'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $names = filter_input(
            INPUT_POST,
            'names',
            FILTER_SANITIZE_FULL_SPECIAL_CHARS
        );
    }
    // validate email
    if(empty($_POST['email'])){
        $email_error = "Email is required!";
    } else {
        $email = filter_input(
            INPUT_POST,
            'email',
            FILTER_SANITIZE_EMAIL
        );
    }

    // validate body / feedback message
    if(empty($_POST['body'])){
        $body_error = "Feedback message cannot be empty!";
    } else {
        $body = filter_input(
            INPUT_POST,
            'body',
            FILTER_SANITIZE_FULL_SPECIAL_CHARS
        );
    }

    if(empty($names_error) && empty($email_error) && empty($body_error)){
        // add data / feedback to the database
        $sql = "INSERT INTO feedbacks(names, email, feedback) values($names, $email, $body)";

        if(mysqli_query($conn, $sql)){
            // success
            header('Location: feedback.php');
        } else {
            echo 'Error: ' . mysqli_error($conn);
        } 

    }
}

?>
<img src="/feedback/images/Erick.png" alt="Logo" class = "mb-3" style = "width: 100px;">
<h2>Feedback Form</h2>
<?php echo isset($names) ? $names : ''; ?>
<p class = "lead text-center">Leave your feedback for PhP Course</p>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class = "mt-4 w-50">

<div class="mb-3">
    <label for="names" class = "form-label">Your Names</label>
    <input type="text" name="names" id="names" class = "form-control <?php echo !$names_error ? : 'is-invalid'; ?>" placeholder = "Enter your names" value = "<?php echo $names; ?>">

<div class="invalid-feedback" id = "validationServerFeedback">
    Please provide a valid name!
</div>
</div>

<div class="mb-3">
    <label for="email" class = "form-label">Your Email Address</label>
    <input type="text" name="email" id="email" class = "form-control <?php echo !$email_error ? : 'is-invalid'; ?>" placeholder = "Enter your email" value = "<?php echo $email; ?>">
    
    <div class="invalid-feedback" id = "validationServerFeedback">
    Please provide a valid email!
</div>
</div>

<div class="mb-3">
    <label for="body">Feedback</label>
    <textarea name="body" id="body" class = "form-control <?php echo !$body_error ? : 'is-invalid'; ?>" placeholder = "Enter your feedback" value = "<?php echo $body; ?>"></textarea>
    <div class="invalid-feedback" id = "validationServerFeedback">
    Please provide a feedback!
</div>
</div>

<div class="mb-3">
    <input type="submit" value="Send" name = "submit" class = "btn btn-dark w-100">
</div>
</form>

<?php include('includes/footer.php');?>












