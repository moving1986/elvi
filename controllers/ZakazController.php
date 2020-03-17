<?php

class ZakazController {

    public function actionIndex() {

        require_once (ROOT. '/views/zakaz/index.php');

        return true;
    }

}