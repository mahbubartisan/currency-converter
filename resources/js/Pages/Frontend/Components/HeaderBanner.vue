<template>
    <!-- Top Section with Background Image and Search -->
    <div class="relative">
        <div
            class="h-28 bg-cover bg-center"
            style="
                background-image: url('https://wallpapers.com/images/featured/brown-pastel-aesthetic-background-379r48zf0xa66b3k.jpg');
            "
        >
            <div class="flex items-center justify-center text-slate-600 p-8">
                <h1 class="text-lg md:text-2xl lg:text-3xl font-bold uppercase">
                    <Link :href="route('home')">Tool Tips and Reviews</Link>
                </h1>
                <!-- Search -->
                <!-- <div class="flex items-center rounded-md">
            <input
              type="text"
              placeholder="Search..."
              class="w-48 sm:w-72 text-sm text-slate-900 px-4 py-2.5 rounded-l-md border border-gray-200 outline-none h-10"
            />
            <button
              class="inline-flex items-center justify-center bg-black text-white p-2 w-1/6 h-10 rounded-r-md"
            >
              <i
                class="fas fa-search text-white h-7 w-7 flex items-center justify-center"
              ></i>
            </button>
          </div> -->
                <!-- Search End -->
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>
