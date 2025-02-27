<?php

use framework\Session;

$emptysavings = true;
?>

<?= loadPartial('head') ?>


<div class="h-screen flex flex-col">
    <header class="  flex flex-col font-inherit bg-white pt-[1.6rem]">
        <div class="flex items-center w-full  h-[3rem] p-[1rem]">
            <i class="fa-solid fa-chevron-left text-[1.2rem] pl-[1rem]"></i>
            <h2 class="flex-1 text-center font-medium text-[1.8rem]">Loan</h2>
        </div>
    </header>
    <div class="  px-[2rem] bg-white flex flex-col items-center justify-center gap-[2rem] flex-1 py-[3rem] rounded-2xl">
        <div class="w-full flex items-center justify-center">
            <img src="../images/loan2.png" class="w-[10rem] opacity-50" alt="">
        </div>
        <div>

            <p class="text-[1.4rem] text-center px-[5rem] text-[#888]">Loan services are temporarily unavailable</p>
        </div>
    </div>
    <div class="h-[5rem] w-full bg-white py-[3rem] px-[5rem] gap-[1.6rem] flex justify-between fixed bottom-0 left-0 items-center">
        <div class="w-[2.5rem] flex flex-col items-center gap-2">
            <a href="/membersavings">
                <img src="../images/wallet.png" alt="" class="w-full opacity-50">
                <p class="text-[1rem] text-[#555]">Saving</p>
            </a>
        </div>
        <div class="w-[3rem] flex flex-col items-center gap-2">
            <a href="/memberloan">
                <img src="../images/loanactive.png" alt="" class="w-full opacity-50">
                <p class="text-[1rem] text-[#289245]">Loan</p>
            </a>
        </div>
        <div class="w-[2.5rem] flex flex-col items-center gap-2">
            <a href="/memberdashboard">
                <img src="../images/home.png" alt="" class="w-full opacity-100">
                <p class="text-[1rem] text-[#555]">Home</p>
            </a>
        </div>
        <div class="">
            <a href="/memberaccount" class="w-[2.5rem] flex flex-col items-center gap-2 text-[1rem] text-[#555]">
                <img src="../images/account.png" alt="" class="w-full opacity-50">
                <p class="text-[1rem]">Account</p>
            </a>
        </div>
    </div>
</div>

<?= loadPartial('footer'); ?>
