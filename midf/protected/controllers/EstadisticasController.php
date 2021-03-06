<?php
/**
 * Created by IntelliJ IDEA.
 * User: Araceli
 * Date: 07/03/2015
 * Time: 10:03 PM
 */

class EstadisticasController extends Controller {

    public function actionIndex($cat)
    {
        $category = Categories::model()->findByAttributes(['id' => $cat]);
        $viewFile = 'stats_' . strtolower(str_replace(' ', '_', $category->name));
        $exists = $this->getViewFile($viewFile);
        $this->render($exists ? $viewFile :'stats');
    }

}