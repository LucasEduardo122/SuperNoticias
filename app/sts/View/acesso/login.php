<?php
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
<script>

    /**
     * 
     * flatNotify.js v0.1
     * @screenshake
     *
     * Inspired by :
     * http://tympanus.net/codrops/2014/07/23/notification-styles-inspiration/
     * 
     * Animation courtesy :
     * bounce.js - http://bouncejs.com/
     * 
     * Class manipulation
     * classie.js https://github.com/desandro/classie
     * 
     */
    ;
    (function (window) {

        var proto_methods = {
            options: {
                wrapper: document.body,
                dismissIn: 5000
            },
            init: function () {
                this.ntf = document.createElement('div');
                this.ntf.className = 'f-notification';
                var strinner = '<div class="f-notification-inner"></div><div class="f-close">x</div></div>';
                this.ntf.innerHTML = strinner;

                // append to body or the element specified in options.wrapper
                this.options.wrapper.insertBefore(this.ntf, this.options.wrapper.lastChild);

                // init events
                this.initEvents();
            },
            initEvents: function () {
                var self = this;
                // dismiss notification
                this.ntf.querySelector('.f-close').addEventListener('click', function () {
                    self.dismiss();
                });
            },
            dismiss: function () {
                var self = this;
                clearTimeout(this.dismissttl);

                classie.remove(self.ntf, 'f-show');
                setTimeout(function () {
                    classie.add(self.ntf, 'f-hide');
                }, 25);

                setTimeout(function () {
                    self.options.wrapper.removeChild(self.ntf);
                }, 500);

            },
            setType: function (newType) {
                var self = this;

                classie.remove(self.ntf, 'f-notification-error');
                classie.remove(self.ntf, 'f-notification-alert');
                classie.remove(self.ntf, 'f-notification-success');

                classie.add(self.ntf, newType);

            },
            success: function (message, dismissIn) {
                var self = this;

                /**
                 * Use supplied dismiss timeout if present, else uses default value.
                 * If set to 0, doesnt automatically dismiss.
                 */
                dismissIn = (typeof dismissIn === "undefined") ? this.options['dismissIn'] : dismissIn;

                /**
                 * Set notification type styling
                 */
                self.setType('f-notification-success');

                self.ntf.querySelector('.f-notification-inner').innerHTML = message;

                classie.remove(self.ntf, 'f-hide');
                classie.add(self.ntf, 'f-show');

                if (dismissIn > 0) {
                    this.dismissttl = setTimeout(function () {
                        self.dismiss();
                    }, dismissIn);
                }
            },
            error: function (message, dismissIn) {
                var self = this;

                /**
                 * Use supplied dismiss timeout if present, else uses default value.
                 * If set to 0, doesnt automatically dismiss.
                 */
                dismissIn = (typeof dismissIn === "undefined") ? this.options['dismissIn'] : dismissIn;

                /**
                 * Set notification type styling
                 */
                self.setType('f-notification-error');

                self.ntf.querySelector('.f-notification-inner').innerHTML = message;

                classie.remove(self.ntf, 'f-hide');
                classie.add(self.ntf, 'f-show');

                if (dismissIn > 0) {
                    this.dismissttl = setTimeout(function () {
                        self.dismiss();
                    }, dismissIn);
                }
            },
            alert: function (message, dismissIn) {
                var self = this;

                /**
                 * Use supplied dismiss timeout if present, else uses default value.
                 * If set to 0, doesnt automatically dismiss.
                 */
                dismissIn = (typeof dismissIn === "undefined") ? this.options['dismissIn'] : dismissIn;

                /**
                 * Set notification type styling
                 */
                self.setType('f-notification-alert');

                self.ntf.querySelector('.f-notification-inner').innerHTML = message;

                classie.remove(self.ntf, 'f-hide');
                classie.add(self.ntf, 'f-show');

                if (dismissIn > 0) {
                    this.dismissttl = setTimeout(function () {
                        self.dismiss();
                    }, dismissIn);
                }
            }
        }, flatNotify, _flatNotifiy;

        _flatNotifiy = function () {
            this.init();
        };

        _flatNotifiy.prototype = proto_methods;

        flatNotify = function () {
            return new _flatNotifiy();
        };

        /**
         * add to global namespace
         */
        window.flatNotify = flatNotify;

    })(window);

    /*==========*/
    (function (window) {

        'use strict';

        // class helper functions from bonzo https://github.com/ded/bonzo

        function classReg(className) {
            return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
        }

        // classList support for class management
        // altho to be fair, the api sucks because it won't accept multiple classes at once
        var hasClass, addClass, removeClass;

        if ('classList' in document.documentElement) {
            hasClass = function (elem, c) {
                return elem.classList.contains(c);
            };
            addClass = function (elem, c) {
                elem.classList.add(c);
            };
            removeClass = function (elem, c) {
                elem.classList.remove(c);
            };
        } else {
            hasClass = function (elem, c) {
                return classReg(c).test(elem.className);
            };
            addClass = function (elem, c) {
                if (!hasClass(elem, c)) {
                    elem.className = elem.className + ' ' + c;
                }
            };
            removeClass = function (elem, c) {
                elem.className = elem.className.replace(classReg(c), ' ');
            };
        }

        function toggleClass(elem, c) {
            var fn = hasClass(elem, c) ? removeClass : addClass;
            fn(elem, c);
        }

        var classie = {
            // full names
            hasClass: hasClass,
            addClass: addClass,
            removeClass: removeClass,
            toggleClass: toggleClass,
            // short names
            has: hasClass,
            add: addClass,
            remove: removeClass,
            toggle: toggleClass
        };

        // transport
        if (typeof define === 'function' && define.amd) {
            // AMD
            define(classie);
        } else {
            // browser global
            window.classie = classie;
        }

    })(window);
</script>
<div class="get_in_touch"><!-- start last_posts -->
    <div class="wrap">
        <h5 class="heading">Login</h5>
        <div class="get-left">
            <p>A página de login é destinada somente para os membros da equipe SN </p>
        </div>
        <div class="get-right">
            <form method="POST" action="">

                <ul>
                    <li class="name">
                        <a href="#" class="icon user"> </a>
                        <input type="text" placeholder="Acesso" name="nick" required="" >
                        <div class="clear"> </div>
                    </li> 
                    <li class="email_1">
                        <a href="#" class="icon mail"> </a>
                        <input type="password" placeholder="Senha de acesso" name="senha" required="">
                        <div class="clear"> </div>
                    </li> 
                    <div class="clear"> </div>

                    <input class="send" id="teste" name="sendLogin" type="submit" value="Logar" />
                    <!--
            <div class="send">
                            <a href="#">SEND</a>
            </div>
                    -->
                </ul>
            </form>
        </div>
        <div class="clear"> </div>
    </div>
    <?php
    if (isset($_SESSION['script'])) {
        echo $_SESSION['script'];
        unset($_SESSION['script']);
    }
    ?>
    <div id="modal" class="modal--hide">
        <div class="modal-inner">
            <button class="error" id="close-modal">&times;</button>
            <img src="<?php echo URL ?>assets/images/erro.jpg"/>
            <p class="errorMSG">
                <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?></p>

        </div>
    </div>

    <script>

        var modal = document.getElementById('modal');
        var closeModal = document.getElementById('close-modal');

        closeModal.addEventListener('click', function () {
            modal.classList.add('modal--hide');
        });


        //var botao = document.getElementById('teste');
        //botao.addEventListener('click', function () {
        //modal.classList.remove('modal--hide');
        //});
    </script>