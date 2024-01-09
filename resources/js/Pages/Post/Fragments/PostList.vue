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
        :data="posts.data"
        :pagination="posts.links"
        :from="posts.from"
        :to="posts.to"
        :total="posts.total"
        routeName="admin.posts.index"
    >
        <template #actions="{ item }">
            <Link
            :href="route('admin.posts.edit', item.slug)"
            
        >
        <Button.Primary
                ><PhPencil
            /></Button.Primary>
           
        </Link>
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
import { usePost } from "@/Pages/Post/usePost";

// const { handleEdit } = usePost();

const props = defineProps({
    posts: {
        type: Array,
        default: [],
    },
});
const tableConfig = [
    {
        title: "id",
        key: "id",
    },
    {
        title: "title",
        key: "title",
    },
    {
        title: "media",
        key: "media",
    },
    {
        title: "description",
        key: "description",
    },
    {
        title: "category",
        key: "category"
    },
    {
        title: "action",
        key: "action",
    },
];
</script>
