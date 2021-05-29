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
        if (
            $("#q-4-1").is(":checked") ||
            $("#q-4-2").is(":checked") ||
            $("#q-4-3").is(":checked") ||
            $("#q-4-4").is(":checked") ||
            $("#q-4-5").is(":checked") ||
            $("#q-4-6").is(":checked") ||
            $("#q-4-7").is(":checked") ||
            $("#q-4-8").is(":checked") ||
            $("#q-4-9").is(":checked")
        ) {
            $(".q-4").fadeOut("200", function () {
                $(".q-final").css({ display: "flex" }).fadeIn("200");
            });
        }
    });

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
