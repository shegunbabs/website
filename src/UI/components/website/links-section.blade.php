<div {{ $attributes->merge(["class" => "mt-6 text-sm font-light"]) }}>
    <div class="space-x-3">
        <a wire:navigate href="{{ route('website.index') }}" class="text-black dark:text-white {{ request()->route()->named('website.index') ? 'font-bold' : '' }}">
            About
        </a>
        <a wire:navigate href="{{ route('website.work') }}" class="text-black dark:text-white {{ request()->route()->named('website.work') ? 'font-bold' : '' }}">
            Work
        </a>
        <a wire:navigate href="{{ route('website.blog-list') }}" class="text-black dark:text-white {{ request()->route()->named('website.blog-list') ? 'font-bold' : '' }}">
            Blog
        </a>

        <a wire:navigate href="#" class="text-black dark:text-white">
            Random Things
        </a>
    </div>
</div>
