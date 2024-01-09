<template>
    <!-- Footer -->
    <footer
        class="bg-gray-800 py-4 text-white selection:bg-green-600 selection:text-white"
    >
        <div
            class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-5 md:gap-10 lg:gap-32 px-5 md:px-10 lg:px-20 mt-5"
        >
            <!-- Logo Column -->
            <div class="flex justify-center">
                <Link :href="route('home')">
                    <img
                        src="https://png.pngtree.com/png-vector/20230408/ourmid/pngtree-free-demo-banner-design-vector-png-image_6695393.png"
                        alt="Logo"
                        class="h-40 object-cover"
                    />
                </Link>
            </div>

            <!-- About Column -->
            <div>
                <h3 class="text-lg font-semibold mb-2">About</h3>
                <p class="text-sm">
                    The main motto of this blog is to serve information
                    regarding tools.
                </p>
            </div>

            <!-- Links Column -->
            <div class="flex flex-col items-start">
                <h3 class="text-lg font-semibold mb-2">Other pages</h3>
                <ul class="list-disc underline text-sm space-y-2 pl-[18px]">
                    <li><Link :href="route('contact.index')">Contact</Link></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>

        <div class="flex items-center justify-center">
            <p class="mt-4">&copy; 2024 Tools Blog. All rights reserved.</p>
        </div>
    </footer>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>
