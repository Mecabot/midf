<?php

/**
 * Handles ajax data requests
 *
 * @author saul.martinez
 */
class DataController extends Controller
{

    /**
     * Get the subcategories for a cat1
     * @param null $id
     * @throws Exception
     */
    public function actionCategories($id = null)
    {
        if (empty($id) || !is_numeric($id)) {
            throw new Exception('Invalid request param');
        }

        $data = $this->getCat2($id);
        header('Content-type: application/json');
        echo CJSON::encode($data);
        Yii::app()->end();
    }

}