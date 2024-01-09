<template>
    <AuthenticatedLayout>
        <h2 class="text-2xl font-bold text-gray-900">Create a new post</h2>
        <div class="mx-auto mt-9 w-full max-w-4xl">
            <form
                @submit.prevent="handleSave"
                class="mb-4 rounded-md bg-white px-8 pt-6 pb-8 shadow-md"
            >
                <!-- Post Title Section -->
                <h3 class="mb-4 text-xl font-semibold text-gray-800">
                    Title Section
                </h3>
                <hr class="mb-5 text-gray-300" />
                <div class="mb-4 flex flex-col md:flex-row items-start">
                    <label class="mr-4 mb-2 block w-1/4 text-gray-700"
                        >Title</label
                    >
                    <Input.Primary
                        v-model="form.title"
                        :error="form.errors.title"
                        required
                        class="w-full -mt-1.5"
                    />
                </div>

                <div class="border border-dashed"></div>
                <!-- Post Thumbnail Image Section -->
                <h3 class="mb-4 mt-9 text-xl font-semibold text-gray-800">
                    Image Section
                </h3>
                <hr class="mb-5 text-gray-300" />
                <div class="mb-4 flex flex-col md:flex-row items-start">
                    <label
                        for="image"
                        class="mr-4 mb-2 block w-1/4 text-gray-700"
                        >Thumbnail Image</label
                    >
                    <Input.File
                        v-model="form.media"
                        @input="(e) => (form.media = e.target.files[0])"
                        :error="form.errors.media"
                        required
                        class="w-full -mt-1.5"
                    />
                </div>
                <div class="border border-dashed"></div>
                <!-- Post Category Section -->
                <h3 class="mb-4 mt-9 text-xl font-semibold text-gray-800">
                    Category Section
                </h3>
                <hr class="mb-5 text-gray-300" />
                <div class="mb-4 flex flex-col md:flex-row items-start">
                    <label class="mr-4 mb-2 block w-1/4 text-gray-700"
                        >Select Category</label
                    >
                    <Select
                        :options="categories"
                        item-key="id"
                        item-value="name"
                        v-model="form.category_id"
                        :error="form.errors.category_id"
                        class="w-full -mt-1.5"
                    />
                </div>
                <div class="border border-dashed"></div>
                <!-- Post Description Section -->
                <h3 class="mb-4 mt-9 text-xl font-semibold text-gray-800">
                    Description Section
                </h3>
                <hr class="mb-5 text-gray-300" />
                <div class="mb-4 flex flex-col md:flex-row items-start">
                    <label class="mr-4 mb-2 block w-1/4 text-gray-700"
                        >Description</label
                    >
                    <!-- {{ form.description }} -->
                    <Textarea.Editor v-model="form.description"
                        :error="form.errors.description" 
                        
                    />
                </div>
                <div class="border border-dashed"></div>
                <!-- Post SEO Section -->
                <h3 class="mb-4 mt-9 text-xl font-semibold text-gray-800">
                    SEO Section
                </h3>
                <hr class="mb-5 text-gray-300" />
                <div class="space-y-7">
                    <div class="mb-4 flex flex-col md:flex-row items-start">
                    <label class="mr-4 mb-2 block w-1/4 text-gray-700"
                        >Meta Title</label
                    >
                    <Input.Primary
                        v-model="form.meta_title"
                        :error="form.errors.meta_title"
                        required
                        class="w-full -mt-1.5"
                    />
                </div>
                <div class="mb-4 flex flex-col md:flex-row items-start">
                    <label
                        class="mr-4 md:mb-0 block w-full md:w-1/4 text-gray-700"
                    >
                        Meta Description
                    </label>
                    <Textarea.Primary
                        v-model="form.meta_description"
                        :error="form.errors.meta_description"
                        class="w-full"
                        rows="6"
                    />
                </div>
                <div class="mb-4 flex flex-col md:flex-row items-start">
                    <label class="-mt-2.5 mr-4 mb-2 block w-1/4 text-gray-700"
                        >Meta Keyword</label
                    >
                    <Input.Primary
                        v-model="form.meta_keyword"
                        :error="form.errors.meta_keyword"
                        required
                        class="w-full -mt-[4px]"
                    />
                </div>
                </div>
                <div class="border border-dashed mt-4"></div>
                <!-- Post Status Section -->
                <h3 class="mb-4 mt-9 text-xl font-semibold text-gray-800">
                    Status Section
                </h3>
                <hr class="mb-5 text-gray-300" />
                <div class="mb-4 flex flex-col md:flex-row items-start">
                    <label class="mr-4 mb-2 block w-1/4 text-gray-700"
                        >Status</label
                    >
                    <Radio.Group
                        v-model="form.status"
                        :error="form.errors.status"
                        class="-mt-1.5"
                    >
                        <Radio.Input label="Active" :value="1" />
                        <Radio.Input label="Disabled" :value="0" />
                    </Radio.Group>
                </div>
                <!-- Submit Button -->
                <div class="border border-dashed"></div>

                <div class="mt-9 flex justify-end">
                    <button
                        type="submit"
                        class="rounded-md bg-violet-700 px-4 py-2 text-white shadow-md transition-colors duration-300 hover:bg-violet-800"
                    >
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Input, Select, Radio, Textarea } from "@/plugins/form";
import { Button } from "@/plugins/ui";
import { usePost } from "@/Pages/Post/usePost";
import CKEditor from "@/Components/CKEditor.vue";

document.title = "Create Post";

const { form, handleSave } = usePost();

defineProps({
    categories: {
        type: Array,
        default: [],
    },
});
</script>
