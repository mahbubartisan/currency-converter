<template>
    <AuthenticatedLayout title="User Lists">
        <UserForm />
        <UserList :users="users" />
    </AuthenticatedLayout>
</template>

<script setup>
import UserForm from "@/Pages/Admin/User/Fragments/UserForm.vue";
import UserList from "@/Pages/Admin/User/Fragments/UserList.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
document.title = "Users";
defineProps({
    users: {
        type: Array,
        default: [],
    },
});
</script>
