<script setup>
import ArrowIcon from "@/Components/ArrowIcon.vue";

const props = defineProps({
    processing: {
        type: Boolean,
        required: true,
    },
    text: {
        type: String,
        required: true,
    },
});
</script>

<template>
  <div class="flex items-center justify-center">
      <button
          class="ms-4 hcs-button"
          :class="{ 'opacity-25': processing }"
          :disabled="processing"
      >
        {{ text }}
          <ArrowIcon />
      </button>
  </div>
</template>
