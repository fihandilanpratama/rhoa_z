<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id-ID">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>login Rhoa Z</title>

    <link href="<?php echo get_theme_uri('custom/auth/login/css/style.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_theme_uri('custom/auth/login/css/fontawesome-all.css'); ?>" rel="stylesheet" />
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <style>
        #link-to-home {
            font-size: inherit;
            color: #F1A710;
        }
    </style>
</head>

<body>

    <!-- <h1>Login ke <?php echo get_store_name(); ?></h1> -->
    <h1>Login ke <a id="link-to-home" href="<?php echo base_url(); ?>">Rhoa Z</a></h1>

    <div class=" w3l-login-form">
        <h2>Login Akun</h2>
        <?php if ($flash_message) : ?>
            <div class="flash-message">
                <?php echo $flash_message; ?>
            </div>
        <?php endif; ?>

        <?php if ($redirection) : ?>
            <div class="flash-message">
                Silahkan login untuk melanjutkan...
            </div>
        <?php endif; ?>

        <?php echo form_open('auth/login/do_login'); ?>

        <div class=" w3l-form-group">
            <label>Username:</label>
            <div class="group">
                <i class="fas fa-user"></i>
                <input type="text" name="username" value="<?php echo set_value('username', $old_username); ?>" class="form-control" placeholder="Username" minlength="4" maxlength="16" required>
            </div>
            <?php echo form_error('username'); ?>
        </div>
        <div class=" w3l-form-group">
            <label>Password:</label>
            <div class="group">
                <i class="fas fa-unlock"></i>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <?php echo form_error('password'); ?>
        </div>
        <div class="forgot">
            <?php echo anchor('auth/forget-password', 'Lupa password?'); ?>
            <p><input type="checkbox" name="remember_me" value="1">Ingat saya</p>
        </div>
        <button type="submit">Login</button>
        <?php echo form_close(); ?>
    </div>

    <footer>
        <p class="copyright-agileinfo"> &copy; 2022 Rhoa Z</p>
    </footer>

</body>

</html>