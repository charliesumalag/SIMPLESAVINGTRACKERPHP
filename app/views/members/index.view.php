<?php

use framework\Session;

$emptysavings = true;
?>

<?= loadPartial('head') ?>


<div class="h-screen flex flex-col">
    <header class="  flex flex-col font-inherit bg-white pt-[1.6rem]">
        <div class="flex items-center w-full  h-[3rem] p-[1rem]">
            <i class="fa-solid fa-chevron-left text-[1.2rem] pl-[1rem]"></i>
            <h2 class="flex-1 text-center font-medium text-[1.8rem]">Members</h2>
        </div>
    </header>
    <div class="  px-[2rem] bg-white flex flex-col items-center justify-center gap-[2rem] flex-1 py-[3rem] rounded-2xl">
        <div class="w-full flex items-center justify-center">
            <img src="../images/union.png" class="w-[10rem] opacity-50" alt="">
        </div>
        <div>
            <p class="text-[1.4rem] px-[5rem] text-[#888] text-center">Members services are temporarily unavailable</p>
        </div>
    </div>
    <div class="h-[5rem] w-full bg-white py-[3rem] px-[5rem] gap-[1.6rem] flex justify-between fixed bottom-0 left-0 items-center">
        <div class="w-[2.5rem] flex flex-col items-center gap-2">
            <a href="/adminsavings">
                <img src="../images/wallet.png" alt="" class="w-full opacity-50">
                <p class="text-[1rem] text-[#555]">Saving</p>
            </a>
        </div>
        <div class="w-[3rem] flex flex-col items-center gap-2">
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
            <a href="/members">
                <img src="../images/memberactive.png" alt="" class="w-full opacity-50">
                <p class="text-[1rem] text-[#289245]">Member</p>
            </a>
        </div>

        <div class="">
            <a href="/adminaccount" class="w-[2.5rem] flex flex-col items-center  gap-2 text-[1rem] text-[#555]">
                <img src="../images/account.png" alt="" class="w-full opacity-50">
                <p class="text-[1rem] text-[#555]">Account</p>
            </a>
        </div>
    </div>
</div>

<?= loadPartial('footer'); ?>
