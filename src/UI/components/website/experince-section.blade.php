<section class="mx-auto max-w-2xl">
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
