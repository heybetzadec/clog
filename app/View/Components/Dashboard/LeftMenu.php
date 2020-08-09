<?php

namespace App\View\Components\Dashboard;

use Illuminate\View\Component;

class LeftMenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.dashboard.left-menu', [
            'menuList' => $this->getLeftMenuList()
        ]);
    }

    private function getLeftMenuList()
    {
        return [
            'dashboard' => [
                'name' => trans('dashboard.dashboard'),
                'icon' => 'fa fa-dashboard',
                'urlPath'=>route('dashboard.home')
            ],
            'users' => [
                'name' => trans('dashboard.users'),
                'icon' => 'fa fa-users',
                'urlPath'=>route('dashboard.users')
            ],
            'categories' => [
                'name' => trans('dashboard.categories'),
                'icon' => 'fa fa-sitemap',
                'urlPath'=>route('dashboard.categories')
            ],
            'posts' => [
                'name' => trans('dashboard.posts'),
                'icon' => 'fa fa-file',
                'urlPath'=>route('dashboard.posts')
            ],
            'slider' => [
                'name' => trans('dashboard.slider'),
                'icon' => 'fa fa-image',
                'urlPath'=>route('dashboard.slider')
            ],
            'recommend' => [
                'name' => trans('dashboard.recommend'),
                'icon' => 'fa fa-paper-plane-o',
                'urlPath'=>route('dashboard.recommend')
            ],
            'ads' => [
                'name' => trans('dashboard.ads'),
                'icon' => 'fa fa-money',
                'urlPath'=>route('dashboard.ads')
            ],
            'settings' => [
                'name' => trans('dashboard.settings'),
                'icon' => 'fa fa-cogs',
                'urlPath'=>route('dashboard.settings')
            ],
//            'topMenu' => [
//                'name' => 'TopMenu',
//                'subMenuList' => [
//                    'users' => trans('dashboard.users'),
//                    'categories' => trans('dashboard.categories'),
//                ]
//            ],
        ];
    }
}
