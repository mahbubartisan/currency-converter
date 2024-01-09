<script setup>
import { Input } from "@/plugins/form";
import { Head, Link, useForm } from "@inertiajs/vue3";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: "",
    password: "",
});

const submit = () => {
    form.post(route("store.login"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <Head title="Log in" />

    <div
        class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8"
    >
        <div class="relative py-3 max-w-md mx-auto">
            <div
                class="absolute inset-0 bg-gradient-to-r from-purple-500 to-indigo-700 shadow-lg transform -skew-x-12"
            ></div>
            <div
                class="relative px-4 py-10 bg-white shadow-lg rounded-2xl sm:p-20"
            >
                <!-- Login Form -->
                <div class="max-w-md mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-6">
                        Welcome back!
                    </h2>
                    <form @submit.prevent="submit">
                        <div class="mb-4">
                            <label
                                for="password"
                                class="block text-sm font-medium text-gray-700"
                                >Email</label
                            >
                            <input
                                type="text"
                                v-model="form.email"
                                :error="form.errors.email"
                                required
                                class="bg-slate-50 mt-1 px-4 py-2 w-full border border-gray-300 rounded-md focus:ring-1 focus:ring-indigo-500 focus:outline-none transition duration-300 ease-in-out focus:border-indigo-500 focus:shadow-outline"
                            />
                        </div>
                        <div class="mb-4">
                            <label
                                for="password"
                                class="block text-sm font-medium text-gray-700"
                                >Password</label
                            >
                            <input
                                type="password"
                                v-model="form.password"
                                :error="form.errors.password"
                                required
                                class="bg-slate-50 mt-1 px-4 py-2 w-full border border-gray-300 rounded-md focus:ring-1 focus:ring-indigo-500 focus:outline-none transition duration-300 ease-in-out focus:border-indigo-500 focus:shadow-outline"
                            />
                        </div>
                        <div class="flex items-center justify-between">
                            <button
                                type="submit"
                                class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-md focus:outline-none"
                                :disabled="form.processing"
                            >
                                Login
                            </button>
                            <Link
                                v-if="canResetPassword"
                                :href="route('password.request')"
                                class="text-sm text-indigo-600 hover:text-indigo-700"
                            >
                                Forgot password?
                            </Link>
                            <!-- <a
                                href="#"
                                
                                >Forgot password?</a
                            > -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
