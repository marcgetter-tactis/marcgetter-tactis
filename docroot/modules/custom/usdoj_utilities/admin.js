(function ($, Drupal, drupalSettings) {
  'use strict';

  // clears all date selectors for a chosen date
  $('.chosen-clear').click( function () {
    var data_target = $(this).attr('data-target');
    var selector = 'select[name^="' + data_target + '"]'; 

    $(selector).val('').trigger("chosen:updated");
  });

  $('.chosen-hide-day, .chosen-hide-monthday').find('select.form-select').change( function() {
   var this_name = $(this).attr('name');
    var suffix = {
      'year': '[year]',
      'month': '[month]',
      'day': '[day]',
    };
    var this_name_parent = '';
    var month_selector = '';
    var day_selector = '';
    var selected_year = '';
    var reset_day = '';
    var reset_month = '';
    var visible_month = false;

    if (this_name.indexOf(suffix.year) > 0) {
      selected_year = $(this).val();
      this_name_parent = this_name.replace(suffix.year, '');
      month_selector = 'select[name="' + this_name_parent + suffix.month + '"]';
      day_selector = 'select[name="' + this_name_parent + suffix.day + '"]';
      
      if (selected_year == '') {
        reset_day = '';
      } else {
        reset_day = '1';
      }

      // set values for day field
      $(day_selector).val(reset_day).trigger("chosen:updated");

      if ($(month_selector).is(':hidden')) {
        if (selected_year == '') {
          reset_month = '';
        } else {
          reset_month = '1';
        }

        // set values for month field
        $(month_selector).val(reset_month).trigger("chosen:updated");
      }
    }
    
  });

}(jQuery, Drupal, drupalSettings));
