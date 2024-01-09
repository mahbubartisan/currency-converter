<template>
    <AuthenticatedLayout title="Settings">
        <SettingList :settings="settings" />
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import SettingList from "@/Pages/Setting/Fragments/SettingList.vue";
document.title = "Settings";
defineProps({
    settings: {
        type: Array,
        default: [],
    },
});
</script>
