<?php

class DateHelper extends AppHelper {

    function show($datetime, $heure = false, $article = true) {
        $tmstamp = strtotime($datetime);
        $jour = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
        $mois = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'juin', 'juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');

        $date = '';

        if($article)
            $date.= 'le ';

        $date = $jour[date("N",$tmstamp)-1]." ".date("d",$tmstamp)." ".$mois[date("n",$tmstamp)-1]." ".date("Y",$tmstamp);

        if($heure == true) {
            $date.=" à ".date("H:i",$tmstamp);
        }

        return $date;
    }

    function entiereMaisCourte($datetime, $heure = false) {
        $tmstamp = strtotime($datetime);
        $jour = array('Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim');
        $mois = array('Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'juin', 'juil', 'Aout', 'Sept', 'Oct', 'Nov', 'Déc');

        $date = $jour[date("N",$tmstamp)-1]." ".date("d",$tmstamp)." ".$mois[date("n",$tmstamp)-1]." ".date("Y",$tmstamp);

        if($heure == true) {
            $date.=" | ".date("H:i",$tmstamp);
        }

        return $date;
    }

    function mois($mois) {
        $tab = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');

        $mois = intval($mois) - 1;
        $date = $tab[$mois];

        return $date;
    }

    function date_publication($datetime) {
        $tmstamp = strtotime($datetime);
        $mois = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');

        $date = "Le ".date("d",$tmstamp)." ".$mois[date("n",$tmstamp)-1]." ".date("Y",$tmstamp);

        return $date;
    }

    function form($datetime, $separator = '/'){
        return date("d".$separator."m".$separator."Y", strtotime($datetime));
    }

    function dateWithHour($datetime){
        return date("d/m/Y - H:i", strtotime($datetime));
    }

    function Compare($datetime) {
        if($datetime == "0000-00-00 00:00:00"){
            $time = time();
        }else{
            $time = strtotime($datetime);
        }

        $time = time() - $time;

        if($time < 1)
            $time = 1;

        $return = '';

        $tokens = array (
            31536000 => 'année',
            2592000 => 'mois',
            604800 => 'semaine',
            86400 => 'jour',
            3600 => 'heure',
            60 => 'minute',
            1 => 'seconde'
        );

        foreach ($tokens as $unit => $text) {
            if ($time < $unit)
                continue;
            $numberOfUnits = floor($time / $unit);
            $return.= $numberOfUnits . ' ' . $text;
            $return.= ($text != 'mois' && $numberOfUnits>1)?'s':'';
            return $return;
        }


    }
    function format($datetime, $heure = false) {
        $tmstamp = strtotime($datetime);
        $date = date("d/m/Y",$tmstamp);

        if($heure == true) {
            $date.="&nbsp;à&nbsp;".date("H\\hi",$tmstamp);
        }

        return $date;
    }

    function shortformat($datetime, $heure = false) {
        $tmstamp = strtotime($datetime);
        $date = date("d/m/y",$tmstamp);

        if($heure == true) {
            $date.="&nbsp;à&nbsp;".date("H\\hi",$tmstamp);
        }

        return $date;
    }

    // function Compare($datetime){

    //     if($datetime == "0000-00-00 00:00:00"){
    //         $tmstamp = time();
    //     }else{
    //         $tmstamp = strtotime($datetime);
    //     }
    //     $now = time();

    //     $diff = $now - $tmstamp;

    //     $depuis = "Il y a ";

    //     $seconde    = 60;
    //     $heure      = 60 * 60;
    //     $jour       = 60 * 60 * 24;
    //     $semaine    = 60 * 60 * 24 * 7;
    //     $mois       = 60 * 60 * 24 * 7 * 30;
    //     $annee      = 60 * 60 * 24 * 366.5;

    //     if($diff < $seconde){

    //             if($diff < 2){
    //                 $depuis .= $diff." seconde";
    //             }else{
    //                 $depuis .= $diff." secondes";
    //             }

    //     }elseif($diff >= $seconde && $diff < $heure){

    //             $diff = floor($diff / $seconde);

    //             if($diff < 2){
    //                 $depuis .= $diff." minute";
    //             }else{
    //                 $depuis .= $diff." minutes";
    //             }

    //     }elseif($diff >= $heure && $diff < $jour){

    //             $diff = floor($diff / $heure);

    //             if($diff < 2){
    //                 $depuis .= $diff." heure";
    //             }else{
    //                 $depuis .= $diff." heures";
    //             }

    //     }elseif($diff >= $jour && $diff < $semaine){

    //             $diff = floor($diff/$jour);

    //             if($diff < 2){
    //                 $depuis .= $diff." jour";
    //             }else{
    //                 $depuis .= $diff." jours";
    //             }

    //     }elseif($diff >= $semaine && $diff < $mois){

    //             $diff = floor($diff/$semaine);

    //             if($diff < 2){
    //                 $depuis .= $diff." semaine";
    //             }else{
    //                 $depuis .= $diff." semaines";
    //             }

    //     }elseif($diff >= $mois && $diff < $annee){

    //             $diff = floor($diff/$mois);
    //             $depuis .= $diff." mois";


    //     }elseif($diff >= $annee){

    //             $diff = floor($diff/$annee);

    //             if($diff < 2){
    //                 $depuis .= $diff." an";
    //             }else{
    //                 $depuis .= $diff." ans";
    //             }
    //     }

    //     return $depuis;
    // }

    public function age($birthday){
        if (($birthday = strtotime($birthday)) === false){
            return false;
        }
        for ($i = 0; strtotime("-$i year") > $birthday; ++$i);
        return $i - 1 . ' ans';
    }

    /**
     * Return true if $date (str) deafult => SQl format, is in futur
     * Strictly Futur Not Présent
     */
    public function isFutur($date, $format = SQL_DT)
    {
        $d = DateTime::createFromFormat($format, $date);
        $now = new DateTime();
        return $d > $now;
    }

}