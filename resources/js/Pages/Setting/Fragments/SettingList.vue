<template>
    <div class="flex justify-end">
        <Link
            :href="route('admin.posts.create')"
            class="px-5 py-2 border border-slate-300 text-black font-semibold rounded-md shadow-md hover:bg-violet-700 hover:text-white transition-colors duration-500 ease-in-out"
        >
            Create
        </Link>
    </div>
     <!-- table -->
     <GlobalTable
        :columns="tableConfig"
        :data="settings.data"
        :pagination="settings.links"
        :from="settings.from"
        :to="settings.to"
        :total="settings.total"
        routeName="admin.settings.index"
    >
        <template #actions="{ item }">
            <Button.Primary @click="handleEdit(item)"
                ><PhPencil
            /></Button.Primary>
            <Button.Danger @click="handleDelete(item)"
                ><PhTrash
            /></Button.Danger>
        </template>
    </GlobalTable>
</template>

<script setup>
import { Button } from "@/plugins/ui";
import GlobalTable from "@/Components/Table/GlobalTable.vue";
import { PhPencil, PhTrash } from "@phosphor-icons/vue";
import { Link } from "@inertiajs/vue3";

defineProps({
    settings: {
        type: Array,
        default: [],
    },
});
</script>

