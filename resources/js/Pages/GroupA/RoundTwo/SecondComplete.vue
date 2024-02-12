<script setup>
import {Head} from '@inertiajs/vue3';
import PageLayout from "@/Layouts/PageLayout.vue";
import ArrowButton from "@/Components/ArrowButton.vue";
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

        <div class="hcs-button-container">
            <ArrowButton
                text="Finish session"
                :href="route('logout')"
                :is-post="true"
            />
        </div>
    </PageLayout>
</template>
