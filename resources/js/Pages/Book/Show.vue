
<template>
        <container>
                        <form @submit.prevent="submit">
                            <fieldset disabled>
                                <legend>{{book.id }} - {{ book.name}}</legend>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Nombre</label>
                                    <input v-model="book.name" type="text" id="name" class="form-control" placeholder="Mobby Dick">
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Autor</label>
                                    <input v-model="book.author" type="text" id="author" class="form-control" placeholder="Herman Melville">
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Editorial</label>
                                    <input v-model="book.editorial" type="text" id="editorial" class="form-control" placeholder="Nuevo Amanecer">
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Fecha de publicación</label>
                                    <input v-model="book.publication_date" type="date" id="publication_date" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="disabledSelect" class="form-label">Tipo</label>
                                    <input v-model="book.type.name" type="text" id="editorial" class="form-control" placeholder="Novela">
                                </div>
                            </fieldset>
                            <Link
                                :href="route('book.index')"
                                class="btn btn-secondary"                                >
                                Regresar
                            </Link>
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
        book: Object,
    },

    components: {
      Container,
        Link,
    },
}


</script>
