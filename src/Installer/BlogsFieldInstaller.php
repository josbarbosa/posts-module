<?php namespace Anomaly\BlogsModule\Installer;

use Anomaly\Streams\Platform\Field\FieldInstaller;

/**
 * Class BlogsFieldInstaller
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\BlogsModule\Installer
 */
class BlogsFieldInstaller extends FieldInstaller
{

    /**
     * Field definitions.
     *
     * @var array
     */
    protected $fields = [
        'slug'        => 'anomaly.field_type.slug',
        'name'        => 'anomaly.field_type.text',
        'title'       => 'anomaly.field_type.text',
        'description' => 'anomaly.field_type.textarea',
        'blog'        => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Anomaly\BlogsModule\Blog\BlogModel'
            ]
        ],
        'category'    => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Anomaly\BlogsModule\Category\CategoryModel'
            ]
        ]
    ];

}