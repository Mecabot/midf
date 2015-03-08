<?php
/**
 * Created by IntelliJ IDEA.
 * User: daniel.palacios
 * Date: 07/03/2015
 * Time: 11:45 PM
 */

class SeguimientoController extends Controller {


    public function actionUno()
    {
        $this->render('seg_mockup');
    }

    public function actionDos()
    {
        $this->render('cons_mockup');
    }

}