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
                $this->render('success', ['folio' => uniqid()]);
            }
        }
    }

}