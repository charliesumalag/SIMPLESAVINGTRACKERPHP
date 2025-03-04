<?php

use framework\Session;


// $savingsAll
$user = Session::get('user');
?>

<?= loadPartial('head') ?>
<div class="h-screen flex flex-col">
    <div class="w-full  flex flex-col p-[1.6rem] flex-1">
        <header class="  flex flex-col gap-[2rem] font-inherit">
            <div class="flex justify-between items-center">
                <div class="flex gap-[1rem] items-center">
                    <div class="w-[5rem] h-[5rem] rounded-full">
                        <img src="../images/profile.png" alt="" class="rounded-full w-full h-full">
                    </div>
                    <div>
                        <p class="font-medium text-[1.8rem]"><?= $user['firstname'] ?></p>
                        <p class="text-[1.2rem] text-[#777]">Welcome back! 👏</p>
                    </div>
                </div>
                <div>
                    <i class="fa-regular fa-bell text-[2.2rem] font-medium"></i>
                </div>
            </div>

            <div class="bg-[url('../images/bank.png')] w-full bg-cover bg-center bg-no-repeat rounded-2xl p-16 relative overflow-hidden">
                <div class="flex justify-center  gap-[0.5rem]">
                    <p class="text-white text-[3rem] font-normal text-center scale-y-125"><?= number_format($savings, 0)  ?></p>
                </div>

                <p class="text-white text-center text-[1.2rem] font-extralight">Total Savings Balance</p>
            </div>
        </header>
        <!-- Main Content Area (Flex 1 to take remaining space) -->
        <div class="mt-[2rem] mx-[5px] px-[2rem] bg-white flex flex-col flex-1 py-[3rem] rounded-2xl">
            <div class="flex justify-between mb-[1.6rem] ">
                <h2 class="font-normal text-[#555] text-[1.6rem]  tracking-tight">Saving History</h2>
                <a href="/membersavings" class="text-[1.4rem] text-[#289245] border-b-[1px] border-green-300">See all</a>

            </div>
            <hr class="mb-[2rem]">
            <ul class="flex flex-col gap-[14px]">
                <?php foreach ($savingsAll as $saving) : ?>
                    <li class="flex justify-between items-center">
                        <div class="flex items-center gap-[1rem]">
                            <div class="w-[3rem] overflow-hidden">
                                <img src="../images/profile.png" alt="" class="rounded-full w-full h-full">
                            </div>

                            <div>
                                <p class="text-[1rem] text-[#888]"><?= date('Y-m-d', strtotime($saving['date_added']))   ?></p>
                            </div>
                        </div>
                        <div class="">
                            <p class="text-[1.4rem] text-[#555]"><span class="text-[1rem]">PHP </span><?= $saving['amount'] ?> </p>
                        </div>
                    </li>
                    <hr>
                <?php endforeach; ?>


            </ul>
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
                <img src="../images/loan.png" alt="" class="w-full opacity-50">
                <p class="text-[1rem] text-[#555]">Loan</p>
            </a>
        </div>
        <div class="w-[2.5rem] flex flex-col items-center gap-2">
            <a href="/memberdashboard">
                <img src="../images/homeactive.png" alt="" class="w-full opacity-100">
                <p class="text-[1rem] text-[#289245]">Home</p>
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
