<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DRS::Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>

    <div class="container-fluid">
        <div class="row mb-5 pb-3">

            <div class="col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="holder.js/1600x500?auto=yes&theme=social&font=Ubuntu&text=First slide" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Title</h3>
                                <p>Description</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="holder.js/1600x500?auto=yes&theme=industrial&font=Ubuntu&text=Second slide" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="holder.js/1600x500?auto=yes&theme=gray&font=Ubuntu&text=Third slide" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <form class="form-signin">
                    <h2 class="form-signin-heading text-center mb-4">Sign in</h2>
                    <div class="form-group row">
                        <label for="username" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" id="username" class="form-control" placeholder="John Doe" required="" autofocus="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" id="password" class="form-control" placeholder="*******" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-outline-primary btn-block" type="submit">Sign in</button>
                </form>
            </div>

        </div>

        <div class="row">

            <div class="col-md-6">
                <h1 class="text-center mb-3">App description</h1>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam iaculis purus eget tincidunt sagittis. Quisque tincidunt eget dui quis mattis. Etiam iaculis sollicitudin mauris, vitae tincidunt dolor lacinia nec. Duis pharetra id urna nec varius. Etiam rhoncus consequat scelerisque. Nam ut tellus sapien. Suspendisse pretium lorem quis quam mattis placerat. Sed interdum justo commodo arcu consequat interdum. Aliquam eleifend, ante nec pellentesque rhoncus, sapien libero ornare metus, ac gravida tellus arcu vitae dui. Quisque sed laoreet metus. Praesent ut commodo quam, sit amet lobortis dolor. Donec vitae congue lorem. Phasellus dignissim eros orci, vitae volutpat nunc fermentum vel. Etiam molestie mattis sem, eu pretium mauris molestie a. Sed varius urna enim, eu placerat lorem hendrerit at. Vestibulum vehicula orci id turpis tincidunt egestas.
                </p>
            </div>

            <div class="col-md-6">
                <h3>Want to learn more please email us at: <kbd>info@procmsolutions.com</kbd></h3>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="/js/holder.min.js"></script>
</body>
</html>