<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';
import PageLayout from "@/Layouts/PageLayout.vue";

const form = useForm({
    username: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Register" />
    <PageLayout>
        <template v-slot:header>
          Create your login details
        </template>

        <template v-slot:paragraph>
          Please enter a username and password. You will be asked to recall these login credentials at a later date, so try to remember them. Please do not write down or otherwise record these credentials. The credentials you enter will be recorded and viewed by the creators of this study so please do not include any identifying details. Do not use a password that you use (or plan to use) for any accounts outside of this study.
        </template>

        <form
            class="text-start flex flex-col w-full sm:max-w-xl px-6 py-4 "
            @submit.prevent="submit"
        >
            <div class="mt-4">
                <InputLabel for="username" value="Username" />
                <TextInput
                    id="username"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.username"
                    required
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
                    autocomplete="new-password"
                />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel for="password_confirmation" value="Confirm Password" />
                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />
                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </PrimaryButton>
            </div>
        </form>
    </PageLayout>
</template>
