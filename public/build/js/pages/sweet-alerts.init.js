/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Sweetalert Js File
*/

!(function ($) {
    "use strict";

    var SweetAlert = function () {};

    //examples
    (SweetAlert.prototype.init = function () {
        //Basic
        $("#sa-basic").on("click", function () {
            Swal.fire({
                title: "Any fool can use a computer",
                confirmButtonColor: "#556ee6",
            });
        });

        //A title with a text under
        $("#sa-title").click(function () {
            Swal.fire({
                title: "The Internet?",
                text: "That thing is still around?",
                icon: "question",
                confirmButtonColor: "#556ee6",
            });
        });

        //Success Message
        $("#sa-success").click(function () {
            Swal.fire({
                title: "Good job!",
                text: "You clicked the button!",
                icon: "success",
                showCancelButton: true,
                confirmButtonColor: "#556ee6",
                cancelButtonColor: "#f46a6a",
            });
        });

        //Warning Message
        $("#sa-warning").click(function () {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#34c38f",
                cancelButtonColor: "#f46a6a",
                confirmButtonText: "Yes, delete it!",
            }).then(function (result) {
                if (result.value) {
                    Swal.fire(
                        "Deleted!",
                        "Your file has been deleted.",
                        "success"
                    );
                }
            });
        });

        //Parameter
        $("#sa-params").click(function () {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                customClass: {
                    confirmButton: "btn btn-success mt-2",
                    cancelButton: "btn btn-danger ms-2 mt-2",
                },
                buttonsStyling: false,
            }).then(function (result) {
                if (result.value) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success",
                    });
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    Swal.fire({
                        title: "Cancelled",
                        text: "Your imaginary file is safe :)",
                        icon: "error",
                    });
                }
            });
        });

        //Custom Image
        $("#sa-image").click(function () {
            Swal.fire({
                title: "Sweet!",
                text: "Modal with a custom image.",
                imageUrl: "build/images/logo-dark.png",
                imageHeight: 20,
                confirmButtonColor: "#556ee6",
                animation: false,
            });
        });

        //Auto Close Timer
        $("#sa-close").click(function () {
            var timerInterval;
            Swal.fire({
                title: "Auto close alert!",
                html: "I will close in <strong></strong> seconds.",
                timer: 2000,
                confirmButtonColor: "#556ee6",
                onBeforeOpen: function () {
                    Swal.showLoading();
                    timerInterval = setInterval(function () {
                        Swal.getContent().querySelector("strong").textContent =
                            Swal.getTimerLeft();
                    }, 100);
                },
                onClose: function () {
                    clearInterval(timerInterval);
                },
            }).then(function (result) {
                if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.timer
                ) {
                    console.log("I was closed by the timer");
                }
            });
        });

        //custom html alert
        $("#custom-html-alert").click(function () {
            Swal.fire({
                title: "<i>HTML</i> <u>example</u>",
                icon: "info",
                html:
                    "You can use <b>bold text</b>, " +
                    '<a href="//Themesbrand.in/">links</a> ' +
                    "and other HTML tags",
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonClass: "btn btn-success",
                cancelButtonClass: "btn btn-danger ms-1",
                confirmButtonColor: "#47bd9a",
                cancelButtonColor: "#f46a6a",
                confirmButtonText:
                    '<i class="fas fa-thumbs-up me-1"></i> Great!',
                cancelButtonText: '<i class="fas fa-thumbs-down"></i>',
            });
        });

        //position
        $("#sa-position").click(function () {
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Your work has been saved",
                showConfirmButton: false,
                timer: 1500,
            });
        });

        //Custom width padding
        $("#custom-padding-width-alert").click(function () {
            Swal.fire({
                title: "Custom width, padding, background.",
                width: 600,
                padding: 100,
                confirmButtonColor: "#556ee6",
                background:
                    "#fff url(//subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/geometry.png)",
            });
        });

        //Ajax
        $("#ajax-alert").click(function () {
            Swal.fire({
                title: "Submit email to run ajax request",
                input: "email",
                showCancelButton: true,
                confirmButtonText: "Submit",
                showLoaderOnConfirm: true,
                confirmButtonColor: "#556ee6",
                cancelButtonColor: "#f46a6a",
                preConfirm: function (email) {
                    return new Promise(function (resolve, reject) {
                        setTimeout(function () {
                            if (email === "taken@example.com") {
                                reject("This email is already taken.");
                            } else {
                                resolve();
                            }
                        }, 2000);
                    });
                },
                allowOutsideClick: false,
            }).then(function (email) {
                Swal.fire({
                    icon: "success",
                    title: "Ajax request finished!",
                    html: "Submitted email: " + email,
                    confirmButtonColor: "#556ee6",
                });
            });
        });
    }),
        //init
        ($.SweetAlert = new SweetAlert()),
        ($.SweetAlert.Constructor = SweetAlert);
})(window.jQuery),
    //initializing
    (function ($) {
        "use strict";
        $.SweetAlert.init();
    })(window.jQuery);
