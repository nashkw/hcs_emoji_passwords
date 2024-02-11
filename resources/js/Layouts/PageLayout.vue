<script setup>
</script>

<template>
    <div class="bg-slate-900 flex flex-col min-h-screen justify-center lg:p-48">
        <div class="flex flex-col text-center py-10 px-4 sm:px-6 lg:px-8 justify-center items-center w-full">
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
