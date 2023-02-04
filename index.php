<?php include('includes/header.php'); ?>
<?php
// Create empty vars
$names = $email = $body = '';
$names_error = $email_error = $body_error = '';



?>
<img src="images/Erick.png" alt="Logo" class = "w-25">
<h2>Feedback Form</h2>
<?php echo isset($names) ? $names : ''; ?>
<p class = "lead text-center">Leave your feedback for PhP Course</p>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class = "mt-4 w-75">

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
</div>

<div class="mb-3">
    <label for="body">Feedback</label>
    <textarea name="body" id="body" class = "form-control <?php echo !$body_error ? : 'is-invalid'; ?>" placeholder = "Enter your feedback" value = "<?php echo $body; ?>"></textarea>
</div>

<div class="mb-3">
    <input type="submit" value="Send" name = "submit" class = "btn btn-dark w-100">
</div>
</form>

<?php include('includes/footer.php');?>












