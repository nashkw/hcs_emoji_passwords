<script setup>
import { Head } from '@inertiajs/vue3';
import PageLayout from "@/Layouts/PageLayout.vue";
import ArrowButton from "@/Components/ArrowButton.vue";
</script>

<template>
    <Head title="Select Your Pathway" />
    <PageLayout>
        <template v-slot:header>
            Select your pathway
        </template>

        <template v-slot:paragraph>
            There are two groups of participants in this study: "Group A" and "Group B". You should be aware which group you are a part of. If you are unsure, please ask the study coordinator. There are two sessions involved in this study. The first session will be the first time you are using this interface. The second session will take place one week after the first session. Likewise, if you are unsure which session you are participating in please ask the study coordinator.
        </template>

        <template v-slot:paragraph2>
            Please select the option below that matches your current circumstances.
        </template>

        <div class="hcs-button-container flex-col">
            <ArrowButton
                v-if="$page.props.auth.user"
                text="Finish session"
                :href="route('logout')"
                :is-post="true"
            />
            <ArrowButton
                class="w-full"
                v-if="!$page.props.auth.user"
                text="I am part of Group A and this is my first session"
                :href="route('a.register')"
            />
            <ArrowButton
                class="w-full"
                v-if="!$page.props.auth.user"
                text="I am part of Group A and this is my second session"
                :href="route('a.login')"
            />
            <ArrowButton
                class="w-full"
                v-if="!$page.props.auth.user"
                text="I am part of Group B and this is my first session"
                :href="route('b.register')"
            />
            <ArrowButton
                class="w-full"
                v-if="!$page.props.auth.user"
                text="I am part of Group B and this is my second session"
                :href="route('b.login')"
            />
        </div>
    </PageLayout>
</template>

<style>
</style>
