<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->    
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="template_styles.css">

    <title>Главная страница</title>

    <style>
        .nav-link:hover {
            transition: all 0.4s;
        }

        .nav-link-collapse:after {
            float: right;
            content: '\f067';
            font-family: 'FontAwesome';
        }

        .nav-link-show:after {
            float: right;
            content: '\f068';
            font-family: 'FontAwesome';
        }

        .nav-item ul.nav-second-level {
            padding-left: 0;
        }

        .nav-item ul.nav-second-level > .nav-item {
            padding-left: 20px;
        }

        @media (min-width: 992px) {
            .sidenav {
                position: absolute;
                top: 0;
                left: 0;
                width: 230px;
                height: calc(100vh - 3.5rem);
                margin-top: 3.5rem;
                background: #343a40;
                box-sizing: border-box;
                border-top: 1px solid rgba(0, 0, 0, 0.3);
            }

            .navbar-expand-lg .sidenav {
                flex-direction: column;
            }

            .content-wrapper {
                margin-left: 230px;
            }
    </style>

</head>
<body>

<div class="container">
    <div class="row py-5">

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Sidebar Nav</a>
            <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarCollapse"
                    aria-controls="navbarCollapse"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto sidenav" id="navAccordion">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Item 1</a>
                    </li>
                    <li class="nav-item">
                        <a
                                class="nav-link nav-link-collapse"
                                href="#"
                                id="hasSubItems"
                                data-toggle="collapse"
                                data-target="#collapseSubItems2"
                                aria-controls="collapseSubItems2"
                                aria-expanded="false"
                        >Item 2</a>
                        <ul class="nav-second-level collapse" id="collapseSubItems2" data-parent="#navAccordion">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="nav-link-text">Item 2.1</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="nav-link-text">Item 2.2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Item 3</a>
                    </li>
                    <li class="nav-item">
                        <a
                                class="nav-link nav-link-collapse"
                                href="#"
                                id="hasSubItems"
                                data-toggle="collapse"
                                data-target="#collapseSubItems4"
                                aria-controls="collapseSubItems4"
                                aria-expanded="false"
                        >Item 4</a>
                        <ul class="nav-second-level collapse" id="collapseSubItems4" data-parent="#navAccordion">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="nav-link-text">Item 4.1</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="nav-link-text">Item 4.2</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="nav-link-text">Item 4.2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Item 5</a>
                    </li>
                </ul>
                <form class="form-inline ml-auto mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <main class="content-wrapper">
            <div class="container-fluid">
                <h1>Main Content</h1>
            </div>
        </main>

    </div>
</div>
    
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script>
    $(document).ready(function() {
        $('.nav-link-collapse').on('click', function() {
            $('.nav-link-collapse').not(this).removeClass('nav-link-show');
            $(this).toggleClass('nav-link-show');
        });
    });
</script>

</body>
</html>