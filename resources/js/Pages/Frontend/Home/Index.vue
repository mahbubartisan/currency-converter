<template>
    <AppLayout page-title="Home Page">
        <!-- Main Content -->
        <div class="py-0">
            <Post :posts="posts"/>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from "@/Pages/Frontend/Layouts/AppLayout.vue";
import Post from "@/Pages/Frontend/Home/Fragments/Post.vue";

defineProps({
    posts: {
        type: Array,
        default: []
    }
})
</script>
