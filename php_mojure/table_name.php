<?php
    function getTableName($sectionName) {

        switch ($sectionName) {
            case 'news' :
                //ニュースのテーブル
                return 'samplenews';
                break; 
            case 'instrument' :
                //楽器紹介情報のテーブル
                return 'testinst';
                break;
            default :
                break;
        }

    }