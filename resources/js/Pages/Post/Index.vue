<template>
    <AuthenticatedLayout title="Posts">
        <PostList :posts="posts" />
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import PostList from "@/Pages/Post/Fragments/PostList.vue";
document.title = "Post Lists";
defineProps({
    posts: {
        type: Array,
        default: [],
    },
});
</script>
