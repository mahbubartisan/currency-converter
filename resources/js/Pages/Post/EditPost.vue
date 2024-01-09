<template>
    <AuthenticatedLayout>
        <h2 class="text-2xl font-bold text-blue-900">
            Update Post:- {{ form.title }}
        </h2>
        <div class="mx-auto mt-9 w-full max-w-4xl">
            <form
                @submit.prevent="
                    form.post(route('admin.posts.update', form.id))
                "
                class="mb-4 rounded-md bg-white px-8 pt-6 pb-8 shadow-md"
            >
                <!-- Post Title Section -->
                <h3 class="mb-4 text-xl font-semibold text-gray-800">
                    Title Section
                </h3>
                <hr class="mb-5 text-gray-300" />
                <div class="mb-4 flex flex-col md:flex-row items-start">
                    <label class="w-full leading-7 mb-2 block md:w-1/4 text-gray-700"
                        >Title</label
                    >
                    <Input.Primary
                        v-model="form.title"
                        :error="form.errors.title"
                        required
                        class="w-full -mt-[3px]"
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
                        class="w-full leading-7 mb-2 block md:w-1/4 text-gray-700"
                        >Thumbnail Image</label
                    >
                    <div class="w-full">
                        <Input.File
                            v-model="form.media"
                            @input="(e) => (form.media = e.target.files[0])"
                            :error="form.errors.media"
                            required
                            class="-mt-[3px]"
                        />
                        <img
                            v-if="form.media && form.media.path"
                            :src="getImage(form.media?.path)"
                            :alt="form.title"
                            class="w-20 h-20 mt-2 rounded-md shadow"
                        />
                    </div>
                </div>

                <div class="border border-dashed"></div>
                <!-- Post Category Section -->
                <h3 class="mb-4 mt-9 text-xl font-semibold text-gray-800">
                    Category Section
                </h3>
                <hr class="mb-5 text-gray-300" />
                <div class="mb-4 flex flex-col md:flex-row items-start">
                    <label class="w-full leading-7 mb-2 block md:w-1/4 text-gray-700"
                        >Select Category</label
                    >
                    <Select
                        :options="categories"
                        item-key="id"
                        item-value="name"
                        v-model="form.category_id"
                        :error="form.errors.category_id"
                        class="w-full -mt-[3px]"
                    />
                </div>
                <div class="border border-dashed"></div>
                <!-- Post Description Section -->
                <h3 class="mb-4 mt-9 text-xl font-semibold text-gray-800">
                    Description Section
                </h3>
                <hr class="mb-5 text-gray-300" />
                <div class="mb-4 flex flex-col md:flex-row items-start">
                    <label class="w-full leading-7 mb-2 block md:w-1/4 text-gray-700"
                        >Description</label
                    >
                    <div v-html="form.description">

                    </div>
                    <textarea
                        type="text"
                        
                        v-model="form.description"
                        :error="form.errors.description"
                        class="-mt-[3px] w-full md:w-3/4 resize-none rounded-md border border-gray-300 py-2 px-3 leading-tight text-gray-800 focus:border-green-600 focus:ring-0 focus:outline-none transition duration-500 ease-in-out"
                    >
                    </textarea>
                </div>
                <div class="border border-dashed"></div>
                <!-- Post SEO Section -->
                <h3 class="mb-4 mt-9 text-xl font-semibold text-gray-800">
                    SEO Section
                </h3>
                <hr class="mb-5 text-gray-300" />
                <div class="mb-4 flex flex-col md:flex-row items-start">
                    <label class="w-full leading-7 mb-2 block md:w-1/4 text-gray-700"
                        >Meta Title</label
                    >
                    <Input.Primary
                        v-model="form.meta_title"
                        :error="form.errors.meta_title"
                        required
                        class="w-full -mt-[3px]"
                    />
                </div>
                <div class="mb-4 flex flex-col md:flex-row items-start">
                    <label
                        class="w-full leading-7 mb-2 block md:w-1/4 text-gray-700"
                    >
                        Meta Description
                    </label>
                    <textarea
                        type="text"
                        v-model="form.meta_description"
                        :error="form.errors.meta_description"
                        rows="4"
                        class="-mt-[3px] w-full md:w-3/4 resize-none rounded-md border border-gray-300 px-3 leading-tight text-gray-800 focus:border-green-600 focus:ring-0 focus:outline-none transition duration-500 ease-in-out"
                    ></textarea>
                </div>
                <div class="mb-4 flex flex-col md:flex-row items-start">
                    <label class="w-full leading-7 mb-2 block md:w-1/4 text-gray-700"
                        >Meta Keyword</label
                    >
                    <Input.Primary
                        v-model="form.meta_keyword"
                        :error="form.errors.meta_keyword"
                        required
                        class="w-full -mt-[3px]"
                    />
                </div>
                <div class="border border-dashed"></div>
                <!-- Post Status Section -->
                <h3 class="mb-4 mt-9 text-xl font-semibold text-gray-800">
                    Status Section
                </h3>
                <hr class="mb-5 text-gray-300" />
                <div class="mb-4 flex flex-col md:flex-row items-start">
                    <label class="w-full leading-7 mb-2 block md:w-1/4 text-gray-700"
                        >Status</label
                    >
                    <Radio.Group
                        v-model="form.status"
                        :error="form.errors.status"
                        class="-mt-[3px]"
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
import { Input, Select, Radio } from "@/plugins/form";
import { Button } from "@/plugins/ui";
import { usePost } from "@/Pages/Post/usePost";
import { useForm } from "@inertiajs/vue3";

document.title = "Update Post";

const { handleSave } = usePost();

const props = defineProps({
    post: {
        type: Array,
        default: [],
    },
    categories: {
        type: Array,
        default: [],
    },
});

const form = useForm(props.post);

const getImage = (imageUrl) => {
    if (imageUrl) {
        return "http://127.0.0.1:8000/" + imageUrl;
    }
    return imageUrl;
};
</script>
