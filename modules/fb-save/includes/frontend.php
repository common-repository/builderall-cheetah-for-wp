<div class="ba-cheetah-fb-save">

    <script>

      if (window.fb_script_loaded === undefined) {
        window.fb_script_loaded = true;

        window.fbAsyncInit = function () {
          FB.init({
            //appId            : '253153171495958',
            autoLogAppEvents: true,
            xfbml: true,
            version: 'v3.0'
          });
        };

        (function (d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) {
            return;
          }
          js = d.createElement(s);
          js.id = id;
          js.src = "https://connect.facebook.net/<?= get_locale() ?>/sdk.js#xfbml=1&version=v13.0&appId=2341832949238900";
          js.async = true;
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      } else {
        setTimeout(() => {
          FB.XFBML.parse();
        }, 1000)
      }

    </script>


    <div class="fb-save"
         data-uri="<?php echo esc_url($settings->save_url) ?>"
         data-size="<?php echo esc_attr($settings->save_size) ?>">

    </div>
</div>
