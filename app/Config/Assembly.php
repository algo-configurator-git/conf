<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Assembly extends BaseConfig
{
    public array $componentListData = [
        [
            'title' => 'Системный блок',
            'required' => true,
            'components' => [
                [
                    'icon' => '/assets/images/icons/config_page/cpu_img.svg',
                    'name' => 'Процессор',
                    'id' => 8,
                    'required' => true,
                ],
                [
                    'icon' => '/assets/images/icons/config_page/cooler_img.svg',
                    'name' => 'Кулер',
                    'id' => 18,
                    'required' => true,
                ],
                [
                    'icon' => '/assets/images/icons/config_page/motherboard__img.svg',
                    'name' => 'Материнская плата',
                    'id' => 9,
                    'required' => true,
                ],
                [
                    'icon' => '/assets/images/icons/config_page/ram_img.svg',
                    'name' => 'Оперативная память',
                    'id' => 17,
                    'required' => true,
                ],
                [
                    'icon' => '/assets/images/icons/config_page/videocard_img.svg',
                    'name' => 'Видеокарта',
                    'id' => 15,
                    'required' => true,
                ],
                [
                    'icon' => '/assets/images/icons/config_page/hdd_img.svg',
                    'name' => 'Жёсткий диск',
                    'id' => 90,
                    'required' => true,
                ],
                [
                    'icon' => '/assets/images/icons/config_page/ssd_img.svg',
                    'name' => 'SSD',
                    'id' => 253,
                    'required' => true,
                ],
                [
                    'icon' => '/assets/images/icons/config_page/case_img.svg',
                    'name' => 'Корпус',
                    'id' => 53,
                    'required' => true,
                ],
                [
                    'icon' => '/assets/images/icons/config_page/powerunit_img.svg',
                    'name' => 'Блок питания',
                    'id' => 54,
                    'required' => true,
                ],
            ],
        ],
        [
            'title' => 'Периферийные устройства',
            'required' => false,
            'components' => [
                [
                    'icon' => '/assets/images/icons/config_page/monitor.svg',
                    'name' => 'Монитор',
                    'id' => 6,
                    'required' => false,
                ],
                [
                    'icon' => '/assets/images/icons/config_page/keyboard.svg',
                    'name' => 'Клавиатура',
                    'id' => 42,
                    'required' => false,
                ],
                [
                    'icon' => '/assets/images/icons/config_page/mouse.svg',
                    'name' => 'Мышь',
                    'id' => 43,
                    'required' => false,
                ],
                [
                    'icon' => '/assets/images/icons/config_page/mouse_pad.svg',
                    'name' => 'Коврик для мыши',
                    'id' => 55,
                    'required' => false,
                ],
                [
                    'icon' => '/assets/images/icons/config_page/music_speakers.svg',
                    'name' => 'Колонки',
                    'id' => 22,
                    'required' => false,
                ],
                [
                    'icon' => '/assets/images/icons/config_page/earphones.svg',
                    'name' => 'Наушники',
                    'id' => 38,
                    'required' => false,
                ],
                [
                    'icon' => '/assets/images/icons/config_page/gaming_chair.svg',
                    'name' => 'Игровое кресло',
                    'id' => 413,
                    'required' => false,
                ],
                [
                    'icon' => '/assets/images/icons/config_page/surge_protector.svg',
                    'name' => 'Сетевой фильтр',
                    'id' => 106,
                    'required' => false,
                ],
                [
                    'icon' => '/assets/images/icons/config_page/web_cam.svg',
                    'name' => 'Веб-камера',
                    'id' => 154,
                    'required' => false,
                ],
                [
                    'icon' => '/assets/images/icons/config_page/printer.svg',
                    'name' => 'Принтеры и МФУ',
                    'id' => 32,
                    'required' => false,
                ],
            ],
        ],
        [
            'title' => 'Дополнительно',
            'required' => false,
            'components' => [
                [
                    'icon' => '/assets/images/icons/config_page/assembly.svg',
                    'name' => 'Сборка специалистом',
                    'id' => 1,
                    'required' => false,
                ],
                [
                    'icon' => '/assets/images/icons/config_page/windows_trial.svg',
                    'name' => 'Установка Windows 11 ознакомительный',
                    'id' => 158,
                    'required' => false,
                ],
                [
                    'icon' => '/assets/images/icons/config_page/windows_lisence.svg',
                    'name' => 'Установка Windows 11 лицензия',
                    'id' => 158,
                    'required' => false,
                ],
                [
                    'icon' => '/assets/images/icons/config_page/ms_office.svg',
                    'name' => 'Установка Office лицензия',
                    'id' => 166,
                    'required' => false,
                ],
            ],
        ],
    ];
}
