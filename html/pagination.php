<?php
/**
 * Pagination template override
 * Functions to override joomla standard behaviour
 */
/**
 * From JPagination::_list_render
 *
 * @param $list
 * @return string
 */
function pagination_list_render($list)
{
    // Reverse output rendering for right-to-left display.
    $html = '<ul>';
    //$html .= '<li class="pagination-start">' . $list['start']['data'] . '</li>';
    $html .= '<li class="pagination-prev">' . $list['previous']['data'] . '</li>';
    foreach ($list['pages'] as $page)
    {
        $html .= '<li>' . $page['data'] . '</li>';
    }
    $html .= '<li class="pagination-next">' . $list['next']['data'] . '</li>';
    //$html .= '<li class="pagination-end">' . $list['end']['data'] . '</li>';
    $html .= '</ul>';
    return $html;
}
/**
 * From JPagination::_item_active
 *
 * @param JPaginationObject $item
 * @return string
 */
function pagination_item_active(&$item)
{
    return "<a title=\"" . $item->text . "\" href=\"" . $item->link . "\" class=\"pagenav\">" . $item->text . "</a>";
}
/**
 * From JPagination::_item_inactive
 *
 * @param JPaginationObject $item
 * @return string
 */
function pagination_item_inactive(&$item)
{
    return "<span class=\"pagenav\">" . $item->text . "</span>";
}