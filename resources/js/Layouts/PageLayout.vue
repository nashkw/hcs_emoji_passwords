<script setup>
</script>

<template>
    <div class="bg-slate-900 flex flex-col min-h-screen justify-center items-center lg:p-4">
        <div class="flex flex-col text-center py-4 px-4 sm:p-0 justify-center items-center w-full sm:max-w-6xl">
            <h1 class="block text-2xl font-bold text-white sm:text-4xl">
                <slot name="header" />
            </h1>

            <p class="mt-3 text-lg text-gray-300">
                <slot name="paragraph" />
            </p>

            <p class="mt-3 text-lg text-gray-300">
              <slot name="paragraph2" />
            </p>

            <slot />
        </div>
    </div>
</template>
