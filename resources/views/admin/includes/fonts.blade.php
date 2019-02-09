<style>
  @font-face {
    font-family: 'themify';
    src:url("{{ asset(config('onion_engine.options.public_assets_path') . 'admin/assets/static/fonts/icons/themify/themify.eot?-fvbane') }}");
    src:url("{{ asset(config('onion_engine.options.public_assets_path') . 'admin/assets/static/fonts/icons/themify/themify.eot?#iefix-fvbane') }}") format('embedded-opentype'),
    url("{{ asset(config('onion_engine.options.public_assets_path') . 'admin/assets/static/fonts/icons/themify/themify.woff?-fvbane') }}") format('woff'),
    url("{{ asset(config('onion_engine.options.public_assets_path') . 'admin/assets/static/fonts/icons/themify/themify.ttf?-fvbane') }}") format('truetype'),
    url("{{ asset(config('onion_engine.options.public_assets_path') . 'admin/assets/static/fonts/icons/themify/themify.svg?-fvbane#themify') }}") format('svg');
    font-weight: normal;
    font-style: normal;
  }

  @font-face {
    font-family: 'FontAwesome';
    src:url("{{ asset(config('onion_engine.options.public_assets_path') . 'admin/assets/static/fonts/icons/fontawesome/fontawesome-webfont.eot') }}");
    src:url("{{ asset(config('onion_engine.options.public_assets_path') . 'admin/assets/static/fonts/icons/fontawesome/fontawesome-webfont.eot?#iefix') }}") format('embedded-opentype'),
    url("{{ asset(config('onion_engine.options.public_assets_path') . 'admin/assets/static/fonts/icons/fontawesome/fontawesome-webfont.woff') }}") format('woff'),
    url("{{ asset(config('onion_engine.options.public_assets_path') . 'admin/assets/static/fonts/icons/fontawesome/fontawesome-webfont.ttf') }}") format('truetype'),
    url("{{ asset(config('onion_engine.options.public_assets_path') . 'admin/assets/static/fonts/icons/fontawesome/fontawesome-webfont.svg') }}") format('svg');
    font-weight: normal;
    font-style: normal;
  }
</style>
