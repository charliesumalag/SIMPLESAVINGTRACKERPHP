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

    <div class="flex-1 relative bg-[#f7f7f7] saving">
        <?php if (empty($savings)): ?>
            <div class="px-[2rem]  bg-white flex flex-col items-center justify-center gap-[2rem] py-[3rem] rounded-2xl">
                <div class="w-full flex items-center justify-center">
                    <img src="../images/piggybank.png" class="w-[10rem]" alt="">
                </div>
                <div class="text-center">
                    <h2 class="text-[1.8rem] font-medium">Ready to start savings?</h2>
                    <p class="text-[1.4rem] text-[#888]">There are no savings yet</p>
                </div>
                <div>
                    <button class="px-[3rem] font-light text-[1.4rem] py-[1rem] text-white bg-[#289245] rounded-[5rem] ">Add Savings</button>
                </div>
            </div>
        <?php else: ?>
            <ul class=" p-[1.6rem] bg-white flex flex-col gap-[1rem] mt-[1rem] pb-[5rem]  bg-[#f6f6f6] ul h-[100%]">
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
                        <div>
                            <a href="#" class="dotsBtn">
                                <img src="../images/dots.png" class="w-[1.6rem] opacity-50 cursor-pointer" alt="">
                            </a>

                            <div class="dropdownMenu absolute right-[2rem] mt-2 w-24 bg-white border rounded-lg shadow-lg hidden">
                                <ul class="text-[1.2rem]">
                                    <li><a href="#" class="block px-3 py-2 hover:bg-gray-100">Edit</a></li>
                                    <li><a href="#" class="block px-3 py-2 text-red-600 hover:bg-gray-100">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <hr>
                <?php endforeach; ?>

            </ul>
            <!-- //modal -->
            <form class="absolute h-[70%] w-full bottom-0 fixed bg-white p-[30px] flex flex-col gap-[1.2rem] hidden modal z-50 overflow-hidden">

                <div class="flex flex-col gap-[0.5rem]">
                    <label for="" class="text-[1.5rem]">Select Member</label>
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
                    <button class="w-[50%] p-1rem bg-[#f3f3ff] text-[#289245] p-[0.8rem] rounded-[5rem] close-modal">Cancel</button>
                    <button class=" w-[50%] p-1rem bg-[#289245] text-white p-[0.8rem] rounded-[5rem]">Add</button>
                </div>
            </form>
            <!-- //end of modal -->
            <div class="overlay hidden absolute w-full h-[100%]  inset-0 bg-black bg-opacity-60 backdrop-blur-sm z-40"></div>
        <?php endif; ?>

        <div class="fixed bottom-[6rem] show-modal right-[1rem] p-[1rem] w-[5rem] h-[5rem] text-white  rounded-[100%] bg-[#289245] flex flex-col items-center justify-center opacity-90">
            <button class="text-[1.8rem] font-bold">+</button>
        </div>



    </div>

    <!-- Footer: Always present at the bottom -->
    <div class="h-[5rem] w-full bg-white py-[3rem] px-[5rem] gap-[1.6rem] flex justify-between fixed bottom-0 left-0 items-center main-menus">
        <div class="w-[2.5rem] flex flex-col items-center gap-2">
            <a href="/adminsavings">
                <img src="../images/walletactive.png" alt="" class="w-full opacity-50">
                <p class="text-[1rem] text-[#289245]">Saving</p>
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
                <img src="../images/member.png" alt="" class="w-full opacity-50">
                <p class="text-[1rem] text-[#555]">Member</p>
            </a>
        </div>
        <div>
            <a href="/adminaccount" class="w-[2.5rem] flex flex-col items-center gap-2 text-[1rem] text-[#555]">
                <img src="../images/account.png" alt="" class="w-full opacity-50">
                <p class="text-[1rem] text-[#555]">Account</p>
            </a>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".dotsBtn").forEach((btn) => {
            btn.addEventListener("click", function(event) {
                event.preventDefault(); // Prevent default action

                let dropdown = this.nextElementSibling; // Selects the corresponding dropdown menu
                dropdown.classList.toggle("hidden");

                // Close other dropdowns when one is opened
                document.querySelectorAll(".dropdownMenu").forEach((menu) => {
                    if (menu !== dropdown) {
                        menu.classList.add("hidden");
                    }
                });
            });
        });

        // Click outside to close all dropdowns
        document.addEventListener("click", function(event) {
            document.querySelectorAll(".dropdownMenu").forEach((menu) => {
                if (!menu.contains(event.target) && !event.target.closest(".dotsBtn")) {
                    menu.classList.add("hidden");
                }
            });
        });
    });

    const showModalEl = document.querySelector('.show-modal');
    const modalFormEl = document.querySelector('.modal');
    const overlayEl = document.querySelector('.overlay');
    const savingList = document.querySelector('.saving');
    const mainMenus = document.querySelector('.main-menus')
    const closeModalEl = document.querySelector('.close-modal');

    const openModal = () => {
        savingList.classList.add('overflow-hidden');
        mainMenus.classList.add('hidden');
        modalFormEl.classList.remove('hidden');
        overlayEl.classList.remove('hidden');
        console.log('show modal clicked')
    }
    const closeModal = (e) => {
        e.preventDefault();

        savingList.classList.remove('overflow-hidden');
        mainMenus.classList.remove('hidden');
        modalFormEl.classList.add('hidden');
        overlayEl.classList.add('hidden');

        modalFormEl.querySelectorAll('input, select').forEach((field) => {
            if (field.type === 'text' || field.type === 'date') {
                field.value = ''; // Clear text & date inputs
            } else if (field.tagName === 'SELECT') {
                field.selectedIndex = 0; // Reset select fields
            }
        });

    }
    showModalEl.addEventListener('click', openModal);
    closeModalEl.addEventListener('click', closeModal);
</script>

<?= loadPartial('footer'); ?>
