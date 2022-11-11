<template>

    <container>

        <Link  :href="route('book.create')" class="btn btn-info">Nuevo libro</Link>

        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
            <tr>
                <th>Nombre</th>
                <th>Editorial</th>
                <th></th>

            </tr>
            </thead>
            <tbody>
            <tr v-for="book in books" :key="book.id">
                <td style="width: min-content">
                    <div class="d-flex align-items-center">
                        <!-- <img
                            :src="book.image"
                            :alt="book.name"
                            style="width: 45px; height: 45px"
                            class="rounded-circle"
                        />-->
                        <div class="ms-3">
                            <p class="fw-bold mb-1">{{ book.name }}</p>
                            <p class="text-muted mb-0">{{ book.author }}</p>
                        </div>
                    </div>
                </td>
                <td style="width: min-content">
                    <p class="fw-normal mb-1">{{ book.editorial }}</p>
                    <p class="text-muted mb-0"> {{ book.publication_date }}</p>
                </td>
                <td style="width: 100px">
                    <Link
                        method="get"
                        :href="route('book.show', book)"
                        class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width: 20px;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </Link>

                    <Link
                        method="get"
                        :href="route('book.edit', book)"
                        class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width: 20px;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                    </Link>

                    <Link
                        method="delete"
                        :href="route('book.destroy', book.id)"
                        class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110"
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

        books: Array,

    },
    components: {
        Container,
        Link,
    },

}
</script>
