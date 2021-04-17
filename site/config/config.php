<?php

return [
  'debug'  => true,
  'routes' => [
    [
      'pattern' => 'feed',
      'method' => 'GET',
      'action'  => function () {
        $options = [
          'title'       => 'Latest articles',
          'description' => 'Read the latest news about our company',
          'link'        => 'writing'
        ];
        
        $feed = page('writing')->children()->listed()->flip()->limit(10)->feed($options);
            return $feed;
        }
    ]
  ],
  'medienbaecker.autoresize.maxWidth' => 2000,
  'medienbaecker.autoresize.maxHeight' => 2000,
  'medienbaecker.autoresize.quality' => 80
];
