<?php

use craft\elements\Entry;

return [
    'endpoints' => [
        'news.json' => function() {
            return [
                'elementType' => Entry::class,
                'criteria' => ['section' => 'marketNews'],
                'transformer' => function(Entry $entry) {
                    return [
                        'title' => $entry->title,
                        'slug' => $entry->slug,
                        'url' => $entry->url,
                        'postDate' => $entry->postDate->format('Y-m-d'),
                        'articleSummary' => $entry->summaryText,
                        'articleCopy' => $entry->richText
                    ];
                }
            ];
        }
    ]
];