<template>
    <aside
        class="hidden md:block bg-white text-blue-900 w-60 md:w-60 flex-shrink-0 shadow-xl"
    >
        <div class="py-4 px-6">
            <nav class="py-20  h-screen space-y-3">
                <ul v-for="(item, index) in menu" :key="index">
                    <li>
                        <Link
                            :href="item.to"
                            class="group flex items-center px-4 py-2 font-medium text-slate-700 hover:text-blue-500 hover:bg-blue-50 relative z-20"
                        >
                            <component
                                :is="item.iconName"
                                size="22"
                                class="text-slate-400 mr-3 group-hover:text-blue-500"
                            />

                            {{ item.title }}

                            <div
                                @click="
                                    !isEmpty(item.child) &&
                                        handleDropdown(item.id)
                                "
                                :class="menuId == item.id || item.active ? 'border-red-500' : 'border-slate-50/5'"
                            >
                                <PhCaretDown
                                    v-if="!isEmpty(item.child)"
                                    size="16"
                                    class="group-hover:text-blue-500 ml-2 transition duration-300 ease-in-out"
                                    :class="
                                        menuId == item.id || item.active
                                            ? 'rotate-180 text-blue-500'
                                            : ''
                                    "
                                />
                            </div>
                        </Link>
                    </li>
                    <DropdownComponent
                        v-if="
                            !isEmpty(item.child) &&
                            (menuId == item.id || item.active)
                        "
                        :child="item.child"
                    />
                </ul>
            </nav>
        </div>
    </aside>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import DropdownComponent from "@/Components/leftAside/DropdownComponent.vue";
import { PhCaretDown } from "@phosphor-icons/vue";
import { isEmpty } from "lodash";
import useAside from "@/Composable/useAside";

const { menuId, handleDropdown } = useAside();
defineProps({
    menu: Object,
});
</script>
