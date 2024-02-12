<script setup>
defineProps({
    message: {
        type: String,
    },
});
</script>

<template>
    <div v-show="message">
        <p class="mt-2 text-sm text-amber-600">
            {{ message }}
        </p>
    </div>
</template>
