<script setup>
import {Head, useForm} from '@inertiajs/vue3';
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

const form = useForm({
    username: '',
    password: '',
});

const submit = () => {
    form.post(route('remember'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Recall Login Details" />
    <div class="bg-slate-900 flex flex-col min-h-screen justify-center lg:p-48">
        <div class="flex flex-col text-center py-10 px-4 sm:px-6 lg:px-8 justify-center items-center">
            <h1 class="block text-2xl font-bold text-white sm:text-4xl">
                Please enter your login details.
            </h1>

            <p class="mt-3 text-lg text-gray-300">
                Please re-enter the login details you entered previously. If you do not succeed on the first try you will have unlimited opportunities to try again. If you are unable to login and do not wish to make any further attempts please return to the evaluation form and select the "I was unable to successfully authenticate" option. All combinations of credentials you enter will be recorded and viewed by the creators of this study so please do not include any identifying details. Do not at any point enter a password that you use (or plan to use) for any accounts outside of this study.
            </p>

            <form
                class="text-start flex flex-col w-full sm:max-w-xl px-6 py-4 "
                @submit.prevent="submit"
            >
                <div>
                    <InputLabel for="username" value="Username" />

                    <TextInput
                        id="username"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.username"
                        required
                        autofocus
                        autocomplete="username"
                    />

                    <InputError class="mt-2" :message="form.errors.username" />
                </div>

                <div class="mt-4">
                    <InputLabel for="password" value="Password" />

                    <TextInput
                        id="password"
                        type="password"
                        class="mt-1 block w-full"
                        v-model="form.password"
                        required
                        autocomplete="current-password"
                    />

                    <InputError class="mt-2" :message="form.errors.password" />
                </div>

                <div class="flex items-center justify-center mt-6">
                    <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        I have re-entered my login details
                        <svg
                            class="w-3 h-3"
                            fill="none"
                            height="16"
                            viewBox="0 0 16 16"
                            width="16"
                            aria-hidden="true"
                        >
                            <path
                                d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-width="2"
                            />
                        </svg>
                    </PrimaryButton>
                </div>
            </form>
        </div>
    </div>
</template>
