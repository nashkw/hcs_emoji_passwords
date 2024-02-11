<script setup>
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Welcome" />
    <div class="bg-slate-900 flex flex-col min-h-screen justify-center lg:p-48">
        <div class="flex flex-col text-center py-10 px-4 sm:px-6 lg:px-8">
            <h1 class="block text-2xl font-bold text-white sm:text-4xl">
                Improving Passwords Using Emojis
            </h1>
            <p class="mt-3 text-lg text-gray-300">
                This study is intended to gather data about password usability and security. You may withdraw from this study at any time. If you have any questions at any point please feel free to ask the study coordinator. Any and all information you enter during this study will be recorded anonymously. Please do not enter any identifying information. If you have any concerns about the study or the data that is being stored please feel free to discuss these with the study coordinator.
            </p>
            <p class="mt-3 text-lg text-gray-300">
                By clicking next you are agreeing to take part in this study. You are confirming that you are over the age of 16 and that you have no impairments that might limit your understanding or communication. You are consenting to any data you enter as a part of this study being recorded and viewed by the creators of this study.
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

                <Link
                    v-if="!$page.props.auth.user"
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
