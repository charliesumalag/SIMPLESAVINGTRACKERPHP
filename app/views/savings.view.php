<?php

use framework\Session;

$emptysavings = true;
?>

<?= loadPartial('head') ?>


<div class="h-screen flex flex-col w-full bg-white">
    <header class="flex flex-col font-inherit bg-white pt-[1.6rem]">
        <div class="flex items-center w-full  h-[3rem] p-[1rem]">
            <i class="fa-solid fa-chevron-left text-[1.2rem] pl-[1rem]"></i>
            <h2 class="flex-1 text-center font-medium text-[1.8rem]">Savings</h2>
        </div>
    </header>
    <?php
    if ($emptysavings) {
        echo '
        <div class="  px-[2rem] bg-white flex flex-col items-center justify-center gap-[2rem] flex-1 py-[3rem] rounded-2xl">
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

        <div class="">
            <a href="/adminaccount" class="w-[2.5rem] flex flex-col items-center  gap-2 text-[1rem] text-[#555]">
                <img src="../images/account.png" alt="" class="w-full opacity-50">
                <p class="text-[1rem] text-[#555]">Account</p>
            </a>
        </div>
    </div>';
    } else {
        echo '';
    }
    ?>

</div>
<!-- <div class="h-screen flex flex-col">
    <div class="w-full  flex flex-col p-[1rem] flex-1">
        <header class="  flex flex-col gap-[1.2rem] font-inherit">
            <div class="flex items-center gap-[1rem] w-full">
                <i class="fa-solid fa-chevron-left text-[1.2rem] pl-[1rem]"></i>
                <h2 class="flex-1 text-center font-medium text-[1.8rem]">Savings</h2>
            </div>
        </header>

        <div class="mt-[2rem] mx-[5px] px-[2rem] bg-white flex flex-col flex-1 py-[3rem] rounded-2xl">
            <ul class="flex flex-col gap-[14px]">
                <li class="flex justify-between">
                    <div class="flex gap-[1rem] items-center">
                        <div class="w-1rem">
                            <img src="../images/security.png" alt="" class="w-[1.8rem]">
                        </div>
                        <p class="text-[1.4rem]">Account & Security</p>
                    </div>
                    <i class="fa-solid fa-chevron-right text-[1.2rem]"></i>
                </li>
                <li class="flex justify-between">
                    <div class="flex gap-[1rem] items-center">
                        <i class="fa-regular fa-circle-question"></i>
                        <p class="text-[1.4rem]">Help Support</p>
                    </div>
                    <i class="fa-solid fa-chevron-right text-[1.2rem]"></i>
                </li>
                <li class="flex justify-between">
                    <div class="flex gap-[1rem] items-center">
                        <div class="w-1rem">
                            <img src="../images/logout.png" alt="" class="w-[1.8rem]">
                        </div>
                        <form method="POST" action="/auth/logout">
                            <button class="text-[1.4rem]">Logout</button>
                        </form>
                    </div>
                    <i class="fa-solid fa-chevron-right text-[1.2rem]"></i>
                </li>
            </ul>
        </div>
    </div>
    <div class="h-[5rem] w-full bg-white py-[3rem] px-[5rem] gap-[1.6rem] flex justify-between fixed bottom-0 left-0 items-center">
        <div class="w-[2.5rem] flex flex-col items-center gap-2">
            <a href="/adminsavings">
                <img src="../images/walletactive.png" alt="" class="w-full opacity-50">
                <p class="text-[1rem] text-[#289245]">Saving</p>
            </a>
        </div>
        <div class="w-[2.5rem] flex flex-col items-center gap-2">
            <img src="../images/loan.png" alt="" class="w-full opacity-50">
            <p class="text-[1rem] text-[#555]">Loan</p>
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

        <div class="">
            <a href="/adminaccount" class="w-[2.5rem] flex flex-col items-center  gap-2 text-[1rem] text-[#555]">
                <img src="../images/account.png" alt="" class="w-full opacity-50">
                <p class="text-[1rem] text-[#555]">Account</p>
            </a>
        </div>
    </div>
</div> -->

<?= loadPartial('footer'); ?>
