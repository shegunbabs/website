<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new
#[Layout('layouts.website')]
#[\Livewire\Attributes\Title('Welcome to shegunbabs.com')]
class extends Component {

}
?>

<div>
    <x-website.section class="max-w-2xl py-6 px-6">


            <x-website.header-section />

            <x-website.links-section />

            <div class="text-sm font-light mt-8">
                <div class="text-neutral-800 dark:text-neutral-400 space-y-3">
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

    </x-website.section>

</div>

