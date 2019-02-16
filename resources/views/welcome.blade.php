<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
       <div id="app">
            <div class="container mb-3">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required="required" class="form-control" placeholder="Enter Your Name" v-model="newItem.name">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" required="required" class="form-control" placeholder="Enter Your Age" v-model="newItem.age">
            </div>
            <div class="form-group">
                <label for="profession">Profession</label>
                <input type="text" name="profession" id="profession" required="required" class="form-control" placeholder="Enter Your Profession" v-model="newItem.profession">
            </div>
            <button class="btn btn-primary">
                <span @click.prevent='createItem()'></span>
                Add
            </button>
            </div>
            <script src="/js/app.js"></script>
       </div>
    </body>
</html>
