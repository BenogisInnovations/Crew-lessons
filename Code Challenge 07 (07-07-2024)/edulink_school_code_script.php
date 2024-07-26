<?php

// The Edulink School Code Class
class EduLinkSchoolCode {

    // This function returns the edulink school code for client schools
    public function getSchoolCode($region, $schoolType, $schoolPrefix){ 
        // STEP 1: Get the region the school is in
        // STEP 2: Get the school type | Private or Public
        // STEP 3: Get the school character prefix
        // STEP 4: check if school code exists and append the @edulink domain
        $schoolCode = $region . $schoolType . $schoolPrefix;
        $edulinkDomain = '@edulink'; // edulink domain
        $SchoolfullCode = $schoolCode . $edulinkDomain;// concatenating $schoolcode and edulink domain to get my full code for a school
        return $SchoolfullCode;

    }
    
    // This function will return the two character region code. eg: Ashanti Region = AK
    // AK, GA, BA, WR, ER, UW, NR, AR, SR, OR, CR, WN, UE, NE, VR, BE
    public function getSchoolRegion(string $school_region){
        // we have passed the school region to get each word capitalized by first letter
        $school_region = ucwords($school_region); 
        // I'm using switch cases to get only the abbrev of a region
        switch ($school_region) {
            case 'Ashanti Region':
                return 'AK';
                break;
            case 'Greater Accra':
                return 'GA';
                break;
            case 'Bono Ahafo':
                return 'BA';
                break; 
            case 'Western Region':
                return 'WR';
                break; 
            case 'Eastern Region':
                return 'ER';
                break;  
            case 'Upper West':
                return 'WA';
                break;  
            case 'Upper East':
                return 'UE';
                break; 
            case 'Northern Region':
                return 'NR';
                break;   
            case 'Ahafo Region':
                return 'AR';
                break;
            case 'Savanah Region':
                return 'SR';
                break; 
            case 'Oti Region':
                return 'OR';
                break;  
            case 'Cental Region':
                return 'CR';
                break;
            case 'Western North':
                return 'WN';
                break; 
            case 'Volta Region':
                return 'VR';
                break;  
            case 'North East':
                return 'NE';
                break;
            case 'Bono East':
                return 'BE';
                break;
            default:
                return 'invalid region name';
                break;
        }
    }
    
    // This function will return the school type being 1 for Private and 2 for Public
    Public function getSchoolType(string $type){
        // we have passed the school region to get each word capitalized by first letter
        $type = strtolower($type);

        if ($type == 'private') {
            return 1;
        } elseif( $type == 'public') {
            return 2;
        } else {
            return 'invalid school type';
        }
    }
    
    // This function will return the 3 to 5 character school prefix eg: TPMAJ
    public function getSchoolPrefix($schoolName){
        // I'm using switch cases to get only the abbrev of a schoolname
        switch ($schoolName) {
            case 'Grace Action Faith':
                return 'Gafis';
                break;
            case 'Adventist Preparatory School':
                return 'APS';
                break;
            case 'New World Living School':
                return 'NWLS';
                break;
            default:
                return 'invalid school prefix';
    }
    }
    // This function will returnthe school code verified with the edulink domain
     Public function verifySchoolCodeAndAppendDomain($schoolCode){
    
    }
}


// the output
$edulink = new EduLinkSchoolCode();
$region = "Ashanti Region";
$schoolType = "Private";
$schoolPrefix = "Grace Action Faith";

// Get the full school code
$SchoolfullCode = $edulink->getSchoolCode($region, $schoolType, $schoolPrefix);
echo $SchoolfullCode; // this is how it's suppose to appear  AK1GAF@edulink

?>
