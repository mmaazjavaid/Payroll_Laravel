$(function() {
	"use strict";

    $('.datepicker').pickadate({
        selectMonths: true,
        selectYears: true
    }),
    $('.timepicker').pickatime()


   
        $('#date-time').bootstrapMaterialDatePicker({
            format: 'YYYY-MM-DD HH:mm'
        });
        $('#startdate').bootstrapMaterialDatePicker({
            time: false
        });
        $('#birthdate').bootstrapMaterialDatePicker({
            time: false
        });
        $('#enddate').bootstrapMaterialDatePicker({
            time: false
        });
        $('#time').bootstrapMaterialDatePicker({
            date: false,
            format: 'HH:mm'
        });
   


});