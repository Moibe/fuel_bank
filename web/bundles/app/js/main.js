/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $(document).on('click', ".btn-toggle", function () {
        var target = $(this).data("target");
        $(this).closest(".elementor-icon-box-content").find("." + target).slideToggle();
        return false;
    });
});