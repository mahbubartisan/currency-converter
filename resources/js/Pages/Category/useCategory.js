import { ref } from "vue";
import { useForm, router } from "@inertiajs/vue3";

const formModal = ref(false);

const form = useForm({
    id: null,
    name: "",
    icon: null,
    status: 1,
});

export const useCategory = () => {
    const handleEdit = (item) => {
        form.id = item.id;
        form.name = item.name;
        form.icon = item.icon;
        form.status = item.status;
        formModal.value = true;
    };

    const handleSave = () => {
        form.post(route("admin.categories.save"), {
            onSuccess(e) {
                formModal.value = false;
                form.id = null;
                form.reset();
            },
        });
    };

    const handleDelete = (id) => {
        router.post(route("admin.categories.delete", id));
    };

    return {
        form,
        formModal,
        handleEdit,
        handleSave,
        handleDelete,
    };
};
