<script setup>
import {Head, useForm} from '@inertiajs/vue3';
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import SubmitButton from "@/Components/SubmitButton.vue";
import PageLayout from "@/Layouts/PageLayout.vue";

const form = useForm({
    username: '',
    password: '',
});

const submit = () => {
    form.post(route('b.remember'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Recall Login Details" />
    <PageLayout>
        <template v-slot:header>
            Please enter your login details
        </template>

        <template v-slot:paragraph>
            Please re-enter the login details you entered previously. If you do not succeed on the first try you will have unlimited opportunities to try again. If you are unable to login and do not wish to make any further attempts please return to the evaluation form and select the "I was unable to successfully authenticate" option. All combinations of credentials you enter will be recorded and viewed by the creators of this study so please do not include any identifying details. Do not at any point enter a password that you use (or plan to use) for any accounts outside of this study.
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
                    autofocus
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

            <SubmitButton
                :processing="form.processing"
                text="I have re-entered my login details"
            />
        </form>
    </PageLayout>
</template>
