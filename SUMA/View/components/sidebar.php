    <div class="sidebar-m" style="overflow-x: hidden;">
            <div class="head-side">
                <div class="head-head-side">
                    <img src="../../../images/ETB.svg" alt="">
                </div>
                <div class="head-info-user">
                    <img src="../../../images/images-suma/user.png" alt="">
                    <p>Bienvenido,</p>
                    <p>Escuela Digital</p>
                </div>
            </div>
            <div class="body-side">
                <a class="item-side">
                    <img style="z-index: 1;" src="../../../images/search.svg" alt="">
                    <p style="z-index: 1;" onclick="sidebar3();">Consultas</p>
                    <img style="z-index: 1;" src="../../../images/angle-down.svg" alt="" class="img-drowndonw">
                    <button onclick="sidebar3();" id="btn-sid3" style="opacity: 0; height: 50px; width: 245px; background-color: var(--orange-etb); position: relative; bottom: 178px; border: none;"></button>
                    <ul style="margin-top: 20px; display: none;" id="ull3">
                        <li style="color: #fff; width: 110px; margin-bottom: 10px; cursor: pointer;">Vista 360</li>
                        <li style="color: #fff; width: 110px; margin-bottom: 10px; cursor: pointer;">Contrato Digital</li>
                        <li style="color: #fff; width: 110px; margin-bottom: 10px; cursor: pointer;">Ordenes de Servicio Tecnico</li>
                        <li style="color: #fff; width: 110px; margin-bottom: 10px; cursor: pointer;">Establecimiento SIC</li>
                        <li style="color: #fff; width: 110px; margin-bottom: 10px; cursor: pointer;">BackOperativoMiETB</li>
                        <li style="color: #fff; width: 110px; margin-bottom: 10px; cursor: pointer;" onclick="consul5();">Soporte N1</li>
                    </ul>
                </a>
                <a class="item-side" id="ite11">
                    <img style="z-index: 1;" src="../../../images/megafono.svg" alt="">
                    <p style="z-index: 1;" onclick="sidebar();">PQRs</p>
                    <img style="z-index: 1;" src="../../../images/angle-down.svg" alt="" class="img-drowndonw">
                    <button onclick="sidebar();" id="btn-sid" style="opacity: 0; height: 50px; width: 245px; background-color: var(--orange-etb); position: relative; bottom: 137px; border: none;"></button>
                    <ul style="margin-top: 20px; display: none;" id="ull">
                        <li style="color: #fff; width: 110px; margin-bottom: 10px; cursor: pointer;" onclick="consul();">Consultar PQR</li>
                        <li style="color: #fff; width: 110px; margin-bottom: 10px; cursor: pointer;">Consultar Log</li>
                        <li style="color: #fff; width: 110px; margin-bottom: 10px; cursor: pointer;">Gestion Cliente</li>
                        <li style="color: #fff; width: 110px; margin-bottom: 10px; cursor: pointer;">Cambio Metodo Envio de Factura</li>
                        <li style="color: #fff; width: 110px; margin-bottom: 10px; cursor: pointer;">Consulta</li>
                    </ul>
                </a>
                <a class="item-side" id="ite1">
                    <img src="../../../images/images-suma/square-exclamation 1.svg" alt="">
                    <p>Soporte Fibra</p>
                    <img src="../../../images/angle-down.svg" alt="" class="img-drowndonw">
                </a>
                <a class="item-side" id="item2" style="display: none;">
                    <img src="../../../images/images-suma/square-exclamation 1.svg" alt="">
                    <p>NVOC</p>
                    <img src="../../../images/angle-down.svg" alt="" class="img-drowndonw">
                </a>
                <a class="item-side" id="ite3">
                    <img src="../../../images/images-suma/clipw.svg" alt="">
                    <p>Notificaciones</p>
                    <img src="../../../images/angle-down.svg" alt="" class="img-drowndonw">
                </a>
                <a class="item-side" id="ite4" style="display: none;">
                    <img style="z-index: 1;" src="../../../images/house.png" alt="">
                    <p style="z-index: 1;" onclick="sidebar2();">Tramites Fija</p>
                    <img style="z-index: 1;" src="../../../images/angle-down.svg" alt="" class="img-drowndonw">
                    <button onclick="sidebar2();" id="btn-sid2" style="opacity: 0; height: 50px; width: 245px; background-color: var(--orange-etb); position: relative; bottom: 204px; border: none;"></button>
                    <ul style="margin-top: 20px; display: none;" id="ull2">
                        <li style="color: #fff; width: 110px; margin-bottom: 10px; cursor: pointer;" onclick="consul4();">Cambio de Plan (PRCH)</li>
                        <li style="color: #fff; width: 110px; margin-bottom: 10px; cursor: pointer;">Convenio (Convenio)</li>
                        <li style="color: #fff; width: 110px; margin-bottom: 10px; cursor: pointer;">Traslado (TRAS)</li>
                        <li style="color: #fff; width: 110px; margin-bottom: 10px; cursor: pointer;">Cambio de Estado (CEST)</li>
                        <li style="color: #fff; width: 110px; margin-bottom: 10px; cursor: pointer;" onclick="consul2();">Adición SVA'S (ASER)</li>
                        <li style="color: #fff; width: 110px; margin-bottom: 10px; cursor: pointer;" onclick="consul3();">Retiro SVA'S (RSER)</li>
                    </ul>
                </a>
                <div style="display: none;">
                <a>
                    <h2 class="disivision-tittle" id="ite6">ADMINISTRACIÓN</h2>
                </a>
                <a class="item-side" id="ite4">
                    <img src="../../../images/images-suma/base-de-datos.svg" alt="">
                    <p>PQR - PARAMETROS</p>
                    <img src="../../../images/angle-down.svg" alt="" class="img-drowndonw">
                </a>
                <a class="item-side" id="ite5">
                    <img src="../../../images/images-suma/settings.svg" alt="">
                    <p>Parametros</p>
                    <img src="../../../images/angle-down.svg" alt="" class="img-drowndonw">
                </a>
                </div>
                <img class="responsive-img" id="mark1" src="../../../images/mark1.png" alt="">
                <button class="btn-secondary" id="mark2" style="width: 50%; position: relative; left: 60px; top: 200px; height: 50px; border-radius: 15px;" onclick="location.href ='../../menu/menuSUMA.html'">VOLVER AL MENU</button>
            </div>
            <div class="foo-side">
                <div class="content-foo">
                    <a><img src="../../../images/images-suma/settings.svg" alt=""></a>
                    <a><img src="../../../images/images-suma/expand-arrows 1.svg" alt=""></a>
                    <a><img src="../../../images/images-suma/low-vision 1.svg" alt=""></a>
                    <a href="../../menu/menuSuma.html"><img src="../../../images/images-suma/power 1.svg" alt=""></a>
                </div>
            </div>

</div>