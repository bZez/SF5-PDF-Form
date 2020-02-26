<?php

/***************************
 * Sample using a PHP array
 ****************************/
require('fpdm.php');
$fields = [];
//PHY
if (isset($_POST['s_physique'])) {
    $phy = $_POST['s_physique'];
    $dateNaissPhy = new DateTime($phy['pp_birthdate']);
    $gsmPhy = str_split($phy['pp_telperso'], 2);
    $gsmproPhy = str_split($phy['pp_telpro'], 2);
    $fields = array(
        //Physique
        '5' => $phy['pp_name'] . ' ' . $phy['pp_surname'], //NOM PRENOM
        '6' => $phy['pp_birthname'], //NOM NAISSANCE
        //NAISSANCE
        '7' => $dateNaissPhy->format('d'), //JOUR
        '8' => $dateNaissPhy->format('m'), //MOIS
        '9' => $dateNaissPhy->format('Y'), //ANNEE
        '10' => $phy['pp_birthcity'], //VILLE
        '11' => $phy['pp_dept'], //DEPARTEMENT (chiffre)
        '12' => $phy['pp_nationality'], //NATIONALITE
        //ADRESSE
        '13' => 'd', //ADRESSE 1
        '14' => $phy['pp_adrdess'], //ADRESSE 2
        '15' => $phy['pp_postcod'], //ZIPCODE
        '16' => $phy['pp_city'], //VILLE NOM
        '17' => $gsmPhy[0], //06
        '18' => $gsmPhy[1], //06
        '19' => $gsmPhy[1], //06
        '20' => $gsmPhy[2], //06
        '21' => $gsmPhy[4], //06
        '22' => $phy['pp_email'], //EMAIL
        '24' => $phy['pp_job'], ///EMPLOI
    );

};
if (isset($_POST['c_physique'])) {
    $cophy = $_POST['c_physique'];
    $dateNaissCoPhy = new DateTime($cophy['pp_birthdate']);
    $gsmCoPhy = str_split($cophy['pp_telperso'], 2);
    $gsmproCoPhy = str_split($cophy['pp_telpro'], 2);
    $fields = array(
        //CO PHYSIQUE
        '27' => $cophy['pp_name'] . ' ' . $cophy['pp_surname'],
        '28' => $cophy['pp_birthname'],
        '29' => $dateNaissCoPhy->format('d'),
        '30' => $dateNaissCoPhy->format('m'),
        '31' => $dateNaissCoPhy->format('Y'),
        '32' => $cophy['pp_birthcity'],
        '33' => $cophy['pp_dept'],
        '34' => $cophy['pp_nationality'],
        '35' => 'd',
        '36' => $cophy['pp_adrdess'],
        '37' => $cophy['pp_postcod'],
        '38' => $cophy['pp_city'],
        '39' => $gsmCoPhy[0],
        '40' => $gsmCoPhy[1],
        '41' => $gsmCoPhy[2],
        '42' => $gsmCoPhy[3],
        '43' => $gsmCoPhy[4],
        '44' => $cophy['pp_email'],
        '47' => $cophy['pp_address_fisc']
    );
};

if (isset($_POST['s_moral'])) {
    $moral = $_POST['s_moral'];
    $dateNaissMoral = new DateTime($moral['pp_birthdate']);
    $gsmMoral = str_split($moral['pm_telperso'], 2);
    $gsmproMoral = str_split($moral['pm_telpro'], 2);
    $fields = array(
        //CO PHYSIQUE
        '48' => $moral['pm_companytype'],
        '49' => $moral['pm_name'],
        '50' => $moral['pm_adrdess'],
        '51' => $moral['pm_postcod'],
        '52' => $moral['pp_city'],
        '53' => $gsmMoral[0],
        '54' => $gsmMoral[1],
        '55' => $gsmMoral[2],
        '56' => $gsmMoral[3],
        '57' => $gsmMoral[4],
        '58' => $moral['pm_email'],
        '59' => $moral['pm_siret'],
        '60' => $moral['pm_ape'],
        '61' => $moral['pm_nameprep'],
        '63' => $moral['pm_quality'],
    );
};


$pdf = new FPDM('test.pdf');
$pdf->Load($fields, false); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
$pdf->Merge();
$pdf->Output();
?>
