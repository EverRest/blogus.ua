@extends('layouts.app')

@section('content')
    <!-- Parallax Section -->
    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <h1 class="header center">Welcome to Bloggy!</h1>
                <div class="row center">
                    <h5 class="header col s12 light">New times give birth to new heroes</h5>
                </div>
                <div class="row center">
                    <a href="#" id="download-button" class="btn-large waves-effect waves-light">Contact Us</a>
                </div>
                <br><br>

            </div>
        </div>
        <div class="parallax"><img src="{{ URL::asset('img/background1.jpg') }}" alt="Unsplashed background"></div>
    </div>

    <!-- Review Section -->
    <div id="review" class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <div class="review-list col s12 m4">
                    <div class="icon-block">
                        <h2 class="center"><i class="material-icons">flash_on</i></h2>
                        <h5 class="center">Speeds up development</h5>

                        <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                    </div>
                </div>

                <div class="review-list col s12 m4">
                    <div class="icon-block">
                        <h2 class="center"><i class="material-icons">group</i></h2>
                        <h5 class="center">User Experience Focused</h5>

                        <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                    </div>
                </div>

                <div class="review-list col s12 m4">
                    <div class="icon-block">
                        <h2 class="center"><i class="material-icons">settings</i></h2>
                        <h5 class="center">Easy to work with</h5>

                        <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Parallax Section -->
    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 light">New times give birth to new heroes</h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="{{ URL::asset('img/background2.jpg') }}" alt="Unsplashed background img 2"></div>
    </div>

    <!-- Contact Section -->
    <div id="contact" class="container">
        <div class="section">

            <div class="row">
                <div class="col s12 center">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h4>Contact Us</h4>
                    <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                </div>
            </div>

        </div>
    </div>

    <!-- Parallax Section -->
    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 light">New times give birth to new heroes</h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="{{ URL::asset('img/background4.jpg') }}" alt="Unsplashed background img 3"></div>
    </div>

    <!-- News Section -->
    <div id="news" class="wrapper">
        <div class="section">

            <div class="row">
                <div class="carousel carousel-slider center" data-indicators="true">
                    <div class="carousel-fixed-item center">
                        {{--<a class="btn waves-effect white grey-text darken-text-2">Call me!</a>--}}
                    </div>
                    <div class="carousel-item" href="#one!">
                        <h2>Morbi bibendum justo ut venenatis mattis.</h2>
                        <p>"Vestibulum at lacus condimentum mauris suscipit varius ac et ligula."</p>
                        <p class="text">Phasellus feugiat, nunc vitae laoreet sagittis, enim massa porta neque, et hendrerit ex neque sit amet tortor. Cras fermentum metus a nulla viverra, at posuere dui varius. Sed sed pulvinar velit, id interdum dolor. Mauris posuere tortor venenatis quam finibus fermentum. Integer aliquet, diam eu efficitur sagittis, elit mauris hendrerit eros, quis pellentesque libero elit a elit. Suspendisse potenti. Cras dictum orci eu diam elementum, a sagittis ante cursus. Phasellus pretium hendrerit mauris eu hendrerit. Suspendisse vitae dolor arcu. Donec laoreet, purus sed euismod posuere, nisi nisi blandit elit, in porttitor arcu purus at ligula. Nunc laoreet rhoncus ex, sit amet convallis enim hendrerit eget.</p>
                        <a href="#" class="btn btn-lg waves-effect white grey-text darken-text-2">Details</a>
                    </div>
                    <div class="carousel-item" href="#two!">
                        <h2>Ut vitae sapien ut lorem semper dapibus.</h2>
                        <p>"Aliquam tristique condimentum neque, sed fringilla velit vulputate a."</p>
                        <p class="text">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam quis ligula eget odio malesuada molestie id non nisi. Sed faucibus tempor risus, quis hendrerit ipsum porta eu. Sed elit nisi, fringilla vitae ex quis, pellentesque imperdiet nibh. Suspendisse ut diam turpis.</p>
                        <a href="#" class="btn btn-lg waves-effect white grey-text darken-text-2">Details</a>
                    </div>
                    <div class="carousel-item" href="#three!">
                        <h2>Nunc sollicitudin magna porttitor magna pretium porta.</h2>
                        <p>"Pellentesque eu eros non turpis pretium consectetur sed et justo. "</p>
                        <p class="text">Fusce feugiat leo vitae elementum consequat. Integer vitae sodales lacus. Vestibulum luctus diam eu libero interdum, ac sollicitudin mauris vestibulum. Morbi vel libero metus. Nunc ullamcorper quam nulla, ut convallis odio condimentum vitae. Fusce dictum auctor nunc varius vehicula. Morbi ultricies pharetra volutpat.</p>
                        <a href="#" class="btn btn-lg waves-effect white grey-text darken-text-2">Details</a>
                    </div>
                    <div class="carousel-item" href="#four!">
                        <h2>Suspendisse tincidunt felis in tortor vehicula, eu gravida quam dignissim.</h2>
                        <p>" Donec et nunc consequat, viverra arcu et, varius dui."</p>
                        <p class="text">Etiam eget auctor turpis. Cras pharetra, neque non suscipit suscipit, mi sem sollicitudin urna, sed vehicula turpis magna vel nisl. Sed mattis rutrum neque, quis ullamcorper nunc egestas egestas. Sed vulputate, libero a finibus ullamcorper, magna nisl bibendum metus, sed volutpat augue nulla ut quam. Suspendisse ante nibh, bibendum eu cursus in, ullamcorper eu eros. Nunc id molestie diam, quis tristique tortor. Sed ut tempor tellus. Cras pretium blandit consectetur. Nulla porta, odio eget aliquet scelerisque, lacus velit rutrum ipsum, sit amet bibendum nisi nunc in erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed eu sapien convallis lectus convallis condimentum sed eget eros.</p>
                        <a href="#" class="btn btn-lg waves-effect white grey-text darken-text-2">Details</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Footer Section -->
    <footer id="footer" class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Company Bio</h5>
                    <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Settings</h5>
                    <ul class="partners">
                        <li><a class="white-text waves-effect waves-light" href="#!">Bootstrap</a></li>
                        <li><a class="white-text waves-effect waves-light" href="#!">jQuery</a></li>
                        <li><a class="white-text waves-effect waves-light" href="#!">Laravel</a></li>
                        <li><a class="white-text waves-effect waves-light" href="#!">Our friends</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Connect</h5>
                    <ul class="social">
                        <li><a class="white-text waves-effect waves-light" href="#!"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li><a class="white-text waves-effect waves-light" href="#!"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                        <li><a class="white-text waves-effect waves-light" href="#!"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li><a class="white-text waves-effect waves-light" href="#!"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a class="white-text waves-effect waves-light" href="#!"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                &copy; Made by <a class="brown-text text-lighten-3" href="#">JAIL </a> <script>var year = new Date();document.write(year.getFullYear());</script>.
            </div>
        </div>
    </footer>
@endsection
