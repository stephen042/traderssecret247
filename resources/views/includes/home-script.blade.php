
<script src="{{ asset('home-assets/js/jquery3.2.1.min.html') }}"></script>
<script src="{{ asset('home-assets/js/bootstrap-3.min.html') }}"></script>
<script src="{{ asset('home-assets/js/main.html') }}"></script>

<script type="text/javascript">
    function topNav() {
            var x = document.getElementById("topNav");
            var y = document.getElementById("loginContainer");
            if (x.className === "topNav") {
                x.className += " mobileNav";
            } else {
                x.className = "topNav";
            }
            if (y.className === "loginContainer") {
                y.className += " mobileNav";
            } else {
                y.className = "loginContainer";
            }
        }

        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }

        $(document).ready(function () {
            // get the tab from url
            var hash = window.location.hash;
            // if a hash is present (when you come to this page)
            if (hash != '') {
                // show the tab
                $('.nav-tabs a[href="' + hash + '"]').tab('show');
            }

            $('#contactForm #info').hide();
            $('#contactForm').submit(function (e) {
                e.preventDefault();

                $('#contactForm button[type="submit"]').attr('disabled', true);
                $('#contactForm button[type="submit"]').html('<div class="loader"></div>');
                $('#contactForm #info').hide();

                $.post($(this).attr('action'), $(this).serialize())
                    .done(function (data) {
                        $('#contactForm #info').text(data).show();
                    }).fail(function (e) {
                        console.error(e);
                    }).always(function () {
                        $('#contactForm button[type="submit"]').html('').text('SUBMIT');
                        $('#contactForm button[type="submit"]').removeAttr('disabled');
                        $('#contactForm').trigger('reset');
                    });
            });
        });
</script>

<script src="{{ URL('home-assets/translate.google.com/translate_a/elementa0d8a0d8.html?cb=googleTranslateElementInit') }}"></script>

<script>
    // Wait for 5 seconds before removing the preloader and showing the content
        window.addEventListener('load', function () {
            setTimeout(function () {
                document.body.classList.add('loaded');
                document.getElementById('content').style.display = 'block';
            }); // 5000ms = 5 seconds
        });
</script>