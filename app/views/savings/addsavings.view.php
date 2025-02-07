<?php

use framework\Session;
?>

<?= loadPartial('head') ?>

<div class="h-screen flex flex-col w-full overflow-y-auto bg-[#f7f7f7]">
    <header class="flex flex-col font-inherit bg-white py-[1.6rem] mb-[2rem]">
        <div class="flex items-center w-full  h-[3rem] p-[1rem]">
            <i class="fa-solid fa-chevron-left text-[1.2rem] pl-[1rem]"></i>
            <h2 class="flex-1 text-center font-medium text-[1.8rem]">Add Savings</h2>
        </div>
    </header>
    <form class="flex-1 bg-white p-[40px] flex flex-col gap-[1.5rem]  ">

        <div class="flex flex-col gap-[0.5rem]">
            <label for="">Select Member</label>
            <select name="" id="" class="p-[1rem] w-full outline-0 bg-[#fafafa] text-[#555] font-inherit rounded-[0.5rem]">
                <option value=""></option>
                <option value="">Charlie</option>
                <option value="">Jhez</option>
                <option value="">Jodiel</option>
                <option value="">Jonathan</option>
            </select>
        </div>
        <div class="flex flex-col gap-[0.5rem]">
            <label for="">Amount</label>
            <input type="text" class="p-[1rem] w-full outline-0 bg-[#fafafa] text-[#555]  font-inherit rounded-[0.5rem">
        </div>
        <div class="flex flex-col gap-[0.5rem]">
            <label for="">Date</label>
            <input type="date" class="p-[1rem] w-full outline-0 bg-[#fafafa] text-[#555]  font-inherit rounded-[0.5rem">
        </div>
        <div class="flex w-full gap-[1rem] mt-[2rem]">
            <button class="w-[50%] p-1rem bg-[#f3f3ff] text-[#289245] p-[0.8rem] rounded-[5rem]">Cancel</button>
            <button class=" w-[50%] p-1rem bg-[#289245] text-white p-[0.8rem] rounded-[5rem]">Add</button>
        </div>

    </form>
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
