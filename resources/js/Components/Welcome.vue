<script setup></script>

<template>
    <button v-if="$page.props.user.permissions.includes('create roles')">Crear Roles</button>
    <button v-if="$page.props.user.permissions.includes('create lessons')">Crear nueva lección</button>

</template>
<style>
button {
    background-color: chocolate;
    color: white;
    padding: 10px;
    margin: 5px;

}
</style>

