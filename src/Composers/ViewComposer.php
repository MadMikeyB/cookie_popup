<?php

namespace LarasoftIo\CookiePopup\Composers;



use Illuminate\View\View;

class ViewComposer
{

    public function compose(View $view)
    {
        $colors = config('cookie-popup.colour_scheme');
        $colour = config('cookie-popup.text_colour');
        $text = config('cookie-popup.text');
        $url_text = config('cookie-popup.url_text');
        $cookie_policy_url = config('cookie-popup.cookie_policy_url');
        $screen_position = config('cookie-popup.screen_position');
        $border_radius = config('cookie-popup.border_radius');
        $width = config('cookie-popup.width');
        $height = config('cookie-popup.height');

        $view->with('colors', $colors)
        ->with('colour', $colour)
        ->with('text', $text)
        ->with('url_text', $url_text)
        ->with('cookie_policy_url', $cookie_policy_url)
        ->with('screen_position', $screen_position)
        ->with('border_radius', $border_radius)
        ->with('width', $width)
        ->with('height', $height);
    }
}
