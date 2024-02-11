<script setup>
import {Head, Link} from '@inertiajs/vue3';
import PageLayout from "@/Layouts/PageLayout.vue";
</script>

<template>
    <Head title="Intermediary Task" />
    <PageLayout>
        <template v-slot:header>
            Thank you for creating an account
        </template>

        <template v-slot:paragraph>
            Please navigate back to the form you were filling out previously. Do not close this tab as you will be asked to return back to this screen after completing a short task. Once you return, you should click the button below to proceed.
        </template>

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
    </PageLayout>
</template>
