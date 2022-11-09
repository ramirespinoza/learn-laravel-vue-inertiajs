<template>
    <div style="display:flex;flex-direction: row; height: 100vh;">
        <nav class="navbar navbar-expand-lg" style="width: 10%; background-color: #e3f2fd;align-items: start ">
            <div class="container-fluid flex-column" >
                <a class="navbar-brand" href="#"><img style="width: 50px" src="https://avatars.githubusercontent.com/u/77425199?v=4"/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 flex-column">
                        <li class="nav-item">

                            <Link  method="get"
                                   href="/"
                                   class="nav-link"
                                   >Home</Link>
                        </li>
                        <li class="nav-item">
                            <Link  method="get"
                                   href="/book"
                                   class="nav-link"
                            >Libros</Link>
                        </li>
                        <li class="nav-item">
                            <Link  method="get"
                                   href="/type"
                                   class="nav-link"
                            >Categorias</Link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="p-5 " style="width: 80%">
            <slot></slot>
        </div>
    </div>
</template>


<script>
import {Link} from "@inertiajs/inertia-vue";

export default {

    components: {
        Link,
    }

}
</script>
