<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portafolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <!-- Styles -->
        
        
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top px-5">
            
                    <a class="navbar-brand mr-auto" href="#">Portafolio</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#Portfolio">Portfolio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#About">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Contact">Contact</a>
                            </li>
                        </ul>        
                    </div>
                
        </nav>
        <header class="container-fluid" >
        <div class="row" style="height: 680px; background-color:#5CBB9D;">
            <div class="col-12 align-self-center text-center">
                <img src="{{asset('images/avatar.png')}}" class="img-fluid" width="200">
                <h1>Bienvenido</h1>
                <hr>
                <p>Desarrollador de Software</p>
            </div>
        </div>
        </header>
        <seaction class="container-fluid" id="Portfolio">
            <div class="row">
                <div class="col-12 text-center mt-5">
                <h2>PORTAFOLIO</h2>
                <hr>
                </div>
                <div class="col-4 text-center mt-4">
                    <img src="{{asset('images/Home.png')}}"  alt="Home">
                </div>
                <div class="col-4 text-center mt-4">
                    <img src="{{asset('images/Captura.png')}}"  alt="Captura">
                </div>
                <div class="col-4 text-center mt-4">
                    <img src="{{asset('images/Captura1.png')}}"  alt="Captura1">
                </div>
                <div class="col-4 text-center mt-4">
                    <img src="{{asset('images/Home.png')}}"  alt="Home">
                </div>
                <div class="col-4 text-center mt-4">
                    <img src="{{asset('images/Captura.png')}}"  alt="Captura">
                </div>
                <div class="col-4 text-center mt-4">
                    <img src="{{asset('images/Captura1.png')}}"  alt="Captura1">
                </div>
            </div>
        </seaction>
        <section class="container-fluid" id="About">
        <div class="row justify-content-center py-5" style="background-color:#5CBB9D;">
                <div class="col-12 text-center mt-5 mb-4">
                    <h2>ABOUT</h2>
                    <hr>
                </div>
                <div class="col-4 ">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut accusamus vitae earum ea. Nihil, debitis iste inventore aut sed in quis! Reprehenderit maiores distinctio ducimus corporis consequatur vitae placeat quis.</p>
                </div>
                <div class="col-4 ">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, voluptates nulla. Ea, sint. Quo quibusdam ea consequatur, laudantium harum ex obcaecati porro, nam optio rem mollitia iure necessitatibus, in non.</p>
                </div>
                <div class="col-12 text-center">
                    <button type="button" class="btn btn-outline-secondary">Free Download</button>
                </div>
        </section>
        <seaction class="container-fluid" id="Contact">
            <div class="row justify-content-center mb-5">
                <div class="col-12 text-center mt-5">
                    <h2>CONTACT ME</h2>
                    <hr>
                </div>
                <div class="col-6">
                    <form>
                        <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </seaction>
        
        <footer class="container-fluid">
            <div class="row justify-content-center pt-5" >
                <div class="col-4 text-center pb-4">
                    <h3>LOCATION</h3>
                    <p>Perú, Lima - Comas</p>
                </div>
                <div class="col-4 text-center pb-4">
                    <h3>AROUND THE WEB</h3>
                    <a href="">A</a>
                    <a href="">B</a>
                    <a href="">C</a>

                </div>
                <div class="col-4 text-center pb-4">
                    <h3>FREELANCER</h3>
                    <p>Leonardo Andree Paredes Montero</p>
                    <p>leoparmon.2000@gmail.com</p>
                </div>
                <div class="col-12 pt-1 text-center" style="background: green;">
                    @Coronavirus 2020
                </div>
            </div>
        </footer>

    </body>
</html>