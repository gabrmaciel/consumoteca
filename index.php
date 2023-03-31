<?php 
    include 'topo.php';

    $sql = "SELECT cod, maq_nome FROM desenho";
    $result = $conn->query($sql);
?>
    <div id="Corpo">
        <div class="body-inner-div">
            <h1 style="float: none">Página Inicial</h1>
            <div class="ssc ssc-card" style="max-width: 1120px">
                <div class="ssc-wrapper">
                    <div class="flex align-start">
                    <div class="mr w-70">
                        <div class="ssc-square mb" style="height: 200px"></div>
                        <div class="ssc-square mb" style="height: 35px"></div>
                        <div class="ssc-line"></div>
                    </div>
                    <div class="w-30">
                        <div class="ssc-line mb w-60"></div>
                        <div class="ssc-head-line mb"></div>
                        <div class="ssc-line mb w-80"></div>
                        <div class="ssc-line mb w-40"></div>
                        <div class="ssc-line mb w-30"></div>
                        <div class="ssc-line mb w-60"></div>
                        <div class="ssc-line mb"></div>
                        <div class="ssc-line mb w-70"></div>
                        <div class="ssc-line mb w-40"></div>
                        <div class="ssc-line mb w-30"></div>
                    </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
<?php include 'rodape.php'?>