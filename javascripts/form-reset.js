$(document).ready(function () {
    $("#close").click(function () {
        $("form").each(function () {
            if (this.id == "content-form") {
                this.reset();
                $("#idham").attr("disabled", true);
                $("#idpwd").attr("disabled", true);
                $(".upload-display").empty();
            };
        });
    });
});
