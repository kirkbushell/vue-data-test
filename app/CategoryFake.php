<?php

namespace App;

class CategoryFake
{
    public static function get(): array
    {
        return array(
            'id' => 1074,

            'translated' => array(
                'en_GB' => array(
                    'name' => 'Greatz! &lt;b&gt;Escaped html&lt;/b&gt;',
                    'nameWithHtml' => '<b>Bold</b> and <a href="http://google.com">Link to google</a>',
                    'description' => 'Start / &quot; / &#34; / &apos; / &#039; / &#61; / " / \' / \ / & / &amp; / End',
                    'shortcode' => 'TheV',
                    'entryNameLabel' => '',
                    'packingSlipInstructions' => '',
                    'image_heading' => '',
                ),
                'pl_PL' => array(
                    'name' => '',
                    'description' => '',
                    'shortcode' => '',
                    'entryNameLabel' => '',
                    'packingSlipInstructions' => '',
                    'image_heading' => '',
                ),
            ),

            'parentId' => NULL,
            'lft' => 171,
            'rgt' => 172,
            'depth' => 0,
            'accountId' => 1,
            'formId' => 18,
            'seasonId' => 666,
            'slug' => 'WNyRzwyw',
            'active' => false,
            'locked' => false,
            'entrantMaxEntries' => NULL,
            'fillEntryName' => 0,
            'maxImageWidth' => 300,
            'divisions' => 1,
            'attachmentTypes' => array(),
            'attachmentsVip' => NULL,
            'attachmentsVoting' => NULL,
            'attachmentsTopPick' => NULL,
            'attachmentsGallery' => NULL,
            'attachmentsQualifying' => NULL,
            'packingSlip' => false,
            'chapterCount' => 0,
            'createdAt' => '2020-03-31T11:45:00.000000Z',
            'updatedAt' => '2024-07-10T11:38:56.000000Z',
            'deletedAt' => NULL,
            'promoted' => 0,
            'parent' => NULL,
            'season' => array(
                'id' => 666,
                'accountId' => 1,
                'slug' => 'wLZPYOym',
                'status' => 'active',
                'jobStatus' => NULL,
                'completedSteps' => array(
                    0 => 'score-sets',
                    1 => 'entry-rounds',
                ),
                'createdAt' => '2019-04-23T18:21:58.000000Z',
                'updatedAt' => '2021-10-18T12:54:08.000000Z',
                'deletedAt' => NULL,
            ),
            'chapters' => array(),
            'form' => array(
                'id' => 18,
                'accountId' => 1,
                'contentblockId' => 18,
                'seasonId' => 666,
                'slug' => 'EbZKdnqA',
                'type' => 'entry',
                'order' => NULL,
                'chapterOption' => 'all',
                'createdAt' => '2023-03-10T10:05:40.000000Z',
                'updatedAt' => '2023-03-10T10:05:40.000000Z',
                'deletedAt' => NULL,
                'invitationOnly' => false,
                'browsable' => false,
                'promoted' => false,
                'countdown' => false,
                'season' => array(
                    'id' => 666,
                    'accountId' => 1,
                    'slug' => 'wLZPYOym',
                    'status' => 'active',
                    'jobStatus' => NULL,
                    'completedSteps' => array(
                        0 => 'score-sets',
                        1 => 'entry-rounds',
                    ),
                    'createdAt' => '2019-04-23T18:21:58.000000Z',
                    'updatedAt' => '2021-10-18T12:54:08.000000Z',
                    'deletedAt' => NULL,
                    'chapters' => array(
                        0 => array(
                            'id' => 1129,
                            'accountId' => 1,
                            'seasonId' => 666,
                            'slug' => 'QngvBVgP',
                            'active' => 1,
                            'locked' => 1,
                            'maxImageWidth' => 300,
                            'createdAt' => '2019-04-23T18:22:03.000000Z',
                            'updatedAt' => '2024-06-20T13:31:47.000000Z',
                            'deletedAt' => NULL,
                        ),
                    ),
                ),
            ),
        );
    }
}
