<?php

use framework\Session;
?>

<?= loadPartial('head') ?>
<div class="h-screen flex flex-col">
    <div class="w-full  flex flex-col p-[1rem] flex-1">
        <header class="  flex flex-col gap-[1.2rem] font-inherit">
            <div class="flex items-center gap-[1rem] w-full">
                <i class="fa-solid fa-chevron-left text-[1.2rem] pl-[1rem]"></i>
                <h2 class="flex-1 text-center font-medium text-[1.8rem]">Account</h2>
            </div>
            <div class="flex justify-between items-center bg-white px-[2rem] py-[1rem] rounded-2xl">
                <div class="flex gap-[1rem] items-center">
                    <div class="w-[5rem] h-[5rem] rounded-full">
                        <img src="../images/profile.jpg" alt="" class="rounded-full w-full h-full">
                    </div>
                    <div>
                        <p class="font-semibold text-[1.4rem]">Admin Jodiel</p>
                        <p class="text-[1.2rem] text-[#777]">admin@user.com</p>
                    </div>
                </div>
                <i class="fa-solid fa-chevron-right text-[1.4rem]"></i>
            </div>
        </header>

        <!-- Main Content Area (Flex 1 to take remaining space) -->
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
        <div class="w-[0.5rem] flex flex-col items-center gap-2">
            <a href="/members">
                <img src="../images/member.png" alt="" class="w-full opacity-50">
                <p class="text-[1rem] text-[#555]">Member</p>
            </a>
        </div>

        <div class="">
            <a href="/adminaccount" class="w-[2.5rem] flex flex-col items-center  gap-2 text-[1rem] text-[#555]">
                <img src="../images/accountactive.png" alt="" class="w-full opacity-50">
                <p class="text-[1rem] text-[#289245]">Account</p>
            </a>
        </div>
    </div>
</div>

<?= loadPartial('footer'); ?>
