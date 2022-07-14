<!DOCTYPE html> <!-- The new doctype -->

<html>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>Dashboard</title>

        <link rel="stylesheet" type="text/css" href="styles.css" />

        <!-- Internet Explorer HTML5 enabling script: -->

        <!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <style type="text/css">

                .clear {
                    zoom: 1;
                    display: block;
                }

            </style>

        <![endif]-->
    </head>

    <body>

        <section id="page"> <!-- Defining the #page section with the section tag -->

            <header> <!-- Defining the header section of the page with the appropriate tag -->

                <h1>Projects Dashboard</h1>

            </header>

            <div class="divProjects">

            </div>

            <footer> <!-- Marking the footer section -->

                <div class="line"></div>

                
            </footer>

        </section> <!-- Closing the #page section -->

    <!-- JavaScript Includes -->

    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

    </body>

</html>

<!-- Article 1 start -->
<div class="templateArticle" style="display:none; width: calc(90%/4) !important; float:left;margin-right:20px; cursor:pointer;">
    <article id="article1"> <!-- The new article tag. The id is supplied so it can be scrolled into view. -->
        <div class="articleBody" style="height:80px;">
            <h2></h2>
        </div>
    </article>
</div>
            <!-- Article 1 end -->

<script type="text/javascript">
    $.getJSON( "projects.json", function( data ) {
        let clon = undefined;
        $.each( data, function( key, val ) {
            console.log(val);
            clon = $('.templateArticle').clone().removeClass('templateArticle').addClass('project').show();
            clon.find('h2').html(val.name);
            
            clon.on('click', function () {
                window.location = val.url; 
            });

            $('.divProjects').append(clon);
        });
    });
</script>

