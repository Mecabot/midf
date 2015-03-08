<?php
/**
 * Created by IntelliJ IDEA.
 * User: daniel.palacios
 * Date: 08/03/2015
 * Time: 05:58 AM
 */

class AcercadeController extends Controller {


    public function actionAyuda()
    {
        $this->render('ayuda');
    }

    public function actionQuienes_somos()
    {
        $this->render('quienes_somos');
    }

    public function actionProyecto()
    {
        $this->render('proyecto');
    }

    public function actionContacto()
    {
        $this->render('contacto');
    }

}