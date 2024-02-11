<script setup>
import {Head, Link} from '@inertiajs/vue3';
import PageLayout from "@/Layouts/PageLayout.vue";
</script>

<template>
    <Head title="Tasks Complete" />
    <PageLayout>
        <template v-slot:header>
            Thank you for participating
        </template>

        <template v-slot:paragraph>
            Thank you for participating in our study. You have now completed all interactions with our software required for the second (and final) round of this study. You do not need to remember your login credentials beyond this point. Please click the button below to end your session. Once you have ended your session, you should return to the evaluation form and select the "I was able to successfully authenticate" option.
        </template>

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
    </PageLayout>
</template>
