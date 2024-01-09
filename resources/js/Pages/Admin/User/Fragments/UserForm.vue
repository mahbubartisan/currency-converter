<template>
    <Modal v-model="formModal">
        <h2 class="text-2xl font-bold text-gray-900 sm:pr-12">
            {{ form.id ? "Update" : "Create" }} User
        </h2>
        <form @submit.prevent="handleSave">
            <div class="flex flex-wrap -mx-2 mb-4 mt-5">
                <div class="w-full sm:w-1/2 px-2 mb-3">
                    <Input.Primary
                        label="Name"
                        v-model="form.name"
                        :error="form.errors.name"
                        required
                    />
                </div>
                <div class="w-full sm:w-1/2 px-2">
                    <Input.Primary
                        label="Email"
                        v-model="form.email"
                        :error="form.errors.email"
                    />
                </div>
                <div class="w-full sm:w-1/2 px-2">
                    <Select
                        label="Role"
                        :options="roles"
                        item-key="value"
                        item-value="key"
                        v-model="form.role"
                        :error="form.errors.role"
                    />
                </div>
                <div class="w-full sm:w-1/2 px-2">
                    <Input.Primary
                        label="Password"
                        v-model="form.password"
                        :error="form.errors.password"
                    />
                </div>
                <Radio.Group
                    v-model="form.status"
                    :error="form.errors.status"
                    label="Status"
                >
                    <Radio.Input label="Active" :value="1" />
                    <Radio.Input label="Disabled" :value="0" />
                </Radio.Group>
            </div>
            <div class="flex justify-end">
                <Button.Primary type="submit" :loading="form.processing">{{
                    form.id ? "Update" : "Create"
                }}</Button.Primary>
            </div>
        </form>
    </Modal>
</template>

<script setup>
import { Input, Select, Radio } from "@/plugins/form";
import { Button, Modal } from "@/plugins/ui";
import { useUser } from "../useUser";

const { form, formModal, handleSave } = useUser();

const roles = [

    {
        key: 'Superadmin',
        value: 'Superadmin'
    },
    {
        key: 'User',
        value: 'User'
    },
    {
        key: 'Manager',
        value: 'Manager'
    },
    {
        key: 'Admin',
        value: 'Admin'
    },
];
</script>
