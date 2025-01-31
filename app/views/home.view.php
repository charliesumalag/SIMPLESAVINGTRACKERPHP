<?= loadPartial('head') ?>
<div class="l-main-container">
    <header class="w-full h-[30vh] relative bg-[url('../images/grab.png')] bg-no-repeat bg-cover before:content-[''] before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-black before:opacity-50 before:z-[1]">
        <div class="absolute top-[25%] left-[3rem] w-[50%]">
            <h1 class="relative z-[2] text-white text-center text-[3rem]">Rider Savings Tracker</h1>
        </div>
    </header>
    <form action="" class="mt-[2rem] p-[1rem] flex flex-col gap-[2rem]">
        <div class="w-full relative">
            <i class="fa-solid fa-envelope absolute text-[#999] top-[50%] left-[1.4rem] -translate-y-1/2"></i>
            <input class="w-full p-[1rem_3.6rem] outline-none rounded-[2rem] border-[0.5px] border-[#999] text-[#999] font-inherit bg-transparent" type="text" placeholder="Email">
        </div>
        <div class="w-full relative">
            <i class="fa-solid fa-lock absolute text-[#999] top-[50%] left-[1.4rem] -translate-y-1/2"></i>
            <input class="w-full p-[1rem_3.6rem] outline-none rounded-[2rem] border-[0.5px] border-[#999] text-[#999] font-inherit bg-transparent" type="text" placeholder="Password">
        </div>
        <div class="w-full relative">
            <button class="w-full p-[1rem_1rem] rounded-[2rem] bg-[#289245] border-0 text-white text-[1.6rem] font-inherit">Login</button>
        </div>
    </form>
    <p class="text-[1.3rem] text-[#999] px-[2rem]">Don't have an account? <a href="/register"><span class="text-[#289245]">Register</span></a></p>
</div>

<?= loadPartial('footer'); ?>
