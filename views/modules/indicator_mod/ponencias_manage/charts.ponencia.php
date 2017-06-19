                    <?php require_once 'views/include/dashboard.php'; ?>
                        <div class="text-dashboard">
                            <h2 class="dashboard-texto">Gestionar Ponencias</h2>
                            <div class="chart-link volver-link">

                                <a href="ponencias">
                                    <i class="material-icons">keyboard_backspace</i>
                                    <span>Volver</span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div style="width: 100%">
                                    <canvas id="participacion"></canvas>
                                </div>
                            </div>
                            <div class="col-lg-10 offset-lg-1">
                                <div style="width: 100%; margin: 30px 0;">
                                    <canvas id="tipoPonencia"></canvas>
                                </div>
                            </div>
                            <div class="col-lg-8 offset-lg-2">
                                <div style="width: 100%; margin-bottom: 30px;">
                                    <canvas id="otra"></canvas>
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
    <script src="views/assets/js/chart-ponencias.js"></script>
</body>
</html>
