<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'landing' => [
        'download' => 'Ladda ner nu',
        'online' => '<strong>:players</strong> spelare online i <strong>:games</strong> spel',
        'peak' => 'Som högst, :count spelare online',
        'players' => '<strong>:count</strong> registrerade spelare',
        'title' => 'välkommen',
        'see_more_news' => 'se fler nyheter',

        'slogan' => [
            'main' => 'det bästaste gratis-att-vinna rytmspelet',
            'sub' => 'rytmen är bara ett klick bort',
        ],
    ],

    'search' => [
        'advanced_link' => 'Avancerad sökning',
        'button' => 'Sök',
        'empty_result' => 'Ingenting hittades!',
        'keyword_required' => 'Ett sökord krävs',
        'placeholder' => 'skriv för att söka',
        'title' => 'Sök',

        'beatmapset' => [
            'login_required' => 'Logga in för att söka beatmaps',
            'more' => ':count fler sökresultat på beatmaps',
            'more_simple' => 'Se fler sökresultat på beatmaps',
            'title' => 'Beatmaps',
        ],

        'forum_post' => [
            'all' => 'Alla forum',
            'link' => 'Sök på forumet',
            'login_required' => 'Logga in för att söka i forumet',
            'more_simple' => 'Se fler sökresultat på forum',
            'title' => 'Forum',

            'label' => [
                'forum' => 'sök i forumen',
                'forum_children' => 'inkludera subforum',
                'topic_id' => 'ämne #',
                'username' => 'författare',
            ],
        ],

        'mode' => [
            'all' => 'alla',
            'beatmapset' => 'beatmap',
            'forum_post' => 'forum',
            'user' => 'spelare',
            'wiki_page' => 'wiki',
        ],

        'user' => [
            'login_required' => 'Logga in för att söka användare',
            'more' => ':count fler sökresultat på spelare',
            'more_simple' => 'Se fler sökresultat på spelare',
            'more_hidden' => 'Sökning på spelare är begränsad till :max spelare. Försök att förfina sökningen.',
            'title' => 'Spelare',
        ],

        'wiki_page' => [
            'link' => 'Sök på wikin',
            'more_simple' => 'Se fler sökresultat på wikin',
            'title' => 'Wiki',
        ],
    ],

    'download' => [
        'tagline' => "låt oss<br>få dig igång!",
        'action' => 'Ladda ner osu!',

        'help' => [
            '_' => 'om du har problem med att starta spelet eller registrera dig för konto, :help_forum_link eller :support_button.',
            'help_forum_link' => '',
            'support_button' => 'kontakta support',
        ],

        'os' => [
            'windows' => 'för Windows',
            'macos' => 'för macOS',
            'linux' => 'för Linux',
        ],
        'mirror' => 'spegel',
        'macos-fallback' => 'macOS användare',
        'steps' => [
            'register' => [
                'title' => 'skaffa ett konto',
                'description' => 'följ anvisningarna när du startar spelet för att logga in eller skapa ett nytt konto',
            ],
            'download' => [
                'title' => 'ladda ner spelet',
                'description' => 'klicka på knappen ovan för att ladda ner installeraren, sedan kör du den!',
            ],
            'beatmaps' => [
                'title' => 'skaffa beatmaps',
                'description' => [
                    '_' => ':browse det stora biblioteket av beatmaps skapade av användare och börja spela!',
                    'browse' => 'bläddra',
                ],
            ],
        ],
        'video-guide' => 'videoguide',
    ],

    'user' => [
        'title' => 'kontrollpanel',
        'news' => [
            'title' => 'Nyheter',
            'error' => 'Fel med att ladda in nyheter, försök ladda om sidan?...',
        ],
        'header' => [
            'stats' => [
                'friends' => 'Vänner Online',
                'games' => 'Spel',
                'online' => 'Användare Online',
            ],
        ],
        'beatmaps' => [
            'new' => 'Nya Rankade Beatmaps',
            'popular' => 'Populära Beatmaps',
            'by_user' => 'av :user',
        ],
        'buttons' => [
            'download' => 'Ladda ner osu!',
            'support' => 'Stötta osu!',
            'store' => 'osu!store',
        ],
    ],

    'support-osu' => [
        'title' => 'Wow!',
        'subtitle' => 'Det ser ut som att du har kul! :D',
        'body' => [
            'part-1' => 'Visste du att osu! körs utan annonser, och förlitar sig på spelare som stöttar utvecklingen och kostnader för underhåll?',
            'part-2' => 'Visste du också att när du stöttar osu! så kommer du få en hög med användbara funktioner, som <strong>nedladdning i spelet</strong> vilket automatiskt sätts igång när du är åskådare eller spelar med andra?',
        ],
        'find-out-more' => 'Klicka här för att ta reda på mer!',
        'download-starting' => "Åh, och oroa dig inte - din nedladdning har redan startas åt dig ;)",
    ],
];
