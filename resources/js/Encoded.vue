<script setup>
    import { ref } from 'vue'
    const greeting = ref('Hello World!')
</script>

<template>
    <p className="greeting">{{ greeting }}</p>
</template>
