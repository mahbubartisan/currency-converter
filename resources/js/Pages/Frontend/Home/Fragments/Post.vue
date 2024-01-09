<template>
    <!-- Flex layout for content -->
    <div class="flex flex-col lg:flex-row lg:space-x-7 bg-white p-7 shadow-md">
        <!-- Left Side (Content) -->
        <div
            class="md:flex-1 border-slate-300/70 shadow-none md:border md:shadow-md"
        >
            <h1 class="text-3xl mt-9 -mx-3 md:mx-5 font-bold">
                Welcome to Tool Tips
            </h1>
            <!-- Single Blog Post 1 -->
            <div
                class="mx-0 md:mx-9 lg:mx-9 mt-7 mb-8 p-5 border border-slate-200/80 hover:shadow-md transition duration-700 ease-in-out relative"
            v-for="(post, index) in posts" :key="index">
                <Link :href="route('post.index')">
                    <h2
                        class="mb-6 text-2xl font-semibold hover:text-green-500"
                    >
                        {{ post.title }}
                    </h2>
                </Link>
                <div class="relative">
                    <Link :href="route('post.index')">
                        <img
                            src="https://wvdnr.gov/wp-content/uploads/2021/02/DeerHunting-9747-scaled.jpg"
                        />
                        <!-- <img :src="post.media?.media" alt=""> -->
                    </Link>
                    <Link :href="route('category.index')">
                        <span
                            class="absolute top-3 left-0 bg-black text-white text-xs px-2 py-1 my-1.5 uppercase font-semibold"
                            >{{ post.category?.name }}</span
                        >
                    </Link>
                </div>
                <p class="mt-5 mb-11 text-gray-600">
                    {{ post.description }}
                    <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                    aliquam libero in neque maximus, a fermentum purus
                    consectetur. -->
                </p>
                <Link
                    :href="route('post.index')"
                    class="text-black text-sm border border-slate-600 px-2 py-1 rounded uppercase hover:bg-green-600 hover:border-green-600 hover:text-white flex items-center justify-center w-[120px] transition-colors duration-500 ease-in-out"
                >
                    Read more <i class="fas fa-plus ml-2"></i>
                </Link>
            </div>

            <!-- Single Blog Post 2 -->
            <div
                class="mx-0 md:mx-9 lg:mx-9 mb-8 p-5 border border-slate-200/80 hover:shadow-md transition duration-700 ease-in-out relative selection:bg-lime-500 selection:text-white"
            >
                <Link :href="route('post.index')">
                    <h2
                        class="mb-6 text-2xl font-semibold hover:text-green-500"
                    >
                        Is wearing orange hurting your hunting?
                    </h2>
                </Link>
                <div class="relative">
                    <Link :href="route('post.index')">
                        <img
                            src="https://okfronline.com/wp-content/uploads/2018/11/shooting.jpg"
                        />
                    </Link>
                    <Link :href="route('category.index')">
                        <span
                            class="absolute top-3 left-0 bg-black text-white text-xs px-2 py-1 my-1.5 uppercase font-semibold"
                            >Hunting</span
                        >
                    </Link>
                </div>
                <p class="mt-5 mb-11 text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                    aliquam libero in neque maximus, a fermentum purus
                    consectetur.
                </p>
                <Link
                    :href="route('post.index')"
                    class="text-black text-sm border border-slate-600 px-2 py-1 rounded uppercase hover:bg-green-600 hover:border-green-600 hover:text-white flex items-center justify-center w-[120px] transition-colors duration-500 ease-in-out"
                >
                    Read more <i class="fas fa-plus ml-2"></i>
                </Link>
            </div>

            <!-- Single Blog Post 3 -->
            <div
                class="mx-0 md:mx-9 lg:mx-9 mb-8 p-5 border border-slate-200/80 hover:shadow-md transition duration-700 ease-in-out relative selection:bg-lime-500 selection:text-white"
            >
                <Link :href="route('post.index')">
                    <h2
                        class="mb-6 text-2xl font-semibold hover:text-green-500"
                    >
                        Deer Hunting
                    </h2>
                </Link>
                <div class="relative">
                    <Link :href="route('post.index')">
                        <img
                            src="https://s22301.pcdn.co/wp-content/uploads/Bushnell-scopes-rifle-hunter.png"
                        />
                    </Link>
                    <Link :href="route('category.index')">
                        <span
                            class="absolute top-3 left-0 bg-black text-white text-xs px-2 py-1 my-1.5 uppercase font-semibold"
                            >Hunting</span
                        >
                    </Link>
                </div>
                <p class="mt-5 mb-9 text-gray-500">
                    There’s no arguing that every piece of equestrian gear is
                    essential when riding a horse. With each item you wear, you
                    are able to dramatically increase your and your horse’s
                    comfort and safety levels. For instance, a pair of long
                    boots not only keep your feet safe but also helps you gain
                    better....
                </p>
                <Link
                    :href="route('post.index')"
                    class="text-black text-sm border border-slate-600 px-2 py-1 rounded uppercase hover:bg-green-600 hover:border-green-600 hover:text-white flex items-center justify-center w-[120px] transition-colors duration-500 ease-in-out"
                >
                    Read more <i class="fas fa-plus ml-2"></i>
                </Link>
            </div>
            <Paginate />
        </div>
        <RightSide />
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import Paginate from "@/Pages/Frontend/Components/Paginate.vue";
import RightSide from "@/Pages/Frontend/Components/RightSide.vue";

defineProps({
    posts: {
        type: Array,
        default: []
    }
})
</script>
