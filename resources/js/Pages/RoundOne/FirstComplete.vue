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
            Thank you for participating in our study. You have now completed all interactions with our software required for the first round of this study. You should remember your login credentials as you will be asked to recall them in the second round of this study. Please do not write down or otherwise record your credentials. Please click the button below to end your session. Once you have ended your session, you should return to the evaluation form and select the "I was able to successfully authenticate" option.
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
