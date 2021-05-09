<template>
    <div>
        <h1>Create Organization</h1>

        <form @submit.prevent="store">
            <input v-model="form.name" label="name" />

            <button type="submit">
                Create organization
            </button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: this.$inertia.form({
                name: null
            })
        };
    },
    methods: {
        store() {
            this.form.post("/organizations");
        }
    }
};
</script>
