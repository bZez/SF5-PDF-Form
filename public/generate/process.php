<?php
session_start();
/***************************
 * Sample using a PHP array
 ****************************/
require('fpdm.php');
$fields = [];
//SOUSCRIPTEUR
$A1 = $A2 = $A3 = $A4 = $R1 = $R2 = $NF = $N0 = $N1 = $N2 = $D1 = $D2 = $D3 = $D4 = $D5 = $M1 = $NA = $PRO = $D1_JOUR = $D1_MOIS = $D1_ANNEE = $CO_D1_JOUR = $CO_D1_MOIS = $CO_D1_ANNEE = '';
//CO-SOUSCRIPTEUR
$CO_N0 = $CO_N1 = $CO_N2 = $CO_D1 = $CO_D2 = $CO_D3 = $CO_D4 = $CO_NA = $CO_PRO = $CO_A1 = $CO_A2 = $CO_A3 = $CO_A4 = $CGP = $J = $V = $MB = $CO_NF = $CO_M1 = $CO_R1 = $CO_R2 = '';
$MO_N0 = $MO_N1 = $MO_N2 = $MO_D1 = $MO_D2 = $MO_D3 = $MO_D4 = $MO_NA = $MO_PRO = $MO_A1 = $MO_A2 = $MO_A3 = $MO_A4 = $CGP = $J = $V = $MB = $MO_NF = $MO_M1 = $MO_R1 = $MO_R2 = '';
//PHY
if (isset($_POST['s_physique'])) {
    $phy = $_POST['s_physique'];
    $N1 = $phy['pp_name'];
    $N2 = $phy['pp_surname'];
    $NF = $phy['pp_num_fisc'];
    if ($phy['pp_birthname'] !== '') {
        if ($phy['pp_civilite'] === 'm') {
            $N0 = $N1;
        } else {
            $N0 = $phy['pp_birthname'];
        }
    }
    if ($phy['pp_birthdate'] !== '') {
        $dateNaissPhy = new DateTime($phy['pp_birthdate']);
        $D1_JOUR = $dateNaissPhy->format('d');
        $D1_MOIS = $dateNaissPhy->format('m');
        $D1_ANNEE = $dateNaissPhy->format('Y');
    } else {
        $D1_JOUR = '';
        $D1_MOIS = '';
        $D1_ANNEE = '';
    }
    if ($phy['pp_birthcity'] !== '') {
        $D2 = $phy['pp_birthcity'];
    }
    if ($phy['pp_dept'] !== '') {
        $D3 = $phy['pp_dept'];
        $D5 = $phy['pp_dept'];
    }
    if ($phy['pp_nationality'] !== '') {
        $NA = $phy['pp_nationality'];
    }
    if ($phy['pp_birthcountry'] !== '') {
        $D4 = $phy['pp_birthcountry'];
    }
    if ($phy['pp_job'] !== '') {
        $PRO = $phy['pp_job'];
    }
    if ($phy['pp_adrdess'] !== '') {
        $A1 = $phy['pp_adrdess'];
    }
    if ($phy['pp_adrdess'] !== '') {
        $A2 = $phy['pp_postcod'];
    }
    if ($phy['pp_city'] !== '') {
        $A3 = $phy['pp_city'];
    }
    if ($phy['pp_adrdess'] !== '') {
        $A4 = $phy['pp_country'];
    }
    if ($phy['pp_email'] !== '') {
        $M1 = $phy['pp_email'];
    }
    if ($phy['pp_address_fisc'] !== '') {
        $R1 = $phy['pp_country'];
        $R2 = $phy['pp_country'];
    }
};
//CO-PHY
if (isset($_POST['c_physique'])) {
    $cophy = $_POST['c_physique'];
    $CO_N1 = $cophy['pp_name'];
    $CO_N2 = $cophy['pp_surname'];
    $CO_NF = $phy['pp_num_fisc'];
    if ($cophy['pp_birthname'] !== '') {
        if ($cophy['pp_civilite'] === 'm') {
            $CO_N0 = $CO_N1;
        } else {
            $CO_N0 = $cophy['pp_birthname'];
        }
    }
    if ($cophy['pp_birthdate'] !== '') {
        $dateNaissCoPhy = new DateTime($cophy['pp_birthdate']);
        $CO_D1_JOUR = $dateNaissCoPhy->format('d');
        $CO_D1_MOIS = $dateNaissCoPhy->format('m');
        $CO_D1_ANNEE = $dateNaissCoPhy->format('Y');
    } else {
        $CO_D1_JOUR = '';
        $CO_D1_MOIS = '';
        $CO_D1_ANNEE = '';
    }
    if ($cophy['pp_birthcity'] !== '') {
        $CO_D2 = $cophy['pp_birthcity'];
    }
    if ($cophy['pp_dept'] !== '') {
        $CO_D3 = $cophy['pp_dept'];
    }
    if ($cophy['pp_nationality'] !== '') {
        $CO_NA = $cophy['pp_nationality'];
    }
    if ($cophy['pp_birthcountry'] !== '') {
        $CO_D4 = $cophy['pp_birthcountry'];
    }
    if ($cophy['pp_job'] !== '') {
        $CO_PRO = $cophy['pp_job'];
    }
    if ($cophy['pp_adrdess'] !== '') {
        $CO_A1 = $cophy['pp_adrdess'];
    }
    if ($cophy['pp_adrdess'] !== '') {
        $CO_A2 = $cophy['pp_postcod'];
    }
    if ($cophy['pp_city'] !== '') {
        $CO_A3 = $cophy['pp_city'];
    }
    if ($cophy['pp_adrdess'] !== '') {
        $CO_A4 = $cophy['pp_country'];
    }
    if ($cophy['pp_email'] !== '') {
        $CO_M1 = $cophy['pp_email'];
    }
    if ($cophy['pp_address_fisc'] !== '') {
        $CO_R1 = $cophy['pp_country'];
        $CO_R2 = $cophy['pp_country'];
    }
};
//MORALE
if (isset($_POST['s_moral'])) {
    $phy = $_POST['s_moral'];
    $MO_N1 = $phy['pm_name'];
    $MO_N2 = $phy['pm_surname'];
    $MO_Q1 = $phy['pm_quality'];
    $MO_S1 = $phy['pm_siret'];
    $MO_APE = $phy['pm_ape'];
    $MO_A1 = $phy['pm_adrdess'];
    $MO_A2 = $phy['pm_postcod'];
    $MO_A3 = $phy['pm_city'];
    $MO_M1 = $phy['pm_email'];
    $MO_R1 = $phy['pm_address_fisc'];
    $NF = $phy['pm_num_fisc'];
    $MO_R2 = $phy['pm_address_fisc'];
};
//CO-MORALE
if (isset($_POST['co_moral'])) {
    $cophy = $_POST['co_moral'];
    $CO_N1 = $cophy['pp_name'];
    $CO_N2 = $cophy['pp_surname'];
    if ($cophy['pp_birthname'] !== '') {
        if ($cophy['pp_civilite'] === 'm') {
            $CO_N0 = $CO_N1;
        } else {
            $CO_N0 = $cophy['pp_birthname'];
        }
    }
    if ($cophy['pp_birthdate'] !== '') {
        $dateNaissCoPhy = new DateTime($cophy['pp_birthdate']);
        $CO_D1_JOUR = $dateNaissCoPhy->format('d');
        $CO_D1_MOIS = $dateNaissCoPhy->format('m');
        $CO_D1_ANNE = $dateNaissCoPhy->format('Y');
    } else {
        $CO_D1_JOUR = '';
        $CO_D1_MOIS = '';
        $CO_D1_ANNEE = '';
    }
    if ($cophy['pp_birthcity'] !== '') {
        $CO_D2 = $cophy['pp_birthcity'];
    }
    if ($cophy['pp_dept'] !== '') {
        $CO_D3 = $cophy['pp_dept'];
    }
    if ($cophy['pp_nationality'] !== '') {
        $CO_NA = $cophy['pp_nationality'];
    }
    if ($cophy['pp_job'] !== '') {
        $CO_PRO = $cophy['pp_job'];
    }
    if ($cophy['pp_adrdess'] !== '') {
        $CO_A1 = $cophy['pp_adrdess'];
    }
    if ($cophy['pp_adrdess'] !== '') {
        $CO_A2 = $cophy['pp_postcod'];
    }
    if ($cophy['pp_city'] !== '') {
        $CO_A3 = $cophy['pp_city'];
    }
    if ($cophy['pp_adrdess'] !== '') {
        $CO_A4 = $cophy['pp_country'];
    }
    if ($cophy['pp_email'] !== '') {
        $CO_M1 = $cophy['pp_email'];
    }
    if ($cophy['pp_address_fisc'] !== '') {
        $CO_R1 = $cophy['pp_country'];
        $CO_R2 = $cophy['pp_country'];
    }
};
//BOUCLE PDF
$pdfs = $_SESSION["_sf2_attributes"]['pdfs'];
if (count($pdfs) > 1) {
    $zip = new ZipArchive();
    $tmp_file = tempnam('tmp', '');
    $zip->open($tmp_file, ZipArchive::CREATE);

}

