<script setup>
import { onMounted, ref } from 'vue';

const model = defineModel({
    type: String,
    required: true,
});

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <input
        class="bg-slate-300 border-slate-300 focus:bg-slate-100 focus:border-amber-600 focus:ring-amber-600 rounded-md shadow-sm text-slate-900"
        v-model="model"
        ref="input"
    />
</template>
