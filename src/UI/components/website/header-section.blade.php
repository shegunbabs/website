<div {{ $attributes->merge(["class" => "md:flex md:items-center md:justify-between md:space-x-5 py-8"]) }}>
    <div class="flex items-center space-x-5">
        <div class="flex-shrink-0">
            <div class="relative">
                <img class="h-16 w-16 lg:h-24 lg:w-24 rounded-full border border-white/10"
                     src="https://xsgames.co/randomusers/avatar.php?g=female" alt="image">
                <span class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></span>
            </div>
        </div>
        <div class="pt-1.5">
            <h1 class="lg:text-xl text-black dark:text-white flex">
                <x-icons.solid.battery-100 class="w-5 mr-1 -rotate-90" />
                <span class="">Olusegun Babatunde</span>
            </h1>
            <p class="text-sm font-light text-neutral-500">
                Software Engineer in Ottawa
            </p>
            <p>
                <a class="text-xs underline hover:no-underline duration-200 dark:text-white" href="#">shegunbabs.com</a>
            </p>
        </div>
    </div>
</div>
