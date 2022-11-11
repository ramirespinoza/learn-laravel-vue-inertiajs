
<template>
        <container>
                        <form @submit.prevent="submit">
                            <fieldset>
                                <legend>Crear nuevo libro</legend>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Nombre</label>
                                    <input v-model="form.name" type="text" id="name" class="form-control" placeholder="Mobby Dick">
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Autor</label>
                                    <input v-model="form.author" type="text" id="author" class="form-control" placeholder="Herman Melville">
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Editorial</label>
                                    <input v-model="form.editorial" type="text" id="editorial" class="form-control" placeholder="Nuevo Amanecer">
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Fecha de publicación</label>
                                    <input v-model="form.publication_date" type="date" id="publication_date" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="disabledSelect" class="form-label">Tipo</label>
                                    <select
                                        class="select "
                                        :required="true"
                                        id="type_id"
                                        v-model="form.type_id"
                                    >
                                        <option
                                            v-for="type in types"
                                            v-bind:value="type.id"
                                        >{{ type.name }}</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                                        <label class="form-check-label" for="disabledFieldsetCheck">
                                            Can't check this
                                        </label>
                                    </div>
                                </div>
                                <Link
                                    :href="route('book.index')"
                                    class="btn btn-secondary"                                >
                                    Cancelar
                                </Link>
                                <button type="submit" class="btn btn-info">Submit</button>
                            </fieldset>
                            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">


                            </div>
                        </form>

        </container>


</template>

<script>

import Container from "../Container";
import {Link} from "@inertiajs/inertia-vue";

export default {
    props: {
      types: Array,
    },
    components: {
      Container,
        Link,
    },
    data() {
        return {
            form: {
                name: "",
                author: "",
                editorial: "",
                publication_date: "",
                type_id: "",
            },
        }
    },
    methods:{
        submit(){
            console.log(this.form);
            this.$inertia.post(route('book.store'), this.form);
        }
    }
}


</script>
