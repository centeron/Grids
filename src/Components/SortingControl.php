<?php

namespace Centeron\Grids\Components;

use Centeron\Grids\Components\Base\RenderableComponent;
use Centeron\Grids\Components\Base\RenderableRegistry;
use Centeron\Grids\FieldConfig;

/**
 * Class SortingControl
 *
 * The component for rendering sorting controls
 * added to column header automatically when field is sortable.
 *
 * @package Centeron\Grids\Components
 */
class SortingControl extends RenderableComponent
{
    protected $template = '*.components.sorting_control';

    protected $column;

    protected $render_section = RenderableRegistry::SECTION_END;

    /**
     * {@inheritdoc}
     */
    protected function getViewData()
    {
        return parent::getViewData() + [
            'column' => $this->column
        ];
    }

    /**
     * Constructor.
     *
     * @param FieldConfig $column
     */
    public function __construct(FieldConfig $column)
    {
        $this->column = $column;
    }

    /**
     * Returns associated column.
     *
     * @return FieldConfig
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * Sets associated column.
     *
     * @param FieldConfig $column
     */
    public function setColumn(FieldConfig $column)
    {
        $this->column = $column;
    }
}
