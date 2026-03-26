<script setup>
defineProps({
    title: {
        type: String,
        default: "App Layout Vue",
    },
    subtitle: {
        type: String,
        default: "",
    },
});
</script>

<template>
    <section class="applayoutvue-card">
        <p class="applayoutvue-kicker">Shared Layout</p>
        <h1 class="applayoutvue-title">{{ title }}</h1>
        <p v-if="subtitle" class="applayoutvue-subtitle">{{ subtitle }}</p>
    </section>
</template>
