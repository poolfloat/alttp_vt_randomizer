<?php

return [
    'banner' => env('BANNER_TEXT', null),
    'base_rom' => env('ENEMIZER_BASE', null),
    'api_throttle_whitelist' => explode(',', env('API_THROTTLE_WHITELIST', '')),
    'custom' => [
        'prize' => [
            'crossWorld' => false,
            'shufflePendants' => false,
            'shuffleCrystals' => false,
        ],
        'region' => [
            'bossNormalLocation' => false,
            'pyramidBowUpgrade' => false,
            'bossHaveKey' => false,
            'forceSkullWoodsKey' => false,
            'wildKeys' => false,
            'wildBigKeys' => false,
            'wildMaps' => false,
            'wildCompasses' => false,
        ],
        'rom' => [
            'genericKeys' => false,
            'hudItemCounter' => false,
        ],
        'spoil' => [
            'BootsLocation' => false,
        ],
    ],
    'goals' => [
        'triforce-hunt' => [
            'item' => [
                'count' => [
                    'TriforcePiece' => 30,
                ],
                'Goal' => [
                    'Required' => 20,
                    'Icon' => 'triforce',
                ],
            ],
        ],
        'ganonhunt' => [
            'item' => [
                'count' => [
                    'TriforcePiece' => 50,
                ],
                'Goal' => [
                    'Required' => 40,
                    'Icon' => 'triforce',
                ],
            ],
        ],
    ],
    'randomizer' => [
        'item' => [
            'presets' => [
                'custom' => [],
                'beginner' => [
                    'glitches_required' => 'none',
                    'item_placement' => 'basic',
                    'dungeon_items' => 'standard',
                    'accessibility' => 'locations',
                    'goal' => 'ganon',
                    'tower_open' => '7',
                    'ganon_open' => '7',
                    'world_state' => 'standard',
                    'entrance_shuffle' => 'none',
                    'boss_shuffle' => 'none',
                    'enemy_shuffle' => 'none',
                    'hints' => 'off',
                    'weapons' => 'assured',
                    'item_pool' => 'normal',
                    'item_functionality' => 'normal',
                    'enemy_damage' => 'default',
                    'enemy_health' => 'default',
                ],
                'default' => [
                    'glitches_required' => 'none',
                    'item_placement' => 'advanced',
                    'dungeon_items' => 'standard',
                    'accessibility' => 'items',
                    'goal' => 'ganon',
                    'tower_open' => '7',
                    'ganon_open' => '7',
                    'world_state' => 'open',
                    'entrance_shuffle' => 'none',
                    'boss_shuffle' => 'none',
                    'enemy_shuffle' => 'none',
                    'hints' => 'on',
                    'weapons' => 'randomized',
                    'item_pool' => 'normal',
                    'item_functionality' => 'normal',
                    'enemy_damage' => 'default',
                    'enemy_health' => 'default',
                ],
                'tournament' => [
                    'glitches_required' => 'none',
                    'item_placement' => 'advanced',
                    'dungeon_items' => 'standard',
                    'accessibility' => 'items',
                    'goal' => 'ganon',
                    'tower_open' => '7',
                    'ganon_open' => '7',
                    'world_state' => 'standard',
                    'entrance_shuffle' => 'none',
                    'boss_shuffle' => 'none',
                    'enemy_shuffle' => 'none',
                    'hints' => 'on',
                    'weapons' => 'randomized',
                    'item_pool' => 'hard',
                    'item_functionality' => 'normal',
                    'enemy_damage' => 'default',
                    'enemy_health' => 'default',
                ],
                'veetorp' => [
                    'glitches_required' => 'overworld_glitches',
                    'item_placement' => 'basic',
                    'dungeon_items' => 'standard',
                    'accessibility' => 'locations',
                    'goal' => 'fast_ganon',
                    'tower_open' => '7',
                    'ganon_open' => '7',
                    'world_state' => 'open',
                    'entrance_shuffle' => 'none',
                    'boss_shuffle' => 'none',
                    'enemy_shuffle' => 'none',
                    'hints' => 'on',
                    'weapons' => 'randomized',
                    'item_pool' => 'normal',
                    'item_functionality' => 'normal',
                    'enemy_damage' => 'default',
                    'enemy_health' => 'default',
                ],
                'crosskeys' => [
                    'glitches_required' => 'none',
                    'item_placement' => 'advanced',
                    'dungeon_items' => 'full',
                    'accessibility' => 'items',
                    'goal' => 'fast_ganon',
                    'tower_open' => '7',
                    'ganon_open' => '7',
                    'world_state' => 'open',
                    'entrance_shuffle' => 'crossed',
                    'boss_shuffle' => 'none',
                    'enemy_shuffle' => 'none',
                    'hints' => 'on',
                    'weapons' => 'randomized',
                    'item_pool' => 'normal',
                    'item_functionality' => 'normal',
                    'enemy_damage' => 'default',
                    'enemy_health' => 'default',
                ],
                'quick' => [
                    'glitches_required' => 'none',
                    'item_placement' => 'basic',
                    'dungeon_items' => 'standard',
                    'accessibility' => 'none',
                    'goal' => 'fast_ganon',
                    'tower_open' => '0',
                    'ganon_open' => '0',
                    'world_state' => 'open',
                    'entrance_shuffle' => 'none',
                    'boss_shuffle' => 'none',
                    'enemy_shuffle' => 'none',
                    'hints' => 'off',
                    'weapons' => 'assured',
                    'item_pool' => 'normal',
                    'item_functionality' => 'normal',
                    'enemy_damage' => 'default',
                    'enemy_health' => 'default',
                ],
                'nightmare' => [
                    'glitches_required' => 'none',
                    'item_placement' => 'advanced',
                    'dungeon_items' => 'full',
                    'accessibility' => 'none',
                    'goal' => 'ganon',
                    'tower_open' => '7',
                    'ganon_open' => '7',
                    'world_state' => 'inverted',
                    'entrance_shuffle' => 'insanity',
                    'boss_shuffle' => 'random',
                    'enemy_shuffle' => 'random',
                    'hints' => 'off',
                    'weapons' => 'swordless',
                    'item_pool' => 'expert',
                    'item_functionality' => 'expert',
                    'enemy_damage' => 'random',
                    'enemy_health' => 'expert',
                ],
            ],
            'glitches_required' => [
                'none' => 'None',
                'overworld_glitches' => 'Overworld Glitches',
                'hybrid_major_glitches' => 'Hybrid Major Glitches',
                'major_glitches' => 'Major Glitches',
                'no_logic' => 'No Logic',
            ],
            'item_placement' => [
                'basic' => 'Basic',
                'advanced' => 'Advanced',
            ],
            'dungeon_items' => [
                'standard' => 'Standard',
                'mc' => 'MC Shuffle',
                'mcs' => 'MCS Shuffle',
                'full' => 'Full Shuffle',
            ],
            'accessibility' => [
                'items' => '100% Inventory',
                'locations' => '100% Locations',
                'none' => 'Not Guaranteed',
            ],
            'goals' => [
                'ganon' => 'Defeat Ganon',
                'fast_ganon' => 'Fast Ganon',
                'dungeons' => 'All Dungeons',
                'pedestal' => 'Master Sword Pedestal',
                'triforce-hunt' => 'Triforce Pieces',
                'ganonhunt' => 'Ganonhunt',
                'completionist' => 'Completionist',
            ],
            'tower_open' => [
                '0' => 'none',
                '1' => '1',
                '2' => '2',
                '3' => '3',
                '4' => '4',
                '5' => '5',
                '6' => '6',
                '7' => '7',
                'random' => 'random',
            ],
            'ganon_open' => [
                '0' => 'none',
                '1' => '1',
                '2' => '2',
                '3' => '3',
                '4' => '4',
                '5' => '5',
                '6' => '6',
                '7' => '7',
                'random' => 'random',
            ],
            'world_state' => [
                'standard' => 'Standard',
                'open' => 'Open',
                'inverted' => 'Inverted',
                'retro' => 'Retro',
            ],
            'entrance_shuffle' => [
                'none' => 'None',
                'simple' => 'Simple',
                'restricted' => 'Restricted',
                'full' => 'Full',
                'crossed' => 'Crossed',
                'insanity' => 'Insanity',
            ],
            'boss_shuffle' => [
                'none' => 'None',
                'simple' => 'Simple',
                'full' => 'Full',
                'random' => 'Random',
            ],
            'enemy_shuffle' => [
                'none' => 'None',
                'shuffled' => 'Shuffled',
                'random' => 'Random',
            ],
            'pot_shuffle' => [
                'on' => 'On',
                'off' => 'Off',
            ],
            'hints' => [
                'on' => 'On',
                'off' => 'Off',
            ],
            'weapons' => [
                'randomized' => 'Randomized',
                'assured' => 'Assured',
                'vanilla' => 'Vanilla',
                'swordless' => 'Swordless',
            ],
            'item_pool' => [
                'normal' => 'Normal',
                'hard' => 'Hard',
                'expert' => 'Expert',
                'crowd_control' => 'Crowd Control',
            ],
            'item_functionality' => [
                'normal' => 'Normal',
                'hard' => 'Hard',
                'expert' => 'Expert',
            ],
            'enemy_damage' => [
                'default' => 'Default',
                'shuffled' => 'Shuffled',
                'random' => 'Random',
            ],
            'enemy_health' => [
                'default' => 'Default',
                'easy' => 'Easy',
                'hard' => 'Hard',
                'expert' => 'Expert',
            ],
            'spoilers' => [
                'on' => 'On',
                'off' => 'Off',
                'generate' => 'Generate',
                'mystery' => 'Mystery',
            ],
        ],
        'daily_weights' => [
            'glitches_required' => [
                'none' => 88,
                'overworld_glitches' => 7,
                'hybrid_major_glitches' => 3,
                'major_glitches' => 1,
                'no_logic' => 1,
            ],
            'item_placement' => [
                'basic' => 60,
                'advanced' => 40,
            ],
            'dungeon_items' => [
                'standard' => 60,
                'mc' => 10,
                'mcs' => 10,
                'full' => 20,
            ],
            'accessibility' => [
                'items' => 60,
                'locations' => 10,
                'none' => 30,
            ],
            'goals' => [
                'ganon' => 30,
                'fast_ganon' => 40,
                'dungeons' => 10,
                'pedestal' => 10,
                'triforce-hunt' => 10,
                'ganonhunt' => 0,
                'completionist' => 0,
            ],
            'tower_open' => [
                '0' => 5,
                '1' => 5,
                '2' => 5,
                '3' => 5,
                '4' => 5,
                '5' => 5,
                '6' => 5,
                '7' => 50,
                'random' => 15,
            ],
            'ganon_open' => [
                '0' => 5,
                '1' => 5,
                '2' => 5,
                '3' => 5,
                '4' => 5,
                '5' => 5,
                '6' => 5,
                '7' => 50,
                'random' => 15,
            ],
            'world_state' => [
                'standard' => 20,
                'open' => 45,
                'inverted' => 25,
                'retro' => 10,
            ],
            'entrance_shuffle' => [
                'none' => 92,
                'simple' => 2,
                'restricted' => 2,
                'full' => 2,
                'crossed' => 1,
                'insanity' => 1,
            ],
            'boss_shuffle' => [
                'none' => 80,
                'simple' => 5,
                'full' => 5,
                'random' => 10,
            ],
            'enemy_shuffle' => [
                'none' => 90,
                'shuffled' => 7,
                'random' => 3,
            ],
            'hints' => [
                'on' => 50,
                'off' => 50,
            ],
            'weapons' => [
                'randomized' => 70,
                'assured' => 10,
                'vanilla' => 10,
                'swordless' => 10,
            ],
            'item_pool' => [
                'normal' => 70,
                'hard' => 20,
                'expert' => 10,
            ],
            'item_functionality' => [
                'normal' => 70,
                'hard' => 20,
                'expert' => 10,
            ],
            'enemy_damage' => [
                'default' => 93,
                'shuffled' => 5,
                'random' => 2,
            ],
            'enemy_health' => [
                'easy' => 2,
                'default' => 92,
                'hard' => 5,
                'expert' => 1,
            ],
            'spoilers' => [
                'on' => 0,
                'off' => 95,
                'generate' => 0,
                'mystery' => 5
            ]
        ],
    ],
];
