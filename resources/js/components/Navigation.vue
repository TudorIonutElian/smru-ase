<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark component-7">
        <a class="navbar-brand" href="#">SGPASP @v.1.0.0</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Acasa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#">
                        <i class="fas fa-info"></i>
                        Despre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success" href="#">
                        <i class="fas fa-code-branch"></i>
                        Versiuni</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn text-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Nomenclator
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list-ol text-success"></i>
                                Lista Ordonatori de credite
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-university text-info"></i>
                                Lista Institutii publice bugetare
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user-check text-warning"></i>
                                Lista Angajati Sistem Public
                            </a>
                            <a class="dropdown-item" href="/judete">
                                <i class="fas fa-list-ol text-success"></i>
                                Lista judete
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list-ol text-success"></i>
                                Lista Localitati
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn text-white  dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Organizarea Institutiilor
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-th text-primary"></i>
                                Stat de organizare</a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-plus-square text-success"></i>
                                Infiintare Ordonator de Credite</a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-minus-square text-danger"></i>
                                Radiere Ordonator de Credite</a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-plus-square text-success"></i>
                                Infiintare Institutie Publica</a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-minus-square text-danger"></i>
                                Radiere Institutie Publica</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn text-white  dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Posturi publice
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-plus-circle text-success"></i>
                                Suplimentare posturi</a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user-slash text-danger"></i>
                                Desfiintare posturi</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn text-white  dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Angajati
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-users-cog text-info"></i>
                                Lista toti angajatii</a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user-check text-success"></i>
                                Adauga persoana</a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-people-arrows text-warning"></i>
                                Mutare persoana</a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user-times text-danger"></i>
                                Sterge persoana</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

</template>

<script>
    export default{
        data : function () {
            return {
                APIData: []
            }
        },
        mounted() {

        },
        methods: {

        }
    }
</script>
