<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Preguntas frecuentes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="css/Estilo4.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">


</head>

<body>

    <?php
    include 'components/navbar/navbar.php';
    ?>

    <div>
        <div class="titulo" href="">Whycux</div>
    </div>





    <main class="vh-100 bg-light d-flex align-items-center">

        <!-- El contenedor de la categorias -->
        <section id="principal" class="h-75 container-sm mx-auto bg-light" style="max-width: 800px;">

            <h1 class="fs-5 text-primary text-center py-3">¿En qué le podemos ayudar?</h1>


            <!-- La primera categoria -->
            <div class="accordion" id="accordionExample">


                <div class="accordion-item my-4">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="bi bi-truck-flatbed"></i>
                            <span class="px-3 text-info">Envios</span>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <h2 class="fs-6 fw-semibold">1. ¿Dónde está mi pedido?</h2>
                            <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.
                            </div>
                            <h2 class="fs-6 fw-semibold">2. ¿Cúando llegará mi pedido?</h2>
                            <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.
                            </div>
                            <h2 class="fs-6 fw-semibold">3. ¿Qué hacer si no llega mi pedido?</h2>
                            <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.
                            </div>
                            <h2 class="fs-6 fw-semibold">4. ¿Cómo sigo el envio?</h2>
                            <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.
                            </div>
                            <h2 class="fs-6 fw-semibold">5. ¿Cúanto tiempo se demora el envio?</h2>
                            <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- La segunda Categoria  -->

                <div class="accordion-item my-4">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="bi bi-credit-card"></i>
                            <span class="px-3 text-info">Pagos</span>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <h2 class="fs-6 fw-semibold">1. ¿Dónde está mi pedido?</h2>
                            <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.
                            </div>
                            <h2 class="fs-6 fw-semibold">2. ¿Cúando llegará mi pedido?</h2>
                            <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.
                            </div>
                            <h2 class="fs-6 fw-semibold">3. ¿Qué hacer si no llega mi pedido?</h2>
                            <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.
                            </div>
                            <h2 class="fs-6 fw-semibold">4. ¿Cómo sigo el envio?</h2>
                            <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.
                            </div>
                            <h2 class="fs-6 fw-semibold">5. ¿Cúanto tiempo se demora el envio?</h2>
                            <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- La tercera categoria  -->

                <div class="accordion-item my-4">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

                            <i class="bi bi-arrow-return-left"></i>
                            <span class="px-3 text-info">Devoluciones</span>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <h2 class="fs-6 fw-semibold">1. ¿Dónde está mi pedido?</h2>
                            <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.
                            </div>
                            <h2 class="fs-6 fw-semibold">2. ¿Cúando llegará mi pedido?</h2>
                            <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.
                            </div>
                            <h2 class="fs-6 fw-semibold">3. ¿Qué hacer si no llega mi pedido?</h2>
                            <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.
                            </div>
                            <h2 class="fs-6 fw-semibold">4. ¿Cómo sigo el envio?</h2>
                            <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.
                            </div>
                            <h2 class="fs-6 fw-semibold">5. ¿Cúanto tiempo se demora el envio?</h2>
                            <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- La cuarta categoria  -->

                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                            <i class="bi bi-percent"></i>
                            <span class="px-3 text-info">Promociones</span>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="heading4"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <h2 class="fs-6 fw-semibold">1. ¿Dónde está mi pedido?</h2>
                            <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.
                            </div>
                            <h2 class="fs-6 fw-semibold">2. ¿Cúando llegará mi pedido?</h2>
                            <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.
                            </div>
                            <h2 class="fs-6 fw-semibold">3. ¿Qué hacer si no llega mi pedido?</h2>
                            <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.
                            </div>
                            <h2 class="fs-6 fw-semibold">4. ¿Cómo sigo el envio?</h2>
                            <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.
                            </div>
                            <h2 class="fs-6 fw-semibold">5. ¿Cúanto tiempo se demora el envio?</h2>
                            <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.
                            </div>
                        </div>
                    </div>
                </div>


            </div>




        </section>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <?php
    include 'components/footer/footer.php';
    ?>
    
</body>

</html>