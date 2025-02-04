<?= loadPartial('head') ?>
<div class="l-main-container">
    <header class="w-full h-[15vh] relative bg-[url('../images/grab.png')] bg-no-repeat bg-contain bg-center">
        <div class="absolute top-[25%] left-[3rem] w-[50%]">
            <!-- <h1 class="relative z-[2] text-white text-center text-[3rem]">Rider Savings Tracker</h1> -->
        </div>
    </header>
    <form action="/auth/register" method="POST" class="mt-[2rem] p-[1rem] flex flex-col gap-[2rem]" autocomplete="off">
        <div class="w-full relative">
            <i class="fa-solid fa-user absolute text-[#999] top-[50%] left-[1.4rem] -translate-y-1/2"></i>
            <input name="firstname" class="w-full p-[0.9rem] outline-0 border-[1px] border-[#999] rounded-[1rem] text-[#777] pl-[4.2rem]" type="text" placeholder="First Name" value="<?= $user['firstname'] ?? '' ?>" autocomplete="off" autocorrect="off" autocapitalize="off">

        </div>
        <?php if (isset($errors['firstname'])): ?>
            <p class="error text-sm"><?= htmlspecialchars($errors['firstname']) ?></p>
        <?php endif; ?>
        <div class="w-full relative">
            <i class="fa-solid fa-user absolute text-[#999] top-[50%] left-[1.4rem] -translate-y-1/2"></i>
            <input name="lastname" class="w-full p-[0.9rem] outline-0 border-[1px] border-[#999] rounded-[1rem] text-[#777] pl-[4.2rem]" type="text" value="<?= $user['lastname'] ?? '' ?>" placeholder="Last Name" autocomplete="off" autocorrect="off" autocapitalize="off">
        </div>
        <?php if (isset($errors['lastname'])): ?>
            <p class="error text-sm"><?= htmlspecialchars($errors['lastname']) ?></p>
        <?php endif; ?>
        <div class="w-full relative">
            <i class="fa-solid fa-envelope absolute text-[#999] top-[50%] left-[1.4rem] -translate-y-1/2"></i>
            <input name="email" class="w-full p-[0.9rem] outline-0 border-[1px] border-[#999] rounded-[1rem] text-[#777] pl-[4.2rem]" value="<?= $user['email'] ?? '' ?>" type="email" placeholder="Email" autocomplete="off" autocorrect="off" autocapitalize="off">

        </div>

        <div class="w-full relative">
            <i class="fa-solid fa-lock absolute text-[#999] top-[50%] left-[1.4rem] -translate-y-1/2"></i>
            <input name="password" class="w-full p-[0.9rem] outline-0 border-[1px] border-[#999] rounded-[1rem] text-[#777] pl-[4.2rem]" type="password" placeholder="Password" autocomplete="new-password" autocorrect="off" autocapitalize="off">


        </div>

        <div class="w-full relative">
            <i class="fa-solid fa-lock absolute text-[#999] top-[50%] left-[1.4rem] -translate-y-1/2"></i>
            <input class="w-full p-[0.9rem] outline-0 border-[1px] border-[#999] rounded-[1rem] text-[#777] pl-[4.2rem]" name="cpassword" type="password" placeholder="Password" autocomplete="new-password" autocorrect="off" autocapitalize="off">

        </div>
        <?php if (isset($errors['password'])): ?>
            <p class="error"><?= htmlspecialchars($errors['password']) ?></p>
        <?php endif; ?>
        <?php if (isset($errors['password_confirmation'])): ?>
            <p class="error"><?= htmlspecialchars($errors['password_confirmation']) ?></p>
        <?php endif; ?>

        <?php if (isset($errors['email'])): ?>
            <p class="error text-sm"><?= htmlspecialchars($errors['email']) ?></p>
        <?php endif; ?>
        <div class="w-full relativer">
            <button type="submit" class="w-full p-[0.9rem] rounded-[1rem] bg-[#289245] border-0 text-white text-[1.6rem] font-inherit">Register</button>
        </div>
    </form>

    <p class="text-[1.3rem] text-[#999] px-[2rem]">Already have an account? <a href="/"><span class="text-[#289245]">Login</span></a></p>
</div>

<?= loadPartial('footer'); ?>
