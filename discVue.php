<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
  <div id="app">
    <table id="usersTable">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Città</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="album in albumlist">
                <t>{{album.title}}</t>
                <t>{{album.author}}</t>
                <t>{{album.year}}</t>
                <t>{{album.genre}}</t>
        </tr>
      </tbody>
    </table>
  </div>
  <script>
    var app = new Vue({
      el: '#app',
      data: {
         albumlist: [] ,
      },
      mounted() {
    axios.get('https://flynn.boolean.careers/exercises/api/array/music').then((response)  => {
      this.albumlist = response.data.response;
    }) 
  },
    })
  </script>
</body>
</html>