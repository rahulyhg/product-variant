<?php
/**
 * Groups configuration for default Minify implementation
 * @package Minify
 */

/**
 * You may wish to use the Minify URI Builder app to suggest
 * changes. http://yourdomain/min/builder/
 **/

return array(
    /*
     * Default JS resource
     */
    'jsDefaultCoreAdmin' => [
        '../plugins/pace/pace.min.js',
        '../plugins/modernizr.custom.js',
        '../plugins/jquery/jquery-easy.js',
        '../plugins/jquery-unveil/jquery.unveil.min.js',
        '../plugins/jquery-bez/jquery.bez.min.js',
        '../plugins/jquery-ios-list/jquery.ioslist.min.js',
        '../plugins/imagesloaded/imagesloaded.pkgd.min.js',
        '../plugins/jquery-actual/jquery.actual.min.js',
        '../plugins/jquery-scrollbar/jquery.scrollbar.min.js',
        '../plugins/bootstrap-select2/select2.min.js',
        '../plugins/bootstrap3-editable/js/bootstrap-editable.min.js',
        '../plugins/bootstrap-tag/bootstrap-tagsinput.min.js',
        '../plugins/jquery-datatable/media/js/jquery.dataTables.min.js',
        '../plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js',
        '../plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js',
        '../plugins/datatables-responsive/js/datatables.responsive.js',
        '../plugins/datatables-responsive/js/lodash.min.js',
        '../plugins/classie/classie.js',
        '../plugins/dropzone/dropzone.min.js',
        '../plugins/jquery-toastr/toastr.min.js',
        '../plugins/sweetalert/dist/sweetalert.min.js',
        '../plugins/jquery-tag-input/jquery.tagsinput.min.js',
        '../assets/default/js/core/pages.js',
        '../assets/default/js/core/tables.js',
        '../assets/default/js/core/scripts.js',
    ],
    'jsDefaultUserAdmin' => [
        '../assets/default/js/user/admin-main.js',
    ],
    'jsDefaultProductAdmin' => [
        '../plugins/summernote/js/summernote.min.js',
        '../assets/default/js/product/admin-main.js',
    ],
    'jsDefaultProductCategoryAdmin' => [
        '../plugins/jquery-nestable/jquery.nestable.min.js',
        '../assets/default/js/pcategory/admin-nestables.js',
    ],
    'jsDefaultSlugAdmin' => [
        '../assets/default/js/slug/admin-main.js',
    ],
    'jsDefaultCoreSite' => [
        '../plugins/jquery.fancybox.js',
        '../plugins/owl-carousel/owl.carousel.js',
        '../plugins/parallax.js',
        '../plugins/jquery.hoverdir.js',
        '../plugins/modernizr.custom.js',
        '../plugins/jquery.jcarousellite.js',
        '../assets/default/js/core/customize.js',
        '../assets/default/js/core/theme.js',
    ],
    /**
     * Default CSS resource
     */
    'cssDefaultCoreAdmin' => [
        '../plugins/pace/pace-theme-flash.css',
        '../plugins/font-awesome/css/font-awesome.css',
        '../plugins/jquery-scrollbar/jquery.scrollbar.css',
        '../plugins/bootstrap-select2/select2.css',
        '../plugins/bootstrap3-editable/css/bootstrap-editable.css',
        '../plugins/switchery/css/switchery.min.css',
        '../plugins/jquery-nestable/jquery.nestable.min.css',
        '../plugins/jquery-datatable/media/css/jquery.dataTables.css',
        '../plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css',
        '../plugins/datatables-responsive/css/datatables.responsive.css',
        '../plugins/dropzone/css/dropzone.css',
        '../plugins/jquery-toastr/toastr.min.css',
        '../plugins/sweetalert/dist/sweetalert.css',
        '../plugins/jquery-tag-input/jquery.tagsinput.min.css',
        '../assets/default/css/core/pages-icons.css',
        '../assets/default/css/core/pages.css',
        '../assets/default/css/core/style.css',
    ],
    'cssDefaultUserAdmin' => [
        '../assets/default/css/user/admin-style.css',
    ],
    'cssDefaultProductAdmin' => [
        '../plugins/summernote/css/summernote.css',
        '../assets/default/css/product/admin-style.css',
    ],
    'cssDefaultProductCategoryAdmin' => [
        '../assets/default/css/pcategory/admin-style.css',
    ],
    'cssDefaultCoreSite' => [
        '../plugins/font-awesome/css/font-awesome.css',
        '../assets/default/css/core/bootstrap.css',
        '../assets/default/css/core/bootstrap-theme.css',
        '../assets/default/css/core/jquery.fancybox.css',
        '../assets/default/css/core/jquery-ui.css',
        '../plugins/owl-carousel/owl.carousel.css',
        '../plugins/owl-carousel/owl.transitions.css',
        '../plugins/owl-carousel/owl.theme.css',
        '../assets/default/css/core/theme.css',
        '../assets/default/css/core/responsive.css',
    ],
);
