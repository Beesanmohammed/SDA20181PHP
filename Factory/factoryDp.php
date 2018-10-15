<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of factoryDp
 *
 * @author aashgar
 */
class factoryDp {
    //put your code here
    public static function getStudent($type) {
        if(strtolower($type) == 'it')
            return new ItStudent();
        else if (strtolower($type) == 'eng')
            return new EngStudent();
        else if (strtolower($type) == 'art')
            return new ArtStudent();
        else
            return new ItStudent();
    }
}
