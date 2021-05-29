$(document).ready(function () {
    $("#start").click(function () {
        $(".q-0").fadeOut("200", function () {
            $(".q-1").css({ display: "flex" }).fadeIn("200");
        });

        // $(".q-0").css({ display: "none" });
        // $(".q-1").css({ display: "flex" });
    });

    $("#nextBtn-1").click(function () {
        if ($("#name").val()) {
            $(".q-1").fadeOut("200", function () {
                $(".q-2").css({ display: "flex" }).fadeIn("200");
            });

            // $(".q-1").css({ display: "block" });
            // $(".q-2").css({ display: "flex" });
        }
    });

    $("#nextBtn-2").click(function () {
        if (
            $("#q-2-1").is(":checked") ||
            $("#q-2-2").is(":checked") ||
            $("#q-2-3").is(":checked") ||
            $("#q-2-4").is(":checked")
        ) {
            $(".q-2").fadeOut("200", function () {
                $(".q-3").css({ display: "flex" }).fadeIn("200");
            });
        }
    });

    $("#nextBtn-3").click(function () {
        if (
            $("#q-3-1").is(":checked") ||
            $("#q-3-2").is(":checked") ||
            $("#q-3-3").is(":checked")
        ) {
            $(".q-3").fadeOut("200", function () {
                $(".q-4").css({ display: "flex" }).fadeIn("200");
            });
        }
    });

    $("#nextBtn-4").click(function () {
        if ($("input[name='questionFour[]']:checked").length === 3) {
            $(".q-4").fadeOut("200", function () {
                $(".q-5").css({ display: "flex" }).fadeIn("200");
            });
        }
    });

    $("#nextBtn-5").click(function () {
        if (
            $("#q-5-1").is(":checked") ||
            $("#q-5-2").is(":checked") ||
            $("#q-5-3").is(":checked") ||
            $("#q-5-4").is(":checked") ||
            $("#q-5-5").is(":checked")
        ) {
            $(".q-5").fadeOut("200", function () {
                $(".q-6").css({ display: "flex" }).fadeIn("200");
            });
        }
    });

    $("#nextBtn-6").click(function () {
        if (
            $("#q-6-1").is(":checked") ||
            $("#q-6-2").is(":checked") ||
            $("#q-6-3").is(":checked") ||
            $("#q-6-4").is(":checked") ||
            $("#q-6-5").is(":checked")
        ) {
            $(".q-6").fadeOut("200", function () {
                $(".q-7").css({ display: "flex" }).fadeIn("200");
            });
        }
    });

    $("#nextBtn-7").click(function () {
        if (
            $("#q-7-1").is(":checked") ||
            $("#q-7-2").is(":checked") ||
            $("#q-7-3").is(":checked") ||
            $("#q-7-4").is(":checked") ||
            $("#q-7-5").is(":checked")
        ) {
            $(".q-7").fadeOut("200", function () {
                $(".q-8").css({ display: "flex" }).fadeIn("200");
            });
        }
    });

    $("#nextBtn-8").click(function () {
        if (
            $("#q-8-1").is(":checked") ||
            $("#q-8-2").is(":checked") ||
            $("#q-8-3").is(":checked") ||
            $("#q-8-4").is(":checked")
        ) {
            $(".q-8").fadeOut("200", function () {
                $(".q-9").css({ display: "flex" }).fadeIn("200");
            });
        }
    });

    $("#nextBtn-9").click(function () {
        if (
            $("#q-9-1").is(":checked") ||
            $("#q-9-2").is(":checked") ||
            $("#q-9-3").is(":checked") ||
            $("#q-9-4").is(":checked") ||
            $("#q-9-5").is(":checked") ||
            $("#q-9-6").is(":checked") ||
            $("#q-9-7").is(":checked") ||
            $("#q-9-8").is(":checked") ||
            $("#q-9-9").is(":checked") ||
            $("#q-9-10").is(":checked") ||
            $("#q-9-11").is(":checked")
        ) {
            $(".q-9").fadeOut("200", function () {
                $(".q-10").css({ display: "flex" }).fadeIn("200");
            });
        }
    });

    //
    //

    $("#nextBtn-10").click(function () {
        if (
            $("#q-10-1").is(":checked") ||
            $("#q-10-2").is(":checked") ||
            $("#q-10-3").is(":checked") ||
            $("#q-10-4").is(":checked") ||
            $("#q-10-5").is(":checked")
        ) {
            $(".q-10").fadeOut("200", function () {
                $(".q-11").css({ display: "flex" }).fadeIn("200");
            });
        }
    });

    $("#nextBtn-11").click(function () {
        if (
            ($("#q-11-1").is(":checked") || $("#q-11-2").is(":checked")) &&
            $("#age").val() &&
            $("#questionExtra").val()
        ) {
            $(".q-11").fadeOut("200", function () {
                $(".q-final").css({ display: "flex" }).fadeIn("200");
            });
        }
    });

    //
    //
    //
    // set minimum of 3 checked to proceed
    let limit = 4;
    $(".max-3").on("change", function (evt) {
        if ($("input[name='questionFour[]']:checked").length >= limit) {
            this.checked = false;
        }
    });

    //check if the image is being uploaded if not throw alert and empty input
    $('[type="file"]').change(function () {
        let fileInput = $(this);
        if (
            fileInput.length &&
            fileInput[0].files &&
            fileInput[0].files.length
        ) {
            var url = window.URL || window.webkitURL;
            var image = new Image();
            image.onload = function () {
                console.log("Valid Image");
            };
            image.onerror = function () {
                alert("Invalid image");
            };
            image.src = url.createObjectURL(fileInput[0].files[0]);
        }
    });

    //modal close button controls
    $(".close").click(function () {
        $(".overlay").css({ display: "none" });
    });

    //click anywhere but the modal to close it
    $(".overlay").on("click", function (e) {
        if (e.target !== this) {
            return;
        }
        $(".overlay").hide();
    });
});
