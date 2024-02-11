<script setup>
import {Head, Link} from '@inertiajs/vue3';
</script>

<template>
    <Head title="Intermediary Task" />
    <div class="bg-slate-900 flex flex-col min-h-screen justify-center lg:p-48">
        <div class="flex flex-col text-center py-10 px-4 sm:px-6 lg:px-8">
            <h1 class="block text-2xl font-bold text-white sm:text-4xl">
                Thank you for creating an account.
            </h1>
            <p class="mt-3 text-lg text-gray-300">
                Please navigate back to the form you were filling out previously. You will be directed to return back to this screen after completing a short task. Dolor sit amet consectetur adipiscing. Mattis rhoncus urna neque viverra. Integer quis auctor elit sed vulputate mi sit. Lacus luctus accumsan tortor posuere. Consectetur adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet dictum sit. Odio aenean sed adipiscing diam donec adipiscing tristique risus.
            </p>
            <div class="mt-5 flex flex-col justify-center items-center gap-2 sm:flex-row sm:gap-3">
                <Link
                    v-if="$page.props.auth.user"
                    :href="route('remember')"
                    as="button"
                    class="hcs-button"
                >
                    I have finished the intermediary task
                    <svg
                        class="w-3 h-3"
                        fill="none"
                        height="16"
                        viewBox="0 0 16 16"
                        width="16"
                        aria-hidden="true"
                    >
                        <path
                            d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-width="2"
                        />
                    </svg>
                </Link>
            </div>
        </div>
    </div>
</template>
