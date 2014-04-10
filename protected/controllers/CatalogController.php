<?php

class CatalogController extends YController
{
    public function actionIndex()
    {
        $cat = isset($_GET['cat']) ? $_GET['cat'] : 3;
        $category = is_numeric($cat) ? Category::model()->findByPk($cat) : Category::model()->findByAttributes(array('url' => $cat));
        if (empty($category) || $category->root != 3) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }

        $descendantIds = $category->getDescendantIds();
        $criteria = Item::model()->getSearchCriteria($_GET,$descendantIds);
        $count = Item::model()->count($criteria);
        $pager = new CPagination($count);
        $pager->pageSize =8;
        $pager->applyLimit($criteria);
        $items = Item::model()->findAll($criteria);
//        var_dump($criteria);die;
        $this->breadcrumbs = Item::model()->setBreadcrumbs($category);
        $categories = $category->children()->findAll();
        $itemProps = ItemProp::model()->with('propValues')->findAll(new CDbCriteria(array('condition' => "t.`category_id` = $category->category_id AND t.`type` > 1")));
        $this->render('index', array(
            'cat' => $cat,
            'count' => $count,
            'category' => $category,
            'items' => $items,
            'pager' => $pager,
            'categories' => $categories,
            'itemProps' => $itemProps,
            'sort' => $_GET['sort'],
            'key' => $_GET['key'],
        ));
    }
}