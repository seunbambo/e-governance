    </div>
    </div>
    <!--<footer class="footer">
        <div class="copyright text-center">
            &copy; <a href="#">E-Governance</a>
            <script>
                document.write(new Date().getFullYear())
            </script>

        </div>
    </footer>

-->

    <script>
        $.fn.typer = function(text, options) {
            options = $.extend({}, {
                char: ' ',
                delay: 1000,
                duration: 600,
                endless: true
            }, options || text);

            text = $.isPlainObject(text) ? options.text : text;

            var elem = $(this),
                isTag = false,
                c = 0;

            (function typetext(i) {
                var e = ({
                        string: 1,
                        number: 1
                    } [typeof text] ? text : text[i]) + options.char,
                    char = e.substr(c++, 1);

                if (char === '<') {
                    isTag = true;
                }
                if (char === '>') {
                    isTag = false;
                }
                elem.html(e.substr(0, c));
                if (c <= e.length) {
                    if (isTag) {
                        typetext(i);
                    } else {
                        setTimeout(typetext, options.duration / 5, i);
                    }
                } else {
                    c = 0;
                    i++;

                    if (i === text.length && !options.endless) {
                        return;
                    } else if (i === text.length) {
                        i = 0;
                    }
                    setTimeout(typetext, options.delay, i);
                }
            })(0);
        };

        $('#type').typer(['E-Governance at your finger tips']);
    </script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="js/jquery.steps.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript">
        < script src = "" >
    </script>
    </body>

    </html>