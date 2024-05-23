<?php require ('./layout/header.php') ?>

    <section class="publicidad my-5 py-4 mx-5"> <!--Caja articulos-->
        <div class="container" id="nuevos-articulos">
        <h2 class="text-center text-white py-3">Tu espacio</h2>
             <p class="text-center text-white py-3">
                Únete a nuestra comunidad de emprendedores y deja que El Faro ilumine el camino hacia el 
                éxito de tu negocio! Estamos emocionados de ser parte de tu viaje empresarial y esperamos
                ver tu creatividad brillar en nuestras páginas. ¡Adelante, deja tu marca en El Faro!</p>
            <div class="row">
                <div class="col-md-4  p-0 pt-4 pb-4 mx-auto">
                    <div class="col-12 col-md-6 col-lg-12 card text-center" style="background-color: #e4f4f4;">
                        <div class="card-body text-dark">
                            <h5 class="card-title">Espacio publicitario</h5>
                            <form id="articleForm" action="index.html">
                              <input type="text" id="titleInput" name="titleInput"
                                  placeholder="Título">
                              <textarea id="descriptionInput"
                                  name="descriptionInput"
                                  placeholder="Descripción"></textarea>
                              <button class="btn btn-primary mt-1" type="button"
                                  onclick="enviarNoticia()">Enviar Noticia</button>
                          </form> 
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="nuevos-articulos">
            <div class="row">
                <div class="col-md-4  p-0 pt-4 pb-4 mx-auto">
                    <div class="col-12 col-md-6 col-lg-12 card text-center" style="background-color: #e4f4f4;">
                        <div class="card-body text-dark">
                            <h5 class="card-title">Escribe aqui tu anuncio</h5>
                            <div class="text-justify md-5" id="nuevo-articulo"></div>
                    </div>
                </div>
            </div>
        </div>

<section class="section-padding" id="nuevos-articulos"> <!--publicidad-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center text-white pb-2">
                            <h2 class="my-5 py-4 mx-5">publicidad</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card text-dark text-center pb-2"
                            style="background-color: #e4f4f4;">
                            <div class="card-body text-dark">
                                <div class="img-area mb-4">
                                    <!--mb = margin botton-->
                                    <img src="assets/img/POLLA0104.jpeg" class="img-fluid rounded-start" alt="...">

                                </div>
                                <h2>Juega y gana</h2>

                                <a href="https://www.polla.cl/es/view/juego/loto" class="btn btn-primary">Entrar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card text-dark text-center pb-2"
                            style="background-color: #e4f4f4;">
                            <div class="card-body text-dark">
                                <div class="img-area mb-4">
                                    <!--mb = margin botton-->
                                <img src="assets/img/psn.jpeg" height="120" width="120" class="img-fluid rounded-start" alt="...">
                                </div>
                                <h2>membresia</h2> 
                                <a href="https://www.eneba.com/psn-playstation-network-card-psn-10-usa-psn-key-united-states" class="btn btn-primary">Entrar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card text-dark text-center pb-2"
                            style="background-color: #e4f4f4;">
                            <div class="card-body text-black">
                                <div class="img-area mb-4">
                                    <!--mb = margin botton-->
                                    <img src="assets/img/maxresdefault.jpg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <h2>Cambia tu plan</h2>
                                <a href="https://help.netflix.com/es/node/24926" class="btn btn-primary">Entrar</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  
    </main>
    
    

    <?php require ('./layout/aside.php') ?>
<?php require ('./layout/footer.php') ?>