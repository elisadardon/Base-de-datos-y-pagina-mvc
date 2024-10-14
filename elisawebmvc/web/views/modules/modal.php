<script>
document.addEventListener('DOMContentLoaded', function() {
    var portfolioItems = document.querySelectorAll('.portfolio-item');

    portfolioItems.forEach(function(item) {
        item.addEventListener('click', function() {
            var title = item.getAttribute('data-title');
            var description = item.getAttribute('data-description');
            var imageUrl = item.getAttribute('data-image-url');
            var githubUrl = item.getAttribute('data-github-url');

            // Llenar el modal con los datos obtenidos
            document.querySelector('#portfolioModal .portfolio-modal-title').textContent = title;
            document.querySelector('#portfolioModal .modal-body img').src = imageUrl;
            document.querySelector('#portfolioModal .modal-body p').textContent = description;
            document.querySelector('#portfolioModal .modal-body a').href = githubUrl;
        });
    });
});
</script>

<div class="modal fade" id="portfolioModal" tabindex="-1" aria-labelledby="portfolioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                Proyecto de Portafolio
                            </h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="ruta_a_la_imagen.jpg" alt="Imagen de portafolio" />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-4">Descripción del proyecto del portafolio. Aquí puedes escribir el contenido relacionado con este proyecto.</p>
                            <h6 class="portfolio-modal-title text-secondary text-uppercase mb-0">Github link</h6>
                            <a href="#" target="_blank" class="mb-4 d-block">Visita el repositorio en GitHub</a>
                            <button class="btn btn-primary" data-bs-dismiss="modal">
                                <i class="fas fa-xmark fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

