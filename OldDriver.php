<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title>老司機</title>
  </head>
  <body>
        <div id="app">
            <img v-bind:src="src">
        </div>
  </body>
  <script>
        var result = JSON.parse('<?php echo file_get_contents(__DIR__ . "/img_result.json"); ?>');
        var rand_int = Math.floor(Math.random() * (result.length - 0 + 1)) + 0;
        var content = new Vue({
            el: '#app',
            data: {
                src: result[rand_int]
            }
        });
  </script>
</html>