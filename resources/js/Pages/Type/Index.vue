<template>

    <container>

        <Link  :href="route('type.create')" class="btn btn-info">Nueva Categoria</Link>

        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="type in types" :key="type.id">
                <td>
                    <div class="d-flex align-items-center">
                        <div class="ms-3">
                            <p class="fw-bold mb-1">{{ type.id }}</p>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="ms-3">
                            <p class="fw-bold mb-1">{{ type.name }}</p>
                            <p class="text-muted mb-0">{{ type.description }}</p>
                        </div>
                    </div>
                </td>
                <td style="width: 100px">
                    <Link
                        method="get"
                        :href="route('type.edit', type)"
                        class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width: 20px;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                    </Link>

                    <Link
                        method="delete"
                        :href="route('type.destroy', type)"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width: 20px;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </Link>
                </td>
            </tr>
            </tbody>
        </table>

    </container>


</template>

<script>
import Container from "../Container";
import {Link} from "@inertiajs/inertia-vue";

export default {
    props: {

        types: Object,

    },
    components: {
        Container,
        Link,
    },


}
</script>
