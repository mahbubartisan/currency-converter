<template>
    <div>
        <head>
            <title>{{ pageTitle || "Tool Tips And Reviews" }}</title>
            <!-- <meta
            name="keywords"
            :content="pageKeywords || 'some default keywords'"
        /> -->
            <meta
                name="description"
                :content="pageDescription || 'default description'"
            />
            <link :href="canonicalUrl" rel="canonical" />
        </head>
        <main
            class="bg-gray-100/60 px-0 md:px-10 selection:bg-green-600 selection:text-white"
        >
            <HeaderBanner />
            <TopNavbar />
            <slot></slot>
            <Footer/>
        </main>

    </div>
</template>

<script setup>
import HeaderBanner from "@/Pages/Frontend/Components/HeaderBanner.vue";
import TopNavbar from "@/Pages/Frontend/Components/TopNavbar.vue";
import Footer from "@/Pages/Frontend/Components/Footer.vue";
defineProps({
    pageTitle: {
        type: String,
        default: null,
    },
    pageDescription: {
        type: String,
        default: null,
    },

    // pageKeywords: String,
});
</script>
