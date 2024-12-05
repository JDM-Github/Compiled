<?php
// GINAGAMIT PARA DI MAULIT UNG EMAIL NA NILAGAY DATI
$email_put = $_SESSION['email-put'] ?? '';
unset($_SESSION['email-put']);
?>

<!-- SIMPLE LOGIN FORM -->
<a href="javascript:history.back();" class="btn btn-success position-fixed" style="top: 10px; left: 10px;">Back</a>
<h5 class="card-title text-center mb-4 text-success">Login</h5>
<form action="redirector.php" autocomplete="off" method="POST">
    <input type="hidden" name="type" value="login">

    <div class="mb-3">
        <label for="email" class="form-label text-success">Email address</label>
        <input type="email" class="form-control border-success" id="email" name="email" value="<?php echo $email_put ?>"
            required>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label text-success">Password</label>
        <input type="password" class="form-control border-success" id="password" name="password" required>
    </div>

    <button type="submit" class="btn btn-success w-100">Login</button>
</form>

<div class="mt-4 text-center">
    <p>Don't have an account? <a href="registration.php?page=register" class="text-success">Register</a></p>
</div>