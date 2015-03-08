<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column2';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

    /**
     * @var Categories[] save all the cat1
     */
    protected $cat1;

    /**
     * @var Categories[] save all the cat2
     */
    protected $cat2 = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        // there is not any title per default
        $this->setPageTitle('');
    }

    /**
     * Get all the first level categories
     * @return array|Categories[]|mixed|null|static
     */
    protected function getCat1()
    {
        if (null === $this->cat1) {
            foreach (Categories::model()->findAllByAttributes(['parent_category' => null]) as $cat) {
                $this->cat1[$cat->id] = $cat;
            }
        }
        return $this->cat1;
    }

    /**
     * Get all the second level categories
     * @param $cat1Id
     * @return array|Categories[]|mixed|null|static
     */
    protected function getCat2($cat1Id)
    {
        if (!isset($this->cat2[$cat1Id]) || empty($this->cat2[$cat1Id])) {
            $this->cat2[$cat1Id] = Categories::model()->findAllByAttributes(['parent_category' => $cat1Id], ['order' => 'name']);
        }
        return $this->cat2[$cat1Id];
    }

}