<?= loadPartial('head') ?>
<div class="l-main-container">
    <header class="l-header-container">
        <div class="l-header-text-conntainer">
            <h1 class="l-header-text">Rider Savings Tracker</h1>
        </div>
    </header>
    <form action="" class="l-form">
        <div class="l-input-container">
            <i class="fa-solid fa-envelope l-icon"></i>
            <input class="l-input-text" type="text" placeholder="Email">
        </div>
        <div class="l-input-container">
            <i class="fa-solid fa-lock l-icon"></i>
            <input class="l-input-text" type="text" placeholder="Password">
        </div>
        <div class="l-button-container">
            <button class="l-btn-login-text">Login</button>
        </div>
    </form>
    <p class="account-text">Don't have an account? <a href="/register"><span class="l-register-text">Register</span></a></p>
</div>

<?= loadPartial('footer'); ?>
