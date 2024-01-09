<template>
    <div class="flex">
        <!-- Header with Toggle Button -->
        <header
            class="w-full bg-white fixed z-40 shadow-lg flex items-center justify-between px-4 py-4"
        >
            <div class="flex items-center">
                <!-- Logo or Site Name -->
                <div class="text-3xl font-bold text-indigo-700 ml-6">
                    AdminO
                </div>

                <!-- Hamburger Icon -->
                <button
                    id="sidebarToggle"
                    class="text-blue-900 focus:outline-none focus:text-blue-700 md:hidden ml-16 stroke-2"
                >
                    <svg
                        class="w-7 h-7"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            strokeLinecap="round"
                            strokeLinejoin="round"
                            strokeWidth="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        ></path>
                    </svg>
                </button>
            </div>
            <ProfileComponent />
        </header>

        <leftAside />
        <!-- Content -->
        <main class="flex-1 bg-slate-100 p-6 mt-16 overflow-y-hidden">
            <!-- Content Area -->
            <div class="">
                <h2
                    v-if="title"
                    class="text-2xl font-semibold text-blue-900 mb-4"
                >
                    {{ title }}
                </h2>
            </div>

            <slot></slot>
            <!-- Footer -->
            <!-- <footer class="bottom-0 left-1/2 text-center">
                <p class="text-sm font-medium text-slate-700">
                    &copy; 2023
                    <span class="text-indigo-700 font-bold">AdminO</span>. All
                    rights reserved.
                </p>
            </footer> -->
        </main>
    </div>
</template>

<script setup>
import leftAside from "@/Components/leftAside/Index.vue";
import ProfileComponent from "@/Components/ProfileComponent.vue";

defineProps({
    title: {
        type: String,
        default: null,
    },
});
</script>
