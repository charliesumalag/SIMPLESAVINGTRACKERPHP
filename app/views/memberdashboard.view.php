<?php


use app\controllers;
use app\controllers\UserController;
use framework\Session;

?>

<?= loadPartial('head') ?>
<div class="w-full h-screen bg-[#289245] flex flex-col">
    <header class="bg-[#289245]  flex flex-col gap-[2rem] font-inherit">
        <div class="bg-white flex justify-between w-full  px-[2rem] py-[2rem]">
            <h1 class="text-[2rem] text-[#289245]  font-bold "><span class="text-[#333]">Hello</span> <?= Session::get('user')['firstname'] ?></h1>
            <form method="POST" action="/auth/logout">
                <button class="bg-[#f56c6c] text-white px-6 py-2 rounded-[0.5rem] hover:bg-[#f44336] transition-all">
                    Logout
                </button>
            </form>
        </div>
        <div class="py-[4rem]">
            <p class="text-[#e6e6e6] text-center text-[1.4rem]">Total Savings</p>
            <p class="text-[#e6e6e6] text-[3rem] font-bold text-center">Php 3,000.00</p>
        </div>
    </header>
    <!-- Main Content Area (Flex 1 to take remaining space) -->
    <div class="mt-[2rem] mx-[5px] px-[2rem] bg-white flex flex-col flex-1 py-[3rem] rounded-t-[3rem]">
        <h2 class="mb-[1.6rem]">Saving History</h2>
        <ul class="flex flex-col gap-[1rem]">
            <li class="flex justify-between items-center">
                <div class="flex items-center gap-[1rem]">
                    <div>
                        <p class="text-[1.6rem] text-[#555]">12-02-25</p>
                    </div>
                </div>
                <div class="">
                    <p class="text-[2rem] text-[#555]"><span class="text-[1.2rem]">PHP</span> 50.00</p>
                </div>
            </li>
            <li class="flex justify-between items-center">
                <div class="flex items-center gap-[1rem]">
                    <div>
                        <p class="text-[1.6rem] text-[#555]">12-02-25</p>
                    </div>
                </div>
                <div class="">
                    <p class="text-[2rem] text-[#555]"><span class="text-[1.2rem]">PHP</span> 50.00</p>
                </div>
            </li>
            <li class="flex justify-between items-center">
                <div class="flex items-center gap-[1rem]">
                    <div>
                        <p class="text-[1.6rem] text-[#555]">12-02-25</p>
                    </div>
                </div>
                <div class="">
                    <p class="text-[2rem] text-[#555]"><span class="text-[1.2rem]">PHP</span> 50.00</p>
                </div>
            </li>
            <li class="flex justify-between items-center">
                <div class="flex items-center gap-[1rem]">
                    <div>
                        <p class="text-[1.6rem] text-[#555]">12-02-25</p>
                    </div>
                </div>
                <div class="">
                    <p class="text-[2rem] text-[#555]"><span class="text-[1.2rem]">PHP</span> 50.00</p>
                </div>
            </li>
            <li class="flex justify-between items-center">
                <div class="flex items-center gap-[1rem]">
                    <div>
                        <p class="text-[1.6rem] text-[#555]">12-02-25</p>
                    </div>
                </div>
                <div class="">
                    <p class="text-[2rem] text-[#555]"><span class="text-[1.2rem]">PHP</span> 50.00</p>
                </div>
            </li>
            <li class="flex justify-between items-center">
                <div class="flex items-center gap-[1rem]">
                    <div>
                        <p class="text-[1.6rem] text-[#555]">12-02-25</p>
                    </div>
                </div>
                <div class="">
                    <p class="text-[2rem] text-[#555]"><span class="text-[1.2rem]">PHP</span> 50.00</p>
                </div>
            </li>
            <li class="flex justify-between items-center">
                <div class="flex items-center gap-[1rem]">
                    <div>
                        <p class="text-[1.6rem] text-[#555]">12-02-25</p>
                    </div>
                </div>
                <div class="">
                    <p class="text-[2rem] text-[#555]"><span class="text-[1.2rem]">PHP</span> 50.00</p>
                </div>
            </li>

        </ul>
    </div>

</div>
</div>
<?= loadPartial('footer'); ?>
