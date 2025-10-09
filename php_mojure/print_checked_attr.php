<?php
function printCheckedAttr($selectedValue, $valueAttr) {
    if(in_array($valueAttr, $selectedValue)) {
        print 'checked';
    }
}