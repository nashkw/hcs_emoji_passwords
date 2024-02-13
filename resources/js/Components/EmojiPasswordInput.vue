<script setup>
import { onMounted, ref } from 'vue';

const model = defineModel({
    type: String,
    required: true,
});

const input = ref(null);
const passwordFocus = ref(false);

const emojis = ['🍴', '⛱', '🎉', '🌏', '🍰', '🏙', '🏀', '❣', '🏊', '🕞', '🏓', '🍕', '🐲', '💖'];

const addEmojiToPassword = (emoji) => {
    model.value += emoji;
    setTimeout(() => { input.value.focus(); }, 0);
}

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <div class="bg-slate-800 rounded-md border-none p-2 mt-1">
        <input
            class="mt-1 block w-full bg-slate-300 border-slate-300 focus:bg-slate-100 focus:border-amber-600 focus:ring-amber-600 rounded-md shadow-sm text-slate-900"
            v-model="model"
            @focus="passwordFocus = true"
            @blur="passwordFocus = false"
            ref="input"
            required
        />
        <!--type="password"-->

        <div class="grid grid-cols-7 grid-rows-2 gap-2 mt-2">
            <div
                class="hcs-emoji-button"
                :class="{ 'bg-slate-100 hover:bg-slate-300 focus:bg-slate-400': passwordFocus, 'bg-slate-300 hover:bg-slate-400 focus:bg-slate-500': !passwordFocus }"
                v-for="(emoji, id) in emojis"
                :key="id"
                @mousedown="addEmojiToPassword(emoji)"
            >
                {{ emoji }}
            </div>
        </div>
    </div>
</template>
