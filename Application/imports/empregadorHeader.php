 <header id="head">         
            <?php
            require_once __DIR__ . '/../../login.php';
            if ($session) {
                ?>
                <nav>
                    <ul>
                        <li><a href="/PAW_TP/index.php"><img class="navButtons" src="/PAW_TP/Application/Resources/icons/House-256GRAY.png"></a></li>
                        <?php
                        if ($tipoUtilizador === 'prestador') {
                            ?>
                            <li><a href="/PAW_TP/areaPessoalPrestador.php"><img class="navButtons" src="/PAW_TP/Application/Resources/icons/Employee-256GRAY.png"></a></li>
                            <?php
                        } else if ($tipoUtilizador === 'empregador') {
                            ?>
                            <li><a href="/PAW_TP/empregador/AreaEmpregador.php"><img class="navButtons" src="/PAW_TP/Application/Resources/icons/Principal-01-256GRAY.png"></a></li>

                            <?php
                        } else if ($tipoUtilizador === 'administrador') {
                            ?>
                            <li><a href="/PAW_TP/administrador/AreaAdministrador.php"><img class="navButtons" src="/PAW_TP/Application/Resources/icons/Customer-256GRAY.png"></a></li>
                            <?php
                        }
                        ?>
                    </ul> 
                </nav>
                <?php
            }
            ?>
    
            
        </header>