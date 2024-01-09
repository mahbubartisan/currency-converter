<template>
    <!-- Related Articles Section -->
    <div class="mt-5">
        <h3 class="text-lg font-bold text-slate-900 mb-3 uppercase">
            Related Articles
        </h3>

        <!-- Grid for Related Articles -->
        <div
            class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3.5 selection:bg-green-500 selection:text-white"
        >
            <!-- Related Article 1 -->
            <div>
                <div class="flex flex-col">
                    <Link :href="route('post.index')">
                        <img
                            src="https://wvdnr.gov/wp-content/uploads/2021/02/DeerHunting-9747-scaled.jpg"
                            alt="Related Article 1"
                            class="object-cover transition duration-500 ease-in-out transform hover:scale-105 p-1"
                        />
                    </Link>
                    <div>
                        <h4 class="mt-3 font-bold text-slate-900">
                            <Link
                                :href="route('post.index')"
                                class="hover:text-green-600 hover:underline"
                                >Tactics and Trends That Dominated
                                Bowhunting</Link
                            >
                        </h4>
                        <!-- Other related article details -->
                    </div>
                </div>
            </div>
            <div>
                <div class="flex flex-col">
                    <Link :href="route('post.index')">
                        <img
                            src="https://content.osgnetworks.tv/floridasportsman/content/photos/ducks-hunting-florida-coasts-MAIN-1200x800.jpeg"
                            alt="Related Article 1"
                            class="object-cover transition duration-500 ease-in-out transform hover:scale-105 p-1"
                        />
                    </Link>
                    <div>
                        <h4 class="mt-3 font-bold text-slate-900">
                            <Link
                                :href="route('post.index')"
                                class="hover:text-green-600 hover:underline"
                                >Coastal Florida Duck Hunting
                            </Link>
                        </h4>
                        <!-- Other related article details -->
                    </div>
                </div>
            </div>
            <div>
                <div class="flex flex-col">
                    <Link :href="route('post.index')">
                        <img
                            src="https://okfronline.com/wp-content/uploads/2018/11/shooting.jpg"
                            alt="Related Article 3"
                            class="object-cover transition duration-500 ease-in-out transform hover:scale-105 p-1"
                        />
                    </Link>
                    <div>
                        <h4 class="mt-3 font-bold text-slate-900">
                            <Link
                                :href="route('post.index')"
                                class="hover:text-green-600 hover:underline"
                                >Is wearing orange hurting your hunting?</Link
                            >
                        </h4>
                        <!-- Other related article details -->
                    </div>
                </div>
            </div>
            <div>
                <div class="flex flex-col">
                    <Link :href="route('post.index')">
                        <img
                            src="https://s22301.pcdn.co/wp-content/uploads/Bushnell-scopes-rifle-hunter.png"
                            alt="Related Article 4"
                            class="object-cover transition duration-500 ease-in-out transform hover:scale-105 p-1"
                        />
                    </Link>
                    <div>
                        <h4 class="mt-3 font-bold text-slate-900">
                            <Link
                                :href="route('post.index')"
                                class="hover:text-green-600 hover:underline"
                                >Deer Hunting</Link
                            >
                        </h4>
                        <!-- Other related article details -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Grid for Related Articles -->
    </div>
    <!-- End of Related Articles Section -->
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
