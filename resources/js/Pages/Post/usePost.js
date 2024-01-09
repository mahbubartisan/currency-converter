import { router, useForm } from "@inertiajs/vue3";
import { onMounted } from "vue";

const form = useForm({
    id: null,
    title: "",
    media: null,
    description: "",
    category_id: null,
    meta_title: "",
    meta_description: "",
    meta_keyword: "",
    status: 1,
});


export const usePost = () => {
    const handleSave = () => {
        form.post(route("admin.posts.save"), {
            onSuccess(e) {
                form.id = null;
                form.reset();
            },
        });
    };

    
    return {
        form,
        handleSave,
        // handleDelete,
    };
};
