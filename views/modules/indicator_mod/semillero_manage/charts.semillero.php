                    <?php require_once 'views/include/dashboard.php'; ?>
                        <div class="text-dashboard">
                            <h2 class="dashboard-texto">Gestionar Semillero de Investigación</h2>
                            <div class="chart-link volver-link">
                                
                                <a href="semillero">
                                    <i class="material-icons">keyboard_backspace</i>
                                    <span>Volver</span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div style="width: 100%">
                                    <canvas id="semillero"></canvas>
                                </div>
                                <div style="width: 100%; margin: 30px 0;">
                                    <canvas id="vinculados"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="views/assets/js/jquery.min.js"></script>
    <script src="views/assets/js/Chart.bundle.min.js"></script>
    <script src="views/assets/js/sweetalert.min.js"></script>
    <script src="views/assets/js/datatables.min.js"></script>
    <script src="views/assets/js/tether.min.js"></script>
    <script src="views/assets/js/bootstrap.min.js"></script>
    <script src="views/assets/js/chart-semillero.js"></script>
</body>
</html>
