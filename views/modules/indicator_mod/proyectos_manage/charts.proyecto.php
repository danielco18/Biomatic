                    <?php require_once 'views/include/dashboard.php'; ?>
                        <div class="text-dashboard">
                            <h2 class="dashboard-texto">Gestionar Número de Proyectos</h2>
                            <div class="chart-link volver-link">
                                
                                <a href="proyectos">
                                    <i class="material-icons">keyboard_backspace</i>
                                    <span>Volver</span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div style="width: 100%">
                                    <canvas id="proyecto"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>
    <script src="views/assets/js/sweetalert.min.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.10.15/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <script src="views/assets/js/chart-proyectos.js"></script>
</body>
</html>
