<template>
    <div class="flex justify-end">
        <Button.Info
            @click="
                () => {
                    formModal = true;
                    form.reset();
                }
            "
        >
            Create
        </Button.Info>
    </div>

    <GlobalTable
        :columns="tableConfig"
        :data="categories.data"
        :pagination="categories.links"
        :total="categories.total"
        :from="categories.from"
        :to="categories.to"
        routeName="admin.categories.index"
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
import { useCategory } from "@/Pages/Category/useCategory";
import { PhPencil, PhTrash } from "@phosphor-icons/vue";

const { form, formModal, handleEdit, handleDelete } = useCategory();
defineProps({
    categories: {
        type: Array,
        default: [],
    },

    filters: {
        type: Object,
    },
});

const tableConfig = [
    {
        title: "id",
        key: "id",
    },
    {
        title: "name",
        key: "name",
    },
    {
        title: "icon",
        key: "icon",
    },
    {
        title: "status",
        key: "status",
    },
    {
        title: "action",
        key: "action",
    },
];
</script>
