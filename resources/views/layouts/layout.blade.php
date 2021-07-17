<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

      <link href ="public/css/main.css" rel="stylesheet">

      <div class="container">
      </div>
    </head>
    <body>
      <style>
    html, body {
  background-color: #fff;
  color: #636b6f;
  font-family: "Nunito", sans-serif;
  font-weight: 200;
  height: 100vh;
  margin: 0;
}

.full-height {
  height: 100vh;
}

.flex-center {
  align-items: center;
  display: flex;
  justify-content: center;
}

.position-ref {
  position: relative;
}

.top-right {
  position: absolute;
  right: 10px;
  top: 18px;
}

.content {
  text-align: center;
}

.links > a {
  color: #636b6f;
  padding: 0 25px;
  font-size: 13px;
  font-weight: 600;
  letter-spacing: 0.1rem;
  text-decoration: none;
  text-transform: uppercase;
}

.m-b-md {
  margin-bottom: 30px;
}

footer {
  background: #eee;
  padding: 20px;
  text-align: center;
}

.title {
  font-size: 50px;
  text-transform: uppercase;
  border-bottom: 2px solid;
  padding: 12px 0;
  color: #5e2195;
}

html, body {
  background-color: #fff;
  color: #636b6f;
  font-family: "Nunito", sans-serif;
  font-weight: 200;
  height: 100vh;
  margin: 0;
}

.full-height {
  height: 100vh;
}

.flex-center {
  align-items: center;
  display: flex;
  justify-content: center;
}

.position-ref {
  position: relative;
}

.top-right {
  position: absolute;
  right: 10px;
  top: 18px;
}

.content {
  text-align: center;
}

.links > a {
  color: #636b6f;
  padding: 0 25px;
  font-size: 13px;
  font-weight: 600;
  letter-spacing: 0.1rem;
  text-decoration: none;
  text-transform: uppercase;
}

.m-b-md {
  margin-bottom: 30px;
}

footer {
  background: #eee;
  padding: 20px;
  text-align: center;
}

.title {
  font-size: 50px;
  text-transform: uppercase;
  border-bottom: 2px solid;
  padding: 12px 0;
  color: #5e2195;
}

.wrapper {
  max-width: 1140px;
  padding: 10px;
  margin: 20px auto;
}

/* create pizza form */
.create-pizza {
  background: #f7f7f7;
  padding: 20px;
}
.create-pizza label, .create-pizza select {
  display: block;
}
.create-pizza label {
  margin-top: 30px;
}
.create-pizza select {
  padding: 8px;
  width: 200px;
}
.create-pizza input[type=checkbox] {
  margin: 10px;
}
.create-pizza input[type=submit] {
  background: #5e2195;
  padding: 8px 20px;
  color: #fff;
  border: 0;
  margin-top: 20px;
}

/* pizza details page */
.pizza-details {
  background: #f7f7f7;
  padding: 20px;
}
.pizza-details p {
  margin: 20px 0;
  font-weight: bold;
}
.pizza-details button {
  background: #5e2195;
  padding: 8px 20px;
  color: #fff;
  border: 0;
  margin-top: 20px;
}

a.back {
  display: block;
  text-align: center;
  margin-top: 30px;
  color: #5e2195;
  margin-bottom: 20px;
}

/* pizza index page */
.pizza-index h1 {
  margin-bottom: 40px;
}
.pizza-index .pizza-item {
  margin: 10px 0;
  padding: 12px;
  background: #f4f4f4;
}
.pizza-index .pizza-item img {
  width: 60px;
  display: inline-block;
}
.pizza-index .pizza-item h4 {
  display: inline-block;
  font-weight: normal;
  margin-left: 20px;
}
.pizza-index .pizza-item h4 a {
  color: #777;
  text-decoration: none !important;
}
</style>
    <div class="container">

      @yield("content")
</div>
      <footer>
        <p>Copyright 2020 Pizza House</p>
      </footer>
    </body>
</html>