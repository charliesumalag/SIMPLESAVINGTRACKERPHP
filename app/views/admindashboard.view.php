<?php

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
        <div>
            <p class="text-[#e6e6e6] text-center text-[1.4rem]">Total Savings</p>
            <p class="text-[#e6e6e6] text-[3rem] font-bold text-center">Php 3,000.00</p>
        </div>
        <nav class="flex justify-center gap-[2rem] px-[2rem] py-[5rem]">
            <button class="bg-white font-medium cursor-pointer text-[#222] px-[2rem] py-[1rem] rounded-[4rem]"><i class="fa-solid fa-plus text-[1.2rem]"></i> Savings</button>
            <button class="bg-white font-medium cursor-pointer text-[#222] px-[3rem] py-[1rem] rounded-[4rem]"><i class="fa-solid fa-plus text-[1.2rem]"></i> Loan</button>
        </nav>
    </header>
    <!-- Main Content Area (Flex 1 to take remaining space) -->
    <div class="mt-[2rem] mx-[5px] px-[2rem] bg-white flex flex-col flex-1 py-[3rem] rounded-t-[3rem]">
        <h2 class="mb-[1.6rem]">Saving History</h2>
        <ul class="flex flex-col gap-[1rem]">
            <li class="flex justify-between items-center">
                <div class="flex items-center gap-[1rem]">
                    <i class="fa-solid fa-circle-user text-[3rem]"></i>
                    <div>
                        <p class="text-[#289245]">Charlie</p>
                        <p class="text-[1rem] text-[#888]">10-12-25</p>
                    </div>
                </div>
                <div class="">
                    <p class="text-[2rem] text-[#555]"><span class="text-[1.2rem]">PHP</span> 50.00</p>
                </div>
            </li>
            <li class="flex justify-between items-center">
                <div class="flex items-center gap-[1rem]">
                    <i class="fa-solid fa-circle-user text-[3rem]"></i>
                    <div>
                        <p class="text-[#289245]">Mabby</p>
                        <p class="text-[1rem] text-[#888]">10-12-25</p>
                    </div>
                </div>
                <div class="">
                    <p class="text-[2rem] text-[#555]"><span class="text-[1.2rem]">PHP</span> 100.00</p>
                </div>
            </li>
            <li class="flex justify-between items-center">
                <div class="flex items-center gap-[1rem]">
                    <i class="fa-solid fa-circle-user text-[3rem]"></i>
                    <div>
                        <p class="text-[#289245]">Clyt</p>
                        <p class="text-[1rem] text-[#888]">10-12-25</p>
                    </div>
                </div>
                <div class="">
                    <p class="text-[2rem] text-[#555]"><span class="text-[1.2rem]">PHP</span> 200.00</p>
                </div>
            </li>
            <li class="flex justify-between items-center">
                <div class="flex items-center gap-[1rem]">
                    <i class="fa-solid fa-circle-user text-[3rem]"></i>
                    <div>
                        <p class="text-[#289245]">Jodiel</p>
                        <p class="text-[1rem] text-[#888]">10-12-25</p>
                    </div>
                </div>
                <div class="">
                    <p class="text-[2rem] text-[#555]"><span class="text-[1.2rem]">PHP</span> 150.00</p>
                </div>
            </li>
        </ul>
    </div>
</div>
</div>
<?= loadPartial('footer'); ?>


<!-- <?= loadPartial('head') ?>
<div class="w-full h-screen bg-[#289245]">
    <header class="bg-[#289245] px-[2rem] py-[3rem] flex flex-col gap-[2rem] font-inherit">
        <h1 class="text-[2rem] text-white ">Hello admin</h1>
        <div>
            <p class="text-[#e6e6e6] text-center text-[1.4rem]">Total Savings</p>
            <p class="text-[#e6e6e6] text-[3rem] font-bold text-center">Php 3,000.00</p>
        </div>
        <nav class="flex justify-center gap-[2rem]">
            <button class="bg-white font-medium cursor-pointer text-[#222]  px-[2rem] py-[1rem] rounded-[4rem]"><i class="fa-solid fa-plus text-[1.2rem]"></i> Savings</button>
            <button class="bg-white font-medium cursor-pointer text-[#222]   px-[3rem] py-[1rem] rounded-[4rem]"><i class="fa-solid fa-plus text-[1.2rem]"></i> Loan</button>
        </nav>
    </header>
    <div class="py-[0.8rem] flex-1">
        <div class="mt-[2rem] px-[2rem] bg-white py-[3rem] rounded-t-[3rem]">
            <h2 class="mb-[1.6rem]">History</h2>
            <ul class="flex flex-col gap-[1rem]">
                <li class="flex justify-between items-center">
                    <div class="flex items-center gap-[1rem]">
                        <i class="fa-solid fa-circle-user text-[3rem]"></i>
                        <div>
                            <p>Charlie</p>
                            <p class="text-[1rem]">10-12-25</p>
                        </div>
                    </div>
                    <div class="">
                        <p class="text-[2rem]"><span class="text-[1.2rem]">PHP</span> 50.00</p>
                    </div>
                </li>
                <li class="flex justify-between items-center">
                    <div class="flex items-center gap-[1rem]">
                        <i class="fa-solid fa-circle-user text-[3rem]"></i>
                        <div>
                            <p>Mabby</p>
                            <p class="text-[1rem]">10-12-25</p>
                        </div>
                    </div>
                    <div class="">
                        <p class="text-[2rem]"><span class="text-[1.2rem]">PHP</span> 100.00</p>
                    </div>
                </li>
                <li class="flex justify-between items-center">
                    <div class="flex items-center gap-[1rem]">
                        <i class="fa-solid fa-circle-user text-[3rem]"></i>
                        <div>
                            <p>Clyt</p>
                            <p class="text-[1rem]">10-12-25</p>
                        </div>
                    </div>
                    <div class="">
                        <p class="text-[2rem]"><span class="text-[1.2rem]">PHP</span> 200.00</p>
                    </div>
                </li>
                <li class="flex justify-between items-center">
                    <div class="flex items-center gap-[1rem]">
                        <i class="fa-solid fa-circle-user text-[3rem]"></i>
                        <div>
                            <p>Jodiel</p>
                            <p class="text-[1rem]">10-12-25</p>
                        </div>
                    </div>
                    <div class="">
                        <p class="text-[2rem]"><span class="text-[1.2rem]">PHP</span> 150.00</p>
                    </div>
                </li>
                <li class="flex justify-between items-center">
                    <div class="flex items-center gap-[1rem]">
                        <i class="fa-solid fa-circle-user text-[3rem]"></i>
                        <div>
                            <p>Chris</p>
                            <p class="text-[1rem]">10-12-25</p>
                        </div>
                    </div>
                    <div class="">
                        <p class="text-[2rem]"><span class="text-[1.2rem]">PHP</span> 50.00</p>
                    </div>
                </li>
                <li class="flex justify-between items-center">
                    <div class="flex items-center gap-[1rem]">
                        <i class="fa-solid fa-circle-user text-[3rem]"></i>
                        <div>
                            <p>Jhez</p>
                            <p class="text-[1rem]">10-12-25</p>
                        </div>
                    </div>
                    <div class="">
                        <p class="text-[2rem]"><span class="text-[1.2rem]">PHP</span> 100.00</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>



<?= loadPartial('footer'); ?> -->
