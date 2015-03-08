<?php

/**
 * Handles report requests
 *
 * @author saul.martinez
 */
class ReportController extends Controller
{

    /**
     * Shows the welcome text
     */
    public function actionIndex()
    {
        $this->render('index');
    }

    /**
     * Create a new report
     * @param null $cat
     */
    public function actionAdd($cat = null) {
        if (null === $cat && empty($_POST)) {
            $this->render('select_category');
        } else {
            if (empty($_POST)) {
                $cat2 = Categories::model()->findByAttributes(['id' => $cat]);
                $cat1 = $this->getCat1()[$cat2->parent_category];
                $this->render('add', ['cat1' => $cat1, 'cat2' => $cat2]);
            } else {
                $model = new Denuncias();

                /** @var CHttpRequest $request */
                $request = Yii::app()->request;

                $cp = $request->getParam('CP');

                /** @var SepomexDf $location */
                $location = SepomexDf::model()->findByAttributes(['CP' => $cp]);

                if (null !== $location) {
                    $model->setAttributes($request->getRestParams());
                    $model->colonia = $location->Asentamiento;
                    $model->delegacion = $location->Municipio;
                    $model->codigo_postal = $location->CP;
                    $model->updated_at = date('Y-m-d H:i:s');
                    $model->create_at = date('Y-m-d H:i:s');
                    $model->num_folio = time();
                    $model->fk_estatus = 1;

                    // get the location data
                    if ($model->save()) {
                        $this->render('success', ['folio' => $model->num_folio]);
                    } else {
                        $this->render(' success', ['folio' => $model->num_folio, 'status' => 'error']);
                    }
                } else {
                    Yii::app()->user->setFlash('danger', "Gracias por usar nuestra aplicación pero tu CP <strong>$cp</strong> no pertenece al DF");
                    return $this->actionIndex();
                }
            }
        }
    }

}