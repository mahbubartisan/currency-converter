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
        :data="users.data"
        :pagination="users.links"
        :total="users.total"
        :from="users.from"
        :to="users.to"
        routeName="admin.users.index"
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
import { useUser } from "@/Pages/Admin/User/useUser";
import { PhPencil, PhTrash } from "@phosphor-icons/vue";

const { form, formModal, handleEdit, handleDelete } = useUser();
defineProps({
    users: {
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
        title: "email",
        key: "email",
    },
    {
        title: "role",
        key: "role",
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
