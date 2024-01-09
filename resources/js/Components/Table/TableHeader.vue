<template>
    <!-- Per Page Sorting -->
    <div class="my-4 mb-9 flex items-center justify-between">
        <div class="flex items-center justify-center">
            <label class="mt-2 mr-2">Show</label>
            <Select
                v-model="perPage"
                :options="perPageOptions"
                @change="changePerPage"
                item-key="value"
                item-value="value"
                class="w-[70px]"
            />
            <span class="ml-2 mt-2 mr-2">entries</span>
        </div>
        <!-- Search -->
        <Input.Primary v-model="search" placeholder="search..." />
    </div>
</template>

<script setup>
import { Input, Select } from "@/plugins/form";
import { router } from "@inertiajs/vue3";
import { ref, watch } from "vue";

const search = ref();
const perPage = ref(5);

const props = defineProps({
    routeName: String,
});


const changePerPage = () => {
    router.get(route(props.routeName), { perPage: perPage.value });
};

watch(search, (value) => {
    router.get(
        route(props.routeName),
        { search: value },
        {
            preserveState: true,
            replace: true,
        }
    );
});

const perPageOptions = [
    {
        key: 1,
        value: 5,
    },
    {
        key: 2,
        value: 10,
    },
    {
        key: 3,
        value: 50,
    },
    {
        key: 4,
        value: 100,
    },
];
</script>
