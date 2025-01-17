<?php
include 'include.php';
echoStart();
?>

<script src="http://widgets.twimg.com/j/2/widget.js"></script>

<script>

new TWTR.Widget({

  version: 2,

  type: 'search',

  search: 'icme2011',

  interval: 6000,

  title: '',

  subject: 'ICME 2011 activity',

  width: 250,

  height: 300,

  theme: {

    shell: {

      background: '#8ec1da',

      color: '#ffffff'

    },

    tweets: {

      background: '#ffffff',

      color: '#444444',

      links: '#1985b5'

    }

  },

  features: {

    scrollbar: false,

    loop: true,

    live: true,

    hashtags: true,

    timestamp: true,

    avatars: true,

    toptweets: true,

    behavior: 'default'

  }

}).render().start();

</script>

<?php
echoEnd();
?>