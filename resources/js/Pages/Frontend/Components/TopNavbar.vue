<template>
    <nav class="bg-gray-950 p-2.5 text-white opacity-90">
        <div class="flex items-center justify-between md:hidden">
            <!-- Hamburger Icon for Mobile -->
            <button id="menuToggle" class="text-gray-300 focus:outline-none">
                <!-- Hamburger Icon -->
                <svg
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16m-7 6h7"
                    ></path>
                </svg>
            </button>
        </div>
        <!-- Mobile Menu -->
        <ul
            id="mobileMenu"
            class="hidden md:hidden absolute top-0 left-0 text-black bg-white h-full font-semibold z-40 w-64 flex flex-col justify-start pt-0 uppercase"
        >
            <!-- Logo -->
            <div class="mt-3 mb-3 text-center text-lg font-semibold">
                <span class="text-black">Tool Tips and Reviews</span>
            </div>
            <!-- Mobile Menu Items -->
            <li class="mx-4">
                <Link
                    :href="route('home')"
                    class="block hover:text-slate-500 py-2 border-b border-slate-200"
                    >Home</Link
                >
            </li>
            <li class="mx-4">
                <Link
                    :href="route('category.index')"
                    class="block hover:text-slate-500 py-2 border-b border-slate-200"
                    >Outdoors</Link
                >
            </li>
            <li class="mx-4">
                <Link
                    :href="route('contact.index')"
                    class="block hover:text-slate-500 py-2 border-b border-slate-200"
                    >Fishing</Link
                >
            </li>
            <li class="mx-4">
                <Link
                    :href="route('contact.index')"
                    class="block hover:text-slate-500 py-2 border-b border-slate-200"
                    >Camping</Link
                >
            </li>
            <li class="mx-4">
                <Link
                    :href="route('contact.index')"
                    class="block hover:text-slate-500 py-2 border-b border-slate-200"
                    >Contact</Link
                >
            </li>

            <!-- Close Icon -->
            <div
                class="flex justify-center items-center bottom-0 left-0 right-0 my-7"
            >
                <button
                    class="text-gray-900 hover:text-gray-700 focus:outline-none rounded-full bg-white shadow-md p-2"
                >
                    <svg
                        class="w-6 h-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        ></path>
                    </svg>
                </button>
            </div>
        </ul>

        <!-- Desktop Menu -->
        <ul class="hidden md:flex uppercase">
            <li class="mx-4">
                <Link :href="route('home')" class="group relative hover:text-gray-300">
                    Home
                    <div
                        class="absolute bottom-0 left-0 -mb-2 h-0.5 w-full origin-center scale-x-0 transform bg-green-600 transition duration-500 ease-in-out group-hover:scale-x-100"
                    ></div>
                </Link>
            </li>
            <li class="mx-4">
                <Link
                    :href="route('category.index')"
                    class="group relative hover:text-gray-300"
                >
                    Outdoors
                    <div
                        class="absolute bottom-0 left-0 -mb-2 h-0.5 w-full origin-center scale-x-0 transform bg-green-600 transition duration-500 ease-in-out group-hover:scale-x-100"
                    ></div>
            </Link>
            </li>
            <li class="mx-4">
                <Link
                    :href="route('category.index')"
                    class="group relative hover:text-gray-300"
                >
                    Fishing
                    <div
                        class="absolute bottom-0 left-0 -mb-2 h-0.5 w-full origin-center scale-x-0 transform bg-green-600 transition duration-500 ease-in-out group-hover:scale-x-100"
                    ></div>
            </Link>
            </li>
            <li class="mx-4">
                <Link
                    :href="route('category.index')"
                    class="group relative hover:text-gray-300"
                >
                    Camping
                    <div
                        class="absolute bottom-0 left-0 -mb-2 h-0.5 w-full origin-center scale-x-0 transform bg-green-600 transition duration-500 ease-in-out group-hover:scale-x-100"
                    ></div>
                </Link>
            </li>
            <li class="mx-4">
                <Link
                    :href="route('contact.index')"
                    class="group relative hover:text-gray-300"
                >
                    Contact
                    <div
                        class="absolute bottom-0 left-0 -mb-2 h-0.5 w-full origin-center scale-x-0 transform bg-green-600 transition duration-500 ease-in-out group-hover:scale-x-100"
                    ></div>
                </Link>
            </li>
        </ul>
    </nav>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>
