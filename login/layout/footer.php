<footer class="footer p-2 text-center mt-1" style="background-color: #e4f4f4;"> <!--Footer-->
        <div class="container" id="tienda">
            <div class="footer-row">
                <div class="footer-links">
                    <h4>Ayuda</h4>
                    <ul>
                        <li><a href="#">Preguntas</a></li>
                        <li><a href="#">Soporte</a></li>
                        <li><a href="#">Trabaja con nosotros</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Tienda</h4>
                    <ul>
                        <li><a href="#">Ropa</a></li>
                        <li><a href="#">Accesorios</a></li>
                        <li><a href="#">Calzado</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Siguenos</h4>
                    <div class="social-link">
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-youtube"></i></a>
                        <a href=""><i class="bi bi-spotify"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        <a href=""><i class="bi bi-telegram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <script> <!--Audio-->
        const playIcon = document.getElementById('play-audio');
        const audioPlayer = document.getElementById('audio-player');

        playIcon.addEventListener('click', function() {
            if (audioPlayer.paused) {

                audioPlayer.play();
                playIcon.classList.remove('bi-play'); 
                playIcon.classList.add('bi-pause'); 
            } else {
            
                audioPlayer.pause();
                playIcon.classList.remove('bi-pause'); 
                playIcon.classList.add('bi-play'); 
            }
        });
    </script>
    </footer>
    

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    </body>
</html>

    