<?php

//init variables
$html 			= '';
$title_styles 	= '';
$text_styles 	= '';
$price_styles 	= '';

//generate title styles
if($title_color !== '') {
    $title_styles .= 'color: '.$title_color.';';
}

if($title_font_size !== '') {
    $title_styles .= 'font-size: '.$title_font_size.'px;';
}

//generate text styles
if($text_color !== '') {
    $text_styles .= 'color: '.$text_color.';';
}

if($text_font_size !== '') {
    $text_styles .= 'font-size: '.$text_font_size.'px;';
}

//generate price styles
if($price_color !== '') {
    $price_styles .= 'color: '.$price_color.';';
}

if($price_font_size !== '') {
    $price_styles .= 'font-size: '.$price_font_size.'px;';
}

$html .= '<li class="qode_pricing_list_item clearfix">';

$html .= '<div class="qode_pricing_item_text">';
$html .= '<'.$title_tag.' class="qode_pricing_item_title" style="'.$title_styles.'">'.$title.'</'.$title_tag.'>';
$html .= '<p style="'.$text_styles.'">'.$text.'</p>';
$html .= '</div>'; //close div.qode_pricing_item_text

$html .= '<div class="qode_pricing_item_price">';
$html .= '<div class="qode_pricing_item_price_inner">';
$html .= '<span style="'.$price_styles.'">'.$price.'</span>';
$html .= '</div>'; // close div.qode_pricing_item_price_inner
$html .= '</div>'; // close div.qode_pricing_item_price

$html .= '</li>'; // close li.qode_pricing_list_item

echo bridge_qode_get_module_part( $html );