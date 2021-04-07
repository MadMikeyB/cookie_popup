<span id="cookies-toast">
    <span style="color: {!! $colour !!}; width: 85%; position: absolute">
         {!! $text !!}
    <a href="{!! $cookie_policy_url !!}">{!! $url_text !!}</a>
    </span>
    <span id="close-cookies-toast" style="color: {!! $colour !!}; width: 15%; position: absolute; right: 0; text-align: center; cursor:pointer; font-weight: bold; font-size: large">x</span>
</span>

<style>
    #cookies-toast {
        position: fixed;
        display:block;
        bottom: 2em;
        max-width: 95%;
        height: {!! $height !!};
        width: {!! $width !!};
        color: {!! $colour !!};

        @if($screen_position == 'bottom_right')
            right: 2%;
        @else
            left: 2%;
        @endif

        @if(count($colors) == 2)
            background: {!! "linear-gradient(44.04deg, $colors[0] 0.78%, $colors[1] 98.74%)" !!};
        @else
            background: {!! $colors[0] !!};
        @endif

        border-radius: {!! $border_radius !!};
        text-align: left;
        padding: 1em;
        line-height: 2em;
        opacity: 1;
        z-index: 2;
    }

</style>

<script>
    if(localStorage.getItem('silence_cookie') == 1) {
        $('#cookies-toast').hide();
    }

    $('#close-cookies-toast').click(function () {
        $(this).closest('#cookies-toast').hide('slow');

        localStorage.setItem('silence_cookie', 1);
    })


</script>
