<?php

namespace App;

class Helpers {
    public static function judeteAPI($judete){
        foreach ($judete as $judet){
            return [
                'id'=>$judet->id,
                'denumire'=>$judet->denumire,
                'localiati'=>$judet->afisareLocalitati
            ];
        }
    }
}
