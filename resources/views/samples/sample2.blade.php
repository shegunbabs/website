<x-web-layout>
    <section class="mx-auto max-w-xl">
        <div class="py-10 px-8">
            <div class="md:flex md:items-center md:justify-between md:space-x-5 py-8">
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
            <div class="mt-12 text-sm font-light"><p class="text-black dark:text-white">About</p>
                <div class="text-neutral-500 dark:text-neutral-400 space-y-3 mt-3">
                    <p>
                        Over the last 7years, I've been a versatile problem solver who has actively collaborated with
                        start-ups, financial institutions & agencies.
                    </p>
                    <p>
                        I'm a Full-Stack Developer, an entrepreneur, a people believer and an optimist.
                        I am on a mission to discover great adventures and solutions in the world of software and web development.
                    </p>
                    <p>
                        I develop web applications, code user interfaces, have experience with cloud infrastructure,
                        mentor young inexperienced developers, contribute and encourage teams who share
                        the same enthusiasm as I do.
                    </p>
                    <p>
                        I am skilled in leading software projects and have the ability to
                        manage, mentor, and hire software engineers.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-xl">
        <div class="grid gap-12 md:gap-20 px-8">
            <div class="text-sm font-light">
                <p class="text-black dark:text-white">Relevant work experience</p>
                <div class="grid gap-6 mt-2">
                    <div class="grid grid-cols-1 md:grid-cols-3">
                        <div class="text-neutral-500 text-xs">
                            <p>Dec. 2021</p>
                        </div>
                        <div class="md:col-span-2 w-full">
                            <p class="text-neutral-800 dark:text-white">
                                <a href="#" class="text-sm underline hover:no-underline duration-200 after:content-['↱']">Capitalsage Technology </a>
                            </p>
                            <p>
                                <span class="text-neutral-500">Software engineer</span>
                            </p>
{{--                            <ul class="text-neutral-400 list-disc list-inside">--}}
{{--                                <li>Lead a team of softwar eengineers</li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3">
                        <div class="text-neutral-500 text-xs">
                            <p>Dec. 2021</p>
                        </div>
                        <div class="md:col-span-2 w-full">
                            <p class="text-neutral-800 dark:text-white">
                                <a href="#" class="underline hover:no-underline duration-200 after:content-['↱']">Daleth Mem Ltd. </a>
                                <span class="ml-2">[Software engineer]</span>
                            </p>
                            <p class="text-neutral-500">
                                Ibadan, Nigeria.
                            </p>
                            <div class="pt-1">
                                @php
                                $skils = ['Java', 'PHP', 'JavaScript', 'Nodejs', 'Python'];
                                @endphp
                                <p class="text-xs text-neutral-500 inline-flex">
                                    Skills:
                                </p>
                                @foreach($skils as $skill)
                                    <span class="inline-flex items-center rounded-full bg-slate-100 dark:bg-slate-800 px-1.5 py-0.5 text-xs font-medium text-gray-600 dark:text-gray-400 ring-1 ring-inset ring-slate-500/30">
                                        {{ $skill }}
                                    </span>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-web-layout>
