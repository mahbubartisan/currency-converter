<template>
    <AuthenticatedLayout title="Categories">
        <CategoryForm />
        <CategoryList :categories="categories" />
    </AuthenticatedLayout>
</template>

<script setup>
import CategoryForm from "@/Pages/Category/Fragments/CategoryForm.vue";
import CategoryList from "@/Pages/Category/Fragments/CategoryList.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
document.title = "Category";
defineProps({
    categories: {
        type: Array,
        default: [],
    },
});
</script>
