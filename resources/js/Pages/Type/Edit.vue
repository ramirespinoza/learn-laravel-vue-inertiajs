
<template>
    <container>
        <form @submit.prevent="submit">
            <fieldset>
                <legend>Actualizar {{type.name}}</legend>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Nombre</label>
                    <input v-model="form.name" type="text" id="name" name="name" class="form-control" placeholder="Nuevo nombre">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Descripción</label>
                    <input v-model="form.description" type="text" id="description" name="description" class="form-control" placeholder="Nueva descripción">
                </div>

                <Link
                    :href="route('type.index')"
                    class="btn btn-secondary"                                >
                    Cancelar
                </Link>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </fieldset>
        </form>

    </container>


</template>

<script>

import Container from "../Container";
import {Link} from "@inertiajs/inertia-vue";

export default {
    props: {
        type: Array,
    },
    created() {
        this.form = this.type;
    },
    components: {
        Container,
        Link,
    },
    data() {
        return {
            form: {
                name: "",
                description: "",
            },
        }
    },
    methods:{
        submit(){
            this.$inertia.put(route('type.update')  ,  this.form);
        }
    }
}


</script>
