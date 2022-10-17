<?php

use Spatie\Menu\Laravel\Menu;
use Spatie\Menu\Laravel\Html;
use Spatie\Menu\Laravel\Link;



Menu::macro('adminlteSubmenu', function ($submenuName) {
    return Menu::new()->prepend('<a href="#"><span> ' . $submenuName . '</span> <i class="fa fa-angle-left pull-right"></i></a>')
        ->addParentClass('treeview')->addClass('treeview-menu');
});
Menu::macro('adminlteMenu', function () {
    return Menu::new()
        ->addClass('sidebar-menu')->setAttribute('data-widget', 'tree');
});
Menu::macro('adminlteSeparator', function ($title) {
    return Html::raw($title)->addParentClass('header');
});

Menu::macro('adminlteDefaultMenu', function ($content) {
    return Html::raw('<i class="fa fa-link"></i><span>' . $content . '</span>')->html();
});




Menu::macro('sidebar', function () {
    return Menu::adminlteMenu()

        ->add(Menu::adminlteSeparator(''))
        ->linkIfCan('menu admin', '\welcome', '<i class="fa fa-home"></i><span>ADMINISTRACIÓN</span>')
        /*
        ->add(Menu::new()->prepend('<a href="#"><i class="fa fa-share"></i><span>ADMINISTRACIÓN</span> <i class="fa fa-angle-left pull-right"></i></a>')
            ->addParentClass('treeview')
            ->linkIfCan('menu admin','\admin\servicio', 'Productos')->addClass('treeview-menu')
            ->linkIfCan('menu admin', '\admin\user', '<span>Usuarios</span>')
            ->linkIfCan('menu admin', '\admin\pedido', '<span>Pedidos</span>')
            ->linkIfCan('menu admin', '\admin\indicadores', '<span>Indicadores</span>')
            
        )


        ->add(Menu::new()->prepend('<a href="#"><i class="fa fa-share"></i><span>INDICADORES</span> <i class="fa fa-angle-left pull-right"></i></a>')
            ->addParentClass('treeview')
            ->linkIfCan('menu admin', '\admin\indicadores', '<span>Visitas</span>')->addClass('treeview-menu')
            ->linkIfCan('menu admin', '\admin\user', '<span>Compras</span>')
            ->linkIfCan('menu admin', '\admin\pedido', '<span>Usabilidad</span>')
            
        )

*/

        ->add(Html::raw('MENU')->addParentClass('header'))
        ->action('WelcomeController@index', '<i class="fa fa-home"></i><span>PANEL</span>')
        ->link('micmac', '<i class="fa fa-home"></i><span>MICMAC</span>')
        ->action('MactorController@index', '<i class="fa fa-home"></i><span>MACTOR</span>')
        ->action('SmicController@index', '<i class="fa fa-home"></i><span>SMIC-PRO EXPERT</span>')
        ->action('MorpholController@index', '<i class="fa fa-home"></i><span>MORPHOL</span>')
        ->action('MultipolController@index', '<i class="fa fa-home"></i><span>MULTIPOL</span>')
//        ->url('http://www.google.com', 'Google')
       
        #adminlte_menu
/*       ->add(Menu::adminlteSeparator(''))
        ->add(Menu::new()->prepend('<a href="#"><i class="fa fa-share"></i><span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>')
            ->addParentClass('treeview')
            ->add(Link::to('/link1', 'Link1'))->addClass('treeview-menu')
            ->add(Link::to('/link2', 'Link2'))
            ->url('http://www.google.com', 'Google')
            ->add(Menu::new()->prepend('<a href="#"><span>Multilevel 2</span> <i class="fa fa-angle-left pull-right"></i></a>')
                ->addParentClass('treeview')
                ->add(Link::to('/link21', 'Link21'))->addClass('treeview-menu')
                ->add(Link::to('/link22', 'Link22'))
                ->url('http://www.google.com', 'Google')
            )
        )*/
//        ->add(
//            Menu::fullsubmenuexample()
//        )
//        ->add(
//            Menu::adminlteSubmenu('Best menu')
//                ->add(Link::to('/acacha', 'acacha'))
//                ->add(Link::to('/profile', 'Profile'))
//                ->url('http://www.google.com', 'Google')
//        )
        ->setActiveFromRequest();
});
