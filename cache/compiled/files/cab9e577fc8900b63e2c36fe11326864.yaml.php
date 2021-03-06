<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/sterli00/devuserlab.com/www/user/plugins/jscomments/languages.yaml',
    'modified' => 1471792374,
    'data' => [
        'de' => [
            'PLUGINS' => [
                'JS_COMMENTS' => [
                    'PLUGIN_NAME' => 'JSComments',
                    'PLUGIN_STATUS' => 'Plugin Status',
                    'PLUGIN_ACTIVE' => 'Aktiv',
                    'PLUGIN_ACTIVE_HELP' => 'Diese Option dient zur (De-)Aktivierung des Plugins auf Seiten-Ebene.',
                    'NONE_SELECTED' => '- Nichts ausgewählt -',
                    'USE_DEFAULT' => '- Standard -',
                    'OVERRIDE' => [
                        'PAGE_TITLE' => 'Überschreibe Seiten-Titel',
                        'PAGE_URL' => 'Überschreibe Seiten-URL',
                        'PAGE_ID' => 'Überschreibe Seiten-ID'
                    ],
                    'PROVIDERS' => [
                        'TITLE' => 'Provider',
                        'HELP' => 'Wähle ein Kommentarsystem-Dienst.',
                        'DISCOURSE' => [
                            'TITLE' => 'Discourse',
                            'NOSCRIPT' => 'Bitte aktivieren Sie JavaScript um <a href="https://www.discourse.org/" rel="nofollow">die Discourse-Kommentare anzuzeigen zu können.</a>',
                            'COPYRIGHT' => '<a href="https://www.discourse.org/" rel="nofollow">Kommentare unterstützt von <span>Discourse</span>.</a>',
                            'FIELDS' => [
                                'HOST' => 'Discourse-URL',
                                'HOST_HELP' => 'Die URL zum Discourse-Kommentardienst.'
                            ]
                        ],
                        'DISQUS' => [
                            'TITLE' => 'Disqus',
                            'NOSCRIPT' => 'Bitte aktivieren Sie JavaScript um <a href="http://disqus.com/?ref_noscript" rel="nofollow">die Disqus-Kommentare anzuzeigen zu können.</a>',
                            'COPYRIGHT' => '<a href="http://disqus.com" class="dsq-brlink" rel="nofollow">Kommentare unterstützt von <span class="logo-disqus">Disqus</span>.</a>',
                            'FIELDS' => [
                                'SHORTNAME' => 'Forum Kurzname',
                                'SHORTNAME_HELP' => 'Ermöglicht dem Disqus-Dienst deinen eindeutigen Forum Kurznamen zu laden. Falls undefiniert wird Disqus keine Kommentare laden.',
                                'COUNT' => 'Kommentarzähler anzeigen',
                                'DEFAULT_LANGUAGE' => 'Sprache',
                                'DEFAULT_LANGUAGE_HELP' => 'Verwende die eingestellte Sprache für das Disqus-Kommentarfeld.'
                            ]
                        ],
                        'FACEBOOK' => [
                            'TITLE' => 'Facebook',
                            'FIELDS' => [
                                'APPID' => 'App ID',
                                'APPID_HELP' => 'Die App ID, die man von der Facebook Developers Seite erhält (https://developers.facebook.com/apps).',
                                'LANGUAGE' => 'Sprache',
                                'LANGUAGE_HELP' => 'Passe die Sprache des Kommentar-Moduls an (lädt eine lokalisierte Version des Facebook SDK für JavaSkript).',
                                'NUM_POSTS' => 'Anzahl Kommentare',
                                'NUM_POSTS_HELP' => 'Die Anzahl an Kommentaren, die standardmäßig angezeigt werden.',
                                'NUM_POSTS_APPEND' => 'Kommentare',
                                'COLORSCHEME' => [
                                    'TITLE' => 'Farbschema',
                                    'HELP' => 'Das verwendete Farbschema. Kann "hell" oder "dunkel" sein.',
                                    'OPTIONS' => [
                                        'LIGHT' => 'Hell',
                                        'DARK' => 'Dunkel'
                                    ]
                                ],
                                'ORDER_BY' => [
                                    'TITLE' => 'Reihenfolge',
                                    'HELP' => 'Beeinflusst die Reihenfolge wie Kommenare angezeigt werden.',
                                    'OPTIONS' => [
                                        'SOCIAL' => 'Sozial',
                                        'REVERSE_TIME' => 'Umgekehrt zeitlich geordnet',
                                        'TIME' => 'Zeitlich geordnet'
                                    ]
                                ],
                                'WIDTH' => 'Breite (px oder %)',
                                'WIDTH_HELP' => 'Die Breite des Kommentar-Plugins auf der Webseite. Das kann ein Pixel-Wert oder ein prozentualer Wert sein (wie z.B. 100% für dynamische Breiten).'
                            ]
                        ],
                        'GOOGLEPLUS' => [
                            'TITLE' => 'Google+',
                            'FIELDS' => [
                                'COUNT' => 'Kommentarzähler anzeigen',
                                'DEFAULT_LANGUAGE' => 'Sprache',
                                'DEFAULT_LANGUAGE_HELP' => 'Verwende die eingestellte Sprache für Google+ Kommentare.',
                                'WIDTH' => 'Breite (px oder %)',
                                'WIDTH_HELP' => 'Die Breite des Kommentar-Plugins auf der Webseite. Das kann ein Pixel-Wert oder ein prozentualer Wert sein (wie z.B. 100% für dynamische Breiten).'
                            ]
                        ],
                        'INTENSEDEBATE' => [
                            'TITLE' => 'IntenseDebate',
                            'FIELDS' => [
                                'ACCOUNT_NUMBER' => 'Account Nummer',
                                'ACCOUNT_NUMBER_HELP' => 'Dies ist deine IntenseDebate Blog Account-Nummer, die du nach dem Erstellen des Blog-Accounts vorfindest.'
                            ]
                        ],
                        'MUUT' => [
                            'TITLE' => 'Muut',
                            'COMMENTS' => 'Kommentare',
                            'FIELDS' => [
                                'FORUM' => 'Forum Name',
                                'CHANNEL' => 'Kanal',
                                'SHOW_ONLINE' => 'Online-User anzeigen',
                                'SHOW_TITLE' => 'Titel anzeigen',
                                'UPLOAD' => 'Uploads erlauben',
                                'SHARE' => '"Gefällt mir"-Button anzeigen',
                                'WIDGET' => 'Nachrichten-Widget',
                                'WIDGET_HELP' => 'Blendet ein Nachrichten-Button auf der unteren rechten Seite des Browsers ein.',
                                'LANGUAGE' => 'Sprache'
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'en' => [
            'PLUGINS' => [
                'JS_COMMENTS' => [
                    'PLUGIN_NAME' => 'JSComments',
                    'PLUGIN_STATUS' => 'Plugin status',
                    'PLUGIN_ACTIVE' => 'Active',
                    'PLUGIN_ACTIVE_HELP' => 'This option is used to (de-)activate this plugin on a per-page basis.',
                    'NONE_SELECTED' => '- None selected -',
                    'USE_DEFAULT' => '- Use default -',
                    'OVERRIDE' => [
                        'PAGE_TITLE' => 'Override page title',
                        'PAGE_URL' => 'Override page URL',
                        'PAGE_ID' => 'Override page ID'
                    ],
                    'PROVIDERS' => [
                        'TITLE' => 'Provider',
                        'HELP' => 'Choose a comment system provider.',
                        'DISCOURSE' => [
                            'TITLE' => 'Discourse',
                            'NOSCRIPT' => 'Please enable JavaScript to view the <a href="https://www.discourse.org/" rel="nofollow">comments powered by Discourse.</a>',
                            'COPYRIGHT' => '<a href="https://www.discourse.org/" rel="nofollow">Blog Comments powered by <span>Discourse</span>.</a>',
                            'FIELDS' => [
                                'HOST' => 'Discourse URL',
                                'HOST_HELP' => 'The URL to the Discourse commenting system.'
                            ]
                        ],
                        'DISQUS' => [
                            'TITLE' => 'Disqus',
                            'NOSCRIPT' => 'Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a>',
                            'COPYRIGHT' => '<a href="http://disqus.com" class="dsq-brlink" rel="nofollow">Blog Comments powered by <span class="logo-disqus">Disqus</span>.</a>',
                            'FIELDS' => [
                                'SHORTNAME' => 'Forum shortname',
                                'SHORTNAME_HELP' => 'Tells the Disqus service your forum\'s shortname, which is the unique identifier for your website as registered on Disqus. If undefined, the Disqus embed will not load.',
                                'COUNT' => 'Show comment count',
                                'DEFAULT_LANGUAGE' => 'Default language',
                                'DEFAULT_LANGUAGE_HELP' => 'Dynamically load the Disqus embed in different languages on a per-page basis.'
                            ]
                        ],
                        'FACEBOOK' => [
                            'TITLE' => 'Facebook',
                            'FIELDS' => [
                                'APPID' => 'App ID',
                                'APPID_HELP' => 'The App ID you get from the Facebook Developers page (https://developers.facebook.com/apps).',
                                'LANGUAGE' => 'Language',
                                'LANGUAGE_HELP' => 'Adjust the language of the Comments plugin by loading a localized version of the Facebook SDK for JavaScript.',
                                'NUM_POSTS' => 'Number of visible posts',
                                'NUM_POSTS_HELP' => 'The number of comments to show by default.',
                                'NUM_POSTS_APPEND' => 'posts',
                                'COLORSCHEME' => [
                                    'TITLE' => 'Color scheme',
                                    'HELP' => 'The color scheme used by the comments plugin. Can be "light" or "dark".',
                                    'OPTIONS' => [
                                        'LIGHT' => 'Light',
                                        'DARK' => 'Dark'
                                    ]
                                ],
                                'ORDER_BY' => [
                                    'TITLE' => 'Order by',
                                    'HELP' => 'The order to use when displaying comments.',
                                    'OPTIONS' => [
                                        'SOCIAL' => 'Social',
                                        'REVERSE_TIME' => 'Reverse time',
                                        'TIME' => 'Time'
                                    ]
                                ],
                                'WIDTH' => 'Width (px or %)',
                                'WIDTH_HELP' => 'The width of the comments plugin on the webpage. This can be either a pixel value or a percentage (such as 100%) for fluid width.'
                            ]
                        ],
                        'GOOGLEPLUS' => [
                            'TITLE' => 'Google+',
                            'FIELDS' => [
                                'COUNT' => 'Show comment count',
                                'DEFAULT_LANGUAGE' => 'Default language',
                                'DEFAULT_LANGUAGE_HELP' => 'Dynamically load Google+ comments in different languages on a per-page basis.',
                                'WIDTH' => 'Width (px or %)',
                                'WIDTH_HELP' => 'The width of the comments plugin on the webpage. This can be either a pixel value or a percentage (such as 100%) for fluid width.'
                            ]
                        ],
                        'INTENSEDEBATE' => [
                            'TITLE' => 'IntenseDebate',
                            'FIELDS' => [
                                'ACCOUNT_NUMBER' => 'Account number',
                                'ACCOUNT_NUMBER_HELP' => 'This is your IntenseDebate blog account number, which is assigned when you create your account.'
                            ]
                        ],
                        'MUUT' => [
                            'TITLE' => 'Muut',
                            'COMMENTS' => 'Comments',
                            'FIELDS' => [
                                'FORUM' => 'Forum name',
                                'CHANNEL' => 'Channel',
                                'SHOW_ONLINE' => 'Show online',
                                'SHOW_TITLE' => 'Show title',
                                'UPLOAD' => 'Allow uploads',
                                'SHARE' => 'Show "Like" button',
                                'WIDGET' => 'Messages widget',
                                'WIDGET_HELP' => 'Shows a message button on the bottom-right of the browser.',
                                'LANGUAGE' => 'Language'
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'ro' => [
            'PLUGINS' => [
                'JS_COMMENTS' => [
                    'PLUGIN_NAME' => 'JSComments',
                    'PLUGIN_STATUS' => 'Stare Plugin',
                    'PLUGIN_ACTIVE' => 'Activă',
                    'PLUGIN_ACTIVE_HELP' => 'Această opțiune este folosită pentru a (de)activa acest modul pagină cu pagină.',
                    'NONE_SELECTED' => '- Nici una selectată -',
                    'USE_DEFAULT' => '- Folosește implicit -',
                    'OVERRIDE' => [
                        'PAGE_TITLE' => 'Suprascrie titlul paginii',
                        'PAGE_URL' => 'Suprascrie URL-ul paginii',
                        'PAGE_ID' => 'Suprascrie ID-ul paginii'
                    ],
                    'PROVIDERS' => [
                        'TITLE' => 'Furnizor',
                        'HELP' => 'Alege un furnizor pentru comentarii.',
                        'DISCOURSE' => [
                            'TITLE' => 'Discourse',
                            'NOSCRIPT' => 'Te rugăm să activezi JavaScript pentru a vizualiza comentariile <a href="https://www.discourse.org/" rel="nofollow"> prin Discourse.</a>',
                            'COPYRIGHT' => '<a href="https://www.discourse.org/" rel="nofollow">Comentarii furmizate de  <span>Discourse</span>.</a>',
                            'FIELDS' => [
                                'HOST' => 'URL pentru Discourse',
                                'HOST_HELP' => 'URL-ul către sistemul de comentarii Discourse.'
                            ]
                        ],
                        'DISQUS' => [
                            'TITLE' => 'Disqus',
                            'NOSCRIPT' => 'Te rugăm să activezi JavaScript pentru a vizualiza comentariile <a href="http://disqus.com/?ref_noscript" rel="nofollow"> furnizate prin Disqus.</a>',
                            'COPYRIGHT' => '<a href="http://disqus.com" class="dsq-brlink" rel="nofollow">Comentarii furmizate de <span class="logo-disqus">Disqus</span>.</a>',
                            'FIELDS' => [
                                'SHORTNAME' => 'Numele forumului ',
                                'SHORTNAME_HELP' => 'Îi spune serviciului Disqus numele scurt al forumului, care este unicul identificator pentru site-ul tău înregistrat prin Disqus. Dacă nu este definit, comentariile Disqus nu vor fi încărcate.',
                                'COUNT' => 'Arată numărul de comentarii',
                                'DEFAULT_LANGUAGE' => 'Limba implicită',
                                'DEFAULT_LANGUAGE_HELP' => 'Încarcă în mod dinamic limbile diferite pentru Disqus pagină cu pagină.'
                            ]
                        ],
                        'FACEBOOK' => [
                            'TITLE' => 'Facebook',
                            'FIELDS' => [
                                'APPID' => 'App ID',
                                'APPID_HELP' => 'ID-ul aplicației create cu Facebook Developers (https://developers.facebook.com/apps).',
                                'LANGUAGE' => 'Limba',
                                'LANGUAGE_HELP' => 'Ajustează limba modului de comentarii prin încărcarea unei versiuni localizate a Facebook SDK pentru JavaScript.',
                                'NUM_POSTS' => 'Numărul postărilor vizibile',
                                'NUM_POSTS_HELP' => 'Numărul de comentarii afișate în mod implicit.',
                                'NUM_POSTS_APPEND' => 'postări',
                                'COLORSCHEME' => [
                                    'TITLE' => 'Tematica culorii',
                                    'HELP' => 'Tematica culorii ce poate fi folosită de modului de comentarii. Poate fi "Deschisă" sau "Închisă".',
                                    'OPTIONS' => [
                                        'LIGHT' => 'Deschisă',
                                        'DARK' => 'Închisă'
                                    ]
                                ],
                                'ORDER_BY' => [
                                    'TITLE' => 'Ordonează după',
                                    'HELP' => 'Ordinea folosită la afișarea comentariilor.',
                                    'OPTIONS' => [
                                        'SOCIAL' => 'Social',
                                        'REVERSE_TIME' => 'Inversează data',
                                        'TIME' => 'Timp'
                                    ]
                                ],
                                'WIDTH' => 'Lățime (px or %)',
                                'WIDTH_HELP' => 'Lățimea ocupată de modulul de comentarii pe pagina de internet. Aceasta poate fi exprimată în pixeli sau procentaj (de eg: 100%) pentru lătime fluidă.'
                            ]
                        ],
                        'GOOGLEPLUS' => [
                            'TITLE' => 'Google+',
                            'FIELDS' => [
                                'COUNT' => 'Arată numărul comentariilor',
                                'DEFAULT_LANGUAGE' => 'Limba implicită',
                                'DEFAULT_LANGUAGE_HELP' => 'Încarcă în mod dinamic comentariile Google+ în limbi diferite pagină cu pagină.',
                                'WIDTH' => 'Lățime (px sau %)',
                                'WIDTH_HELP' => 'Lățimea ocupată de modulul de comentarii pe pagina de internet. Aceasta poate fi exprimată în pixeli sau procentaj (de eg: 100%) pentru lătime fluidă.'
                            ]
                        ],
                        'INTENSEDEBATE' => [
                            'TITLE' => 'IntenseDebate',
                            'FIELDS' => [
                                'ACCOUNT_NUMBER' => 'Numărul contului',
                                'ACCOUNT_NUMBER_HELP' => 'Acesta este numărul contului tău de pe IntenseDebate pe care îl primești la crearea contului.'
                            ]
                        ],
                        'MUUT' => [
                            'TITLE' => 'Muut',
                            'COMMENTS' => 'Comentarii',
                            'FIELDS' => [
                                'FORUM' => 'Numele forumului',
                                'CHANNEL' => 'Canal',
                                'SHOW_ONLINE' => 'Arată online',
                                'SHOW_TITLE' => 'Arată titlu',
                                'UPLOAD' => 'Permite încărcări',
                                'SHARE' => 'Arată butonul "Like"',
                                'WIDGET' => 'Widget pentru mesaje',
                                'WIDGET_HELP' => 'Arată un buton pentru mesaj în partea dreapta-jos a browser-ului.',
                                'LANGUAGE' => 'Limba'
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'it' => [
            'PLUGINS' => [
                'JS_COMMENTS' => [
                    'PLUGIN_NAME' => 'JSComments',
                    'PLUGIN_STATUS' => 'Stato del plugin',
                    'PROVIDERS' => [
                        'TITLE' => 'Provider',
                        'DISQUS' => [
                            'TITLE' => 'Disqus',
                            'NOSCRIPT' => 'Per farvore abilita JavaScript per visualizzare <a href="http://disqus.com/?ref_noscript" rel="nofollow">i commenti offerto da Disqus.</a>',
                            'COPYRIGHT' => '<a href="http://disqus.com" class="dsq-brlink" rel="nofollow">Commenti offerti da <span class="logo-disqus">Disqus</span></a>',
                            'FIELDS' => [
                                'SHORTNAME' => 'Shortname',
                                'DEFAULT_LANGUAGE' => 'Lingua predefina'
                            ]
                        ],
                        'FACEBOOK' => [
                            'TITLE' => 'Facebook',
                            'FIELDS' => [
                                'APPID' => 'App ID',
                                'LANGUAGE' => 'Lingua',
                                'NUM_POSTS' => 'Numero dei posts visibili',
                                'NUM_POSTS_APPEND' => 'posts',
                                'COLORSCHEME' => [
                                    'TITLE' => 'Colore schema',
                                    'OPTIONS' => [
                                        'LIGHT' => 'Chiaro',
                                        'DARK' => 'Scuro'
                                    ]
                                ],
                                'ORDER_BY' => [
                                    'TITLE' => 'Ordina per',
                                    'OPTIONS' => [
                                        'SOCIAL' => 'Sociale',
                                        'REVERSE_TIME' => 'Tempo inverso',
                                        'TIME' => 'Tempo'
                                    ]
                                ],
                                'WIDTH' => 'Larghezza (px o %)'
                            ]
                        ],
                        'INTENSEDEBATE' => [
                            'TITLE' => 'IntenseDebate'
                        ],
                        'MUUT' => [
                            'TITLE' => 'Muut',
                            'COMMENTS' => 'Commenti',
                            'FIELDS' => [
                                'FORUM' => 'Nome Forum',
                                'CHANNEL' => 'Canale',
                                'SHOW_ONLINE' => 'Visualizza online',
                                'SHOW_TITLE' => 'Visualizza titolo',
                                'WIDGET' => 'Widget',
                                'LANGUAGE' => 'Lingua'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
