<?= loadPartial('head') ?>
<div class="l-main-container">
    <header class="l-header-container">
        <div class="l-header-text-conntainer">
            <h1 class="l-header-text">Rider Savings Tracker</h1>
        </div>
    </header>
    <form action="" class="l-form" autocomplete="off">
        <div class="l-input-container">
            <i class="fa-solid fa-user l-icon"></i>
            <input class="l-input-text" type="text" placeholder="First Name" autocomplete="off" autocorrect="off" autocapitalize="off">
        </div>
        <div class="l-input-container">
            <i class="fa-solid fa-user l-icon"></i>
            <input class="l-input-text" type="text" placeholder="Last Name" autocomplete="off" autocorrect="off" autocapitalize="off">
        </div>
        <div class="l-input-container">
            <i class="fa-solid fa-envelope l-icon"></i>
            <input class="l-input-text" type="text" placeholder="Email" autocomplete="off" autocorrect="off" autocapitalize="off">
        </div>
        <div class="l-input-container">
            <i class="fa-solid fa-lock l-icon"></i>
            <input class="l-input-text" type="password" placeholder="Password" autocomplete="new-password" autocorrect="off" autocapitalize="off">
        </div>
        <div class="l-button-container">
            <button class="l-btn-login-text">Register</button>
        </div>
    </form>

    <p class="account-text">Already have an account? <a href="/"><span class="l-register-text">Login</span></a></p>
</div>

<?= loadPartial('footer'); ?>
