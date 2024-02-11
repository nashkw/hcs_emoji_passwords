<script setup>
import {Head, Link} from '@inertiajs/vue3';
</script>

<template>
    <Head title="Tasks Complete" />
    <div class="bg-slate-900 flex flex-col min-h-screen justify-center lg:p-48">
        <div class="flex flex-col text-center py-10 px-4 sm:px-6 lg:px-8">
            <h1 class="block text-2xl font-bold text-white sm:text-4xl">
                Thank you for participating
            </h1>
            <p class="mt-3 text-lg text-gray-300">
                Thank you for participating in our study. You have now completed all interactions with our software required for the first round of this study. You should remember your login credentials as you will be asked to recall them in the second round of this study. Please do not write down or otherwise record your credentials. Please click the button below to end your session. Once you have ended your session, you should return to the evaluation form and select the "I was able to successfully authenticate" option.
            </p>
            <div class="mt-5 flex flex-col justify-center items-center gap-2 sm:flex-row sm:gap-3">
                <Link
                    v-if="$page.props.auth.user"
                    :href="route('logout')"
                    method="post"
                    as="button"
                    class="hcs-button"
                >
                    Finish session
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
