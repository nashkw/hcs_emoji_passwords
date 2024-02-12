<script setup>
import { Head } from '@inertiajs/vue3';
import PageLayout from "@/Layouts/PageLayout.vue";
import ArrowButton from "@/Components/ArrowButton.vue";
</script>

<template>
    <Head title="Welcome" />
    <PageLayout>
        <template v-slot:header>
            Improving Passwords Using Emojis
        </template>

        <template v-slot:paragraph>
            This study is intended to gather data about password usability and security. You may withdraw from this study at any time. If you have any questions at any point please feel free to ask the study coordinator. Any and all information you enter during this study will be recorded anonymously. Please do not enter any identifying information. If you have any concerns about the study or the data that is being stored please feel free to discuss these with the study coordinator.
        </template>

        <template v-slot:paragraph2>
            By clicking the button below you are agreeing to take part in this study. You are confirming that you are over the age of 16 and that you have no impairments that might limit your understanding or communication. You are consenting to any data you enter as a part of this study being recorded and viewed by the creators of this study.
        </template>

        <div class="hcs-button-container">
            <ArrowButton
                v-if="$page.props.auth.user"
                text="Finish session"
                :href="route('logout')"
                :is-post="true"
            />
            <ArrowButton
                v-else
                text="I acknowledge the above and consent"
                :href="route('select')"
            />
        </div>
    </PageLayout>
</template>

<style>
</style>
