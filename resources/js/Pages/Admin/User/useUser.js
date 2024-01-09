import { ref } from "vue";
import { useForm, router } from "@inertiajs/vue3";

const formModal = ref(false);

const form = useForm({
    id: null,
    name: "",
    email: "",
    role: null,
    password: "",
    status: 0,
});

export const useUser = () => {
    const handleEdit = (item) => {
        form.id = item.id;
        form.name = item.name;
        form.email = item.email;
        form.role = item.role;
        form.status = item.status;
        formModal.value = true;
    };

    const handleSave = () => {
        form.post(route("admin.users.save"), {
            onSuccess(e) {
                formModal.value = false;
                form.id = null;
                form.reset();
            },
        });
    };

    const handleDelete = (id) => {
        router.post(route("admin.users.delete", id));
    };

    return {
        form,
        formModal,
        handleEdit,
        handleSave,
        handleDelete,
    };
};
