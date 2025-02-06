<?php

use framework\Session;
?>

<?= loadPartial('head') ?>

<div class="h-screen flex flex-col w-full overflow-y-auto bg-white">
    <header class="flex flex-col font-inherit bg-white pt-[1.6rem]">
        <div class="flex items-center w-full  h-[3rem] p-[1rem]">
            <i class="fa-solid fa-chevron-left text-[1.2rem] pl-[1rem]"></i>
            <h2 class="flex-1 text-center font-medium text-[1.8rem]">Savings</h2>
        </div>
    </header>

    <div class="flex-1">
        <?php if (empty($savings)): ?>
            <div class="px-[2rem] bg-white flex flex-col items-center justify-center gap-[2rem] py-[3rem] rounded-2xl">
                <div class="w-full flex items-center justify-center">
                    <img src="../images/piggybank.png" class="w-[10rem]" alt="">
                </div>
                <div class="text-center">
                    <h2 class="text-[1.8rem] font-medium">Ready to start savings?</h2>
                    <p class="text-[1.4rem] text-[#888]">There are no savings yet</p>
                </div>
                <div>
                    <button class="px-[3rem] font-light text-[1.4rem] py-[1rem] text-white bg-[#289245] rounded-[5rem]">Add Savings</button>
                </div>
            </div>
        <?php else: ?>
            <ul class="bg-white flex flex-col gap-[14px] p-[2rem] pb-[6rem]">
                <?php foreach ($savings as $saving): ?>
                    <li class="flex justify-between items-center">
                        <div class="flex items-center gap-[1rem]">
                            <div class="w-[3rem]">
                                <img src="../images/profile.png" alt="" class="rounded-full w-full h-full">
                            </div>
                            <div>
                                <p class="text-[#555] text-[1.3rem]"><?= htmlspecialchars($saving['first_name']) ?></p>
                                <p class="text-[1rem] text-[#888]"><?= date('Y-m-d', strtotime($saving['date_added'])) ?></p>
                            </div>
                        </div>
                        <div>
                            <p class="text-[1.4rem] text-[#555]"><span class="text-[1rem]">PHP</span> <?= number_format($saving['amount'], 2) ?></p>
                        </div>
                    </li>
                    <hr>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>

    <!-- Footer: Always present at the bottom -->
    <div class="h-[5rem] w-full bg-white py-[3rem] px-[5rem] gap-[1.6rem] flex justify-between fixed bottom-0 left-0 items-center">
        <div class="w-[2.5rem] flex flex-col items-center gap-2">
            <a href="/adminsavings">
                <img src="../images/walletactive.png" alt="" class="w-full opacity-50">
                <p class="text-[1rem] text-[#289245]">Saving</p>
            </a>
        </div>
        <div class="w-[2.5rem] flex flex-col items-center gap-2">
            <a href="/adminloans">
                <img src="../images/loan.png" alt="" class="w-full opacity-50">
                <p class="text-[1rem] text-[#555]">Loan</p>
            </a>
        </div>
        <div class="w-[2.5rem] flex flex-col items-center gap-2">
            <a href="/admindashboard">
                <img src="../images/home.png" alt="" class="w-full opacity-100">
                <p class="text-[1rem] text-[#555]">Home</p>
            </a>
        </div>
        <div class="w-[2.5rem] flex flex-col items-center gap-2">
            <img src="../images/member.png" alt="" class="w-full opacity-50">
            <p class="text-[1rem] text-[#555]">Member</p>
        </div>
        <div>
            <a href="/adminaccount" class="w-[2.5rem] flex flex-col items-center gap-2 text-[1rem] text-[#555]">
                <img src="../images/account.png" alt="" class="w-full opacity-50">
                <p class="text-[1rem] text-[#555]">Account</p>
            </a>
        </div>
    </div>
</div>

<?= loadPartial('footer'); ?>
