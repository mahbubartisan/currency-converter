<template>
    <TableLayout>
        <template #theader>
            <TableHeader :routeName="routeName" :filters="filters"/>
        </template>
        <template #thead>
            <tr>
                <th
                    v-for="column in columns"
                    :key="column.key"
                    class="bg-white px-6 py-3 text-left text-sm font-medium uppercase tracking-wider text-slate-500"
                >
                    {{ column.title }}
                </th>
            </tr>
        </template>
        <template #tbody>
            <tr>
                <td colspan="5">
                    <span
                        v-if="!data.length"
                        class="mt-5 text-red-500 flex items-center justify-center"
                        >No records found...</span
                    >
                </td>
            </tr>
            <tr v-for="(item, index) in data" :key="index">
                <td
                    v-for="column in columns"
                    :key="column.key"
                    class="whitespace-no-wrap px-6 py-4 leading-5 text-gray-600"
                >
                    <template v-if="column.key === 'media'">
                        <!-- Display the image -->
                        <img
                            :src="get(item[column.key], 'path')"
                            alt="image"
                            class="w-[30px]"
                        />
                    </template>
                    <template v-else-if="column.key === 'status'">
                        <!-- Display the status -->
                        <span
                            :class="
                                item[column.key] == 1
                                    ? 'bg-green-100 text-green-800'
                                    : 'bg-red-100 text-red-800'
                            "
                            class="text-sm font-medium mr-2 px-2.5 py-0.5 rounded-full"
                        >
                            {{
                                item[column.key] == 1 ? "active" : "deactivate"
                            }}
                        </span>
                    </template>
                    <template v-else>
                        {{ item[column.key] }}
                    </template>
                    <template v-if="column.key === 'action'">
                        <!-- Display the action -->
                        <div class="flex gap-2">
                            <slot name="actions" :item="item"></slot>
                        </div>
                    </template>
                </td>
            </tr>
        </template>
        <template #tfooter>
            <Pagination
                :pagination="pagination"
                :from="from"
                :to="to"
                :total="total"
            />
        </template>
    </TableLayout>
</template>

<script setup>
import { get } from "lodash";
import TableLayout from "@/Components/Table/TableLayout.vue";
import Pagination from "./Pagination.vue";
import TableHeader from "./TableHeader.vue";

defineProps({
    columns: {
        type: Array,
        required: true,
    },
    data: {
        type: Array,
        required: true,
    },
    pagination: {
        type: Array,
        required: true,
    },
    from: {
        type: Number,
    },
    to: {
        type: Number,
    },
    total: {
        type: Number,
    },
    filters: {
        type: Array,
    },
    routeName: String,
});
</script>
