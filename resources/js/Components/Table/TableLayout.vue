<template>
    <div class="container mx-auto mt-16 rounded-md bg-white p-4 shadow-md">
        <slot name="theader"></slot>
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <!-- Table Head -->
                <thead>
                    <slot name="thead"></slot>
                </thead>
                <tbody class="bg-white">
                    <!-- Table Body -->
                    <slot name="tbody"></slot>
                </tbody>
            </table>
            <!-- Table Footer -->
            <slot name="tfooter"></slot>
        </div>
    </div>
</template>

<script setup></script>
