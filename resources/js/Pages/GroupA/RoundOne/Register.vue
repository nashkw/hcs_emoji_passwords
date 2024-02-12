<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import SubmitButton from '@/Components/SubmitButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';
import PageLayout from "@/Layouts/PageLayout.vue";

const form = useForm({
    username: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('a.register'), {
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
            class="hcs-form space-y-4"
            @submit.prevent="submit"
        >
            <div>
                <InputLabel
                    for="username"
                    value="Username"
                />
                <TextInput
                    id="username"
                    type="text"
                    v-model="form.username"
                    required
                />
                <InputError :message="form.errors.username" />
            </div>

            <div>
                <InputLabel
                    for="password"
                    value="Password"
                />
                <TextInput
                    id="password"
                    type="password"
                    v-model="form.password"
                    required
                />
                <InputError :message="form.errors.password" />
            </div>

            <div>
                <InputLabel
                    for="password_confirmation"
                    value="Confirm Password"
                />
                <TextInput
                    id="password_confirmation"
                    type="password"
                    v-model="form.password_confirmation"
                    required
                />
                <InputError :message="form.errors.password_confirmation" />
            </div>

            <SubmitButton
                :processing="form.processing"
                text="Create account"
            />
        </form>
    </PageLayout>
</template>
