<script setup>
import {Link} from "@inertiajs/vue3";
import ArrowIcon from "@/Components/ArrowIcon.vue";

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    text: {
        type: String,
        required: true,
    },
    isPost: {
        type: Boolean,
        default: false,
    },
});
</script>

<template>
    <Link
        :href="href"
        :method="isPost ? 'post' : ''"
        as="button"
        class="hcs-button"
    >
        {{ text }}
        <ArrowIcon />
    </Link>
</template>
