<template>
    <div class="relative">
        <button
            @click="toggleDropdown = !toggleDropdown"
            class="profile-button flex items-center text-sm font-medium text-slate-700 focus:outline-none"
        >
            <span class="hidden md:inline-block ml-2">Welcome, Admin</span>
            <img
                class="h-8 w-8 ml-2 rounded-full"
                src="https://static.vecteezy.com/system/resources/previews/002/002/403/original/man-with-beard-avatar-character-isolated-icon-free-vector.jpg"
                alt="Profile Image"
            />
        </button>
        <!-- {{ toggleDropdown }} -->
        <div
            v-if="toggleDropdown"
            class="absolute right-0 mt-2 w-48 bg-white border rounded-lg shadow-lg"
        >
            <div class="flex items-center px-4 py-2 bg-blue-600 rounded-t-md">
                <p class="ml-2 text-white text-sm">{{ $page.props.auth.user.email }}</p>
            </div>
            <div class="border-t border-slate-200 mb-2"></div>
            <a
                href="#"
                class="group flex block px-4 py-2 text-sm font-medium text-slate-700 hover:text-blue-500 hover:bg-blue-50 transition duration-300 easy-in-out"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-5 w-5 text-slate-400 mr-2 group-hover:text-blue-500"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                </svg>

                Profile
            </a>
            <a
                href="#"
                class="group flex block px-4 py-2 text-sm font-medium text-slate-700 hover:text-blue-500 hover:bg-blue-50 transition duration-300 easy-in-out"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-5 w-5 text-slate-400 mr-2 group-hover:text-blue-500"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z"
                    />
                </svg>

                Change Password
            </a>
            <div class="border-t border-gray-200 my-1"></div>
            <button
                @click="logout"
                class="flex w-full px-4 py-2 mb-1 text-sm font-medium text-red-500 hover:bg-red-50 transition duration-150 easy-in-out"
            >
                <svg
                    class="h-5 w-5 text-red-500 mr-2"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                >
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                    <polyline points="16 17 21 12 16 7" />
                    <line x1="21" y1="12" x2="9" y2="12" />
                </svg>

                Sign Out
            </button>
        </div>
    </div>
</template>

<script setup>
import { router, Link } from "@inertiajs/vue3";
import { ref } from "vue";

const toggleDropdown = ref(false);

const logout = () => {
    router.post(route("logout"));
};
</script>
