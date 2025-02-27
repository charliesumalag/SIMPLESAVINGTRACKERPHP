<?php

use framework\Session;


?>

<?= loadPartial('head') ?>

<div class="h-screen flex flex-col w-full overflow-y-auto bg-white">
    <header class="flex flex-col font-inherit bg-white py-[1.6rem]">
        <div class="flex items-center w-full  h-[3rem] p-[1rem]">
            <i class="fa-solid fa-chevron-left text-[1.2rem] pl-[1rem]"></i>
            <h2 class="flex-1 text-center font-medium text-[1.8rem]">Savings</h2>
        </div>
    </header>

    <?php if (Session::has('success')): ?>
        <div class="text-center text-green-500" id="success-message">
            <?= Session::get('success'); ?>
        </div>
        <?php Session::clear('success'); // Remove message after displaying
        ?>
    <?php endif; ?>

    <script>
        // Wait 4 seconds, then fade out the message
        setTimeout(() => {
            let message = document.getElementById('success-message');
            if (message) {
                message.style.transition = "opacity 1s";
                message.style.opacity = "0";
                setTimeout(() => message.remove(), 1000); // Remove from DOM after fading out
            }
        }, 4000);
    </script>

    <div class="flex-1 relative bg-[#f7f7f7] saving">
        <?php if (empty($savings)): ?>
            <div class="p-[1.6rem] bg-white flex flex-col items-center empty-savings h-[100%] justify-center gap-[2rem] py-[3rem] rounded-2xl">
                <div class="w-full flex items-center justify-center">
                    <img src="../images/piggybank.png" class="w-[10rem]" alt="">
                </div>
                <div class="text-center">
                    <h2 class="text-[1.8rem] font-medium">Ready to start savings?</h2>
                    <p class="text-[1.4rem] text-[#888]">There are no savings yet</p>
                </div>
            </div>
        <?php else: ?>
            <ul class="p-[1.6rem] bg-white flex flex-col gap-[1rem] mt-[1rem] pb-[5rem] bg-[#f6f6f6] ul h-[100%]">
                <?php foreach ($savings as $saving): ?>

                    <li class="flex p-[1rem] items-center bg-[#f7f7f7] rounded-[0.8rem] bg-white mb-[1rem]">
                        <div class="flex flex-1 items-center gap-[1rem]">
                            <div class="w-[3rem]">
                                <img src="../images/profile.png" alt="" class="rounded-full w-full h-full">
                            </div>
                            <div>
                                <p class="text-[1rem] text-[#888]"><?= date('Y-m-d', strtotime($saving['date_added'])) ?></p>
                                <p class="font-medium text-[#555] text-[1.4rem]"><?= htmlspecialchars($saving['first_name']) ?></p>
                            </div>
                        </div>
                        <div class="mr-[1rem]">
                            <p class="text-[1.4rem] font-medium text-[#555]"><span class="text-[1rem] font-light">PHP</span> <?= number_format($saving['amount'], 2) ?></p>
                        </div>
                    </li>
                    <hr>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>

    <!-- Footer: Always present at the bottom -->
    <div class="h-[5rem] w-full bg-white py-[3rem] px-[5rem] gap-[1.6rem] flex justify-between fixed bottom-0 left-0 items-center main-menus">
        <div class="w-[2.5rem] flex flex-col items-center gap-2">
            <a href="/membersavings">
                <img src="../images/walletactive.png" alt="" class="w-full opacity-50">
                <p class="text-[1rem] text-[#289245]">Saving</p>
            </a>
        </div>
        <div class="w-[3rem] flex flex-col items-center gap-2">
            <a href="/memberloan">
                <img src="../images/loan.png" alt="" class="w-full opacity-50">
                <p class="text-[1rem] text-[#555]">Loan</p>
            </a>
        </div>
        <div class="w-[2.5rem] flex flex-col items-center gap-2">
            <a href="/memberdashboard">
                <img src="../images/home.png" alt="" class="w-full opacity-100">
                <p class="text-[1rem] text-[#555]">Home</p>
            </a>
        </div>
        <div>
            <a href="/memberaccount" class="w-[2.5rem] flex flex-col items-center gap-2 text-[1rem] text-[#555]">
                <img src="../images/account.png" alt="" class="w-full opacity-50">
                <p class="text-[1rem] text-[#555]">Account</p>
            </a>
        </div>
    </div>
</div>

<script>

</script>

<?= loadPartial('footer'); ?>
