<?php
namespace Centeron\Grids\Components;

/**
 * Class THead
 *
 * The component for rendering THEAD html tag inside grid.
 *
 * @package Centeron\Grids\Components
 */
class THead extends HtmlTag
{
    const NAME = 'thead';

    /**
     * Returns default set of child components.
     *
     * @return \Centeron\Grids\Components\Base\ComponentInterface[]
     */
    protected function getDefaultComponents()
    {
        return [
            new ColumnHeadersRow,
            new FiltersRow
        ];
    }
}
