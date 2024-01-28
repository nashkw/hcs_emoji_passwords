<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Welcome" />
    <div class="bg-slate-900 flex flex-col min-h-screen justify-center lg:p-48">
        <div class="flex flex-col text-center py-10 px-4 sm:px-6 lg:px-8">
            <h1 class="block text-2xl font-bold text-white sm:text-4xl">
                Improving Passwords Using Emojis
            </h1>
            <p class="mt-3 text-lg text-gray-300">
                This experiment is lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor sit amet consectetur adipiscing. Mattis rhoncus urna neque viverra. Integer quis auctor elit sed vulputate mi sit. Lacus luctus accumsan tortor posuere. Consectetur adipiscing elit ut aliquam purus sit amet luctus. Laoreet sit amet cursus sit amet dictum sit. Odio aenean sed adipiscing diam donec adipiscing tristique risus. Viverra nibh cras pulvinar mattis nunc. Accumsan in nisl nisi scelerisque eu ultrices vitae auctor. In est ante in nibh mauris cursus mattis. Commodo nulla facilisi nullam vehicula ipsum a arcu. Massa massa ultricies mi quis hendrerit dolor magna eget est. Ultrices gravida dictum fusce ut placerat orci nulla pellentesque.
            </p>
            <p class="mt-3 text-lg text-gray-300">
                By clicking next you are agreeing to lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor sit amet consectetur adipiscing. Mattis rhoncus urna neque viverra. Integer quis auctor elit sed vulputate mi sit.
            </p>
            <div class="mt-5 flex flex-col justify-center items-center gap-2 sm:flex-row sm:gap-3">
                <Link
                    v-if="$page.props.auth.user"
                    :href="route('dashboard')"
                    class="w-full sm:w-auto py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-white text-gray-800 hover:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                >
                    Dashboard
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

                <Link
                    v-if="!$page.props.auth.user && canRegister"
                    :href="route('register')"
                    class="hcs-button"
                >
                    This is my first session
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

                <Link
                    v-if="!$page.props.auth.user"
                    :href="route('login')"
                    class="hcs-button"
                >
                    This is my second session
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

<style>
</style>
