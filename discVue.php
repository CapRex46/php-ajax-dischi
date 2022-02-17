<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="app">
    <div class="container">
      <div v-for="album in albumlist" class="albumbox">
              <div class="">

              </div>
              <img :src="album.poster" alt="">
              <h3>{{album.title}}</h3>
              <p>{{album.author}}</p>
              <p>{{album.year}}</p>
              <p>{{album.genre}}</p>
      </div>
    </div>

  </div>

  <script>
    var app = new Vue({
      el: '#app',
      data: {
        albumlist: []
      },
      mounted() {
        axios.get("http://localhost/php-ajax-dischi/api/album.php")
          .then(resp => {
            this.albumlist = resp.data;
          })
      }
    })
  </script>
</body>
</html>