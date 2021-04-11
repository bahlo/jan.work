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
]
];