foreach ($pdfs as $pdf) {
    switch ($pdf) {
        case 'SCPI-PRIMONIAL-PATRIMMO-COMMERCE-PERSONNE-MORALE.pdf':
            $fields = [
                61 => $MO_N1 . ' ' . $MO_N2,
                84 => (new DateTime())->format('d/m/Y'),
                'Produit_1' => 'Choix1',
                'Produit' => 'PATRIMMOCOMMERCE',
                'Fournisseur' => 'PREIM',
                'Date' => (new DateTime())->format('d/m/Y'),
            ];
            break;
        case 'SCPI-PRIMONIAL-PATRIMMO-COMMERCE-PERSONNE-PHYSIQUE.pdf':
            $fields = [
                5 => $N1 . ' ' . $N2,
                6 => $N0,
                7 => $D1_JOUR,
                8 => $D1_MOIS,
                9 => $D1_ANNEE,
                10 => $D2,
                11 => $D3,
                12 => $NA,
                13 => $A1,
                15 => $A2,
                16 => $A3,
                22 => $M1,
                27 => $CO_N1 . ' ' . $CO_N2,
                28 => $CO_N0,
                29 => $CO_D1_JOUR,
                30 => $CO_D1_MOIS,
                31 => $CO_D1_ANNEE,
                32 => $CO_D2,
                33 => $CO_D3,
                34 => $CO_NA,
                35 => $CO_A1,
                37 => $CO_A2,
                38 => $CO_A3,
                44 => $CO_M1,
                84 => (new DateTime())->format('d/m/Y'),
                'T1' => $N1 . ' ' . $N2,
                'T2' => $N0,
                'DJ1' => $D1_JOUR,
                'DM1' => $D1_MOIS,
                'DA1' => $D1_ANNEE,
                'T3' => $D2,
                'CP1' => $D3,
                'T4' => $NA,
                'T5' => $D4,
                'T6' => $PRO,
                'T8' => $CO_N1 . ' ' . $CO_N2,
                'T9' => $CO_N0,
                'DJ2' => $CO_D1_JOUR,
                'DM2' => $CO_D1_MOIS,
                'DA2' => $CO_D1_ANNEE,
                'T10' => $CO_D2,
                'CP2' => $CO_D3,
                'T11' => $CO_NA,
                'T12' => $CO_D4,
                'T13' => $CO_PRO,
                'T28' => "L et A Finance",
                'T30' => (new DateTime())->format('d/m/Y'),
                'Nom' => $N1,
                'Prenom' => $N2,
                'Produit' => 'PATRIMMOCOMMERCE',
                'Fournisseur' => 'PREIM',
                'Date' => (new DateTime())->format('d/m/Y'),
            ];
            break;
        case 'SCPI-PRIMONIAL-PRIMOPIERRE-PERSONNE-MORALE.pdf':
            $fields = [
                61 => $MO_N1 . ' ' . $MO_N2,
                84 => (new DateTime())->format('d/m/Y'),
                'Produit' => 'PRIMOPIERRE',
                'Fournisseur' => 'PREIM',
                'Date' => (new DateTime())->format('d/m/Y'),
            ];
            break;
        case 'SCPI-PRIMONIAL-PRIMOPIERRE-PERSONNE-PHYSIQUE.pdf':
            $fields = [
                5 => $N1 . ' ' . $N2,
                6 => $N0,
                7 => $D1_JOUR,
                8 => $D1_MOIS,
                9 => $D1_ANNEE,
                10 => $D2,
                11 => $D3,
                12 => $NA,
                13 => $A1,
                15 => $A2,
                16 => $A3,
                22 => $M1,
                27 => $CO_N1 . ' ' . $CO_N2,
                28 => $CO_N0,
                29 => $CO_D1_JOUR,
                30 => $CO_D1_MOIS,
                31 => $CO_D1_ANNEE,
                32 => $CO_D2,
                33 => $CO_D3,
                34 => $CO_NA,
                35 => $CO_A1,
                37 => $CO_A2,
                38 => $CO_A3,
                44 => $CO_M1,
                84 => (new DateTime())->format('d/m/Y'),
                'T1' => $N1 . ' ' . $N2,
                'T2' => $N0,
                'DJ1' => $D1_JOUR,
                'DM1' => $D1_MOIS,
                'DA1' => $D1_ANNEE,
                'T3' => $D2,
                'CP1' => $D3,
                'T4' => $NA,
                'T5' => $D4,
                'T6' => $PRO,
                'T8' => $CO_N1 . ' ' . $CO_N2,
                'T9' => $CO_N0,
                'DJ2' => $CO_D1_JOUR,
                'DM2' => $CO_D1_MOIS,
                'DA2' => $CO_D1_ANNEE,
                'T10' => $CO_D2,
                'CP2' => $CO_D3,
                'T11' => $CO_NA,
                'T12' => $CO_D4,
                'T13' => $CO_PRO,
                'T28' => "L et A Finance",
                'T30' => (new DateTime())->format('d/m/Y'),
                'Nom' => $N1,
                'Prenom' => $N2,
                'Produit' => 'PRIMOPIERRE',
                'Fournisseur' => 'PREIM',
                'Date' => (new DateTime())->format('d/m/Y'),
            ];
            break;
        case 'SCPI-PRIMONIAL-PRIMOVIE-PERSONNE-MORALE.pdf':
            $fields = [
                61 => $MO_N1 . ' ' . $MO_N2,
                84 => (new DateTime())->format('d/m/Y'),
                'AttestNom' => $MO_N1 . ' ' . $MO_N2,
                'AttestDate' => (new DateTime())->format('d/m/Y'),
                'Produit' => 'PRIMOVIE',
                'Fournisseur' => 'PREIM',
                'Date' => (new DateTime())->format('d/m/Y'),
            ];
            break;
        case 'SCPI-VOISIN-EPARGNE-PIERRE-PERSONNE-MORALE.pdf':
            $fields = [
                'PM_REPRESENTE_PAR_NOM_PRENOM' => $MO_N1 . ' ' . $MO_N2,
                'FAIT_A_DATE' => (new DateTime())->format('d/m/Y'),
                'le' => (new DateTime())->format('d/m/Y'),
                'le_2' => (new DateTime())->format('d/m/Y'),
            ];
            break;
        case 'SCPI-PRIMONIAL-PRIMOVIE-PERSONNE-PHYSIQUE.pdf':
            $fields = [
                5 => $N1 . ' ' . $N2,
                6 => $N0,
                7 => $D1_JOUR,
                8 => $D1_MOIS,
                9 => $D1_ANNEE,
                10 => $D2,
                11 => $D3,
                12 => $NA,
                13 => $A1,
                15 => $A2,
                16 => $A3,
                22 => $M1,
                27 => $CO_N1 . ' ' . $CO_N2,
                28 => $CO_N0,
                29 => $CO_D1_JOUR,
                30 => $CO_D1_MOIS,
                31 => $CO_D1_ANNEE,
                32 => $CO_D2,
                33 => $CO_D3,
                34 => $CO_NA,
                35 => $CO_A1,
                37 => $CO_A2,
                38 => $CO_A3,
                44 => $CO_M1,
                84 => (new DateTime())->format('d/m/Y'),
                'T1' => $N1 . ' ' . $N2,
                'T2' => $N0,
                'DJ1' => $D1_JOUR,
                'DM1' => $D1_MOIS,
                'DA1' => $D1_ANNEE,
                'T3' => $D2,
                'CP1' => $D3,
                'T4' => $NA,
                'T5' => $D4,
                'T6' => $PRO,
                'T8' => $CO_N1 . ' ' . $CO_N2,
                'T9' => $CO_N0,
                'DJ2' => $CO_D1_JOUR,
                'DM2' => $CO_D1_MOIS,
                'DA2' => $CO_D1_ANNEE,
                'T10' => $CO_D2,
                'CP2' => $CO_D3,
                'T11' => $CO_NA,
                'T12' => $CO_D4,
                'T13' => $CO_PRO,
                'T28' => "L et A Finance",
                'T30' => (new DateTime())->format('d/m/Y'),
                'Souscripteur-Nom' => $N1 . ' ' . $N2,
                'Signature-souscripteur-nom' => $N1 . ' ' . $N2,
                'Signature-co-souscripteur-nom' => $CO_N1 . ' ' . $CO_N2,
                'Souscripteur-Nom-naissance' => $N0,
                'Souscripteur-Date-naissance' => $D1,
                'Souscripteur-Lieu-naissance' => $D2 . ' ' . $D4,
                'Souscripteur-Nationalite' => $NA,
                'Co-souscripteur-Nom' => $CO_N1 . ' ' . $CO_N2,
                'Co-souscripteur-Nom-naissance' => $CO_N0,
                'Co-souscripteur-Date-naissance' => $CO_D1,
                'Co-souscripteur-Lieu-naissance' => $CO_D2 . ' ' . $CO_D4,
                'Co-souscripteur-Nationalite' => $CO_NA,
                'Signature-souscripteur-date' => (new DateTime())->format('d/m/Y'),
                'Signature-co-souscripteur-date' => (new DateTime())->format('d/m/Y'),
                'Nom' => $N1,
                'Prenom' => $N2,
                'Produit' => 'PRIMOVIE',
                'Fournisseur' => 'PREIM',
                'Date' => (new DateTime())->format('d/m/Y'),
            ];
            break;
        case 'SCPI-VOISIN-EPARGNE-PIERRE-PERSONNE-PHYSIQUE.pdf':
            $fields = [
                'PP_NOM' => $N1,
                'PP_PRENOM' => $N2,
                'PP_DATE_NAISSANCE' => $D1,
                'PP_NOM_JEUNE_FILLE' => $N0,
                'PP_LIEU_NAISSANCE' => $D2,
                'PP_DEPARTEMENT_NAISSANCE' => $D4,
                'PP_NATIONALITE' => $NA,
                'PP_PROFESSION' => $PRO,
                'PP_ADRESSE' => $A1,
                'PP_CODE_POSTAL' => $A2,
                'PP_VILLE' => $A3,
                'PP_EMAIL' => $M1,
                'PP_NOM_CO' => $CO_N1,
                'PP_PRENOM_CO' => $CO_N2,
                'PP_DATE_NAISSANCE_CO' => $CO_D1,
                'PP_NOM_JEUNE_FILLE_CO' => $CO_N0,
                'PP_LIEU_NAISSANCE_CO' => $CO_D2,
                'PP_DEPARTEMENT_NAISSANCE_CO' => $CO_D4,
                'PP_NATIONALITE_CO' => $CO_NA,
                'PP_PROFESSION_CO' => $CO_PRO,
                'PP_ADRESSE_CO' => $CO_A1,
                'PP_CODE_POSTAL_CO' => $CO_A2,
                'PP_VILLE_CO' => $CO_A3,
                'PP_EMAIL_CO' => $CO_M1,
                'FAIT_A_DATE' => (new DateTime())->format('d/m/Y'),
                'le' => (new DateTime())->format('d/m/Y'),
                'le_2' => (new DateTime())->format('d/m/Y'),
                'NOM_SOUSCRIPTEUR' => $N1,
                'PRENOM' => $N2,
                'ADRESSE' => $A1,
                'CODE_POSTAL_SOUSCRIPTEUR' => $A2,
                'CODE_POSTAL_2' => $CO_A2,
                'VILLE' => $A3,
                'VILLE_2' => $CO_A3,
                'NOM_CO_SOUSCRIPTEUR' => $CO_N1,
                'PRENOM_2' => $CO_N2,
                'ADRESSE_2' => $CO_A1,
            ];
            break;
        case 'SCPI-SOFIDY-EFIMMO.pdf':
            $fields = [
                'jnais' => $D1_JOUR,
                'mnais' => $D1_MOIS,
                'anais' => $D1_ANNEE,
                'a' => $D2,
                'CPNaiss' => $D4,
                'sous_jnais' => $CO_D1_JOUR,
                'sous_mnais' => $CO_D1_MOIS,
                'sous_anais' => $CO_D1_ANNEE,
                'sous_a' => $CO_D2,
                'departement' => $CO_D4,
                'jle3' => (new DateTime())->format('d'),
                'mle3' => (new DateTime())->format('m'),
                'ale3' => (new DateTime())->format('Y'),
                'profession_1' => $PRO,
                'profession_2' => $PRO,
                'mail' => $M1,
                'Adresse' => $A1,
                'CP' => $A2,
                'Ville' => $A3,
                'jour' => (new DateTime())->format('d'),
                'mois' => (new DateTime())->format('m'),
                'annee' => (new DateTime())->format('Y'),
                'nomSCPI' => 'IMMORENTE',
            ];
            break;
        case 'SCPI-SOFIDY-IMMORENTE.pdf':
            $fields = [
                'jnais' => $D1_JOUR,
                'mnais' => $D1_MOIS,
                'anais' => $D1_ANNEE,
                'a' => $D2,
                'CPNaiss' => $D4,
                'sous_jnais' => $CO_D1_JOUR,
                'sous_mnais' => $CO_D1_MOIS,
                'sous_anais' => $CO_D1_ANNEE,
                'sous_a' => $CO_D2,
                'departement' => $CO_D4,
                'jle3' => (new DateTime())->format('d'),
                'mle3' => (new DateTime())->format('m'),
                'ale3' => (new DateTime())->format('Y'),
                'profession_1' => $PRO,
                'profession_2' => $PRO,
                'mail' => $M1,
                'Adresse' => $A1,
                'CP' => $A2,
                'Ville' => $A3,
                'jour' => (new DateTime())->format('d'),
                'mois' => (new DateTime())->format('m'),
                'annee' => (new DateTime())->format('Y'),
                'nomSCPI' => 'EFIMMO',
            ];
            break;
        case 'PRIMONIAL-SERENIPIERRE.pdf': //ON A CREER DES CHAMPS
            $fields = [
                'NOM' => $N1,
                'PRENOM' => $N2,
                'NOM_NAISSANCE' => $N0,
                'ADRESSE' => $A1,
                'CP' => $A2,
                'VILLE' => $A3,
                'PAYS' => $A4,
                'J_DATE_NAISSANCE' => $D1_JOUR,
                'M_DATE_NAISSANCE' => $D1_MOIS,
                'A_DATE_NAISSANCE' => $D1_ANNEE,
                'DEP_NAISSANCE' => $D3,
                'VILLE_NAISSANCE' => $D2 . ' ' . $D4,
                'NAT' => $NA,
                'EMAIL' => $M1,
                'NUM_FISCAL' => $NF,
                'CO_NOM' => $CO_N1,
                'CO_PRENOM' => $CO_N2,
                'CO_NOM_NAISSANCE' => $CO_N0,
                'CO_ADRESSE' => $CO_A1,
                'CO_CP' => $CO_A2,
                'CO_VILLE' => $CO_A3,
                'CO_PAYS' => $CO_A4,
                'CO_J_DATE_NAISSANCE' => $CO_D1_JOUR,
                'CO_M_DATE_NAISSANCE' => $CO_D1_MOIS,
                'CO_A_DATE_NAISSANCE' => $CO_D1_ANNEE,
                'CO_DEP_NAISSANCE' => $CO_D3,
                'CO_VILLE_NAISSANCE' => $CO_D2 . ' ' . $CO_D4,
                'CO_NAT' => $CO_NA,
                'CO_EMAIL' => $CO_M1,
                'CO_NUM_FISCAL' => $CO_NF,
                'LE' => (new DateTime())->format('d/m/Y'),
                'T1' => $N1 . ' ' . $N2,
                'T2' => $N0,
                'DJ1' => $D1_JOUR,
                'DM1' => $D1_MOIS,
                'DA1' => $D1_ANNEE,
                'T3' => $D2,
                'CP1' => $D3,
                'T4' => $NA,
                'T5' => $D4,
                'T6' => $PRO,
                'T8' => $CO_N1 . ' ' . $CO_N2,
                'T9' => $CO_N0,
                'DJ2' => $CO_D1_JOUR,
                'DM2' => $CO_D1_MOIS,
                'DA2' => $CO_D1_ANNEE,
                'T10' => $CO_D2,
                'CP2' => $CO_D3,
                'T11' => $CO_NA,
                'T12' => $CO_D4,
                'T13' => $CO_PRO,
                'T28' => "L et A Finance",
                'T30' => (new DateTime())->format('d/m/Y'),
                'ACF_NOM' => $N1,
                'ACF_PRENOM' => $N2,
                'ACF_DATE_NAISSANCE' => $D1,
                'ACF_LIEU_NAISSANCE' => $D2,
                'ACF_PAYS_NAISSANCE' => $D4,
                'ACF_ADRESSE' => $A1 . ' ' . $A2 . ' ' . $A3,
                'ACF_PAYS' => $D4,
                'ACF_NUM_FISCAL' => $NF,
                'DATE' => (new DateTime())->format('d/m/Y'),
                'SEPA_NOM' => $N1 . ' ' . $N2,
                'SEPA_ADRESSE' => $A1,
                'SEPA_CP' => $A2,
                'SEPA_VILLE' => $A3,
                'SEPA_PAYS' => $A4,
                'SEPA_DATE_J' => (new DateTime())->format('d'),
                'SEPA_DATE_M' => (new DateTime())->format('m'),
                'SEPA_DATE_A' => (new DateTime())->format('Y'),
                'Nom' => $N1,
                'Prenom' => $N2,
                'Produit' => 'SERENIPIERRE',
                'Fournisseur' => 'JURAVENIR',
                'Date' => (new DateTime())->format('d/m/Y'),
            ];
            break;
        case 'PRIMONIAL-TARGET+.pdf': //ON A RENOMMER TOUT LES CHAMPS
            $fields = [
                'NOM' => $N1,
                'PRENOM' => $N2,
                'NOM_NAISSANCE' => $N0,
                'ADRESSE' => $A1,
                'CP' => $A2,
                'VILLE' => $A3,
                'PAYS' => $A4,
                'J_DATE_NAISSANCE' => $D1_JOUR,
                'M_DATE_NAISSANCE' => $D1_MOIS,
                'A_DATE_NAISSANCE' => $D1_ANNEE,
                'DEP_NAISSANCE' => $D3,
                'VILLE_NAISSANCE' => $D2 . ' ' . $D4,
                'NAT' => $NA,
                'EMAIL' => $M1,
                'CO_NOM' => $CO_N1,
                'CO_PRENOM' => $CO_N2,
                'CO_NOM_NAISSANCE' => $CO_N0,
                'CO_ADRESSE' => $CO_A1,
                'CO_CP' => $CO_A2,
                'CO_VILLE' => $CO_A3,
                'CO_PAYS' => $CO_A4,
                'CO_J_DATE_NAISSANCE' => $CO_D1_JOUR,
                'CO_M_DATE_NAISSANCE' => $CO_D1_MOIS,
                'CO_A_DATE_NAISSANCE' => $CO_D1_ANNEE,
                'CO_DEP_NAISSANCE' => $CO_D3,
                'CO_VILLE_NAISSANCE' => $CO_D2 . ' ' . $CO_D4,
                'CO_NAT' => $CO_NA,
                'CO_EMAIL' => $CO_M1,
                'LE' => (new DateTime())->format('d/m/Y'),
                'T1' => $N1 . ' ' . $N2,
                'T2' => $N0,
                'DJ1' => $D1_JOUR,
                'DM1' => $D1_MOIS,
                'DA1' => $D1_ANNEE,
                'T3' => $D2,
                'CP1' => $D3,
                'T4' => $NA,
                'T5' => $D4,
                'T6' => $PRO,
                'T8' => $CO_N1 . ' ' . $CO_N2,
                'T9' => $CO_N0,
                'DJ2' => $CO_D1_JOUR,
                'DM2' => $CO_D1_MOIS,
                'DA2' => $CO_D1_ANNEE,
                'T10' => $CO_D2,
                'CP2' => $CO_D3,
                'T11' => $CO_NA,
                'T12' => $CO_D4,
                'T13' => $CO_PRO,
                'T28' => "L et A Finance",
                'T30' => (new DateTime())->format('d/m/Y'),
                'ACF_NOM' => $N1,
                'ACF_NOM_NAISSANCE' => $N0,
                'ACF_PRENOM' => $N2,
                'ACF_DATE_NAISSANCE' => $D1,
                'CO_ACF_NOM' => $CO_N1,
                'CO_ACF_NOM_NAISSANCE' => $CO_N0,
                'CO_ACF_PRENOM' => $CO_N2,
                'CO_ACF_DATE_NAISSANCE' => $CO_D1,
                'ACF_LIEU_NAISSANCE' => $D2,
                'ACF_PAYS_NAISSANCE' => $D4,
                'ACF_ADRESSE' => $A1 . ' ' . $A2 . ' ' . $A3,
                'ACF_PAYS' => $D4,
                'ACF_NUM_FISCAL' => $NF,
                'AS_NOM' => $N1,
                'AS_PRENOM' => $N2,
                'CO_AS_NOM' => $CO_N1,
                'CO_AS_PRENOM' => $CO_N2,
                'FDC_NOM' => $N1,
                'FDC_PRENOM' => $N2,
                'FDC_DATE' => (new DateTime())->format('d/m/Y'),
            ];
            break;
    }
    $pdfm = new FPDM('../' . $pdf);
    $pdfm->Load($fields, true); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
    $pdfm->Merge();
    if (count($pdfs) > 1) {
        $zip->addFromString($pdf, $pdfm->Output("S"));
    } else {
        $pdfm->Output();
        die();
    }
}
$zip->close();
rename($tmp_file,'doc.zip');
header("Content-type: application/zip");
header("Content-Disposition: attachment; filename=doc.zip");
header("Content-length: " . filesize("doc.zip"));
header("Pragma: no-cache");
header("Expires: 0");
readfile("doc.zip");
