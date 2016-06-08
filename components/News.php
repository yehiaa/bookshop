<?php namespace Acme\Bookshop\Components;

use Cms\Classes\ComponentBase;

class News extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'news Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }


    public function recentNews()
    {
        return \Acme\BookShop\Models\News::orderBy("startDate", "desc")->limit(10)->get();
    }

}