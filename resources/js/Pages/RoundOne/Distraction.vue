<script setup>
import {Head} from '@inertiajs/vue3';
import PageLayout from "@/Layouts/PageLayout.vue";
import ArrowButton from "@/Components/ArrowButton.vue";
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

        <div class="hcs-button-container">
            <ArrowButton
                text="I have finished the intermediary task"
                :href="route('remember')"
            />
        </div>
    </PageLayout>
</template>
