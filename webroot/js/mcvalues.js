/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var midrailMarkup;
var midrailCost;
var midrailAmount;

/*** Products On change Event => Calculator ***/
$(document).ready(function () {
    //initializeVariables();
    
    $('body').on('change', '.include-midrail', function (evt, data) {
        midrailMarkup = Number($('input[name="midrail_markup"]').val());
        midrailCost = Number($('input[name="midrail_cost"]').val());
        
        var midrailMarkupPrice = midrailCost * midrailMarkup / 100;
       
        midrailAmount = (Number(midrailCost) +  Number(midrailMarkupPrice)).toFixed(2);
        $('input[name="include_midrail_amount"]').val(midrailAmount);
        
    });
    
    
});
 
function initializeVariables() {
    
    //midrailAmount = Number($('input[name="include_midrail_amount"]').val());    
} 
